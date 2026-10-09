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

/* bill/index.html.twig */
class __TwigTemplate_28f8e5d7ffd8fc08743600e1310ea127 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bill/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bill/index.html.twig"));

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

        yield "Factures - Budget App";
        
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
         PAGE: FACTURES
         Fonctionnalité: Gérer et payer les factures
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
                        <span class=\"bi bi-receipt text-warning\" style=\"font-size: 15px;\"></span>
                        Factures
                    </li>
                </ol>
            </nav>
        </div>

        <!-- Contenu principal -->
        <div class=\"container py-2\">
                <!--
                 BARRE DE RECHERCHE
                 Permet de rechercher une facture
                 -->
            <div class=\"d-flex align-items-center mb-3 gap-1\">
                <div class=\"position-relative flex-grow-1 w-100\">
                    <i class=\"bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 fw-bold text-muted\"></i>
                    <input type=\"text\" id=\"billsearch\" class=\"form-control ps-5 py-2 border-1 rounded-3\"
                        placeholder=\"Rechercher une facture\">
                </div>
                <!-- Bouton pour scanner un QR code -->
                <div class=\"bg-white rounded-3 d-flex align-items-center justify-content-center\"
                    style=\"width: 42px; height: 42px; cursor: pointer;\" id=\"scanQrBtn\">
                    <i class=\"bi bi-qr-code-scan fs-3 text-dark\"></i>
                </div>
            </div>

                <!--
                 SECTION: FACTURES ENREGISTRÉES
                 Liste des factures en attente de paiement
                 -->
            <section class=\"mb-4\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <h6 class=\"fw-semibold mb-0\">Factures enregistrées</h6>
                    <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bill");
        yield "\" class=\"text-primary text-decoration-none small\">Tout voir</a>
                </div>

                <div class=\"bg-white rounded-3\">
                    <!-- Facture Électricité -->
                    <div class=\"d-flex align-items-center p-3 border-bottom bill-item\">
                        <div class=\"icon-box text-warning me-3\">
                            <i class=\"bi bi-lightbulb-fill fs-4\"></i>
                        </div>
                        <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_electricity");
        yield "\" class=\"flex-grow-1 text-decoration-none\">
                            <h6 class=\"mb-0 fw-bold small text-dark\">Fournisseur électrique</h6>
                            <p class=\"mb-0 text-muted extra-small\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 62), "fullName", [], "any", true, true, false, 62)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "fullName", [], "any", false, false, false, 62), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</p>
                            <p class=\"mb-0 text-muted extra-small\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 63), "phone", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "phone", [], "any", false, false, false, 63), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</p>
                        </a>
                        <div class=\"text-danger extra-small\">Paiement Dû</div>
                    </div>

                    <!-- Facture Eau -->
                    <div class=\"d-flex align-items-center p-3 border-bottom bill-item\">
                        <div class=\"icon-box text-primary me-3\">
                            <i class=\"bi bi-droplet-fill fs-4\"></i>
                        </div>
                        <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_water");
        yield "\" class=\"flex-grow-1 text-decoration-none\">
                            <h6 class=\"mb-0 fw-bold small text-dark\">Fournisseur d'eau</h6>
                            <p class=\"mb-0 text-muted extra-small\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 75), "fullName", [], "any", true, true, false, 75)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "fullName", [], "any", false, false, false, 75), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</p>
                            <p class=\"mb-0 text-muted extra-small\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 76), "phone", [], "any", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "phone", [], "any", false, false, false, 76), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</p>
                        </a>
                        <div class=\"text-muted extra-small\">À payer</div>
                    </div>

                    <!-- Facture Internet -->
                    <div class=\"d-flex align-items-center p-3 bill-item\">
                        <div class=\"icon-box text-primary me-3\">
                            <i class=\"bi bi-wifi fs-4\"></i>
                        </div>
                        <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_internet");
        yield "\" class=\"flex-grow-1 text-decoration-none\">
                            <h6 class=\"mb-0 fw-bold small text-dark\">Opérateur Telecom</h6>
                            <p class=\"mb-0 text-muted extra-small\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 88), "fullName", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "fullName", [], "any", false, false, false, 88), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</p>
                            <p class=\"mb-0 text-muted extra-small\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 89), "phone", [], "any", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "phone", [], "any", false, false, false, 89), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</p>
                        </a>
                        <div class=\"text-primary extra-small\">Paiement Intégral</div>
                    </div>
                </div>
            </section>

                <!-- 
                 SECTION: LIENS UTILES
                 Accès rapide aux statistiques et gestion des dépenses
                  -->
            <section class=\"mb-4\">
                <div class=\"list-group gap-2 border-0\">
                    <!-- Lien vers les statistiques -->
                    <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stats_view");
        yield "\"
                        class=\"list-group-item list-group-item-action d-flex align-items-center border-1 rounded-2 p-2 shadow-sm\">
                        <div class=\"icon-box text-danger me-3\">
                            <i class=\"bi bi-pie-chart-fill fs-5\"></i>
                        </div>
                        <div class=\"flex-grow-1\">
                            <h6 class=\"mb-0 fw-bold small\">Voir les Statistiques</h6>
                            <small class=\"text-muted\">Suivez vos dépenses mensuelles</small>
                        </div>
                        <i class=\"bi bi-chevron-right text-muted\"></i>
                    </a>
                    
                    <!-- Lien vers les deals -->
                    <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deals");
        yield "\"
                        class=\"list-group-item list-group-item-action d-flex align-items-center border-1 rounded-2 p-2 shadow-sm\">
                        <div class=\"icon-box text-primary me-3\">
                            <i class=\"bi bi-gear-wide-connected fs-5\"></i>
                        </div>
                        <div class=\"flex-grow-1\">
                            <h6 class=\"mb-0 fw-bold small\">Gérez vos dépenses</h6>
                            <small class=\"text-muted\">Acheter Malins avec Budget App</small>
                        </div>
                        <i class=\"bi bi-chevron-right text-muted\"></i>
                    </a>
                </div>
            </section>

            <!-- 
                 SECTION: SERVICE EXCEPTIONNEL
                 Accès rapide aux services de paiement
             -->
            <section class=\"mb-4\">
                <h6 class=\"fw-bold mb-3\">Service exceptionnel</h6>
                <div class=\"row g-3\">
                    <div class=\"col-6\">
                        <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_electricity");
        yield "\" class=\"text-decoration-none\">
                            <div class=\"bg-white p-2 rounded-3 shadow-sm d-flex align-items-center\">
                                <div class=\"icon-box text-warning me-2\">
                                    <i class=\"bi bi-lightbulb-fill fs-3\"></i>
                                </div>
                                <span class=\"small fw-medium text-dark\">Électricité</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-6\">
                        <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_water");
        yield "\" class=\"text-decoration-none\">
                            <div class=\"bg-white p-2 rounded-3 shadow-sm d-flex align-items-center\">
                                <div class=\"icon-box text-primary me-2 fs-3\">
                                    <i class=\"bi bi-droplet-fill\"></i>
                                </div>
                                <span class=\"small fw-medium text-dark\">Eau</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-6\">
                        <a href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_internet");
        yield "\" class=\"text-decoration-none\">
                            <div class=\"bg-white p-2 rounded-3 shadow-sm d-flex align-items-center\">
                                <div class=\"icon-box me-2 fs-3 text-success\">
                                    <i class=\"bi bi-wifi\"></i>
                                </div>
                                <span class=\"small fw-medium text-dark\">Internet</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-6\">
                        <a href=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_mobile");
        yield "\" class=\"text-decoration-none\">
                            <div class=\"bg-white p-2 rounded-3 shadow-sm d-flex align-items-center\">
                                <div class=\"icon-box text-info me-2 fs-3\">
                                    <i class=\"bi bi-phone\"></i>
                                </div>
                                <span class=\"small fw-medium text-dark\">Mobile</span>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <!-- 
                 SECTION: LISTE DES SERVICES
                 Grille des services disponibles
            -->
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                <p class=\"service-title fw-semibold\">Liste des services</p>
                <a href=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bill");
        yield "\" class=\"text-primary small\">Tout voir</a>
            </div>
            <div class=\"row row-cols-4 row-cols-md-4 g-3\">
                <!-- Mobile -->
                <div class=\"col category-item\">
                    <div class=\"category-icon\" style=\"background-color: #e1f5fe;\">
                        <a href=\"";
        // line 192
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_mobile");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"bi bi-phone text-primary\"></i>
                        </a>
                    </div>
                    <p class=\"small\">Mobile</p>
                </div>
                <!-- Internet -->
                <div class=\"col category-item\">
                    <div class=\"category-icon\" style=\"background-color: #98c1ea;\">
                        <a href=\"";
        // line 201
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_internet");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"bi bi-wifi text-primary\"></i>
                        </a>
                    </div>
                    <p class=\"small\">Internet</p>
                </div>
                <!-- Factures -->
                <div class=\"col category-item\">
                    <div class=\"category-icon\" style=\"background-color: #bfe4df;\">
                        <a href=\"";
        // line 210
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bill");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"bi bi-receipt text-warning\"></i>
                        </a>
                    </div>
                    <p class=\"small\">Factures</p>
                </div>
                <!-- Electricité -->
                <div class=\"col category-item\">
                    <div class=\"category-icon\" style=\"background-color: #e1f5fe;\">
                        <a href=\"";
        // line 219
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_electricity");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"bi bi-lightning-fill text-warning\"></i>
                        </a>
                    </div>
                    <p class=\"small\">Electricité</p>
                </div>
                <!-- Film -->
                <div class=\"col category-item\">
                    <div class=\"category-icon\" style=\"background-color: #d6d5c4;\">
                        <a href=\"";
        // line 228
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_film");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"bi bi-film text-danger\"></i>
                        </a>
                    </div>
                    <p class=\"small\">Film</p>
                </div>
                <!-- Eau -->
                <div class=\"col category-item\">
                    <div class=\"category-icon\" style=\"background-color: #d9dcdf;\">
                        <a href=\"";
        // line 237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_water");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"bi bi-droplet-fill text-primary\"></i>
                        </a>
                    </div>
                    <p class=\"small\">Facture d'eau</p>
                </div>
                <!-- Réductions -->
                <div class=\"col category-item\">
                    <div class=\"category-icon\" style=\"background-color: #d5c4bc;\">
                        <a href=\"";
        // line 246
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rewards");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"bi bi-wallet2 text-danger\"></i>
                        </a>
                    </div>
                    <p class=\"small\">Réductions</p>
                </div>
                <!-- Marché -->
                <div class=\"col category-item\">
                    <div class=\"category-icon\" style=\"background-color: #e0ecf3;\">
                        <a href=\"";
        // line 255
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_market");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"bi bi-cart2 text-danger\"></i>
                        </a>
                    </div>
                    <p class=\"small\">Marchés</p>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class=\"footer py-2\">
            <div class=\"d-flex justify-content-around align-items-center\">
                <a href=\"";
        // line 267
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"active-link\">
                    <i class=\"bi bi-house-door-fill\"></i>
                    <span>Accueil</span>
                </a>
                <a href=\"";
        // line 271
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bank_history");
        yield "\" class=\"footer-link\">
                    <i class=\"bi bi-clock-history\"></i>
                    <span>Historique</span>
                </a>
                <a href=\"";
        // line 275
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_qr");
        yield "\" class=\"footer-link\">
                    <i class=\"bi bi-qr-code-scan\"></i>
                    <span>QR</span>
                </a>
                <a href=\"";
        // line 279
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rewards");
        yield "\" class=\"footer-link\">
                    <i class=\"bi bi-gift\"></i>
                    <span>Récompenses</span>
                </a>
                <a href=\"";
        // line 283
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"footer-link\">
                    <i class=\"bi bi-person\"></i>
                    <span>Profil</span>
                </a>
            </div>
        </footer>
        
        <script>
                // GESTION DU CHARGEMENT DE LA PAGE
             
            document.addEventListener('DOMContentLoaded', function () {
                // Initialiser la recherche
                initSearch();
                
                // Initialiser le bouton QR
                initQrScanner();
            });

            // Fonctionnalité de recherche de factures
            // Filtre les factures et services en temps réel
            
            function initSearch() {
                const searchInput = document.getElementById('billsearch');

                if (searchInput) {
                    searchInput.addEventListener('input', function (e) {
                        const term = e.target.value.toLowerCase();

                        // Filtrer les factures enregistrées
                        const bills = document.querySelectorAll('.bill-item');
                        bills.forEach(bill => {
                            const text = bill.innerText.toLowerCase();
                            bill.style.display = text.includes(term) ? 'flex' : 'none';
                        });

                        // Filtrer la liste des services
                        const services = document.querySelectorAll('.category-item');
                        services.forEach(service => {
                            const text = service.innerText.toLowerCase();
                            service.style.display = text.includes(term) ? 'block' : 'none';
                        });
                    });
                }
            }
            
            // stion du scan QR Code
            // vre la caméra pour scanner un code QR de facture
            
            function initQrScanner() {
                const qrBtn = document.getElementById('scanQrBtn');
                
                if (qrBtn) {
                    qrBtn.addEventListener('click', function () {
                        // SCAN QR CODE POUR FACTURE
                        // Note: À implémenter avec une bibliothèque
                        // comme Instascan ou html5-qrcode
                        
                        alert(\"Ouverture de l'appareil photo pour scanner le code QR de la facture...\");
                        
                        // Exemple d'implémentation future:
                        // const html5QrCode = new Html5Qrcode(\"reader\");
                        // html5QrCode.start(
                        //   { facingMode: \"environment\" }, 
                        //   { fps: 10, qrbox: 250 },
                        //   onScanSuccess
                        // );
                    });
                }
            }

            
             // arger les factures depuis l'API
             // implémenter pour récupérer dynamiquement les factures
             
            async function loadBills() {
                try {
                    // APPEL API POUR LES FACTURES
                    // Endpoint à créer: /api/bills
                    // const response = await fetch('";
        // line 361
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_bills");
        yield "');
                    // const bills = await response.json();
                    // renderBills(bills);
                } catch (error) {
                    console.error('Erreur chargement factures:', error);
                }
            }
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
        return "bill/index.html.twig";
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
        return array (  550 => 361,  469 => 283,  462 => 279,  455 => 275,  448 => 271,  441 => 267,  426 => 255,  414 => 246,  402 => 237,  390 => 228,  378 => 219,  366 => 210,  354 => 201,  342 => 192,  333 => 186,  312 => 168,  299 => 158,  286 => 148,  273 => 138,  248 => 116,  232 => 103,  215 => 89,  211 => 88,  206 => 86,  193 => 76,  189 => 75,  184 => 73,  171 => 63,  167 => 62,  162 => 60,  150 => 51,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Factures - Budget App{% endblock %}

{% block body %}
        <!-- 
         PAGE: FACTURES
         Fonctionnalité: Gérer et payer les factures
          -->

    <div class=\"container\">
        <!-- Fil d'Arianne -->
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-receipt text-warning\" style=\"font-size: 15px;\"></span>
                        Factures
                    </li>
                </ol>
            </nav>
        </div>

        <!-- Contenu principal -->
        <div class=\"container py-2\">
                <!--
                 BARRE DE RECHERCHE
                 Permet de rechercher une facture
                 -->
            <div class=\"d-flex align-items-center mb-3 gap-1\">
                <div class=\"position-relative flex-grow-1 w-100\">
                    <i class=\"bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 fw-bold text-muted\"></i>
                    <input type=\"text\" id=\"billsearch\" class=\"form-control ps-5 py-2 border-1 rounded-3\"
                        placeholder=\"Rechercher une facture\">
                </div>
                <!-- Bouton pour scanner un QR code -->
                <div class=\"bg-white rounded-3 d-flex align-items-center justify-content-center\"
                    style=\"width: 42px; height: 42px; cursor: pointer;\" id=\"scanQrBtn\">
                    <i class=\"bi bi-qr-code-scan fs-3 text-dark\"></i>
                </div>
            </div>

                <!--
                 SECTION: FACTURES ENREGISTRÉES
                 Liste des factures en attente de paiement
                 -->
            <section class=\"mb-4\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <h6 class=\"fw-semibold mb-0\">Factures enregistrées</h6>
                    <a href=\"{{ path('app_bill') }}\" class=\"text-primary text-decoration-none small\">Tout voir</a>
                </div>

                <div class=\"bg-white rounded-3\">
                    <!-- Facture Électricité -->
                    <div class=\"d-flex align-items-center p-3 border-bottom bill-item\">
                        <div class=\"icon-box text-warning me-3\">
                            <i class=\"bi bi-lightbulb-fill fs-4\"></i>
                        </div>
                        <a href=\"{{ path('app_services_electricity') }}\" class=\"flex-grow-1 text-decoration-none\">
                            <h6 class=\"mb-0 fw-bold small text-dark\">Fournisseur électrique</h6>
                            <p class=\"mb-0 text-muted extra-small\">{{ app.user.fullName|default('Non défini') }}</p>
                            <p class=\"mb-0 text-muted extra-small\">{{ app.user.phone|default('Non défini') }}</p>
                        </a>
                        <div class=\"text-danger extra-small\">Paiement Dû</div>
                    </div>

                    <!-- Facture Eau -->
                    <div class=\"d-flex align-items-center p-3 border-bottom bill-item\">
                        <div class=\"icon-box text-primary me-3\">
                            <i class=\"bi bi-droplet-fill fs-4\"></i>
                        </div>
                        <a href=\"{{ path('app_services_water') }}\" class=\"flex-grow-1 text-decoration-none\">
                            <h6 class=\"mb-0 fw-bold small text-dark\">Fournisseur d'eau</h6>
                            <p class=\"mb-0 text-muted extra-small\">{{ app.user.fullName|default('Non défini') }}</p>
                            <p class=\"mb-0 text-muted extra-small\">{{ app.user.phone|default('Non défini') }}</p>
                        </a>
                        <div class=\"text-muted extra-small\">À payer</div>
                    </div>

                    <!-- Facture Internet -->
                    <div class=\"d-flex align-items-center p-3 bill-item\">
                        <div class=\"icon-box text-primary me-3\">
                            <i class=\"bi bi-wifi fs-4\"></i>
                        </div>
                        <a href=\"{{ path('app_services_internet') }}\" class=\"flex-grow-1 text-decoration-none\">
                            <h6 class=\"mb-0 fw-bold small text-dark\">Opérateur Telecom</h6>
                            <p class=\"mb-0 text-muted extra-small\">{{ app.user.fullName|default('Non défini') }}</p>
                            <p class=\"mb-0 text-muted extra-small\">{{ app.user.phone|default('Non défini') }}</p>
                        </a>
                        <div class=\"text-primary extra-small\">Paiement Intégral</div>
                    </div>
                </div>
            </section>

                <!-- 
                 SECTION: LIENS UTILES
                 Accès rapide aux statistiques et gestion des dépenses
                  -->
            <section class=\"mb-4\">
                <div class=\"list-group gap-2 border-0\">
                    <!-- Lien vers les statistiques -->
                    <a href=\"{{ path('app_stats_view') }}\"
                        class=\"list-group-item list-group-item-action d-flex align-items-center border-1 rounded-2 p-2 shadow-sm\">
                        <div class=\"icon-box text-danger me-3\">
                            <i class=\"bi bi-pie-chart-fill fs-5\"></i>
                        </div>
                        <div class=\"flex-grow-1\">
                            <h6 class=\"mb-0 fw-bold small\">Voir les Statistiques</h6>
                            <small class=\"text-muted\">Suivez vos dépenses mensuelles</small>
                        </div>
                        <i class=\"bi bi-chevron-right text-muted\"></i>
                    </a>
                    
                    <!-- Lien vers les deals -->
                    <a href=\"{{ path('app_deals') }}\"
                        class=\"list-group-item list-group-item-action d-flex align-items-center border-1 rounded-2 p-2 shadow-sm\">
                        <div class=\"icon-box text-primary me-3\">
                            <i class=\"bi bi-gear-wide-connected fs-5\"></i>
                        </div>
                        <div class=\"flex-grow-1\">
                            <h6 class=\"mb-0 fw-bold small\">Gérez vos dépenses</h6>
                            <small class=\"text-muted\">Acheter Malins avec Budget App</small>
                        </div>
                        <i class=\"bi bi-chevron-right text-muted\"></i>
                    </a>
                </div>
            </section>

            <!-- 
                 SECTION: SERVICE EXCEPTIONNEL
                 Accès rapide aux services de paiement
             -->
            <section class=\"mb-4\">
                <h6 class=\"fw-bold mb-3\">Service exceptionnel</h6>
                <div class=\"row g-3\">
                    <div class=\"col-6\">
                        <a href=\"{{ path('app_services_electricity') }}\" class=\"text-decoration-none\">
                            <div class=\"bg-white p-2 rounded-3 shadow-sm d-flex align-items-center\">
                                <div class=\"icon-box text-warning me-2\">
                                    <i class=\"bi bi-lightbulb-fill fs-3\"></i>
                                </div>
                                <span class=\"small fw-medium text-dark\">Électricité</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-6\">
                        <a href=\"{{ path('app_services_water') }}\" class=\"text-decoration-none\">
                            <div class=\"bg-white p-2 rounded-3 shadow-sm d-flex align-items-center\">
                                <div class=\"icon-box text-primary me-2 fs-3\">
                                    <i class=\"bi bi-droplet-fill\"></i>
                                </div>
                                <span class=\"small fw-medium text-dark\">Eau</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-6\">
                        <a href=\"{{ path('app_services_internet') }}\" class=\"text-decoration-none\">
                            <div class=\"bg-white p-2 rounded-3 shadow-sm d-flex align-items-center\">
                                <div class=\"icon-box me-2 fs-3 text-success\">
                                    <i class=\"bi bi-wifi\"></i>
                                </div>
                                <span class=\"small fw-medium text-dark\">Internet</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-6\">
                        <a href=\"{{ path('app_services_mobile') }}\" class=\"text-decoration-none\">
                            <div class=\"bg-white p-2 rounded-3 shadow-sm d-flex align-items-center\">
                                <div class=\"icon-box text-info me-2 fs-3\">
                                    <i class=\"bi bi-phone\"></i>
                                </div>
                                <span class=\"small fw-medium text-dark\">Mobile</span>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <!-- 
                 SECTION: LISTE DES SERVICES
                 Grille des services disponibles
            -->
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                <p class=\"service-title fw-semibold\">Liste des services</p>
                <a href=\"{{ path('app_bill') }}\" class=\"text-primary small\">Tout voir</a>
            </div>
            <div class=\"row row-cols-4 row-cols-md-4 g-3\">
                <!-- Mobile -->
                <div class=\"col category-item\">
                    <div class=\"category-icon\" style=\"background-color: #e1f5fe;\">
                        <a href=\"{{ path('app_services_mobile') }}\" class=\"text-decoration-none\">
                            <i class=\"bi bi-phone text-primary\"></i>
                        </a>
                    </div>
                    <p class=\"small\">Mobile</p>
                </div>
                <!-- Internet -->
                <div class=\"col category-item\">
                    <div class=\"category-icon\" style=\"background-color: #98c1ea;\">
                        <a href=\"{{ path('app_services_internet') }}\" class=\"text-decoration-none\">
                            <i class=\"bi bi-wifi text-primary\"></i>
                        </a>
                    </div>
                    <p class=\"small\">Internet</p>
                </div>
                <!-- Factures -->
                <div class=\"col category-item\">
                    <div class=\"category-icon\" style=\"background-color: #bfe4df;\">
                        <a href=\"{{ path('app_bill') }}\" class=\"text-decoration-none\">
                            <i class=\"bi bi-receipt text-warning\"></i>
                        </a>
                    </div>
                    <p class=\"small\">Factures</p>
                </div>
                <!-- Electricité -->
                <div class=\"col category-item\">
                    <div class=\"category-icon\" style=\"background-color: #e1f5fe;\">
                        <a href=\"{{ path('app_services_electricity') }}\" class=\"text-decoration-none\">
                            <i class=\"bi bi-lightning-fill text-warning\"></i>
                        </a>
                    </div>
                    <p class=\"small\">Electricité</p>
                </div>
                <!-- Film -->
                <div class=\"col category-item\">
                    <div class=\"category-icon\" style=\"background-color: #d6d5c4;\">
                        <a href=\"{{ path('app_services_film') }}\" class=\"text-decoration-none\">
                            <i class=\"bi bi-film text-danger\"></i>
                        </a>
                    </div>
                    <p class=\"small\">Film</p>
                </div>
                <!-- Eau -->
                <div class=\"col category-item\">
                    <div class=\"category-icon\" style=\"background-color: #d9dcdf;\">
                        <a href=\"{{ path('app_services_water') }}\" class=\"text-decoration-none\">
                            <i class=\"bi bi-droplet-fill text-primary\"></i>
                        </a>
                    </div>
                    <p class=\"small\">Facture d'eau</p>
                </div>
                <!-- Réductions -->
                <div class=\"col category-item\">
                    <div class=\"category-icon\" style=\"background-color: #d5c4bc;\">
                        <a href=\"{{ path('app_rewards') }}\" class=\"text-decoration-none\">
                            <i class=\"bi bi-wallet2 text-danger\"></i>
                        </a>
                    </div>
                    <p class=\"small\">Réductions</p>
                </div>
                <!-- Marché -->
                <div class=\"col category-item\">
                    <div class=\"category-icon\" style=\"background-color: #e0ecf3;\">
                        <a href=\"{{ path('app_market') }}\" class=\"text-decoration-none\">
                            <i class=\"bi bi-cart2 text-danger\"></i>
                        </a>
                    </div>
                    <p class=\"small\">Marchés</p>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class=\"footer py-2\">
            <div class=\"d-flex justify-content-around align-items-center\">
                <a href=\"{{ path('app_home') }}\" class=\"active-link\">
                    <i class=\"bi bi-house-door-fill\"></i>
                    <span>Accueil</span>
                </a>
                <a href=\"{{ path('app_bank_history') }}\" class=\"footer-link\">
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
                <a href=\"{{ path('app_profile') }}\" class=\"footer-link\">
                    <i class=\"bi bi-person\"></i>
                    <span>Profil</span>
                </a>
            </div>
        </footer>
        
        <script>
                // GESTION DU CHARGEMENT DE LA PAGE
             
            document.addEventListener('DOMContentLoaded', function () {
                // Initialiser la recherche
                initSearch();
                
                // Initialiser le bouton QR
                initQrScanner();
            });

            // Fonctionnalité de recherche de factures
            // Filtre les factures et services en temps réel
            
            function initSearch() {
                const searchInput = document.getElementById('billsearch');

                if (searchInput) {
                    searchInput.addEventListener('input', function (e) {
                        const term = e.target.value.toLowerCase();

                        // Filtrer les factures enregistrées
                        const bills = document.querySelectorAll('.bill-item');
                        bills.forEach(bill => {
                            const text = bill.innerText.toLowerCase();
                            bill.style.display = text.includes(term) ? 'flex' : 'none';
                        });

                        // Filtrer la liste des services
                        const services = document.querySelectorAll('.category-item');
                        services.forEach(service => {
                            const text = service.innerText.toLowerCase();
                            service.style.display = text.includes(term) ? 'block' : 'none';
                        });
                    });
                }
            }
            
            // stion du scan QR Code
            // vre la caméra pour scanner un code QR de facture
            
            function initQrScanner() {
                const qrBtn = document.getElementById('scanQrBtn');
                
                if (qrBtn) {
                    qrBtn.addEventListener('click', function () {
                        // SCAN QR CODE POUR FACTURE
                        // Note: À implémenter avec une bibliothèque
                        // comme Instascan ou html5-qrcode
                        
                        alert(\"Ouverture de l'appareil photo pour scanner le code QR de la facture...\");
                        
                        // Exemple d'implémentation future:
                        // const html5QrCode = new Html5Qrcode(\"reader\");
                        // html5QrCode.start(
                        //   { facingMode: \"environment\" }, 
                        //   { fps: 10, qrbox: 250 },
                        //   onScanSuccess
                        // );
                    });
                }
            }

            
             // arger les factures depuis l'API
             // implémenter pour récupérer dynamiquement les factures
             
            async function loadBills() {
                try {
                    // APPEL API POUR LES FACTURES
                    // Endpoint à créer: /api/bills
                    // const response = await fetch('{{ path('get_bills') }}');
                    // const bills = await response.json();
                    // renderBills(bills);
                } catch (error) {
                    console.error('Erreur chargement factures:', error);
                }
            }
        </script>
    </div>
{% endblock %}

", "bill/index.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/bill/index.html.twig");
    }
}
