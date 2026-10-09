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

/* card/index.html.twig */
class __TwigTemplate_02fcf1a7104cf1baca981bcf963f58c6 extends Template
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
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/index.html.twig"));

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

        yield "Mes cartes - Budget App";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<style>
.btn-primary {
    display : flex;
    justify-content : end;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
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

        // line 15
        yield "        <!--
         PAGE: MES CARTES
         Fonctionnalité: Gérer les cartes bancaires
         -->

   <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-credit-card text-primary\" style=\"font-size: 15px;\"></span>
                        Carte Bancaire
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container\">
            <!-- Cartes bancaires de l'utilisateur -->
            <h6 class=\"fw-semibold mb-3\">Mes Cartes</h6>
            <div id=\"cards-container\" class=\"vstack gap-3 mb-4\">
                <div class=\"text-center py-4\">
                    <div class=\"spinner-border text-primary\" role=\"status\">
                        <span class=\"visually-hidden\">Chargement...</span>
                    </div>
                    <p class=\"mt-2 text-muted\">Chargement de vos cartes...</p>
                </div>
            </div>

            <div class=\"d-grid gap-2 mb-4\">
                <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_card_new");
        yield "\" class=\"btn btn-primary w-25\">
                    <i class=\"bi bi-plus-circle me-2\"></i>Ajouter une carte
                </a>
            </div>

            <hr class=\"my-4\">

            <h6 class=\"fw-semibold mb-3\">Banques populaires</h6>
            <div class=\"row g-3 mb-4\" id=\"creditcard\">
                <div class=\"col-6 col-md-3\">
                    <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfer_by_bank");
        yield "\" class=\"bank-card\">
                        <img src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons8-visa-48.png"), "html", null, true);
        yield "\">
                        <span>Global card</span>
                    </a>
                </div>

                <div class=\"col-6 col-md-3\">
                    <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfer_by_bank");
        yield "\" class=\"bank-card\">
                        <img src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Techcombank.png"), "html", null, true);
        yield "\">
                        <span>Techcombank</span>
                    </a>
                </div>
                <div class=\"col-6 col-md-3\">
                    <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfer_by_bank");
        yield "\" class=\"bank-card\">
                        <img src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/acbbank.png"), "html", null, true);
        yield "\">
                        <span>ACB</span>
                    </a>
                </div>
                <div class=\"col-6 col-md-3\">
                    <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfer_by_bank");
        yield "\" class=\"bank-card\">
                        <img src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fivestarbank.jpeg"), "html", null, true);
        yield "\">
                        <span>Five star bank</span>
                    </a>
                </div>
                <div class=\"col-6 col-md-3\">
                    <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfer_by_bank");
        yield "\" class=\"bank-card\">
                        <img src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/citigroup.png"), "html", null, true);
        yield "\">
                        <span>Citibank</span>
                    </a>
                </div>
                <div class=\"col-6 col-md-3\">
                    <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfer_by_bank");
        yield "\" class=\"bank-card\">
                        <img src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/ICBC.png"), "html", null, true);
        yield "\">
                        <span>ICBCBank</span>
                    </a>
                </div>
                <div class=\"col-6 col-md-3\">
                    <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfer_by_bank");
        yield "\" class=\"bank-card\">
                        <img src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chasebank.jpeg"), "html", null, true);
        yield "\">
                        <span>Chasebank</span>
                    </a>
                </div>
                <div class=\"col-6 col-md-3\">
                    <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfer_by_bank");
        yield "\" class=\"bank-card\">
                        <img src=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/vietinbank.png"), "html", null, true);
        yield "\">
                        <span>Vietinbank</span>
                    </a>
                </div>
            </div>
            <!-- Toutes les banques-->
            <h6 class=\"fw-semibold mb-3\">Toutes les banques (40)</h6>
            <div class=\"bank-list\">
                <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfer_by_bank");
        yield "\" class=\"bank-item\">
                    <img src=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons8-visa-48.png"), "html", null, true);
        yield "\">
                    <span>Visa</span>
                </a>

                <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfer_by_bank");
        yield "\" class=\"bank-item\">
                    <img src=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Techcombank.png"), "html", null, true);
        yield "\">
                    <span>Techcombank</span>
                </a>

                <a href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfer_by_bank");
        yield "\" class=\"bank-item\">
                    <img src=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/acbbank.png"), "html", null, true);
        yield "\">
                    <span>ACB</span>
                </a>

                <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfer_by_bank");
        yield "\" class=\"bank-item\">
                    <img src=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fivestarbank.jpeg"), "html", null, true);
        yield "\">
                    <span>Five star bank</span>
                </a>

                <a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfer_by_bank");
        yield "\" class=\"bank-item\">
                    <img src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/citigroup.png"), "html", null, true);
        yield "\">
                    <span>Citibank</span>
                </a>

                <a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfer_by_bank");
        yield "\" class=\"bank-item\">
                    <img src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/ICBC.png"), "html", null, true);
        yield "\">
                    <span>ICBCBank</span>
                </a>

                <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfer_by_bank");
        yield "\" class=\"bank-item\">
                    <img src=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chasebank.jpeg"), "html", null, true);
        yield "\">
                    <span>Chasebank</span>
                </a>

                <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfer_by_bank");
        yield "\" class=\"bank-item\">
                    <img src=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/vietinbank.png"), "html", null, true);
        yield "\">
                    <span>Vietinbank</span>
                </a>
            </div>
        </div>
    </div>

    <script>

      // GESTION DU CHARGEMENT DES CARTES ET DU SOLDE

        document.addEventListener('DOMContentLoaded', function () {
            // Charger les données du tableau de bord
            loadDashboard();

            // Charger les cartes
            loadCards();
        });

    // Charger les données du tableau de bord (solde)

        async function loadDashboard() {
            try {
                const response = await fetch('";
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_dashboard");
        yield "');
                const stats = await response.json();

                // Mettre à jour le solde
                document.getElementById('cardBalance').textContent = stats.balance + ' €';

                // Stocker le solde dans le localStorage
                localStorage.setItem('userBalance', stats.balance);
            } catch (error) {
                console.error('Erreur chargement tableau de bord:', error);
                document.getElementById('cardBalance').textContent = '0 €';
            }
        }


      // Charger et afficher les cartes bancaires

      async function loadCards() {
          const cardsContainer = document.getElementById('cards-container');

          try {
              const response = await fetch('";
        // line 188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_cards");
        yield "');

              if (!response.ok) {
                  throw new Error('Erreur lors de la récupération des cartes');
              }

              const data = await response.json();

              if (!data.success || !data.data.length === 0) {
                  cardsContainer.innerHTML = '<p class=\"text-center text-muted\">Aucune carte enregistrée.</p>';
                  return;
              }

              cardsContainer.innerHTML = '';

              data.data.forEach(card => {
                  const cardElement = document.createElement('div');
                  cardElement.className = 'card-item-container border rounded mb-3';
                  cardElement.style.cursor = 'pointer';
                  cardElement.dataset.cardId = card.id;

                  const brand = card.card?.brand || 'visa';
                  const cardLogo = brand.toLowerCase().includes('master') 
                      ? 'https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg'
                      : 'https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg';

                  cardElement.innerHTML = `
                    <div class=\"p-3 d-flex justify-content-between align-items-center\">
                        <div class=\"d-flex align-items-center gap-3\">
                            <img src=\"\${cardLogo}\" width=\"35\" alt=\"\${brand}\">
                            <div>
                                <h6 class=\"mb-0\">\${brand.toUpperCase()} **** \${card.card.last4}</h6>
                                <small class=\"text-muted\">Exp: \${card.card.exp_month}/\${card.card.exp_year}</small>
                            </div>
                        </div>
                        <button class=\"btn btn-sm btn-outline-danger delete-btn\">
                            <i class=\"bi bi-trash3\"></i>
                        </button>
                    </div>
                    `;

                  cardsContainer.appendChild(cardElement);
              });

          } catch (error) {
              console.error('Erreur:', error);
              cardsContainer.innerHTML = '<p class=\"text-center text-danger\">Impossible de charger vos cartes.</p>';
          }

          setupDeleteHandlers();
          setupCardClickHandlers();
      }

        /**
         * Configurer les gestionnaires de suppression
         */
        function setupDeleteHandlers() {
            const cardsContainer = document.getElementById('cards-container');

            cardsContainer.addEventListener('click', function(e) {
                const deleteButton = e.target.closest('.delete-btn');

                if (deleteButton) {
                    e.preventDefault();
                    const cardElement = deleteButton.closest('.card-item-container');
                    const cardId = cardElement.dataset.cardId;

                    // Demander confirmation avant suppression
                    if (confirm('Êtes-vous sûr de vouloir supprimer cette carte ?')) {
                        deleteCard(cardId, cardElement);
                    }
                }
            });
        }

        /**
         * Configurer les clics sur les cartes pour navigation vers info
         */
        function setupCardClickHandlers() {
            const cardsContainer = document.getElementById('cards-container');
            cardsContainer.addEventListener('click', function(e) {
                const cardElement = e.target.closest('.card-item-container');
                const deleteButton = e.target.closest('.delete-btn');
                
                if (cardElement && !deleteButton) {
                    e.preventDefault();
                    const cardId = cardElement.dataset.cardId;
                    window.location.href = `/card/info?id=\${cardId}`;
                }
            });
        }
        function setupDeleteHandlers() {
            const cardsContainer = document.getElementById('cards-container');

            cardsContainer.addEventListener('click', function(e) {
                const deleteButton = e.target.closest('.delete-btn');

                if (deleteButton) {
                    e.preventDefault();
                    const cardElement = deleteButton.closest('.card-item-container');
                    const cardId = cardElement.dataset.cardId;

                    // Demander confirmation avant suppression
                    if (confirm('Êtes-vous sûr de vouloir supprimer cette carte ?')) {
                        deleteCard(cardId, cardElement);
                    }
                }
            });
        }

      // Supprimer une carte via l'API

        async function deleteCard(cardId, cardElement) {
            try {
                // APPEL API POUR SUPPRIMER UNE CARTE
                // Endpoint: DELETE /api/cards/{id}

                const response = await fetch(`/api/cards/\${cardId}`, {
                    method: 'DELETE'
                });

                if (!response.ok) {
                    throw new Error('La suppression a échoué.');
                }

                const data = await response.json();

                // Supprimer l'élément du DOM
                cardElement.remove();

                // Afficher un message si la liste est vide
                const cardsContainer = document.getElementById('cards-container');
                if (cardsContainer.children.length === 0) {
                    cardsContainer.innerHTML = '<p class=\"text-center text-muted\">Aucune carte enregistrée.</p>';
                }

                alert('Carte supprimée avec succès!');
            } catch (error) {
                console.error('Erreur de suppression:', error);
                alert(error.message);
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
        return "card/index.html.twig";
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
        return array (  411 => 188,  387 => 167,  361 => 144,  357 => 143,  350 => 139,  346 => 138,  339 => 134,  335 => 133,  328 => 129,  324 => 128,  317 => 124,  313 => 123,  306 => 119,  302 => 118,  295 => 114,  291 => 113,  284 => 109,  280 => 108,  269 => 100,  265 => 99,  257 => 94,  253 => 93,  245 => 88,  241 => 87,  233 => 82,  229 => 81,  221 => 76,  217 => 75,  209 => 70,  205 => 69,  197 => 64,  193 => 63,  184 => 57,  180 => 56,  167 => 46,  142 => 24,  131 => 15,  118 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes cartes - Budget App{% endblock %}

{% block head %}
<style>
.btn-primary {
    display : flex;
    justify-content : end;
}
</style>
{% endblock %}

{% block body %}
        <!--
         PAGE: MES CARTES
         Fonctionnalité: Gérer les cartes bancaires
         -->

   <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-credit-card text-primary\" style=\"font-size: 15px;\"></span>
                        Carte Bancaire
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container\">
            <!-- Cartes bancaires de l'utilisateur -->
            <h6 class=\"fw-semibold mb-3\">Mes Cartes</h6>
            <div id=\"cards-container\" class=\"vstack gap-3 mb-4\">
                <div class=\"text-center py-4\">
                    <div class=\"spinner-border text-primary\" role=\"status\">
                        <span class=\"visually-hidden\">Chargement...</span>
                    </div>
                    <p class=\"mt-2 text-muted\">Chargement de vos cartes...</p>
                </div>
            </div>

            <div class=\"d-grid gap-2 mb-4\">
                <a href=\"{{ path('app_card_new') }}\" class=\"btn btn-primary w-25\">
                    <i class=\"bi bi-plus-circle me-2\"></i>Ajouter une carte
                </a>
            </div>

            <hr class=\"my-4\">

            <h6 class=\"fw-semibold mb-3\">Banques populaires</h6>
            <div class=\"row g-3 mb-4\" id=\"creditcard\">
                <div class=\"col-6 col-md-3\">
                    <a href=\"{{ path('app_transfer_by_bank') }}\" class=\"bank-card\">
                        <img src=\"{{ asset('assets/images/icons8-visa-48.png') }}\">
                        <span>Global card</span>
                    </a>
                </div>

                <div class=\"col-6 col-md-3\">
                    <a href=\"{{ path('app_transfer_by_bank') }}\" class=\"bank-card\">
                        <img src=\"{{ asset('assets/images/Techcombank.png') }}\">
                        <span>Techcombank</span>
                    </a>
                </div>
                <div class=\"col-6 col-md-3\">
                    <a href=\"{{ path('app_transfer_by_bank') }}\" class=\"bank-card\">
                        <img src=\"{{ asset('assets/images/acbbank.png') }}\">
                        <span>ACB</span>
                    </a>
                </div>
                <div class=\"col-6 col-md-3\">
                    <a href=\"{{ path('app_transfer_by_bank') }}\" class=\"bank-card\">
                        <img src=\"{{ asset('assets/images/fivestarbank.jpeg') }}\">
                        <span>Five star bank</span>
                    </a>
                </div>
                <div class=\"col-6 col-md-3\">
                    <a href=\"{{ path('app_transfer_by_bank') }}\" class=\"bank-card\">
                        <img src=\"{{ asset('assets/images/citigroup.png') }}\">
                        <span>Citibank</span>
                    </a>
                </div>
                <div class=\"col-6 col-md-3\">
                    <a href=\"{{ path('app_transfer_by_bank') }}\" class=\"bank-card\">
                        <img src=\"{{ asset('assets/images/ICBC.png') }}\">
                        <span>ICBCBank</span>
                    </a>
                </div>
                <div class=\"col-6 col-md-3\">
                    <a href=\"{{ path('app_transfer_by_bank') }}\" class=\"bank-card\">
                        <img src=\"{{ asset('assets/images/chasebank.jpeg') }}\">
                        <span>Chasebank</span>
                    </a>
                </div>
                <div class=\"col-6 col-md-3\">
                    <a href=\"{{ path('app_transfer_by_bank') }}\" class=\"bank-card\">
                        <img src=\"{{ asset('assets/images/vietinbank.png') }}\">
                        <span>Vietinbank</span>
                    </a>
                </div>
            </div>
            <!-- Toutes les banques-->
            <h6 class=\"fw-semibold mb-3\">Toutes les banques (40)</h6>
            <div class=\"bank-list\">
                <a href=\"{{ path('app_transfer_by_bank') }}\" class=\"bank-item\">
                    <img src=\"{{ asset('assets/images/icons8-visa-48.png') }}\">
                    <span>Visa</span>
                </a>

                <a href=\"{{ path('app_transfer_by_bank') }}\" class=\"bank-item\">
                    <img src=\"{{ asset('assets/images/Techcombank.png') }}\">
                    <span>Techcombank</span>
                </a>

                <a href=\"{{ path('app_transfer_by_bank') }}\" class=\"bank-item\">
                    <img src=\"{{ asset('assets/images/acbbank.png') }}\">
                    <span>ACB</span>
                </a>

                <a href=\"{{ path('app_transfer_by_bank') }}\" class=\"bank-item\">
                    <img src=\"{{ asset('assets/images/fivestarbank.jpeg') }}\">
                    <span>Five star bank</span>
                </a>

                <a href=\"{{ path('app_transfer_by_bank') }}\" class=\"bank-item\">
                    <img src=\"{{ asset('assets/images/citigroup.png') }}\">
                    <span>Citibank</span>
                </a>

                <a href=\"{{ path('app_transfer_by_bank') }}\" class=\"bank-item\">
                    <img src=\"{{ asset('assets/images/ICBC.png') }}\">
                    <span>ICBCBank</span>
                </a>

                <a href=\"{{ path('app_transfer_by_bank') }}\" class=\"bank-item\">
                    <img src=\"{{ asset('assets/images/chasebank.jpeg') }}\">
                    <span>Chasebank</span>
                </a>

                <a href=\"{{ path('app_transfer_by_bank') }}\" class=\"bank-item\">
                    <img src=\"{{ asset('assets/images/vietinbank.png') }}\">
                    <span>Vietinbank</span>
                </a>
            </div>
        </div>
    </div>

    <script>

      // GESTION DU CHARGEMENT DES CARTES ET DU SOLDE

        document.addEventListener('DOMContentLoaded', function () {
            // Charger les données du tableau de bord
            loadDashboard();

            // Charger les cartes
            loadCards();
        });

    // Charger les données du tableau de bord (solde)

        async function loadDashboard() {
            try {
                const response = await fetch('{{ path('get_dashboard') }}');
                const stats = await response.json();

                // Mettre à jour le solde
                document.getElementById('cardBalance').textContent = stats.balance + ' €';

                // Stocker le solde dans le localStorage
                localStorage.setItem('userBalance', stats.balance);
            } catch (error) {
                console.error('Erreur chargement tableau de bord:', error);
                document.getElementById('cardBalance').textContent = '0 €';
            }
        }


      // Charger et afficher les cartes bancaires

      async function loadCards() {
          const cardsContainer = document.getElementById('cards-container');

          try {
              const response = await fetch('{{ path('get_cards') }}');

              if (!response.ok) {
                  throw new Error('Erreur lors de la récupération des cartes');
              }

              const data = await response.json();

              if (!data.success || !data.data.length === 0) {
                  cardsContainer.innerHTML = '<p class=\"text-center text-muted\">Aucune carte enregistrée.</p>';
                  return;
              }

              cardsContainer.innerHTML = '';

              data.data.forEach(card => {
                  const cardElement = document.createElement('div');
                  cardElement.className = 'card-item-container border rounded mb-3';
                  cardElement.style.cursor = 'pointer';
                  cardElement.dataset.cardId = card.id;

                  const brand = card.card?.brand || 'visa';
                  const cardLogo = brand.toLowerCase().includes('master') 
                      ? 'https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg'
                      : 'https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg';

                  cardElement.innerHTML = `
                    <div class=\"p-3 d-flex justify-content-between align-items-center\">
                        <div class=\"d-flex align-items-center gap-3\">
                            <img src=\"\${cardLogo}\" width=\"35\" alt=\"\${brand}\">
                            <div>
                                <h6 class=\"mb-0\">\${brand.toUpperCase()} **** \${card.card.last4}</h6>
                                <small class=\"text-muted\">Exp: \${card.card.exp_month}/\${card.card.exp_year}</small>
                            </div>
                        </div>
                        <button class=\"btn btn-sm btn-outline-danger delete-btn\">
                            <i class=\"bi bi-trash3\"></i>
                        </button>
                    </div>
                    `;

                  cardsContainer.appendChild(cardElement);
              });

          } catch (error) {
              console.error('Erreur:', error);
              cardsContainer.innerHTML = '<p class=\"text-center text-danger\">Impossible de charger vos cartes.</p>';
          }

          setupDeleteHandlers();
          setupCardClickHandlers();
      }

        /**
         * Configurer les gestionnaires de suppression
         */
        function setupDeleteHandlers() {
            const cardsContainer = document.getElementById('cards-container');

            cardsContainer.addEventListener('click', function(e) {
                const deleteButton = e.target.closest('.delete-btn');

                if (deleteButton) {
                    e.preventDefault();
                    const cardElement = deleteButton.closest('.card-item-container');
                    const cardId = cardElement.dataset.cardId;

                    // Demander confirmation avant suppression
                    if (confirm('Êtes-vous sûr de vouloir supprimer cette carte ?')) {
                        deleteCard(cardId, cardElement);
                    }
                }
            });
        }

        /**
         * Configurer les clics sur les cartes pour navigation vers info
         */
        function setupCardClickHandlers() {
            const cardsContainer = document.getElementById('cards-container');
            cardsContainer.addEventListener('click', function(e) {
                const cardElement = e.target.closest('.card-item-container');
                const deleteButton = e.target.closest('.delete-btn');
                
                if (cardElement && !deleteButton) {
                    e.preventDefault();
                    const cardId = cardElement.dataset.cardId;
                    window.location.href = `/card/info?id=\${cardId}`;
                }
            });
        }
        function setupDeleteHandlers() {
            const cardsContainer = document.getElementById('cards-container');

            cardsContainer.addEventListener('click', function(e) {
                const deleteButton = e.target.closest('.delete-btn');

                if (deleteButton) {
                    e.preventDefault();
                    const cardElement = deleteButton.closest('.card-item-container');
                    const cardId = cardElement.dataset.cardId;

                    // Demander confirmation avant suppression
                    if (confirm('Êtes-vous sûr de vouloir supprimer cette carte ?')) {
                        deleteCard(cardId, cardElement);
                    }
                }
            });
        }

      // Supprimer une carte via l'API

        async function deleteCard(cardId, cardElement) {
            try {
                // APPEL API POUR SUPPRIMER UNE CARTE
                // Endpoint: DELETE /api/cards/{id}

                const response = await fetch(`/api/cards/\${cardId}`, {
                    method: 'DELETE'
                });

                if (!response.ok) {
                    throw new Error('La suppression a échoué.');
                }

                const data = await response.json();

                // Supprimer l'élément du DOM
                cardElement.remove();

                // Afficher un message si la liste est vide
                const cardsContainer = document.getElementById('cards-container');
                if (cardsContainer.children.length === 0) {
                    cardsContainer.innerHTML = '<p class=\"text-center text-muted\">Aucune carte enregistrée.</p>';
                }

                alert('Carte supprimée avec succès!');
            } catch (error) {
                console.error('Erreur de suppression:', error);
                alert(error.message);
            }
        }
    </script>
{% endblock %}

", "card/index.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/card/index.html.twig");
    }
}
