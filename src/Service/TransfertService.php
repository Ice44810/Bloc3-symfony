<?php

namespace App\Service;

use App\Entity\Transaction;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * TransfertService - Service pour gérer les transferts entre utilisateurs
 */
class TransfertService
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly UserRepository $userRepository,
        private readonly TransactionService $transactionService,
        private readonly CategoryService $categoryService,
        private readonly ValidatorInterface $validator
    ) {}

    /**
     * Effectue un transfert entre deux utilisateurs ou un paiement de facture
     */
    public function transfer(int $senderId, string $recipientIdentifier, float $amount, string $description = '', string $type = 'transfert'): array
    {
        if ($amount <= 0) {
            return ['success' => false, 'error' => 'Le montant doit être supérieur à 0'];
        }

        try {
            $sender = $this->userRepository->find($senderId);
            if (!$sender) {
                return ['success' => false, 'error' => 'Expéditeur non trouvé'];
            }

            // Vérifier le solde de l'expéditeur (sauf pour rechargement)
            if ($type !== 'topup') {
                $balance = $this->transactionService->getBalance($senderId);
                if ($balance < $amount) {
                    return ['success' => false, 'error' => 'Solde insuffisant'];
                }
            }

            if ($type === 'bill' || $type === 'bank_transfer' || $type === 'service') {
                return $this->processBillPayment($sender, $recipientIdentifier, $amount, $description);
            }

            if ($type === 'topup') {
                return $this->processTopup($sender, $amount, $description);
            }

            // Trouver le destinataire (par email ou téléphone)
            $recipient = $this->userRepository->findOneBy(['email' => $recipientIdentifier]);
            if (!$recipient) {
                $recipient = $this->userRepository->findOneBy(['phone' => $recipientIdentifier]);
            }

            if (!$recipient) {
                return ['success' => false, 'error' => 'Destinataire non trouvé'];
            }

            if ($recipient->getId() === $sender->getId()) {
                return ['success' => false, 'error' => 'Vous ne pouvez pas vous envoyer d\'argent à vous-même'];
            }

            // Récupérer ou créer la catégorie "Transfert" pour l'expéditeur
            $transferCategory = $this->categoryService->getOrCreateTransferCategory($senderId);

            // Récupérer ou créer la catégorie "Transfert" pour le destinataire
            $transferCategoryRecipient = $this->categoryService->getOrCreateTransferCategory($recipient->getId());

            $this->entityManager->beginTransaction();

            // 1. Créer la transaction de débit pour l'expéditeur
            $debit = new Transaction();
            $debit->setUser($sender);
            $debit->setTitle($description ?: 'Transfert vers ' . ($recipient->getFullName() ?: $recipient->getEmail()));
            $debit->setAmount($amount);
            $debit->setType(Transaction::TYPE_EXPENSE);
            if ($transferCategory) {
                $debit->setCategory($transferCategory);
            }

            // Valider le débit
            $errors = $this->validator->validate($debit);
            if (count($errors) > 0) {
                $this->entityManager->rollback();
                return ['success' => false, 'error' => 'Données de transfert invalides pour l\'expéditeur'];
            }

            $this->entityManager->persist($debit);

            // 2. Créer la transaction de crédit pour le destinataire
            $credit = new Transaction();
            $credit->setUser($recipient);
            $credit->setTitle($description ?: 'Transfert de ' . ($sender->getFullName() ?: $sender->getEmail()));
            $credit->setAmount($amount);
            $credit->setType(Transaction::TYPE_INCOME);
            if ($transferCategoryRecipient) {
                $credit->setCategory($transferCategoryRecipient);
            }

            // Valider le crédit
            $errors = $this->validator->validate($credit);
            if (count($errors) > 0) {
                $this->entityManager->rollback();
                return ['success' => false, 'error' => 'Données de transfert invalides pour le destinataire'];
            }

            $this->entityManager->persist($credit);

            $this->entityManager->flush();
            $this->entityManager->commit();

            return [
                'success' => true,
                'message' => 'Transfert effectué avec succès',
                'amount' => $amount,
                'recipient' => $recipient->getFullName() ?: $recipient->getEmail()
            ];

        } catch (\Exception $e) {
            if ($this->entityManager->getConnection()->isTransactionActive()) {
                $this->entityManager->rollback();
            }
            return ['success' => false, 'error' => 'Une erreur est survenue lors du transfert'];
        }
    }

    /**
     * Traite le paiement d'une facture ou un virement bancaire comme une simple dépense
     */
    private function processBillPayment(User $sender, string $recipientName, float $amount, string $description): array
    {
        try {
            // Vérifier à nouveau le solde avant l'opération atomique
            $balance = $this->transactionService->getBalance($sender->getId());
            if ($balance < $amount) {
                return ['success' => false, 'error' => 'Solde insuffisant pour cette opération'];
            }

            $this->entityManager->beginTransaction();

            $expense = new Transaction();
            $expense->setUser($sender);
            $expense->setTitle($description ?: 'Paiement ' . $recipientName);
            $expense->setAmount($amount);
            $expense->setType(Transaction::TYPE_EXPENSE);

            // Tenter de récupérer une catégorie pertinente
            $category = $this->categoryService->getOrCreateTransferCategory($sender->getId());
            if ($category) {
                $expense->setCategory($category);
            }

            // Valider la transaction
            $errors = $this->validator->validate($expense);
            if (count($errors) > 0) {
                $this->entityManager->rollback();
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return ['success' => false, 'error' => implode(', ', $errorMessages)];
            }

            $this->entityManager->persist($expense);
            $this->entityManager->flush();
            $this->entityManager->commit();

            return [
                'success' => true,
                'message' => 'Opération effectuée avec succès',
                'amount' => $amount,
                'recipient' => $recipientName
            ];
        } catch (\Exception $e) {
            if ($this->entityManager->getConnection()->isTransactionActive()) {
                $this->entityManager->rollback();
            }
            return ['success' => false, 'error' => 'Erreur lors de l\'opération : ' . $e->getMessage()];
        }
    }

    /**
     * Traite un rechargement (crédit du compte)
     */
    private function processTopup(User $user, float $amount, string $description): array
    {
        try {
            $this->entityManager->beginTransaction();

            $income = new Transaction();
            $income->setUser($user);
            $income->setTitle($description ?: 'Rechargement de compte');
            $income->setAmount($amount);
            $income->setType(Transaction::TYPE_INCOME);

            $this->entityManager->persist($income);
            $this->entityManager->flush();
            $this->entityManager->commit();

            // Récupérer le nouveau solde
            $newBalance = $this->transactionService->getBalance($user->getId());

            return [
                'success' => true,
                'message' => 'Rechargement effectué avec succès',
                'amount' => $amount,
                'recipient' => 'Mon Portefeuille',
                'balance' => $newBalance,
            ];
        } catch (\Exception $e) {
            if ($this->entityManager->getConnection()->isTransactionActive()) {
                $this->entityManager->rollback();
            }
            return ['success' => false, 'error' => 'Erreur lors du rechargement'];
        }
    }
}
