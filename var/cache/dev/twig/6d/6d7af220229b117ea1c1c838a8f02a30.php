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

/* services/film.html.twig */
class __TwigTemplate_65506a41c13ea236108c2be46b70a977 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/film.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/film.html.twig"));

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

        yield "Réserver - CinéMaster";
        
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
        yield "    <div class=\"search-container p-3 bg-white shadow-sm sticky-top\">
        <div class=\"container\">
            <div class=\"input-group\">
                <span class=\"input-group-text bg-light border-0\"><i class=\"bi bi-search\"></i></span>
                <input type=\"text\" id=\"movieSearchInput\" class=\"form-control bg-light border-0\"
                    placeholder=\"Rechercher un film...\">
                <button class=\"btn btn-primary opacity-75 ms-2 rounded-3\" id=\"searchBtn\">Explorer</button>
            </div>
        </div>
    </div>

    <div class=\"movie-banner\" id=\"movieBanner\">
        <div class=\"container\">
            <h2 class=\"fw-bold mb-0\" id=\"movieTitle\">Sélectionnez un film</h2>
            <p class=\"small mb-0 opacity-75\" id=\"movieMeta\">Recherchez pour voir les détails</p>
        </div>
    </div>

    <div class=\"container py-4 mb-5\">
        <h6 class=\"fw-bold mb-3 small text-uppercase text-muted\">1. Votre Tarif</h6>
        <div class=\"row g-2 mb-4\">
            <div class=\"col-6\">
                <div class=\"card p-2 tariff-card active\" data-discount=\"1\">
                    <span class=\"small fw-bold\">Standard</span>
                    <small class=\"text-muted\">Plein tarif</small>
                </div>
            </div>
            <div class=\"col-6\">
                <div class=\"card p-2 tariff-card\" data-discount=\"0.75\">
                    <span class=\"small fw-bold\">Étudiant</span>
                    <small class=\"text-muted\">-26 ans</small>
                </div>
            </div>
        </div>

        <h6 class=\"fw-bold mb-3 small text-uppercase text-muted\">2. Cinémas & Horaires</h6>
        <div class=\"cinema-card shadow-sm p-3 mb-3 border rounded\">
            <h6 class=\"fw-bold mb-2\">Pathé Bellecour</h6>
            <div class=\"d-flex gap-2\">
                <button class=\"btn btn-sm btn-outline-dark px-3 rounded-pill\" onclick=\"setPrice(14.50)\">14:30</button>
                <button class=\"btn btn-sm btn-outline-dark px-3 rounded-pill\" onclick=\"setPrice(14.50)\">18:00</button>
            </div>
        </div>

        <h6 class=\"fw-bold mb-3 small text-uppercase text-muted\">3. Vos Sièges</h6>
        <div class=\"bg-white p-4 rounded-4 shadow-sm text-center border\">
            <div class=\"screen-line\"></div>
            <div class=\"seat-grid\" id=\"seatGrid\"></div>
        </div>
    </div>

            <div class=\"mt-3\">
                <a href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfert_confirm", ["recipient" => "Netflix", "recipientName" => "Netflix Streaming", "amount" => "15.99", "description" => "Abonnement Netflix", "type" => "bill"]), "html", null, true);
        // line 64
        yield "\" class=\"btn-checkout text-decoration-none d-flex justify-content-center align-items-center\">
                    <span id=\"seatCount\" class=\"fw-semibold\">Réserver & Payer</span>
                    <span id=\"totalPrice\" class=\"fw-semibold text-white ms-1\">15.99 €</span>
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
        return "services/film.html.twig";
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
        return array (  156 => 64,  154 => 58,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réserver - CinéMaster{% endblock %}

{% block body %}
    <div class=\"search-container p-3 bg-white shadow-sm sticky-top\">
        <div class=\"container\">
            <div class=\"input-group\">
                <span class=\"input-group-text bg-light border-0\"><i class=\"bi bi-search\"></i></span>
                <input type=\"text\" id=\"movieSearchInput\" class=\"form-control bg-light border-0\"
                    placeholder=\"Rechercher un film...\">
                <button class=\"btn btn-primary opacity-75 ms-2 rounded-3\" id=\"searchBtn\">Explorer</button>
            </div>
        </div>
    </div>

    <div class=\"movie-banner\" id=\"movieBanner\">
        <div class=\"container\">
            <h2 class=\"fw-bold mb-0\" id=\"movieTitle\">Sélectionnez un film</h2>
            <p class=\"small mb-0 opacity-75\" id=\"movieMeta\">Recherchez pour voir les détails</p>
        </div>
    </div>

    <div class=\"container py-4 mb-5\">
        <h6 class=\"fw-bold mb-3 small text-uppercase text-muted\">1. Votre Tarif</h6>
        <div class=\"row g-2 mb-4\">
            <div class=\"col-6\">
                <div class=\"card p-2 tariff-card active\" data-discount=\"1\">
                    <span class=\"small fw-bold\">Standard</span>
                    <small class=\"text-muted\">Plein tarif</small>
                </div>
            </div>
            <div class=\"col-6\">
                <div class=\"card p-2 tariff-card\" data-discount=\"0.75\">
                    <span class=\"small fw-bold\">Étudiant</span>
                    <small class=\"text-muted\">-26 ans</small>
                </div>
            </div>
        </div>

        <h6 class=\"fw-bold mb-3 small text-uppercase text-muted\">2. Cinémas & Horaires</h6>
        <div class=\"cinema-card shadow-sm p-3 mb-3 border rounded\">
            <h6 class=\"fw-bold mb-2\">Pathé Bellecour</h6>
            <div class=\"d-flex gap-2\">
                <button class=\"btn btn-sm btn-outline-dark px-3 rounded-pill\" onclick=\"setPrice(14.50)\">14:30</button>
                <button class=\"btn btn-sm btn-outline-dark px-3 rounded-pill\" onclick=\"setPrice(14.50)\">18:00</button>
            </div>
        </div>

        <h6 class=\"fw-bold mb-3 small text-uppercase text-muted\">3. Vos Sièges</h6>
        <div class=\"bg-white p-4 rounded-4 shadow-sm text-center border\">
            <div class=\"screen-line\"></div>
            <div class=\"seat-grid\" id=\"seatGrid\"></div>
        </div>
    </div>

            <div class=\"mt-3\">
                <a href=\"{{ path('app_transfert_confirm', {
                    'recipient': 'Netflix',
                    'recipientName': 'Netflix Streaming',
                    'amount': '15.99',
                    'description': 'Abonnement Netflix',
                    'type': 'bill'
                }) }}\" class=\"btn-checkout text-decoration-none d-flex justify-content-center align-items-center\">
                    <span id=\"seatCount\" class=\"fw-semibold\">Réserver & Payer</span>
                    <span id=\"totalPrice\" class=\"fw-semibold text-white ms-1\">15.99 €</span>
                </a>
            </div>
        </div>
    </div>
{% endblock %}

", "services/film.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/services/film.html.twig");
    }
}
