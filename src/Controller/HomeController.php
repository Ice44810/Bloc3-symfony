<?php

namespace App\Controller;

use App\Service\RecipientService;
use App\Service\StatsService;
use App\Service\TransactionService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends BaseController
{
    private StatsService $statsService;
    private TransactionService $transactionService;
    private RecipientService $recipientService;

    public function __construct(
        StatsService $statsService,
        TransactionService $transactionService,
        RecipientService $recipientService
    ) {
        $this->statsService = $statsService;
        $this->transactionService = $transactionService;
        $this->recipientService = $recipientService;
    }

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Redirection vers le login si non connecté
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        $user = $this->getUserOrThrow();

        // Récupérer les bénéficiaires récents
        $recipients = $this->recipientService->getRecipients($user);
        // Limiter à 6
        $recentRecipients = array_slice($recipients, 0, 6);

        // Données du tableau de bord
        $dashboardData = $this->statsService->getDashboardData($user->getId());

        return $this->render('home/index.html.twig', [
            'user' => $user,
            'recentRecipients' => $recentRecipients,
            'dashboard' => $dashboardData['success'] ? $dashboardData : ['balance' => 0, 'rewards' => 0]
        ]);
    }

    #[Route('/home', name: 'app_home_redirect')]
    public function homeRedirect(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/api/home', name: 'api_home_data', methods: ['GET'])]
    public function getHomeData(): JsonResponse
    {
        $user = $this->getUserOrThrow();

        // Données du tableau de bord
        $dashboardData = $this->statsService->getDashboardData($user->getId());

        // Dernières transactions (récupérées via TransactionService pour plus de contrôle)
        // On suppose que getTransactions supporte la pagination ou limit
        $transactions = $this->transactionService->getTransactions($user->getId(), ['limit' => 5]);

        // Construire la réponse JSON
        $data = [
            'username' => $user->getFullName() ?: $user->getEmail(),
            'avatar' => $user->getAvatar(),
            'balance' => (float)($dashboardData['balance'] ?? 0),
            'currency' => '€', // Devise par défaut
            'rewards' => 0, // À implémenter si système de points
            'totalIncome' => (float)($dashboardData['totalIncome'] ?? 0),
            'totalExpense' => (float)($dashboardData['totalExpense'] ?? 0),
            'lastTransactions' => array_map(function($t) {
                return [
                    'id' => $t['id'],
                    'title' => $t['title'],
                    'amount' => (float)$t['amount'],
                    'date' => $t['created_at'],
                    'type' => $t['type']
                ];
            }, $transactions)
        ];

        return $this->json($data);
    }

    // Alias pour compatibilité avec l'ancien nom de route si utilisé ailleurs
    #[Route('/get-home-data', name: 'get_home_data', methods: ['GET'])]
    public function getHomeDataAlias(): JsonResponse
    {
        return $this->getHomeData();
    }
}
