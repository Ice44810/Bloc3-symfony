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

/* ui/index.html.twig */
class __TwigTemplate_c9294fcd64834d433aec639c854f7c99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui/index.html.twig"));

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

        yield "Pages - Budget App";
        
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
    <div class=\"container pb-5\">
        <div class=\"breadcrumb mt-3 d-flex justify-content-between\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-layers text-primary\" style=\"font-size: 15px;\"></span>
                        Pages
                    </li>
                </ol>
            </nav>
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-dark text-decoration-none\"><i class=\"bi bi-house fs-5\"></i></a>
        </div>

        <div class=\"container-fluid px-2 mt-4\">
            <div class=\"list-group shadow-sm rounded-3\">
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Login Page
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Home Page
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Profil Page
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bank_history");
        yield "\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    History
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rewards");
        yield "\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Rewards
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Transfer Friend
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfer_by_bank");
        yield "\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Transfer Bank
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfert");
        yield "\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Transfer Wallet
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_topup_view");
        yield "\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Top Up
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_card_index");
        yield "\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Card
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_card_new");
        yield "\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Add New Card
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bill");
        yield "\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Bill
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_giftcard");
        yield "\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Gift Card Details
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings");
        yield "\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Setting
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_new");
        yield "\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    New Recipient page
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transactions_view");
        yield "\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Transactions
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
            </div>
        </div>
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
        return "ui/index.html.twig";
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
        return array (  245 => 98,  237 => 93,  229 => 88,  221 => 83,  213 => 78,  205 => 73,  197 => 68,  189 => 63,  181 => 58,  173 => 53,  165 => 48,  157 => 43,  149 => 38,  141 => 33,  133 => 28,  125 => 23,  117 => 18,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pages - Budget App{% endblock %}

{% block body %}
    <!-- Header -->
    <div class=\"container pb-5\">
        <div class=\"breadcrumb mt-3 d-flex justify-content-between\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-layers text-primary\" style=\"font-size: 15px;\"></span>
                        Pages
                    </li>
                </ol>
            </nav>
            <a href=\"{{ path('app_home') }}\" class=\"text-dark text-decoration-none\"><i class=\"bi bi-house fs-5\"></i></a>
        </div>

        <div class=\"container-fluid px-2 mt-4\">
            <div class=\"list-group shadow-sm rounded-3\">
                <a href=\"{{ path('app_login') }}\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Login Page
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"{{ path('app_home') }}\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Home Page
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"{{ path('app_profile') }}\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Profil Page
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"{{ path('app_bank_history') }}\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    History
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"{{ path('app_rewards') }}\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Rewards
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"{{ path('app_contact') }}\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Transfer Friend
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"{{ path('app_transfer_by_bank') }}\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Transfer Bank
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"{{ path('app_transfert') }}\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Transfer Wallet
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"{{ path('app_topup_view') }}\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Top Up
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"{{ path('app_card_index') }}\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Card
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"{{ path('app_card_new') }}\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Add New Card
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"{{ path('app_bill') }}\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Bill
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"{{ path('app_giftcard') }}\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Gift Card Details
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"{{ path('app_settings') }}\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Setting
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"{{ path('app_contact_new') }}\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    New Recipient page
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"{{ path('app_transactions_view') }}\"
                    class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    Transactions
                    <i class=\"bi bi-chevron-right\"></i>
                </a>
            </div>
        </div>
    </div>
{% endblock %}
", "ui/index.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/ui/index.html.twig");
    }
}
