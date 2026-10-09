<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Card;
use App\Service\TransactionService;
use App\Service\StatsService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TopupController extends AbstractController
{
    // Constantes de validation
    private const MIN_AMOUNT = 10;
    private const MAX_AMOUNT = 5000;

    #[Route('/recharger', name: 'app_topup')]
    public function index(): Response
    {
        return $this->render('topup/index.html.twig');
    }

    #[Route('/api/dashboard-data', name: 'get_dashboard', methods: ['GET'])]
    public function getDashboardData(StatsService $statsService): JsonResponse
    {
        /** @var User $user */
        $user = $this->getUser();

        if (!$user) {
            return new JsonResponse([
                'success' => false,
                'balance' => 0,
                'totalIncome' => 0,
                'totalExpense' => 0,
                'daily_evolution_7' => []
            ], 200);
        }

        $result = $statsService->getDashboardData($user->getId());

        return new JsonResponse($result);
    }

    #[Route('/api/user-cards', name: 'get_user_cards', methods: ['GET'])]
    public function getUserCards(EntityManagerInterface $em): JsonResponse
    {
        /** @var User $user */
        $user = $this->getUser();

        if (!$user) {
            return new JsonResponse(['success' => false, 'error' => 'Utilisateur non connecté'], 403);
        }

        $cards = $em->getRepository(Card::class)->findBy(['user' => $user]);

        $cardsData = array_map(function(Card $card) {
            return [
                'id' => $card->getId(),
                'last4' => $card->getLast4Digits(),
                'brand' => $card->getCardBrand(),
                'expiry' => $card->getExpiryDate(),
                'holder' => $card->getCardHolderName()
            ];
        }, $cards);

        return new JsonResponse(['cards' => $cardsData]);
    }

    #[Route('/api/process-topup', name: 'process_topup', methods: ['POST'])]
    public function processTopup(Request $request, EntityManagerInterface $em, TransactionService $transactionService): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $amount = isset($data['amount']) ? (float) $data['amount'] : 0;
        $pin = $data['pin'] ?? '';
        $cardId = $data['card_id'] ?? null;

        /** @var User $user */
        $user = $this->getUser();

        // 1. Vérifications de sécurité
        if (!$user) {
            return new JsonResponse(['success' => false, 'error' => 'Utilisateur non connecté'], 403);
        }

        // 2. Validation du montant
        if ($amount <= 0) {
            return new JsonResponse(['success' => false, 'error' => 'Le montant doit être supérieur à 0'], 400);
        }

        if ($amount < self::MIN_AMOUNT) {
            return new JsonResponse(['success' => false, 'error' => 'Le montant minimum est de ' . self::MIN_AMOUNT . '€'], 400);
        }

        if ($amount > self::MAX_AMOUNT) {
            return new JsonResponse(['success' => false, 'error' => 'Le montant maximum est de ' . self::MAX_AMOUNT . '€'], 400);
        }

        // 3. Vérification de la carte (si sélectionnée)
        if ($cardId) {
            $card = $em->getRepository(Card::class)->find($cardId);
            if (!$card || $card->getUser()->getId() !== $user->getId()) {
                return new JsonResponse(['success' => false, 'error' => 'Carte invalide'], 400);
            }
        }

        // 4. Vérification du code PIN
        $storedPin = $user->getSecretPin();
        if ($storedPin !== null && $storedPin !== $pin) {
            return new JsonResponse(['success' => false, 'error' => 'Code PIN incorrect'], 403);
        }

        // 5. Créer une transaction de type "income" pour le topup
        try {
            $result = $transactionService->createTransaction($user->getId(), [
                'title' => 'Rechargement de compte',
                'amount' => $amount,
                'type' => 'income',
            ]);

            if (!$result['success']) {
                return new JsonResponse([
                    'success' => false,
                    'error' => $result['error'] ?? 'Erreur lors de la création de la transaction'
                ], 500);
            }

            $newBalance = $transactionService->getBalance($user->getId());

            return new JsonResponse([
                'success' => true,
                'balance' => $newBalance,
                'message' => 'Recharge réussie !'
            ]);
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false, 'error' => 'Erreur lors de la mise à jour du solde'], 500);
        }
    }
}
