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

/* qr/index.html.twig */
class __TwigTemplate_193e463bf89c58df39a9370b7cc53a5a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qr/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qr/index.html.twig"));

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

        yield "QR Code - Budget App";
        
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
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-qr-code\" style=\"font-size: 15px;\"></span>
                        QR Code
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container text-center\">
            <div class=\"card p-4 border-0 shadow-sm mt-3\">
                <h5 class=\"mb-3\">Scanner QR Code</h5>
                <div id=\"qrcode\">
                    <img src=\"/assets/images/qrcode1.png\" alt=\"QR Code\">
                </div>
                <p class=\"text-muted mt-3\">_scannez ce code pour recevoir de l'argent_</p>
            </div>

            <div class=\"mt-4\">
                <button class=\"btn btn-primary\">
                    <i class=\"bi bi-share\"></i> Partager mon QR
                </button>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class=\"footer py-2\">
        <div class=\"d-flex justify-content-around align-items-center\">
            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"footer-link\">
                <i class=\"bi bi-house-door-fill\"></i>
                <span>Accueil</span>
            </a>
            <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transactions_view");
        yield "\" class=\"footer-link\">
                <i class=\"bi bi-clock-history\"></i>
                <span>Historique</span>
            </a>
            <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_qr");
        yield "\" class=\"active-link\">
                <i class=\"bi bi-qr-code-scan\"></i>
                <span>QR</span>
            </a>
            <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rewards");
        yield "\" class=\"footer-link\">
                <i class=\"bi bi-gift\"></i>
                <span>Récompenses</span>
            </a>
            <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"footer-link\">
                <i class=\"bi bi-person\"></i>
                <span>Profil</span>
            </a>
        </div>
    </footer>
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
        return "qr/index.html.twig";
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
        return array (  166 => 55,  159 => 51,  152 => 47,  145 => 43,  138 => 39,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}QR Code - Budget App{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-qr-code\" style=\"font-size: 15px;\"></span>
                        QR Code
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container text-center\">
            <div class=\"card p-4 border-0 shadow-sm mt-3\">
                <h5 class=\"mb-3\">Scanner QR Code</h5>
                <div id=\"qrcode\">
                    <img src=\"/assets/images/qrcode1.png\" alt=\"QR Code\">
                </div>
                <p class=\"text-muted mt-3\">_scannez ce code pour recevoir de l'argent_</p>
            </div>

            <div class=\"mt-4\">
                <button class=\"btn btn-primary\">
                    <i class=\"bi bi-share\"></i> Partager mon QR
                </button>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class=\"footer py-2\">
        <div class=\"d-flex justify-content-around align-items-center\">
            <a href=\"{{ path('app_home') }}\" class=\"footer-link\">
                <i class=\"bi bi-house-door-fill\"></i>
                <span>Accueil</span>
            </a>
            <a href=\"{{ path('app_transactions_view') }}\" class=\"footer-link\">
                <i class=\"bi bi-clock-history\"></i>
                <span>Historique</span>
            </a>
            <a href=\"{{ path('app_qr') }}\" class=\"active-link\">
                <i class=\"bi bi-qr-code-scan\"></i>
                <span>QR</span>
            </a>
            <a href=\"{{ path('app_rewards') }}\" class=\"footer-link\">
                <i class=\"bi bi-gift\"></i>
                <span>Récompenses</span>
            </a>
            <a href=\"{{ path('app_profile') }}\" class=\"footer-link\">
                <i class=\"bi bi-person\"></i>
                <span>Profil</span>
            </a>
        </div>
    </footer>
{% endblock %}

", "qr/index.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/qr/index.html.twig");
    }
}
