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

/* services/electricity.html.twig */
class __TwigTemplate_ed804102b2b60780964c0e11fcb10f11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/electricity.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/electricity.html.twig"));

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

        yield "Electricité - Budget App";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bill");
        yield "\">Factures</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-lightbulb-fill text-warning\" style=\"font-size: 15px;\"></span>
                        Opérateur Electricité
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Contenu de la facture -->
        <div class=\"container\">
            <div class=\"text-center py-4 rounded-4 border shadow-sm mb-3\">
                <div class=\"bill-icon mb-2\">
                    <img src=\"/assets/images/verifier.png\" alt=\"bill icon\">
                </div>
                <h3 class=\"fw-bold text-danger\">€70.0</h3>
                <p class=\"fs-5 fw-semibold\">Montant à payer</p>
                <p class=\"text-muted\">Mise à jour par le fournisseur</p>
            </div>
            <p class=\"fw-bold mb-3\">Informations Client</p>
            <div class=\"text-center rounded-3 shadow-sm p-2 border\">
                <div class=\"d-flex justify-content-between mx-2\">
                    <!-- Colonne gauche -->
                    <div class=\"text-start\">
                        <p>Code client</p>
                        <p>Nom client</p>
                        <p>Mail</p>
                    </div>
                    <!-- Colonne droite -->
                    <div class=\"text-end\">
                        <p>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 41), "phone", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "phone", [], "any", false, false, false, 41), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</p>
                        <p>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 42), "fullName", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "fullName", [], "any", false, false, false, 42), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</p>
                        <p>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 43), "email", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "email", [], "any", false, false, false, 43), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
        </div>
            <div class=\"mt-3\">
                <a href=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfert_confirm", ["recipient" => "EDF", "recipientName" => "EDF Electricité", "amount" => "70.00", "description" => "Paiement facture électricité", "type" => "bill"]), "html", null, true);
        // line 55
        yield "\" class=\"btn btn-primary w-25 fs-6\">Paiement Facture</a>
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
        return "services/electricity.html.twig";
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
        return array (  162 => 55,  160 => 49,  151 => 43,  147 => 42,  143 => 41,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Electricité - Budget App{% endblock %}

{% block body %}
    <!-- Header -->
    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_bill') }}\">Factures</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-lightbulb-fill text-warning\" style=\"font-size: 15px;\"></span>
                        Opérateur Electricité
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Contenu de la facture -->
        <div class=\"container\">
            <div class=\"text-center py-4 rounded-4 border shadow-sm mb-3\">
                <div class=\"bill-icon mb-2\">
                    <img src=\"/assets/images/verifier.png\" alt=\"bill icon\">
                </div>
                <h3 class=\"fw-bold text-danger\">€70.0</h3>
                <p class=\"fs-5 fw-semibold\">Montant à payer</p>
                <p class=\"text-muted\">Mise à jour par le fournisseur</p>
            </div>
            <p class=\"fw-bold mb-3\">Informations Client</p>
            <div class=\"text-center rounded-3 shadow-sm p-2 border\">
                <div class=\"d-flex justify-content-between mx-2\">
                    <!-- Colonne gauche -->
                    <div class=\"text-start\">
                        <p>Code client</p>
                        <p>Nom client</p>
                        <p>Mail</p>
                    </div>
                    <!-- Colonne droite -->
                    <div class=\"text-end\">
                        <p>{{ app.user.phone|default('Non défini') }}</p>
                        <p>{{ app.user.fullName|default('Non défini') }}</p>
                        <p>{{ app.user.email|default('Non défini') }}</p>
                    </div>
                </div>
            </div>
        </div>
            <div class=\"mt-3\">
                <a href=\"{{ path('app_transfert_confirm', {
                    'recipient': 'EDF',
                    'recipientName': 'EDF Electricité',
                    'amount': '70.00',
                    'description': 'Paiement facture électricité',
                    'type': 'bill'
                }) }}\" class=\"btn btn-primary w-25 fs-6\">Paiement Facture</a>
            </div>
        </div>
    </div>
{% endblock %}

", "services/electricity.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/services/electricity.html.twig");
    }
}
