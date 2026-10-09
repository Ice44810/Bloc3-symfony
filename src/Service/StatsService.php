<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use App\Service\TransactionService;

/**
 * StatsService - Centralise les statistiques pour le Dashboard et les API de données
 */
class StatsService
{
    // PHP 8+ : Promotion de propriété dans le constructeur
    public function __construct(
        private readonly TransactionService $transactionService,
        private readonly LoggerInterface $logger
    ) {}

    /**
     * Obtenir le solde actuel de l'utilisateur
     */
    public function getBalance(int $userId): array
    {
        try {
            $balance = $this->transactionService->getBalance($userId);
            return [
                'success' => true,
                'balance' => (float)$balance
            ];
        } catch (\Exception $e) {
            $this->logger->error("Erreur balance (User: $userId): " . $e->getMessage());
            return ['success' => false, 'error' => 'Impossible de récupérer le solde'];
        }
    }

    /**
     * Compile toutes les données nécessaires au Dashboard
     */
    public function getDashboardData(int $userId): array
    {
        try {
            // Récupérer le solde
            $balance = 0.0;
            try {
                $balance = (float)$this->transactionService->getBalance($userId);
            } catch (\Exception $e) {
                $this->logger->error("Erreur solde dans Dashboard (User: $userId): " . $e->getMessage());
            }

            // Récupérer les totaux
            $totals = ['totalIncome' => 0.0, 'totalExpense' => 0.0];
            try {
                $totalsData = $this->transactionService->getTotals($userId);
                if (is_array($totalsData)) {
                    $totals = $totalsData;
                }
            } catch (\Exception $e) {
                $this->logger->error("Erreur totaux dans Dashboard (User: $userId): " . $e->getMessage());
            }

            // Récupérer les transactions récentes
            $recentTransactions = [];
            try {
                $recentTransactions = $this->transactionService->getRecentTransactions($userId, 5);
            } catch (\Exception $e) {
                $this->logger->error("Erreur transactions récentes dans Dashboard (User: $userId): " . $e->getMessage());
            }

            // Récupérer l'évolution quotidienne (7 jours)
            $dailyEvolution7 = [];
            try {
                $dailyEvolution7 = $this->transactionService->getDailyEvolution($userId, 7);
            } catch (\Exception $e) {
                $this->logger->error("Erreur évolution 7j dans Dashboard (User: $userId): " . $e->getMessage());
            }

            return [
                'success' => true,
                'balance' => $balance,
                'totalIncome' => $totals['totalIncome'],
                'totalExpense' => $totals['totalExpense'],
                'recent_transactions' => $recentTransactions,
                'daily_evolution_7' => $dailyEvolution7,
                'currency' => 'EUR',
                'rewards' => 0 // Valeur par défaut si non gérée
            ];

        } catch (\Exception $e) {
            $this->logger->critical("Crash complet Dashboard (User: $userId): " . $e->getMessage());
            return [
                'success' => false,
                'error' => 'Données du tableau de bord indisponibles',
                'balance' => 0.0,
                'totalIncome' => 0.0,
                'totalExpense' => 0.0
            ];
        }
    }

    /**
     * Obtenir l'évolution mensuelle (Graphiques)
     */
    public function getMonthlyEvolution(int $userId, int $limit = 6): array
    {
        try {
            $evolution = $this->transactionService->getMonthlyEvolution($userId, $limit);
            return [
                'success' => true,
                'evolution' => $evolution
            ];
        } catch (\Exception $e) {
            $this->logger->error("Erreur stats évolution (User: $userId): " . $e->getMessage());
            return ['success' => false, 'error' => 'Erreur lors du calcul de l\'évolution'];
        }
    }

    /**
     * Traitement sécurisé de la recharge de compte
     */
    public function processTopUp(int $userId, float $amount): array
    {
        if ($amount <= 0) {
            return ['success' => false, 'error' => 'Le montant doit être supérieur à 0'];
        }

        try {
            // On délègue la création de la transaction au service dédié
            $result = $this->transactionService->createTransaction($userId, [
                'title' => 'Recharge compte (Top-up)',
                'amount' => $amount,
                'type' => 'income',
                'category_id' => null, // Pas de catégorie spécifique pour une recharge
                'created_at' => new \DateTimeImmutable()
            ]);

            if ($result['success']) {
                // On retourne immédiatement le nouveau solde pour mettre à jour le JS sans recharger
                return $this->getBalance($userId);
            }

            return $result;
        } catch (\Exception $e) {
            $this->logger->alert("Échec Top-Up (User: $userId, Amount: $amount): " . $e->getMessage());
            return ['success' => false, 'error' => 'Le rechargement a échoué'];
        }
    }
}
