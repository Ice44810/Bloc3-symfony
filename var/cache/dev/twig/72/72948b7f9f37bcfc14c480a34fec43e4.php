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

/* services/management.html.twig */
class __TwigTemplate_31274dc0d60db892c1ae2090ffd4ce3f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/management.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/management.html.twig"));

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

        yield "Gérer les services - Budget App";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <!-- Header -->
    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rewards");
        yield "\">Mes Récompenses</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-receipt text-primary\" style=\"font-size: 15px;\"></span>
                        Gérer les services
                    </li>
                </ol>
            </nav>
        </div>

        <!-- 1ere partie tableau : catégories -->
        <div class=\"container-fluid service-header border shadow-sm rounded-4 bg-white\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <h6 class=\"service-title mb-3 mt-1 fw-semibold\">Service Favoris</h6>
                <button id=\"btnEdit\" class=\"btn btn-sm btn rounded-pill px-0\">Modifier</button>
            </div>
            <div class=\"row row-cols-4 row-cols-md-4 g-3\" id=\"favoriteContainer\">
                <div class=\"col category-item position-relative\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e1f5fe;\">
                        <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rewards");
        yield "\"><i class=\"bi bi-gift-fill text-danger\"></i></a>
                    </div>
                    <p class=\"small\">Chèque cadeau</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #fce4ec;\">
                        <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rewards");
        yield "\"><i class=\"bi bi-basket-fill text-warning\"></i></a>
                    </div>
                    <p class=\"small\">Cosmétique</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #fff9c4;\">
                        <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rewards");
        yield "\"><i class=\"bi bi-shop text-success\"></i></a>
                    </div>
                    <p class=\"small\">Shopping</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e0f2f1;\">
                        <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rewards");
        yield "\"><i class=\"bi bi-cake2 text-secondary\"></i></a>
                    </div>
                    <p class=\"small\">Restaurant</p>
                </div>
            </div>
        </div>
        
        <!-- Autres services -->
        <div class=\"container-fluid service-header border shadow-sm rounded-4 bg-white mt-1 px-3\">
            <h6 class=\"service-title mt-3 fw-semibold mb-3\">Autres services</h6>
            <p class=\"service-title fw-normal\">Accumulation</p>
            <div class=\"row row-cols-4 row-cols-md-4 g-3\">
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e1f5fe;\">
                        <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_card_index");
        yield "\"><i class=\"bi bi-credit-card-fill text-info\"></i></a>
                    </div>
                    <p class=\"small\">Carte</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #fce4ec;\">
                        <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rewards");
        yield "\"><i class=\"bi bi-stars text-warning\"></i></a>
                    </div>
                    <p class=\"small\">Points</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #fff9c4;\">
                        <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_banque");
        yield "\"><i class=\"bi bi-bank text-success\"></i></a>
                    </div>
                    <p class=\"small\">Banque</p>
                </div>
            </div>
            
            <p class=\"service-title px-4 fw-normal\">Paiements</p>
            <div class=\"row row-cols-4 row-cols-md-4 g-3\">
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e1f5fe;\">
                        <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_topup_view");
        yield "\"><i class=\"bi bi-wallet2 text-danger\"></i></a>
                    </div>
                    <p class=\"small\">Recharge</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #98c1ea;\">
                        <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_qr");
        yield "\"><i class=\"bi bi-qr-code-scan text-dark\"></i></a>
                    </div>
                    <p class=\"small\">Code scan</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #fff9c4;\">
                        <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rewards");
        yield "\"><i class=\"bi bi-shop text-success\"></i></a>
                    </div>
                    <p class=\"small\">Shopping</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e0ecf3;\">
                        <a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_banque");
        yield "\"><i class=\"bi bi-bank text-success\"></i></a>
                    </div>
                    <p class=\"small\">Banque</p>
                </div>
            </div>
            
            <p class=\"service-title px-4 fw-normal\">Reçus</p>
            <div class=\"row row-cols-4 row-cols-md-4 g-3\">
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e1f5fe;\">
                        <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_mobile");
        yield "\"><i class=\"bi bi-phone text-primary\"></i></a>
                    </div>
                    <p class=\"small\">Mobile</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #98c1ea;\">
                        <a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_internet");
        yield "\"><i class=\"bi bi-wifi text-primary\"></i></a>
                    </div>
                    <p class=\"small\">Internet</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e8baba;\">
                        <a href=\"";
        // line 166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rewards");
        yield "\"><i class=\"bi bi-cash-coin text-success\"></i></a>
                    </div>
                    <p class=\"small\">Réductions</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e0f2f1;\">
                        <a href=\"";
        // line 175
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bill");
        yield "\"><i class=\"bi bi-receipt text-info\"></i></a>
                    </div>
                    <p class=\"small\">Facture</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e1f5fe;\">
                        <a href=\"";
        // line 184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_electricity");
        yield "\"><i class=\"bi bi-lightning-fill text-warning\"></i></a>
                    </div>
                    <p class=\"small\">Electricité</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #dedbdc;\">
                        <a href=\"";
        // line 193
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_film");
        yield "\"><i class=\"bi bi-film text-danger\"></i></a>
                    </div>
                    <p class=\"small\">Film</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #dcddde;\">
                        <a href=\"";
        // line 202
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_water");
        yield "\"><i class=\"bi bi-droplet-fill text-primary\"></i></a>
                    </div>
                    <p class=\"small\">Facture eau</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e0f2f1;\">
                        <a href=\"";
        // line 211
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_market");
        yield "\"><i class=\"bi bi-cart4 text-secondary\"></i></a>
                    </div>
                    <p class=\"small\">Marchés</p>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener(\"DOMContentLoaded\", function () {
                const serviceCards = document.querySelectorAll('.category-item');
                const allServices = [];

                serviceCards.forEach((card) => {
                    const serviceName = card.querySelector('p').textContent.trim();
                    const iconElement = card.querySelector('i');
                    const iconClass = iconElement ? iconElement.className : \"No icon\";
                    const bgColor = card.querySelector('.category-icon').style.backgroundColor;

                    allServices.push({
                        name: serviceName,
                        icon: iconClass,
                        backgroundColor: bgColor
                    });

                    card.addEventListener('click', function () {
                        console.log(\"Service sélectionné : \" + serviceName);
                    });
                });
            });

            // Fonctionnalité Modifier
            document.addEventListener(\"DOMContentLoaded\", function () {
                const btnEdit = document.getElementById('btnEdit');
                let isEditMode = false;

                btnEdit.addEventListener('click', function () {
                    isEditMode = !isEditMode;
                    const allBadges = document.querySelectorAll('.delete-badge');
                    const allItems = document.querySelectorAll('.category-item');

                    if (isEditMode) {
                        this.textContent = \"Terminer\";
                        this.classList.replace('btn-outline-primary', 'btn-success');
                        allBadges.forEach(badge => badge.style.display = 'block');
                        allItems.forEach(item => item.classList.add('edit-mode'));
                    } else {
                        this.textContent = \"Modifier\";
                        this.classList.replace('btn-success', 'btn-outline-primary');
                        allBadges.forEach(badge => badge.style.display = 'none');
                        allItems.forEach(item => item.classList.remove('edit-mode'));
                    }
                });

                document.addEventListener('click', function (e) {
                    if (e.target.closest('.delete-badge')) {
                        const card = e.target.closest('.col');
                        card.remove();
                    }

                    if (isEditMode && e.target.closest('a')) {
                        e.preventDefault();
                    }
                });
            });
        </script>
    </div>
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
        return "services/management.html.twig";
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
        return array (  367 => 211,  355 => 202,  343 => 193,  331 => 184,  319 => 175,  307 => 166,  295 => 157,  283 => 148,  267 => 135,  255 => 126,  243 => 117,  231 => 108,  215 => 95,  203 => 86,  191 => 77,  171 => 60,  159 => 51,  147 => 42,  135 => 33,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gérer les services - Budget App{% endblock %}

{% block body %}
    <!-- Header -->
    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_rewards') }}\">Mes Récompenses</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-receipt text-primary\" style=\"font-size: 15px;\"></span>
                        Gérer les services
                    </li>
                </ol>
            </nav>
        </div>

        <!-- 1ere partie tableau : catégories -->
        <div class=\"container-fluid service-header border shadow-sm rounded-4 bg-white\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <h6 class=\"service-title mb-3 mt-1 fw-semibold\">Service Favoris</h6>
                <button id=\"btnEdit\" class=\"btn btn-sm btn rounded-pill px-0\">Modifier</button>
            </div>
            <div class=\"row row-cols-4 row-cols-md-4 g-3\" id=\"favoriteContainer\">
                <div class=\"col category-item position-relative\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e1f5fe;\">
                        <a href=\"{{ path('app_rewards') }}\"><i class=\"bi bi-gift-fill text-danger\"></i></a>
                    </div>
                    <p class=\"small\">Chèque cadeau</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #fce4ec;\">
                        <a href=\"{{ path('app_rewards') }}\"><i class=\"bi bi-basket-fill text-warning\"></i></a>
                    </div>
                    <p class=\"small\">Cosmétique</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #fff9c4;\">
                        <a href=\"{{ path('app_rewards') }}\"><i class=\"bi bi-shop text-success\"></i></a>
                    </div>
                    <p class=\"small\">Shopping</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e0f2f1;\">
                        <a href=\"{{ path('app_rewards') }}\"><i class=\"bi bi-cake2 text-secondary\"></i></a>
                    </div>
                    <p class=\"small\">Restaurant</p>
                </div>
            </div>
        </div>
        
        <!-- Autres services -->
        <div class=\"container-fluid service-header border shadow-sm rounded-4 bg-white mt-1 px-3\">
            <h6 class=\"service-title mt-3 fw-semibold mb-3\">Autres services</h6>
            <p class=\"service-title fw-normal\">Accumulation</p>
            <div class=\"row row-cols-4 row-cols-md-4 g-3\">
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e1f5fe;\">
                        <a href=\"{{ path('app_card_index') }}\"><i class=\"bi bi-credit-card-fill text-info\"></i></a>
                    </div>
                    <p class=\"small\">Carte</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #fce4ec;\">
                        <a href=\"{{ path('app_rewards') }}\"><i class=\"bi bi-stars text-warning\"></i></a>
                    </div>
                    <p class=\"small\">Points</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #fff9c4;\">
                        <a href=\"{{ path('app_banque') }}\"><i class=\"bi bi-bank text-success\"></i></a>
                    </div>
                    <p class=\"small\">Banque</p>
                </div>
            </div>
            
            <p class=\"service-title px-4 fw-normal\">Paiements</p>
            <div class=\"row row-cols-4 row-cols-md-4 g-3\">
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e1f5fe;\">
                        <a href=\"{{ path('app_topup_view') }}\"><i class=\"bi bi-wallet2 text-danger\"></i></a>
                    </div>
                    <p class=\"small\">Recharge</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #98c1ea;\">
                        <a href=\"{{ path('app_qr') }}\"><i class=\"bi bi-qr-code-scan text-dark\"></i></a>
                    </div>
                    <p class=\"small\">Code scan</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #fff9c4;\">
                        <a href=\"{{ path('app_rewards') }}\"><i class=\"bi bi-shop text-success\"></i></a>
                    </div>
                    <p class=\"small\">Shopping</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e0ecf3;\">
                        <a href=\"{{ path('app_banque') }}\"><i class=\"bi bi-bank text-success\"></i></a>
                    </div>
                    <p class=\"small\">Banque</p>
                </div>
            </div>
            
            <p class=\"service-title px-4 fw-normal\">Reçus</p>
            <div class=\"row row-cols-4 row-cols-md-4 g-3\">
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e1f5fe;\">
                        <a href=\"{{ path('app_services_mobile') }}\"><i class=\"bi bi-phone text-primary\"></i></a>
                    </div>
                    <p class=\"small\">Mobile</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #98c1ea;\">
                        <a href=\"{{ path('app_services_internet') }}\"><i class=\"bi bi-wifi text-primary\"></i></a>
                    </div>
                    <p class=\"small\">Internet</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e8baba;\">
                        <a href=\"{{ path('app_rewards') }}\"><i class=\"bi bi-cash-coin text-success\"></i></a>
                    </div>
                    <p class=\"small\">Réductions</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e0f2f1;\">
                        <a href=\"{{ path('app_bill') }}\"><i class=\"bi bi-receipt text-info\"></i></a>
                    </div>
                    <p class=\"small\">Facture</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e1f5fe;\">
                        <a href=\"{{ path('app_services_electricity') }}\"><i class=\"bi bi-lightning-fill text-warning\"></i></a>
                    </div>
                    <p class=\"small\">Electricité</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #dedbdc;\">
                        <a href=\"{{ path('app_services_film') }}\"><i class=\"bi bi-film text-danger\"></i></a>
                    </div>
                    <p class=\"small\">Film</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #dcddde;\">
                        <a href=\"{{ path('app_services_water') }}\"><i class=\"bi bi-droplet-fill text-primary\"></i></a>
                    </div>
                    <p class=\"small\">Facture eau</p>
                </div>
                <div class=\"col category-item\">
                    <div class=\"delete-badge\" style=\"display: none;\">
                        <i class=\"bi bi-x-circle-fill text-danger\"></i>
                    </div>
                    <div class=\"category-icon\" style=\"background-color: #e0f2f1;\">
                        <a href=\"{{ path('app_market') }}\"><i class=\"bi bi-cart4 text-secondary\"></i></a>
                    </div>
                    <p class=\"small\">Marchés</p>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener(\"DOMContentLoaded\", function () {
                const serviceCards = document.querySelectorAll('.category-item');
                const allServices = [];

                serviceCards.forEach((card) => {
                    const serviceName = card.querySelector('p').textContent.trim();
                    const iconElement = card.querySelector('i');
                    const iconClass = iconElement ? iconElement.className : \"No icon\";
                    const bgColor = card.querySelector('.category-icon').style.backgroundColor;

                    allServices.push({
                        name: serviceName,
                        icon: iconClass,
                        backgroundColor: bgColor
                    });

                    card.addEventListener('click', function () {
                        console.log(\"Service sélectionné : \" + serviceName);
                    });
                });
            });

            // Fonctionnalité Modifier
            document.addEventListener(\"DOMContentLoaded\", function () {
                const btnEdit = document.getElementById('btnEdit');
                let isEditMode = false;

                btnEdit.addEventListener('click', function () {
                    isEditMode = !isEditMode;
                    const allBadges = document.querySelectorAll('.delete-badge');
                    const allItems = document.querySelectorAll('.category-item');

                    if (isEditMode) {
                        this.textContent = \"Terminer\";
                        this.classList.replace('btn-outline-primary', 'btn-success');
                        allBadges.forEach(badge => badge.style.display = 'block');
                        allItems.forEach(item => item.classList.add('edit-mode'));
                    } else {
                        this.textContent = \"Modifier\";
                        this.classList.replace('btn-success', 'btn-outline-primary');
                        allBadges.forEach(badge => badge.style.display = 'none');
                        allItems.forEach(item => item.classList.remove('edit-mode'));
                    }
                });

                document.addEventListener('click', function (e) {
                    if (e.target.closest('.delete-badge')) {
                        const card = e.target.closest('.col');
                        card.remove();
                    }

                    if (isEditMode && e.target.closest('a')) {
                        e.preventDefault();
                    }
                });
            });
        </script>
    </div>
{% endblock %}

", "services/management.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/services/management.html.twig");
    }
}
