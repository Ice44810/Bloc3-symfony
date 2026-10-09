<?php

namespace App\Service;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * CategoryService - Service pour la gestion des catégories
 */
class CategoryService
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly CategoryRepository $categoryRepository,
        private readonly ValidatorInterface $validator
    ) {}

    /**
     * Récupérer toutes les catégories d'un utilisateur
     */
    public function getCategories(int $userId): array
    {
        $categories = $this->categoryRepository->findByUserId($userId);
        return array_map(fn($c) => $c->toJSON(), $categories);
    }

    /**
     * Récupérer une catégorie par ID
     */
    public function getCategoryById(int $categoryId, int $userId): ?Category
    {
        return $this->categoryRepository->findOneByIdAndUserId($categoryId, $userId);
    }

    /**
     * Récupérer ou créer la catégorie "Transfert" pour un utilisateur
     * Cette catégorie est utilisée pour les transferts d'argent entre utilisateurs
     */
    public function getOrCreateTransferCategory(int $userId): ?Category
    {
        try {
            // Essayer de trouver la catégorie existante
            $category = $this->categoryRepository->findByNameAndUserId('Transfert', $userId);

            if ($category) {
                return $category;
            }

            // Créer la catégorie si elle n'existe pas
            $user = $this->entityManager->getRepository(\App\Entity\User::class)->find($userId);
            if (!$user) {
                return null;
            }

            $category = new Category();
            $category->setName('Transfert');
            $category->setUser($user);

            $this->entityManager->persist($category);
            $this->entityManager->flush();

            return $category;
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Créer des catégories par défaut pour un nouvel utilisateur
     */
    public function createDefaultCategories(int $userId): void
    {
        try {
            $user = $this->entityManager->getRepository(\App\Entity\User::class)->find($userId);
            if (!$user) {
                return;
            }

            $defaultCategories = [
                'Salaire', 'Investissement', 'Autre Revenu',
                'Alimentation', 'Transport', 'Loyer',
                'Factures', 'Loisirs', 'Shopping',
                'Santé', 'Autre Dépense'
            ];

            foreach ($defaultCategories as $name) {
                // Vérifier si elle existe déjà
                $existing = $this->categoryRepository->findOneBy(['name' => $name, 'user' => $user]);
                if (!$existing) {
                    $category = new Category();
                    $category->setName($name);
                    $category->setUser($user);
                    $this->entityManager->persist($category);
                }
            }
            $this->entityManager->flush();
        } catch (\Exception $e) {
            // Ignorer silencieusement en cas d'erreur
        }
    }

    /**
     * Créer une nouvelle catégorie
     */
    public function createCategory(int $userId, array $data): array
    {
        try {
            $user = $this->entityManager->getRepository(\App\Entity\User::class)->find($userId);
            if (!$user) {
                return ['success' => false, 'error' => 'Utilisateur non trouvé'];
            }

            $category = new Category();
            $category->setName($data['name']);
            $category->setUser($user);

            // Valider la catégorie
            $errors = $this->validator->validate($category);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return ['success' => false, 'error' => implode(', ', $errorMessages)];
            }

            $this->entityManager->persist($category);
            $this->entityManager->flush();

            return [
                'success' => true,
                'category' => $category->toJSON()
            ];
        } catch (\Exception $e) {
            return ['success' => false, 'error' => 'Erreur serveur'];
        }
    }

    /**
     * Mettre à jour une catégorie
     */
    public function updateCategory(int $categoryId, int $userId, array $data): array
    {
        try {
            $category = $this->categoryRepository->findOneByIdAndUserId($categoryId, $userId);

            if (!$category) {
                return ['success' => false, 'error' => 'Catégorie non trouvée'];
            }

            if (isset($data['name'])) {
                $category->setName($data['name']);
            }

            // Valider la catégorie
            $errors = $this->validator->validate($category);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return ['success' => false, 'error' => implode(', ', $errorMessages)];
            }

            $this->entityManager->persist($category);
            $this->entityManager->flush();

            return ['success' => true];
        } catch (\Exception $e) {
            return ['success' => false, 'error' => 'Erreur serveur'];
        }
    }

    /**
     * Supprimer une catégorie
     */
    public function deleteCategory(int $categoryId, int $userId): array
    {
        try {
            $category = $this->categoryRepository->findOneByIdAndUserId($categoryId, $userId);

            if (!$category) {
                return ['success' => false, 'error' => 'Catégorie non trouvée'];
            }

            $this->entityManager->remove($category);
            $this->entityManager->flush();

            return ['success' => true];
        } catch (\Exception $e) {
            return ['success' => false, 'error' => 'Erreur serveur'];
        }
    }
}

