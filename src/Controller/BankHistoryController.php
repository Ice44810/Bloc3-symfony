<?php

namespace App\Controller;

use App\Service\TransactionService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BankHistoryController extends BaseController
{
    #[Route('/bank-history', name: 'app_bank_history')]
    public function index(): Response
    {
        return $this->render('bankhistory/index.html.twig');
    }

    /**
     * API pour récupérer les transactions (utilisée par loadTransactions)
     */
    #[Route('/api/transactions', name: 'get_transactions', methods: ['GET'])]
    public function getTransactions(Request $request, TransactionService $transactionService): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $startDate = null;
        $endDate = null;

        if ($request->query->has('start_date') && $request->query->get('start_date')) {
            $startDate = \DateTime::createFromFormat('Y-m-d', $request->query->get('start_date'));
        }

        if ($request->query->has('end_date') && $request->query->get('end_date')) {
            $endDate = \DateTime::createFromFormat('Y-m-d', $request->query->get('end_date'));
            $endDate->setTime(23, 59, 59);
        }

        $transactions = $transactionService->getRecentTransactions($user->getId(), 50, $startDate, $endDate);

        $transactionsData = array_map(fn($t) => $t->toJSON(), $transactions);

        return $this->json([
            'success' => true,
            'transactions' => $transactionsData
        ]);
    }
}
