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

/* banque/index.html.twig */
class __TwigTemplate_a83434c3a87a41e51393edb2d24add86 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "banque/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "banque/index.html.twig"));

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

        yield "Moyen de paiement - Budget App";
        
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
        yield "    <!-- 
         PAGE: MOYEN DE PAIEMENT
         Fonctionnalité: Sélectionner le moyen de paiement pour une facture
         Source: Budget_App/Backend/pages/paymentsource.html
          -->

    <div class=\"container\">
        <!-- Fil d'Arianne -->
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bill");
        yield "\">Factures</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-arrow-left-right\" style=\"font-size: 15px;\"></span>
                        Moyen de paiement
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container\">
                <!-- 
                 DÉTAILS DU PAIEMENT
                 Affiche le montant et les informations de la transaction
                  -->
            <div class=\"transfer-card text-center\">
                <div class=\"mb-3\">
                    <img src=\"https://img.icons8.com/fluency/48/money-bag.png\" alt=\"money\">
                </div>
                <div class=\"d-flex justify-content-center align-items-center gap-1\">
                    <span class=\"fs-3\">€</span>
                    <span class=\"amount\" id=\"paymentAmount\">--</span>
                </div>
                <p class=\"text-muted mb-3 small\" id=\"paymentDescription\">Montant du paiement</p>
                <div class=\"divider\"></div>
                <div class=\"d-flex justify-content-between\">
                    <span class=\"text-muted small\">Frais transaction</span>
                    <strong class=\"small\">Gratuit</strong>
                </div>
            </div>

            <!-- 
                 MÉTHODES DE PAIEMENT
                 Liste des moyens de paiement disponibles
                  -->
            <div class=\"mt-3\">
                <!-- Wallet -->
                <div class=\"payment-card d-flex align-items-center justify-content-between p-3 mb-2 rounded-3 border clickable-payment active\"
                     onclick=\"selectPayment(this)\" data-method=\"wallet\">
                    <div class=\"d-flex align-items-center gap-3\">
                        <img src=\"https://img.icons8.com/color/48/wallet.png\" width=\"32\" alt=\"Wallet\">
                        <div>
                            <strong>Alipay Wallet</strong><br>
                            <span class=\"text-muted small\">Solde: <span id=\"walletBalance\">-- €</span></span>
                        </div>
                    </div>
                    <input class=\"form-check-input\" type=\"radio\" name=\"payment_method\" value=\"wallet\" checked>
                </div>

                <!-- Carte Visa -->
                <div class=\"payment-card d-flex align-items-center justify-content-between p-3 rounded-3 border clickable-payment\"
                     onclick=\"selectPayment(this)\" data-method=\"card\">
                    <div class=\"d-flex align-items-center gap-3\">
                        <img src=\"https://img.icons8.com/color/48/visa.png\" width=\"40\" alt=\"Visa\">
                        <div>
                            <strong>Carte Visa</strong><br>
                            <span class=\"text-muted small\">**** **** **** <span id=\"cardLast4\">----</span></span>
                        </div>
                    </div>
                    <input class=\"form-check-input\" type=\"radio\" name=\"payment_method\" value=\"card\">
                </div>
            </div>
        </div>

        <!-- BOUTON DE CONFIRMATION -->
        <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary confirm-btn mx-3\" id=\"confirmPaymentBtn\">
                Confirmer Paiement
            </button>
        </div>
    </div>

    <script>
        
         // GESTION DU CHARGEMENT DE LA PAGE
         
        document.addEventListener('DOMContentLoaded', function() {
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
                    amountSpan.textContent = data.amount || '--';
                }
                
                // Mettre à jour le libellé
                const paymentDescription = document.getElementById('paymentDescription');
                if (paymentDescription) {
                    if (isBill) {
                        paymentDescription.textContent = 'Paiement facture - ' + (data.billType || 'Facture');
                    } else {
                        paymentDescription.textContent = 'Montant transfert';
                    }
                }
                
                console.log('Payment data loaded:', data);
            }

            // Charger les données du wallet et des cartes
            loadPaymentMethods();

            // Gestion du bouton confirmer
            const confirmBtn = document.getElementById('confirmPaymentBtn');
            
            if (confirmBtn) {
                confirmBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    confirmPayment();
                });
            }
        });

        
        //  Charger les méthodes de paiement disponibles
         
        async function loadPaymentMethods() {
            try {
                // Charger le solde du wallet
                const balanceResponse = await fetch('";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_dashboard");
        yield "');
                if (balanceResponse.ok) {
                    const balanceData = await balanceResponse.json();
                    const walletBalance = document.getElementById('walletBalance');
                    if (walletBalance && balanceData.balance !== undefined) {
                        walletBalance.textContent = balanceData.balance.toFixed(2) + ' €';
                    }
                }

                // Charger les cartes
                const cardsResponse = await fetch('";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_cards");
        yield "');
                if (cardsResponse.ok) {
                    const cardsData = await cardsResponse.json();
                    if (cardsData.cards && cardsData.cards.length > 0) {
                        const firstCard = cardsData.cards[0];
                        const cardLast4 = document.getElementById('cardLast4');
                        if (cardLast4) {
                            cardLast4.textContent = firstCard.last_4_digits || '----';
                        }
                    }
                }
            } catch (error) {
                console.error('Erreur chargement méthodes de paiement:', error);
            }
        }

        
        //  Sélectionner une méthode de paiement
         
        function selectPayment(element) {
            // Retirer la classe 'active' de tous les blocs de paiement
            document.querySelectorAll('.clickable-payment').forEach(card => {
                card.classList.remove('active');
            });
            // Ajouter la classe 'active' au bloc cliqué
            element.classList.add('active');

            // Cocher le bouton radio à l'intérieur
            const radio = element.querySelector('.form-check-input');
            radio.checked = true;
        }

        
         // Confirmer le paiement
         
        async function confirmPayment() {
            // Récupérer la méthode de paiement sélectionnée
            const selectedPayment = document.querySelector('.clickable-payment.active');
            let paymentMethod = 'wallet';
            
            if (selectedPayment) {
                paymentMethod = selectedPayment.dataset.method || 'wallet';
            }

            // Récupérer les données existantes
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

            // Si c'est un paiement de facture, traiter via API
            if (billData) {
                try {
                    const response = await fetch('";
        // line 240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("process_bill_payment");
        yield "', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            billId: billData.billId,
                            amount: billData.amount,
                            paymentMethod: paymentMethod
                        })
                    });

                    if (response.ok) {
                        const result = await response.json();
                        if (result.success) {
                            alert('Paiement effectué avec succès!');
                            // Rediriger vers la page de confirmation ou l'accueil
                            window.location.href = '";
        // line 257
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "';
                        }
                    } else {
                        alert('Erreur lors du paiement. Veuillez réessayer.');
                    }
                } catch (error) {
                    console.error('Erreur paiement:', error);
                    // En cas d'erreur, continuer vers la page de confirmation
                    window.location.href = '";
        // line 265
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfert_confirm");
        yield "';
                }
            } else {
                // Pour les transferts, aller vers la page de confirmation
                window.location.href = '";
        // line 269
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfert_confirm");
        yield "';
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
        return "banque/index.html.twig";
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
        return array (  386 => 269,  379 => 265,  368 => 257,  348 => 240,  268 => 163,  255 => 153,  117 => 18,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Moyen de paiement - Budget App{% endblock %}

{% block body %}
    <!-- 
         PAGE: MOYEN DE PAIEMENT
         Fonctionnalité: Sélectionner le moyen de paiement pour une facture
         Source: Budget_App/Backend/pages/paymentsource.html
          -->

    <div class=\"container\">
        <!-- Fil d'Arianne -->
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_bill') }}\">Factures</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-arrow-left-right\" style=\"font-size: 15px;\"></span>
                        Moyen de paiement
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container\">
                <!-- 
                 DÉTAILS DU PAIEMENT
                 Affiche le montant et les informations de la transaction
                  -->
            <div class=\"transfer-card text-center\">
                <div class=\"mb-3\">
                    <img src=\"https://img.icons8.com/fluency/48/money-bag.png\" alt=\"money\">
                </div>
                <div class=\"d-flex justify-content-center align-items-center gap-1\">
                    <span class=\"fs-3\">€</span>
                    <span class=\"amount\" id=\"paymentAmount\">--</span>
                </div>
                <p class=\"text-muted mb-3 small\" id=\"paymentDescription\">Montant du paiement</p>
                <div class=\"divider\"></div>
                <div class=\"d-flex justify-content-between\">
                    <span class=\"text-muted small\">Frais transaction</span>
                    <strong class=\"small\">Gratuit</strong>
                </div>
            </div>

            <!-- 
                 MÉTHODES DE PAIEMENT
                 Liste des moyens de paiement disponibles
                  -->
            <div class=\"mt-3\">
                <!-- Wallet -->
                <div class=\"payment-card d-flex align-items-center justify-content-between p-3 mb-2 rounded-3 border clickable-payment active\"
                     onclick=\"selectPayment(this)\" data-method=\"wallet\">
                    <div class=\"d-flex align-items-center gap-3\">
                        <img src=\"https://img.icons8.com/color/48/wallet.png\" width=\"32\" alt=\"Wallet\">
                        <div>
                            <strong>Alipay Wallet</strong><br>
                            <span class=\"text-muted small\">Solde: <span id=\"walletBalance\">-- €</span></span>
                        </div>
                    </div>
                    <input class=\"form-check-input\" type=\"radio\" name=\"payment_method\" value=\"wallet\" checked>
                </div>

                <!-- Carte Visa -->
                <div class=\"payment-card d-flex align-items-center justify-content-between p-3 rounded-3 border clickable-payment\"
                     onclick=\"selectPayment(this)\" data-method=\"card\">
                    <div class=\"d-flex align-items-center gap-3\">
                        <img src=\"https://img.icons8.com/color/48/visa.png\" width=\"40\" alt=\"Visa\">
                        <div>
                            <strong>Carte Visa</strong><br>
                            <span class=\"text-muted small\">**** **** **** <span id=\"cardLast4\">----</span></span>
                        </div>
                    </div>
                    <input class=\"form-check-input\" type=\"radio\" name=\"payment_method\" value=\"card\">
                </div>
            </div>
        </div>

        <!-- BOUTON DE CONFIRMATION -->
        <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary confirm-btn mx-3\" id=\"confirmPaymentBtn\">
                Confirmer Paiement
            </button>
        </div>
    </div>

    <script>
        
         // GESTION DU CHARGEMENT DE LA PAGE
         
        document.addEventListener('DOMContentLoaded', function() {
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
                    amountSpan.textContent = data.amount || '--';
                }
                
                // Mettre à jour le libellé
                const paymentDescription = document.getElementById('paymentDescription');
                if (paymentDescription) {
                    if (isBill) {
                        paymentDescription.textContent = 'Paiement facture - ' + (data.billType || 'Facture');
                    } else {
                        paymentDescription.textContent = 'Montant transfert';
                    }
                }
                
                console.log('Payment data loaded:', data);
            }

            // Charger les données du wallet et des cartes
            loadPaymentMethods();

            // Gestion du bouton confirmer
            const confirmBtn = document.getElementById('confirmPaymentBtn');
            
            if (confirmBtn) {
                confirmBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    confirmPayment();
                });
            }
        });

        
        //  Charger les méthodes de paiement disponibles
         
        async function loadPaymentMethods() {
            try {
                // Charger le solde du wallet
                const balanceResponse = await fetch('{{ path('get_dashboard') }}');
                if (balanceResponse.ok) {
                    const balanceData = await balanceResponse.json();
                    const walletBalance = document.getElementById('walletBalance');
                    if (walletBalance && balanceData.balance !== undefined) {
                        walletBalance.textContent = balanceData.balance.toFixed(2) + ' €';
                    }
                }

                // Charger les cartes
                const cardsResponse = await fetch('{{ path('get_cards') }}');
                if (cardsResponse.ok) {
                    const cardsData = await cardsResponse.json();
                    if (cardsData.cards && cardsData.cards.length > 0) {
                        const firstCard = cardsData.cards[0];
                        const cardLast4 = document.getElementById('cardLast4');
                        if (cardLast4) {
                            cardLast4.textContent = firstCard.last_4_digits || '----';
                        }
                    }
                }
            } catch (error) {
                console.error('Erreur chargement méthodes de paiement:', error);
            }
        }

        
        //  Sélectionner une méthode de paiement
         
        function selectPayment(element) {
            // Retirer la classe 'active' de tous les blocs de paiement
            document.querySelectorAll('.clickable-payment').forEach(card => {
                card.classList.remove('active');
            });
            // Ajouter la classe 'active' au bloc cliqué
            element.classList.add('active');

            // Cocher le bouton radio à l'intérieur
            const radio = element.querySelector('.form-check-input');
            radio.checked = true;
        }

        
         // Confirmer le paiement
         
        async function confirmPayment() {
            // Récupérer la méthode de paiement sélectionnée
            const selectedPayment = document.querySelector('.clickable-payment.active');
            let paymentMethod = 'wallet';
            
            if (selectedPayment) {
                paymentMethod = selectedPayment.dataset.method || 'wallet';
            }

            // Récupérer les données existantes
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

            // Si c'est un paiement de facture, traiter via API
            if (billData) {
                try {
                    const response = await fetch('{{ path('process_bill_payment') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            billId: billData.billId,
                            amount: billData.amount,
                            paymentMethod: paymentMethod
                        })
                    });

                    if (response.ok) {
                        const result = await response.json();
                        if (result.success) {
                            alert('Paiement effectué avec succès!');
                            // Rediriger vers la page de confirmation ou l'accueil
                            window.location.href = '{{ path('app_home') }}';
                        }
                    } else {
                        alert('Erreur lors du paiement. Veuillez réessayer.');
                    }
                } catch (error) {
                    console.error('Erreur paiement:', error);
                    // En cas d'erreur, continuer vers la page de confirmation
                    window.location.href = '{{ path('app_transfert_confirm') }}';
                }
            } else {
                // Pour les transferts, aller vers la page de confirmation
                window.location.href = '{{ path('app_transfert_confirm') }}';
            }
        }
    </script>
{% endblock %}

", "banque/index.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/banque/index.html.twig");
    }
}
