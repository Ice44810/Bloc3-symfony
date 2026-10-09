<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Contrôleur API pour les routes manquantes
 * Routes utilisées dans les fichiers Twig mais non implémentées
 */
class ApiController extends BaseController
{
    /**
     * Obtenir les notifications de l'utilisateur
     * GET /api/notifications
     */
    #[Route('/api/notifications', name: 'api_notifications', methods: ['GET'])]
    public function getNotifications(): JsonResponse
    {
        // Simulation de données - notifications
        $notifications = [
            [
                'id' => 1,
                'title' => 'Nouveau deal disponible',
                'message' => 'Profitez de -35% chez Burger King !',
                'type' => 'promo',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'title' => 'Rappel facture',
                'message' => 'Votre facture EDF arrive à échéance dans 3 jours',
                'type' => 'reminder',
                'created_at' => date('Y-m-d H:i:s', strtotime('-1 hour'))
            ],
            [
                'id' => 3,
                'title' => 'Cashback disponible',
                'message' => 'Vous avez 5€ de cashback à récupérer',
                'type' => 'promo',
                'created_at' => date('Y-m-d H:i:s', strtotime('-2 hours'))
            ]
        ];

        return $this->jsonSuccess(['notifications' => $notifications]);
    }

    /**
     * Envoyer un code OTP
     * POST /api/auth/send-otp
     */
    #[Route('/api/auth/send-otp', name: 'send_otp', methods: ['POST'])]
    public function sendOtp(): JsonResponse
    {
        // Simulation d'envoi d'OTP
        // Dans un vrai projet, envoyer par SMS/Email
        $otpCode = random_int(1000, 9999);
        
        // Stocker le code OTP en session pour vérification
        $_SESSION['otp_code'] = $otpCode;
        
        return $this->jsonSuccess([
            'message' => 'Code OTP envoyé avec succès',
            'success' => true,
            'debug_code' => $otpCode // En mode debug, retourner le code
        ]);
    }

    /**
     * Vérifier le code OTP
     * POST /api/auth/verify-otp
     */
    #[Route('/api/auth/verify-otp', name: 'verify_otp', methods: ['POST'])]
    public function verifyOtp(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $enteredCode = $data['code'] ?? '';
        
        // Récupérer le code OTP stocké
        $storedOtp = $_SESSION['otp_code'] ?? null;
        
        if (!$storedOtp) {
            return $this->jsonError('Aucun code OTP trouvé. Veuillez demander un nouveau code.');
        }
        
        if ($enteredCode == $storedOtp) {
            // Code valide
            unset($_SESSION['otp_code']);
            
            return $this->jsonSuccess([
                'success' => true,
                'message' => 'Code OTP vérifié avec succès'
            ]);
        }
        
        return $this->jsonError('Code OTP invalide');
    }

    /**
     * Réinitialiser le mot de passe
     * POST /api/auth/reset-password
     */
    #[Route('/api/auth/reset-password', name: 'reset_password', methods: ['POST'])]
    public function resetPassword(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        if (!isset($data['password'])) {
            return $this->jsonError('Nouveau mot de passe requis');
        }
        
        // Dans un vrai projet:
        // 1. Vérifier que l'utilisateur est authentifié via OTP
        // 2. Hasher le mot de passe
        // 3. Sauvegarder en base de données
        
        return $this->jsonSuccess([
            'success' => true,
            'message' => 'Mot de passe réinitialisé avec succès'
        ]);
    }

    /**
     * Confirmer le changement de mot de passe
     * POST /api/auth/confirm-password
     */
    #[Route('/api/auth/confirm-password', name: 'confirm_password_change', methods: ['POST'])]
    public function confirmPasswordChange(): JsonResponse
    {
        // Logique de confirmation déjà traitée dans reset_password
        // Cette route est appelée pour confirmer côté frontend
        
        return $this->jsonSuccess([
            'success' => true,
            'message' => 'Changement de mot de passe confirmé'
        ]);
    }

