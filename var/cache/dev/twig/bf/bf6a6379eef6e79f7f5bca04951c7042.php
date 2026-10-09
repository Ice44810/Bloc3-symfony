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

/* contact/index.html.twig */
class __TwigTemplate_a746cf6b7a1094d9805cf4da053fbc83 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

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

        yield "Mes Contacts - Budget App";
        
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
        <div class=\"breadcrumb mt-3 d-flex justify-content-between\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfert");
        yield "\">Transfert</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-phone text-primary\" style=\"font-size: 15px;\"></span>
                        Mes contacts
                    </li>
                </ol>
            </nav>
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_new");
        yield "\"><i class=\"bi bi-plus fs-4 text-dark\"></i></a>
        </div>

        <div class=\"container-fluid mb-2\">
            <div class=\"p-3 rounded-3 bg-secondary-subtle\">
                <div class=\"input-group align-items-center rounded-3 px-2\">
                    <span class=\"bg-transparent border-0 pe-2\" id=\"searchicon\">
                        <i class=\"bi bi-search text-muted fs-6\"></i>
                    </span>
                    <input type=\"text\" class=\"form-control border-0 shadow-none fs-6 rounded-2\" id=\"searchInput\"
                        placeholder=\"Rechercher un destinataire\" style=\"height: 45px;\" />
                    <button class=\"btn border-0 p-2\" type=\"button\" id=\"clearSearch\">
                        <i class=\"bi bi-x-circle-fill text-muted fs-6\" role=\"clear-button\"
                            aria-label=\"Clear Search\"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Tableau -->
        <ul class=\"nav nav-tabs nav-fill mb-3\" id=\"recipientTabs\" role=\"tablist\">
            <li class=\"nav-item\">
                <button class=\"nav-link active\" id=\"phone-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#phone\"
                    type=\"button\" role=\"tab\" aria-controls=\"phone\" aria-selected=\"true\">
                    Téléphone
                </button>
            </li>
            <li class=\"nav-item\">
                <button class=\"nav-link\" id=\"bank-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#bank\" type=\"button\"
                    role=\"tab\" aria-controls=\"bank\" aria-selected=\"false\">
                    Compte bancaire
                </button>
            </li>
        </ul>

        <!-- Tableau contenu -->
        <div class=\"tab-content px-3\" id=\"recipientTabsContent\">
            <!-- Tableau téléphone -->
            <div class=\"tab-pane fade show active\" id=\"phone\" role=\"tabpanel\">
                <div id=\"phone-list\" class=\"d-flex flex-column\">
                    <div class=\"text-center py-4\"><div class=\"spinner-border text-primary\"></div></div>
                </div>
            </div>
            <!-- Tableau des comptes bancaires -->
            <div class=\"tab-pane fade\" id=\"bank\" role=\"tabpanel\">
                <div id=\"bank-list\" class=\"d-flex flex-column\">
                    <div class=\"text-center py-4\"><div class=\"spinner-border text-primary\"></div></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            loadRecipients();
            initSearch();
        });

        // Stockage local des contacts pour la recherche
        let recipientsData = {
            phone: [],
            bank: []
        };

        // URL de base pour les détails (avec un ID fictif valide pour passer la validation de la route Symfony)
        // On utilisera '0' car la regex est \\d+
        const baseDetailUrl = \"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_detail", ["id" => "0"]);
        yield "\";

        async function loadRecipients() {
            try {
                // Appel API pour récupérer les contacts
                const response = await fetch('";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_api_contacts_list");
        yield "');

                if (!response.ok) {
                   throw new Error(\"Erreur réseau\");
                }

                const data = await response.json();

                // Traitement des données
                let allRecipients = [];
                if (data && Array.isArray(data)) {
                    allRecipients = data;
                } else if (data && data.recipients) {
                    allRecipients = data.recipients;
                }

                // Séparation des contacts par type
                recipientsData.phone = allRecipients.filter(r => !r.type || r.type === 'phone');
                recipientsData.bank = allRecipients.filter(r => r.type === 'bank');

                renderLists();

            } catch (error) {
                console.error(\"Erreur chargement contacts:\", error);
                document.getElementById('phone-list').innerHTML =
                    '<p class=\"text-center text-muted mt-3\">Impossible de charger les contacts.</p>';
                document.getElementById('bank-list').innerHTML =
                    '<p class=\"text-center text-muted mt-3\">Impossible de charger les comptes.</p>';
            }
        }

        function renderLists() {
            renderList('phone-list', recipientsData.phone);
            renderList('bank-list', recipientsData.bank);
        }

        function renderList(containerId, items) {
            const container = document.getElementById(containerId);
            if (!items || items.length === 0) {
                container.innerHTML = '<p class=\"text-center text-muted mt-3\">Aucun contact trouvé.</p>';
                return;
            }

            let html = '';
            items.forEach(item => {
                // Gestion de l'image par défaut si pas d'avatar
                const avatar = item.avatar ? \"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/"), "html", null, true);
        yield "\" + item.avatar : \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profil.jpg"), "html", null, true);
        yield "\";

                // Masquage partiel du numéro/compte
                const identifier = item.identifier || 'Inconnu';
                const maskedIdentifier = identifier.length > 4
                    ? '**** **** **** ' + identifier.slice(-4)
                    : identifier;

                // Construction de l'URL détail en remplaçant '0' par le véritable ID
                const detailUrl = baseDetailUrl.replace('/0', '/' + item.id);

                html += `
                <div class=\"contact-item d-flex align-items-center mb-3 cursor-pointer\"
                     onclick=\"window.location.href='\${detailUrl}'\" style=\"cursor: pointer;\">
                    <img src=\"\${avatar}\" alt=\"\${item.name}\"
                        class=\"img-fluid rounded-circle me-3\" style=\"width: 50px; height: 50px; object-fit: cover;\" />
                    <div>
                        <strong>\${item.name}</strong><br />
                        <small class=\"text-muted\">\${maskedIdentifier}</small>
                    </div>
                </div>`;
            });

            container.innerHTML = html;
        }

        function initSearch() {
            const searchInput = document.getElementById('searchInput');
            const clearSearch = document.getElementById('clearSearch');

            searchInput.addEventListener('input', function() {
                const term = this.value.toLowerCase();

                const filteredPhone = recipientsData.phone.filter(item =>
                    item.name.toLowerCase().includes(term) ||
                    (item.identifier && item.identifier.includes(term))
                );

                const filteredBank = recipientsData.bank.filter(item =>
                    item.name.toLowerCase().includes(term) ||
                    (item.identifier && item.identifier.includes(term))
                );

                renderList('phone-list', filteredPhone);
                renderList('bank-list', filteredBank);
            });

            clearSearch.addEventListener('click', function() {
                searchInput.value = '';
                renderLists(); // Réaffiche tout
            });
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
        return "contact/index.html.twig";
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
        return array (  246 => 135,  197 => 89,  189 => 84,  120 => 18,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Contacts - Budget App{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"breadcrumb mt-3 d-flex justify-content-between\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_transfert') }}\">Transfert</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-phone text-primary\" style=\"font-size: 15px;\"></span>
                        Mes contacts
                    </li>
                </ol>
            </nav>
            <a href=\"{{ path('app_contact_new') }}\"><i class=\"bi bi-plus fs-4 text-dark\"></i></a>
        </div>

        <div class=\"container-fluid mb-2\">
            <div class=\"p-3 rounded-3 bg-secondary-subtle\">
                <div class=\"input-group align-items-center rounded-3 px-2\">
                    <span class=\"bg-transparent border-0 pe-2\" id=\"searchicon\">
                        <i class=\"bi bi-search text-muted fs-6\"></i>
                    </span>
                    <input type=\"text\" class=\"form-control border-0 shadow-none fs-6 rounded-2\" id=\"searchInput\"
                        placeholder=\"Rechercher un destinataire\" style=\"height: 45px;\" />
                    <button class=\"btn border-0 p-2\" type=\"button\" id=\"clearSearch\">
                        <i class=\"bi bi-x-circle-fill text-muted fs-6\" role=\"clear-button\"
                            aria-label=\"Clear Search\"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Tableau -->
        <ul class=\"nav nav-tabs nav-fill mb-3\" id=\"recipientTabs\" role=\"tablist\">
            <li class=\"nav-item\">
                <button class=\"nav-link active\" id=\"phone-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#phone\"
                    type=\"button\" role=\"tab\" aria-controls=\"phone\" aria-selected=\"true\">
                    Téléphone
                </button>
            </li>
            <li class=\"nav-item\">
                <button class=\"nav-link\" id=\"bank-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#bank\" type=\"button\"
                    role=\"tab\" aria-controls=\"bank\" aria-selected=\"false\">
                    Compte bancaire
                </button>
            </li>
        </ul>

        <!-- Tableau contenu -->
        <div class=\"tab-content px-3\" id=\"recipientTabsContent\">
            <!-- Tableau téléphone -->
            <div class=\"tab-pane fade show active\" id=\"phone\" role=\"tabpanel\">
                <div id=\"phone-list\" class=\"d-flex flex-column\">
                    <div class=\"text-center py-4\"><div class=\"spinner-border text-primary\"></div></div>
                </div>
            </div>
            <!-- Tableau des comptes bancaires -->
            <div class=\"tab-pane fade\" id=\"bank\" role=\"tabpanel\">
                <div id=\"bank-list\" class=\"d-flex flex-column\">
                    <div class=\"text-center py-4\"><div class=\"spinner-border text-primary\"></div></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            loadRecipients();
            initSearch();
        });

        // Stockage local des contacts pour la recherche
        let recipientsData = {
            phone: [],
            bank: []
        };

        // URL de base pour les détails (avec un ID fictif valide pour passer la validation de la route Symfony)
        // On utilisera '0' car la regex est \\d+
        const baseDetailUrl = \"{{ path('app_contact_detail', {id: '0'}) }}\";

        async function loadRecipients() {
            try {
                // Appel API pour récupérer les contacts
                const response = await fetch('{{ path('app_api_contacts_list') }}');

                if (!response.ok) {
                   throw new Error(\"Erreur réseau\");
                }

                const data = await response.json();

                // Traitement des données
                let allRecipients = [];
                if (data && Array.isArray(data)) {
                    allRecipients = data;
                } else if (data && data.recipients) {
                    allRecipients = data.recipients;
                }

                // Séparation des contacts par type
                recipientsData.phone = allRecipients.filter(r => !r.type || r.type === 'phone');
                recipientsData.bank = allRecipients.filter(r => r.type === 'bank');

                renderLists();

            } catch (error) {
                console.error(\"Erreur chargement contacts:\", error);
                document.getElementById('phone-list').innerHTML =
                    '<p class=\"text-center text-muted mt-3\">Impossible de charger les contacts.</p>';
                document.getElementById('bank-list').innerHTML =
                    '<p class=\"text-center text-muted mt-3\">Impossible de charger les comptes.</p>';
            }
        }

        function renderLists() {
            renderList('phone-list', recipientsData.phone);
            renderList('bank-list', recipientsData.bank);
        }

        function renderList(containerId, items) {
            const container = document.getElementById(containerId);
            if (!items || items.length === 0) {
                container.innerHTML = '<p class=\"text-center text-muted mt-3\">Aucun contact trouvé.</p>';
                return;
            }

            let html = '';
            items.forEach(item => {
                // Gestion de l'image par défaut si pas d'avatar
                const avatar = item.avatar ? \"{{ asset('assets/images/') }}\" + item.avatar : \"{{ asset('assets/images/profil.jpg') }}\";

                // Masquage partiel du numéro/compte
                const identifier = item.identifier || 'Inconnu';
                const maskedIdentifier = identifier.length > 4
                    ? '**** **** **** ' + identifier.slice(-4)
                    : identifier;

                // Construction de l'URL détail en remplaçant '0' par le véritable ID
                const detailUrl = baseDetailUrl.replace('/0', '/' + item.id);

                html += `
                <div class=\"contact-item d-flex align-items-center mb-3 cursor-pointer\"
                     onclick=\"window.location.href='\${detailUrl}'\" style=\"cursor: pointer;\">
                    <img src=\"\${avatar}\" alt=\"\${item.name}\"
                        class=\"img-fluid rounded-circle me-3\" style=\"width: 50px; height: 50px; object-fit: cover;\" />
                    <div>
                        <strong>\${item.name}</strong><br />
                        <small class=\"text-muted\">\${maskedIdentifier}</small>
                    </div>
                </div>`;
            });

            container.innerHTML = html;
        }

        function initSearch() {
            const searchInput = document.getElementById('searchInput');
            const clearSearch = document.getElementById('clearSearch');

            searchInput.addEventListener('input', function() {
                const term = this.value.toLowerCase();

                const filteredPhone = recipientsData.phone.filter(item =>
                    item.name.toLowerCase().includes(term) ||
                    (item.identifier && item.identifier.includes(term))
                );

                const filteredBank = recipientsData.bank.filter(item =>
                    item.name.toLowerCase().includes(term) ||
                    (item.identifier && item.identifier.includes(term))
                );

                renderList('phone-list', filteredPhone);
                renderList('bank-list', filteredBank);
            });

            clearSearch.addEventListener('click', function() {
                searchInput.value = '';
                renderLists(); // Réaffiche tout
            });
        }
    </script>
{% endblock %}
", "contact/index.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/contact/index.html.twig");
    }
}
