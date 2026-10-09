# Documentation technique Bloc 3 — Symfony 7

Dossier : `Backend_bloc3/`

**À retenir pour l’oral :** ce backend est en **Symfony 7**, pas en Laravel.

Même application que le Bloc 2 (solde, cartes, transferts…), mais avec un framework PHP : pages Twig, base gérée par Doctrine, connexion gérée par Symfony Security.

Guide pour se servir de l’app : [GUIDE_UTILISATEUR.md](./GUIDE_UTILISATEUR.md).  
Mémo des sigles : à la fin de ce fichier.

---

## 1. Pourquoi Symfony après Node ?

| On voulait | Symfony s’en charge |
|------------|---------------------|
| Pages HTML avec un modèle commun | Twig (`templates/`) |
| Objets liés aux tables SQL | Doctrine (entités User, Transaction…) |
| Login, logout, pages protégées | fichier `security.yaml` |
| Logique réutilisable | dossier `src/Service/` |
| Un peu de tests automatiques | 2 tests PHPUnit |

Ce n’est pas un nouveau produit : c’est **le même métier**, mieux outillé.

---

## 2. Choix d’outils (version simple)

| Quoi | Choix | En une phrase |
|------|--------|----------------|
| Langage | PHP 8.2+ | Langage du framework. |
| Framework | **Symfony 7.4** | Il route les URLs, la sécu, les vues. |
| Pages | Twig + Bootstrap | HTML avec `{{ nom }}`, XSS limité par défaut. |
| Base | MySQL + Doctrine | On manipule des objets, Doctrine écrit le SQL. |
| Login pages | session (cookie Symfony) | Formulaire `/login` → accueil. |
| Login API | JSON `/api/login` | Pour Postman / un futur front. |
| Mot de passe | hasher Symfony | Jamais en clair. |
| Paiement Stripe | package installé **mais pas utilisé** | Ne pas dire « j’ai Stripe ». |

---

## 3. Organisation des dossiers

```
Une page demandée
    → public/index.php
        → Symfony vérifie si on est connecté
            → un Controller (fichier PHP qui reçoit la requête)
                → un Service (le métier : solde, transfert…)
                    → la base MySQL
            → un fichier Twig (le HTML affiché)
```

Les contrôleurs restent **courts**. Le calcul du solde est dans `TransactionRepository` (somme des revenus moins somme des dépenses), pas dans une colonne `balance`.

---

## 4. Les mêmes 5 tables qu’en Node

```
Utilisateur  1 -------- *  Opérations
Utilisateur  1 -------- *  Catégories
Utilisateur  1 -------- *  Cartes
Utilisateur  1 -------- *  Bénéficiaires
```

Différences utiles à citer :

- Plus de colonne solde sur l’utilisateur : **uniquement le calcul**.
- Mot de passe : 8 caractères minimum.
- Cartes : on stocke les 4 derniers chiffres, **sans** contrôle Luhn (contrairement au Bloc 2).
- Transfert entre deux comptes de l’app : **les deux** sont mis à jour (dépense chez l’un, revenu chez l’autre), dans la même opération base de données.

---

## 5. Connexion : deux portes

1. **Site** — formulaire `/login`, session, redirection vers l’accueil. Déconnexion `/logout`.
2. **API** — `POST /api/login` avec email + mot de passe en JSON.

Les pages compte, cartes, transferts, `/api/…` demandent d’être connecté.  
`/admin` demanderait le rôle admin.

On ne fait **jamais** confiance à un `user_id` envoyé par le navigateur : on prend l’utilisateur de la session Symfony.

---

## 6. Fonctionnalités (côté technique, en français)

**Inscription** — crée le compte + des catégories de départ (Salaire, Loyer…) + une catégorie « Transfert ».

**Accueil** — solde, totaux, 5 dernières opérations.

**Opérations** — créer / lire / modifier / supprimer, seulement les siennes.

**Transfert vers un autre user** — email ou téléphone ; solde suffisant ; pas vers soi-même ; les deux écritures ensemble (si l’une échoue, on annule tout).

**Recharge** — ajoute un revenu. Un mauvais code PIN est refusé (test automatique là-dessus).

**Factures** — une dépense sur le budget, pas un vrai opérateur.

**Reset mot de passe / code SMS** — simulés (jeton ou code en mémoire, perdus au redémarrage).

**Notifications** — exemples affichés, pas une vraie messagerie.

---

## 7. Tests et lancement

Deux tests : page d’accueil connectée ; recharge avec bon / mauvais PIN.

```bash
cd Backend_bloc3
composer install
php bin/console doctrine:migrations:migrate
symfony server:start
```

Adresse habituelle : https://127.0.0.1:8000

---

## 8. Limites (à dire soi-même)

- Paiements fictifs, Stripe non branché.
- Reset / code à usage unique pas stockés en base.
- Pas de Luhn sur les cartes.
- Seulement 2 tests automatiques.

---

## Mémo des sigles (Bloc 3)

| Sigle / mot | Signification simple |
|-------------|----------------------|
| **MVC** | Découpage : vue (Twig) / contrôleur / données (entités). |
| **Twig** | Moteur de templates : on écrit du HTML avec des `{{ }}`. |
| **Doctrine / ORM** | On code des classes PHP ; l’outil parle à MySQL. |
| **Entité** | Classe qui = une table (`User`, `Transaction`…). |
| **Repository** | Fichier qui fait les recherches SQL pour une entité. |
| **Service** | Classe métier (transfert, solde) réutilisable par plusieurs pages. |
| **Firewall** (Symfony) | Règle : « ces URLs exigent d’être connecté ». |
| **CSRF** | Jeton anti-formulaire pirate (un autre site qui posterait à votre place). |
| **XSS** | Script malveillant injecté dans une page. Twig échappe le texte par défaut. |
| **Session** | Le serveur se souvient de vous via un cookie (Bloc 3), contrairement au JWT du Bloc 2. |
| **JWT** | Jeton du **Bloc 2** Node — pas le mode principal ici. |
| **CRUD** | Créer, Lire, Modifier, Supprimer. |
| **P2P** | Transfert d’un utilisateur de l’app vers un autre. |
| **OTP** | Code à 4 chiffres (ici : simulé). |
| **PHPUnit** | Outil de tests automatiques PHP. |
| **DQL** | Langage de requête Doctrine (proche du SQL). |
| **FK / PK** | Clé étrangère / clé primaire (lien entre tables / identifiant unique). |
| **MCD** | Schéma « qui est lié à qui » avant les tables SQL. |

### `B->>S` (si ça apparaît encore)

Syntaxe de dessin, pas un acronyme :

- **B** = navigateur, **S** = serveur, **->>** = « envoie ».
