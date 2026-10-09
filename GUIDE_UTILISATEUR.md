# Guide utilisateur — Budget_App (Bloc 3 Symfony)

Application web de suivi de budget personnel. Ce guide décrit **ce que vous faites à l’écran** une fois l’application lancée (`symfony server:start`, généralement `https://127.0.0.1:8000`).

Les paiements, recharges et virements sont **pédagogiques** : ils créent des lignes dans votre historique, ils ne débitent pas une vraie banque.

---

## 1. Démarrer

1. Créer un compte : page **Inscription** (`/register`) — nom, email, mot de passe (au moins 8 caractères), confirmation.  
2. Un message confirme la création ; vous êtes renvoyé vers **Connexion**.  
3. Saisir email + mot de passe. En cas d’erreur, le message ne précise pas si c’est l’email ou le mot de passe (sécurité).  
4. Après succès : **tableau de bord** (`/` ou `/home`).

**Déconnexion :** lien / route `/logout` — la session est détruite, retour à la connexion.

**Mot de passe oublié :** écran `/reset-password`. En développement, aucun vrai e-mail n’est envoyé (le jeton sert aux tests). En production il faudrait un SMTP.

Les pages protégées (accueil, profil, cartes, transferts…) exigent d’être connecté. Sinon redirection vers le login.

---

## 2. Tableau de bord

L’accueil affiche :

- votre **nom** (ou l’email si le nom n’est pas renseigné) ;  
- le **solde** : total des revenus moins total des dépenses (toujours à jour après une opération) ;  
- un aperçu de **récompenses / points** (indicatif) ;  
- les **derniers bénéficiaires** ;  
- les **dernières opérations**.

Raccourcis habituels (selon le menu) : transfert, recharge, cartes, factures, historique, paramètres.

---

## 3. Gérer son profil

| Besoin | Où aller |
|--------|----------|
| Voir le profil | `/profile` |
| Modifier nom, téléphone, adresse, ville… | `/profile/edit` |
| Mot de passe | `/settings/change-password` (ancien + nouveau) |
| Thème, notifications (préférences d’écran) | `/settings`, `/settings/notifications` |
| Centre de sécurité | `/settings/security` |
| Aide | `/help` |

L’e-mail doit rester unique : un e-mail déjà pris est refusé.

---

## 4. Transactions et catégories

**Historique :** `/transactions` ou `/bank-history` — liste des revenus (`income`) et dépenses (`expense`), du plus récent au plus ancien.

Vous pouvez **ajouter**, **modifier** ou **supprimer** une opération (titre, montant, type, catégorie). Le montant est toujours positif ; le type indique si ça augmente ou diminue le solde.

**Catégories :** libellés personnels (ex. « Loisirs », « Loyer »). À l’inscription, des catégories de départ sont créées (Salaire, Alimentation, Factures, etc.) plus une catégorie **Transfert** pour les virements internes.

Filtrer par période (jour / semaine / mois / année) ou par type selon les écrans de stats / historique.

---

## 5. Cartes

1. Liste : `/card`.  
2. Ajouter : `/card/new` — nom du titulaire, **4 derniers chiffres**, date d’expiration, marque (Visa, Mastercard…).  
3. Le **numéro complet n’est pas conservé**.  
4. Détail / plafonds indicatifs : `/card/info`.  
5. Suppression : uniquement vos cartes.

Le code PIN éventuel sert à certaines actions (ex. confirmation de recharge), pas à « la banque ».

---

## 6. Recharger le compte (top-up)

Page **Recharger** (`/recharger`) :

1. Choisir un montant (positif).  
2. Confirmer (PIN si demandé).  
3. Une transaction **Revenu** est ajoutée ; le solde du tableau de bord augmente.

PIN incorrect : l’opération est refusée, le solde ne bouge pas.

---

## 7. Transférer de l’argent

### Vers un autre utilisateur de l’app (P2P)

1. Ouvrir **Transfert** (`/transfert`).  
2. Indiquer l’**e-mail ou le téléphone** d’un compte déjà inscrit, le montant, un libellé optionnel.  
3. Confirmer (`/transfert/confirm` si le parcours l’affiche).

Conditions :

- montant > 0 ;  
- **solde suffisant** (sinon message d’erreur, rien n’est écrit) ;  
- destinataire existant ;  
- pas de transfert vers soi-même.

Résultat : une **dépense** chez vous et un **revenu** chez le destinataire, dans la même opération (les deux comptes restent cohérents).

### Vers un compte bancaire (maquette)

`/transfert/bybank` : saisie banque / IBAN côté interface. Côté métier, cela se traduit par une **dépense** sur votre budget, pas par un virement SEPA réel.

### Bénéficiaires / contacts

`/contacts`, `/contacts/new`, fiche `/contacts/{id}` : enregistrer un nom + identifiant (tél. ou banque) pour aller plus vite au prochain envoi.

---

## 8. Payer une facture / un service

Depuis **Factures** (`/bill`) ou les écrans dédiés :

- mobile, internet, électricité, eau, divertissement (film) ;  
- market, offres, cartes cadeaux (écrans vitrine).

Le paiement **débite votre solde** (transaction de type dépense) si le montant est valide et le solde suffisant. Aucun opérateur (EDF, FAI…) n’est réellement contacté.

---

## 9. Autres écrans

| Écran | Usage |
|-------|--------|
| `/rewards` | Points / offres (indicatif, lié au solde) |
| `/qr` `/myqr` | QR personnel (réception symbolique) |
| `/banque` | Infos compte (IBAN affiché côté profil si renseigné) |
| `/market` `/deals` `/giftcard` | Partenaires / bons — parcours UI |
| `/ui` | Liste des pages (repère de démo) |

Les **notifications** (cloche) peuvent afficher des exemples (promos, rappels) : ce n’est pas une vraie boîte de réception synchronisée.

---

## 10. Compte administrateur

Un utilisateur avec le rôle **admin** a des droits élargis (ex. liste des comptes). Le parcours courant de ce guide est celui d’un **utilisateur standard**, qui ne voit que ses propres données.

---

## 11. Bonnes pratiques

- Ne jamais réutiliser un vrai mot de passe bancaire.  
- Ne pas saisir un vrai PAN de carte : seuls 4 chiffres sont utiles ici.  
- Vérifier le solde après chaque transfert ou facture.  
- Se déconnecter sur un ordinateur partagé.

Pour le détail technique (Symfony, Doctrine, API), voir [DOCUMENTATION_TECHNIQUE.md](./DOCUMENTATION_TECHNIQUE.md).
