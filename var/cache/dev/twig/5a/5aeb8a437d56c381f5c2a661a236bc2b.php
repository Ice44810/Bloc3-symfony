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

/* contact/new.html.twig */
class __TwigTemplate_a746917972f38e88e8514f2b1cc1e59e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

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

        yield "Ajouter un contact - Budget App";
        
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
        yield "    <div class=\"container py-4 bg-white\" style=\"max-width: 600px;\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"btn btn-link text-dark text-decoration-none fw-medium p-0\">Annuler</a>
            <button id=\"btnSave\" class=\"btn btn-link text-primary text-decoration-none fw-bold p-0\"
                    style=\"color: #6366f1 !important;\">Valider</button>
        </div>

        <div class=\"text-center mb-5\">
            <div class=\"position-relative d-inline-block\">
                <div class=\"rounded-circle bg-light d-flex align-items-center justify-content-center\"
                    style=\"width: 120px; height: 120px;\">
                    <i class=\"bi bi-person-fill text-secondary\" style=\"font-size: 80px;\"></i>
                </div>
                <div class=\"position-absolute bottom-0 end-0 bg-dark rounded-circle d-flex align-items-center justify-content-center border border-white border-2\"
                    style=\"width: 32px; height: 32px; cursor: pointer;\">
                    <i class=\"bi bi-camera-fill text-white small\"></i>
                </div>
            </div>
        </div>

        <ul class=\"nav nav-pills nav-fill mb-4 p-1 bg-light rounded-pill\">
            <li class=\"nav-item\">
                <button class=\"nav-link active rounded-pill\" id=\"phone-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#phone-form\" type=\"button\" role=\"tab\">Téléphone</button>
            </li>
            <li class=\"nav-item\">
                <button class=\"nav-link rounded-pill\" id=\"bank-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#bank-form\" type=\"button\" role=\"tab\">Bancaire</button>
            </li>
        </ul>

        <div class=\"tab-content\">
            <!-- Formulaire Contact Téléphonique -->
            <div class=\"tab-pane fade show active\" id=\"phone-form\" role=\"tabpanel\">
                <form id=\"phoneContactForm\">
                    <div class=\"form-floating mb-3\">
                        <input type=\"text\" class=\"form-control shadow-none border\" id=\"phoneName\" placeholder=\"Nom du contact\">
                        <label for=\"phoneName\" class=\"text-muted\">Nom du contact</label>
                    </div>

                    <div class=\"form-floating mb-3 position-relative\">
                        <input type=\"tel\" class=\"form-control shadow-none border\" id=\"phoneNumber\" placeholder=\"Numéro de téléphone\">
                        <label for=\"phoneNumber\" class=\"text-muted\">Numéro de téléphone</label>
                    </div>

                    <div class=\"form-floating mb-3\">
                        <input type=\"email\" class=\"form-control shadow-none border\" id=\"phoneEmail\" placeholder=\"Email (optionnel)\">
                        <label for=\"phoneEmail\" class=\"text-muted\">Email (optionnel)</label>
                    </div>
                </form>
            </div>

            <!-- Formulaire Contact Bancaire -->
            <div class=\"tab-pane fade\" id=\"bank-form\" role=\"tabpanel\">
                <form id=\"bankContactForm\">
                    <div class=\"form-floating mb-3\">
                        <input type=\"text\" class=\"form-control shadow-none border\" id=\"bankContactName\" placeholder=\"Nom du titulaire\">
                        <label for=\"bankContactName\" class=\"text-muted\">Nom du titulaire</label>
                    </div>

                    <div class=\"form-floating mb-3\">
                        <input type=\"text\" class=\"form-control shadow-none border\" id=\"bankName\" placeholder=\"Nom de la banque\">
                        <label for=\"bankName\" class=\"text-muted\">Nom de la banque</label>
                    </div>

                    <div class=\"form-floating mb-3 position-relative\">
                        <input type=\"text\" class=\"form-control shadow-none border\" id=\"ibanNumber\" placeholder=\"IBAN / Numéro de compte\">
                        <label for=\"ibanNumber\" class=\"text-muted\">IBAN / Numéro de compte</label>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btnSave = document.getElementById('btnSave');

            btnSave.addEventListener('click', async () => {
                const phoneTab = document.getElementById('phone-tab');
                const isPhoneActive = phoneTab.classList.contains('active');

                let data = {};

                if (isPhoneActive) {
                    const name = document.getElementById('phoneName').value.trim();
                    const phone = document.getElementById('phoneNumber').value.trim();
                    const email = document.getElementById('phoneEmail').value.trim();

                    if (!name || !phone) {
                        alert('Veuillez remplir le nom et le numéro de téléphone');
                        return;
                    }

                    data = {
                        name: name,
                        identifier: phone,
                        email: email,
                        type: 'phone'
                    };
                } else {
                    const name = document.getElementById('bankContactName').value.trim();
                    const bankName = document.getElementById('bankName').value.trim();
                    const iban = document.getElementById('ibanNumber').value.trim();

                    if (!name || !iban) {
                        alert('Veuillez remplir le nom du titulaire et le numéro de compte');
                        return;
                    }

                    data = {
                        name: name,
                        identifier: iban,
                        bank_name: bankName,
                        type: 'bank'
                    };
                }

                try {
                    const response = await fetch('";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_recipient");
        yield "', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: JSON.stringify(data)
                    });

                    const result = await response.json();

                    if (response.ok && result.success) {
                        window.location.href = '";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "';
                    } else {
                        alert(result.message || 'Une erreur est survenue lors de l\\'enregistrement');
                    }
                } catch (error) {
                    console.error('Erreur:', error);
                    alert('Erreur de connexion au serveur');
                }
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
        return "contact/new.html.twig";
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
        return array (  237 => 135,  222 => 123,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un contact - Budget App{% endblock %}

{% block body %}
    <div class=\"container py-4 bg-white\" style=\"max-width: 600px;\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <a href=\"{{ path('app_contact') }}\" class=\"btn btn-link text-dark text-decoration-none fw-medium p-0\">Annuler</a>
            <button id=\"btnSave\" class=\"btn btn-link text-primary text-decoration-none fw-bold p-0\"
                    style=\"color: #6366f1 !important;\">Valider</button>
        </div>

        <div class=\"text-center mb-5\">
            <div class=\"position-relative d-inline-block\">
                <div class=\"rounded-circle bg-light d-flex align-items-center justify-content-center\"
                    style=\"width: 120px; height: 120px;\">
                    <i class=\"bi bi-person-fill text-secondary\" style=\"font-size: 80px;\"></i>
                </div>
                <div class=\"position-absolute bottom-0 end-0 bg-dark rounded-circle d-flex align-items-center justify-content-center border border-white border-2\"
                    style=\"width: 32px; height: 32px; cursor: pointer;\">
                    <i class=\"bi bi-camera-fill text-white small\"></i>
                </div>
            </div>
        </div>

        <ul class=\"nav nav-pills nav-fill mb-4 p-1 bg-light rounded-pill\">
            <li class=\"nav-item\">
                <button class=\"nav-link active rounded-pill\" id=\"phone-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#phone-form\" type=\"button\" role=\"tab\">Téléphone</button>
            </li>
            <li class=\"nav-item\">
                <button class=\"nav-link rounded-pill\" id=\"bank-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#bank-form\" type=\"button\" role=\"tab\">Bancaire</button>
            </li>
        </ul>

        <div class=\"tab-content\">
            <!-- Formulaire Contact Téléphonique -->
            <div class=\"tab-pane fade show active\" id=\"phone-form\" role=\"tabpanel\">
                <form id=\"phoneContactForm\">
                    <div class=\"form-floating mb-3\">
                        <input type=\"text\" class=\"form-control shadow-none border\" id=\"phoneName\" placeholder=\"Nom du contact\">
                        <label for=\"phoneName\" class=\"text-muted\">Nom du contact</label>
                    </div>

                    <div class=\"form-floating mb-3 position-relative\">
                        <input type=\"tel\" class=\"form-control shadow-none border\" id=\"phoneNumber\" placeholder=\"Numéro de téléphone\">
                        <label for=\"phoneNumber\" class=\"text-muted\">Numéro de téléphone</label>
                    </div>

                    <div class=\"form-floating mb-3\">
                        <input type=\"email\" class=\"form-control shadow-none border\" id=\"phoneEmail\" placeholder=\"Email (optionnel)\">
                        <label for=\"phoneEmail\" class=\"text-muted\">Email (optionnel)</label>
                    </div>
                </form>
            </div>

            <!-- Formulaire Contact Bancaire -->
            <div class=\"tab-pane fade\" id=\"bank-form\" role=\"tabpanel\">
                <form id=\"bankContactForm\">
                    <div class=\"form-floating mb-3\">
                        <input type=\"text\" class=\"form-control shadow-none border\" id=\"bankContactName\" placeholder=\"Nom du titulaire\">
                        <label for=\"bankContactName\" class=\"text-muted\">Nom du titulaire</label>
                    </div>

                    <div class=\"form-floating mb-3\">
                        <input type=\"text\" class=\"form-control shadow-none border\" id=\"bankName\" placeholder=\"Nom de la banque\">
                        <label for=\"bankName\" class=\"text-muted\">Nom de la banque</label>
                    </div>

                    <div class=\"form-floating mb-3 position-relative\">
                        <input type=\"text\" class=\"form-control shadow-none border\" id=\"ibanNumber\" placeholder=\"IBAN / Numéro de compte\">
                        <label for=\"ibanNumber\" class=\"text-muted\">IBAN / Numéro de compte</label>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btnSave = document.getElementById('btnSave');

            btnSave.addEventListener('click', async () => {
                const phoneTab = document.getElementById('phone-tab');
                const isPhoneActive = phoneTab.classList.contains('active');

                let data = {};

                if (isPhoneActive) {
                    const name = document.getElementById('phoneName').value.trim();
                    const phone = document.getElementById('phoneNumber').value.trim();
                    const email = document.getElementById('phoneEmail').value.trim();

                    if (!name || !phone) {
                        alert('Veuillez remplir le nom et le numéro de téléphone');
                        return;
                    }

                    data = {
                        name: name,
                        identifier: phone,
                        email: email,
                        type: 'phone'
                    };
                } else {
                    const name = document.getElementById('bankContactName').value.trim();
                    const bankName = document.getElementById('bankName').value.trim();
                    const iban = document.getElementById('ibanNumber').value.trim();

                    if (!name || !iban) {
                        alert('Veuillez remplir le nom du titulaire et le numéro de compte');
                        return;
                    }

                    data = {
                        name: name,
                        identifier: iban,
                        bank_name: bankName,
                        type: 'bank'
                    };
                }

                try {
                    const response = await fetch('{{ path('create_recipient') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: JSON.stringify(data)
                    });

                    const result = await response.json();

                    if (response.ok && result.success) {
                        window.location.href = '{{ path('app_contact') }}';
                    } else {
                        alert(result.message || 'Une erreur est survenue lors de l\\'enregistrement');
                    }
                } catch (error) {
                    console.error('Erreur:', error);
                    alert('Erreur de connexion au serveur');
                }
            });
        });
    </script>
{% endblock %}
", "contact/new.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/contact/new.html.twig");
    }
}
