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

/* settings/change_password.html.twig */
class __TwigTemplate_086f65c66942afc9682673f9dc2cfb04 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings/change_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings/change_password.html.twig"));

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

        yield "Changer le mot de passe - Budget App";
        
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
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings");
        yield "\">Paramètres</a>
                    </li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-gear text-black\" style=\"font-size: 15px;\"></span>
                        Changer de mot de passe
                    </li>
                </ol>
            </nav>
        </div>
        <div class=\"form mt-4\">
            <div class=\"mb-4 mt-3 position-relative\">
                <label class=\"position-absolute px-2 ms-3 text-muted fs-6\"
                    style=\"top: -13px; z-index: 5; background: white;\">Ancien mot de passe</label>
                <div class=\"border rounded-3 shadow-sm px-3 d-flex align-items-center\" style=\"height: 40px;\">
                    <input type=\"password\" id=\"oldPassword\" class=\"form-control border-0 bg-transparent fs-6\"
                        placeholder=\"6 - 20 caractères\" style=\"box-shadow: none;\">
                </div>
            </div>

            <div class=\"mb-4 mt-3 position-relative\">
                <label class=\"position-absolute px-2 ms-3 text-muted fs-6\"
                    style=\"top: -13px; z-index: 5; background: white;\">Nouveau mot de passe</label>
                <div class=\"border rounded-3 shadow-sm px-3 d-flex align-items-center\" style=\"height: 40px;\">
                    <input type=\"password\" id=\"newPassword\" class=\"form-control border-0 bg-transparent fs-6\"
                        placeholder=\"6 - 20 caractères\" style=\"box-shadow: none;\">
                </div>
            </div>

            <div class=\"mb-4 mt-3 position-relative\">
                <label class=\"position-absolute px-2 ms-3 text-muted fs-6\"
                    style=\"top: -13px; z-index: 5; background: white;\">Confirmer le nouveau mot de passe</label>
                <div class=\"border rounded-3 shadow-sm px-3 d-flex align-items-center\" style=\"height: 40px;\">
                    <input type=\"password\" id=\"confirmPassword\" class=\"form-control border-0 bg-transparent fs-6\"
                        placeholder=\"6 - 20 caractères\" style=\"box-shadow: none;\">
                </div>
            </div>

            <div class=\"form-check ms-2 mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"rememberMe\">
                <label class=\"form-check-label text-muted small\" for=\"rememberMe\">Se souvenir de moi</label>
            </div>

            <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary text-white\" id=\"btnSubmitPassword\">Réinitialiser le mot de
                    passe</button>
            </div>
        </div>

        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js\"
            integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\"
            crossorigin=\"anonymous\"></script>

        <script>
            document.addEventListener(\"DOMContentLoaded\", function () {
                const btnSubmit = document.getElementById(\"btnSubmitPassword\");

                btnSubmit.addEventListener(\"click\", function (e) {
                    // Récupération des valeurs
                    const oldPass = document.getElementById(\"oldPassword\").value;
                    const newPass = document.getElementById(\"newPassword\").value;
                    const confirmPass = document.getElementById(\"confirmPassword\").value;
                    const rememberMe = document.getElementById(\"rememberMe\").checked;

                    // 1. Vérification des champs vides
                    if (!oldPass || !newPass || !confirmPass) {
                        alert(\"Veuillez remplir tous les champs.\");
                        return;
                    }

                    // 2. Vérification de la longueur (6-20 caractères)
                    if (newPass.length < 6 || newPass.length > 20) {
                        alert(\"Le nouveau mot de passe doit contenir entre 6 et 20 caractères.\");
                        return;
                    }

                    // 3. Vérification de la correspondance
                    if (newPass !== confirmPass) {
                        alert(\"Le nouveau mot de passe et la confirmation ne correspondent pas.\");
                        return;
                    }

                    // --- Succès ---
                    console.log(\"Ancien mot de passe:\", oldPass);
                    console.log(\"Nouveau mot de passe:\", newPass);
                    console.log(\"Se souvenir de moi:\", rememberMe);

                    // Simulation d'envoi à la base de données
                    // Ici, on pourrait ouvrir ton \"loadingModal\" avant la redirection
                    alert(\"Mot de passe réinitialisé avec succès !\");

                    // Redirection vers le profil
                    window.location.href = \"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\";
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
        return "settings/change_password.html.twig";
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
        return array (  205 => 103,  111 => 12,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Changer le mot de passe - Budget App{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_settings') }}\">Paramètres</a>
                    </li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-gear text-black\" style=\"font-size: 15px;\"></span>
                        Changer de mot de passe
                    </li>
                </ol>
            </nav>
        </div>
        <div class=\"form mt-4\">
            <div class=\"mb-4 mt-3 position-relative\">
                <label class=\"position-absolute px-2 ms-3 text-muted fs-6\"
                    style=\"top: -13px; z-index: 5; background: white;\">Ancien mot de passe</label>
                <div class=\"border rounded-3 shadow-sm px-3 d-flex align-items-center\" style=\"height: 40px;\">
                    <input type=\"password\" id=\"oldPassword\" class=\"form-control border-0 bg-transparent fs-6\"
                        placeholder=\"6 - 20 caractères\" style=\"box-shadow: none;\">
                </div>
            </div>

            <div class=\"mb-4 mt-3 position-relative\">
                <label class=\"position-absolute px-2 ms-3 text-muted fs-6\"
                    style=\"top: -13px; z-index: 5; background: white;\">Nouveau mot de passe</label>
                <div class=\"border rounded-3 shadow-sm px-3 d-flex align-items-center\" style=\"height: 40px;\">
                    <input type=\"password\" id=\"newPassword\" class=\"form-control border-0 bg-transparent fs-6\"
                        placeholder=\"6 - 20 caractères\" style=\"box-shadow: none;\">
                </div>
            </div>

            <div class=\"mb-4 mt-3 position-relative\">
                <label class=\"position-absolute px-2 ms-3 text-muted fs-6\"
                    style=\"top: -13px; z-index: 5; background: white;\">Confirmer le nouveau mot de passe</label>
                <div class=\"border rounded-3 shadow-sm px-3 d-flex align-items-center\" style=\"height: 40px;\">
                    <input type=\"password\" id=\"confirmPassword\" class=\"form-control border-0 bg-transparent fs-6\"
                        placeholder=\"6 - 20 caractères\" style=\"box-shadow: none;\">
                </div>
            </div>

            <div class=\"form-check ms-2 mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"rememberMe\">
                <label class=\"form-check-label text-muted small\" for=\"rememberMe\">Se souvenir de moi</label>
            </div>

            <div class=\"d-flex justify-content-end\">
                <button class=\"btn btn-primary text-white\" id=\"btnSubmitPassword\">Réinitialiser le mot de
                    passe</button>
            </div>
        </div>

        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js\"
            integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\"
            crossorigin=\"anonymous\"></script>

        <script>
            document.addEventListener(\"DOMContentLoaded\", function () {
                const btnSubmit = document.getElementById(\"btnSubmitPassword\");

                btnSubmit.addEventListener(\"click\", function (e) {
                    // Récupération des valeurs
                    const oldPass = document.getElementById(\"oldPassword\").value;
                    const newPass = document.getElementById(\"newPassword\").value;
                    const confirmPass = document.getElementById(\"confirmPassword\").value;
                    const rememberMe = document.getElementById(\"rememberMe\").checked;

                    // 1. Vérification des champs vides
                    if (!oldPass || !newPass || !confirmPass) {
                        alert(\"Veuillez remplir tous les champs.\");
                        return;
                    }

                    // 2. Vérification de la longueur (6-20 caractères)
                    if (newPass.length < 6 || newPass.length > 20) {
                        alert(\"Le nouveau mot de passe doit contenir entre 6 et 20 caractères.\");
                        return;
                    }

                    // 3. Vérification de la correspondance
                    if (newPass !== confirmPass) {
                        alert(\"Le nouveau mot de passe et la confirmation ne correspondent pas.\");
                        return;
                    }

                    // --- Succès ---
                    console.log(\"Ancien mot de passe:\", oldPass);
                    console.log(\"Nouveau mot de passe:\", newPass);
                    console.log(\"Se souvenir de moi:\", rememberMe);

                    // Simulation d'envoi à la base de données
                    // Ici, on pourrait ouvrir ton \"loadingModal\" avant la redirection
                    alert(\"Mot de passe réinitialisé avec succès !\");

                    // Redirection vers le profil
                    window.location.href = \"{{ path('app_profile') }}\";
                });
            });
        </script>
{% endblock %}

", "settings/change_password.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/settings/change_password.html.twig");
    }
}
