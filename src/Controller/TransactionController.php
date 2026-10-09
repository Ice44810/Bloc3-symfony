<?php

namespace App\Controller;

use App\Service\TransactionService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransactionController extends BaseController
{
    private TransactionService $transactionService;

    public function __construct(TransactionService $transactionService)
    {
        $this->transactionService = $transactionService;
    }

    #[Route('/transactions', name: 'app_transactions_view', methods: ['GET'])]
    public function transactionsView(): Response
    {
        return $this->render('transactions/index.html.twig');
    }

    /**
     * Obtenir toutes les transactions de l'utilisateur
     * GET /api/transactions
     */
    #[Route('/api/transactions', name: 'get_transactions', methods: ['GET'])]
    public function getTransactions(Request $request): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $filters = [];

        if ($request->query->has('categoryId')) {
            $filters['categoryId'] = $request->query->get('categoryId');
        } elseif ($request->query->has('category_id')) {
            $filters['categoryId'] = $request->query->get('category_id');
        }

        if ($request->query->has('type') && $request->query->get('type')) {
            $filters['type'] = $request->query->get('type');
        }

        if ($request->query->has('period') && $request->query->get('period')) {
            $filters['period'] = $request->query->get('period');
        }

        $transactions = $this->transactionService->getTransactions($user->getId(), $filters);

        // Retourner directement le tableau pour compatibilité avec le frontend existant
        return $this->json($transactions);
    }

    /**
     * Obtenir une transaction par ID
     * GET /api/transactions/{id}
     */
    #[Route('/api/transactions/{id}', name: 'get_transaction', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function getTransaction(int $id): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $transaction = $this->transactionService->getTransactionById($id, $user->getId());

        if (!$transaction) {
            return $this->json(['error' => 'Transaction non trouvée'], Response::HTTP_NOT_FOUND);
        }

        return $this->json(['transaction' => $transaction]);
    }

    /**
     * Créer une nouvelle transaction
     * POST /api/transactions
     */
    #[Route('/api/transactions', name: 'create_transaction', methods: ['POST'])]
    public function createTransaction(Request $request): JsonResponse
    {
        $user = $this->getUserOrThrow();
        $data = json_decode($request->getContent(), true);

        // Adaptation pour le service qui attend category_id ou categoryId
        if (isset($data['category_id'])) {
            $data['categoryId'] = $data['category_id'];
        }

        $result = $this->transactionService->createTransaction($user->getId(), $data);

        if ($result['success']) {
            return $this->json($result, Response::HTTP_CREATED);
        }

        return $this->json($result, Response::HTTP_BAD_REQUEST);
    }

    /**
     * Mettre à jour une transaction
     * PUT /api/transactions/{id}
     */
    #[Route('/api/transactions/{id}', name: 'update_transaction', methods: ['PUT', 'POST'], requirements: ['id' => '\d+'])]
    public function updateTransaction(Request $request, int $id): JsonResponse
    {
        $user = $this->getUserOrThrow();
        $data = json_decode($request->getContent(), true);

        if (isset($data['category_id'])) {
            $data['categoryId'] = $data['category_id'];
        }

        $result = $this->transactionService->updateTransaction($id, $user->getId(), $data);

        if ($result['success']) {
            return $this->json($result);
        }

        return $this->json($result, Response::HTTP_BAD_REQUEST);
    }

    /**
     * Supprimer une transaction
     * DELETE /api/transactions/{id}
     */
    #[Route('/api/transactions/{id}', name: 'delete_transaction', methods: ['DELETE'], requirements: ['id' => '\d+'])]
    public function deleteTransaction(int $id): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $result = $this->transactionService->deleteTransaction($id, $user->getId());

        if ($result['success']) {
            return $this->json($result);
        }

        return $this->json($result, Response::HTTP_NOT_FOUND);
    }

    /**
     * Obtenir le solde actuel
     * GET /api/balance
     */
    #[Route('/api/balance', name: 'api_balance', methods: ['GET'])]
    public function getBalance(): JsonResponse
    {
        $user = $this->getUserOrThrow();

        // On suppose que getBalance retourne un float ou int
        $balance = $this->transactionService->getBalance($user->getId());

        return $this->json(['balance' => $balance]);
    }
}
