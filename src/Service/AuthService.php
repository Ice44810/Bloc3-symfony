<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * AuthService - Service d'authentification
 * Gère l'inscription, la connexion, la récupération de mot de passe
 */
class AuthService
{
    private EntityManagerInterface $entityManager;
    private UserPasswordHasherInterface $passwordHasher;
    private UserRepository $userRepository;
    private CategoryService $categoryService;
    private ValidatorInterface $validator;

    // Stockage temporaire des tokens de réinitialisation (en production, utiliser Redis)
    private static array $resetTokens = [];

    public function __construct(
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        UserRepository $userRepository,
        CategoryService $categoryService,
        ValidatorInterface $validator
    ) {
        $this->entityManager = $entityManager;
        $this->passwordHasher = $passwordHasher;
        $this->userRepository = $userRepository;
        $this->categoryService = $categoryService;
        $this->validator = $validator;
    }

    // Inscription d'un nouvel utilisateur

    public function register(string $email, string $password, string $role = 'user', ?string $fullName = null): array
    {
        try {
            if (trim($password) === '') {
                return ['success' => false, 'error' => 'Le mot de passe est requis'];
            }

            // Vérifier si l'email existe déjà
            $existingUser = $this->userRepository->findByEmail($email);
            if ($existingUser) {
                return ['success' => false, 'error' => 'Email déjà utilisé'];
            }

            // Créer l'utilisateur
            $user = new User();
            $user->setEmail($email);
            // Le mot de passe est toujours stocké sous forme hachée.
            $user->setPassword($this->hashUserPassword($user, $password));
            $user->setRole($role);

            if ($fullName) {
                $user->setFullName($fullName);
            }

            // Validation de l'entité User
            $errors = $this->validator->validate($user);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return ['success' => false, 'error' => implode(', ', $errorMessages)];
            }

            $this->entityManager->persist($user);
            $this->entityManager->flush();

            // Créer les catégories par défaut
            $this->categoryService->createDefaultCategories($user->getId());
            // Créer la catégorie Transfert
            $this->categoryService->getOrCreateTransferCategory($user->getId());

            return [
                'success' => true,
                'user' => $user->toPublic()
            ];
        } catch (\Exception $e) {
            error_log("Register error: " . $e->getMessage());
            return ['success' => false, 'error' => 'Erreur serveur: ' . $e->getMessage()];
        }
    }

    // Connexion d'un utilisateur

    public function login(string $email, string $password): array
    {
        try {
            // On récupère l'utilisateur par email pour vérifier l'identité.
            $user = $this->userRepository->findByEmail($email);

            if (!$user) {
                return ['success' => false, 'error' => 'Identifiants invalides'];
            }

            // Vérifier le mot de passe en comparant le hash stocké.
            if (!$this->passwordHasher->isPasswordValid($user, $password)) {
                return ['success' => false, 'error' => 'Identifiants invalides'];
            }

            // Si l'algorithme courant évolue, on met à jour le hash automatiquement.
            if ($this->passwordHasher->needsRehash($user)) {
                $user->setPassword($this->hashUserPassword($user, $password));
                $this->entityManager->persist($user);
                $this->entityManager->flush();
            }

            return [
                'success' => true,
                'user' => $user->toPublic()
            ];
        } catch (\Exception $e) {
            error_log("Login error: " . $e->getMessage());
            return ['success' => false, 'error' => 'Erreur serveur: ' . $e->getMessage()];
        }
    }

    /**
     * Mettre à jour le profil utilisateur
     */
    public function updateProfile(int $userId, array $data): array
    {
        try {
            $user = $this->userRepository->find($userId);

            if (!$user) {
                return ['success' => false, 'error' => 'Utilisateur non trouvé'];
            }

            if (isset($data['email'])) {
                // Vérifier si le nouvel email n'est pas déjà utilisé
                $existingUser = $this->userRepository->findByEmail($data['email']);
                if ($existingUser && $existingUser->getId() !== $userId) {
                    return ['success' => false, 'error' => 'Email déjà utilisé'];
                }
                $user->setEmail($data['email']);
            }

            if (isset($data['fullName'])) {
                $user->setFullName($data['fullName']);
            }

            if (isset($data['phone'])) {
                $user->setPhone($data['phone']);
            }

            if (isset($data['address'])) {
                $user->setAddress($data['address']);
            }

            if (isset($data['postcode'])) {
                $user->setPostcode($data['postcode']);
            }

            if (isset($data['ville'])) {
                $user->setVille($data['ville']);
            }

            if (isset($data['avatar'])) {
                $user->setAvatar($data['avatar']);
            }

            // Validation du profil mis à jour
            $errors = $this->validator->validate($user);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return ['success' => false, 'error' => implode(', ', $errorMessages)];
            }

            $this->entityManager->persist($user);
            $this->entityManager->flush();

            return ['success' => true];
        } catch (\Exception $e) {
            return ['success' => false, 'error' => 'Erreur serveur'];
        }
    }

    // Changer le mot de passe

    public function changePassword(int $userId, string $oldPassword, string $newPassword): array
    {
        try {
            $user = $this->userRepository->find($userId);

            if (!$user) {
                return ['success' => false, 'error' => 'Utilisateur non trouvé'];
            }

            // Vérifier l'ancien mot de passe
            if (!$this->passwordHasher->isPasswordValid($user, $oldPassword)) {
                return ['success' => false, 'error' => 'Ancien mot de passe incorrect'];
            }

            // Hacher le nouveau mot de passe
            $user->setPassword($this->hashUserPassword($user, $newPassword));

            $this->entityManager->persist($user);
            $this->entityManager->flush();

            return ['success' => true];
        } catch (\Exception $e) {
            return ['success' => false, 'error' => 'Erreur serveur'];
        }
    }

    // Demander la réinitialisation du mot de passe

    public function requestPasswordReset(string $email): array
    {
        try {
            $user = $this->userRepository->findByEmail($email);

            // Pour des raisons de sécurité, ne pas révéler si l'email existe
            if (!$user) {
                return ['success' => true, 'message' => 'Si l\'email existe, un lien de réinitialisation sera envoyé'];
            }

            // Générer un token unique et une date d'expiration courte.
            $token = bin2hex(random_bytes(32));
            $expires = time() + 3600; // 1 heure

            self::$resetTokens[$token] = [
                'userId' => $user->getId(),
                'expires' => $expires
            ];

            // En développement, on renvoie le token pour simplifier les tests manuels.
            return [
                'success' => true,
                'token' => $token,
                'message' => 'Lien de réinitialisation envoyé (voir console pour le token en développement)'
            ];
        } catch (\Exception $e) {
            return ['success' => false, 'error' => 'Erreur serveur'];
        }
    }

    // Réinitialiser le mot de passe avec le token

    public function resetPassword(string $token, string $newPassword): array
    {
        try {
            // Le token doit exister en mémoire et ne pas être expiré.
            if (!isset(self::$resetTokens[$token])) {
                return ['success' => false, 'error' => 'Token invalide'];
            }

            $tokenData = self::$resetTokens[$token];

            if (time() > $tokenData['expires']) {
                unset(self::$resetTokens[$token]);
                return ['success' => false, 'error' => 'Token expiré'];
            }

            $user = $this->userRepository->find($tokenData['userId']);

            if (!$user) {
                return ['success' => false, 'error' => 'Utilisateur non trouvé'];
            }

            // Hacher le nouveau mot de passe
            $user->setPassword($this->hashUserPassword($user, $newPassword));

            $this->entityManager->persist($user);
            $this->entityManager->flush();

            // Supprimer le token après utilisation
            unset(self::$resetTokens[$token]);

            return ['success' => true];
        } catch (\Exception $e) {
            return ['success' => false, 'error' => 'Erreur serveur'];
        }
    }

    // Vérifier les permissions basées sur le rôle

    public static function hasPermission(string $userRole, string $requiredRole): bool
    {
        $roleHierarchy = [
            'admin' => 3,
            'user' => 1
        ];

        return ($roleHierarchy[$userRole] ?? 0) >= ($roleHierarchy[$requiredRole] ?? 0);
    }

    private function hashUserPassword(User $user, string $plainPassword): string
    {
        return $this->passwordHasher->hashPassword($user, $plainPassword);
    }
}