    /**
     * Obtenir les paramètres de notification
     * GET /api/settings/notifications
     */
    #[Route('/api/settings/notifications', name: 'get_notification_settings', methods: ['GET'])]
    public function getNotificationSettings(): JsonResponse
    {
        // Paramètres de notification par défaut
        $settings = [
            'generalNotifications' => true,
            'sound' => true,
            'vibrate' => false,
            'appUpdate' => true,
            'billReminder' => true,
            'promotion' => false,
            'newService' => false
        ];

        return $this->jsonSuccess($settings);
    }

    /**
     * Mettre à jour un paramètre de notification
     * POST /api/settings/notifications
     */
    #[Route('/api/settings/notifications', name: 'update_notification_setting', methods: ['POST'])]
    public function updateNotificationSetting(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        if (!isset($data['key']) || !isset($data['value'])) {
            return $this->jsonError('Clé et valeur requis');
        }
        
        // Dans un vrai projet, sauvegarder en base de données
        // $this->notificationService->updateSetting($user, $data['key'], $data['value']);
        
        return $this->jsonSuccess([
            'success' => true,
            'message' => 'Paramètre mis à jour'
        ]);
    }

    /**
     * Obtenir les paramètres de sécurité
     * GET /api/settings/security
     */
    #[Route('/api/settings/security', name: 'get_security_settings', methods: ['GET'])]
    public function getSecuritySettings(): JsonResponse
    {
        // Paramètres de sécurité par défaut
        $settings = [
            'residenceCountry' => 'FR',
            'twoFactorEnabled' => false,
            'twoFactorMethod' => 'sms'
        ];

        return $this->jsonSuccess($settings);
    }

    /**
     * Mettre à jour les paramètres de sécurité
     * POST /api/settings/security
     */
    #[Route('/api/settings/security', name: 'update_security_settings', methods: ['POST'])]
    public function updateSecuritySettings(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        // Dans un vrai projet, sauvegarder en base de données
        // $this->securityService->updateSettings($user, $data);
        
        return $this->jsonSuccess([
            'success' => true,
            'message' => 'Paramètres de sécurité mis à jour'
        ]);
    }

    /**
     * Mettre à jour le pays de résidence
     * POST /api/settings/residence
     */
    #[Route('/api/settings/residence', name: 'update_residence_country', methods: ['POST'])]
    public function updateResidenceCountry(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        if (!isset($data['country'])) {
            return $this->jsonError('Pays requis');
        }
        
        // Dans un vrai projet, sauvegarder en base de données
        // $this->userService->updateResidenceCountry($user, $data['country']);
        
        return $this->jsonSuccess([
            'success' => true,
            'message' => 'Pays de résidence mis à jour'
        ]);
    }

    /**
     * Obtenir les détails d'un voucher
     * GET /api/vouchers/{id}
     */
    #[Route('/api/vouchers/{id}', name: 'get_voucher_details', methods: ['GET'])]
    public function getVoucherDetails(int $id): JsonResponse
    {
        // Simulation de données - vouchers
        $vouchers = [
            1 => [
                'id' => 1,
                'title' => 'Big King - Burger King',
                'price' => 15.99,
                'discount' => 35,
                'description' => 'Profitez d\'un Big King à prix réduit ! Ce bon d\'achat vous permet de bénéficier de 35% de réduction sur votre prochain repas chez Burger King.',
                'expiry_date' => '2025-12-31',
                'image' => '/assets/images/burger.png',
                'restaurant' => [
                    'address' => '15 Rue de la Paix, 75002 Paris',
                    'distance' => 2.5,
                    'count' => 12
                ],
                'provider' => [
                    'name' => 'Burger King France',
                    'logo' => '/assets/images/logobk.png'
                ]
            ],
            2 => [
                'id' => 2,
                'title' => 'Amazon Prime Day',
                'price' => 89.99,
                'discount' => 50,
                'description' => 'Abonnement Amazon Prime annuel avec 50% de réduction pour les nouveaux membres.',
                'expiry_date' => '2025-06-30',
                'image' => '/assets/images/amazon.png',
                'restaurant' => null,
                'provider' => [
                    'name' => 'Amazon',
                    'logo' => '/assets/images/amazon_logo.png'
                ]
            ]
        ];

        if (!isset($vouchers[$id])) {
            return $this->jsonError('Voucher non trouvé', Response::HTTP_NOT_FOUND);
        }

        return $this->jsonSuccess($vouchers[$id]);
    }

