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

/* card/new-local.html.twig */
class __TwigTemplate_dd78c400dedda32f53008e378203ff1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/new-local.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/new-local.html.twig"));

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

        yield "Ajouter une carte - Budget App";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_card_index");
        yield "\">Mes Cartes</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <i class=\"bi bi-plus-circle text-primary me-1\"></i>
                        Ajouter une carte
                    </li>
                </ol>
            </nav>
        </div>

        <p class=\"fw-semibold mb-4 ms-3 mt-1\">Ajouter votre carte bancaire (données locales sécurisées)</p>

        <div id=\"payment-form\">
            <div class=\"row g-3\">
                <div class=\"col-12\">
                    <label class=\"form-label\">Nom du titulaire</label>
                    <input type=\"text\" class=\"form-control\" id=\"card-holder-name\" placeholder=\"JEAN DUPONT\">
                </div>
                <div class=\"col-12\">
                    <label class=\"form-label\">Numéro de carte</label>
                    <input type=\"text\" class=\"form-control\" id=\"card-number\" placeholder=\"1234 5678 9012 3456\" maxlength=\"19\">
                    <small class=\"text-muted\">Les 4 derniers chiffres seront sauvegardés pour sécurité</small>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Expiration</label>
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <input type=\"number\" class=\"form-control\" id=\"expiry-month\" placeholder=\"MM\" min=\"1\" max=\"12\" maxlength=\"2\">
                        </div>
                        <div class=\"col-6\">
                            <input type=\"number\" class=\"form-control\" id=\"expiry-year\" placeholder=\"YY\" min=\"25\" max=\"99\" maxlength=\"2\">
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Marque</label>
                    <select class=\"form-select\" id=\"card-brand\">
                        <option value=\"\">Auto-détecter</option>
                        <option value=\"visa\">Visa</option>
                        <option value=\"mastercard\">Mastercard</option>
                        <option value=\"amex\">American Express</option>
                    </select>
                </div>
            </div>
            <div class=\"mt-4 d-flex justify-content-end\">
                <button id=\"card-button\" class=\"btn btn-primary px-4 py-2\">Ajouter la carte</button>
            </div>
            <div id=\"card-errors\" role=\"alert\" class=\"mt-2 text-danger small\"></div>
        </div>

        <!-- Modals unchanged -->
        <div class=\"modal fade\" id=\"loadingModal\" data-bs-backdrop=\"static\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content border-0 bg-transparent text-center\">
                    <div class=\"spinner-border text-white mb-3\" style=\"width: 3rem; height: 3rem;\"></div>
                    <p class=\"text-white fw-bold\">Traitement en cours...</p>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"successModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content border-0 rounded-4 p-5 text-center bg-primary text-white\">
                    <div class=\"bg-white rounded-4 p-4 text-dark shadow\">
                        <div class=\"bg-success rounded-circle d-inline-flex p-3 mb-3 text-white\">
                            <i class=\"bi bi-check-lg fs-1\"></i>
                        </div>
                        <h4 class=\"fw-bold\">Succès!</h4>
                        <p class=\"text-muted small\">Votre carte a été ajoutée avec succès!</p>
                        <button class=\"btn btn-primary w-100 py-3\" id=\"btnDone\">Terminer</button>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"errorModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content border-0 rounded-4 p-4 text-center\">
                    <div class=\"bg-danger rounded-circle d-inline-flex p-3 mb-3 text-white\">
                        <i class=\"bi bi-exclamation-lg fs-1\"></i>
                    </div>
                    <h4 class=\"fw-bold\">Erreur!</h4>
                    <p class=\"text-muted small\" id=\"errorMessage\">Une erreur s'est produite</p>
                    <button class=\"btn btn-primary w-100 py-3\" data-bs-dismiss=\"modal\">Réessayer</button>
                </div>
            </div>
        </div>

        <script>
            // Local card form handling - no Stripe
            document.addEventListener('DOMContentLoaded', function() {
                const cardNumberInput = document.getElementById('card-number');
                const brandSelect = document.getElementById('card-brand');
                const button = document.getElementById('card-button');
                const errorsEl = document.getElementById('card-errors');

                // Format card number
                cardNumberInput.addEventListener('input', function(e) {
                    let value = e.target.value.replace(/\\\\D/g, '').replace(/(.{4})/g, '\$1 ').trim();
                    e.target.value = value;
                    
                    // Detect brand
                    const num = value.replace(/\\\\s/g, '');
                    if (num.startsWith('4')) brandSelect.value = 'visa';
                    else if (num.startsWith('5') || num.startsWith('2')) brandSelect.value = 'mastercard';
                    else if (num.startsWith('34') || num.startsWith('37')) brandSelect.value = 'amex';
                    
                    // Show last4
                    const last4El = document.createElement('small');
                    if (!document.querySelector('.last4-preview')) {
                        last4El.className = 'text-muted last4-preview d-block mt-1';
                        e.target.parentNode.appendChild(last4El);
                    }
                    last4El.textContent = num.length >= 4 ? `**** \${num.slice(-4)}` : '';
                });

                button.addEventListener('click', async function(e) {
                    e.preventDefault();
                    
                    const holderName = document.getElementById('card-holder-name').value.trim();
                    const cardNumber = document.getElementById('card-number').value.replace(/\\\\s/g, '');
                    const month = document.getElementById('expiry-month').value.padStart(2, '0');
                    const year = document.getElementById('expiry-year').value;
                    const brand = document.getElementById('card-brand').value || 'visa';
                    
                    const last4 = cardNumber.slice(-4);
                    const expiry = month + '/' + year;
                    
                    if (!holderName || cardNumber.length < 13 || !month || !year || !brand) {
                        errorsEl.textContent = 'Veuillez remplir tous les champs correctement.';
                        return;
                    }
                    
                    const data = {
                        card_holder_name: holderName,
                        last_4_digits: last4,
                        expiry_date: expiry,
                        card_brand: brand
                    };
                    
                    try {
                        const loadingModal = new bootstrap.Modal(document.getElementById('loadingModal'));
                        loadingModal.show();
                        
                        const response = await fetch('";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_card");
        yield "', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json' },
                            body: JSON.stringify(data)
                        });
                        
                        loadingModal.hide();
                        
                        if (!response.ok) {
                            const errorData = await response.json();
                            throw new Error(errorData.error || 'Erreur serveur');
                        }
                        
                        const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                        successModal.show();
                        document.getElementById('btnDone').onclick = () => {
                            successModal.hide();
                            window.location.href = '";
        // line 171
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_card_index");
        yield "';
                        };
                        
                    } catch (error) {
                        loadingModal.hide();
                        errorsEl.textContent = error.message;
                        const errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
                        document.getElementById('errorMessage').textContent = error.message;
                        errorModal.show();
                    }
                });
            });
        </script>
    </div>
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
        return "card/new-local.html.twig";
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
        return array (  276 => 171,  256 => 154,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter une carte - Budget App{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_card_index') }}\">Mes Cartes</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <i class=\"bi bi-plus-circle text-primary me-1\"></i>
                        Ajouter une carte
                    </li>
                </ol>
            </nav>
        </div>

        <p class=\"fw-semibold mb-4 ms-3 mt-1\">Ajouter votre carte bancaire (données locales sécurisées)</p>

        <div id=\"payment-form\">
            <div class=\"row g-3\">
                <div class=\"col-12\">
                    <label class=\"form-label\">Nom du titulaire</label>
                    <input type=\"text\" class=\"form-control\" id=\"card-holder-name\" placeholder=\"JEAN DUPONT\">
                </div>
                <div class=\"col-12\">
                    <label class=\"form-label\">Numéro de carte</label>
                    <input type=\"text\" class=\"form-control\" id=\"card-number\" placeholder=\"1234 5678 9012 3456\" maxlength=\"19\">
                    <small class=\"text-muted\">Les 4 derniers chiffres seront sauvegardés pour sécurité</small>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Expiration</label>
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <input type=\"number\" class=\"form-control\" id=\"expiry-month\" placeholder=\"MM\" min=\"1\" max=\"12\" maxlength=\"2\">
                        </div>
                        <div class=\"col-6\">
                            <input type=\"number\" class=\"form-control\" id=\"expiry-year\" placeholder=\"YY\" min=\"25\" max=\"99\" maxlength=\"2\">
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Marque</label>
                    <select class=\"form-select\" id=\"card-brand\">
                        <option value=\"\">Auto-détecter</option>
                        <option value=\"visa\">Visa</option>
                        <option value=\"mastercard\">Mastercard</option>
                        <option value=\"amex\">American Express</option>
                    </select>
                </div>
            </div>
            <div class=\"mt-4 d-flex justify-content-end\">
                <button id=\"card-button\" class=\"btn btn-primary px-4 py-2\">Ajouter la carte</button>
            </div>
            <div id=\"card-errors\" role=\"alert\" class=\"mt-2 text-danger small\"></div>
        </div>

        <!-- Modals unchanged -->
        <div class=\"modal fade\" id=\"loadingModal\" data-bs-backdrop=\"static\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content border-0 bg-transparent text-center\">
                    <div class=\"spinner-border text-white mb-3\" style=\"width: 3rem; height: 3rem;\"></div>
                    <p class=\"text-white fw-bold\">Traitement en cours...</p>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"successModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content border-0 rounded-4 p-5 text-center bg-primary text-white\">
                    <div class=\"bg-white rounded-4 p-4 text-dark shadow\">
                        <div class=\"bg-success rounded-circle d-inline-flex p-3 mb-3 text-white\">
                            <i class=\"bi bi-check-lg fs-1\"></i>
                        </div>
                        <h4 class=\"fw-bold\">Succès!</h4>
                        <p class=\"text-muted small\">Votre carte a été ajoutée avec succès!</p>
                        <button class=\"btn btn-primary w-100 py-3\" id=\"btnDone\">Terminer</button>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"errorModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content border-0 rounded-4 p-4 text-center\">
                    <div class=\"bg-danger rounded-circle d-inline-flex p-3 mb-3 text-white\">
                        <i class=\"bi bi-exclamation-lg fs-1\"></i>
                    </div>
                    <h4 class=\"fw-bold\">Erreur!</h4>
                    <p class=\"text-muted small\" id=\"errorMessage\">Une erreur s'est produite</p>
                    <button class=\"btn btn-primary w-100 py-3\" data-bs-dismiss=\"modal\">Réessayer</button>
                </div>
            </div>
        </div>

        <script>
            // Local card form handling - no Stripe
            document.addEventListener('DOMContentLoaded', function() {
                const cardNumberInput = document.getElementById('card-number');
                const brandSelect = document.getElementById('card-brand');
                const button = document.getElementById('card-button');
                const errorsEl = document.getElementById('card-errors');

                // Format card number
                cardNumberInput.addEventListener('input', function(e) {
                    let value = e.target.value.replace(/\\\\D/g, '').replace(/(.{4})/g, '\$1 ').trim();
                    e.target.value = value;
                    
                    // Detect brand
                    const num = value.replace(/\\\\s/g, '');
                    if (num.startsWith('4')) brandSelect.value = 'visa';
                    else if (num.startsWith('5') || num.startsWith('2')) brandSelect.value = 'mastercard';
                    else if (num.startsWith('34') || num.startsWith('37')) brandSelect.value = 'amex';
                    
                    // Show last4
                    const last4El = document.createElement('small');
                    if (!document.querySelector('.last4-preview')) {
                        last4El.className = 'text-muted last4-preview d-block mt-1';
                        e.target.parentNode.appendChild(last4El);
                    }
                    last4El.textContent = num.length >= 4 ? `**** \${num.slice(-4)}` : '';
                });

                button.addEventListener('click', async function(e) {
                    e.preventDefault();
                    
                    const holderName = document.getElementById('card-holder-name').value.trim();
                    const cardNumber = document.getElementById('card-number').value.replace(/\\\\s/g, '');
                    const month = document.getElementById('expiry-month').value.padStart(2, '0');
                    const year = document.getElementById('expiry-year').value;
                    const brand = document.getElementById('card-brand').value || 'visa';
                    
                    const last4 = cardNumber.slice(-4);
                    const expiry = month + '/' + year;
                    
                    if (!holderName || cardNumber.length < 13 || !month || !year || !brand) {
                        errorsEl.textContent = 'Veuillez remplir tous les champs correctement.';
                        return;
                    }
                    
                    const data = {
                        card_holder_name: holderName,
                        last_4_digits: last4,
                        expiry_date: expiry,
                        card_brand: brand
                    };
                    
                    try {
                        const loadingModal = new bootstrap.Modal(document.getElementById('loadingModal'));
                        loadingModal.show();
                        
                        const response = await fetch('{{ path('create_card') }}', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json' },
                            body: JSON.stringify(data)
                        });
                        
                        loadingModal.hide();
                        
                        if (!response.ok) {
                            const errorData = await response.json();
                            throw new Error(errorData.error || 'Erreur serveur');
                        }
                        
                        const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                        successModal.show();
                        document.getElementById('btnDone').onclick = () => {
                            successModal.hide();
                            window.location.href = '{{ path('app_card_index') }}';
                        };
                        
                    } catch (error) {
                        loadingModal.hide();
                        errorsEl.textContent = error.message;
                        const errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
                        document.getElementById('errorMessage').textContent = error.message;
                        errorModal.show();
                    }
                });
            });
        </script>
    </div>
{% endblock %}
", "card/new-local.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/card/new-local.html.twig");
    }
}
