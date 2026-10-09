<?php

namespace App\Controller;

use App\Entity\Card;
use App\Service\CardService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CardController extends AbstractController
{
    private CardService $cardService;

    private EntityManagerInterface $em;

    public function __construct(
        CardService $cardService,

        EntityManagerInterface $em
    ) {
        $this->cardService = $cardService;

        $this->em = $em;
    }

    #[Route('/card', name: 'app_card_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('card/index.html.twig');
    }

    #[Route('/card/new', name: 'app_card_new', methods: ['GET'])]
    public function new(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        return $this->render('card/new.html.twig');
    }

    #[Route('/api/cards', name: 'get_cards', methods: ['GET'])]
    public function getCards(): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) return $this->json(['error' => 'Non autorisé'], 401);

        $cards = $this->cardService->getCards($user);
        
        $cardsData = array_map(function($card) {
            [$month, $year] = explode('/', $card->getExpiryDate());
            return [
                'id' => $card->getId(),
                'card' => [
                    'brand' => strtolower($card->getCardBrand()),
                    'last4' => $card->getLast4Digits(),
                    'exp_month' => (int)$month,
                    'exp_year' => (int)('20' . $year),
                ]
            ];
        }, $cards);

        return $this->json([
            'success' => true,
            'data' => $cardsData
        ], Response::HTTP_OK);
    }

#[Route('/api/cards', name: 'create_card', methods: ['POST'])]
    public function createCard(Request $request): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) return $this->json(['error' => 'Non autorisé'], 401);

        $data = json_decode($request->getContent(), true);

        if (empty($data['card_holder_name']) || empty($data['last_4_digits']) || empty($data['expiry_date'])) {
            return $this->json([
                'success' => false,
                'message' => 'Informations de carte incomplètes'
            ], Response::HTTP_BAD_REQUEST);
        }

        // Conversion intelligente de la date (pour m/y)
        $expiryRaw = $data['expiry_date'];
        $dateTime = \DateTime::createFromFormat('Y-m-d', $expiryRaw) 
                    ?: \DateTime::createFromFormat('Y-m', $expiryRaw);

        if ($dateTime) {
            $data['expiry_date'] = $dateTime->format('m/y');
        }

        // Valeur par défaut pour la marque
        $data['card_brand'] = $data['card_brand'] ?? 'visa';

        $result = $this->cardService->createCard($user, $data);

        return $this->json($result, $result['success'] ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
    }

   #[Route('/api/cards/{id}', name: 'get_card', methods: ['GET'])]
public function getCard(int $id): JsonResponse
{
    $user = $this->getUser();
    $card = $this->cardService->getCardById($id, $user);

    if (!$card) {
        return $this->json(['success' => false, 'message' => 'Carte non trouvée'], 404);
    }

    // On récupère les données de base de la carte
    $cardData = $card->toJSON();

    // On injecte les règles de service (valeurs réelles de la BDD ou constantes)
    $cardData['min_recharge'] = 10;
    $cardData['recharge_limit'] = 2000;
    $cardData['payment_limit'] = 2000;
    $cardData['daily_limit'] = 2000;
    
    // S'assure que la marque est présente (si non définie dans toJSON)
    if (!isset($cardData['card_brand'])) {
        $cardData['card_brand'] = $card->getCardBrand(); // ou une logique de détection
    }

    return $this->json([
        'success' => true, 
        'card' => $cardData
    ], 200);
}

    #[Route('/api/cards/{id}', name: 'update_card', methods: ['PUT'])]
    public function updateCard(Request $request, int $id): JsonResponse
    {
        $user = $this->getUser();
        $data = json_decode($request->getContent(), true);
        $result = $this->cardService->updateCard($id, $user, $data);

        return $this->json($result, $result['success'] ? 200 : 400);
    }

    #[Route('/api/cards/{id}', name: 'delete_card', methods: ['DELETE'])]
    public function deleteCard(int $id): JsonResponse
    {
        $user = $this->getUser();
        $result = $this->cardService->deleteCard($id, $user);

        return $this->json($result, $result['success'] ? 200 : 404);
    }

    // Pages de rendu Twig supplémentaires
    #[Route('/card/info', name: 'app_card_info', methods: ['GET'])]
    public function info(): Response
    {
        return $this->render('card/info.html.twig');
    }

   #[Route('/card/{id}/increase-limit', name: 'app_card_increase_limit')]
    public function increaseLimit(int $id): Response 
    {
        return $this->render('card/info.html.twig', ['card_id' => $id, 'action' => 'increase_limit']);
    }

    #[Route('/card/{id}/manage-recharge', name: 'app_card_manage_recharge')]
    public function manageRecharge(int $id): Response 
    {
        return $this->render('card/info.html.twig', ['card_id' => $id, 'action' => 'manage_recharge']);
    }
}
