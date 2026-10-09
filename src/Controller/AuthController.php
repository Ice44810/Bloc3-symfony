<?php

namespace App\Controller;

use App\Service\AuthService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AuthController extends BaseController
{
    private AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }


    #[Route('/login', name: 'app_login', methods: ['GET', 'POST'])]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // récupère l'erreur de connexion s'il y en a une
        $error = $authenticationUtils->getLastAuthenticationError();
        // dernier nom d'utilisateur entré par l'utilisateur
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('auth/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/logout', name: 'app_logout', methods: ['GET'])]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route('/reset-password', name: 'app_reset_password_view', methods: ['GET'])]
    public function resetPasswordView(): Response
    {
        return $this->render('auth/reset_password.html.twig');
    }

    /**
     * Inscription d'un nouvel utilisateur
     * POST /api/register
     */
    #[Route('/api/register', name: 'register', methods: ['POST'])]
    public function register(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!isset($data['email']) || !isset($data['password'])) {
            return $this->jsonError('Email et mot de passe requis');
        }

        $result = $this->authService->register(
            $data['email'],
            $data['password'],
            $data['role'] ?? 'user',
            $data['fullName'] ?? null
        );

        if ($result['success']) {
            return $this->jsonSuccess($result, null, Response::HTTP_CREATED);
        }

        $status = match($result['error'] ?? '') {
            'Email déjà utilisé' => Response::HTTP_CONFLICT,
            'Email et mot de passe requis', 'Le mot de passe est requis' => Response::HTTP_BAD_REQUEST,
            default => Response::HTTP_INTERNAL_SERVER_ERROR,
        };

        return $this->jsonError($result['error'] ?? 'Erreur lors de l\'inscription', $status);
    }

    /**
     * Connexion d'un utilisateur
     * POST /api/login
     */
    #[Route('/api/login', name: 'login', methods: ['POST'])]
    public function apiLogin(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!isset($data['email']) || !isset($data['password'])) {
            return $this->jsonError('Email et mot de passe requis');
        }

        $result = $this->authService->login($data['email'], $data['password']);

        if ($result['success']) {
            return $this->jsonSuccess($result);
        }

        return $this->jsonError($result['error'] ?? 'Email ou mot de passe incorrect', Response::HTTP_UNAUTHORIZED);
    }

    /**
     * Demande de réinitialisation du mot de passe
     * POST /api/users/reset-password
     */
    #[Route('/api/users/reset-password', name: 'reset_password_request', methods: ['POST'])]
    public function requestPasswordReset(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!isset($data['email'])) {
            return $this->jsonError('Email requis');
        }

        $result = $this->authService->requestPasswordReset($data['email']);

        return $this->jsonSuccess($result);
    }

    /**
     * Réinitialisation du mot de passe avec token
     * POST /api/users/reset-password/confirm
     */
    #[Route('/api/users/reset-password/confirm', name: 'reset_password_confirm', methods: ['POST'])]
    public function resetPassword(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!isset($data['token']) || !isset($data['new_password'])) {
            return $this->jsonError('Token et nouveau mot de passe requis');
        }

        $result = $this->authService->resetPassword($data['token'], $data['new_password']);

        if ($result['success']) {
            return $this->jsonSuccess($result);
        }

        return $this->jsonError($result['message'] ?? 'Erreur lors de la réinitialisation');
    }
}

