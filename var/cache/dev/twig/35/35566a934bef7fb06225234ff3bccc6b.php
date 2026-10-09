<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* card/info.html.twig */
class __TwigTemplate_fbebf2fd179266b56388b67c6a1b427b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/info.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Informations Carte - Budget App";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        yield "<style>
    .disabled-link {
        pointer-events: none;
        opacity: 0.5;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        yield "
<div class=\"container\">
    <div class=\"breadcrumb mt-3\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_banque");
        yield "\">Compte Bancaire</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                    <span class=\"bi bi-credit-card text-primary\" style=\"font-size: 15px;\">
                    </span>Informations Carte
                </li>
            </ol>
        </nav>
    </div>

    <!-- Informations de la carte -->
    <div class=\"card-container\">
        <div class=\"credit-card shadow-sm mb-3 p-3 position-relative\" id=\"cardInfo\">
            <div class=\"d-flex justify-content-between align-items-start mb-4\">
                <img src=\"/assets/images/icons8-visa-48.png\" alt=\"visa logo\" style=\"width: 60px;\" id=\"cardLogo\" />
                <i class=\"bi bi-trash3 text-white\" id=\"deleteinfo\" data-bs-toggle=\"offcanvas\"
                    data-bs-target=\"#deleteCardSheet\" style=\"cursor: pointer;\"></i>
            </div>
            <div class=\"mb-2\">
                <span class=\"card-number\" id=\"cardNumber\">**** **** **** ----</span>
            </div>
            <div class=\"card-footer-info d-flex justify-content-between\">
                <div>
                    <small class=\"d-block\">Exp Date</small>
                    <strong id=\"cardExpiry\">--/--</strong>
                </div>
                <div class=\"text-end\">
                    <small class=\"d-block\">CVV Num</small>
                    <strong id=\"cardCvv\">***</strong>
                </div>
            </div>
        </div>

        <!-- Services de la carte -->
        <h6 class=\"fw-bold mb-3\">Service Carte</h6>
        <div class=\"card shadow-sm border-0 p-3\">
            <div class=\"service-row text-muted\">
                <span class=\"small\">Recharge minimum</span>
                <strong class=\"text-dark\" id=\"minRecharge\">€...</strong>
            </div>
            <div class=\"service-row text-muted\">
                <span class=\"small\">Limite Recharge</span>
                <strong class=\"text-dark\" id=\"rechargeLimit\">€...</strong>
            </div>
            <div class=\"service-row text-muted\">
                <span class=\"small\">Limite paiement</span>
                <strong class=\"text-dark\" id=\"paymentLimit\">€...</strong>
            </div>
            <div class=\"service-row text-muted border-0\">
                <span class=\"small\">Limite journalière</span>
                <strong class=\"text-dark\" id=\"dailyLimit\">€...</strong>
            </div>
        </div>

        <!-- Services avancés -->
        <h6 class=\"fw-bold mt-3 mb-3\">Services avancés</h6>
        <div id=\"increaseLimitBtn\" class=\"card shadow-sm border-0 p-2 mb-2 d-flex flex-row justify-content-between align-items-center disabled-link\"
             role=\"button\" onclick=\"increaseLimit()\">
            <span>Augmentation de la Limite</span>
            <i class=\"bi bi-chevron-right\"></i>
        </div>
        <div id=\"manageRechargeBtn\" class=\"card shadow-sm border-0 p-2 d-flex flex-row justify-content-between align-items-center disabled-link\"
             role=\"button\" onclick=\"manageRecharge()\">
            <span>Gérer la recharge</span>
            <i class=\"bi bi-chevron-right\"></i>
        </div>
    </div>
</div>

