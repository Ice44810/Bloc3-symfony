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

/* settings/index.html.twig */
class __TwigTemplate_6376c85bf9220f2a21633271c8890d8c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings/index.html.twig"));

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

        yield "Paramètres - Budget App";
        
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
        yield "    <div class=\"container pb-5\">
        <nav class=\"mt-3 d-flex justify-content-between align-items-center\" aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb mb-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-decoration-none\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"text-decoration-none\">Profil</a></li>
                <li class=\"breadcrumb-item active\">
                    <i class=\"bi bi-gear-fill me-1\"></i> Paramètres
                </li>
            </ol>
            <div class=\"card border shadow-sm text-center p-2 mb-2\" style=\"min-width: 80px;\">
                <p class=\"text-muted mb-0 small\" style=\"font-size: 0.75rem;\">Rôle</p>
                <h6 class=\"text-info mb-0\" id=\"userRole\">";
        // line 17
        yield ((((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "role", [], "any", false, false, false, 17) == "admin"))) ? ("Administrateur") : ("Utilisateur"));
        yield "</h6>
            </div>
        </nav>

        <div class=\"list-group shadow-sm mb-4 rounded-4 overflow-hidden\">
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\" class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3\">
                <span><i class=\"bi bi-person-circle me-2\"></i> Modifier le profil</span>
                <i class=\"bi bi-chevron-right text-muted\"></i>
            </a>

            <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings_change_password");
        yield "\" class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3\">
                <span><i class=\"bi bi-shield-lock me-2\"></i> Changer le mot de passe</span>
                <i class=\"bi bi-chevron-right text-muted\"></i>
            </a>

            <div class=\"list-group-item d-flex justify-content-between align-items-center py-3\">
                <span><i class=\"bi bi-fingerprint me-2\"></i> Authentification biométrique</span>
                <div class=\"form-check form-switch mb-0\">
                    <input class=\"form-check-input fs-5\" type=\"checkbox\" id=\"biometricSwitch\">
                </div>
            </div>

            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings_notification");
        yield "\" class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3\">
                <span><i class=\"bi bi-bell me-2\"></i> Notifications</span>
                <i class=\"bi bi-chevron-right text-muted\"></i>
            </a>
        </div>

        <div class=\"mb-4\">
            <label for=\"languageSelect\" class=\"form-label small fw-bold text-muted ps-2\">LANGUE DE L'APPLICATION</label>
            <select class=\"form-select form-select-lg rounded-3 shadow-sm\" id=\"languageSelect\">
                <option value=\"fr\">Français</option>
                <option value=\"en\">English</option>
                <option value=\"de\">Deutsch</option>
                <option value=\"es\">Español</option>
            </select>
        </div>

        <div class=\"card border-0 shadow-sm rounded-4 mb-4\">
            <div class=\"card-body d-flex justify-content-center align-items-center gap-4 py-3\">
                <i class=\"bi bi-sun-fill fs-4\" id=\"theme-icon-light\"></i>
                <div class=\"form-check form-switch mb-0\">
                    <input class=\"form-check-input fs-3\" type=\"checkbox\" id=\"darkModeSwitch\" style=\"cursor: pointer;\">
                </div>
                <i class=\"bi bi-moon-stars-fill fs-4\" id=\"theme-icon-dark\"></i>
            </div>
        </div>

        <button class=\"btn btn-danger w-100 rounded-3 py-2 fw-bold\" data-bs-toggle=\"modal\" data-bs-target=\"#logoutModal\">
            <i class=\"bi bi-box-arrow-right me-2\"></i> Se déconnecter
        </button>
    </div>

    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered px-4\">
            <div class=\"modal-content border-0 rounded-4 shadow-lg\">
                <div class=\"modal-body text-center p-4\">
                    <div class=\"text-danger mb-3\">
                        <i class=\"bi bi-exclamation-circle fs-1\"></i>
                    </div>
                    <h5 class=\"fw-bold\">Déconnexion</h5>
                    <p class=\"text-muted\">Voulez-vous vraiment quitter votre session ?</p>
                    <div class=\"d-flex justify-content-center gap-3 mt-4\">
                        <button class=\"btn btn-light px-4 rounded-pill\" data-bs-dismiss=\"modal\">Annuler</button>
                        <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-danger px-4 rounded-pill\">Confirmer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        // --- 1. INITIALISATION ---
        document.addEventListener('DOMContentLoaded', async () => {
            const html = document.documentElement;
            const themeToggle = document.getElementById('darkModeSwitch');
            const langSelect = document.getElementById('languageSelect');
            const bioSwitch = document.getElementById('biometricSwitch');

            // Charger le rôle
            await loadUserRole();

            //  INITIALISATION DES ÉTATS

            // Thème
            const currentTheme = localStorage.getItem('theme') ||
                (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');

            html.setAttribute('data-bs-theme', currentTheme);
            themeToggle.checked = (currentTheme === 'dark');
            updateThemeIcons(currentTheme === 'dark');

            // Langue
            const savedLang = localStorage.getItem('language');
            if (savedLang) langSelect.value = savedLang;

            // Biométrie
            bioSwitch.checked = localStorage.getItem('biometric_enabled') === 'true';

            // GESTIONNAIRES D'ÉVÉNEMENTS

            // Theme Switch
            themeToggle.addEventListener('change', () => {
                const isDark = themeToggle.checked;
                const newTheme = isDark ? 'dark' : 'light';

                html.setAttribute('data-bs-theme', newTheme);
                localStorage.setItem('theme', newTheme);
                updateThemeIcons(isDark);
            });

            // Langue
            langSelect.addEventListener('change', (e) => {
                localStorage.setItem('language', e.target.value);
            });

            // Biométrie
            bioSwitch.addEventListener('change', (e) => {
                localStorage.setItem('biometric_enabled', e.target.checked);
            });

            function updateThemeIcons(isDark) {
                document.getElementById('theme-icon-light').className = `bi bi-sun-fill \${isDark ? 'text-muted' : 'text-warning'}`;
                document.getElementById('theme-icon-dark').className = `bi bi-moon-stars-fill \${isDark ? 'text-primary' : 'text-muted'}`;
            }

            async function loadUserRole() {
                try {
                    const response = await fetch('";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_profile");
        yield "');
                    const result = await response.json();
                    if (result.success && result.user) {
                        const profile = result.user;
                        const roleElement = document.getElementById('userRole');
                        if (roleElement) {
                            roleElement.textContent = profile.role === 'admin' || (profile.roles && profile.roles.includes('ROLE_ADMIN')) ? 'Administrateur' : 'Utilisateur';
                        }
                    }
                } catch (error) {
                    console.error('Erreur chargement rôle:', error);
                }
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
        return "settings/index.html.twig";
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
        return array (  263 => 146,  195 => 81,  150 => 39,  135 => 27,  127 => 22,  119 => 17,  109 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paramètres - Budget App{% endblock %}

{% block body %}
    <div class=\"container pb-5\">
        <nav class=\"mt-3 d-flex justify-content-between align-items-center\" aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb mb-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\" class=\"text-decoration-none\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_profile') }}\" class=\"text-decoration-none\">Profil</a></li>
                <li class=\"breadcrumb-item active\">
                    <i class=\"bi bi-gear-fill me-1\"></i> Paramètres
                </li>
            </ol>
            <div class=\"card border shadow-sm text-center p-2 mb-2\" style=\"min-width: 80px;\">
                <p class=\"text-muted mb-0 small\" style=\"font-size: 0.75rem;\">Rôle</p>
                <h6 class=\"text-info mb-0\" id=\"userRole\">{{ user and user.role == 'admin' ? 'Administrateur' : 'Utilisateur' }}</h6>
            </div>
        </nav>

        <div class=\"list-group shadow-sm mb-4 rounded-4 overflow-hidden\">
            <a href=\"{{ path('app_profile_edit') }}\" class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3\">
                <span><i class=\"bi bi-person-circle me-2\"></i> Modifier le profil</span>
                <i class=\"bi bi-chevron-right text-muted\"></i>
            </a>

            <a href=\"{{ path('app_settings_change_password') }}\" class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3\">
                <span><i class=\"bi bi-shield-lock me-2\"></i> Changer le mot de passe</span>
                <i class=\"bi bi-chevron-right text-muted\"></i>
            </a>

            <div class=\"list-group-item d-flex justify-content-between align-items-center py-3\">
                <span><i class=\"bi bi-fingerprint me-2\"></i> Authentification biométrique</span>
                <div class=\"form-check form-switch mb-0\">
                    <input class=\"form-check-input fs-5\" type=\"checkbox\" id=\"biometricSwitch\">
                </div>
            </div>

            <a href=\"{{ path('app_settings_notification') }}\" class=\"list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3\">
                <span><i class=\"bi bi-bell me-2\"></i> Notifications</span>
                <i class=\"bi bi-chevron-right text-muted\"></i>
            </a>
        </div>

        <div class=\"mb-4\">
            <label for=\"languageSelect\" class=\"form-label small fw-bold text-muted ps-2\">LANGUE DE L'APPLICATION</label>
            <select class=\"form-select form-select-lg rounded-3 shadow-sm\" id=\"languageSelect\">
                <option value=\"fr\">Français</option>
                <option value=\"en\">English</option>
                <option value=\"de\">Deutsch</option>
                <option value=\"es\">Español</option>
            </select>
        </div>

        <div class=\"card border-0 shadow-sm rounded-4 mb-4\">
            <div class=\"card-body d-flex justify-content-center align-items-center gap-4 py-3\">
                <i class=\"bi bi-sun-fill fs-4\" id=\"theme-icon-light\"></i>
                <div class=\"form-check form-switch mb-0\">
                    <input class=\"form-check-input fs-3\" type=\"checkbox\" id=\"darkModeSwitch\" style=\"cursor: pointer;\">
                </div>
                <i class=\"bi bi-moon-stars-fill fs-4\" id=\"theme-icon-dark\"></i>
            </div>
        </div>

        <button class=\"btn btn-danger w-100 rounded-3 py-2 fw-bold\" data-bs-toggle=\"modal\" data-bs-target=\"#logoutModal\">
            <i class=\"bi bi-box-arrow-right me-2\"></i> Se déconnecter
        </button>
    </div>

    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered px-4\">
            <div class=\"modal-content border-0 rounded-4 shadow-lg\">
                <div class=\"modal-body text-center p-4\">
                    <div class=\"text-danger mb-3\">
                        <i class=\"bi bi-exclamation-circle fs-1\"></i>
                    </div>
                    <h5 class=\"fw-bold\">Déconnexion</h5>
                    <p class=\"text-muted\">Voulez-vous vraiment quitter votre session ?</p>
                    <div class=\"d-flex justify-content-center gap-3 mt-4\">
                        <button class=\"btn btn-light px-4 rounded-pill\" data-bs-dismiss=\"modal\">Annuler</button>
                        <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger px-4 rounded-pill\">Confirmer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        // --- 1. INITIALISATION ---
        document.addEventListener('DOMContentLoaded', async () => {
            const html = document.documentElement;
            const themeToggle = document.getElementById('darkModeSwitch');
            const langSelect = document.getElementById('languageSelect');
            const bioSwitch = document.getElementById('biometricSwitch');

            // Charger le rôle
            await loadUserRole();

            //  INITIALISATION DES ÉTATS

            // Thème
            const currentTheme = localStorage.getItem('theme') ||
                (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');

            html.setAttribute('data-bs-theme', currentTheme);
            themeToggle.checked = (currentTheme === 'dark');
            updateThemeIcons(currentTheme === 'dark');

            // Langue
            const savedLang = localStorage.getItem('language');
            if (savedLang) langSelect.value = savedLang;

            // Biométrie
            bioSwitch.checked = localStorage.getItem('biometric_enabled') === 'true';

            // GESTIONNAIRES D'ÉVÉNEMENTS

            // Theme Switch
            themeToggle.addEventListener('change', () => {
                const isDark = themeToggle.checked;
                const newTheme = isDark ? 'dark' : 'light';

                html.setAttribute('data-bs-theme', newTheme);
                localStorage.setItem('theme', newTheme);
                updateThemeIcons(isDark);
            });

            // Langue
            langSelect.addEventListener('change', (e) => {
                localStorage.setItem('language', e.target.value);
            });

            // Biométrie
            bioSwitch.addEventListener('change', (e) => {
                localStorage.setItem('biometric_enabled', e.target.checked);
            });

            function updateThemeIcons(isDark) {
                document.getElementById('theme-icon-light').className = `bi bi-sun-fill \${isDark ? 'text-muted' : 'text-warning'}`;
                document.getElementById('theme-icon-dark').className = `bi bi-moon-stars-fill \${isDark ? 'text-primary' : 'text-muted'}`;
            }

            async function loadUserRole() {
                try {
                    const response = await fetch('{{ path('get_profile') }}');
                    const result = await response.json();
                    if (result.success && result.user) {
                        const profile = result.user;
                        const roleElement = document.getElementById('userRole');
                        if (roleElement) {
                            roleElement.textContent = profile.role === 'admin' || (profile.roles && profile.roles.includes('ROLE_ADMIN')) ? 'Administrateur' : 'Utilisateur';
                        }
                    }
                } catch (error) {
                    console.error('Erreur chargement rôle:', error);
                }
            }
        });
    </script>
{% endblock %}

", "settings/index.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/settings/index.html.twig");
    }
}
