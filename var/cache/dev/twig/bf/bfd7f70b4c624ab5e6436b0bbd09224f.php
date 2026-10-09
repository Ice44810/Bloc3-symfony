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

/* auth/register.html.twig */
class __TwigTemplate_ff2076b5de02f99f041d27e445693bc2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

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

        yield "Inscription - Budget App";
        
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
        yield "    <div class=\"container-fluid bg-white mb-2 mt-4\">
        <div class=\"d-flex align-items-center p-3\">
            <h5 class=\"mb-0 fw-semibold flex-grow-1 text-center me-4\">Inscription</h5>
        </div>
    </div>

    <form id=\"registerForm\" class=\"container-md shadow-sm p-4 rounded-3 border\">
        <div class=\"mb-3 px-3\">
            <label for=\"fullName\" class=\"form-label\">Nom complet</label>
            <input type=\"text\" class=\"form-control\" id=\"fullName\" name=\"fullName\" placeholder=\"Saisir votre nom\" required />
        </div>
        <div class=\"mb-3 px-3\">
            <label for=\"email\" class=\"form-label\">Adresse Mail</label>
            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Saisir adresse mail\" required />
        </div>
        <div class=\"mb-3 px-3\">
            <label for=\"password\" class=\"form-label\">Mot de passe</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Saisir mot de passe\" required />
        </div>
        <div class=\"mb-3 px-3\">
            <label for=\"confirm_password\" class=\"form-label\">Confirmer Mot de passe</label>
            <input type=\"password\" class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\" placeholder=\"Confirmer mot de passe\" required />
        </div>

        <div id=\"errorMessage\" class=\"alert alert-danger d-none mx-3\" role=\"alert\"></div>

        <div class=\"d-flex justify-content-end mt-3 mx-3 fs-4\">
            <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
        </div>
        <div class=\"mt-3 text-center\">
            <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Déjà un compte ? Connectez-vous</a>
        </div>
    </form>

    <script>
        document.getElementById('registerForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            const errorDiv = document.getElementById('errorMessage');

            // Validation basique
            if (password !== confirmPassword) {
                errorDiv.textContent = \"Les mots de passe ne correspondent pas.\";
                errorDiv.classList.remove('d-none');
                return;
            }

            try {
                const response = await fetch('/api/register', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        email: email,
                        password: password,
                        fullName: fullName
                    })
                });

                const data = await response.json();

                if (response.ok) {
                    alert('Inscription réussie ! Vous pouvez maintenant vous connecter.');
                    window.location.href = '";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "';
                } else {
                    errorDiv.textContent = data.message || 'Une erreur est survenue lors de l\\'inscription.';
                    errorDiv.classList.remove('d-none');
                }
            } catch (error) {
                console.error('Erreur:', error);
                errorDiv.textContent = \"Erreur de connexion au serveur.\";
                errorDiv.classList.remove('d-none');
            }
        });
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
        return "auth/register.html.twig";
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
        return array (  173 => 74,  132 => 36,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription - Budget App{% endblock %}

{% block body %}
    <div class=\"container-fluid bg-white mb-2 mt-4\">
        <div class=\"d-flex align-items-center p-3\">
            <h5 class=\"mb-0 fw-semibold flex-grow-1 text-center me-4\">Inscription</h5>
        </div>
    </div>

    <form id=\"registerForm\" class=\"container-md shadow-sm p-4 rounded-3 border\">
        <div class=\"mb-3 px-3\">
            <label for=\"fullName\" class=\"form-label\">Nom complet</label>
            <input type=\"text\" class=\"form-control\" id=\"fullName\" name=\"fullName\" placeholder=\"Saisir votre nom\" required />
        </div>
        <div class=\"mb-3 px-3\">
            <label for=\"email\" class=\"form-label\">Adresse Mail</label>
            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Saisir adresse mail\" required />
        </div>
        <div class=\"mb-3 px-3\">
            <label for=\"password\" class=\"form-label\">Mot de passe</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Saisir mot de passe\" required />
        </div>
        <div class=\"mb-3 px-3\">
            <label for=\"confirm_password\" class=\"form-label\">Confirmer Mot de passe</label>
            <input type=\"password\" class=\"form-control\" id=\"confirm_password\" name=\"confirm_password\" placeholder=\"Confirmer mot de passe\" required />
        </div>

        <div id=\"errorMessage\" class=\"alert alert-danger d-none mx-3\" role=\"alert\"></div>

        <div class=\"d-flex justify-content-end mt-3 mx-3 fs-4\">
            <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
        </div>
        <div class=\"mt-3 text-center\">
            <a href=\"{{ path('app_login') }}\">Déjà un compte ? Connectez-vous</a>
        </div>
    </form>

    <script>
        document.getElementById('registerForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            const errorDiv = document.getElementById('errorMessage');

            // Validation basique
            if (password !== confirmPassword) {
                errorDiv.textContent = \"Les mots de passe ne correspondent pas.\";
                errorDiv.classList.remove('d-none');
                return;
            }

            try {
                const response = await fetch('/api/register', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        email: email,
                        password: password,
                        fullName: fullName
                    })
                });

                const data = await response.json();

                if (response.ok) {
                    alert('Inscription réussie ! Vous pouvez maintenant vous connecter.');
                    window.location.href = '{{ path('app_login') }}';
                } else {
                    errorDiv.textContent = data.message || 'Une erreur est survenue lors de l\\'inscription.';
                    errorDiv.classList.remove('d-none');
                }
            } catch (error) {
                console.error('Erreur:', error);
                errorDiv.textContent = \"Erreur de connexion au serveur.\";
                errorDiv.classList.remove('d-none');
            }
        });
    </script>
{% endblock %}
", "auth/register.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/auth/register.html.twig");
    }
}
