# Bloc3-Budget_App

Application web de gestion de budget personnel (Symfony 7 — pas Laravel).

- Documentation technique : [DOCUMENTATION_TECHNIQUE.md](./DOCUMENTATION_TECHNIQUE.md)
- Guide utilisateur : [GUIDE_UTILISATEUR.md](./GUIDE_UTILISATEUR.md)

## Fonctionnalités

*   **Tableau de bord :** Résumé du compte avec solde et points de fidélité.
*   **Transferts d'argent :** Vers des contacts enregistrés ou des comptes bancaires.
*   **Rechargement :** Créditer son compte.
*   **Gestion de cartes :** Ajouter et gérer ses cartes de paiement.
*   **Paiement par QR Code :** Générer un QR code pour recevoir de l'argent.
*   **Paiement de factures :** Services divers (mobile, internet, électricité, etc.).
*   **Historique des transactions :** Suivi des dépenses et revenus.
*   **Profil utilisateur :** Gestion des informations personnelles.

## Structure du Projet

Le projet est basé sur le framework Symfony 7. La structure suit les conventions de Symfony :

*   `src/` : Le code source de l'application (contrôleurs, entités, services, etc.).
*   `templates/` : Les fichiers de templates Twig pour le rendu des pages.
*   `config/` : Les fichiers de configuration (routes, services, bundles).
*   `public/` : Le point d'entrée de l'application (`index.php`) et les assets publics.
*   `tests/` : Les tests unitaires et d'intégration.
*   `migrations/` : Les migrations de la base de données Doctrine.

## Composants Clés & Logique

L'application est architecturée autour de services qui encapsulent la logique métier.

*   **`StatsService` :** Centralise la récupération des données pour le tableau de bord (solde, revenus/dépenses, etc.).
*   **`TransactionService` :** Gère toute la logique liée aux transactions (création, récupération, calculs de totaux).
*   **`RecipientService` :** Gère la logique des bénéficiaires pour les transferts.

Les **contrôleurs** (dans `src/Controller/`) sont responsables de recevoir les requêtes HTTP, d'appeler les services appropriés avec les données de la requête, et de retourner une réponse (généralement une page rendue avec Twig ou une réponse JSON pour les API).

Les **entités** (dans `src/Entity/`) sont les objets qui représentent les données de l'application et sont mappées à la base de données via l'ORM Doctrine.

## Installation et Lancement

### Prérequis

*   PHP 8.2 ou supérieur
*   Composer
*   Symfony CLI
*   Une base de données MySQL

### Étapes

1.  **Cloner le projet :**
    ```bash
    git clone <url-du-repo>
    cd ProjetFilRougeIlaria2025/Backend_bloc3
    ```

2.  **Installer les dépendances PHP :**
    ```bash
    composer install
    ```

3.  **Configurer la base de données :**
    Créez un fichier `.env.local` et configurez votre `DATABASE_URL` si elle est différente du fichier `.env`.
    ```
    # .env.local
    DATABASE_URL="mysql://user:password@127.0.0.1:3306/budget_app?serverVersion=8.0&charset=utf8mb4"
    ```

4.  **Créer la base de données et exécuter les migrations :**
    ```bash
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    ```

5.  **Lancer le serveur local :**
    ```bash
    symfony server:start
    ```
    L'application sera accessible à l'adresse `https://127.0.0.1:8000`.

## Lancer les Tests

Pour exécuter la suite de tests PHPUnit :
```bash
./vendor/bin/phpunit
```
# Bloc3-Budget_App
# Bloc3-Budget_App
# Bloc3-Budget_App
# Bloc3-Budget_App
# Bloc3-Budget_App
# Bloc3-Budget_App
# Bloc3-Budget_App