<!-- Offcanvas pour supprimer la carte -->
<div class=\"offcanvas offcanvas-bottom action-sheet-ios\" tabindex=\"-1\" id=\"deleteCardSheet\">
    <div class=\"offcanvas-body small\">
        <div class=\"list-group rounded-4 mb-2\">
            <div class=\"list-group-item text-center py-2\">
                <small class=\"mb-0 text-muted extra-small\">
                    Êtes-vous sûr de vouloir supprimer cette carte ?
                </small>
            </div>
            <button type=\"button\"
                class=\"list-group-item list-group-item-action text-center text-danger fw-semibold py-3\"
                id=\"confirmDelete\">
                Supprimer la carte
            </button>
        </div>

        <button type=\"button\" class=\"btn btn-white w-100 rounded-4 py-3 fw-bold text-primary-ios\"
            data-bs-dismiss=\"offcanvas\">
            Annuler
        </button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', async () => {
        // Charger les informations de la carte depuis l'API
        await loadCardDetails();

        // Configurer la suppression de la carte
        setupDeleteCard();
    });

    // Charger les détails de la carte depuis l'API
    async function loadCardDetails() {
    try {
        const urlParams = new URLSearchParams(window.location.search);
        const cardId = urlParams.get('id');
        let cardData = null;

        // Récupération des données
        const route = cardId 
            ? `";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_card", ["id" => "PLACEHOLDER"]);
        yield "`.replace('PLACEHOLDER', cardId)
            : '";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_cards");
        yield "';

        const response = await fetch(route);
        const result = await response.json();

        if (result.success) {
            cardData = cardId ? result.card : result.cards[0];
        }

        if (cardData) {
            // Stocker l'ID de la carte
            document.getElementById('cardInfo').dataset.cardId = cardData.id;

            // Remplissage des champs de la carte
            document.getElementById('cardNumber').textContent = `**** **** **** \${cardData.last_4_digits}`;
            document.getElementById('cardExpiry').textContent = cardData.expiry_date;
            document.getElementById('cardCvv').textContent = '***';

            // Remplissage des Services Carte (Règles)
            document.getElementById('minRecharge').textContent = `€\${cardData.min_recharge}`;
            document.getElementById('rechargeLimit').textContent = `€\${cardData.recharge_limit}`;
            document.getElementById('paymentLimit').textContent = `€\${cardData.payment_limit}`;
            document.getElementById('dailyLimit').textContent = `€\${cardData.daily_limit}`;

            // Gestion dynamique du logo
            const brand = (cardData.card_brand || 'visa').toLowerCase();
            const logoImg = document.getElementById('cardLogo');
            
            // Chemin vers vos icônes (assurez-vous qu'elles sont dans public/assets/images/)
            logoImg.src = `/assets/images/icons8-\${brand}-48.png`;
            
            // Activer les boutons de service avancé
            document.getElementById('increaseLimitBtn').classList.remove('disabled-link');
            document.getElementById('manageRechargeBtn').classList.remove('disabled-link');
        }
    } catch (error) {
        console.error('Erreur :', error);
    }
}

    // Configurer la suppression de la carte
    function setupDeleteCard() {
        const confirmBtn = document.getElementById('confirmDelete');

        confirmBtn.addEventListener('click', async function () {
            const cardInfo = document.getElementById('cardInfo');
            const cardId = cardInfo.dataset.cardId;

            // Animation de sortie
            cardInfo.style.transition = \"all 0.4s ease\";
            cardInfo.style.opacity = \"0\";
            cardInfo.style.transform = \"scale(0.9)\";

            // Fermer l'Offcanvas
            const offcanvasElement = document.getElementById('deleteCardSheet');
            const instance = bootstrap.Offcanvas.getInstance(offcanvasElement);
            instance.hide();

            // Supprimer après animation
            setTimeout(async () => {
                // Appel API pour supprimer la carte
                try {
                    const response = await fetch(`";
        // line 193
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_card", ["id" => "PLACEHOLDER"]);
        yield "`.replace('PLACEHOLDER', cardId), {
                        method: 'DELETE'
                    });
                    const result = await response.json();

                    if (result.success) {
                        alert('Carte supprimée avec succès');
                        // Rediriger vers la liste des cartes
                        window.location.href = '";
        // line 201
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_card_index");
        yield "';
                    } else {
                        alert('Erreur lors de la suppression');
                    }
                } catch (error) {
                    console.error('Erreur:', error);
                    alert('Erreur lors de la suppression');
                }
            }, 400);
        });
    }

    // Fonction pour augmenter la limite
    function increaseLimit() {
        const cardId = document.getElementById('cardInfo').dataset.cardId;
        if (cardId) {
            window.location.href = `";
        // line 217
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_card_increase_limit", ["id" => "PLACEHOLDER"]);
        yield "`.replace('PLACEHOLDER', cardId);
        } else {
            console.error('Aucun ID de carte disponible');
        }
    }

    // Fonction pour gérer la recharge
    function manageRecharge() {
        const cardId = document.getElementById('cardInfo').dataset.cardId;
        if (cardId) {
            window.location.href = `";
        // line 227
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_card_manage_recharge", ["id" => "PLACEHOLDER"]);
        yield "`.replace('PLACEHOLDER', cardId);
        } else {
            console.error('Aucun ID de carte disponible');
        }
    }
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "card/info.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  366 => 227,  353 => 217,  334 => 201,  323 => 193,  258 => 131,  254 => 130,  142 => 21,  138 => 20,  131 => 15,  118 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Informations Carte - Budget App{% endblock %}

