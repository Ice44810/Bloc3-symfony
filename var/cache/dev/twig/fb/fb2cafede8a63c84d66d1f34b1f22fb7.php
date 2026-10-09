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

/* topup/index.html.twig */
class __TwigTemplate_7b062197700e922d93a0aa66aa545f8d extends Template
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
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "topup/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "topup/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        yield "    <style>
        .pin-input {
            width: 50px;
            height: 60px;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            border: 2px solid #dee2e6;
            border-radius: 10px;
        }
        .pin-input:focus { border-color: #5d3df3; box-shadow: none; }
    </style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
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

        yield "Recharger - Budget App";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 20
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

        // line 21
        yield "    <div class=\"container pb-5\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-decoration-none\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <i class=\"bi bi-wallet2 text-primary me-1\"></i> Recharger
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container py-3\">
            <div class=\"balance-card p-4 border-0 shadow-sm rounded-4 bg-white mb-4\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <span class=\"text-muted small\">Solde actuel:</span>
                    <span class=\"fw-bold fs-5 text-dark\" id=\"currentBalance\">Chargement...</span>
                </div>

                <label class=\"form-label text-muted small fw-bold\">Montant à recharger</label>
                <div class=\"position-relative mb-4\">
                    <input type=\"number\" class=\"form-control form-control-sm ps-3 py-2 rounded-3 border-2\"
                           placeholder=\"0.00\" id=\"amountInput\" step=\"0.01\">
                    <i class=\"bi bi-x-circle-fill position-absolute top-50 end-0 translate-middle-y me-3 text-muted\"
                       id=\"clearAmount\" style=\"cursor: pointer;\"></i>
                </div>

                <!-- Boutons de sélection rapide des montants prédéfinis -->
                <div class=\"row g-2 mb-4\">
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([50, 100, 200, 500, 1000, 2000]);
        foreach ($context['_seq'] as $context["_key"] => $context["montant"]) {
            // line 51
            yield "                        <div class=\"col-4\">
                            <button type=\"button\" class=\"btn btn-primary w-100 amount-btn\" data-value=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["montant"], "html", null, true);
            yield "\">
                                ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["montant"], "html", null, true);
            yield "€
                            </button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['montant'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "                </div>
            </div>

            <div class=\"d-grid\" id=\"btnOpenConfirm\">
                <button class=\"btn btn-primary w-25 rounded-pill fw-bold\" type=\"button\">Continuer</button>
            </div>
        </div>
    </div>

    <!-- Les modals sont gérées par la page de confirmation globale -->

    <script>
        // Fonction pour charger le solde actuel via AJAX
        document.addEventListener('DOMContentLoaded', function () {
            loadCurrentBalance();

            const amountInput = document.getElementById('amountInput');
            let currentAmount = 0;

            // Sélection rapide du montant en cliquant sur les boutons prédéfinis
            document.querySelectorAll('.amount-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    const val = btn.getAttribute('data-value');
                    amountInput.value = val;
                    currentAmount = parseFloat(val);
                });
            });

            // Effacement du montant avec le bouton \"x\"
            document.getElementById('clearAmount').addEventListener('click', () => {
                amountInput.value = '';
                currentAmount = 0;
            });

            // Navigation vers la page de confirmation
            document.getElementById('btnOpenConfirm').addEventListener('click', () => {
                currentAmount = parseFloat(amountInput.value) || 0;
                if (currentAmount <= 0) return alert('Entrez un montant valide');

                // On redirige vers la nouvelle page de confirmation globale
                const url = new URL(\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfert_confirm");
        yield "\", window.location.origin);
                url.searchParams.append('amount', currentAmount);
                url.searchParams.append('type', 'topup');
                url.searchParams.append('description', 'Rechargement de compte');

                window.location.href = url.toString();
            });
        });

        // Fonction pour charger le solde actuel via AJAX
        async function loadCurrentBalance() {
            try {
                const res = await fetch('";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_balance");
        yield "');
                const data = await res.json();
                document.getElementById('currentBalance').textContent = parseFloat(data.balance || 0).toLocaleString('fr-FR', { style: 'currency', currency: 'EUR' });
            } catch (e) {
                console.error(e);
                document.getElementById('currentBalance').textContent = '0,00 €';
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
        return "topup/index.html.twig";
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
        return array (  250 => 109,  235 => 97,  193 => 57,  183 => 53,  179 => 52,  176 => 51,  172 => 50,  144 => 25,  138 => 21,  125 => 20,  102 => 18,  78 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block head %}
    <style>
        .pin-input {
            width: 50px;
            height: 60px;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            border: 2px solid #dee2e6;
            border-radius: 10px;
        }
        .pin-input:focus { border-color: #5d3df3; box-shadow: none; }
    </style>

{% endblock %}

{% block title %}Recharger - Budget App{% endblock %}

{% block body %}
    <div class=\"container pb-5\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\" class=\"text-decoration-none\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <i class=\"bi bi-wallet2 text-primary me-1\"></i> Recharger
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container py-3\">
            <div class=\"balance-card p-4 border-0 shadow-sm rounded-4 bg-white mb-4\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <span class=\"text-muted small\">Solde actuel:</span>
                    <span class=\"fw-bold fs-5 text-dark\" id=\"currentBalance\">Chargement...</span>
                </div>

                <label class=\"form-label text-muted small fw-bold\">Montant à recharger</label>
                <div class=\"position-relative mb-4\">
                    <input type=\"number\" class=\"form-control form-control-sm ps-3 py-2 rounded-3 border-2\"
                           placeholder=\"0.00\" id=\"amountInput\" step=\"0.01\">
                    <i class=\"bi bi-x-circle-fill position-absolute top-50 end-0 translate-middle-y me-3 text-muted\"
                       id=\"clearAmount\" style=\"cursor: pointer;\"></i>
                </div>

                <!-- Boutons de sélection rapide des montants prédéfinis -->
                <div class=\"row g-2 mb-4\">
                    {% for montant in [50, 100, 200, 500, 1000, 2000] %}
                        <div class=\"col-4\">
                            <button type=\"button\" class=\"btn btn-primary w-100 amount-btn\" data-value=\"{{ montant }}\">
                                {{ montant }}€
                            </button>
                        </div>
                    {% endfor %}
                </div>
            </div>

            <div class=\"d-grid\" id=\"btnOpenConfirm\">
                <button class=\"btn btn-primary w-25 rounded-pill fw-bold\" type=\"button\">Continuer</button>
            </div>
        </div>
    </div>

    <!-- Les modals sont gérées par la page de confirmation globale -->

    <script>
        // Fonction pour charger le solde actuel via AJAX
        document.addEventListener('DOMContentLoaded', function () {
            loadCurrentBalance();

            const amountInput = document.getElementById('amountInput');
            let currentAmount = 0;

            // Sélection rapide du montant en cliquant sur les boutons prédéfinis
            document.querySelectorAll('.amount-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    const val = btn.getAttribute('data-value');
                    amountInput.value = val;
                    currentAmount = parseFloat(val);
                });
            });

            // Effacement du montant avec le bouton \"x\"
            document.getElementById('clearAmount').addEventListener('click', () => {
                amountInput.value = '';
                currentAmount = 0;
            });

            // Navigation vers la page de confirmation
            document.getElementById('btnOpenConfirm').addEventListener('click', () => {
                currentAmount = parseFloat(amountInput.value) || 0;
                if (currentAmount <= 0) return alert('Entrez un montant valide');

                // On redirige vers la nouvelle page de confirmation globale
                const url = new URL(\"{{ path('app_transfert_confirm') }}\", window.location.origin);
                url.searchParams.append('amount', currentAmount);
                url.searchParams.append('type', 'topup');
                url.searchParams.append('description', 'Rechargement de compte');

                window.location.href = url.toString();
            });
        });

        // Fonction pour charger le solde actuel via AJAX
        async function loadCurrentBalance() {
            try {
                const res = await fetch('{{ path('api_balance') }}');
                const data = await res.json();
                document.getElementById('currentBalance').textContent = parseFloat(data.balance || 0).toLocaleString('fr-FR', { style: 'currency', currency: 'EUR' });
            } catch (e) {
                console.error(e);
                document.getElementById('currentBalance').textContent = '0,00 €';
            }
        }
    </script>
{% endblock %}
", "topup/index.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/topup/index.html.twig");
    }
}
