<?php

namespace App\Controller;

use App\Service\RecipientService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends BaseController
{
    #[Route('/contacts', name: 'app_contact', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('contact/index.html.twig');
    }

    #[Route('/contacts/new', name: 'app_contact_new', methods: ['GET'])]
    public function new(): Response
    {
        return $this->render('contact/new.html.twig');
    }

    #[Route('/contacts/{id}', name: 'app_contact_detail', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function detail(int $id, RecipientService $recipientService): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // On récupère le contact en s'assurant qu'il appartient à l'utilisateur
        // Vérifie que cette méthode existe dans ton RecipientService
        $contact = $recipientService->getRecipientById($id, $user);

        if (!$contact) {
            // Si le contact n'existe pas ou n'appartient pas à l'user
            $this->addFlash('error', 'Contact introuvable.');
            return $this->redirectToRoute('app_contact');
        }

        return $this->render('contact/detail.html.twig', [
            'contact' => $contact
        ]);
    }

    /**
     * API pour récupérer la liste des contacts (utilisée par la vue index)
     * Cette méthode fournit les données au script JS de la page index
     */
    #[Route('/api/contacts/list', name: 'app_api_contacts_list', methods: ['GET'])]
    public function getRecipientsList(RecipientService $recipientService): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['error' => 'Non autorisé'], 401);
        }

        $recipients = $recipientService->getRecipients($user);

        return $this->json([
            'success' => true,
            'recipients' => $recipients
        ]);
    }
}
