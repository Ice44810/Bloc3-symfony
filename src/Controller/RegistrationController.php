<?php

// src/Controller/RegistrationController.php
namespace App\Controller;

use App\Service\AuthService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register', methods: ['GET', 'POST'])]
    public function register(
        Request $request,
        AuthService $authService
    ): Response {
        if ($request->isMethod('POST')) {
            $fullName = $request->request->get('fullName');
            $email = $request->request->get('email');
            $password = $request->request->get('password');
            $confirmPassword = $request->request->get('confirm_password');

            if ($password !== $confirmPassword) {
                $this->addFlash('error', 'Les mots de passe ne correspondent pas.');
                return $this->redirectToRoute('app_register');
            }

            $result = $authService->register($email, $password, 'user', $fullName);

            if ($result['success']) {
                $this->addFlash('success', 'Votre compte a été créé !');
                return $this->redirectToRoute('app_login');
            }

            $this->addFlash('error', $result['error'] ?? 'Erreur lors de l\'inscription.');
            return $this->redirectToRoute('app_register');
        }

        return $this->render('auth/register.html.twig');
    }
}
