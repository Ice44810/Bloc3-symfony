<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BillController extends BaseController
{
    #[Route('/bill', name: 'app_bill')]
    public function index(): Response
    {
        return $this->render('bill/index.html.twig');
    }

    /**
     * Obtenir les données de facture mobile
     * GET /api/bills/mobile
     */
    #[Route('/api/bills/mobile', name: 'get_mobile', methods: ['GET'])]
    public function getMobileBill(): JsonResponse
    {
        // Données de démonstration - à remplacer par une vraie récupération de données
        $data = [
            'id' => 1,
            'amount' => 50.00,
            'client_code' => 'PD123456789',
            'client_name' => 'Utilisateur',
            'client_email' => 'email@exemple.com',
            'bill_type' => 'mobile',
            'operator' => 'Orange',
        ];

        return $this->jsonSuccess($data);
    }

    /**
     * Obtenir les données de facture internet
     * GET /api/bills/internet
     */
    #[Route('/api/bills/internet', name: 'get_internet', methods: ['GET'])]
    public function getInternetBill(): JsonResponse
    {
        $data = [
            'id' => 2,
            'amount' => 30.00,
            'client_code' => 'INT123456',
            'client_name' => 'Utilisateur',
            'client_email' => 'email@exemple.com',
            'bill_type' => 'internet',
            'provider' => 'Free',
        ];

        return $this->jsonSuccess($data);
    }

    /**
     * Obtenir les données de facture électricité
     * GET /api/bills/electricity
     */
    #[Route('/api/bills/electricity', name: 'get_electricity', methods: ['GET'])]
    public function getElectricityBill(): JsonResponse
    {
        $data = [
            'id' => 3,
            'amount' => 120.00,
            'client_code' => 'EDF789456',
            'client_name' => 'Utilisateur',
            'client_email' => 'email@exemple.com',
            'bill_type' => 'electricity',
            'provider' => 'EDF',
        ];

        return $this->jsonSuccess($data);
    }

    /**
     * Obtenir les données de facture eau
     * GET /api/bills/water
     */
    #[Route('/api/bills/water', name: 'get_water', methods: ['GET'])]
    public function getWaterBill(): JsonResponse
    {
        $data = [
            'id' => 4,
            'amount' => 45.00,
            'client_code' => 'EAU123789',
            'client_name' => 'Utilisateur',
            'client_email' => 'email@exemple.com',
            'bill_type' => 'water',
            'provider' => 'Veolia',
        ];

        return $this->jsonSuccess($data);
    }

    /**
     * Obtenir les données de facture film/séries
     * GET /api/bills/film
     */
    #[Route('/api/bills/film', name: 'get_film', methods: ['GET'])]
    public function getFilmBill(): JsonResponse
    {
        $data = [
            'id' => 5,
            'amount' => 15.99,
            'client_code' => 'NETFLIX456',
            'client_name' => 'Utilisateur',
            'client_email' => 'email@exemple.com',
            'bill_type' => 'film',
            'provider' => 'Netflix',
        ];

        return $this->jsonSuccess($data);
    }

    /**
     * Traiter le paiement d'une facture
     * POST /api/bills/pay
     */
    #[Route('/api/bills/pay', name: 'process_bill_payment', methods: ['POST'])]
    public function processBillPayment(): JsonResponse
    {
        // Logique de paiement à implémenter
        return $this->jsonSuccess([
            'success' => true,
            'message' => 'Paiement traité avec succès'
        ]);
    }
}
