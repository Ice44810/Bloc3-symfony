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

/* contact/detail.html.twig */
class __TwigTemplate_b7481d41696bafdf1bb869cd8eb2605c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/detail.html.twig"));

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

        yield "Détails Contact - Budget App";
        
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
        <div class=\"breadcrumb mt-3 d-flex justify-content-between align-items-center\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-0\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Mes contacts</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-person-badge text-primary\" style=\"font-size: 15px;\"></span>
                        Détails
                    </li>
                </ol>
            </nav>
            <a href=\"javascript:void(0);\" class=\"text-dark\" data-bs-toggle=\"offcanvas\"
               data-bs-target=\"#actionSheetAccount\">
                <i class=\"bi bi-three-dots-vertical fs-5\"></i>
            </a>

            <!-- Offcanvas paramètres ouverture bas -->
            <div class=\"offcanvas offcanvas-bottom action-sheet-ios\" tabindex=\"-1\" id=\"actionSheetAccount\">
                <div class=\"offcanvas-body p-2\">
                    <div class=\"list-group shadow-sm mb-2 rounded-4\">
                        <a href=\"#\" class=\"list-group-item list-group-item-action text-center py-3\" data-bs-dismiss=\"offcanvas\">Editer</a>
                        <a href=\"#\" id=\"deleteContactBtn\" data-id=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
        yield "\" class=\"list-group-item list-group-item-action text-center py-3 text-danger fw-semibold\">
                            Supprimer
                        </a>
                    </div>
                    <button type=\"button\" class=\"btn btn-white w-100 py-3 shadow-sm rounded-4 fw-bold text-primary\"
                            data-bs-dismiss=\"offcanvas\">Annuler</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PROFILE -->
    <div class=\"text-center mt-4\">
        <div class=\"position-relative d-inline-block\">
            ";
        // line 43
        yield "            ";
        $context["avatarPath"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 43, $this->source); })()), "avatar", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 43, $this->source); })()), "avatar", [], "any", false, false, false, 43)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profil.jpg")));
        // line 44
        yield "            <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatarPath"]) || array_key_exists("avatarPath", $context) ? $context["avatarPath"] : (function () { throw new RuntimeError('Variable "avatarPath" does not exist.', 44, $this->source); })()), "html", null, true);
        yield "\"
                 class=\"rounded-circle profile-img shadow-sm border\" alt=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
        yield "\"
                 style=\"width: 110px; height: 110px; object-fit: cover;\">
            <div class=\"position-absolute bottom-0 end-0 bg-dark rounded-circle d-flex align-items-center justify-content-center border border-white border-2\"
                    style=\"width: 32px; height: 32px; cursor: pointer;\">
                    <i class=\"bi bi-camera-fill text-white small\"></i>
            </div>
        </div>
        <h5 class=\"mt-3 fw-bold\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), "html", null, true);
        yield "</h5>
        <div class=\"d-flex justify-content-center align-items-center gap-2 text-muted mt-1\">
            <span id=\"accountNumber\" class=\"small\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 54, $this->source); })()), "identifier", [], "any", false, false, false, 54), "html", null, true);
        yield "</span>
            <i class=\"bi bi-clipboard copy-icon\" id=\"copyBtn\" style=\"cursor:pointer; font-size: 0.9rem;\"></i>
        </div>
    </div>

    <!-- Boutons action -->
    <div class=\"d-flex justify-content-center gap-4 mt-4\">
        <div class=\"text-center\">
            <div class=\"action-btn mx-auto d-flex align-items-center justify-content-center rounded-circle shadow-sm bg-primary text-white\" style=\"width: 50px; height: 50px;\">
                <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfert");
        yield "?recipient=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 63, $this->source); })()), "identifier", [], "any", false, false, false, 63), "html", null, true);
        yield "\" class=\"text-white\"><i class=\"bi bi-arrow-left-right fs-5\"></i></a>
            </div>
            <small class=\"d-block mt-2 fw-medium text-muted\">Transfert</small>
        </div>
        <div class=\"text-center\">
            <div class=\"action-btn mx-auto d-flex align-items-center justify-content-center rounded-circle shadow-sm border bg-white\" style=\"width: 50px; height: 50px;\">
                <i class=\"bi bi-arrow-down-left fs-5 text-dark\"></i>
            </div>
            <small class=\"d-block mt-2 fw-medium text-muted\">Demander</small>
        </div>
        <div class=\"text-center\">
            <div class=\"action-btn mx-auto d-flex align-items-center justify-content-center rounded-circle shadow-sm border bg-white\" style=\"width: 50px; height: 50px;\">
                <i class=\"bi bi-share fs-5 text-dark\"></i>
            </div>
            <small class=\"d-block mt-2 fw-medium text-muted\">Partager</small>
        </div>
    </div>

    <!-- INFO LIST -->
    <div class=\"container mt-5\">
        <div class=\"row info-row align-items-center mb-3\">
            <div class=\"col-1 text-center\"><i class=\"bi bi-person text-secondary fs-5\"></i></div>
            <div class=\"col ms-2 fw-medium\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 85, $this->source); })()), "name", [], "any", false, false, false, 85), "html", null, true);
        yield "</div>
        </div>

        <div class=\"row info-row align-items-center mb-3\">
            ";
        // line 89
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 89, $this->source); })()), "type", [], "any", false, false, false, 89) == "phone")) {
            // line 90
            yield "                <div class=\"col-1 text-center\"><i class=\"bi bi-telephone text-secondary fs-5\"></i></div>
            ";
        } else {
            // line 92
            yield "                <div class=\"col-1 text-center\"><i class=\"bi bi-credit-card text-secondary fs-5\"></i></div>
            ";
        }
        // line 94
        yield "            <div class=\"col ms-2 text-muted\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 94, $this->source); })()), "identifier", [], "any", false, false, false, 94), "html", null, true);
        yield "</div>
        </div>

        ";
        // line 97
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 97, $this->source); })()), "email", [], "any", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "        <div class=\"row info-row align-items-center mb-3\">
            <div class=\"col-1 text-center\"><i class=\"bi bi-envelope text-secondary fs-5\"></i></div>
            <div class=\"col ms-2 text-muted\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 100, $this->source); })()), "email", [], "any", false, false, false, 100), "html", null, true);
            yield "</div>
        </div>
        ";
        }
        // line 103
        yield "
        ";
        // line 104
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 104, $this->source); })()), "bankName", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "        <div class=\"row info-row align-items-center mb-3\">
            <div class=\"col-1 text-center\"><i class=\"bi bi-bank text-secondary fs-5\"></i></div>
            <div class=\"col ms-2 text-muted\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 107, $this->source); })()), "bankName", [], "any", false, false, false, 107), "html", null, true);
            yield "</div>
        </div>
        ";
        }
        // line 110
        yield "    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // URL de base pour la suppression
            const baseDeleteUrl = \"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_recipient", ["id" => "0"]);
        yield "\";

            // Copier le numéro
            const copyBtn = document.getElementById(\"copyBtn\");
            if (copyBtn) {
                copyBtn.addEventListener(\"click\", () => {
                    const accountNumber = document.getElementById(\"accountNumber\").innerText;
                    navigator.clipboard.writeText(accountNumber).then(() => {
                        // Petit changement d'icône pour confirmer la copie
                        const originalClass = copyBtn.className;
                        copyBtn.className = 'bi bi-check-circle-fill text-success copy-icon';
                        setTimeout(() => {
                            copyBtn.className = originalClass;
                        }, 2000);
                    });
                });
            }

            // Supprimer le contact
            const deleteBtn = document.getElementById('deleteContactBtn');
            if(deleteBtn) {
                deleteBtn.addEventListener('click', async (e) => {
                    e.preventDefault();
                    if(!confirm('Êtes-vous sûr de vouloir supprimer ce contact ?')) return;

                    const contactId = deleteBtn.dataset.id;
                    // Construction de l'URL pour l'API delete
                    const url = baseDeleteUrl.replace('/0', '/' + contactId);

                    try {
                        const response = await fetch(url, {
                            method: 'DELETE',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'Content-Type': 'application/json'
                            }
                        });

                        const result = await response.json();

                        if(response.ok && result.success) {
                            alert('Contact supprimé avec succès');
                            window.location.href = \"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\";
                        } else {
                            alert('Erreur lors de la suppression: ' + (result.message || 'Erreur inconnue'));
                        }
                    } catch (error) {
                        console.error('Erreur:', error);
                        alert('Erreur réseau lors de la suppression');
                    }
                });
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
        return "contact/detail.html.twig";
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
        return array (  312 => 157,  267 => 115,  260 => 110,  254 => 107,  250 => 105,  248 => 104,  245 => 103,  239 => 100,  235 => 98,  233 => 97,  226 => 94,  222 => 92,  218 => 90,  216 => 89,  209 => 85,  182 => 63,  170 => 54,  165 => 52,  155 => 45,  150 => 44,  147 => 43,  130 => 28,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails Contact - Budget App{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"breadcrumb mt-3 d-flex justify-content-between align-items-center\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-0\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_contact') }}\">Mes contacts</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-person-badge text-primary\" style=\"font-size: 15px;\"></span>
                        Détails
                    </li>
                </ol>
            </nav>
            <a href=\"javascript:void(0);\" class=\"text-dark\" data-bs-toggle=\"offcanvas\"
               data-bs-target=\"#actionSheetAccount\">
                <i class=\"bi bi-three-dots-vertical fs-5\"></i>
            </a>

            <!-- Offcanvas paramètres ouverture bas -->
            <div class=\"offcanvas offcanvas-bottom action-sheet-ios\" tabindex=\"-1\" id=\"actionSheetAccount\">
                <div class=\"offcanvas-body p-2\">
                    <div class=\"list-group shadow-sm mb-2 rounded-4\">
                        <a href=\"#\" class=\"list-group-item list-group-item-action text-center py-3\" data-bs-dismiss=\"offcanvas\">Editer</a>
                        <a href=\"#\" id=\"deleteContactBtn\" data-id=\"{{ contact.id }}\" class=\"list-group-item list-group-item-action text-center py-3 text-danger fw-semibold\">
                            Supprimer
                        </a>
                    </div>
                    <button type=\"button\" class=\"btn btn-white w-100 py-3 shadow-sm rounded-4 fw-bold text-primary\"
                            data-bs-dismiss=\"offcanvas\">Annuler</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PROFILE -->
    <div class=\"text-center mt-4\">
        <div class=\"position-relative d-inline-block\">
            {# On affiche l'avatar du contact ou une image par défaut #}
            {% set avatarPath = contact.avatar ? asset('assets/images/' ~ contact.avatar) : asset('assets/images/profil.jpg') %}
            <img src=\"{{ avatarPath }}\"
                 class=\"rounded-circle profile-img shadow-sm border\" alt=\"{{ contact.name }}\"
                 style=\"width: 110px; height: 110px; object-fit: cover;\">
            <div class=\"position-absolute bottom-0 end-0 bg-dark rounded-circle d-flex align-items-center justify-content-center border border-white border-2\"
                    style=\"width: 32px; height: 32px; cursor: pointer;\">
                    <i class=\"bi bi-camera-fill text-white small\"></i>
            </div>
        </div>
        <h5 class=\"mt-3 fw-bold\">{{ contact.name }}</h5>
        <div class=\"d-flex justify-content-center align-items-center gap-2 text-muted mt-1\">
            <span id=\"accountNumber\" class=\"small\">{{ contact.identifier }}</span>
            <i class=\"bi bi-clipboard copy-icon\" id=\"copyBtn\" style=\"cursor:pointer; font-size: 0.9rem;\"></i>
        </div>
    </div>

    <!-- Boutons action -->
    <div class=\"d-flex justify-content-center gap-4 mt-4\">
        <div class=\"text-center\">
            <div class=\"action-btn mx-auto d-flex align-items-center justify-content-center rounded-circle shadow-sm bg-primary text-white\" style=\"width: 50px; height: 50px;\">
                <a href=\"{{ path('app_transfert') }}?recipient={{ contact.identifier }}\" class=\"text-white\"><i class=\"bi bi-arrow-left-right fs-5\"></i></a>
            </div>
            <small class=\"d-block mt-2 fw-medium text-muted\">Transfert</small>
        </div>
        <div class=\"text-center\">
            <div class=\"action-btn mx-auto d-flex align-items-center justify-content-center rounded-circle shadow-sm border bg-white\" style=\"width: 50px; height: 50px;\">
                <i class=\"bi bi-arrow-down-left fs-5 text-dark\"></i>
            </div>
            <small class=\"d-block mt-2 fw-medium text-muted\">Demander</small>
        </div>
        <div class=\"text-center\">
            <div class=\"action-btn mx-auto d-flex align-items-center justify-content-center rounded-circle shadow-sm border bg-white\" style=\"width: 50px; height: 50px;\">
                <i class=\"bi bi-share fs-5 text-dark\"></i>
            </div>
            <small class=\"d-block mt-2 fw-medium text-muted\">Partager</small>
        </div>
    </div>

    <!-- INFO LIST -->
    <div class=\"container mt-5\">
        <div class=\"row info-row align-items-center mb-3\">
            <div class=\"col-1 text-center\"><i class=\"bi bi-person text-secondary fs-5\"></i></div>
            <div class=\"col ms-2 fw-medium\">{{ contact.name }}</div>
        </div>

        <div class=\"row info-row align-items-center mb-3\">
            {% if contact.type == 'phone' %}
                <div class=\"col-1 text-center\"><i class=\"bi bi-telephone text-secondary fs-5\"></i></div>
            {% else %}
                <div class=\"col-1 text-center\"><i class=\"bi bi-credit-card text-secondary fs-5\"></i></div>
            {% endif %}
            <div class=\"col ms-2 text-muted\">{{ contact.identifier }}</div>
        </div>

        {% if contact.email %}
        <div class=\"row info-row align-items-center mb-3\">
            <div class=\"col-1 text-center\"><i class=\"bi bi-envelope text-secondary fs-5\"></i></div>
            <div class=\"col ms-2 text-muted\">{{ contact.email }}</div>
        </div>
        {% endif %}

        {% if contact.bankName %}
        <div class=\"row info-row align-items-center mb-3\">
            <div class=\"col-1 text-center\"><i class=\"bi bi-bank text-secondary fs-5\"></i></div>
            <div class=\"col ms-2 text-muted\">{{ contact.bankName }}</div>
        </div>
        {% endif %}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // URL de base pour la suppression
            const baseDeleteUrl = \"{{ path('delete_recipient', {id: '0'}) }}\";

            // Copier le numéro
            const copyBtn = document.getElementById(\"copyBtn\");
            if (copyBtn) {
                copyBtn.addEventListener(\"click\", () => {
                    const accountNumber = document.getElementById(\"accountNumber\").innerText;
                    navigator.clipboard.writeText(accountNumber).then(() => {
                        // Petit changement d'icône pour confirmer la copie
                        const originalClass = copyBtn.className;
                        copyBtn.className = 'bi bi-check-circle-fill text-success copy-icon';
                        setTimeout(() => {
                            copyBtn.className = originalClass;
                        }, 2000);
                    });
                });
            }

            // Supprimer le contact
            const deleteBtn = document.getElementById('deleteContactBtn');
            if(deleteBtn) {
                deleteBtn.addEventListener('click', async (e) => {
                    e.preventDefault();
                    if(!confirm('Êtes-vous sûr de vouloir supprimer ce contact ?')) return;

                    const contactId = deleteBtn.dataset.id;
                    // Construction de l'URL pour l'API delete
                    const url = baseDeleteUrl.replace('/0', '/' + contactId);

                    try {
                        const response = await fetch(url, {
                            method: 'DELETE',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'Content-Type': 'application/json'
                            }
                        });

                        const result = await response.json();

                        if(response.ok && result.success) {
                            alert('Contact supprimé avec succès');
                            window.location.href = \"{{ path('app_contact') }}\";
                        } else {
                            alert('Erreur lors de la suppression: ' + (result.message || 'Erreur inconnue'));
                        }
                    } catch (error) {
                        console.error('Erreur:', error);
                        alert('Erreur réseau lors de la suppression');
                    }
                });
            }
        });
    </script>
{% endblock %}
", "contact/detail.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/contact/detail.html.twig");
    }
}
