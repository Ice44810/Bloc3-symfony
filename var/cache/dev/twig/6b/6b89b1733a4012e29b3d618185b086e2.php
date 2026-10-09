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

/* transfert/bybank.html.twig */
class __TwigTemplate_8b11c6d256d857da651964d92e4e3d6d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transfert/bybank.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transfert/bybank.html.twig"));

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

        yield "Transfert - Banque";
        
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
        yield "    <style>
        .dropdown-item img {
            object-fit: contain;
            max-height: 20px;
        }
    </style>

    <!-- HEADER -->
    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings");
        yield "\">Paramètres</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-receipt text-primary\" style=\"font-size: 15px;\"></span>
                        Transfert par banque
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container-fluid\">
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                <h6 class=\"fw-semibold\">Transfert à</h6>
                <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_myqr");
        yield "\" class=\"text-primary small text-decoration-none\">Scan QR</a>
            </div>
            <!-- BANK -->
            <div class=\"form-box\">
                <label class=\"form-label\">Banque</label>
                <div class=\"dropdown\" id=\"bankSelector\">
                    <button class=\"btn btn-white border w-100 d-flex justify-content-between align-items-center\"
                        type=\"button\" id=\"dropdownBankBtn\" data-bs-toggle=\"dropdown\" style=\"height: 50px;\">
                        <div class=\"selected-content d-flex align-items-center gap-2\">
                            <span class=\"text-muted\">Sélectionnez votre banque</span>
                        </div>
                        <i class=\"bi bi-chevron-down text-muted\"></i>
                    </button>

                    <ul class=\"dropdown-menu w-100 shadow-sm\" style=\"max-height: 300px; overflow-y: auto;\">
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center gap-2 py-2\" href=\"#\" data-value=\"Visa\">
                                <img src=\"https://upload.wikimedia.org/wikipedia/commons/9/98/Visa_Inc._logo_%282005%E2%80%932014%29.svg\"
                                    width=\"25\" alt=\"Visa\">
                                <span>Visa</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center gap-2 py-2\" href=\"#\"
                                data-value=\"Techcombank\">
                                <img src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Techcombank.png"), "html", null, true);
        yield "\" width=\"25\" alt=\"Techcombank logo\">
                                <span>Techcombank</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"#\" data-value=\"ACB\">
                                <img src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/acbbank.png"), "html", null, true);
        yield "\" width=\"30\" alt=\"Logo de la banque ACB\">
                                <span>ACB</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"#\" data-value=\"Citibank\">
                                <img src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/citigroup.png"), "html", null, true);
        yield "\" width=\"30\"
                                    alt=\"Logo de la banque Citibank\">
                                <span>Citibank</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"#\" data-value=\"Chase Bank\">
                                <img src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chasebank.jpeg"), "html", null, true);
        yield "\" width=\"30\"
                                    alt=\"Logo de la banque Bank of America\">
                                <span>Chase Bank</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"#\" data-value=\"VietInBank\">
                                <img src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/vietinbank.png"), "html", null, true);
        yield "\" width=\"30\"
                                    alt=\"Logo de la banque Vietinbank\">
                                <span>VietInBank</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"#\" data-value=\"Five Star\">
                                <img src=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fivestarbank.jpeg"), "html", null, true);
        yield "\" width=\"30\"
                                    alt=\"Logo de la banque Five Star\">
                                <span>Five Star</span>
                            </a>
                        </li>
                    </ul>
                    <input type=\"hidden\" name=\"bank_choice\" id=\"selectedBankValue\">
                </div>
            </div>

            <!-- Numéro compte (SELECT) -->
            <div class=\"form-box mt-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <label class=\"form-label mb-0\">Numéro compte</label>
                    <a href=\"#\" class=\"text-primary small d-flex align-items-center gap-1 text-decoration-none\">
                        Enregister Numéro
                        <i class=\"bi bi-credit-card-fill fs-6\"></i>
                    </a>
                </div>
                <input type=\"text\" id=\"accountNumberInput\" class=\"form-control border p-2 text-muted\" value=\"1234 0000 2134 3243\">
                <div class=\"form-box mt-2\">
                    <label class=\"form-label\">Nom du compte</label>
                    <input type=\"text\" id=\"accountNameInput\" class=\"form-control border p-2 text-muted\" value=\"Themesflat\">
                </div>

            </div>
            <!-- Nom du compte -->

            <!-- Montant transfert -->
            <p class=\"fw-bold mb-2 mt-3\">Montant</p>
            <div class=\"position-relative mb-3\">
                <input type=\"text\" id=\"amountInput\" class=\"form-control amount-input ps-3 py-2 text-muted\"
                    placeholder=\"€0\">
                <i class=\"bi bi-x-circle-fill position-absolute top-50 end-0 translate-middle-y me-3 text-muted\"
                    id=\"clearAmount\" style=\"cursor: pointer;\"></i>
            </div>

            <div class=\"d-flex justify-content-between gap-2 mb-2\">
                <button type=\"button\" class=\"btn btn-primary amount-btn w-100\" style=\"max-width: 420px;\">10</button>
                <button type=\"button\" class=\"btn btn-primary amount-btn w-100\" style=\"max-width: 420px;\">20</button>
                <button type=\"button\" class=\"btn btn-primary amount-btn w-100\" style=\"max-width: 420px;\">50</button>
            </div>
            <div class=\"d-flex justify-content-between gap-2 mb-2\">
                <button type=\"button\" class=\"btn btn-primary amount-btn w-100\" style=\"max-width: 420px;\">75</button>
                <button type=\"button\" class=\"btn btn-primary amount-btn w-100\" style=\"max-width: 420px;\">100</button>
                <button type=\"button\" class=\"btn btn-primary amount-btn w-100\" style=\"max-width: 420px;\">150</button>
            </div>

            <div class=\"form-box mt-3\">
                <label class=\"form-label\">Message</label>
                <input type=\"text\" id=\"messageInput\" class=\"form-control border p-2 text-muted\"
                    value=\"Exemple remboursement restaurant\">
            </div>
            <div class=\"form-check mt-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"saveAccountCheck\" checked>
                <label class=\"form-check-label small\" for=\"saveAccountCheck\">
                    Enregistrer ce compte pour les futurs transferts
                </label>
            </div>
        </div>

        <div class=\"d-flex justify-content-end mt-3 mb-5\" id=\"btnOpenContinue\">
        <button class=\"btn btn-primary w-100\" type=\"button\" id=\"btnContinue\" style=\"max-width: 130px;\">Continuer</button>
        </div>
    </div>

    <script>
        //Script pour la selection de la banque avec les logos
        document.addEventListener(\"DOMContentLoaded\", function () {
            const dropdownItems = document.querySelectorAll('#bankSelector .dropdown-item');
            const displayElement = document.querySelector('#dropdownBankBtn .selected-content');
            const hiddenInput = document.getElementById('selectedBankValue');
            dropdownItems.forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault(); // Empêche le lien de recharger la page
                    // Récupérer le contenu de l'item cliqué (image + texte)
                    const content = this.innerHTML;
                    const value = this.getAttribute('data-value');

                    // Mettre à jour l'affichage du bouton
                    displayElement.innerHTML = content;

                    // Mettre à jour l'input caché avec le nom de la banque
                    if (hiddenInput) {
                        hiddenInput.value = value;
                    }

                    console.log(\"Banque sélectionnée :\", value);
                });
            });
        });

        // Script pour la selection du montant
        document.addEventListener(\"DOMContentLoaded\", function () {
            const amountInput = document.getElementById('amountInput');
            const amountButtons = document.querySelectorAll('.amount-btn');
            const clearAmountBtn = document.getElementById('clearAmount');

            amountButtons.forEach(button => {
                button.addEventListener('click', function () {
                    // Récupérer le montant du bouton cliqué
                    const selectedAmount = this.textContent.replace('€', '').trim();

                    // Mettre à jour la valeur de l'input
                    amountInput.value = selectedAmount;

                    //  Gérer l'état visuel \"actif\"
                    // On retire la classe active de tous les boutons
                    amountButtons.forEach(btn => {
                        btn.classList.remove('active', 'btn-primary', 'text-white');
                        btn.classList.add('btn-outline-primary');
                    });
                    // On l'ajoute au bouton cliqué
                    this.classList.remove('btn-outline-primary');
                    this.classList.add('active', 'btn-primary', 'text-white');
                });
            });

            if (clearAmountBtn) {
                clearAmountBtn.addEventListener('click', function() {
                    amountInput.value = '';
                    amountButtons.forEach(btn => {
                        btn.classList.remove('active', 'btn-primary', 'text-white');
                        btn.classList.add('btn-outline-primary');
                    });
                });
            }
        });

        // script la section message et checkbox
        document.addEventListener(\"DOMContentLoaded\", function () {
            // Effacer le message par défaut au premier clic pour aider l'utilisateur
            const messageInput = document.getElementById(\"messageInput\");
            if (messageInput) {
                messageInput.addEventListener(\"focus\", function () {
                    if (this.value === \"Exemple remboursement restaurant\") {
                        this.value = \"\";
                    }
                });
            }

            // Bouton Continuer
            const btnContinue = document.getElementById(\"btnContinue\");
            if (btnContinue) {
                btnContinue.addEventListener(\"click\", function () {
                    const amount = document.getElementById('amountInput').value.replace('€', '').trim();
                    const recipientIdentifier = document.getElementById('accountNumberInput').value;
                    const recipientName = document.getElementById('accountNameInput').value;
                    const message = document.getElementById('messageInput').value;
                    const bankName = document.getElementById('selectedBankValue').value;
                    const isSaved = document.getElementById(\"saveAccountCheck\").checked;

                    if (!amount || parseFloat(amount) <= 0 || !recipientIdentifier) {
                        alert('Veuillez remplir les informations obligatoires (montant et compte)');
                        return;
                    }

                    // Redirection vers la page de confirmation
                    // Note: Nous utilisons l'URL générée par Twig pour être sûr du chemin
                    const url = new URL(\"";
        // line 249
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfert_confirm");
        yield "\", window.location.origin);
                    url.searchParams.append('amount', amount);
                    url.searchParams.append('recipientIdentifier', recipientIdentifier);
                    url.searchParams.append('recipientName', recipientName);
                    url.searchParams.append('message', message);
                    url.searchParams.append('fromCard', bankName); // On utilise le nom de la banque comme source
                    url.searchParams.append('type', 'bank_transfer');

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
        return "transfert/bybank.html.twig";
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
        return array (  371 => 249,  209 => 90,  199 => 83,  189 => 76,  179 => 69,  170 => 63,  161 => 57,  133 => 32,  118 => 20,  114 => 19,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Transfert - Banque{% endblock %}

{% block body %}
    <style>
        .dropdown-item img {
            object-fit: contain;
            max-height: 20px;
        }
    </style>

    <!-- HEADER -->
    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_settings') }}\">Paramètres</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-receipt text-primary\" style=\"font-size: 15px;\"></span>
                        Transfert par banque
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container-fluid\">
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                <h6 class=\"fw-semibold\">Transfert à</h6>
                <a href=\"{{ path('app_myqr') }}\" class=\"text-primary small text-decoration-none\">Scan QR</a>
            </div>
            <!-- BANK -->
            <div class=\"form-box\">
                <label class=\"form-label\">Banque</label>
                <div class=\"dropdown\" id=\"bankSelector\">
                    <button class=\"btn btn-white border w-100 d-flex justify-content-between align-items-center\"
                        type=\"button\" id=\"dropdownBankBtn\" data-bs-toggle=\"dropdown\" style=\"height: 50px;\">
                        <div class=\"selected-content d-flex align-items-center gap-2\">
                            <span class=\"text-muted\">Sélectionnez votre banque</span>
                        </div>
                        <i class=\"bi bi-chevron-down text-muted\"></i>
                    </button>

                    <ul class=\"dropdown-menu w-100 shadow-sm\" style=\"max-height: 300px; overflow-y: auto;\">
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center gap-2 py-2\" href=\"#\" data-value=\"Visa\">
                                <img src=\"https://upload.wikimedia.org/wikipedia/commons/9/98/Visa_Inc._logo_%282005%E2%80%932014%29.svg\"
                                    width=\"25\" alt=\"Visa\">
                                <span>Visa</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center gap-2 py-2\" href=\"#\"
                                data-value=\"Techcombank\">
                                <img src=\"{{ asset('assets/images/Techcombank.png') }}\" width=\"25\" alt=\"Techcombank logo\">
                                <span>Techcombank</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"#\" data-value=\"ACB\">
                                <img src=\"{{ asset('assets/images/acbbank.png') }}\" width=\"30\" alt=\"Logo de la banque ACB\">
                                <span>ACB</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"#\" data-value=\"Citibank\">
                                <img src=\"{{ asset('assets/images/citigroup.png') }}\" width=\"30\"
                                    alt=\"Logo de la banque Citibank\">
                                <span>Citibank</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"#\" data-value=\"Chase Bank\">
                                <img src=\"{{ asset('assets/images/chasebank.jpeg') }}\" width=\"30\"
                                    alt=\"Logo de la banque Bank of America\">
                                <span>Chase Bank</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"#\" data-value=\"VietInBank\">
                                <img src=\"{{ asset('assets/images/vietinbank.png') }}\" width=\"30\"
                                    alt=\"Logo de la banque Vietinbank\">
                                <span>VietInBank</span>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item d-flex align-items-center gap-2\" href=\"#\" data-value=\"Five Star\">
                                <img src=\"{{ asset('assets/images/fivestarbank.jpeg') }}\" width=\"30\"
                                    alt=\"Logo de la banque Five Star\">
                                <span>Five Star</span>
                            </a>
                        </li>
                    </ul>
                    <input type=\"hidden\" name=\"bank_choice\" id=\"selectedBankValue\">
                </div>
            </div>

            <!-- Numéro compte (SELECT) -->
            <div class=\"form-box mt-3\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <label class=\"form-label mb-0\">Numéro compte</label>
                    <a href=\"#\" class=\"text-primary small d-flex align-items-center gap-1 text-decoration-none\">
                        Enregister Numéro
                        <i class=\"bi bi-credit-card-fill fs-6\"></i>
                    </a>
                </div>
                <input type=\"text\" id=\"accountNumberInput\" class=\"form-control border p-2 text-muted\" value=\"1234 0000 2134 3243\">
                <div class=\"form-box mt-2\">
                    <label class=\"form-label\">Nom du compte</label>
                    <input type=\"text\" id=\"accountNameInput\" class=\"form-control border p-2 text-muted\" value=\"Themesflat\">
                </div>

            </div>
            <!-- Nom du compte -->

            <!-- Montant transfert -->
            <p class=\"fw-bold mb-2 mt-3\">Montant</p>
            <div class=\"position-relative mb-3\">
                <input type=\"text\" id=\"amountInput\" class=\"form-control amount-input ps-3 py-2 text-muted\"
                    placeholder=\"€0\">
                <i class=\"bi bi-x-circle-fill position-absolute top-50 end-0 translate-middle-y me-3 text-muted\"
                    id=\"clearAmount\" style=\"cursor: pointer;\"></i>
            </div>

            <div class=\"d-flex justify-content-between gap-2 mb-2\">
                <button type=\"button\" class=\"btn btn-primary amount-btn w-100\" style=\"max-width: 420px;\">10</button>
                <button type=\"button\" class=\"btn btn-primary amount-btn w-100\" style=\"max-width: 420px;\">20</button>
                <button type=\"button\" class=\"btn btn-primary amount-btn w-100\" style=\"max-width: 420px;\">50</button>
            </div>
            <div class=\"d-flex justify-content-between gap-2 mb-2\">
                <button type=\"button\" class=\"btn btn-primary amount-btn w-100\" style=\"max-width: 420px;\">75</button>
                <button type=\"button\" class=\"btn btn-primary amount-btn w-100\" style=\"max-width: 420px;\">100</button>
                <button type=\"button\" class=\"btn btn-primary amount-btn w-100\" style=\"max-width: 420px;\">150</button>
            </div>

            <div class=\"form-box mt-3\">
                <label class=\"form-label\">Message</label>
                <input type=\"text\" id=\"messageInput\" class=\"form-control border p-2 text-muted\"
                    value=\"Exemple remboursement restaurant\">
            </div>
            <div class=\"form-check mt-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"saveAccountCheck\" checked>
                <label class=\"form-check-label small\" for=\"saveAccountCheck\">
                    Enregistrer ce compte pour les futurs transferts
                </label>
            </div>
        </div>

        <div class=\"d-flex justify-content-end mt-3 mb-5\" id=\"btnOpenContinue\">
        <button class=\"btn btn-primary w-100\" type=\"button\" id=\"btnContinue\" style=\"max-width: 130px;\">Continuer</button>
        </div>
    </div>

    <script>
        //Script pour la selection de la banque avec les logos
        document.addEventListener(\"DOMContentLoaded\", function () {
            const dropdownItems = document.querySelectorAll('#bankSelector .dropdown-item');
            const displayElement = document.querySelector('#dropdownBankBtn .selected-content');
            const hiddenInput = document.getElementById('selectedBankValue');
            dropdownItems.forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault(); // Empêche le lien de recharger la page
                    // Récupérer le contenu de l'item cliqué (image + texte)
                    const content = this.innerHTML;
                    const value = this.getAttribute('data-value');

                    // Mettre à jour l'affichage du bouton
                    displayElement.innerHTML = content;

                    // Mettre à jour l'input caché avec le nom de la banque
                    if (hiddenInput) {
                        hiddenInput.value = value;
                    }

                    console.log(\"Banque sélectionnée :\", value);
                });
            });
        });

        // Script pour la selection du montant
        document.addEventListener(\"DOMContentLoaded\", function () {
            const amountInput = document.getElementById('amountInput');
            const amountButtons = document.querySelectorAll('.amount-btn');
            const clearAmountBtn = document.getElementById('clearAmount');

            amountButtons.forEach(button => {
                button.addEventListener('click', function () {
                    // Récupérer le montant du bouton cliqué
                    const selectedAmount = this.textContent.replace('€', '').trim();

                    // Mettre à jour la valeur de l'input
                    amountInput.value = selectedAmount;

                    //  Gérer l'état visuel \"actif\"
                    // On retire la classe active de tous les boutons
                    amountButtons.forEach(btn => {
                        btn.classList.remove('active', 'btn-primary', 'text-white');
                        btn.classList.add('btn-outline-primary');
                    });
                    // On l'ajoute au bouton cliqué
                    this.classList.remove('btn-outline-primary');
                    this.classList.add('active', 'btn-primary', 'text-white');
                });
            });

            if (clearAmountBtn) {
                clearAmountBtn.addEventListener('click', function() {
                    amountInput.value = '';
                    amountButtons.forEach(btn => {
                        btn.classList.remove('active', 'btn-primary', 'text-white');
                        btn.classList.add('btn-outline-primary');
                    });
                });
            }
        });

        // script la section message et checkbox
        document.addEventListener(\"DOMContentLoaded\", function () {
            // Effacer le message par défaut au premier clic pour aider l'utilisateur
            const messageInput = document.getElementById(\"messageInput\");
            if (messageInput) {
                messageInput.addEventListener(\"focus\", function () {
                    if (this.value === \"Exemple remboursement restaurant\") {
                        this.value = \"\";
                    }
                });
            }

            // Bouton Continuer
            const btnContinue = document.getElementById(\"btnContinue\");
            if (btnContinue) {
                btnContinue.addEventListener(\"click\", function () {
                    const amount = document.getElementById('amountInput').value.replace('€', '').trim();
                    const recipientIdentifier = document.getElementById('accountNumberInput').value;
                    const recipientName = document.getElementById('accountNameInput').value;
                    const message = document.getElementById('messageInput').value;
                    const bankName = document.getElementById('selectedBankValue').value;
                    const isSaved = document.getElementById(\"saveAccountCheck\").checked;

                    if (!amount || parseFloat(amount) <= 0 || !recipientIdentifier) {
                        alert('Veuillez remplir les informations obligatoires (montant et compte)');
                        return;
                    }

                    // Redirection vers la page de confirmation
                    // Note: Nous utilisons l'URL générée par Twig pour être sûr du chemin
                    const url = new URL(\"{{ path('app_transfert_confirm') }}\", window.location.origin);
                    url.searchParams.append('amount', amount);
                    url.searchParams.append('recipientIdentifier', recipientIdentifier);
                    url.searchParams.append('recipientName', recipientName);
                    url.searchParams.append('message', message);
                    url.searchParams.append('fromCard', bankName); // On utilise le nom de la banque comme source
                    url.searchParams.append('type', 'bank_transfer');

                    window.location.href = url.toString();
                });
            }
        });
    </script>
{% endblock %}
", "transfert/bybank.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/transfert/bybank.html.twig");
    }
}
