<?php

namespace App\Tests\Controller;

use App\Controller\HomeController;
use App\Entity\User;
use App\Service\RecipientService;
use App\Service\StatsService;
use App\Service\TransactionService;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class HomeControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $container = self::getContainer();

// Créer un utilisateur réel et le persister pour éviter les problèmes de rafraîchissement d'EntityUserProvider
        $entityManager = $container->get('doctrine')->getManager();

// Nettoyer l'utilisateur s'il existe
        $userRepo = $entityManager->getRepository(User::class);
        $existingUser = $userRepo->findOneBy(['email' => 'test@example.com']);
        if ($existingUser) {
            $entityManager->remove($existingUser);
            $entityManager->flush();
        }

        $user = new User();
        $user->setEmail('test@example.com');
        $user->setPassword('password');
        $user->setFullName('Test User');
        $user->setRole('user');

        $entityManager->persist($user);
        $entityManager->flush();

// Simuler les services
        $statsService = $this->createMock(StatsService::class);
        $transactionService = $this->createMock(TransactionService::class);
        $recipientService = $this->createMock(RecipientService::class);

// Se connecter en tant qu'utilisateur
        $client->loginUser($user);

// Simuler le service recipient pour retourner un tableau vide
        $recipientService->method('getRecipients')->willReturn([]);

        $statsService->method('getDashboardData')->willReturn([
            'success' => true,
            'balance' => 1000,
            'rewards' => 10,
        ]);

// Remplacer les services dans le conteneur
        $container->set(StatsService::class, $statsService);
        $container->set(TransactionService::class, $transactionService);
        $container->set(RecipientService::class, $recipientService);

// Effectuer une requête vers la page d'accueil
        $client->request('GET', '/');

// Vérifier que la réponse est réussie
        $this->assertResponseIsSuccessful();
    }
}
