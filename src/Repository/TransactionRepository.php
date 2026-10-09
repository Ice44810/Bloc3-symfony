<?php

namespace App\Repository;

use App\Entity\Transaction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Transaction>
 */
class TransactionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Transaction::class);
    }

    /**
     * Calcule le solde d'un utilisateur de manière robuste
     */
    public function getBalance(int $userId): float
    {
        $qb = $this->createQueryBuilder('t')
            ->select('
                SUM(CASE WHEN t.type = :income THEN t.amount ELSE 0 END) as totalIncome,
                SUM(CASE WHEN t.type = :expense THEN t.amount ELSE 0 END) as totalExpense
            ')
            ->andWhere('t.user = :userId')
            ->setParameter('income', 'income')
            ->setParameter('expense', 'expense')
            ->setParameter('userId', $userId);

        $result = $qb->getQuery()->getOneOrNullResult();

        if (!$result) {
            return 0.0;
        }

        return (float) ($result['totalIncome'] - $result['totalExpense']);
    }

    /**
     * Récupère l'évolution mensuelle (Revenus vs Dépenses)
     * Version compatible nativement avec Doctrine (sans extensions SQL)
     */
    public function getMonthlyEvolution(int $userId, int $months = 6): array
    {
        $now = new \DateTime();
        $startDate = (clone $now)->modify("-{$months} months")->modify('first day of this month');

        // Utilisation d'une approche plus portable pour extraire l'année et le mois
        $results = $this->createQueryBuilder('t')
            ->select("
                t.createdAt as fullDate,
                SUM(CASE WHEN t.type = 'income' THEN t.amount ELSE 0 END) as income,
                SUM(CASE WHEN t.type = 'expense' THEN t.amount ELSE 0 END) as expense
            ")
            ->andWhere('t.user = :userId')
            ->andWhere('t.createdAt >= :startDate')
            ->setParameter('userId', $userId)
            ->setParameter('startDate', $startDate)
            ->orderBy('fullDate', 'ASC')
            ->getQuery()
            ->getResult();

        // On regroupe par mois en PHP pour garantir la portabilité SQL totale
        $grouped = [];
        foreach ($results as $row) {
            if (!$row['fullDate']) {
                continue;
            }
            $monthGroup = $row['fullDate']->format('Y-m');
            if (!isset($grouped[$monthGroup])) {
                $grouped[$monthGroup] = [
                    'monthGroup' => $monthGroup,
                    'income' => 0.0,
                    'expense' => 0.0
                ];
            }
            $grouped[$monthGroup]['income'] += (float)$row['income'];
            $grouped[$monthGroup]['expense'] += (float)$row['expense'];
        }

        return array_map(function($row) {
            $date = \DateTime::createFromFormat('Y-m', $row['monthGroup']);
            $row['monthName'] = $date ? $date->format('M') : $row['monthGroup'];
            return $row;
        }, array_values($grouped));
    }

    /**
     * Récupère les transactions récentes d'un utilisateur avec filtres optionnels de date
     */
    public function getRecentTransactions(int $userId, int $limit = 50, ?\DateTimeInterface $startDate = null, ?\DateTimeInterface $endDate = null): array
    {
        $qb = $this->createQueryBuilder('t')
            ->leftJoin('t.category', 'c')
            ->addSelect('c')
            ->andWhere('t.user = :userId')
            ->setParameter('userId', $userId)
            ->orderBy('t.createdAt', 'DESC');

        if ($startDate) {
            $qb->andWhere('t.createdAt >= :startDate')
               ->setParameter('startDate', $startDate);
        }

        if ($endDate) {
            $qb->andWhere('t.createdAt <= :endDate')
               ->setParameter('endDate', $endDate);
        }

        $qb->setMaxResults($limit);

        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les totaux d'entrées et sorties pour un utilisateur
     */
    public function getTotals(int $userId): array
    {
        $result = $this->createQueryBuilder('t')
            ->select('
                SUM(CASE WHEN t.type = :income THEN t.amount ELSE 0 END) as totalIncome,
                SUM(CASE WHEN t.type = :expense THEN t.amount ELSE 0 END) as totalExpense
            ')
            ->andWhere('t.user = :userId')
            ->setParameter('income', 'income')
            ->setParameter('expense', 'expense')
            ->setParameter('userId', $userId)
            ->getQuery()
            ->getOneOrNullResult();

        return [
            'totalIncome' => (float)($result['totalIncome'] ?? 0),
            'totalExpense' => (float)($result['totalExpense'] ?? 0)
        ];
    }

    /**
     * Récupère l'évolution journalière pour le graphique
     */
    public function getDailyEvolution(int $userId, int $days = 7): array
    {
        $startDate = (new \DateTime())->modify("-{$days} days")->setTime(0, 0, 0);

        $results = $this->createQueryBuilder('t')
            ->select("
                t.createdAt as fullDate,
                SUM(CASE WHEN t.type = 'income' THEN t.amount ELSE 0 END) as income,
                SUM(CASE WHEN t.type = 'expense' THEN t.amount ELSE 0 END) as expense
            ")
            ->andWhere('t.user = :userId')
            ->andWhere('t.createdAt >= :startDate')
            ->setParameter('userId', $userId)
            ->setParameter('startDate', $startDate)
            ->orderBy('fullDate', 'ASC')
            ->getQuery()
            ->getResult();

        $grouped = [];
        foreach ($results as $row) {
            if (!$row['fullDate']) {
                continue;
            }
            $dayGroup = $row['fullDate']->format('Y-m-d');
            if (!isset($grouped[$dayGroup])) {
                $grouped[$dayGroup] = [
                    'date' => $dayGroup,
                    'income' => 0.0,
                    'expense' => 0.0
                ];
            }
            $grouped[$dayGroup]['income'] += (float)$row['income'];
            $grouped[$dayGroup]['expense'] += (float)$row['expense'];
        }

        return array_values($grouped);
    }
}

