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

/* transfert/index.html.twig */
class __TwigTemplate_5651fc6129dbd6c9e9e76953ca963882 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transfert/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transfert/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Transfert - Budget App";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <div class=\"container pb-5\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-decoration-none\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"text-decoration-none\">Mes Contacts</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <i class=\"bi bi-send text-primary me-1\"></i> Transfert
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container py-3\">
            <!-- BALANCE CARD -->
            <div class=\"balance-card bg-light-subtle mb-4 p-3 rounded-3 shadow-sm d-flex justify-content-between align-items-center\">
                <div class=\"d-flex flex-column\">
                    <span class=\"text-muted small\">Solde disponible:</span>
                    <span class=\"fw-bold fs-5 text-primary\" id=\"availableBalance\">Chargement...</span>
                </div>
                <div class=\"d-flex align-items-center gap-2\">
                    <img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 28), "avatar", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "avatar", [], "any", false, false, false, 28), $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profil.jpg"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profil.jpg"))), "html", null, true);
        yield "\" class=\"rounded-circle border\" width=\"40\" height=\"40\" alt=\"Profil\">
                    <strong class=\"small\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 29), "fullName", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "fullName", [], "any", false, false, false, 29), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "email", [], "any", false, false, false, 29))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "email", [], "any", false, false, false, 29))), "html", null, true);
        yield "</strong>
                    <i class=\"bi bi-chevron-down text-muted small\"></i>
                </div>
            </div>

            <div class=\"form-box mt-3\">
                <label for=\"recipientSelect\" class=\"form-label small fw-bold text-muted\">DESTINATAIRE</label>
                <select id=\"recipientSelect\" class=\"form-select form-select-lg border p-2 mb-3\">
                    <option value=\"\">Sélectionner un destinataire</option>
                    ";
        // line 38
        if ((array_key_exists("recipients", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["recipients"]) || array_key_exists("recipients", $context) ? $context["recipients"] : (function () { throw new RuntimeError('Variable "recipients" does not exist.', 38, $this->source); })())) > 0))) {
            // line 39
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recipients"]) || array_key_exists("recipients", $context) ? $context["recipients"] : (function () { throw new RuntimeError('Variable "recipients" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                // line 40
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipient"], "identifier", [], "any", false, false, false, 40), "html", null, true);
                yield "\"
                                    data-name=\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipient"], "name", [], "any", false, false, false, 41), "html", null, true);
                yield "\"
                                    data-avatar=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["recipient"], "avatar", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["recipient"], "avatar", [], "any", false, false, false, 42), $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profil.jpg"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profil.jpg"))), "html", null, true);
                yield "\">
                                ";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipient"], "name", [], "any", false, false, false, 43), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recipient"], "identifier", [], "any", false, false, false, 43), 0, 4), "html", null, true);
                yield "****";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recipient"], "identifier", [], "any", false, false, false, 43),  -4), "html", null, true);
                yield "
                            </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['recipient'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "                    ";
        } else {
            // line 47
            yield "                        <option disabled>Aucun contact enregistré</option>
                    ";
        }
        // line 49
        yield "                </select>

                <label for=\"amountInput\" class=\"form-label small fw-bold text-muted\">MONTANT</label>
                <div class=\"position-relative\">
                    <input type=\"text\" id=\"amountInput\" class=\"form-control border p-2 ps-3 py-3\"
                           placeholder=\"€0\" inputmode=\"decimal\">
                    <i class=\"bi bi-x-circle-fill position-absolute top-50 end-0 translate-middle-y me-3 text-muted\"
                        id=\"clearAmount\" role=\"button\" style=\"cursor: pointer;\"></i>
                </div>

                <div class=\"d-flex justify-content-between mt-3 gap-2\">
                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([50, 75, 150]);
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 61
            yield "                        <button class=\"btn btn-primary w-100 amount-btn\" type=\"button\" data-amount=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["m"], "html", null, true);
            yield "\">€";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["m"], "html", null, true);
            yield "</button>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "                </div>
            </div>

            <div class=\"mt-4\">
                <label class=\"form-label text-muted\">Message</label>
                <input type=\"text\" id=\"message\" class=\"form-control border p-2 text-muted\"
                    placeholder=\"votre message...\">
            </div>
        </div>

        <div class=\"d-grid mt-4 px-3 mb-5\">
            <button id=\"btnContinue\" class=\"btn btn-primary w-25\">Continuer</button>
        </div>
    </div>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            // Chargement du solde depuis l'API
            fetch('";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_balance");
        yield "')
                .then(response => response.json())
                .then(data => {
                    const balance = parseFloat(data.balance || 0);
                    document.getElementById('availableBalance').textContent = '€' + balance.toLocaleString('fr-FR', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                })
                .catch(error => {
                    console.error('Erreur chargement solde:', error);
                    document.getElementById('availableBalance').textContent = '€0,00';
                });

            const amountInput = document.getElementById('amountInput');
            const amountButtons = document.querySelectorAll('.amount-btn');
            const clearBtn = document.getElementById('clearAmount');

            // Gestion des boutons de montant
            amountButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const amount = this.dataset.amount;
                    amountInput.value = '€' + amount;

                    // Mise à jour visuelle des boutons
                    amountButtons.forEach(btn => {
                        btn.classList.remove('active');
                    });
                    this.classList.add('active');
                });
            });

            // Bouton effacer
            if (clearBtn) {
                clearBtn.addEventListener('click', () => {
                    amountInput.value = '';
                    amountButtons.forEach(btn => btn.classList.remove('active'));
                    amountInput.focus();
                });
            }

            // Gestion du focus message
            const messageInput = document.getElementById(\"message\");
            if (messageInput) {
                messageInput.addEventListener(\"focus\", function () {
                    if (this.value === \"votre message...\") {
                        this.value = \"\";
                    }
                });
            }

            // Bouton Continuer
            const btnContinue = document.getElementById('btnContinue');
            if (btnContinue) {
                btnContinue.addEventListener(\"click\", function () {
                    const recipientSelect = document.getElementById('recipientSelect');
                    const selectedOption = recipientSelect.options[recipientSelect.selectedIndex];

                    // Nettoyage du montant (enlève le symbole € et les espaces)
                    let amountStr = document.getElementById('amountInput').value.replace('€', '').trim();
                    // Remplace la virgule par un point pour le parsing
                    amountStr = amountStr.replace(',', '.');
                    const amountValue = parseFloat(amountStr);

                    const messageValue = document.getElementById('message').value;

                    if (!recipientSelect.value) {
                        alert('Veuillez sélectionner un destinataire');
                        return;
                    }

                    if (isNaN(amountValue) || amountValue <= 0) {
                        alert('Veuillez entrer un montant valide');
                        return;
                    }

                    const recipientIdentifier = recipientSelect.value;
                    const recipientName = selectedOption.getAttribute('data-name') || 'Inconnu';
                    const recipientAvatar = selectedOption.getAttribute('data-avatar') || '';

                    // Redirection vers la confirmation avec les paramètres
                    const url = new URL(\"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfert_confirm");
        yield "\", window.location.origin);
                    url.searchParams.append('recipientIdentifier', recipientIdentifier);
                    url.searchParams.append('recipientName', recipientName);
                    url.searchParams.append('amount', amountValue);
                    url.searchParams.append('description', messageValue);
                    url.searchParams.append('type', 'contact_transfer');
                    if (recipientAvatar) {
                        url.searchParams.append('recipientAvatar', recipientAvatar);
                    }

                    window.location.href = url.toString();
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
        return "transfert/index.html.twig";
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
        return array (  314 => 159,  233 => 81,  213 => 63,  202 => 61,  198 => 60,  185 => 49,  181 => 47,  178 => 46,  165 => 43,  161 => 42,  157 => 41,  152 => 40,  147 => 39,  145 => 38,  133 => 29,  129 => 28,  110 => 12,  106 => 11,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Transfert - Budget App{% endblock %}

{% block body %}
    <div class=\"container pb-5\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\" class=\"text-decoration-none\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_contact') }}\" class=\"text-decoration-none\">Mes Contacts</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <i class=\"bi bi-send text-primary me-1\"></i> Transfert
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container py-3\">
            <!-- BALANCE CARD -->
            <div class=\"balance-card bg-light-subtle mb-4 p-3 rounded-3 shadow-sm d-flex justify-content-between align-items-center\">
                <div class=\"d-flex flex-column\">
                    <span class=\"text-muted small\">Solde disponible:</span>
                    <span class=\"fw-bold fs-5 text-primary\" id=\"availableBalance\">Chargement...</span>
                </div>
                <div class=\"d-flex align-items-center gap-2\">
                    <img src=\"{{ app.user.avatar|default(asset('assets/images/profil.jpg')) }}\" class=\"rounded-circle border\" width=\"40\" height=\"40\" alt=\"Profil\">
                    <strong class=\"small\">{{ app.user.fullName|default(app.user.email) }}</strong>
                    <i class=\"bi bi-chevron-down text-muted small\"></i>
                </div>
            </div>

            <div class=\"form-box mt-3\">
                <label for=\"recipientSelect\" class=\"form-label small fw-bold text-muted\">DESTINATAIRE</label>
                <select id=\"recipientSelect\" class=\"form-select form-select-lg border p-2 mb-3\">
                    <option value=\"\">Sélectionner un destinataire</option>
                    {% if recipients is defined and recipients|length > 0 %}
                        {% for recipient in recipients %}
                            <option value=\"{{ recipient.identifier }}\"
                                    data-name=\"{{ recipient.name }}\"
                                    data-avatar=\"{{ recipient.avatar|default(asset('assets/images/profil.jpg')) }}\">
                                {{ recipient.name }} - {{ recipient.identifier|slice(0, 4) }}****{{ recipient.identifier|slice(-4) }}
                            </option>
                        {% endfor %}
                    {% else %}
                        <option disabled>Aucun contact enregistré</option>
                    {% endif %}
                </select>

                <label for=\"amountInput\" class=\"form-label small fw-bold text-muted\">MONTANT</label>
                <div class=\"position-relative\">
                    <input type=\"text\" id=\"amountInput\" class=\"form-control border p-2 ps-3 py-3\"
                           placeholder=\"€0\" inputmode=\"decimal\">
                    <i class=\"bi bi-x-circle-fill position-absolute top-50 end-0 translate-middle-y me-3 text-muted\"
                        id=\"clearAmount\" role=\"button\" style=\"cursor: pointer;\"></i>
                </div>

                <div class=\"d-flex justify-content-between mt-3 gap-2\">
                    {% for m in [50, 75, 150] %}
                        <button class=\"btn btn-primary w-100 amount-btn\" type=\"button\" data-amount=\"{{ m }}\">€{{ m }}</button>
                    {% endfor %}
                </div>
            </div>

            <div class=\"mt-4\">
                <label class=\"form-label text-muted\">Message</label>
                <input type=\"text\" id=\"message\" class=\"form-control border p-2 text-muted\"
                    placeholder=\"votre message...\">
            </div>
        </div>

        <div class=\"d-grid mt-4 px-3 mb-5\">
            <button id=\"btnContinue\" class=\"btn btn-primary w-25\">Continuer</button>
        </div>
    </div>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            // Chargement du solde depuis l'API
            fetch('{{ path('api_balance') }}')
                .then(response => response.json())
                .then(data => {
                    const balance = parseFloat(data.balance || 0);
                    document.getElementById('availableBalance').textContent = '€' + balance.toLocaleString('fr-FR', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                })
                .catch(error => {
                    console.error('Erreur chargement solde:', error);
                    document.getElementById('availableBalance').textContent = '€0,00';
                });

            const amountInput = document.getElementById('amountInput');
            const amountButtons = document.querySelectorAll('.amount-btn');
            const clearBtn = document.getElementById('clearAmount');

            // Gestion des boutons de montant
            amountButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const amount = this.dataset.amount;
                    amountInput.value = '€' + amount;

                    // Mise à jour visuelle des boutons
                    amountButtons.forEach(btn => {
                        btn.classList.remove('active');
                    });
                    this.classList.add('active');
                });
            });

            // Bouton effacer
            if (clearBtn) {
                clearBtn.addEventListener('click', () => {
                    amountInput.value = '';
                    amountButtons.forEach(btn => btn.classList.remove('active'));
                    amountInput.focus();
                });
            }

            // Gestion du focus message
            const messageInput = document.getElementById(\"message\");
            if (messageInput) {
                messageInput.addEventListener(\"focus\", function () {
                    if (this.value === \"votre message...\") {
                        this.value = \"\";
                    }
                });
            }

            // Bouton Continuer
            const btnContinue = document.getElementById('btnContinue');
            if (btnContinue) {
                btnContinue.addEventListener(\"click\", function () {
                    const recipientSelect = document.getElementById('recipientSelect');
                    const selectedOption = recipientSelect.options[recipientSelect.selectedIndex];

                    // Nettoyage du montant (enlève le symbole € et les espaces)
                    let amountStr = document.getElementById('amountInput').value.replace('€', '').trim();
                    // Remplace la virgule par un point pour le parsing
                    amountStr = amountStr.replace(',', '.');
                    const amountValue = parseFloat(amountStr);

                    const messageValue = document.getElementById('message').value;

                    if (!recipientSelect.value) {
                        alert('Veuillez sélectionner un destinataire');
                        return;
                    }

                    if (isNaN(amountValue) || amountValue <= 0) {
                        alert('Veuillez entrer un montant valide');
                        return;
                    }

                    const recipientIdentifier = recipientSelect.value;
                    const recipientName = selectedOption.getAttribute('data-name') || 'Inconnu';
                    const recipientAvatar = selectedOption.getAttribute('data-avatar') || '';

                    // Redirection vers la confirmation avec les paramètres
                    const url = new URL(\"{{ path('app_transfert_confirm') }}\", window.location.origin);
                    url.searchParams.append('recipientIdentifier', recipientIdentifier);
                    url.searchParams.append('recipientName', recipientName);
                    url.searchParams.append('amount', amountValue);
                    url.searchParams.append('description', messageValue);
                    url.searchParams.append('type', 'contact_transfer');
                    if (recipientAvatar) {
                        url.searchParams.append('recipientAvatar', recipientAvatar);
                    }

                    window.location.href = url.toString();
                });
            }
        });
    </script>
{% endblock %}
", "transfert/index.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/transfert/index.html.twig");
    }
}
