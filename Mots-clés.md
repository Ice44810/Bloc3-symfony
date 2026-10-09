Mots clés du projet Filrouge :

1. Mots-clés techniques généraux 
CRUD est un acronyme anglais qui signifie Create (créer), Read (lire), Update (mettre à jour) et Delete (supprimer).  Il désigne les quatre opérations de base pour la gestion des données persistantes, principalement dans les bases de données relationnelles ou NoSQL. Ces opérations sont fondamentales dans le développement logiciel, car elles permettent de manipuler efficacement les données à travers les applications. 

** Create : Ajouter de nouvelles données à une base de données (ex.  : INSERT en SQL).
** Read : Récupérer ou afficher des données existantes (ex.  : SELECT en SQL).
** Update : Modifier des données déjà présentes (ex.  : UPDATE en SQL).
** Delete : Supprimer des enregistrements inutiles ou obsolètes (ex.  : DELETE en SQL).

Opérations SQL : INSERT, SELECT, UPDATE, DELETE

2. Entités principales (src/Entity/)
** User
** Card
** Category
** Recipient
** Transaction

3. Contrôleurs (src/Controller/)
** ApiController
** AuthController
** BankHistoryController
** BaseController
** BillController
** CardController
** CategoryController
** ContactController
** HomeController
** RecipientController
** RegistrationController
** ServicesController
** StaticController
** StatsController
** TopupController
** TransactionController
** TransfertController
** UserController

4. Modules/Fonctionnalités principales (de Fonctionnalités.md et templates)
** Utilisateurs/Auth : Register, Login, Reset Password, Change Password, OTP, Profile, Settings (Security, Notifications, Residence), Admin Users
** Dashboard/Stats : Solde, Income, Expense, Transactions Récentes, Graphs (Daily/Monthly), Rewards, Points, Favorites Services
** Transactions : CRUD, Filtres (Catégorie/Type/Période), Balance, Totals, Évolution, Stats, Types (Income/Expense)
** Transferts/Paiements : P2P (Email/Phone, Atomic), Topup, Bank Transfer, Bills, Services, Confirm Flow
** Cartes : CRUD, Last4, Expiry, Brand, Luhn, Limits, Sources
** Catégories/Recipients/Contacts : CRUD, Auto Transfert, Récents
** Services/Factures : Mobile, Internet, Electricity (Elec), Eau (Water), Film, Management, Market, Vouchers, Offers
** Autres : QR, Bank History, Rewards, Notifs, Legacy Routes, Deals, Giftcard, Help, Payment, Rewards

5. Dépendances techniques (composer.json)
Symfony 7.4 (Framework-Bundle, Asset-Mapper, Turbo, Stimulus)
Doctrine (ORM, Migrations, Fixtures)
Stripe (Paiements)
Twig, Validator, Security, Mailer, Notifier, Monolog
PHPUnit (Tests)

Ce projet est une application backend Symfony pour une plateforme de gestion financière/mobile : authentification utilisateurs, transactions, transferts P2P, recharge (topup), paiements de factures/services, cartes, stats/dashboard. 

Tous les mots-clés couvrent les aspects métier (financier/bancaire) et techniques (PHP/Symfony/Doctrine). Si un fichier spécifique manque, la structure globale est exhaustive.