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

/* profile/edit.html.twig */
class __TwigTemplate_12f8507eb57d8172e375cf1fe6f15a0d extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

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

        yield "Modifier le Profil - Budget App";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "    <style>
    .profile-photo-wrapper {
        position: relative;
        display: inline-block;
    }
    .profile-photo-wrapper .camera-overlay {
        position: absolute;
        bottom: 0;
        right: 0;
        background: #0d6efd;
        color: white;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border: 3px solid white;
        transition: background 0.2s;
    }
    .profile-photo-wrapper .camera-overlay:hover {
        background: #0b5ed7;
    }
    #photoInput {
        display: none;
    }
    .loading-spinner {
        display: none;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
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

        // line 42
        yield "<div class=\"container\">
    <div class=\"breadcrumb mt-3\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                <li class=\"breadcrumb-item\">
                    <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">Profil</a>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                    <span class=\"bi bi-gear text-black\" style=\"font-size: 15px;\"></span>
                    Gérer le profil
                </li>
            </ol>
        </nav>
    </div>
    <div class=\"container-fluid p-3\">
        <!-- Profile Photo Section -->
        <div class=\"text-center mb-4\">
            <div class=\"profile-photo-wrapper\">
                <img src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "avatar", [], "any", false, false, false, 61), "/assets/images/profil.jpg")) : ("/assets/images/profil.jpg")), "html", null, true);
        yield "\" alt=\"Profil\" class=\"rounded-circle small-profile-img mb-2\"
                    width=\"100\" height=\"100\" id=\"userAvatar\">
                <label for=\"photoInput\" class=\"camera-overlay\" title=\"Changer la photo\">
                    <i class=\"bi bi-camera\"></i>
                </label>
            </div>
            <input type=\"file\" id=\"photoInput\" accept=\"image/*\">
            <p class=\"text-muted small mt-2\">Cliquez sur l'icône caméra pour changer votre photo</p>
            <div class=\"loading-spinner\" id=\"loadingSpinner\">
                <div class=\"spinner-border text-primary\" role=\"status\">
                    <span class=\"visually-hidden\">Chargement...</span>
                </div>
            </div>
        </div>

        <!-- Profile Info Display (Read-only) -->
        <div class=\"card mb-4\">
            <div class=\"card-header bg-primary text-white\">
                <h5 class=\"mb-0\"><i class=\"bi bi-person me-2\"></i>Informations du profil</h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row mb-3\">
                    <div class=\"col-md-6 mb-3 mb-md-0\">
                        <label class=\"form-label text-muted small\">Nom complet</label>
                        <p class=\"fw-bold\" id=\"displayFullName\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", true, true, false, 85)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "fullName", [], "any", false, false, false, 85), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "email", [], "any", false, false, false, 85), "@"), 0, [], "array", false, false, false, 85))) : (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "email", [], "any", false, false, false, 85), "@"), 0, [], "array", false, false, false, 85))), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"col-md-6\">
                        <label class=\"form-label text-muted small\">Email</label>
                        <p class=\"fw-bold\" id=\"displayEmail\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "email", [], "any", false, false, false, 89), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"row mb-3\">
                    <div class=\"col-md-6 mb-3 mb-md-0\">
                        <label class=\"form-label text-muted small\">Téléphone</label>
                        <p class=\"fw-bold\" id=\"displayPhone\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", true, true, false, 95)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "phone", [], "any", false, false, false, 95), "--")) : ("--")), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"col-md-6\">
                        <label class=\"form-label text-muted small\">Adresse</label>
                        <p class=\"fw-bold\" id=\"displayAddress\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", true, true, false, 99)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "address", [], "any", false, false, false, 99), "--")) : ("--")), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3 mb-md-0\">
                        <label class=\"form-label text-muted small\">Code postal</label>
                        <p class=\"fw-bold\" id=\"displayPostcode\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "postcode", [], "any", true, true, false, 105)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "postcode", [], "any", false, false, false, 105), "--")) : ("--")), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"col-md-6\">
                        <label class=\"form-label text-muted small\">Ville</label>
                        <p class=\"fw-bold\" id=\"displayVille\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "ville", [], "any", true, true, false, 109)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 109, $this->source); })()), "ville", [], "any", false, false, false, 109), "--")) : ("--")), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
            <div class=\"card-footer bg-transparent\">
                <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"btn btn-primary\">
                    <i class=\"bi bi-pencil me-1\"></i>Modifier le profil
                </a>
            </div>
        </div>

        <!-- Message alerte pour modifier le profil-->
        <div class=\"alert alert-info\">
            <i class=\"bi bi-info-circle me-2\"></i>
            Pour modifier vos informations personnelles, utilisez la page
            <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"alert-link\">Profil</a>.
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', async () => {
        await loadProfile();
        setupPhotoUpload();
    });

    // Charger les informations du profil depuis l'API
    async function loadProfile() {
        try {
            const response = await fetch('";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_profile");
        yield "');

            // Handle non-OK responses
            if (!response.ok) {
                console.error('Erreur chargement profil:', response.status, response.statusText);
                // Try to parse error message if available
                try {
                    const errorData = await response.json();
                    console.error('Server error:', errorData);
                } catch (e) {
                    // Ignore JSON parse errors
                }
                return;
            }

            const result = await response.json();

            if (result.success && result.user) {
                const profile = result.user;
                // Mettre à jour l'affichage avec les données du profil
                document.getElementById('displayFullName').textContent = profile.fullName || 'Non défini';
                document.getElementById('displayEmail').textContent = profile.email || 'Non défini';
                document.getElementById('displayPhone').textContent = profile.phone || 'Non défini';
                document.getElementById('displayAddress').textContent = profile.address || 'Non défini';
                document.getElementById('displayPostcode').textContent = profile.postcode || 'Non défini';
                document.getElementById('displayVille').textContent = profile.ville || 'Non défini';

                // Mettre à jour la photo de profil si elle existe
                if (profile.avatar) {
                    document.getElementById('userAvatar').src = profile.avatar;
                }
            }
        } catch (error) {
            console.error('Erreur chargement profil:', error);
        }
    }

    // Gérer le téléchargement de la photo de profil
    function setupPhotoUpload() {
        const photoInput = document.getElementById('photoInput');
        const spinner = document.getElementById('loadingSpinner');
        const avatar = document.getElementById('userAvatar');

        if (!photoInput || !spinner || !avatar) {
            console.warn('Éléments manquants pour le téléchargement de photo');
            return;
        }

        photoInput.addEventListener('change', async (e) => {
            const file = e.target.files[0];
            if (!file) return;

            // Valider le type de fichier
            if (!file.type.startsWith('image/')) {
                alert('Veuillez sélectionner une image');
                return;
            }

            // Valider la taille (max 2MB)
            if (file.size > 2 * 1024 * 1024) {
                alert('La taille de l\\'image ne doit pas dépasser 2MB');
                return;
            }

            // Afficher le spinner
            spinner.style.display = 'block';

            try {
                // Convertir l'image en base64
                const base64 = await convertToBase64(file);

                // Appeler l'API pour mettre à jour la photo
                const response = await fetch('";
        // line 210
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_profile");
        yield "', {
                    method: 'PUT',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ avatar: base64 })
                });

                if (!response.ok) {
                    throw new Error(`Erreur HTTP: \${response.status}`);
                }

                const result = await response.json();

                if (result.success) {
                    // Mettre à jour l'image affichée
                    avatar.src = base64;
                    alert('Photo de profil mise à jour!');
                } else {
                    alert(result.error || 'Erreur lors de la mise à jour');
                }
            } catch (error) {
                console.error('Erreur upload photo:', error);
                alert('Erreur lors du téléchargement de la photo');
            } finally {
                spinner.style.display = 'none';
                // Réinitialiser l'input
                photoInput.value = '';
            }
        });
    }

    // Convertir un fichier en base64
    function convertToBase64(file) {
        return new Promise((resolve, reject) => {
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = () => resolve(reader.result);
            reader.onerror = error => reject(error);
        });
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
        return "profile/edit.html.twig";
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
        return array (  362 => 210,  287 => 138,  270 => 124,  257 => 114,  249 => 109,  242 => 105,  233 => 99,  226 => 95,  217 => 89,  210 => 85,  183 => 61,  167 => 48,  162 => 46,  156 => 42,  143 => 41,  101 => 7,  88 => 6,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le Profil - Budget App{% endblock %}


{% block stylesheets %}
    <style>
    .profile-photo-wrapper {
        position: relative;
        display: inline-block;
    }
    .profile-photo-wrapper .camera-overlay {
        position: absolute;
        bottom: 0;
        right: 0;
        background: #0d6efd;
        color: white;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border: 3px solid white;
        transition: background 0.2s;
    }
    .profile-photo-wrapper .camera-overlay:hover {
        background: #0b5ed7;
    }
    #photoInput {
        display: none;
    }
    .loading-spinner {
        display: none;
    }
</style>
{% endblock %}


{% block body %}
<div class=\"container\">
    <div class=\"breadcrumb mt-3\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                <li class=\"breadcrumb-item\">
                    <a href=\"{{ path('app_profile') }}\">Profil</a>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                    <span class=\"bi bi-gear text-black\" style=\"font-size: 15px;\"></span>
                    Gérer le profil
                </li>
            </ol>
        </nav>
    </div>
    <div class=\"container-fluid p-3\">
        <!-- Profile Photo Section -->
        <div class=\"text-center mb-4\">
            <div class=\"profile-photo-wrapper\">
                <img src=\"{{ user.avatar|default('/assets/images/profil.jpg') }}\" alt=\"Profil\" class=\"rounded-circle small-profile-img mb-2\"
                    width=\"100\" height=\"100\" id=\"userAvatar\">
                <label for=\"photoInput\" class=\"camera-overlay\" title=\"Changer la photo\">
                    <i class=\"bi bi-camera\"></i>
                </label>
            </div>
            <input type=\"file\" id=\"photoInput\" accept=\"image/*\">
            <p class=\"text-muted small mt-2\">Cliquez sur l'icône caméra pour changer votre photo</p>
            <div class=\"loading-spinner\" id=\"loadingSpinner\">
                <div class=\"spinner-border text-primary\" role=\"status\">
                    <span class=\"visually-hidden\">Chargement...</span>
                </div>
            </div>
        </div>

        <!-- Profile Info Display (Read-only) -->
        <div class=\"card mb-4\">
            <div class=\"card-header bg-primary text-white\">
                <h5 class=\"mb-0\"><i class=\"bi bi-person me-2\"></i>Informations du profil</h5>
            </div>
            <div class=\"card-body\">
                <div class=\"row mb-3\">
                    <div class=\"col-md-6 mb-3 mb-md-0\">
                        <label class=\"form-label text-muted small\">Nom complet</label>
                        <p class=\"fw-bold\" id=\"displayFullName\">{{ user.fullName|default(user.email|split('@')[0]) }}</p>
                    </div>
                    <div class=\"col-md-6\">
                        <label class=\"form-label text-muted small\">Email</label>
                        <p class=\"fw-bold\" id=\"displayEmail\">{{ user.email }}</p>
                    </div>
                </div>
                <div class=\"row mb-3\">
                    <div class=\"col-md-6 mb-3 mb-md-0\">
                        <label class=\"form-label text-muted small\">Téléphone</label>
                        <p class=\"fw-bold\" id=\"displayPhone\">{{ user.phone|default('--') }}</p>
                    </div>
                    <div class=\"col-md-6\">
                        <label class=\"form-label text-muted small\">Adresse</label>
                        <p class=\"fw-bold\" id=\"displayAddress\">{{ user.address|default('--') }}</p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3 mb-md-0\">
                        <label class=\"form-label text-muted small\">Code postal</label>
                        <p class=\"fw-bold\" id=\"displayPostcode\">{{ user.postcode|default('--') }}</p>
                    </div>
                    <div class=\"col-md-6\">
                        <label class=\"form-label text-muted small\">Ville</label>
                        <p class=\"fw-bold\" id=\"displayVille\">{{ user.ville|default('--') }}</p>
                    </div>
                </div>
            </div>
            <div class=\"card-footer bg-transparent\">
                <a href=\"{{ path('app_profile') }}\" class=\"btn btn-primary\">
                    <i class=\"bi bi-pencil me-1\"></i>Modifier le profil
                </a>
            </div>
        </div>

        <!-- Message alerte pour modifier le profil-->
        <div class=\"alert alert-info\">
            <i class=\"bi bi-info-circle me-2\"></i>
            Pour modifier vos informations personnelles, utilisez la page
            <a href=\"{{ path('app_profile') }}\" class=\"alert-link\">Profil</a>.
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', async () => {
        await loadProfile();
        setupPhotoUpload();
    });

    // Charger les informations du profil depuis l'API
    async function loadProfile() {
        try {
            const response = await fetch('{{ path('get_profile') }}');

            // Handle non-OK responses
            if (!response.ok) {
                console.error('Erreur chargement profil:', response.status, response.statusText);
                // Try to parse error message if available
                try {
                    const errorData = await response.json();
                    console.error('Server error:', errorData);
                } catch (e) {
                    // Ignore JSON parse errors
                }
                return;
            }

            const result = await response.json();

            if (result.success && result.user) {
                const profile = result.user;
                // Mettre à jour l'affichage avec les données du profil
                document.getElementById('displayFullName').textContent = profile.fullName || 'Non défini';
                document.getElementById('displayEmail').textContent = profile.email || 'Non défini';
                document.getElementById('displayPhone').textContent = profile.phone || 'Non défini';
                document.getElementById('displayAddress').textContent = profile.address || 'Non défini';
                document.getElementById('displayPostcode').textContent = profile.postcode || 'Non défini';
                document.getElementById('displayVille').textContent = profile.ville || 'Non défini';

                // Mettre à jour la photo de profil si elle existe
                if (profile.avatar) {
                    document.getElementById('userAvatar').src = profile.avatar;
                }
            }
        } catch (error) {
            console.error('Erreur chargement profil:', error);
        }
    }

    // Gérer le téléchargement de la photo de profil
    function setupPhotoUpload() {
        const photoInput = document.getElementById('photoInput');
        const spinner = document.getElementById('loadingSpinner');
        const avatar = document.getElementById('userAvatar');

        if (!photoInput || !spinner || !avatar) {
            console.warn('Éléments manquants pour le téléchargement de photo');
            return;
        }

        photoInput.addEventListener('change', async (e) => {
            const file = e.target.files[0];
            if (!file) return;

            // Valider le type de fichier
            if (!file.type.startsWith('image/')) {
                alert('Veuillez sélectionner une image');
                return;
            }

            // Valider la taille (max 2MB)
            if (file.size > 2 * 1024 * 1024) {
                alert('La taille de l\\'image ne doit pas dépasser 2MB');
                return;
            }

            // Afficher le spinner
            spinner.style.display = 'block';

            try {
                // Convertir l'image en base64
                const base64 = await convertToBase64(file);

                // Appeler l'API pour mettre à jour la photo
                const response = await fetch('{{ path('update_profile') }}', {
                    method: 'PUT',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ avatar: base64 })
                });

                if (!response.ok) {
                    throw new Error(`Erreur HTTP: \${response.status}`);
                }

                const result = await response.json();

                if (result.success) {
                    // Mettre à jour l'image affichée
                    avatar.src = base64;
                    alert('Photo de profil mise à jour!');
                } else {
                    alert(result.error || 'Erreur lors de la mise à jour');
                }
            } catch (error) {
                console.error('Erreur upload photo:', error);
                alert('Erreur lors du téléchargement de la photo');
            } finally {
                spinner.style.display = 'none';
                // Réinitialiser l'input
                photoInput.value = '';
            }
        });
    }

    // Convertir un fichier en base64
    function convertToBase64(file) {
        return new Promise((resolve, reject) => {
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = () => resolve(reader.result);
            reader.onerror = error => reject(error);
        });
    }
</script>
{% endblock %}
", "profile/edit.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/profile/edit.html.twig");
    }
}
