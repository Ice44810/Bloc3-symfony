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

/* auth/password_confirm.html.twig */
class __TwigTemplate_a90a32e3e6452e7b2286584607848fb1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/password_confirm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/password_confirm.html.twig"));

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

        yield "Confirmation Mot de Passe - Budget App";
        
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
        yield "<div class=\"container\">
    <div class=\"text-center border-0 mt-5\">
        <img src=\"/assets/images/new-pass.jpg\" alt=\"image clé\" class=\"img-fluid\" style=\"max-width: 200px;\">
        <h2 class=\"mt-3 fw-bold\">Mot de passe confirmé avec succès !</h2>
        <p class=\"text-muted small\">
            Votre nouveau mot de passe a bien été confirmé. Veuillez l'utiliser lors de votre prochaine connexion.
        </p>
    </div>

    <div class=\"d-flex justify-content-end mt-3\">
        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
            <button class=\"btn custom-primary-btn mx-5\" id=\"btnToLogin\">Se connecter</button>
        </a>
    </div>
</div>

<style>
    .custom-primary-btn {
        background: #5d3df3;
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 25px;
        font-weight: bold;
    }
    .custom-primary-btn:hover {
        background: #4a2fd9;
        color: white;
    }
</style>

<script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        const btn = document.getElementById(\"btnToLogin\");
        
        if (btn) {
            btn.addEventListener(\"click\", function (e) {
                // Nettoyer les données de session
                sessionStorage.clear();
                // Rediriger vers la page de connexion
                window.location.href = '";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "';
            });
        }

        // Optionnel: Confirmer automatiquement le changement de mot de passe via API
        confirmPasswordChange();
    });

    // Fonction pour confirmer le changement de mot de passe côté serveur
    async function confirmPasswordChange() {
        try {
            const response = await fetch('";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirm_password_change");
        yield "', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' }
            });
            const data = await response.json();
            
            if (data.success) {
                console.log('Changement de mot de passe confirmé');
            }
        } catch (error) {
            console.error('Erreur confirmation:', error);
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
        return "auth/password_confirm.html.twig";
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
        return array (  159 => 57,  145 => 46,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Confirmation Mot de Passe - Budget App{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"text-center border-0 mt-5\">
        <img src=\"/assets/images/new-pass.jpg\" alt=\"image clé\" class=\"img-fluid\" style=\"max-width: 200px;\">
        <h2 class=\"mt-3 fw-bold\">Mot de passe confirmé avec succès !</h2>
        <p class=\"text-muted small\">
            Votre nouveau mot de passe a bien été confirmé. Veuillez l'utiliser lors de votre prochaine connexion.
        </p>
    </div>

    <div class=\"d-flex justify-content-end mt-3\">
        <a href=\"{{ path('app_login') }}\">
            <button class=\"btn custom-primary-btn mx-5\" id=\"btnToLogin\">Se connecter</button>
        </a>
    </div>
</div>

<style>
    .custom-primary-btn {
        background: #5d3df3;
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 25px;
        font-weight: bold;
    }
    .custom-primary-btn:hover {
        background: #4a2fd9;
        color: white;
    }
</style>

<script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        const btn = document.getElementById(\"btnToLogin\");
        
        if (btn) {
            btn.addEventListener(\"click\", function (e) {
                // Nettoyer les données de session
                sessionStorage.clear();
                // Rediriger vers la page de connexion
                window.location.href = '{{ path('app_login') }}';
            });
        }

        // Optionnel: Confirmer automatiquement le changement de mot de passe via API
        confirmPasswordChange();
    });

    // Fonction pour confirmer le changement de mot de passe côté serveur
    async function confirmPasswordChange() {
        try {
            const response = await fetch('{{ path('confirm_password_change') }}', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' }
            });
            const data = await response.json();
            
            if (data.success) {
                console.log('Changement de mot de passe confirmé');
            }
        } catch (error) {
            console.error('Erreur confirmation:', error);
        }
    }
</script>
{% endblock %}
", "auth/password_confirm.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/auth/password_confirm.html.twig");
    }
}
