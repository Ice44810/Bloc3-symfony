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

/* market/index.html.twig */
class __TwigTemplate_d143009dbd10999f7ac6d9a1144d8c2e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "market/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "market/index.html.twig"));

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

        yield "Marché - Budget App";
        
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
         PAGE: MARCHÉ / SHOPPING
         Fonctionnalité: Découvrir les marchands et offres spéciales
     -->

    <!-- HEADER -->
    <div class=\"container\">
        <!-- Fil d'Arianne -->
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-cart4 text-warning\" style=\"font-size: 15px;\"></span>
                        Shopping
                    </li>
                </ol>
            </nav>
        </div>

        <!--
             BARRE DE RECHERCHE
             Pour rechercher des produits ou marchands
         -->
        <div class=\"search-bar position-relative px-3 mb-3\">
            <input type=\"text\" class=\"form-control rounded-3 fs-6 ps-5\" 
                   placeholder=\"Rechercher des produits...\" 
                   id=\"marketSearch\"
                   style=\"height: 50px;\" />
            <i class=\"bi bi-search position-absolute top-50 start-0 translate-middle-y ms-4 text-muted\"></i>
        </div>

        <!--
             SCROLL CONTAINER: OFFRES SPECIALES
             Carrousel horizontal des offres des marchands
         -->
        <div class=\"scroll-container px-2\">
            <!-- Carte: Electronique -->
            <div class=\"market-card-item px-3\">
                <div class=\"card rounded-4 border-0 p-3 shadow-sm\"
                    style=\"background-color: #68c0d1; min-height: 160px; width: 300px;\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"text-center\">
                            <img src=\"/assets/images/banner5.jpg\" alt=\"Mode\" class=\"rounded-3 bg-white\"
                                style=\"width: 60px; height: 60px; object-fit: contain;\">
                            <p class=\"small mb-0 fw-bold mt-1 text-dark\">Electronique</p>
                        </div>
                        <div class=\"text-end\">
                            <h5 class=\"fw-bold mb-2 text-dark\">ACHATS EN<br>LIGNE</h5>
                            <button class=\"btn btn-sm btn-dark rounded-pill px-3\">Plus</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte: Amazon -->
            <div class=\"market-card-item\">
                <div class=\"card rounded-4 border-0 p-3 shadow-sm\"
                    style=\"background-color: #131921; min-height: 160px; width: 300px;\">
                    <div class=\"d-flex justify-content-between align-items-center text-white\">
                        <div>
                            <i class=\"bi bi-amazon fs-1 text-warning\"></i>
                            <p class=\"small mb-0 fw-bold\">Amazon</p>
                        </div>
                        <div class=\"text-end\">
                            <h6 class=\"fw-bold mb-2\">PRIME DAY<br>DISPONIBLE</h6>
                            <a href=\"https://www.amazon.fr\" target=\"_blank\"
                                class=\"btn btn-sm btn-warning rounded-pill px-3 fw-bold\">Plus</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte: FNAC -->
            <div class=\"market-card-item\">
                <div class=\"card rounded-4 border-0 p-3 shadow-sm\"
                    style=\"background-color: #e1bc2a; min-height: 160px; width: 300px;\">
                    <div class=\"d-flex justify-content-between align-items-center text-dark\">
                        <div class=\"text-center\">
                            <img src=\"/assets/images/logofnac.png\" alt=\"FNAC\" class=\"rounded-3 bg-white p-1\"
                                style=\"width: 50px;\">
                            <p class=\"small mb-0 fw-bold mt-1\">FNAC</p>
                        </div>
                        <div class=\"text-end\">
                            <h5 class=\"fw-bold mb-2\">OFFRES<br>ADHÉRENTS</h5>
                            <a href=\"https://www.fnac.com\" target=\"_blank\"
                                class=\"btn btn-sm btn-dark rounded-pill px-3\">Plus</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte: Cdiscount -->
            <div class=\"market-card-item\">
                <div class=\"card rounded-4 border-0 p-3 shadow-sm\"
                    style=\"background-color: #3142ac; min-height: 160px; width: 300px;\">
                    <div class=\"d-flex justify-content-between align-items-center text-white\">
                        <div class=\"text-center\">
                            <img src=\"/assets/images/logocdiscount.png\" alt=\"Cdiscount\"
                                style=\"width: 100px; background-color: white;\" class=\"rounded-3 p-1\">
                            <p class=\"small mb-0 fw-bold mt-1\">Cdiscount</p>
                        </div>
                        <div class=\"text-end\">
                            <h5 class=\"fw-bold mb-2\">Ventes<br>Flash</h5>
                            <a href=\"https://www.cdiscount.com\" target=\"_blank\"
                                class=\"btn btn-sm btn-light text-primary rounded-pill px-3 fw-bold\">Plus</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte: Boulanger -->
            <div class=\"market-card-item\">
                <div class=\"card rounded-4 border-0 p-3 shadow-sm\"
                    style=\"background-color: #e38556; min-height: 160px; width: 300px;\">
                    <div class=\"d-flex justify-content-between align-items-center text-white\">
                        <div class=\"text-center\">
                            <img src=\"/assets/images/logoboulanger.png\" alt=\"Boulanger\"
                                style=\"width: 100px; background-color: white;\" class=\"rounded-3 p-1\">
                            <p class=\"small mb-0 fw-bold mt-1\">Boulanger</p>
                        </div>
                        <div class=\"text-end\">
                            <h5 class=\"fw-bold mb-2\">Ventes<br>Flash</h5>
                            <a href=\"https://www.boulanger.com\" target=\"_blank\"
                                class=\"btn btn-sm btn-light text-primary rounded-pill px-3 fw-bold\">Plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Indicateurs de scroll (points) -->
        <div class=\"scroll-dots d-flex justify-content-center gap-2\">
            <div class=\"dot active\"></div>
            <div class=\"dot\"></div>
            <div class=\"dot\"></div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class=\"footer py-2\">
        <div class=\"d-flex justify-content-around align-items-center\">
            <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"active-link\">
                <i class=\"bi bi-house-door-fill\"></i>
                <span>Accueil</span>
            </a>
            <a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bank_history");
        yield "\" class=\"footer-link\">
                <i class=\"bi bi-clock-history\"></i>
                <span>Historique</span>
            </a>
            <a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_qr");
        yield "\" class=\"footer-link\">
                <i class=\"bi bi-qr-code-scan\"></i>
                <span>QR</span>
            </a>
            <a href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rewards");
        yield "\" class=\"footer-link\">
                <i class=\"bi bi-gift\"></i>
                <span>Récompenses</span>
            </a>
            <a href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"footer-link\">
                <i class=\"bi bi-person\"></i>
                <span>Profil</span>
            </a>
        </div>
    </footer>

    <script>
        
        // GESTION DU CHARGEMENT DE LA PAGE
        
        document.addEventListener('DOMContentLoaded', function() {
            // Initialiser la recherche
            initSearch();
            
            // Initialiser le scroll horizontal
            initScrollDots();
        });

        /*
         * Fonctionnalité de recherche
         * Filtre les produits/marchands en temps réel
         */
        function initSearch() {
            const searchInput = document.getElementById('marketSearch');
            
            if (searchInput) {
                searchInput.addEventListener('input', function(e) {
                    const term = e.target.value.toLowerCase();
                    
                    // Filtrer les cartes du marché
                    const cards = document.querySelectorAll('.market-card-item');
                    cards.forEach(card => {
                        const text = card.innerText.toLowerCase();
                        card.style.display = text.includes(term) ? 'block' : 'none';
                    });
                    
                    console.log('Recherche:', term);
                });
            }
        }

        // Gestion du scroll horizontal avec points indicateurs
         
        function initScrollDots() {
            // Sélectionner tous les conteneurs de cartes
            const scrollContainers = document.querySelectorAll(\".scroll-container\");
            const allDotsGroups = document.querySelectorAll(\".scroll-dots\");

            scrollContainers.forEach((container, index) => {
                const dotsGroup = allDotsGroups[index];
                if (!dotsGroup) return;

                const dots = dotsGroup.querySelectorAll(\".dot\");
                if (!container || !dots.length) return;

                let isDown = false;
                let startX;
                let scrollLeft;

                // GESTION DES POINTS (SCROLL) - Met à jour les points actifs en fonction du scroll
                container.addEventListener(\"scroll\", () => {
                    const maxScroll = container.scrollWidth - container.offsetWidth;
                    if (maxScroll <= 0) return;

                    const scrollPercentage = container.scrollLeft / maxScroll;
                    const activeIndex = Math.round(scrollPercentage * (dots.length - 1));

                    dots.forEach((dot, i) => {
                        dot.classList.toggle(\"active\", i === activeIndex);
                    });
                });

                // GESTION DU GLISSEMENT À LA SOURIS 
                container.addEventListener(\"mousedown\", (e) => {
                    isDown = true;
                    startX = e.pageX - container.offsetLeft;
                    scrollLeft = container.scrollLeft;
                });

                container.addEventListener(\"mouseleave\", () => isDown = false);
                container.addEventListener(\"mouseup\", () => isDown = false);

                container.addEventListener(\"mousemove\", (e) => {
                    if (!isDown) return;
                    e.preventDefault();
                    const x = e.pageX - container.offsetLeft;
                    const walk = (x - startX) * 2;
                    container.scrollLeft = scrollLeft - walk;
                });
            });
        }

        /**
         * Charger les offres depuis l'API
         * À implémenter pour récupérer dynamiquement les marchands
         */
        async function loadMarketOffers() {
            try {
                // APPEL API POUR LES OFFRES DU MARCHÉ
                // Endpoint à créer: /api/market/offers
                // const response = await fetch('";
        // line 265
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_market_offers");
        yield "');
                // const offers = await response.json();
                // renderOffers(offers);
            } catch (error) {
                console.error('Erreur chargement offres:', error);
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
        return "market/index.html.twig";
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
        return array (  379 => 265,  275 => 164,  268 => 160,  261 => 156,  254 => 152,  247 => 148,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Marché - Budget App{% endblock %}

{% block body %}
    <!-- 
         PAGE: MARCHÉ / SHOPPING
         Fonctionnalité: Découvrir les marchands et offres spéciales
     -->

    <!-- HEADER -->
    <div class=\"container\">
        <!-- Fil d'Arianne -->
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-cart4 text-warning\" style=\"font-size: 15px;\"></span>
                        Shopping
                    </li>
                </ol>
            </nav>
        </div>

        <!--
             BARRE DE RECHERCHE
             Pour rechercher des produits ou marchands
         -->
        <div class=\"search-bar position-relative px-3 mb-3\">
            <input type=\"text\" class=\"form-control rounded-3 fs-6 ps-5\" 
                   placeholder=\"Rechercher des produits...\" 
                   id=\"marketSearch\"
                   style=\"height: 50px;\" />
            <i class=\"bi bi-search position-absolute top-50 start-0 translate-middle-y ms-4 text-muted\"></i>
        </div>

        <!--
             SCROLL CONTAINER: OFFRES SPECIALES
             Carrousel horizontal des offres des marchands
         -->
        <div class=\"scroll-container px-2\">
            <!-- Carte: Electronique -->
            <div class=\"market-card-item px-3\">
                <div class=\"card rounded-4 border-0 p-3 shadow-sm\"
                    style=\"background-color: #68c0d1; min-height: 160px; width: 300px;\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"text-center\">
                            <img src=\"/assets/images/banner5.jpg\" alt=\"Mode\" class=\"rounded-3 bg-white\"
                                style=\"width: 60px; height: 60px; object-fit: contain;\">
                            <p class=\"small mb-0 fw-bold mt-1 text-dark\">Electronique</p>
                        </div>
                        <div class=\"text-end\">
                            <h5 class=\"fw-bold mb-2 text-dark\">ACHATS EN<br>LIGNE</h5>
                            <button class=\"btn btn-sm btn-dark rounded-pill px-3\">Plus</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte: Amazon -->
            <div class=\"market-card-item\">
                <div class=\"card rounded-4 border-0 p-3 shadow-sm\"
                    style=\"background-color: #131921; min-height: 160px; width: 300px;\">
                    <div class=\"d-flex justify-content-between align-items-center text-white\">
                        <div>
                            <i class=\"bi bi-amazon fs-1 text-warning\"></i>
                            <p class=\"small mb-0 fw-bold\">Amazon</p>
                        </div>
                        <div class=\"text-end\">
                            <h6 class=\"fw-bold mb-2\">PRIME DAY<br>DISPONIBLE</h6>
                            <a href=\"https://www.amazon.fr\" target=\"_blank\"
                                class=\"btn btn-sm btn-warning rounded-pill px-3 fw-bold\">Plus</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte: FNAC -->
            <div class=\"market-card-item\">
                <div class=\"card rounded-4 border-0 p-3 shadow-sm\"
                    style=\"background-color: #e1bc2a; min-height: 160px; width: 300px;\">
                    <div class=\"d-flex justify-content-between align-items-center text-dark\">
                        <div class=\"text-center\">
                            <img src=\"/assets/images/logofnac.png\" alt=\"FNAC\" class=\"rounded-3 bg-white p-1\"
                                style=\"width: 50px;\">
                            <p class=\"small mb-0 fw-bold mt-1\">FNAC</p>
                        </div>
                        <div class=\"text-end\">
                            <h5 class=\"fw-bold mb-2\">OFFRES<br>ADHÉRENTS</h5>
                            <a href=\"https://www.fnac.com\" target=\"_blank\"
                                class=\"btn btn-sm btn-dark rounded-pill px-3\">Plus</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte: Cdiscount -->
            <div class=\"market-card-item\">
                <div class=\"card rounded-4 border-0 p-3 shadow-sm\"
                    style=\"background-color: #3142ac; min-height: 160px; width: 300px;\">
                    <div class=\"d-flex justify-content-between align-items-center text-white\">
                        <div class=\"text-center\">
                            <img src=\"/assets/images/logocdiscount.png\" alt=\"Cdiscount\"
                                style=\"width: 100px; background-color: white;\" class=\"rounded-3 p-1\">
                            <p class=\"small mb-0 fw-bold mt-1\">Cdiscount</p>
                        </div>
                        <div class=\"text-end\">
                            <h5 class=\"fw-bold mb-2\">Ventes<br>Flash</h5>
                            <a href=\"https://www.cdiscount.com\" target=\"_blank\"
                                class=\"btn btn-sm btn-light text-primary rounded-pill px-3 fw-bold\">Plus</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte: Boulanger -->
            <div class=\"market-card-item\">
                <div class=\"card rounded-4 border-0 p-3 shadow-sm\"
                    style=\"background-color: #e38556; min-height: 160px; width: 300px;\">
                    <div class=\"d-flex justify-content-between align-items-center text-white\">
                        <div class=\"text-center\">
                            <img src=\"/assets/images/logoboulanger.png\" alt=\"Boulanger\"
                                style=\"width: 100px; background-color: white;\" class=\"rounded-3 p-1\">
                            <p class=\"small mb-0 fw-bold mt-1\">Boulanger</p>
                        </div>
                        <div class=\"text-end\">
                            <h5 class=\"fw-bold mb-2\">Ventes<br>Flash</h5>
                            <a href=\"https://www.boulanger.com\" target=\"_blank\"
                                class=\"btn btn-sm btn-light text-primary rounded-pill px-3 fw-bold\">Plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Indicateurs de scroll (points) -->
        <div class=\"scroll-dots d-flex justify-content-center gap-2\">
            <div class=\"dot active\"></div>
            <div class=\"dot\"></div>
            <div class=\"dot\"></div>
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
        
        document.addEventListener('DOMContentLoaded', function() {
            // Initialiser la recherche
            initSearch();
            
            // Initialiser le scroll horizontal
            initScrollDots();
        });

        /*
         * Fonctionnalité de recherche
         * Filtre les produits/marchands en temps réel
         */
        function initSearch() {
            const searchInput = document.getElementById('marketSearch');
            
            if (searchInput) {
                searchInput.addEventListener('input', function(e) {
                    const term = e.target.value.toLowerCase();
                    
                    // Filtrer les cartes du marché
                    const cards = document.querySelectorAll('.market-card-item');
                    cards.forEach(card => {
                        const text = card.innerText.toLowerCase();
                        card.style.display = text.includes(term) ? 'block' : 'none';
                    });
                    
                    console.log('Recherche:', term);
                });
            }
        }

        // Gestion du scroll horizontal avec points indicateurs
         
        function initScrollDots() {
            // Sélectionner tous les conteneurs de cartes
            const scrollContainers = document.querySelectorAll(\".scroll-container\");
            const allDotsGroups = document.querySelectorAll(\".scroll-dots\");

            scrollContainers.forEach((container, index) => {
                const dotsGroup = allDotsGroups[index];
                if (!dotsGroup) return;

                const dots = dotsGroup.querySelectorAll(\".dot\");
                if (!container || !dots.length) return;

                let isDown = false;
                let startX;
                let scrollLeft;

                // GESTION DES POINTS (SCROLL) - Met à jour les points actifs en fonction du scroll
                container.addEventListener(\"scroll\", () => {
                    const maxScroll = container.scrollWidth - container.offsetWidth;
                    if (maxScroll <= 0) return;

                    const scrollPercentage = container.scrollLeft / maxScroll;
                    const activeIndex = Math.round(scrollPercentage * (dots.length - 1));

                    dots.forEach((dot, i) => {
                        dot.classList.toggle(\"active\", i === activeIndex);
                    });
                });

                // GESTION DU GLISSEMENT À LA SOURIS 
                container.addEventListener(\"mousedown\", (e) => {
                    isDown = true;
                    startX = e.pageX - container.offsetLeft;
                    scrollLeft = container.scrollLeft;
                });

                container.addEventListener(\"mouseleave\", () => isDown = false);
                container.addEventListener(\"mouseup\", () => isDown = false);

                container.addEventListener(\"mousemove\", (e) => {
                    if (!isDown) return;
                    e.preventDefault();
                    const x = e.pageX - container.offsetLeft;
                    const walk = (x - startX) * 2;
                    container.scrollLeft = scrollLeft - walk;
                });
            });
        }

        /**
         * Charger les offres depuis l'API
         * À implémenter pour récupérer dynamiquement les marchands
         */
        async function loadMarketOffers() {
            try {
                // APPEL API POUR LES OFFRES DU MARCHÉ
                // Endpoint à créer: /api/market/offers
                // const response = await fetch('{{ path('get_market_offers') }}');
                // const offers = await response.json();
                // renderOffers(offers);
            } catch (error) {
                console.error('Erreur chargement offres:', error);
            }
        }
    </script>
{% endblock %}

", "market/index.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/market/index.html.twig");
    }
}
