<?php

namespace App\Controller;

use App\Service\CategoryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends BaseController
{
    private CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Obtenir toutes les catégories de l'utilisateur
     * GET /api/categories
     */
    #[Route('/api/categories', name: 'get_categories', methods: ['GET'])]
    public function getCategories(): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $categories = $this->categoryService->getCategories($user->getId());

        // On retourne directement le tableau pour simplifier le parsing en frontend
        return $this->json($categories, Response::HTTP_OK);
    }

    /**
     * Obtenir une catégorie par ID
     * GET /api/categories/{id}
     */
    #[Route('/api/categories/{id}', name: 'get_category', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function getCategory(int $id): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $category = $this->categoryService->getCategoryById($id, $user->getId());

        if (!$category) {
            return $this->json([
                'success' => false,
                'message' => 'Catégorie non trouvée'
            ], Response::HTTP_NOT_FOUND);
        }

        return $this->json([
            'success' => true,
            'category' => $category->toJSON()
        ], Response::HTTP_OK);
    }

    /**
     * Créer une nouvelle catégorie
     * POST /api/categories
     */
    #[Route('/api/categories', name: 'create_category', methods: ['POST'])]
    public function createCategory(Request $request): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $data = json_decode($request->getContent(), true);

        if (!isset($data['name'])) {
            return $this->json([
                'success' => false,
                'message' => 'Nom de la catégorie requis'
            ], Response::HTTP_BAD_REQUEST);
        }

        $result = $this->categoryService->createCategory($user->getId(), $data);

        if ($result['success']) {
            return $this->json($result, Response::HTTP_CREATED);
        }

        return $this->json($result, Response::HTTP_BAD_REQUEST);
    }

    /**
     * Mettre à jour une catégorie
     * PUT /api/categories/{id}
     */
    #[Route('/api/categories/{id}', name: 'update_category', methods: ['PUT'], requirements: ['id' => '\d+'])]
    public function updateCategory(Request $request, int $id): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $data = json_decode($request->getContent(), true);
        $result = $this->categoryService->updateCategory($id, $user->getId(), $data);

        if ($result['success']) {
            return $this->json($result, Response::HTTP_OK);
        }

        return $this->json($result, Response::HTTP_BAD_REQUEST);
    }

    /**
     * Supprimer une catégorie
     * DELETE /api/categories/{id}
     */
    #[Route('/api/categories/{id}', name: 'delete_category', methods: ['DELETE'], requirements: ['id' => '\d+'])]
    public function deleteCategory(int $id): JsonResponse
    {
        $user = $this->getUserOrThrow();

        $result = $this->categoryService->deleteCategory($id, $user->getId());

        if ($result['success']) {
            return $this->json($result, Response::HTTP_OK);
        }

        return $this->json($result, Response::HTTP_NOT_FOUND);
    }
}
