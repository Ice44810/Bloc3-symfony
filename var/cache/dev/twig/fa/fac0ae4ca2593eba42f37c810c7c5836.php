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

/* settings/notifications.html.twig */
class __TwigTemplate_59001f066ba707715cb2d4db5dfc6fb2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings/notifications.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings/notifications.html.twig"));

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

        yield "Paramètres de Notification - Budget App";
        
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
                        <span class=\"bi bi-gear-fill text-black\" style=\"font-size: 15px;\"></span>
                        Paramètres de notification
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"list-group mb-4\">
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-arrow-left-right me-3 text-primary\"></i> Notifications Générales</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"generalsnotification\" checked>
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-music-note-beamed me-3 text-primary\"></i> Son</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"song\" checked>
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-phone-vibrate me-3 text-primary\"></i> Vibreur</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"vibrate\">
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-phone me-3 text-primary\"></i> Mise à jour Appli</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"update\" checked>
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-envelope me-3 text-primary\"></i> Rappel facture</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"billreminder\" checked>
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-tag me-3 text-primary\"></i> Promotion</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"voucher\">
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-cash-coin me-3 text-primary\"></i> Soldes Disponibles</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"balance\">
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-credit-card me-3 text-primary\"></i> Paiement Requis</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"paymentrequire\">
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-stars me-3 text-primary\"></i> Nouveau service disponible</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"newservice\">
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-lightbulb me-3 text-primary\"></i> Nouveautés astuces</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"newstips\">
                </div>
            </div>
        </div>

        <!-- Toast de sauvegarde -->
        <div class=\"toast-container position-fixed bottom-0 start-50 translate-middle-x p-3\">
            <div id=\"saveToast\" class=\"toast align-items-center text-white bg-success border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                <div class=\"d-flex\">
                    <div class=\"toast-body\">
                        <i class=\"bi bi-check-circle me-2\"></i> Préférences enregistrées
                    </div>
                    <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            // Charger les préférences stockées
            const settings = JSON.parse(localStorage.getItem('notificationSettings') || '{}');

            // Appliquer les préférences stockées aux switchs
            document.querySelectorAll('.notification-switch').forEach(switchEl => {
                const id = switchEl.id;
                if (settings.hasOwnProperty(id)) {
                    switchEl.checked = settings[id];
                }

                // Ajouter un écouteur d'événement pour sauvegarder les changements
                switchEl.addEventListener('change', function() {
                    const id = this.id;
                    const checked = this.checked;

                    // Mise à jour de l'objet settings
                    settings[id] = checked;

                    // Sauvegarde dans localStorage
                    localStorage.setItem('notificationSettings', JSON.stringify(settings));

                    // Afficher le toast de confirmation
                    const toastEl = document.getElementById('saveToast');
                    const toast = new bootstrap.Toast(toastEl);
                    toast.show();

                    // Simulation d'appel API pour sauvegarder côté serveur
                    /*
                    fetch('";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_notification_setting");
        yield "', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: JSON.stringify({ key: id, value: checked })
                    });
                    */
                });
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
        return "settings/notifications.html.twig";
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
        return array (  228 => 126,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paramètres de Notification - Budget App{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_settings') }}\">Paramètres</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-gear-fill text-black\" style=\"font-size: 15px;\"></span>
                        Paramètres de notification
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"list-group mb-4\">
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-arrow-left-right me-3 text-primary\"></i> Notifications Générales</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"generalsnotification\" checked>
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-music-note-beamed me-3 text-primary\"></i> Son</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"song\" checked>
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-phone-vibrate me-3 text-primary\"></i> Vibreur</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"vibrate\">
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-phone me-3 text-primary\"></i> Mise à jour Appli</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"update\" checked>
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-envelope me-3 text-primary\"></i> Rappel facture</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"billreminder\" checked>
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-tag me-3 text-primary\"></i> Promotion</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"voucher\">
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-cash-coin me-3 text-primary\"></i> Soldes Disponibles</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"balance\">
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-credit-card me-3 text-primary\"></i> Paiement Requis</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"paymentrequire\">
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-stars me-3 text-primary\"></i> Nouveau service disponible</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"newservice\">
                </div>
            </div>
            <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                <span><i class=\"bi bi-lightbulb me-3 text-primary\"></i> Nouveautés astuces</span>
                <div class=\"form-check form-switch\">
                    <input class=\"form-check-input fs-4 notification-switch\" type=\"checkbox\" role=\"switch\" id=\"newstips\">
                </div>
            </div>
        </div>

        <!-- Toast de sauvegarde -->
        <div class=\"toast-container position-fixed bottom-0 start-50 translate-middle-x p-3\">
            <div id=\"saveToast\" class=\"toast align-items-center text-white bg-success border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                <div class=\"d-flex\">
                    <div class=\"toast-body\">
                        <i class=\"bi bi-check-circle me-2\"></i> Préférences enregistrées
                    </div>
                    <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            // Charger les préférences stockées
            const settings = JSON.parse(localStorage.getItem('notificationSettings') || '{}');

            // Appliquer les préférences stockées aux switchs
            document.querySelectorAll('.notification-switch').forEach(switchEl => {
                const id = switchEl.id;
                if (settings.hasOwnProperty(id)) {
                    switchEl.checked = settings[id];
                }

                // Ajouter un écouteur d'événement pour sauvegarder les changements
                switchEl.addEventListener('change', function() {
                    const id = this.id;
                    const checked = this.checked;

                    // Mise à jour de l'objet settings
                    settings[id] = checked;

                    // Sauvegarde dans localStorage
                    localStorage.setItem('notificationSettings', JSON.stringify(settings));

                    // Afficher le toast de confirmation
                    const toastEl = document.getElementById('saveToast');
                    const toast = new bootstrap.Toast(toastEl);
                    toast.show();

                    // Simulation d'appel API pour sauvegarder côté serveur
                    /*
                    fetch('{{ path('update_notification_setting') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: JSON.stringify({ key: id, value: checked })
                    });
                    */
                });
            });
        });
    </script>
{% endblock %}
", "settings/notifications.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/settings/notifications.html.twig");
    }
}