{% block head %}
<style>
    .disabled-link {
        pointer-events: none;
        opacity: 0.5;
    }
</style>
{% endblock %}

{% block body %}

<div class=\"container\">
    <div class=\"breadcrumb mt-3\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_banque') }}\">Compte Bancaire</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                    <span class=\"bi bi-credit-card text-primary\" style=\"font-size: 15px;\">
                    </span>Informations Carte
                </li>
            </ol>
        </nav>
    </div>

    <!-- Informations de la carte -->
    <div class=\"card-container\">
        <div class=\"credit-card shadow-sm mb-3 p-3 position-relative\" id=\"cardInfo\">
            <div class=\"d-flex justify-content-between align-items-start mb-4\">
                <img src=\"/assets/images/icons8-visa-48.png\" alt=\"visa logo\" style=\"width: 60px;\" id=\"cardLogo\" />
                <i class=\"bi bi-trash3 text-white\" id=\"deleteinfo\" data-bs-toggle=\"offcanvas\"
                    data-bs-target=\"#deleteCardSheet\" style=\"cursor: pointer;\"></i>
            </div>
            <div class=\"mb-2\">
                <span class=\"card-number\" id=\"cardNumber\">**** **** **** ----</span>
            </div>
            <div class=\"card-footer-info d-flex justify-content-between\">
                <div>
                    <small class=\"d-block\">Exp Date</small>
                    <strong id=\"cardExpiry\">--/--</strong>
                </div>
                <div class=\"text-end\">
                    <small class=\"d-block\">CVV Num</small>
                    <strong id=\"cardCvv\">***</strong>
                </div>
            </div>
        </div>

        <!-- Services de la carte -->
        <h6 class=\"fw-bold mb-3\">Service Carte</h6>
        <div class=\"card shadow-sm border-0 p-3\">
            <div class=\"service-row text-muted\">
                <span class=\"small\">Recharge minimum</span>
                <strong class=\"text-dark\" id=\"minRecharge\">€...</strong>
            </div>
            <div class=\"service-row text-muted\">
                <span class=\"small\">Limite Recharge</span>
                <strong class=\"text-dark\" id=\"rechargeLimit\">€...</strong>
            </div>
            <div class=\"service-row text-muted\">
                <span class=\"small\">Limite paiement</span>
                <strong class=\"text-dark\" id=\"paymentLimit\">€...</strong>
            </div>
            <div class=\"service-row text-muted border-0\">
                <span class=\"small\">Limite journalière</span>
                <strong class=\"text-dark\" id=\"dailyLimit\">€...</strong>
            </div>
        </div>

        <!-- Services avancés -->
        <h6 class=\"fw-bold mt-3 mb-3\">Services avancés</h6>
        <div id=\"increaseLimitBtn\" class=\"card shadow-sm border-0 p-2 mb-2 d-flex flex-row justify-content-between align-items-center disabled-link\"
             role=\"button\" onclick=\"increaseLimit()\">
            <span>Augmentation de la Limite</span>
            <i class=\"bi bi-chevron-right\"></i>
        </div>
        <div id=\"manageRechargeBtn\" class=\"card shadow-sm border-0 p-2 d-flex flex-row justify-content-between align-items-center disabled-link\"
             role=\"button\" onclick=\"manageRecharge()\">
            <span>Gérer la recharge</span>
            <i class=\"bi bi-chevron-right\"></i>
        </div>
    </div>
</div>

