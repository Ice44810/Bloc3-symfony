<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServicesController extends BaseController
{
    #[Route('/services/electricity', name: 'app_services_electricity')]
    public function electricity(): Response
    {
        return $this->render('services/electricity.html.twig');
    }

    #[Route('/services/water', name: 'app_services_water')]
    public function water(): Response
    {
        return $this->render('services/water.html.twig');
    }

    #[Route('/services/mobile', name: 'app_services_mobile')]
    public function mobile(): Response
    {
        return $this->render('services/mobile.html.twig');
    }

    #[Route('/services/internet', name: 'app_services_internet')]
    public function internet(): Response
    {
        return $this->render('services/internet.html.twig');
    }

    #[Route('/services/film', name: 'app_services_film')]
    public function film(): Response
    {
        return $this->render('services/film.html.twig');
    }

    /**
     * API: Obtenir les factures mobile
     * GET /api/services/mobile
     */
    #[Route('/api/services/mobile', name: 'get_mobile', methods: ['GET'])]
    public function getMobileBills(): \Symfony\Component\HttpFoundation\JsonResponse
    {
        // Simulation de données (à remplacer par appel au service de facturation) pour une mise en prod
        $bills = [
            ['id' => 1, 'operator' => 'Orange', 'amount' => 25.00, 'due_date' => '2025-02-15', 'status' => 'pending'],
            ['id' => 2, 'operator' => 'SFR', 'amount' => 15.00, 'due_date' => '2025-02-20', 'status' => 'paid'],
            ['id' => 3, 'operator' => 'Sosh', 'amount' => 45.00, 'due_date' => '2025-02-15', 'status' => 'paid'],
        ];
        
        return $this->jsonSuccess(['bills' => $bills]);
    }

    /**
     * API: Obtenir les factures internet
     * GET /api/services/internet
     */
    #[Route('/api/services/internet', name: 'get_internet', methods: ['GET'])]
    public function getInternetBills(): \Symfony\Component\HttpFoundation\JsonResponse
    {
        // Simulation de données
        $bills = [
            ['id' => 1, 'operator' => 'Free', 'amount' => 35.00, 'due_date' => '2025-02-10', 'status' => 'pending'],
            ['id' => 2, 'operator' => 'Orange', 'amount' => 45.00, 'due_date' => '2025-02-15', 'status' => 'paid'],
            ['id' => 3, 'operator' => 'SFR', 'amount' => 30.00, 'due_date' => '2025-02-20', 'status' => 'pending'],
            ['id' => 4, 'operator' => 'Bouygues', 'amount' => 45.00, 'due_date' => '2025-02-15', 'status' => 'paid'],
        ];
        
        return $this->jsonSuccess(['bills' => $bills]);
    }

    /**
     * API: Obtenir les factures d'électricité
     * GET /api/services/electricity
     */
    #[Route('/api/services/electricity', name: 'get_electricity', methods: ['GET'])]
    public function getElectricityBills(): \Symfony\Component\HttpFoundation\JsonResponse
    {
        // Simulation de données
        $bills = [
            ['id' => 1, 'operator' => 'EDF', 'amount' => 85.00, 'due_date' => '2025-02-28', 'status' => 'pending'],
        ];
        
        return $this->jsonSuccess(['bills' => $bills]);
    }

    /**
     * API: Obtenir les factures d'eau
     * GET /api/services/water
     */
    #[Route('/api/services/water', name: 'get_water', methods: ['GET'])]
    public function getWaterBills(): \Symfony\Component\HttpFoundation\JsonResponse
    {
        // Simulation de données
        $bills = [
            ['id' => 1, 'operator' => 'Veolia', 'amount' => 45.00, 'due_date' => '2025-03-01', 'status' => 'pending'],
        ];
        
        return $this->jsonSuccess(['bills' => $bills]);
    }

    /**
     * API: Obtenir les films/séries
     * GET /api/services/film
     */
    #[Route('/api/services/film', name: 'get_film', methods: ['GET'])]
    public function getFilmOffers(): \Symfony\Component\HttpFoundation\JsonResponse
    {
        // Simulation de données
        $offers = [
            ['id' => 1, 'name' => 'Netflix', 'price' => 15.99, 'category' => 'Streaming'],
            ['id' => 2, 'name' => 'Disney+', 'price' => 8.99, 'category' => 'Streaming'],
            ['id' => 3, 'name' => 'Spotify', 'price' => 9.99, 'category' => 'Music'],
        ];
        
        return $this->jsonSuccess(['offers' => $offers]);
    }

    /**
     * API: Paiement d'une facture
     * POST /api/bills/pay
     */
    #[Route('/api/bills/pay', name: 'process_bill_payment', methods: ['POST'])]
    public function processBillPayment(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        if (!isset($data['bill_id']) || !isset($data['amount'])) {
            return $this->jsonError('ID de facture et montant requis');
        }
        
        // Simulation de traitement de paiement
        // Dans un vrai projet, intégrer avec un prestataire de paiement
        
        return $this->jsonSuccess([
            'success' => true,
            'message' => 'Paiement traité avec succès',
            'transaction_id' => 'TXN-' . time()
        ]);
    }

    /**
     * API: Obtenir toutes les factures
     * GET /api/bills
     */
    #[Route('/api/bills', name: 'get_bills', methods: ['GET'])]
    public function getBills(): \Symfony\Component\HttpFoundation\JsonResponse
    {
        // Simulation de données - aggregation de tous les types de factures
        $bills = [
            ['id' => 1, 'type' => 'mobile', 'operator' => 'Orange', 'amount' => 25.00, 'due_date' => '2025-02-15', 'status' => 'pending'],
            ['id' => 2, 'type' => 'internet', 'operator' => 'Free', 'amount' => 35.00, 'due_date' => '2025-02-10', 'status' => 'pending'],
            ['id' => 3, 'type' => 'electricity', 'operator' => 'EDF', 'amount' => 85.00, 'due_date' => '2025-02-28', 'status' => 'pending'],
            ['id' => 4, 'type' => 'water', 'operator' => 'Veolia', 'amount' => 45.00, 'due_date' => '2025-03-01', 'status' => 'pending'],
        ];
        
        return $this->jsonSuccess(['bills' => $bills]);
    }
}
