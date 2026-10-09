<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Card;
use App\Repository\CardRepository;

class StaticController extends AbstractController
{
    /**
     * Page d'aide
     */
    #[Route('/help', name: 'app_help')]
    public function help(): Response
    {
        return $this->render('help/index.html.twig');
    }

    /**
     * Page marché
     */
    #[Route('/market', name: 'app_market')]
    public function market(): Response
    {
        return $this->render('market/index.html.twig');
    }

    /**
     * Page profil
     */
    #[Route('/profile', name: 'app_profile')]
    public function profile(): Response
    {
        return $this->render('profile/index.html.twig', [
            'user' => $this->getUser()
        ]);
    }

    /**
     * Page paramètres
     */
    #[Route('/settings', name: 'app_settings')]
    public function settings(): Response
    {
        return $this->render('settings/index.html.twig', [
            'user' => $this->getUser()
        ]);
    }

    /**
     * Page QR Code
     */
    #[Route('/qr', name: 'app_qr')]
    public function qr(): Response
    {
        return $this->render('qr/index.html.twig');
    }

    /**
     * Page récompenses
     */
    #[Route('/rewards', name: 'app_rewards')]
    public function rewards(): Response
    {
        return $this->render('rewards/index.html.twig');
    }

    /**
     * Page Giftcard
     */
    #[Route('/giftcard', name: 'app_giftcard')]
    public function giftcard(): Response
    {
        return $this->render('giftcard/index.html.twig');
    }

    /**
     * Page Banque
     */
    #[Route('/banque', name: 'app_banque')]
    public function banque(): Response
    {
        return $this->render('banque/index.html.twig');
    }

    /**
     * Page Deals
     */
    #[Route('/deals', name: 'app_deals')]
    public function deals(): Response
    {
        return $this->render('deals/index.html.twig');
    }

    /**
     * Page UI (alias pour app_ui_pages)
     */
    #[Route('/ui', name: 'app_ui_pages')]
    public function ui(CardRepository $cardRepository): Response
    {
        $user = $this->getUser();
        $card = null;

        if ($user) {
            // Pour la démo, on prend la première carte de l'utilisateur
            $card = $cardRepository->findOneBy(['user' => $user]);
        }
        
        return $this->render('ui/index.html.twig', [
            'card' => $card,
        ]);
    }

    #[Route('/settings/change-password', name: 'app_settings_change_password')]
    public function changePassword(): Response
    {
        return $this->render('settings/change_password.html.twig');
    }


    /**
     * Page Modifier le profil
     */
    #[Route('/profile/edit', name: 'app_profile_edit')]
    public function profileEdit(): Response
    {
        return $this->render('profile/edit.html.twig', [
            'user' => $this->getUser()
        ]);
    }

    /**
     * Page Sécurité
     */
    #[Route('/settings/security', name: 'app_settings_security')]
    public function security(): Response
    {
        return $this->render('settings/security.html.twig');
    }

    /**
     * Page Notifications
     */
    #[Route('/settings/notifications', name: 'app_settings_notification')]
    public function notifications(): Response
    {
        return $this->render('settings/notifications.html.twig');
    }

    /**
     * Page Paiement
     */
    #[Route('/payment', name: 'app_payment')]
    public function payment(): Response
    {
        return $this->render('payment/index.html.twig');
    }

    /**
     * Page Details Carte Cadeau
     */
    #[Route('/giftcard/{id}', name: 'app_giftcard_detail')]
    public function giftcardDetail(int $id): Response
    {
        return $this->render('giftcard/detail.html.twig', ['giftcard_id' => $id]);
    }

    /**
     * Page MyQR (Redirection vers QR)
     */
    #[Route('/myqr', name: 'app_myqr')]
    public function myqr(): Response
    {
        return $this->redirectToRoute('app_qr');
    }
}
