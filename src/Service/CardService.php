<?php

namespace App\Service;

use App\Entity\Card;
use App\Entity\User;
use App\Repository\CardRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * CardService - Service pour la gestion des cartes de paiement
 */
class CardService
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly CardRepository $cardRepository,
        private readonly UserRepository $userRepository,
        private readonly ValidatorInterface $validator
    ) {}

    /**
     * Récupérer toutes les cartes d'un utilisateur
     */
    public function getCards(User $user): array
    {
        return $this->cardRepository->findBy(['user' => $user]);
    }

    /**
     * Récupérer une carte par ID
     */
    public function getCardById(int $cardId, User $user): ?Card
    {
        return $this->cardRepository->findOneBy(['id' => $cardId, 'user' => $user]);
    }

    /**
     * Créer une nouvelle carte
     */
    public function createCard(User $user, array $data): array
    {
        try {
            // Harmonisation des clés avec ce que le Controller envoie
            $cardHolderName = $data['card_holder_name'] ?? '';
            $last4Digits = $data['last_4_digits'] ?? '';
            $expiryDate = $data['expiry_date'] ?? '';
            $brand = $data['card_brand'] ?? 'Visa';

            if (empty($last4Digits) || empty($cardHolderName) || empty($expiryDate)) {
                return ['success' => false, 'error' => 'Tous les champs sont requis'];
            }

            // Vérifier si la carte existe déjà pour cet utilisateur
            $existingCard = $this->cardRepository->findOneBy([
                'user' => $user,
                'last4Digits' => $last4Digits,
                'cardBrand' => $brand
            ]);

            if ($existingCard) {
                return ['success' => false, 'error' => 'Cette carte est déjà enregistrée'];
            }

            $card = new Card();
            $card->setUser($user);
            $card->setCardHolderName($cardHolderName);
            $card->setLast4Digits($last4Digits);
            $card->setExpiryDate($expiryDate);
            $card->setCardBrand($brand);

            // Valider l'entité via les Assert de l'entité Card
            $errors = $this->validator->validate($card);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return ['success' => false, 'error' => implode(', ', $errorMessages)];
            }

            $this->entityManager->persist($card);
            $this->entityManager->flush();

            return [
                'success' => true,
                'card' => $card->toJSON()
            ];
        } catch (\Exception $e) {
            // En cas d'erreur, renvoyer le vrai message pour aider au débug
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }

    /**
     * Détecter la marque de la carte
     */
    public function getCardBrand(string $cardNumber): string
    {
        $cleanNumber = preg_replace('/[^0-9]/', '', $cardNumber);
        if (preg_match('/^4/', $cleanNumber)) return 'Visa';
        if (preg_match('/^5[1-5]/', $cleanNumber)) return 'Mastercard';
        if (preg_match('/^3[47]/', $cleanNumber)) return 'American Express';
        return 'Unknown';
    }

    /**
     * Valider le numéro de carte avec l'algorithme de Luhn
     */
    public function isValidLuhn(string $number): bool
    {
        $cleanNumber = preg_replace('/[^0-9]/', '', $number);
        $sum = 0;
        $numDigits = strlen($cleanNumber);
        $parity = $numDigits % 2;
        for ($i = 0; $i < $numDigits; $i++) {
            $digit = (int)$cleanNumber[$i];
            if ($i % 2 === $parity) {
                $digit *= 2;
                if ($digit > 9) {
                    $digit -= 9;
                }
            }
            $sum += $digit;
        }
        return ($sum % 10) === 0 && $numDigits > 0;
    }

    /**
     * Mettre à jour une carte
     */
    public function updateCard(int $cardId, User $user, array $data): array
    {
        try {
            $card = $this->cardRepository->findOneBy(['id' => $cardId, 'user' => $user]);

            if (!$card) {
                return ['success' => false, 'error' => 'Carte non trouvée'];
            }

            if (isset($data['card_holder_name'])) {
                $card->setCardHolderName($data['card_holder_name']);
            }

            if (isset($data['last_4_digits'])) {
                $card->setLast4Digits($data['last_4_digits']);
            }

            if (isset($data['expiry_date'])) {
                $card->setExpiryDate($data['expiry_date']);
            }

            if (isset($data['card_brand'])) {
                $card->setCardBrand($data['card_brand']);
            }

            // Valider la carte
            $errors = $this->validator->validate($card);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return ['success' => false, 'error' => implode(', ', $errorMessages)];
            }

            $this->entityManager->persist($card);
            $this->entityManager->flush();

            return ['success' => true];
        } catch (\Exception $e) {
            return ['success' => false, 'error' => 'Erreur serveur'];
        }
    }

    /**
     * Supprimer une carte
     */
    public function deleteCard(int $cardId, User $user): array
    {
        try {
            $card = $this->cardRepository->findOneBy(['id' => $cardId, 'user' => $user]);

            if (!$card) {
                return ['success' => false, 'error' => 'Carte non trouvée'];
            }

            $this->entityManager->remove($card);
            $this->entityManager->flush();

            return ['success' => true];
        } catch (\Exception $e) {
            return ['success' => false, 'error' => 'Erreur serveur'];
        }
    }
}

