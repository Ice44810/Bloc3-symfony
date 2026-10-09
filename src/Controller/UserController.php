<?php

namespace App\Controller;

use App\Service\AuthService;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class UserController extends BaseController
{
    private AuthService $authService;
    private UserRepository $userRepository;
    private TokenStorageInterface $tokenStorage;

    public function __construct(
        AuthService $authService,
        UserRepository $userRepository,
        TokenStorageInterface $tokenStorage
    ) {
        $this->authService = $authService;
        $this->userRepository = $userRepository;
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * Obtenir le profil de l'utilisateur connecté
     * GET /api/users/profile
     */
    #[Route('/api/users/profile', name: 'get_profile', methods: ['GET'])]
    public function getProfile(): JsonResponse
    {
        $user = $this->getUserOrThrow();

        return $this->jsonSuccess(['user' => $user->toPublic()]);
    }

    /**
     * Mettre à jour le profil utilisateur
     * PUT /api/users/profile
     */
    #[Route('/api/users/profile', name: 'update_profile', methods: ['PUT'])]
    public function updateProfile(Request $request): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $data = json_decode($request->getContent(), true);
        $result = $this->authService->updateProfile($user->getId(), $data);

        if ($result['success']) {
            return $this->jsonSuccess($result);
        }

        return $this->jsonError($result['message'] ?? 'Erreur lors de la mise à jour');
    }

    /**
     * Changer le mot de passe
     * POST /api/users/change-password
     */
    #[Route('/api/users/change-password', name: 'change_password', methods: ['POST'])]
    public function changePassword(Request $request): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $data = json_decode($request->getContent(), true);

        if (!isset($data['old_password']) || !isset($data['new_password'])) {
            return $this->jsonError('Ancien et nouveau mot de passe requis');
        }

        $result = $this->authService->changePassword(
            $user->getId(),
            $data['old_password'],
            $data['new_password']
        );

        if ($result['success']) {
            return $this->jsonSuccess($result);
        }

        return $this->jsonError($result['message'] ?? 'Erreur lors du changement de mot de passe');
    }

    /**
     * Obtenir tous les utilisateurs (admin uniquement)
     * GET /api/users
     */
    #[Route('/api/users', name: 'get_all_users', methods: ['GET'])]
    public function getAllUsers(): JsonResponse
    {
        $user = $this->getUserOrThrow();

        if (!$user->isAdmin()) {
            return $this->jsonError('Accès refusé', Response::HTTP_FORBIDDEN);
        }

        $users = $this->userRepository->findAllUsers();

        return $this->jsonSuccess(['users' => $users]);
    }
}

