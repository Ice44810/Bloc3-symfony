<?php

namespace App\Controller;

use App\Service\StatsService;
use App\Service\TransactionService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatsController extends BaseController
{
    private StatsService $statsService;
    private TransactionService $transactionService;

    public function __construct(StatsService $statsService, TransactionService $transactionService)
    {
        $this->statsService = $statsService;
        $this->transactionService = $transactionService;
    }

    #[Route('/stats', name: 'app_stats_view', methods: ['GET'])]
    public function statsView(): Response
    {
        return $this->render('stats/index.html.twig');
    }

    #[Route('/topup', name: 'app_topup_view', methods: ['GET'])]
    public function topupView(): Response
    {
        return $this->render('topup/index.html.twig');
    }

    /**
     * Obtenir les données du tableau de bord
     * GET /api/dashboard
     */
    #[Route('/api/dashboard', name: 'get_dashboard', methods: ['GET'])]
    public function getDashboard(): JsonResponse
    {
        $user = $this->getUserOrThrow();
        $result = $this->statsService->getDashboardData($user->getId());

        // Retourner directement l'objet pour compatibilité avec le frontend
        return $this->json($result);
    }

    /**
     * Obtenir les statistiques des dépenses par catégorie
     * GET /api/stats/expenses
     */
    #[Route('/api/stats/expenses', name: 'get_expense_stats', methods: ['GET'])]
    public function getExpenseStats(Request $request): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $period = $request->query->get('period', 'month');
        $result = $this->statsService->getExpenseStats($user->getId(), $period);

        return $this->jsonSuccess($result);
    }

    /**
     * Obtenir les statistiques des revenus par catégorie
     * GET /api/stats/income
     */
    #[Route('/api/stats/income', name: 'get_income_stats', methods: ['GET'])]
    public function getIncomeStats(Request $request): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $period = $request->query->get('period', 'month');
        $result = $this->statsService->getIncomeStats($user->getId(), $period);

        return $this->jsonSuccess($result);
    }

    /**
     * Obtenir l'évolution mensuelle
     * GET /api/stats/evolution
     */
    #[Route('/api/stats/evolution', name: 'get_monthly_evolution', methods: ['GET'])]
    public function getMonthlyEvolution(Request $request): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $months = (int) $request->query->get('months', 12);
        $result = $this->statsService->getMonthlyEvolution($user->getId(), $months);

        return $this->jsonSuccess($result);
    }

    /**
     * Traiter une recharge (top-up)
     * POST /api/topup
     */
    #[Route('/api/topup', name: 'process_topup', methods: ['POST'])]
    public function processTopUp(Request $request): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $data = json_decode($request->getContent(), true);

        if (!isset($data['amount'])) {
            return $this->jsonError('Montant requis');
        }

        $amount = (float) $data['amount'];

        // Validation du montant
        if ($amount <= 0) {
            return $this->jsonError('Le montant doit être supérieur à 0');
        }

        $result = $this->statsService->processTopUp(
            $user->getId(),
            $amount
        );

        if ($result['success']) {
            return $this->jsonSuccess([
                'balance' => $result['balance'] ?? 0,
                'message' => 'Recharge effectuée avec succès'
            ], null, Response::HTTP_CREATED);
        }

        return $this->jsonError($result['error'] ?? 'Erreur lors de la recharge');
    }
}
