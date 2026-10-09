<?php

namespace App\Tests\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Doctrine\ORM\EntityManagerInterface;

class TopupControllerTest extends WebTestCase
{
    private EntityManagerInterface $entityManager;
    private $client;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->entityManager = self::getContainer()->get('doctrine')->getManager();

        // Nettoyage et création d'un utilisateur de test
        $userRepo = $this->entityManager->getRepository(User::class);
        $user = $userRepo->findOneBy(['email' => 'topup_test@example.com']);
        if ($user) {
            // Supprimer les transactions associées
            $this->entityManager->createQuery('DELETE FROM App\Entity\Transaction t WHERE t.user = :user')
                ->setParameter('user', $user)
                ->execute();
            $this->entityManager->remove($user);
            $this->entityManager->flush();
        }

        $user = new User();
        $user->setEmail('topup_test@example.com');
        $user->setPassword('password');
        $user->setFullName('Topup Test User');
        $user->setRole('user');
        $user->setSecretPin('1234');

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $this->client->loginUser($user);
    }

    public function testProcessTopupSuccess(): void
    {
        $this->client->request(
            'POST',
            '/api/process-topup',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            json_encode([
                'amount' => 100,
                'pin' => '1234'
            ])
        );

        $response = $this->client->getResponse();
        $this->assertSame(200, $response->getStatusCode());

        $data = json_decode($response->getContent(), true);
        $this->assertTrue($data['success']);
        $this->assertEquals('Recharge réussie !', $data['message']);
        $this->assertGreaterThan(0, $data['balance']);
    }

    public function testProcessTopupWrongPin(): void
    {
        $this->client->request(
            'POST',
            '/api/process-topup',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            json_encode([
                'amount' => 100,
                'pin' => '0000'
            ])
        );

        $response = $this->client->getResponse();
        $this->assertSame(403, $response->getStatusCode());

        $data = json_decode($response->getContent(), true);
        $this->assertFalse($data['success']);
        $this->assertEquals('Code PIN incorrect', $data['error']);
    }
}
