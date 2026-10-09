<?php

namespace App\Service;

use App\Entity\Transaction;
use App\Entity\User;
use App\Repository\TransactionRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class TransactionService
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly TransactionRepository $transactionRepository,
        private readonly CategoryRepository $categoryRepository,
        private readonly LoggerInterface $logger,
        private readonly ValidatorInterface $validator
    ) {}

    /**
     * Créer une nouvelle transaction de manière sécurisée
     */
    public function createTransaction(int $userId, array $data): array
    {
        try {
            $user = $this->entityManager->getRepository(User::class)->find($userId);
            if (!$user) {
                return ['success' => false, 'error' => 'Utilisateur non trouvé'];
            }

            $transaction = new Transaction();
            $transaction->setUser($user);
            $transaction->setTitle($data['title'] ?? 'Sans titre');
            $transaction->setAmount((float) ($data['amount'] ?? 0));
            $transaction->setType($data['type'] ?? 'expense');
            $transaction->setCreatedAt(new \DateTime()); // Sécurité : date forcée ici

            if (!empty($data['category_id'])) {
                $category = $this->categoryRepository->find($data['category_id']);
                if ($category) {
                    $transaction->setCategory($category);
                }
            }

            // Validation logicielle
            $errors = $this->validator->validate($transaction);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return ['success' => false, 'error' => implode(', ', $errorMessages)];
            }

            $this->entityManager->persist($transaction);
            $this->entityManager->flush();

            return [
                'success' => true,
                'transaction' => $transaction->toJSON()
            ];
        } catch (\Exception $e) {
            // On log l'erreur réelle pour le dev, mais on reste vague pour l'utilisateur
            $this->logger->error("Erreur création transaction : " . $e->getMessage());
            return ['success' => false, 'error' => 'Erreur lors de l\'enregistrement'];
        }
    }

    /**
     * Récupère toutes les transactions de l'utilisateur avec filtres optionnels
     */
    public function getTransactions(int $userId, array $filters = []): array
    {
        $qb = $this->transactionRepository->createQueryBuilder('t')
            ->leftJoin('t.category', 'c')
            ->addSelect('c')
            ->where('t.user = :userId')
            ->setParameter('userId', $userId)
            ->orderBy('t.createdAt', 'DESC');

        if (!empty($filters['categoryId'])) {
            $qb->andWhere('c.id = :categoryId')
               ->setParameter('categoryId', $filters['categoryId']);
        }

        if (!empty($filters['type'])) {
            $qb->andWhere('t.type = :type')
               ->setParameter('type', $filters['type']);
        }

        // Filtres de période améliorés
        if (!empty($filters['period'])) {
            $date = new \DateTime();
            if ($filters['period'] === 'today') {
                $date->setTime(0, 0, 0);
            } elseif ($filters['period'] === 'week') {
                $date->modify('-7 days');
            } elseif ($filters['period'] === 'month') {
                $date->modify('first day of this month')->setTime(0, 0, 0);
            } elseif ($filters['period'] === 'year') {
                $date->modify('first day of January this year')->setTime(0, 0, 0);
            }
            $qb->andWhere('t.createdAt >= :date')
               ->setParameter('date', $date);
        }

        $transactions = $qb->getQuery()->getResult();

        return array_map(fn($t) => $t->toJSON(), $transactions);
    }

    /**
     * Récupère une transaction par ID pour un utilisateur donné
     */
    public function getTransactionById(int $id, int $userId): ?Transaction
    {
        return $this->transactionRepository->findOneBy([
            'id' => $id,
            'user' => $userId
        ]);
    }

    /**
     * Met à jour une transaction existante
     */
    public function updateTransaction(int $id, int $userId, array $data): array
    {
        try {
            $transaction = $this->getTransactionById($id, $userId);
            if (!$transaction) {
                return ['success' => false, 'message' => 'Transaction non trouvée'];
            }

            if (isset($data['title'])) {
                $transaction->setTitle($data['title']);
            }
            if (isset($data['amount'])) {
                $transaction->setAmount((float) $data['amount']);
            }
            if (isset($data['type'])) {
                $transaction->setType($data['type']);
            }

            if (!empty($data['category_id'])) {
                $category = $this->categoryRepository->find($data['category_id']);
                if ($category) {
                    $transaction->setCategory($category);
                }
            }

            // Validation logicielle
            $errors = $this->validator->validate($transaction);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return ['success' => false, 'error' => implode(', ', $errorMessages)];
            }

            $this->entityManager->flush();

            return [
                'success' => true,
                'transaction' => $transaction->toJSON()
            ];
        } catch (\Exception $e) {
            $this->logger->error("Erreur mise à jour transaction : " . $e->getMessage());
            return ['success' => false, 'message' => 'Erreur lors de la mise à jour'];
        }
    }

    /**
     * Supprime une transaction
     */
    public function deleteTransaction(int $id, int $userId): array
    {
        try {
            $transaction = $this->getTransactionById($id, $userId);
            if (!$transaction) {
                return ['success' => false, 'message' => 'Transaction non trouvée'];
            }

            $this->entityManager->remove($transaction);
            $this->entityManager->flush();

            return ['success' => true];
        } catch (\Exception $e) {
            $this->logger->error("Erreur suppression transaction : " . $e->getMessage());
            return ['success' => false, 'message' => 'Erreur lors de la suppression'];
        }
    }

    /**
     * Récupère l'évolution mensuelle
     */
    public function getMonthlyEvolution(int $userId, int $months = 6): array
    {
        return $this->transactionRepository->getMonthlyEvolution($userId, $months);
    }

    /**
     * Récupère des statistiques par catégorie
     */
    public function getStatsByCategory(int $userId, string $type, string $period = 'month'): array
    {
        $date = new \DateTime();
        if ($period === 'month') {
            $date->modify('first day of this month')->setTime(0, 0, 0);
        } elseif ($period === 'week') {
            $date->modify('-7 days');
        } elseif ($period === 'year') {
            $date->modify('first day of January this year')->setTime(0, 0, 0);
        }

        $results = $this->transactionRepository->createQueryBuilder('t')
            ->select('c.name as category_name, SUM(t.amount) as total')
            ->leftJoin('t.category', 'c')
            ->where('t.user = :userId')
            ->andWhere('t.type = :type')
            ->andWhere('t.createdAt >= :date')
            ->setParameter('userId', $userId)
            ->setParameter('type', $type)
            ->setParameter('date', $date)
            ->groupBy('c.name')
            ->having('total > 0')
            ->orderBy('total', 'DESC')
            ->getQuery()
            ->getResult();

        return $results;
    }

    /**
     * Récupère le solde de l'utilisateur via le repository
     */
    public function getBalance(int $userId): float
    {
        return $this->transactionRepository->getBalance($userId);
    }

    public function getRecentTransactions(int $userId, int $limit = 50, ?\DateTimeInterface $startDate = null, ?\DateTimeInterface $endDate = null): array
    {
        return $this->transactionRepository->getRecentTransactions($userId, $limit, $startDate, $endDate);
    }

    /**
     * Récupère les totaux d'entrées et sorties
     */
    public function getTotals(int $userId): array
    {
        return $this->transactionRepository->getTotals($userId);
    }

    /**
     * Récupère l'évolution journalière
     */
    public function getDailyEvolution(int $userId, int $days = 7): array
    {
        return $this->transactionRepository->getDailyEvolution($userId, $days);
    }
}
