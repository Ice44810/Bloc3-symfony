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

/* payment/index.html.twig */
class __TwigTemplate_f84ba34ec8f7eb2e6577caf8e1ac27c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

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

        yield "Paiement - Budget App";
        
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
        yield "    <!-- HEADER -->
    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bill");
        yield "\">Factures</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-arrow-left-right\" style=\"font-size: 15px;\"></span>
                        Paiement
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container\">
            <!--DETAILS TRANSFERT-->
            <div class=\"transfer-card text-center\">
                <div class=\"mb-3\">
                    <img src=\"https://img.icons8.com/fluency/48/money-bag.png\" alt=\"money\">
                </div>
                <div class=\"d-flex justify-content-center align-items-center gap-1\">
                    <span class=\"fs-3\">€</span>
                    <span class=\"amount\">70</span>
                </div>
                <p class=\"text-muted mb-3 small\">Montant transfert</p>
                <div class=\"divider\">
                </div>
                <div class=\"d-flex justify-content-between\"><span class=\"text-muted small\">Frais transaction
                    </span><strong class=\"small\">Gratuit</strong>
                </div>
            </div>
            <!-- METHODE DE PAIEMENTS -->
            <div class=\"mt-3\">
                <div class=\"payment-card d-flex align-items-center justify-content-between p-3 mb-2 rounded-3 border clickable-payment active\"
                    onclick=\"selectPayment(this)\">
                    <div class=\"d-flex align-items-center gap-3\">
                        <img src=\"https://img.icons8.com/color/48/wallet.png\" width=\"32\">
                        <div>
                            <strong>Alipay Wallet</strong><br>
                            <span class=\"text-muted small\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 46), "fullName", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "fullName", [], "any", false, false, false, 46), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "email", [], "any", false, false, false, 46))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "email", [], "any", false, false, false, 46))), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                    <input class=\"form-check-input\" type=\"radio\" name=\"payment_method\" checked>
                </div>

                <div class=\"payment-card d-flex align-items-center justify-content-between p-3 rounded-3 border clickable-payment\"
                    onclick=\"selectPayment(this)\">
                    <div class=\"d-flex align-items-center gap-3\">
                        <img src=\"https://img.icons8.com/color/48/visa.png\" width=\"40\">
                        <div>
                            <strong>Carte Visa</strong><br>
                            <span class=\"text-muted small\">**** **** **** 4234</span>
                        </div>
                    </div>
                    <input class=\"form-check-input\" type=\"radio\" name=\"payment_method\">
                </div>
            </div>
        </div>
        <div class=\"d-flex justify-content-end\">
            <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfert_confirm");
        yield "\">
                <button class=\"btn btn-primary confirm-btn mx-3\">Confirmer
                    Paiement</button>
            </a>
        </div>
    </div>

    <script>
        // Stocker les données de paiement et naviguer vers transferconfirm
        document.addEventListener(\"DOMContentLoaded\", function() {
            // Récupérer les données de transfert depuis sessionStorage
            const transferDataStr = sessionStorage.getItem('transferData');
            const billDataStr = sessionStorage.getItem('billData');
            
            let transferData = null;
            let billData = null;
            
            if (transferDataStr) {
                transferData = JSON.parse(transferDataStr);
            }
            
            if (billDataStr) {
                billData = JSON.parse(billDataStr);
            }
            
            // Déterminer quelles données afficher
            const data = transferData || billData;
            const isBill = !!billData;
            
            if (data) {
                // Mettre à jour le montant affiché
                const amountSpan = document.querySelector('.amount');
                if (amountSpan) {
                    amountSpan.textContent = data.amount;
                }
                
                // Mettre à jour le libellé
                const transferCard = document.querySelector('.transfer-card');
                if (transferCard) {
                    const descElement = transferCard.querySelector('.text-muted');
                    if (descElement) {
                        if (isBill) {
                            descElement.textContent = 'Paiement facture - ' + (billData.billType || 'Facture');
                        } else {
                            descElement.textContent = 'Montant transfert';
                        }
                    }
                }
                
                console.log('Payment data loaded:', data);
            }

            // Gestion du bouton confirmer
            const confirmBtn = document.querySelector('.confirm-btn');
            
            if (confirmBtn) {
                confirmBtn.addEventListener('click', function(e) {
                    // Récupérer la méthode de paiement sélectionnée
                    const selectedPayment = document.querySelector('.clickable-payment.active');
                    let paymentMethod = 'wallet';
                    
                    if (selectedPayment) {
                        const methodText = selectedPayment.querySelector('strong');
                        if (methodText) {
                            const text = methodText.textContent.toLowerCase();
                            if (text.includes('visa')) {
                                paymentMethod = 'card';
                            } else if (text.includes('alipay') || text.includes('wallet')) {
                                paymentMethod = 'wallet';
                            }
                        }
                    }
                    
                    // Mettre à jour les données avec la méthode de paiement
                    if (transferData) {
                        transferData.fromMethod = paymentMethod;
                        transferData.timestamp = new Date().toISOString();
                        sessionStorage.setItem('transferData', JSON.stringify(transferData));
                    }
                    
                    if (billData) {
                        billData.fromMethod = paymentMethod;
                        billData.timestamp = new Date().toISOString();
                        sessionStorage.setItem('billData', JSON.stringify(billData));
                    }
                    
                    console.log('Payment method:', paymentMethod);
                });
            }
        });

        function selectPayment(element) {
            //  On retire la classe 'active' de tous les blocs de paiement
            document.querySelectorAll('.clickable-payment').forEach(card => {
                card.classList.remove('active');
            });
            //  On ajoute la classe 'active' au bloc cliqué
            element.classList.add('active');

            // On trouve le bouton radio à l'intérieur et on le coche
            const radio = element.querySelector('.form-check-input');
            radio.checked = true;
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
        return "payment/index.html.twig";
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
        return array (  171 => 66,  148 => 46,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paiement - Budget App{% endblock %}

{% block body %}
    <!-- HEADER -->
    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_bill') }}\">Factures</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-arrow-left-right\" style=\"font-size: 15px;\"></span>
                        Paiement
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container\">
            <!--DETAILS TRANSFERT-->
            <div class=\"transfer-card text-center\">
                <div class=\"mb-3\">
                    <img src=\"https://img.icons8.com/fluency/48/money-bag.png\" alt=\"money\">
                </div>
                <div class=\"d-flex justify-content-center align-items-center gap-1\">
                    <span class=\"fs-3\">€</span>
                    <span class=\"amount\">70</span>
                </div>
                <p class=\"text-muted mb-3 small\">Montant transfert</p>
                <div class=\"divider\">
                </div>
                <div class=\"d-flex justify-content-between\"><span class=\"text-muted small\">Frais transaction
                    </span><strong class=\"small\">Gratuit</strong>
                </div>
            </div>
            <!-- METHODE DE PAIEMENTS -->
            <div class=\"mt-3\">
                <div class=\"payment-card d-flex align-items-center justify-content-between p-3 mb-2 rounded-3 border clickable-payment active\"
                    onclick=\"selectPayment(this)\">
                    <div class=\"d-flex align-items-center gap-3\">
                        <img src=\"https://img.icons8.com/color/48/wallet.png\" width=\"32\">
                        <div>
                            <strong>Alipay Wallet</strong><br>
                            <span class=\"text-muted small\">{{ app.user.fullName|default(app.user.email) }}</span>
                        </div>
                    </div>
                    <input class=\"form-check-input\" type=\"radio\" name=\"payment_method\" checked>
                </div>

                <div class=\"payment-card d-flex align-items-center justify-content-between p-3 rounded-3 border clickable-payment\"
                    onclick=\"selectPayment(this)\">
                    <div class=\"d-flex align-items-center gap-3\">
                        <img src=\"https://img.icons8.com/color/48/visa.png\" width=\"40\">
                        <div>
                            <strong>Carte Visa</strong><br>
                            <span class=\"text-muted small\">**** **** **** 4234</span>
                        </div>
                    </div>
                    <input class=\"form-check-input\" type=\"radio\" name=\"payment_method\">
                </div>
            </div>
        </div>
        <div class=\"d-flex justify-content-end\">
            <a href=\"{{ path('app_transfert_confirm') }}\">
                <button class=\"btn btn-primary confirm-btn mx-3\">Confirmer
                    Paiement</button>
            </a>
        </div>
    </div>

    <script>
        // Stocker les données de paiement et naviguer vers transferconfirm
        document.addEventListener(\"DOMContentLoaded\", function() {
            // Récupérer les données de transfert depuis sessionStorage
            const transferDataStr = sessionStorage.getItem('transferData');
            const billDataStr = sessionStorage.getItem('billData');
            
            let transferData = null;
            let billData = null;
            
            if (transferDataStr) {
                transferData = JSON.parse(transferDataStr);
            }
            
            if (billDataStr) {
                billData = JSON.parse(billDataStr);
            }
            
            // Déterminer quelles données afficher
            const data = transferData || billData;
            const isBill = !!billData;
            
            if (data) {
                // Mettre à jour le montant affiché
                const amountSpan = document.querySelector('.amount');
                if (amountSpan) {
                    amountSpan.textContent = data.amount;
                }
                
                // Mettre à jour le libellé
                const transferCard = document.querySelector('.transfer-card');
                if (transferCard) {
                    const descElement = transferCard.querySelector('.text-muted');
                    if (descElement) {
                        if (isBill) {
                            descElement.textContent = 'Paiement facture - ' + (billData.billType || 'Facture');
                        } else {
                            descElement.textContent = 'Montant transfert';
                        }
                    }
                }
                
                console.log('Payment data loaded:', data);
            }

            // Gestion du bouton confirmer
            const confirmBtn = document.querySelector('.confirm-btn');
            
            if (confirmBtn) {
                confirmBtn.addEventListener('click', function(e) {
                    // Récupérer la méthode de paiement sélectionnée
                    const selectedPayment = document.querySelector('.clickable-payment.active');
                    let paymentMethod = 'wallet';
                    
                    if (selectedPayment) {
                        const methodText = selectedPayment.querySelector('strong');
                        if (methodText) {
                            const text = methodText.textContent.toLowerCase();
                            if (text.includes('visa')) {
                                paymentMethod = 'card';
                            } else if (text.includes('alipay') || text.includes('wallet')) {
                                paymentMethod = 'wallet';
                            }
                        }
                    }
                    
                    // Mettre à jour les données avec la méthode de paiement
                    if (transferData) {
                        transferData.fromMethod = paymentMethod;
                        transferData.timestamp = new Date().toISOString();
                        sessionStorage.setItem('transferData', JSON.stringify(transferData));
                    }
                    
                    if (billData) {
                        billData.fromMethod = paymentMethod;
                        billData.timestamp = new Date().toISOString();
                        sessionStorage.setItem('billData', JSON.stringify(billData));
                    }
                    
                    console.log('Payment method:', paymentMethod);
                });
            }
        });

        function selectPayment(element) {
            //  On retire la classe 'active' de tous les blocs de paiement
            document.querySelectorAll('.clickable-payment').forEach(card => {
                card.classList.remove('active');
            });
            //  On ajoute la classe 'active' au bloc cliqué
            element.classList.add('active');

            // On trouve le bouton radio à l'intérieur et on le coche
            const radio = element.querySelector('.form-check-input');
            radio.checked = true;
        }
    </script>
{% endblock %}

", "payment/index.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/payment/index.html.twig");
    }
}
