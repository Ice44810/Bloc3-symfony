<?php

namespace App\Controller;

use App\Service\RecipientService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecipientController extends BaseController
{
    private RecipientService $recipientService;

    public function __construct(RecipientService $recipientService)
    {
        $this->recipientService = $recipientService;
    }

    /**
     * Obtenir tous les bénéficiaires de l'utilisateur
     * GET /api/recipients
     */
    #[Route('/api/recipients', name: 'app_api_recipients_list', methods: ['GET'])]
    public function getRecipients(Request $request): JsonResponse
    {
        $user = $this->getUserOrThrow();
        $searchTerm = $request->query->get('search');

        if ($searchTerm) {
            $recipients = $this->recipientService->searchRecipients($user, $searchTerm);
        } else {
            $recipients = $this->recipientService->getRecipients($user);
        }

        // On retourne directement la liste pour compatibilité avec le frontend
        return $this->json([
            'success' => true,
            'recipients' => $recipients
        ], Response::HTTP_OK);
    }

    /**
     * Obtenir un bénéficiaire par ID
     * GET /api/recipients/{id}
     */
    #[Route('/api/recipients/{id}', name: 'get_recipient', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function getRecipient(int $id): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $recipient = $this->recipientService->getRecipientById($id, $user);

        if (!$recipient) {
            return $this->json([
                'success' => false,
                'message' => 'Bénéficiaire non trouvé'
            ], Response::HTTP_NOT_FOUND);
        }

        return $this->json([
            'success' => true,
            'recipient' => $recipient->toJSON()
        ], Response::HTTP_OK);
    }

    /**
     * Créer un nouveau bénéficiaire
     * POST /api/recipients
     */
    #[Route('/api/recipients', name: 'create_recipient', methods: ['POST'])]
    public function createRecipient(Request $request): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $data = json_decode($request->getContent(), true);

        if (!isset($data['name']) || !isset($data['identifier'])) {
            return $this->json([
                'success' => false,
                'message' => 'Nom et identifiant requis'
            ], Response::HTTP_BAD_REQUEST);
        }

        $result = $this->recipientService->createRecipient($user, $data);

        if ($result['success']) {
            return $this->json($result, Response::HTTP_CREATED);
        }

        return $this->json($result, Response::HTTP_BAD_REQUEST);
    }

    /**
     * Mettre à jour un bénéficiaire
     * PUT /api/recipients/{id}
     */
    #[Route('/api/recipients/{id}', name: 'update_recipient', methods: ['PUT'], requirements: ['id' => '\d+'])]
    public function updateRecipient(Request $request, int $id): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $data = json_decode($request->getContent(), true);
        $result = $this->recipientService->updateRecipient($id, $user, $data);

        if ($result['success']) {
            return $this->json($result, Response::HTTP_OK);
        }

        return $this->json($result, Response::HTTP_BAD_REQUEST);
    }

    /**
     * Supprimer un bénéficiaire
     * DELETE /api/recipients/{id}
     */
    #[Route('/api/recipients/{id}', name: 'delete_recipient', methods: ['DELETE'], requirements: ['id' => '\d+'])]
    public function deleteRecipient(int $id): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $result = $this->recipientService->deleteRecipient($id, $user);

        if ($result['success']) {
            return $this->json($result, Response::HTTP_OK);
        }

        return $this->json($result, Response::HTTP_NOT_FOUND);
    }

    /**
     * Enregistrer/sauvegarder un bénéficiaire (alias pour create_recipient)
     * POST /api/recipients/save
     */
    #[Route('/api/recipients/save', name: 'save_recipient', methods: ['POST'])]
    public function saveRecipient(Request $request): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $data = json_decode($request->getContent(), true);

        if (!isset($data['name']) || !isset($data['identifier'])) {
            return $this->json([
                'success' => false,
                'message' => 'Nom et identifiant requis'
            ], Response::HTTP_BAD_REQUEST);
        }

        $result = $this->recipientService->createRecipient($user, $data);

        if ($result['success']) {
            return $this->json($result, Response::HTTP_CREATED);
        }

        return $this->json($result, Response::HTTP_BAD_REQUEST);
    }

    /**
     * Obtenir les détails d'un contact/bénéficiaire
     * GET /api/recipients/{id}/details
     */
    #[Route('/api/recipients/{id}/details', name: 'get_contact_details', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function getContactDetails(int $id): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $recipient = $this->recipientService->getRecipientById($id, $user);

        if (!$recipient) {
            return $this->json([
                'success' => false,
                'message' => 'Contact non trouvé'
            ], Response::HTTP_NOT_FOUND);
        }

        return $this->json([
            'success' => true,
            'contact' => $recipient->toJSON()
        ], Response::HTTP_OK);
    }
}
