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

/* settings/security.html.twig */
class __TwigTemplate_9e1152a4d4457baa8df5fc2bfaa3c472 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings/security.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings/security.html.twig"));

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

        yield "Preuve de Résidence - Budget App";
        
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
        yield "    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings");
        yield "\">Paramètres</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-receipt text-primary\" style=\"font-size: 15px;\"></span>
                        Preuves de résidence
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container py-1\">
            <h5 class=\"text-black fw-semibold mb-3\">Sélection Pays de Résidence</h5>
            <div class=\"mb-4\">
                <select class=\"form-select\" aria-label=\"Sélection du pays de résidence\">
                    <option selected disabled>Sélection Pays</option>
                    <option value=\"1\">France</option>
                    <option value=\"2\">Royaume-Uni</option>
                    <option value=\"3\">Allemagne</option>
                    <option value=\"4\">Espagne</option>
                    <option value=\"5\">Chine</option>
                    <option value=\"6\">Portugal</option>
                    <option value=\"7\">USA</option>
                </select>
            </div>
            <h5 class=\"text-black fw-semibold mb-3\">Documents</h5>
            <div class=\"list-group mb-4\">
                <a href=\"#\" class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    <span>Photo ID</span><i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"#\" class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    <span>Passeport</span><i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"#\" class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    <span>Permis de conduire</span><i class=\"bi bi-chevron-right\"></i>
                </a>
            </div>
            <div class=\"form-check mb-4\">
                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"donnees\" checked>
                <label class=\"form-check-label small\" for=\"donnees\">
                    Ces informations sont utilisées uniquement à des fins de vérification d'identité et seront
                    conservées en toute sécurité par Alipay.
                </label>
            </div>

            <div class=\"d-flex justify-content-end\">
                <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings");
        yield "\">
                    <button class=\"btn custom-primary-btn\" type=\"button\">Continuer</button>
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
        return "settings/security.html.twig";
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
        return array (  157 => 55,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Preuve de Résidence - Budget App{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_settings') }}\">Paramètres</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-receipt text-primary\" style=\"font-size: 15px;\"></span>
                        Preuves de résidence
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container py-1\">
            <h5 class=\"text-black fw-semibold mb-3\">Sélection Pays de Résidence</h5>
            <div class=\"mb-4\">
                <select class=\"form-select\" aria-label=\"Sélection du pays de résidence\">
                    <option selected disabled>Sélection Pays</option>
                    <option value=\"1\">France</option>
                    <option value=\"2\">Royaume-Uni</option>
                    <option value=\"3\">Allemagne</option>
                    <option value=\"4\">Espagne</option>
                    <option value=\"5\">Chine</option>
                    <option value=\"6\">Portugal</option>
                    <option value=\"7\">USA</option>
                </select>
            </div>
            <h5 class=\"text-black fw-semibold mb-3\">Documents</h5>
            <div class=\"list-group mb-4\">
                <a href=\"#\" class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    <span>Photo ID</span><i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"#\" class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    <span>Passeport</span><i class=\"bi bi-chevron-right\"></i>
                </a>
                <a href=\"#\" class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    <span>Permis de conduire</span><i class=\"bi bi-chevron-right\"></i>
                </a>
            </div>
            <div class=\"form-check mb-4\">
                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"donnees\" checked>
                <label class=\"form-check-label small\" for=\"donnees\">
                    Ces informations sont utilisées uniquement à des fins de vérification d'identité et seront
                    conservées en toute sécurité par Alipay.
                </label>
            </div>

            <div class=\"d-flex justify-content-end\">
                <a href=\"{{ path('app_settings') }}\">
                    <button class=\"btn custom-primary-btn\" type=\"button\">Continuer</button>
                </a>
            </div>
        </div>
    </div>
{% endblock %}
", "settings/security.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/settings/security.html.twig");
    }
}