<!-- Offcanvas pour supprimer la carte -->
<div class=\"offcanvas offcanvas-bottom action-sheet-ios\" tabindex=\"-1\" id=\"deleteCardSheet\">
    <div class=\"offcanvas-body small\">
        <div class=\"list-group rounded-4 mb-2\">
            <div class=\"list-group-item text-center py-2\">
                <small class=\"mb-0 text-muted extra-small\">
                    Êtes-vous sûr de vouloir supprimer cette carte ?
                </small>
            </div>
            <button type=\"button\"
                class=\"list-group-item list-group-item-action text-center text-danger fw-semibold py-3\"
                id=\"confirmDelete\">
                Supprimer la carte
            </button>
        </div>

        <button type=\"button\" class=\"btn btn-white w-100 rounded-4 py-3 fw-bold text-primary-ios\"
            data-bs-dismiss=\"offcanvas\">
            Annuler
        </button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', async () => {
        // Charger les informations de la carte depuis l'API
        await loadCardDetails();

        // Configurer la suppression de la carte
        setupDeleteCard();
    });

    // Charger les détails de la carte depuis l'API
    async function loadCardDetails() {
    try {
        const urlParams = new URLSearchParams(window.location.search);
        const cardId = urlParams.get('id');
        let cardData = null;

        // Récupération des données
        const route = cardId 
            ? `{{ path('get_card', {'id': 'PLACEHOLDER'}) }}`.replace('PLACEHOLDER', cardId)
            : '{{ path('get_cards') }}';

        const response = await fetch(route);
        const result = await response.json();

        if (result.success) {
            cardData = cardId ? result.card : result.cards[0];
        }

        if (cardData) {
            // Stocker l'ID de la carte
            document.getElementById('cardInfo').dataset.cardId = cardData.id;

            // Remplissage des champs de la carte
            document.getElementById('cardNumber').textContent = `**** **** **** \${cardData.last_4_digits}`;
            document.getElementById('cardExpiry').textContent = cardData.expiry_date;
            document.getElementById('cardCvv').textContent = '***';

            // Remplissage des Services Carte (Règles)
            document.getElementById('minRecharge').textContent = `€\${cardData.min_recharge}`;
            document.getElementById('rechargeLimit').textContent = `€\${cardData.recharge_limit}`;
            document.getElementById('paymentLimit').textContent = `€\${cardData.payment_limit}`;
            document.getElementById('dailyLimit').textContent = `€\${cardData.daily_limit}`;

            // Gestion dynamique du logo
            const brand = (cardData.card_brand || 'visa').toLowerCase();
            const logoImg = document.getElementById('cardLogo');
            
            // Chemin vers vos icônes (assurez-vous qu'elles sont dans public/assets/images/)
            logoImg.src = `/assets/images/icons8-\${brand}-48.png`;
            
            // Activer les boutons de service avancé
            document.getElementById('increaseLimitBtn').classList.remove('disabled-link');
            document.getElementById('manageRechargeBtn').classList.remove('disabled-link');
        }
    } catch (error) {
        console.error('Erreur :', error);
    }
}

    // Configurer la suppression de la carte
    function setupDeleteCard() {
        const confirmBtn = document.getElementById('confirmDelete');

        confirmBtn.addEventListener('click', async function () {
            const cardInfo = document.getElementById('cardInfo');
            const cardId = cardInfo.dataset.cardId;

            // Animation de sortie
            cardInfo.style.transition = \"all 0.4s ease\";
            cardInfo.style.opacity = \"0\";
            cardInfo.style.transform = \"scale(0.9)\";

            // Fermer l'Offcanvas
            const offcanvasElement = document.getElementById('deleteCardSheet');
            const instance = bootstrap.Offcanvas.getInstance(offcanvasElement);
            instance.hide();

            // Supprimer après animation
            setTimeout(async () => {
                // Appel API pour supprimer la carte
                try {
                    const response = await fetch(`{{ path('delete_card', {'id': 'PLACEHOLDER'}) }}`.replace('PLACEHOLDER', cardId), {
                        method: 'DELETE'
                    });
                    const result = await response.json();

                    if (result.success) {
                        alert('Carte supprimée avec succès');
                        // Rediriger vers la liste des cartes
                        window.location.href = '{{ path('app_card_index') }}';
                    } else {
                        alert('Erreur lors de la suppression');
                    }
                } catch (error) {
                    console.error('Erreur:', error);
                    alert('Erreur lors de la suppression');
                }
            }, 400);
        });
    }

    // Fonction pour augmenter la limite
    function increaseLimit() {
        const cardId = document.getElementById('cardInfo').dataset.cardId;
        if (cardId) {
            window.location.href = `{{ path('app_card_increase_limit', {'id': 'PLACEHOLDER'}) }}`.replace('PLACEHOLDER', cardId);
        } else {
            console.error('Aucun ID de carte disponible');
        }
    }

    // Fonction pour gérer la recharge
    function manageRecharge() {
        const cardId = document.getElementById('cardInfo').dataset.cardId;
        if (cardId) {
            window.location.href = `{{ path('app_card_manage_recharge', {'id': 'PLACEHOLDER'}) }}`.replace('PLACEHOLDER', cardId);
        } else {
            console.error('Aucun ID de carte disponible');
        }
    }
</script>
{% endblock %}
", "card/info.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/card/info.html.twig");
    }
}
