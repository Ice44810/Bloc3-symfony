<?php

namespace App\Service;

use App\Entity\Recipient;
use App\Entity\User;
use App\Repository\RecipientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * RecipientService - Service pour la gestion des bénéficiaires
 */
class RecipientService
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly RecipientRepository $recipientRepository,
        private readonly ValidatorInterface $validator
    ) {}

    /**
     * Récupérer tous les bénéficiaires d'un utilisateur
     */
    public function getRecipients(User $user): array
    {
        $recipients = $this->recipientRepository->findBy(['user' => $user], ['name' => 'ASC']);
        return array_map(fn($r) => $r->toJSON(), $recipients);
    }

    /**
     * Récupérer un bénéficiaire par ID
     */
    public function getRecipientById(int $recipientId, User $user): ?Recipient
    {
        return $this->recipientRepository->findOneBy(['id' => $recipientId, 'user' => $user]);
    }

    /**
     * Créer un nouveau bénéficiaire
     */
    public function createRecipient(User $user, array $data): array
    {
        try {
            $name = trim($data['name'] ?? '');
            $identifier = strtoupper(preg_replace('/[\s-]/', '', $data['identifier'] ?? ''));
            $type = $data['type'] ?? 'phone';

            if (empty($name) || empty($identifier)) {
                return ['success' => false, 'error' => 'Nom et identifiant sont requis'];
            }

            // Vérifier les doublons
            $existing = $this->recipientRepository->findOneBy(['user' => $user, 'identifier' => $identifier]);
            if ($existing) {
                return ['success' => false, 'error' => 'Ce bénéficiaire existe déjà'];
            }

            $recipient = new Recipient();
            $recipient->setUser($user);
            $recipient->setName($name);
            $recipient->setIdentifier($identifier);
            $recipient->setType($type);

            // Valider le bénéficiaire
            $errors = $this->validator->validate($recipient);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return ['success' => false, 'error' => implode(', ', $errorMessages)];
            }

            $this->entityManager->persist($recipient);
            $this->entityManager->flush();

            return [
                'success' => true,
                'recipient' => $recipient->toJSON()
            ];
        } catch (\Exception $e) {
            return ['success' => false, 'error' => 'Erreur serveur'];
        }
    }

    /**
     * Rechercher des bénéficiaires par nom
     */
    public function searchRecipients(User $user, string $searchTerm): array
    {
        $recipients = $this->recipientRepository->createQueryBuilder('r')
            ->where('r.user = :user')
            ->andWhere('r.name LIKE :searchTerm')
            ->setParameter('user', $user)
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->orderBy('r.name', 'ASC')
            ->getQuery()
            ->getResult();

        return array_map(fn($r) => $r->toJSON(), $recipients);
    }

    /**
     * Mettre à jour un bénéficiaire
     */
    public function updateRecipient(int $recipientId, User $user, array $data): array
    {
        try {
            $recipient = $this->recipientRepository->findOneBy(['id' => $recipientId, 'user' => $user]);

            if (!$recipient) {
                return ['success' => false, 'error' => 'Bénéficiaire non trouvé'];
            }

            if (isset($data['name'])) {
                $recipient->setName($data['name']);
            }

            if (isset($data['identifier'])) {
                $recipient->setIdentifier($data['identifier']);
            }

            if (isset($data['type'])) {
                $recipient->setType($data['type']);
            }

            // Valider le bénéficiaire
            $errors = $this->validator->validate($recipient);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return ['success' => false, 'error' => implode(', ', $errorMessages)];
            }

            $this->entityManager->persist($recipient);
            $this->entityManager->flush();

            return ['success' => true];
        } catch (\Exception $e) {
            return ['success' => false, 'error' => 'Erreur serveur'];
        }
    }

    /**
     * Supprimer un bénéficiaire
     */
    public function deleteRecipient(int $recipientId, User $user): array
    {
        try {
            $recipient = $this->recipientRepository->findOneBy(['id' => $recipientId, 'user' => $user]);

            if (!$recipient) {
                return ['success' => false, 'error' => 'Bénéficiaire non trouvé'];
            }

            $this->entityManager->remove($recipient);
            $this->entityManager->flush();

            return ['success' => true];
        } catch (\Exception $e) {
            return ['success' => false, 'error' => 'Erreur serveur'];
        }
    }
}