    /**
     * Obtenir les services favoris
     * GET /api/services/favorites
     */
    #[Route('/api/services/favorites', name: 'get_favorite_services', methods: ['GET'])]
    public function getFavoriteServices(): JsonResponse
    {
        // Simulation de données - services favoris
        $services = [
            ['id' => 1, 'name' => 'Netflix', 'category' => 'Streaming', 'icon' => 'bi-play-circle'],
            ['id' => 2, 'name' => 'Spotify', 'category' => 'Music', 'icon' => 'bi-music-note'],
            ['id' => 3, 'name' => 'Orange', 'category' => 'Mobile', 'icon' => 'bi-phone']
        ];

        return $this->jsonSuccess(['services' => $services]);
    }

    /**
     * Obtenir les offres du marché
     * GET /api/market/offers
     */
    #[Route('/api/market/offers', name: 'get_market_offers', methods: ['GET'])]
    public function getMarketOffers(): JsonResponse
    {
        // Simulation de données - offres marché
        $offers = [
            [
                'id' => 1,
                'title' => 'Mode Printemps',
                'description' => 'Offres spéciales vêtements et accessoires',
                'discount' => 30,
                'image' => '/assets/images/mode.jpg',
                'valid_until' => '2025-04-30'
            ],
            [
                'id' => 2,
                'title' => 'High-Tech Week',
                'description' => 'Réductions sur les produits technologiques',
                'discount' => 25,
                'image' => '/assets/images/tech.jpg',
                'valid_until' => '2025-03-15'
            ]
        ];

        return $this->jsonSuccess(['offers' => $offers]);
    }

    /**
     * Obtenir les deals
     * GET /api/deals
     */
    #[Route('/api/deals', name: 'get_deals', methods: ['GET'])]
    public function getDeals(): JsonResponse
    {
        // Simulation de données - deals
        $deals = [
            [
                'id' => 1,
                'title' => 'Burger King -35%',
                'description' => 'Big King à -35%',
                'discount' => 35,
                'image' => '/assets/images/burger.png',
                'partner' => 'Burger King',
                'location' => 'Paris',
                'distance' => 2.5
            ],
            [
                'id' => 2,
                'title' => 'Netflix -50%',
                'description' => 'Abonnement 12 mois',
                'discount' => 50,
                'image' => '/assets/images/netflix.png',
                'partner' => 'Netflix',
                'location' => 'En ligne',
                'distance' => 0
            ]
        ];

        return $this->jsonSuccess(['deals' => $deals]);
    }

    /**
     * Obtenir les cartes cadeaux
     * GET /api/giftcards
     */
    #[Route('/api/giftcards', name: 'get_giftcards', methods: ['GET'])]
    public function getGiftcards(): JsonResponse
    {
        // Simulation de données - cartes cadeaux
        $cards = [
            [
                'id' => 1,
                'title' => 'Amazon',
                'description' => 'Carte cadeau Amazon',
                'price_min' => 10,
                'price_max' => 100,
                'image' => '/assets/images/amazon.png'
            ],
            [
                'id' => 2,
                'title' => 'Fnac',
                'description' => 'Carte cadeau Fnac',
                'price_min' => 15,
                'price_max' => 150,
                'image' => '/assets/images/fnac.png'
            ],
            [
                'id' => 3,
                'title' => 'Decathlon',
                'description' => 'Carte cadeau Decathlon',
                'price_min' => 20,
                'price_max' => 200,
                'image' => '/assets/images/decathlon.png'
            ]
        ];

        return $this->jsonSuccess(['giftcards' => $cards]);
    }

    /**
     * Sauvegarder un favori
     * POST /api/favorites
     */
    #[Route('/api/favorites', name: 'save_favorite', methods: ['POST'])]
    public function saveFavorite(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        if (!isset($data['item_id']) || !isset($data['item_type'])) {
            return $this->jsonError('ID de l\'item et type requis');
        }
        
        // Dans un vrai projet, sauvegarder en base de données
        // $this->favoriteService->save($user, $data['item_id'], $data['item_type']);
        
        return $this->jsonSuccess([
            'success' => true,
            'message' => 'Favori sauvegardé'
        ]);
    }
}

