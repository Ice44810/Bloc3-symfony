<?php

namespace App\Controller;

use App\Service\TransfertService;
use App\Service\RecipientService;
use App\Service\CardService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransfertController extends BaseController
{
    private TransfertService $transfertService;
    private RecipientService $recipientService;
    private CardService $cardService;

    public function __construct(TransfertService $transfertService, RecipientService $recipientService, CardService $cardService)
    {
        $this->transfertService = $transfertService;
        $this->recipientService = $recipientService;
        $this->cardService = $cardService;
    }

    #[Route('/transfert/bybank', name: 'app_transfer_by_bank', methods: ['GET'])]
    public function bybank(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // Récupère les cartes de l'utilisateur (retourne un array via toJSON())
        $cards = $this->cardService->getCards($user);

        return $this->render('transfert/bybank.html.twig', [
            'cards' => $cards
        ]);
    }

    #[Route('/transfert', name: 'app_transfert', methods: ['GET'])]
    public function index(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $recipients = $this->recipientService->getRecipients($user);

        return $this->render('transfert/index.html.twig', [
            'recipients' => $recipients
        ]);
    }

    #[Route('/transfert/confirm', name: 'app_transfert_confirm', methods: ['GET'])]
    public function confirm(Request $request): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // Récupérer les données passées en query string
        $amount = $request->query->get('amount', 0);
        $recipientIdentifier = $request->query->get('recipientIdentifier', $request->query->get('recipient', ''));
        $recipientName = $request->query->get('recipientName', '');
        $message = $request->query->get('message', $request->query->get('description', ''));
        $type = $request->query->get('type', 'bank_transfer');
        $fromCard = $request->query->get('fromCard', '');
        $recipientAvatar = $request->query->get('recipientAvatar', '');

        // Définition dynamique des éléments visuels
        $config = [
            'title' => 'Confirmation',
            'icon' => 'https://img.icons8.com/fluency/48/money-bag.png',
            'from_label' => 'De',
            'to_label' => 'À',
            'from_name' => 'Mon Portefeuille',
            'from_details' => 'Solde principal',
            'from_icon' => 'assets/images/icons8-visa-48.png',
            'to_name' => $recipientName ?: $recipientIdentifier,
            'to_details' => $recipientIdentifier,
            'to_icon' => $recipientAvatar ?: '/assets/images/profil.jpg',
            'button_label' => 'Confirmer le transfert'
        ];

        switch ($type) {
            case 'contact_transfer':
                $config['title'] = 'Transfert à un contact';
                $config['button_label'] = 'Confirmer le transfert';
                break;
            case 'bank_transfer':
                $config['title'] = 'Virement bancaire';
                $config['icon'] = 'https://img.icons8.com/fluency/48/bank.png';
                if ($fromCard) {
                    $config['from_name'] = 'Ma Carte';
                    $config['from_details'] = $fromCard;
                }
                break;
            case 'topup':
                $config['title'] = 'Rechargement';
                $config['icon'] = 'https://img.icons8.com/fluency/48/safe.png';
                $config['from_label'] = 'Source';
                $config['to_label'] = 'Destination';
                $config['from_name'] = 'Carte Bancaire';
                $config['to_name'] = 'Mon Portefeuille';
                $config['button_label'] = 'Confirmer la recharge';
                break;
            case 'bill':
            case 'service':
                $config['title'] = 'Paiement de service';
                $config['icon'] = 'https://img.icons8.com/fluency/48/bill.png';
                $config['to_label'] = 'Fournisseur';
                $config['button_label'] = 'Payer la facture';
                break;
        }

        return $this->render('transfert/confirm.html.twig', [
            'amount' => $amount,
            'recipientIdentifier' => $recipientIdentifier,
            'recipientName' => $recipientName,
            'description' => $message,
            'type' => $type,
            'fromCard' => $fromCard,
            'recipientAvatar' => $recipientAvatar,
            'config' => $config
        ]);
    }

    /**
     * API pour exécuter le transfert final
     */
    #[Route('/api/transfert', name: 'api_transfert', methods: ['POST'])]
    public function apiTransfer(Request $request): Response
    {
        $user = $this->getUserOrThrow();
        $data = json_decode($request->getContent(), true);

        // Harmonisation des noms de champs entre le frontend et le service
        $recipientIdentifier = $data['recipientIdentifier'] ?? $data['recipient'] ?? '';
        $amount = $data['amount'] ?? 0;
        $message = $data['message'] ?? $data['description'] ?? '';
        $type = $data['type'] ?? 'bank_transfer';

        if (($type !== 'topup' && empty($recipientIdentifier)) || $amount <= 0) {
            return $this->json(['success' => false, 'error' => 'Destinataire et/ou montant invalide(s)'], 400);
        }

        $result = $this->transfertService->transfer(
            $user->getId(),
            $recipientIdentifier,
            (float) $amount,
            $message,
            $type
        );

        return $this->json($result);
    }
}
