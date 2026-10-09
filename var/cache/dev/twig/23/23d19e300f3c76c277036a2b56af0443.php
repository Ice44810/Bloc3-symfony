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

/* auth/login.html.twig */
class __TwigTemplate_ae4484d315962814f1198a6d7f7d0af1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

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

        yield "Connexion - Budget App";
        
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
        yield "    <!--
         PAGE: CONNEXION
         Fonctionnalité: Authentifier l'utilisateur
    -->

    <header>
        <h5 class=\"text-center fw-semibold mb-4 fs-4 mt-5\">Connexion</h5>
    </header>

    <!--
         FORMULAIRE DE CONNEXION
         Utilise les routes Symfony pour l'authentification
     -->
    ";
        // line 20
        yield "    <form class=\"mb-3 mx-3 mt-5\" id=\"loginForm\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\">

        ";
        // line 23
        yield "        ";
        if ((array_key_exists("error", $context) && (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })()))) {
            // line 24
            yield "            <div class=\"alert alert-danger mx-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageKey", [], "any", false, false, false, 24), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageData", [], "any", false, false, false, 24), "security"), "html", null, true);
            yield "</div>
        ";
        }
        // line 26
        yield "
        <!-- Champ Email -->
        <div class=\"mb-4 position-relative\">
            <label class=\"position-absolute px-2 ms-3 text-muted fs-6 bg-white\" style=\"top: -13px; left: 0; z-index: 5;\">
                Email
            </label>
            <div class=\"border shadow-sm rounded-3 px-3 d-flex align-items-center\" style=\"height: 50px;\">
                <input type=\"email\" id=\"userIdentifier\" name=\"_username\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("last_username", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 33, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                       class=\"form-control border-0 bg-transparent\"
                       placeholder=\"Exemple@gmail.com\" style=\"box-shadow: none;\" required autofocus>
            </div>
        </div>

        <!-- Champ Mot de passe -->
        <div class=\"mb-4 position-relative\">
            <label class=\"position-absolute px-2 ms-3 text-muted fs-6 bg-white\" style=\"top: -13px; left: 0; z-index: 5;\">
                Mot de passe
            </label>
            <div class=\"border shadow-sm rounded-3 px-3 d-flex align-items-center\" style=\"height: 50px;\">
                <input type=\"password\" id=\"passwordInput\" name=\"_password\"
                       class=\"form-control border-0 bg-transparent\"
                       placeholder=\"Mot de passe\" style=\"box-shadow: none;\" required>
                <!-- Icône pour afficher/masquer le mot de passe -->
                <i class=\"bi bi-eye text-muted\" id=\"togglePassword\" style=\"cursor: pointer;\"></i>
            </div>
        </div>

        ";
        // line 54
        yield "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

        <!-- Bouton de soumission et lien mot de passe oublié -->
        <div class=\"mb-3 d-flex justify-content-between align-items-center\">
            <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reset_password_view");
        yield "\" class=\"text-decoration-none\">
                <p class=\"text-muted mb-0 fs-6\">Mot de passe oublié ?</p>
            </a>
            <button type=\"submit\" class=\"btn btn-primary\" style=\"background-color: #6c5ce7; border-color: #6c5ce7;\">
                Se connecter
            </button>
        </div>
    </form>

    <div class=\"d-flex justify-content-center align-items-center my-4\">
        <hr class=\"w-100 mx-3\">
        <p class=\"text-muted fs-6 mb-0 position-absolute px-2\">Ou</p>
    </div>

    <div class=\"buttons-group px-3 mt-3\">
        <!-- Facebook -->
        <button class=\"btn btn-primary mt-2 w-100 fs-5\" style=\"background-color: #1877f2; border-color: #1877f2;\">
            <i class=\"bi bi-facebook\"></i> Se connecter avec Facebook
        </button>

        <!-- Google -->
        <button class=\"btn btn-danger mt-2 w-100 fs-5\" style=\"background-color: #db4437; border-color: #db4437;\">
            <i class=\"bi bi-google\"></i> Se connecter avec Google
        </button>

        <!-- Apple -->
        <button class=\"btn btn-dark mt-2 w-100 fs-5\">
            <i class=\"bi bi-apple\"></i> Se connecter avec Apple
        </button>

        <!-- Lien vers inscription -->
        <div class=\"text-center mt-3\">
            <small class=\"text-muted\">Vous n'avez pas de compte ?</small>
            <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-decoration-none\">S'inscrire ici</a>
        </div>
    </div>

    <script>
        // GESTION DE LA SOUMISSION DU FORMULAIRE

        const form = document.getElementById(\"loginForm\");
        const emailInput = document.getElementById(\"userIdentifier\");
        const passwordInput = document.getElementById(\"passwordInput\");

        form.addEventListener(\"submit\", function (e) {
            // Empêcher la soumission par défaut
            e.preventDefault();

            // VALIDATION CÔTÉ CLIENT

            const email = emailInput.value.trim();
            const password = passwordInput.value.trim();

            if (!email || !password) {
                alert(\"Veuillez remplir tous les champs.\");
                return;
            }

            // ENVOI DES DONNÉES À L'API
            // Récupérer le token CSRF du champ caché
            const csrfToken = document.querySelector('input[name=\"_csrf_token\"]').value;

            const formData = new URLSearchParams();
            formData.append('_username', email);
            formData.append('_password', password);
            formData.append('_csrf_token', csrfToken);

            fetch('";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: formData,
                credentials: 'same-origin'
            })
            .then(response => {
                // GESTION DE LA RÉPONSE
                // Si redirection: la connexion a réussi
                if (response.redirected) {
                    window.location.href = response.url;
                } else {
                    // Ce bloc peut être utilisé pour gérer les échecs de connexion
                    alert(\"La connexion a échoué. Veuillez réessayer.\");
                }
            })
            .catch(error => {
                console.error('Erreur lors de la connexion:', error);
                alert('Une erreur est survenue lors de la tentative de connexion.');
            });
        });

        // GESTION DE L'AFFICHAGE/MASQUAGE DU MOT DE PASSE

        document.addEventListener('DOMContentLoaded', () => {
            const passwordInput = document.getElementById('passwordInput');
            const toggleIcon = document.getElementById('togglePassword');

            if (!passwordInput || !toggleIcon) return;

            // Au clic sur l'icône: basculer entre mot de passe visible et masqué
            toggleIcon.addEventListener('click', () => {
                const isPassword = passwordInput.type === 'password';

                // Basculer le type d'input
                passwordInput.type = isPassword ? 'text' : 'password';

                // Basculer l'icône
                toggleIcon.classList.toggle('bi-eye', !isPassword);
                toggleIcon.classList.toggle('bi-eye-slash', isPassword);
            });
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
        return "auth/login.html.twig";
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
        return array (  243 => 125,  206 => 91,  170 => 58,  162 => 54,  139 => 33,  130 => 26,  124 => 24,  121 => 23,  115 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion - Budget App{% endblock %}

{% block body %}
    <!--
         PAGE: CONNEXION
         Fonctionnalité: Authentifier l'utilisateur
    -->

    <header>
        <h5 class=\"text-center fw-semibold mb-4 fs-4 mt-5\">Connexion</h5>
    </header>

    <!--
         FORMULAIRE DE CONNEXION
         Utilise les routes Symfony pour l'authentification
     -->
    {# Utilisation de path() pour les routes Symfony #}
    <form class=\"mb-3 mx-3 mt-5\" id=\"loginForm\" action=\"{{ path('app_login') }}\" method=\"post\">

        {# Affichage des erreurs de connexion Symfony #}
        {% if error is defined and error %}
            <div class=\"alert alert-danger mx-3\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}

        <!-- Champ Email -->
        <div class=\"mb-4 position-relative\">
            <label class=\"position-absolute px-2 ms-3 text-muted fs-6 bg-white\" style=\"top: -13px; left: 0; z-index: 5;\">
                Email
            </label>
            <div class=\"border shadow-sm rounded-3 px-3 d-flex align-items-center\" style=\"height: 50px;\">
                <input type=\"email\" id=\"userIdentifier\" name=\"_username\" value=\"{{ last_username|default('') }}\"
                       class=\"form-control border-0 bg-transparent\"
                       placeholder=\"Exemple@gmail.com\" style=\"box-shadow: none;\" required autofocus>
            </div>
        </div>

        <!-- Champ Mot de passe -->
        <div class=\"mb-4 position-relative\">
            <label class=\"position-absolute px-2 ms-3 text-muted fs-6 bg-white\" style=\"top: -13px; left: 0; z-index: 5;\">
                Mot de passe
            </label>
            <div class=\"border shadow-sm rounded-3 px-3 d-flex align-items-center\" style=\"height: 50px;\">
                <input type=\"password\" id=\"passwordInput\" name=\"_password\"
                       class=\"form-control border-0 bg-transparent\"
                       placeholder=\"Mot de passe\" style=\"box-shadow: none;\" required>
                <!-- Icône pour afficher/masquer le mot de passe -->
                <i class=\"bi bi-eye text-muted\" id=\"togglePassword\" style=\"cursor: pointer;\"></i>
            </div>
        </div>

        {# Champ CSRF pour la sécurité (Recommandé par Symfony) #}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

        <!-- Bouton de soumission et lien mot de passe oublié -->
        <div class=\"mb-3 d-flex justify-content-between align-items-center\">
            <a href=\"{{ path('app_reset_password_view') }}\" class=\"text-decoration-none\">
                <p class=\"text-muted mb-0 fs-6\">Mot de passe oublié ?</p>
            </a>
            <button type=\"submit\" class=\"btn btn-primary\" style=\"background-color: #6c5ce7; border-color: #6c5ce7;\">
                Se connecter
            </button>
        </div>
    </form>

    <div class=\"d-flex justify-content-center align-items-center my-4\">
        <hr class=\"w-100 mx-3\">
        <p class=\"text-muted fs-6 mb-0 position-absolute px-2\">Ou</p>
    </div>

    <div class=\"buttons-group px-3 mt-3\">
        <!-- Facebook -->
        <button class=\"btn btn-primary mt-2 w-100 fs-5\" style=\"background-color: #1877f2; border-color: #1877f2;\">
            <i class=\"bi bi-facebook\"></i> Se connecter avec Facebook
        </button>

        <!-- Google -->
        <button class=\"btn btn-danger mt-2 w-100 fs-5\" style=\"background-color: #db4437; border-color: #db4437;\">
            <i class=\"bi bi-google\"></i> Se connecter avec Google
        </button>

        <!-- Apple -->
        <button class=\"btn btn-dark mt-2 w-100 fs-5\">
            <i class=\"bi bi-apple\"></i> Se connecter avec Apple
        </button>

        <!-- Lien vers inscription -->
        <div class=\"text-center mt-3\">
            <small class=\"text-muted\">Vous n'avez pas de compte ?</small>
            <a href=\"{{ path('app_register') }}\" class=\"text-decoration-none\">S'inscrire ici</a>
        </div>
    </div>

    <script>
        // GESTION DE LA SOUMISSION DU FORMULAIRE

        const form = document.getElementById(\"loginForm\");
        const emailInput = document.getElementById(\"userIdentifier\");
        const passwordInput = document.getElementById(\"passwordInput\");

        form.addEventListener(\"submit\", function (e) {
            // Empêcher la soumission par défaut
            e.preventDefault();

            // VALIDATION CÔTÉ CLIENT

            const email = emailInput.value.trim();
            const password = passwordInput.value.trim();

            if (!email || !password) {
                alert(\"Veuillez remplir tous les champs.\");
                return;
            }

            // ENVOI DES DONNÉES À L'API
            // Récupérer le token CSRF du champ caché
            const csrfToken = document.querySelector('input[name=\"_csrf_token\"]').value;

            const formData = new URLSearchParams();
            formData.append('_username', email);
            formData.append('_password', password);
            formData.append('_csrf_token', csrfToken);

            fetch('{{ path('app_login') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: formData,
                credentials: 'same-origin'
            })
            .then(response => {
                // GESTION DE LA RÉPONSE
                // Si redirection: la connexion a réussi
                if (response.redirected) {
                    window.location.href = response.url;
                } else {
                    // Ce bloc peut être utilisé pour gérer les échecs de connexion
                    alert(\"La connexion a échoué. Veuillez réessayer.\");
                }
            })
            .catch(error => {
                console.error('Erreur lors de la connexion:', error);
                alert('Une erreur est survenue lors de la tentative de connexion.');
            });
        });

        // GESTION DE L'AFFICHAGE/MASQUAGE DU MOT DE PASSE

        document.addEventListener('DOMContentLoaded', () => {
            const passwordInput = document.getElementById('passwordInput');
            const toggleIcon = document.getElementById('togglePassword');

            if (!passwordInput || !toggleIcon) return;

            // Au clic sur l'icône: basculer entre mot de passe visible et masqué
            toggleIcon.addEventListener('click', () => {
                const isPassword = passwordInput.type === 'password';

                // Basculer le type d'input
                passwordInput.type = isPassword ? 'text' : 'password';

                // Basculer l'icône
                toggleIcon.classList.toggle('bi-eye', !isPassword);
                toggleIcon.classList.toggle('bi-eye-slash', isPassword);
            });
        });
    </script>
{% endblock %}

", "auth/login.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/auth/login.html.twig");
    }
}
