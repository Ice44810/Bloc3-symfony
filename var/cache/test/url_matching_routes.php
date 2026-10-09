<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/my-qr' => [[['_route' => 'app_my_qr', 'route' => 'app_qr', 'permanent' => false, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'], null, null, null, false, false, null]],
        '/contacts-legacy' => [[['_route' => 'app_contacts_legacy', 'route' => 'app_contact', 'permanent' => false, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'], null, null, null, false, false, null]],
        '/payment-sources' => [[['_route' => 'app_payment_sources', 'route' => 'app_card_index', 'permanent' => false, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'], null, null, null, false, false, null]],
        '/profile/edit' => [
            [['_route' => 'app_edit_profile', 'route' => 'app_profile', 'permanent' => false, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'], null, null, null, false, false, null],
            [['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\StaticController::profileEdit'], null, null, null, false, false, null],
        ],
        '/security' => [[['_route' => 'app_security', 'route' => 'app_settings_change_password', 'permanent' => false, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'], null, null, null, false, false, null]],
        '/notifications' => [[['_route' => 'app_notifications', 'route' => 'app_settings', 'permanent' => false, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', 'route' => 'app_help', 'permanent' => false, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', 'route' => 'app_reset_password_view', 'permanent' => false, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'], null, null, null, false, false, null]],
        '/home' => [
            [['_route' => 'app_dashboard', 'template' => 'home/index.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null],
            [['_route' => 'app_home_redirect', '_controller' => 'App\\Controller\\HomeController::homeRedirect'], null, null, null, false, false, null],
        ],
        '/card' => [
            [['_route' => 'app_card', 'template' => 'card/index.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null],
            [['_route' => 'app_card_index', '_controller' => 'App\\Controller\\CardController::index'], null, ['GET' => 0], null, false, false, null],
        ],
        '/settings/password' => [[['_route' => 'app_settings_password', 'template' => 'settings/change_password.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
        '/stats' => [
            [['_route' => 'app_stats', 'template' => 'stats/index.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null],
            [['_route' => 'app_stats_view', '_controller' => 'App\\Controller\\StatsController::statsView'], null, ['GET' => 0], null, false, false, null],
        ],
        '/transactions' => [
            [['_route' => 'app_transactions', 'template' => 'transactions/index.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null],
            [['_route' => 'app_transactions_view', '_controller' => 'App\\Controller\\TransactionController::transactionsView'], null, ['GET' => 0], null, false, false, null],
        ],
        '/bankhistory' => [[['_route' => 'app_bankhistory', 'template' => 'bankhistory/index.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
        '/services/electricity' => [
            [['_route' => 'app_service_electricity', 'template' => 'services/electricity.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null],
            [['_route' => 'app_services_electricity', '_controller' => 'App\\Controller\\ServicesController::electricity'], null, null, null, false, false, null],
        ],
        '/services/film' => [
            [['_route' => 'app_service_film', 'template' => 'services/film.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null],
            [['_route' => 'app_services_film', '_controller' => 'App\\Controller\\ServicesController::film'], null, null, null, false, false, null],
        ],
        '/services/internet' => [
            [['_route' => 'app_service_internet', 'template' => 'services/internet.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null],
            [['_route' => 'app_services_internet', '_controller' => 'App\\Controller\\ServicesController::internet'], null, null, null, false, false, null],
        ],
        '/services/mobile' => [
            [['_route' => 'app_service_mobile', 'template' => 'services/mobile.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null],
            [['_route' => 'app_services_mobile', '_controller' => 'App\\Controller\\ServicesController::mobile'], null, null, null, false, false, null],
        ],
        '/services/water' => [
            [['_route' => 'app_service_water', 'template' => 'services/water.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null],
            [['_route' => 'app_services_water', '_controller' => 'App\\Controller\\ServicesController::water'], null, null, null, false, false, null],
        ],
        '/api/notifications' => [[['_route' => 'api_notifications', '_controller' => 'App\\Controller\\ApiController::getNotifications'], null, ['GET' => 0], null, false, false, null]],
        '/api/auth/send-otp' => [[['_route' => 'send_otp', '_controller' => 'App\\Controller\\ApiController::sendOtp'], null, ['POST' => 0], null, false, false, null]],
        '/api/auth/verify-otp' => [[['_route' => 'verify_otp', '_controller' => 'App\\Controller\\ApiController::verifyOtp'], null, ['POST' => 0], null, false, false, null]],
        '/api/auth/reset-password' => [[['_route' => 'reset_password', '_controller' => 'App\\Controller\\ApiController::resetPassword'], null, ['POST' => 0], null, false, false, null]],
        '/api/auth/confirm-password' => [[['_route' => 'confirm_password_change', '_controller' => 'App\\Controller\\ApiController::confirmPasswordChange'], null, ['POST' => 0], null, false, false, null]],
        '/api/settings/notifications' => [
            [['_route' => 'get_notification_settings', '_controller' => 'App\\Controller\\ApiController::getNotificationSettings'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'update_notification_setting', '_controller' => 'App\\Controller\\ApiController::updateNotificationSetting'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/settings/security' => [
            [['_route' => 'get_security_settings', '_controller' => 'App\\Controller\\ApiController::getSecuritySettings'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'update_security_settings', '_controller' => 'App\\Controller\\ApiController::updateSecuritySettings'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/settings/residence' => [[['_route' => 'update_residence_country', '_controller' => 'App\\Controller\\ApiController::updateResidenceCountry'], null, ['POST' => 0], null, false, false, null]],
        '/api/services/favorites' => [[['_route' => 'get_favorite_services', '_controller' => 'App\\Controller\\ApiController::getFavoriteServices'], null, ['GET' => 0], null, false, false, null]],
        '/api/market/offers' => [[['_route' => 'get_market_offers', '_controller' => 'App\\Controller\\ApiController::getMarketOffers'], null, ['GET' => 0], null, false, false, null]],
        '/api/deals' => [[['_route' => 'get_deals', '_controller' => 'App\\Controller\\ApiController::getDeals'], null, ['GET' => 0], null, false, false, null]],
        '/api/giftcards' => [[['_route' => 'get_giftcards', '_controller' => 'App\\Controller\\ApiController::getGiftcards'], null, ['GET' => 0], null, false, false, null]],
        '/api/favorites' => [[['_route' => 'save_favorite', '_controller' => 'App\\Controller\\ApiController::saveFavorite'], null, ['POST' => 0], null, false, false, null]],
        '/reset-password' => [
            [['_route' => 'app_reset_password_view', '_controller' => 'App\\Controller\\AuthController::resetPasswordView'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_reset_password', 'template' => 'auth/reset_password.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null],
        ],
        '/api/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\AuthController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\AuthController::apiLogin'], null, ['POST' => 0], null, false, false, null]],
        '/api/users/reset-password' => [[['_route' => 'reset_password_request', '_controller' => 'App\\Controller\\AuthController::requestPasswordReset'], null, ['POST' => 0], null, false, false, null]],
        '/api/users/reset-password/confirm' => [[['_route' => 'reset_password_confirm', '_controller' => 'App\\Controller\\AuthController::resetPassword'], null, ['POST' => 0], null, false, false, null]],
        '/bank-history' => [[['_route' => 'app_bank_history', '_controller' => 'App\\Controller\\BankHistoryController::index'], null, null, null, false, false, null]],
        '/bill' => [[['_route' => 'app_bill', '_controller' => 'App\\Controller\\BillController::index'], null, null, null, false, false, null]],
        '/card/new' => [[['_route' => 'app_card_new', '_controller' => 'App\\Controller\\CardController::new'], null, ['GET' => 0], null, false, false, null]],
        '/api/cards' => [
            [['_route' => 'get_cards', '_controller' => 'App\\Controller\\CardController::getCards'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_card', '_controller' => 'App\\Controller\\CardController::createCard'], null, ['POST' => 0], null, false, false, null],
        ],
        '/card/info' => [[['_route' => 'app_card_info', '_controller' => 'App\\Controller\\CardController::info'], null, ['GET' => 0], null, false, false, null]],
        '/api/categories' => [
            [['_route' => 'get_categories', '_controller' => 'App\\Controller\\CategoryController::getCategories'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_category', '_controller' => 'App\\Controller\\CategoryController::createCategory'], null, ['POST' => 0], null, false, false, null],
        ],
        '/contacts' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, ['GET' => 0], null, false, false, null]],
        '/contacts/new' => [[['_route' => 'app_contact_new', '_controller' => 'App\\Controller\\ContactController::new'], null, ['GET' => 0], null, false, false, null]],
        '/api/contacts/list' => [[['_route' => 'app_api_contacts_list', '_controller' => 'App\\Controller\\ContactController::getRecipientsList'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/api/home' => [[['_route' => 'api_home_data', '_controller' => 'App\\Controller\\HomeController::getHomeData'], null, ['GET' => 0], null, false, false, null]],
        '/get-home-data' => [[['_route' => 'get_home_data', '_controller' => 'App\\Controller\\HomeController::getHomeDataAlias'], null, ['GET' => 0], null, false, false, null]],
        '/api/recipients' => [
            [['_route' => 'app_api_recipients_list', '_controller' => 'App\\Controller\\RecipientController::getRecipients'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_recipient', '_controller' => 'App\\Controller\\RecipientController::createRecipient'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/recipients/save' => [[['_route' => 'save_recipient', '_controller' => 'App\\Controller\\RecipientController::saveRecipient'], null, ['POST' => 0], null, false, false, null]],
        '/api/services/mobile' => [[['_route' => 'get_mobile', '_controller' => 'App\\Controller\\ServicesController::getMobileBills'], null, ['GET' => 0], null, false, false, null]],
        '/api/services/internet' => [[['_route' => 'get_internet', '_controller' => 'App\\Controller\\ServicesController::getInternetBills'], null, ['GET' => 0], null, false, false, null]],
        '/api/services/electricity' => [[['_route' => 'get_electricity', '_controller' => 'App\\Controller\\ServicesController::getElectricityBills'], null, ['GET' => 0], null, false, false, null]],
        '/api/services/water' => [[['_route' => 'get_water', '_controller' => 'App\\Controller\\ServicesController::getWaterBills'], null, ['GET' => 0], null, false, false, null]],
        '/api/services/film' => [[['_route' => 'get_film', '_controller' => 'App\\Controller\\ServicesController::getFilmOffers'], null, ['GET' => 0], null, false, false, null]],
        '/api/bills/pay' => [[['_route' => 'process_bill_payment', '_controller' => 'App\\Controller\\ServicesController::processBillPayment'], null, ['POST' => 0], null, false, false, null]],
        '/api/bills' => [[['_route' => 'get_bills', '_controller' => 'App\\Controller\\ServicesController::getBills'], null, ['GET' => 0], null, false, false, null]],
        '/help' => [[['_route' => 'app_help', '_controller' => 'App\\Controller\\StaticController::help'], null, null, null, false, false, null]],
        '/market' => [[['_route' => 'app_market', '_controller' => 'App\\Controller\\StaticController::market'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\StaticController::profile'], null, null, null, false, false, null]],
        '/settings' => [[['_route' => 'app_settings', '_controller' => 'App\\Controller\\StaticController::settings'], null, null, null, false, false, null]],
        '/qr' => [[['_route' => 'app_qr', '_controller' => 'App\\Controller\\StaticController::qr'], null, null, null, false, false, null]],
        '/rewards' => [[['_route' => 'app_rewards', '_controller' => 'App\\Controller\\StaticController::rewards'], null, null, null, false, false, null]],
        '/giftcard' => [[['_route' => 'app_giftcard', '_controller' => 'App\\Controller\\StaticController::giftcard'], null, null, null, false, false, null]],
        '/banque' => [[['_route' => 'app_banque', '_controller' => 'App\\Controller\\StaticController::banque'], null, null, null, false, false, null]],
        '/deals' => [[['_route' => 'app_deals', '_controller' => 'App\\Controller\\StaticController::deals'], null, null, null, false, false, null]],
        '/ui' => [[['_route' => 'app_ui_pages', '_controller' => 'App\\Controller\\StaticController::ui'], null, null, null, false, false, null]],
        '/settings/change-password' => [[['_route' => 'app_settings_change_password', '_controller' => 'App\\Controller\\StaticController::changePassword'], null, null, null, false, false, null]],
        '/settings/security' => [[['_route' => 'app_settings_security', '_controller' => 'App\\Controller\\StaticController::security'], null, null, null, false, false, null]],
        '/settings/notifications' => [[['_route' => 'app_settings_notification', '_controller' => 'App\\Controller\\StaticController::notifications'], null, null, null, false, false, null]],
        '/payment' => [[['_route' => 'app_payment', '_controller' => 'App\\Controller\\StaticController::payment'], null, null, null, false, false, null]],
        '/myqr' => [[['_route' => 'app_myqr', '_controller' => 'App\\Controller\\StaticController::myqr'], null, null, null, false, false, null]],
        '/topup' => [[['_route' => 'app_topup_view', '_controller' => 'App\\Controller\\StatsController::topupView'], null, ['GET' => 0], null, false, false, null]],
        '/api/stats/expenses' => [[['_route' => 'get_expense_stats', '_controller' => 'App\\Controller\\StatsController::getExpenseStats'], null, ['GET' => 0], null, false, false, null]],
        '/api/stats/income' => [[['_route' => 'get_income_stats', '_controller' => 'App\\Controller\\StatsController::getIncomeStats'], null, ['GET' => 0], null, false, false, null]],
        '/api/stats/evolution' => [[['_route' => 'get_monthly_evolution', '_controller' => 'App\\Controller\\StatsController::getMonthlyEvolution'], null, ['GET' => 0], null, false, false, null]],
        '/recharger' => [[['_route' => 'app_topup', '_controller' => 'App\\Controller\\TopupController::index'], null, null, null, false, false, null]],
        '/api/dashboard-data' => [[['_route' => 'get_dashboard', '_controller' => 'App\\Controller\\TopupController::getDashboardData'], null, ['GET' => 0], null, false, false, null]],
        '/api/user-cards' => [[['_route' => 'get_user_cards', '_controller' => 'App\\Controller\\TopupController::getUserCards'], null, ['GET' => 0], null, false, false, null]],
        '/api/process-topup' => [[['_route' => 'process_topup', '_controller' => 'App\\Controller\\TopupController::processTopup'], null, ['POST' => 0], null, false, false, null]],
        '/api/transactions' => [
            [['_route' => 'get_transactions', '_controller' => 'App\\Controller\\TransactionController::getTransactions'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_transaction', '_controller' => 'App\\Controller\\TransactionController::createTransaction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/balance' => [[['_route' => 'api_balance', '_controller' => 'App\\Controller\\TransactionController::getBalance'], null, ['GET' => 0], null, false, false, null]],
        '/transfert/bybank' => [[['_route' => 'app_transfer_by_bank', '_controller' => 'App\\Controller\\TransfertController::bybank'], null, ['GET' => 0], null, false, false, null]],
        '/transfert' => [[['_route' => 'app_transfert', '_controller' => 'App\\Controller\\TransfertController::index'], null, ['GET' => 0], null, false, false, null]],
        '/transfert/confirm' => [[['_route' => 'app_transfert_confirm', '_controller' => 'App\\Controller\\TransfertController::confirm'], null, ['GET' => 0], null, false, false, null]],
        '/api/transfert' => [[['_route' => 'api_transfert', '_controller' => 'App\\Controller\\TransfertController::apiTransfer'], null, ['POST' => 0], null, false, false, null]],
        '/api/users/profile' => [
            [['_route' => 'get_profile', '_controller' => 'App\\Controller\\UserController::getProfile'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'update_profile', '_controller' => 'App\\Controller\\UserController::updateProfile'], null, ['PUT' => 0], null, false, false, null],
        ],
        '/api/users/change-password' => [[['_route' => 'change_password', '_controller' => 'App\\Controller\\UserController::changePassword'], null, ['POST' => 0], null, false, false, null]],
        '/api/users' => [[['_route' => 'get_all_users', '_controller' => 'App\\Controller\\UserController::getAllUsers'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', 'template' => 'auth/login.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', 'template' => 'auth/register.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register_alias', 'route' => 'app_register', 'permanent' => false, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'], null, null, null, false, false, null]],
        '/inscription.html' => [[['_route' => 'app_register_legacy_html', 'route' => 'app_register', 'permanent' => false, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/c(?'
                    .'|ontact(?'
                        .'|/([^/]++)(*:30)'
                        .'|s/(\\d+)(*:44)'
                    .')'
                    .'|ard/([^/]++)/(?'
                        .'|increase\\-limit(*:83)'
                        .'|manage\\-recharge(*:106)'
                    .')'
                .')'
                .'|/api/(?'
                    .'|vouchers/([^/]++)(*:141)'
                    .'|ca(?'
                        .'|rds/([^/]++)(?'
                            .'|(*:169)'
                        .')'
                        .'|tegories/(\\d+)(?'
                            .'|(*:195)'
                        .')'
                    .')'
                    .'|recipients/(?'
                        .'|(\\d+)(?'
                            .'|(*:227)'
                        .')'
                        .'|(\\d+)/details(*:249)'
                    .')'
                    .'|transactions/(\\d+)(?'
                        .'|(*:279)'
                    .')'
                .')'
                .'|/giftcard/([^/]++)(*:307)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'app_contact_detail_legacy', 'route' => 'app_contact_detail', 'permanent' => false, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'], ['id'], null, null, false, true, null]],
        44 => [[['_route' => 'app_contact_detail', '_controller' => 'App\\Controller\\ContactController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        83 => [[['_route' => 'app_card_increase_limit', '_controller' => 'App\\Controller\\CardController::increaseLimit'], ['id'], null, null, false, false, null]],
        106 => [[['_route' => 'app_card_manage_recharge', '_controller' => 'App\\Controller\\CardController::manageRecharge'], ['id'], null, null, false, false, null]],
        141 => [[['_route' => 'get_voucher_details', '_controller' => 'App\\Controller\\ApiController::getVoucherDetails'], ['id'], ['GET' => 0], null, false, true, null]],
        169 => [
            [['_route' => 'get_card', '_controller' => 'App\\Controller\\CardController::getCard'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_card', '_controller' => 'App\\Controller\\CardController::updateCard'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_card', '_controller' => 'App\\Controller\\CardController::deleteCard'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        195 => [
            [['_route' => 'get_category', '_controller' => 'App\\Controller\\CategoryController::getCategory'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_category', '_controller' => 'App\\Controller\\CategoryController::updateCategory'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_category', '_controller' => 'App\\Controller\\CategoryController::deleteCategory'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        227 => [
            [['_route' => 'get_recipient', '_controller' => 'App\\Controller\\RecipientController::getRecipient'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_recipient', '_controller' => 'App\\Controller\\RecipientController::updateRecipient'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_recipient', '_controller' => 'App\\Controller\\RecipientController::deleteRecipient'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        249 => [[['_route' => 'get_contact_details', '_controller' => 'App\\Controller\\RecipientController::getContactDetails'], ['id'], ['GET' => 0], null, false, false, null]],
        279 => [
            [['_route' => 'get_transaction', '_controller' => 'App\\Controller\\TransactionController::getTransaction'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_transaction', '_controller' => 'App\\Controller\\TransactionController::updateTransaction'], ['id'], ['PUT' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'delete_transaction', '_controller' => 'App\\Controller\\TransactionController::deleteTransaction'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        307 => [
            [['_route' => 'app_giftcard_detail', '_controller' => 'App\\Controller\\StaticController::giftcardDetail'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
