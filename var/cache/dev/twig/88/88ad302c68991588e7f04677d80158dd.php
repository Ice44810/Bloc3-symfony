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

/* help/index.html.twig */
class __TwigTemplate_d44dc09c45e40623877616de75dca2a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "help/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "help/index.html.twig"));

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

        yield "Aide - Budget App";
        
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
        yield "        <!-- 
         PAGE: AIDE
         Fonctionnalité: Foire aux questions et support
         -->

    <div class=\"container\">
        <!-- Fil d'Arianne -->
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-question-circle text-primary\" style=\"font-size: 15px;\"></span>
                        Aide
                    </li>
                </ol>
            </nav>
        </div>

        <!-- En-tête -->
        <div class=\"text-center mb-4\">
            <h4 class=\"fw-semibold\">Centre d'aide</h4>
            <p class=\"text-muted\">Trouvez des réponses à vos questions</p>
        </div>

        <!-- Barre de recherche -->
        <div class=\"mb-4\">
            <div class=\"input-group\">
                <span class=\"input-group-text bg-white\">
                    <i class=\"bi bi-search\"></i>
                </span>
                <input type=\"text\" class=\"form-control\" id=\"searchHelp\" placeholder=\"Rechercher dans l'aide...\">
            </div>
        </div>

        <!-- Catégories d'aide -->
        <div class=\"row mb-4\">
            <div class=\"col-6 col-md-3 mb-3\">
                <div class=\"text-center p-3 bg-light rounded\">
                    <i class=\"bi bi-credit-card fs-3 text-primary\"></i>
                    <p class=\"mb-0 small mt-2\">Cartes</p>
                </div>
            </div>
            <div class=\"col-6 col-md-3 mb-3\">
                <div class=\"text-center p-3 bg-light rounded\">
                    <i class=\"bi bi-arrow-left-right fs-3 text-primary\"></i>
                    <p class=\"mb-0 small mt-2\">Transferts</p>
                </div>
            </div>
            <div class=\"col-6 col-md-3 mb-3\">
                <div class=\"text-center p-3 bg-light rounded\">
                    <i class=\"bi bi-wallet2 fs-3 text-primary\"></i>
                    <p class=\"mb-0 small mt-2\">Solde</p>
                </div>
            </div>
            <div class=\"col-6 col-md-3 mb-3\">
                <div class=\"text-center p-3 bg-light rounded\">
                    <i class=\"bi bi-shield-lock fs-3 text-primary\"></i>
                    <p class=\"mb-0 small mt-2\">Sécurité</p>
                </div>
            </div>
        </div>

        <!-- Questions fréquentes -->
        <div class=\"accordion\" id=\"faqAccordion\">
            <!-- Question 1 -->
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq1\">
                        Comment ajouter une carte bancaire ?
                    </button>
                </h2>
                <div id=\"faq1\" class=\"accordion-collapse collapse show\" data-bs-parent=\"#faqAccordion\">
                    <div class=\"accordion-body\">
                        Pour ajouter une carte bancaire, allez dans la section \"Mes Cartes\" puis cliquez sur le bouton \"Ajouter\". 
                        Remplissez les informations de votre carte (nom du titulaire, numéro, date d'expiration, CVV) et validez.
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq2\">
                        Comment effectuer un transfert ?
                    </button>
                </h2>
                <div id=\"faq2\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqAccordion\">
                    <div class=\"accordion-body\">
                        Pour effectuer un transfert, allez dans la section \"Transfert\", sélectionnez un destinataire ou ajoutez-en un nouveau, 
                        saissez le montant et validez. Vous recevrez un code OTP pour confirmer la transaction.
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq3\">
                        Comment recharger mon compte ?
                    </button>
                </h2>
                <div id=\"faq3\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqAccordion\">
                    <div class=\"accordion-body\">
                        Pour recharger votre compte, utilisez la fonctionnalité \"Top-up\" depuis la page d'accueil ou dans la section appropriée. 
                        Vous pouvez effectuer une recharge par carte bancaire ou par virement bancaire.
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq4\">
                        Comment payer mes factures ?
                    </button>
                </h2>
                <div id=\"faq4\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqAccordion\">
                    <div class=\"accordion-body\">
                        Allez dans la section \"Factures\" ou \"Services\" pour payer vos factures (électricité, eau, internet, mobile). 
                        Sélectionnez le type de facture, entrez vos informations et validez le paiement.
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq5\">
                        Comment modifier mon mot de passe ?
                    </button>
                </h2>
                <div id=\"faq5\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqAccordion\">
                    <div class=\"accordion-body\">
                        Allez dans \"Paramètres\" > \"Sécurité\" > \"Changer le mot de passe\". 
                        Entrez votre ancien mot de passe puis le nouveau mot de passe et confirmez.
                    </div>
                </div>
            </div>

            <!-- Question 6 -->
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq6\">
                        Mon compte est-il sécurisé ?
                    </button>
                </h2>
                <div id=\"faq6\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqAccordion\">
                    <div class=\"accordion-body\">
                        Oui, votre compte est sécurisé. Nous utilisons le chiffrement SSL, l'authentification à deux facteurs (2FA) 
                        et des codes OTP pour les transactions sensibles. Vous pouvez activer des options de sécurité supplémentaires dans \"Paramètres\" > \"Sécurité\".
                    </div>
                </div>
            </div>
        </div>

        <!-- Contacter le support -->
        <div class=\"card mt-4 border-0 shadow-sm\">
            <div class=\"card-body text-center\">
                <h5 class=\"card-title\">Vous n'avez pas trouvé votre réponse ?</h5>
                <p class=\"card-text text-muted\">Contactez notre équipe de support</p>
                <a href=\"";
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"btn btn-primary\">
                    <i class=\"bi bi-envelope\"></i> Contacter le support
                </a>
            </div>
        </div>

    </div>

    <!-- FOOTER -->
    <footer class=\"footer py-2\">
        <div class=\"d-flex justify-content-around align-items-center\">
            <a href=\"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"footer-link\">
                <i class=\"bi bi-house-door-fill\"></i>
                <span>Accueil</span>
            </a>
            <a href=\"";
        // line 182
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transactions_view");
        yield "\" class=\"footer-link\">
                <i class=\"bi bi-clock-history\"></i>
                <span>Historique</span>
            </a>
            <a href=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_qr");
        yield "\" class=\"footer-link\">
                <i class=\"bi bi-qr-code-scan\"></i>
                <span>QR</span>
            </a>
            <a href=\"";
        // line 190
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rewards");
        yield "\" class=\"footer-link\">
                <i class=\"bi bi-gift\"></i>
                <span>Récompenses</span>
            </a>
            <a href=\"";
        // line 194
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"active-link\">
                <i class=\"bi bi-person\"></i>
                <span>Profil</span>
            </a>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Recherche dans la FAQ
            const searchInput = document.getElementById('searchHelp');
            const accordionItems = document.querySelectorAll('.accordion-item');

            searchInput.addEventListener('input', function (e) {
                const searchTerm = e.target.value.toLowerCase();

                accordionItems.forEach(item => {
                    const text = item.textContent.toLowerCase();
                    if (text.includes(searchTerm)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
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
        return "help/index.html.twig";
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
        return array (  308 => 194,  301 => 190,  294 => 186,  287 => 182,  280 => 178,  266 => 167,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Aide - Budget App{% endblock %}

{% block body %}
        <!-- 
         PAGE: AIDE
         Fonctionnalité: Foire aux questions et support
         -->

    <div class=\"container\">
        <!-- Fil d'Arianne -->
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-question-circle text-primary\" style=\"font-size: 15px;\"></span>
                        Aide
                    </li>
                </ol>
            </nav>
        </div>

        <!-- En-tête -->
        <div class=\"text-center mb-4\">
            <h4 class=\"fw-semibold\">Centre d'aide</h4>
            <p class=\"text-muted\">Trouvez des réponses à vos questions</p>
        </div>

        <!-- Barre de recherche -->
        <div class=\"mb-4\">
            <div class=\"input-group\">
                <span class=\"input-group-text bg-white\">
                    <i class=\"bi bi-search\"></i>
                </span>
                <input type=\"text\" class=\"form-control\" id=\"searchHelp\" placeholder=\"Rechercher dans l'aide...\">
            </div>
        </div>

        <!-- Catégories d'aide -->
        <div class=\"row mb-4\">
            <div class=\"col-6 col-md-3 mb-3\">
                <div class=\"text-center p-3 bg-light rounded\">
                    <i class=\"bi bi-credit-card fs-3 text-primary\"></i>
                    <p class=\"mb-0 small mt-2\">Cartes</p>
                </div>
            </div>
            <div class=\"col-6 col-md-3 mb-3\">
                <div class=\"text-center p-3 bg-light rounded\">
                    <i class=\"bi bi-arrow-left-right fs-3 text-primary\"></i>
                    <p class=\"mb-0 small mt-2\">Transferts</p>
                </div>
            </div>
            <div class=\"col-6 col-md-3 mb-3\">
                <div class=\"text-center p-3 bg-light rounded\">
                    <i class=\"bi bi-wallet2 fs-3 text-primary\"></i>
                    <p class=\"mb-0 small mt-2\">Solde</p>
                </div>
            </div>
            <div class=\"col-6 col-md-3 mb-3\">
                <div class=\"text-center p-3 bg-light rounded\">
                    <i class=\"bi bi-shield-lock fs-3 text-primary\"></i>
                    <p class=\"mb-0 small mt-2\">Sécurité</p>
                </div>
            </div>
        </div>

        <!-- Questions fréquentes -->
        <div class=\"accordion\" id=\"faqAccordion\">
            <!-- Question 1 -->
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq1\">
                        Comment ajouter une carte bancaire ?
                    </button>
                </h2>
                <div id=\"faq1\" class=\"accordion-collapse collapse show\" data-bs-parent=\"#faqAccordion\">
                    <div class=\"accordion-body\">
                        Pour ajouter une carte bancaire, allez dans la section \"Mes Cartes\" puis cliquez sur le bouton \"Ajouter\". 
                        Remplissez les informations de votre carte (nom du titulaire, numéro, date d'expiration, CVV) et validez.
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq2\">
                        Comment effectuer un transfert ?
                    </button>
                </h2>
                <div id=\"faq2\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqAccordion\">
                    <div class=\"accordion-body\">
                        Pour effectuer un transfert, allez dans la section \"Transfert\", sélectionnez un destinataire ou ajoutez-en un nouveau, 
                        saissez le montant et validez. Vous recevrez un code OTP pour confirmer la transaction.
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq3\">
                        Comment recharger mon compte ?
                    </button>
                </h2>
                <div id=\"faq3\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqAccordion\">
                    <div class=\"accordion-body\">
                        Pour recharger votre compte, utilisez la fonctionnalité \"Top-up\" depuis la page d'accueil ou dans la section appropriée. 
                        Vous pouvez effectuer une recharge par carte bancaire ou par virement bancaire.
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq4\">
                        Comment payer mes factures ?
                    </button>
                </h2>
                <div id=\"faq4\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqAccordion\">
                    <div class=\"accordion-body\">
                        Allez dans la section \"Factures\" ou \"Services\" pour payer vos factures (électricité, eau, internet, mobile). 
                        Sélectionnez le type de facture, entrez vos informations et validez le paiement.
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq5\">
                        Comment modifier mon mot de passe ?
                    </button>
                </h2>
                <div id=\"faq5\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqAccordion\">
                    <div class=\"accordion-body\">
                        Allez dans \"Paramètres\" > \"Sécurité\" > \"Changer le mot de passe\". 
                        Entrez votre ancien mot de passe puis le nouveau mot de passe et confirmez.
                    </div>
                </div>
            </div>

            <!-- Question 6 -->
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faq6\">
                        Mon compte est-il sécurisé ?
                    </button>
                </h2>
                <div id=\"faq6\" class=\"accordion-collapse collapse\" data-bs-parent=\"#faqAccordion\">
                    <div class=\"accordion-body\">
                        Oui, votre compte est sécurisé. Nous utilisons le chiffrement SSL, l'authentification à deux facteurs (2FA) 
                        et des codes OTP pour les transactions sensibles. Vous pouvez activer des options de sécurité supplémentaires dans \"Paramètres\" > \"Sécurité\".
                    </div>
                </div>
            </div>
        </div>

        <!-- Contacter le support -->
        <div class=\"card mt-4 border-0 shadow-sm\">
            <div class=\"card-body text-center\">
                <h5 class=\"card-title\">Vous n'avez pas trouvé votre réponse ?</h5>
                <p class=\"card-text text-muted\">Contactez notre équipe de support</p>
                <a href=\"{{ path('app_contact') }}\" class=\"btn btn-primary\">
                    <i class=\"bi bi-envelope\"></i> Contacter le support
                </a>
            </div>
        </div>

    </div>

    <!-- FOOTER -->
    <footer class=\"footer py-2\">
        <div class=\"d-flex justify-content-around align-items-center\">
            <a href=\"{{ path('app_home') }}\" class=\"footer-link\">
                <i class=\"bi bi-house-door-fill\"></i>
                <span>Accueil</span>
            </a>
            <a href=\"{{ path('app_transactions_view') }}\" class=\"footer-link\">
                <i class=\"bi bi-clock-history\"></i>
                <span>Historique</span>
            </a>
            <a href=\"{{ path('app_qr') }}\" class=\"footer-link\">
                <i class=\"bi bi-qr-code-scan\"></i>
                <span>QR</span>
            </a>
            <a href=\"{{ path('app_rewards') }}\" class=\"footer-link\">
                <i class=\"bi bi-gift\"></i>
                <span>Récompenses</span>
            </a>
            <a href=\"{{ path('app_profile') }}\" class=\"active-link\">
                <i class=\"bi bi-person\"></i>
                <span>Profil</span>
            </a>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Recherche dans la FAQ
            const searchInput = document.getElementById('searchHelp');
            const accordionItems = document.querySelectorAll('.accordion-item');

            searchInput.addEventListener('input', function (e) {
                const searchTerm = e.target.value.toLowerCase();

                accordionItems.forEach(item => {
                    const text = item.textContent.toLowerCase();
                    if (text.includes(searchTerm)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>
{% endblock %}

", "help/index.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/help/index.html.twig");
    }
}
