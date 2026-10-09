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

/* transactions/index.html.twig */
class __TwigTemplate_98cea197a685af337b7b6cd0737b982a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transactions/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transactions/index.html.twig"));

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

        yield "Transactions - Budget App";
        
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
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-cash-coin text-primary\" style=\"font-size: 15px;\"></span>
                        Transactions
                    </li>
                </ol>
            </nav>
        </div>

        <!-- Filtres -->
        <div class=\"card p-3 rounded-4 border shadow-sm mb-4\">
            <div class=\"row g-2\">
                <div class=\"col-6 col-md-3\">
                    <select class=\"form-select\" id=\"filterType\">
                        <option value=\"\">Tous les types</option>
                        <option value=\"income\">Revenus</option>
                        <option value=\"expense\">Dépenses</option>
                    </select>
                </div>
                <div class=\"col-6 col-md-3\">
                    <select class=\"form-select\" id=\"filterCategory\">
                        <option value=\"\">Toutes catégories</option>
                    </select>
                </div>
                <div class=\"col-6 col-md-3\">
                    <select class=\"form-select\" id=\"filterPeriod\">
                        <option value=\"\">Toutes périodes</option>
                        <option value=\"today\">Aujourd'hui</option>
                        <option value=\"week\">Cette semaine</option>
                        <option value=\"month\">Ce mois</option>
                        <option value=\"year\">Cette année</option>
                    </select>
                </div>
                <div class=\"col-6 col-md-3\">
                    <button class=\"btn btn-primary w-100\" id=\"btnFilter\">
                        <i class=\"bi bi-funnel\"></i> Filtrer
                    </button>
                </div>
            </div>
        </div>

        <!-- Statistiques rapides -->
        <div class=\"row mb-4\">
            <div class=\"col-4\">
                <div class=\"card rounded-4 border shadow-sm text-center p-3\">
                    <p class=\"text-muted mb-1 small\">Total Revenus</p>
                    <h5 class=\"text-success mb-0\" id=\"totalIncome\">--</h5>
                </div>
            </div>
            <div class=\"col-4\">
                <div class=\"card rounded-4 border shadow-sm text-center p-3\">
                    <p class=\"text-muted mb-1 small\">Total Dépenses</p>
                    <h5 class=\"text-danger mb-0\" id=\"totalExpense\">--</h5>
                </div>
            </div>
            <div class=\"col-4\">
                <div class=\"card rounded-4 border shadow-sm text-center p-3\">
                    <p class=\"text-muted mb-1 small\">Solde</p>
                    <h5 class=\"text-primary mb-0\" id=\"totalBalance\">--</h5>
                </div>
            </div>
        </div>

        <!-- Graphique -->
        <div class=\"card p-3 rounded-4 border shadow-sm mb-4\">
            <h6 class=\"fw-semibold mb-3\">Evolution des dépenses</h6>
            <canvas id=\"transactionsChart\" height=\"200\"></canvas>
        </div>

        <!-- Liste des transactions -->
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h5 class=\"fs-5 fw-semibold\">Toutes les transactions</h5>
            <button class=\"btn btn-success btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#addTransactionModal\">
                <i class=\"bi bi-plus\"></i> Ajouter
            </button>
        </div>

        <div class=\"card p-4 rounded-4 border shadow-sm\">
            <div id=\"transactionsList\">
                <div class=\"text-center py-4\">
                    <div class=\"spinner-border text-primary\" role=\"status\">
                        <span class=\"visually-hidden\">Chargement...</span>
                    </div>
                    <p class=\"mt-2 text-muted\">Chargement des transactions...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Ajouter Transaction -->
    <div class=\"modal fade\" id=\"addTransactionModal\" tabindex=\"-1\" aria-labelledby=\"addTransactionModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"addTransactionModalLabel\">Nouvelle Transaction</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"addTransactionForm\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Type</label>
                            <select class=\"form-select\" id=\"transactionType\" required>
                                <option value=\"expense\">Dépense</option>
                                <option value=\"income\">Revenu</option>
                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Titre</label>
                            <input type=\"text\" class=\"form-control\" id=\"transactionTitle\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Montant (€)</label>
                            <input type=\"number\" class=\"form-control\" id=\"transactionAmount\" required step=\"0.01\" min=\"0.01\">
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Catégorie</label>
                            <select class=\"form-select\" id=\"transactionCategory\">
                                <option value=\"\">Sélectionner une catégorie</option>
                            </select>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary w-100\">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Modifier Transaction -->
    <div class=\"modal fade\" id=\"editTransactionModal\" tabindex=\"-1\" aria-labelledby=\"editTransactionModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"editTransactionModalLabel\">Modifier Transaction</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"editTransactionForm\">
                        <input type=\"hidden\" id=\"editTransactionId\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Type</label>
                            <select class=\"form-select\" id=\"editTransactionType\" required>
                                <option value=\"expense\">Dépense</option>
                                <option value=\"income\">Revenu</option>
                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Titre</label>
                            <input type=\"text\" class=\"form-control\" id=\"editTransactionTitle\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Montant (€)</label>
                            <input type=\"number\" class=\"form-control\" id=\"editTransactionAmount\" required step=\"0.01\" min=\"0.01\">
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Catégorie</label>
                            <select class=\"form-select\" id=\"editTransactionCategory\">
                                <option value=\"\">Sélectionner une catégorie</option>
                            </select>
                        </div>
                        <div class=\"d-flex gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary flex-grow-1\">Enregistrer</button>
                            <button type=\"button\" class=\"btn btn-danger\" id=\"btnDeleteTransaction\">Supprimer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <script>
        let transactionsChart = null;

        // Configuration des URLs API avec un ID factice '0'
        const API_URLS = {
            create: \"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_transaction");
        yield "\",
            update: \"";
        // line 187
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_transaction", ["id" => "0"]);
        yield "\",
            delete: \"";
        // line 188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_transaction", ["id" => "0"]);
        yield "\"
        };

        document.addEventListener('DOMContentLoaded', async () => {
            const refreshTransactions = sessionStorage.getItem('refreshTransactions');
            if (refreshTransactions) {
                sessionStorage.removeItem('refreshTransactions');
                window.location.reload();
                return; // Stop further execution
            }

            await loadCategories();
            await loadTransactions();
            await loadStats();
            setupForms();
            setupChart();

            document.getElementById('btnFilter').addEventListener('click', applyFilters);
            document.getElementById('btnDeleteTransaction').addEventListener('click', deleteTransaction);
        });

        async function loadCategories() {
            try {
                const response = await fetch('";
        // line 211
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_categories");
        yield "');
                const categories = await response.json();

                const filterCategory = document.getElementById('filterCategory');
                const transactionCategory = document.getElementById('transactionCategory');
                const editTransactionCategory = document.getElementById('editTransactionCategory');

                // Vider les selects avant d'ajouter
                if(filterCategory) filterCategory.innerHTML = '<option value=\"\">Toutes catégories</option>';
                if(transactionCategory) transactionCategory.innerHTML = '<option value=\"\">Sélectionner une catégorie</option>';
                if(editTransactionCategory) editTransactionCategory.innerHTML = '<option value=\"\">Sélectionner une catégorie</option>';

                categories.forEach(cat => {
                    [filterCategory, transactionCategory, editTransactionCategory].forEach(select => {
                        if (select) {
                            const option = document.createElement('option');
                            option.value = cat.id;
                            option.textContent = cat.name;
                            select.appendChild(option);
                        }
                    });
                });
            } catch (error) {
                console.error('Erreur chargement catégories:', error);
            }
        }

        async function loadTransactions() {
            const filters = {
                type: document.getElementById('filterType').value || undefined,
                categoryId: document.getElementById('filterCategory').value || undefined,
                period: document.getElementById('filterPeriod').value || undefined
            };

            // Construction de l'URL avec les paramètres
            const url = new URL('";
        // line 246
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_transactions");
        yield "', window.location.origin);
            Object.keys(filters).forEach(key => {
                if(filters[key]) url.searchParams.append(key, filters[key]);
            });

            try {
                const response = await fetch(url);
                const transactions = await response.json();
                const container = document.getElementById('transactionsList');

                if (!transactions || transactions.length === 0) {
                    container.innerHTML = '<p class=\"text-muted text-center py-4\">Aucune transaction trouvée</p>';
                    updateChart([]);
                    return;
                }

                // Groupement par mois
                const grouped = {};
                transactions.forEach(tx => {
                    const date = new Date(tx.created_at || tx.date); // Adapter selon le format de date
                    const monthYear = date.toLocaleDateString('fr-FR', { month: 'long', year: 'numeric' });
                    // Capitalize first letter
                    const formattedDate = monthYear.charAt(0).toUpperCase() + monthYear.slice(1);

                    if (!grouped[formattedDate]) {
                        grouped[formattedDate] = [];
                    }
                    grouped[formattedDate].push(tx);
                });

                // Mettre à jour le graphique avec les données filtrées
                updateChart(transactions);

                let html = '';
                for (const [month, txs] of Object.entries(grouped)) {
                    html += `<h4 class=\"text-secondary fw-semibold mb-3 fs-6 mt-3\">\${month}</h4>`;

                    txs.forEach(tx => {
                        // Icône par défaut selon le type
                        let icon = tx.type === 'income' ? 'bi-arrow-down' : 'bi-arrow-up';
                        let bgClass = tx.type === 'income' ? 'bg-success-subtle text-success' : 'bg-danger-subtle text-danger';

                        // Icônes personnalisées selon catégorie (simulation)
                        const catName = (tx.category_name || '').toLowerCase();
                        if (catName.includes('electricité') || catName.includes('facture')) icon = 'bi-lightning-fill';
                        else if (catName.includes('mobile') || catName.includes('phone')) icon = 'bi-phone-fill';
                        else if (catName.includes('wifi') || catName.includes('internet')) icon = 'bi-wifi';
                        else if (catName.includes('eau') || catName.includes('water')) icon = 'bi-droplet-fill';
                        else if (catName.includes('netflix') || catName.includes('tv')) icon = 'bi-tv-fill';
                        else if (catName.includes('salaire')) icon = 'bi-bank2';
                        else if (catName.includes('course') || catName.includes('shopping')) icon = 'bi-cart-fill';

                        // Formatage date
                        const dateObj = new Date(tx.created_at || tx.date);
                        const dateStr = dateObj.toLocaleDateString('fr-FR', { day: 'numeric', month: 'short' }) + ' ' +
                                       dateObj.toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' });

                        html += `
                            <div class=\"transaction-item px-3 py-3 border-bottom\" role=\"button\"
                                 onclick=\"openEditModal(\${tx.id}, '\${tx.title.replace(/'/g, \"\\\\'\")}', \${tx.amount}, '\${tx.type}', \${tx.category_id || 'null'})\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"p-2 me-3 rounded-circle \${bgClass} d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px;\">
                                            <i class=\"bi \${icon}\"></i>
                                        </div>
                                        <div>
                                            <p class=\"fw-medium text-dark mb-0\">\${tx.title}</p>
                                            <p class=\"small text-muted mb-0\">\${dateStr}</p>
                                        </div>
                                    </div>
                                    <p class=\"fs-6 fw-semibold mb-0 \${tx.type === 'income' ? 'text-success' : 'text-danger'}\">
                                        \${tx.type === 'income' ? '+' : '-'} \${parseFloat(tx.amount).toFixed(2)} €
                                    </p>
                                </div>
                            </div>
                        `;
                    });
                }

                container.innerHTML = html;
            } catch (error) {
                console.error('Erreur chargement transactions:', error);
                document.getElementById('transactionsList').innerHTML = '<p class=\"text-danger text-center py-4\">Erreur de chargement</p>';
            }
        }

        async function loadStats() {
            try {
                const response = await fetch('";
        // line 334
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_dashboard");
        yield "');
                const stats = await response.json();

                document.getElementById('totalIncome').textContent = parseFloat(stats.totalIncome || 0).toFixed(2) + ' €';
                document.getElementById('totalExpense').textContent = parseFloat(stats.totalExpense || 0).toFixed(2) + ' €';
                document.getElementById('totalBalance').textContent = parseFloat(stats.balance || 0).toFixed(2) + ' €';
            } catch (error) {
                console.error('Erreur chargement stats:', error);
            }
        }

        function applyFilters() {
            loadTransactions();
        }

        function setupChart() {
            const ctx = document.getElementById('transactionsChart').getContext('2d');
            transactionsChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
                    datasets: [{
                        label: 'Dépenses',
                        data: Array(12).fill(0), // Initialement vide
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });
        }

        function updateChart(transactions) {
            if (!transactionsChart) return;

            // Filtrer que les dépenses
            const expenses = transactions.filter(t => t.type === 'expense');

            // Regrouper par mois (index 0-11)
            const monthlyData = Array(12).fill(0);

            expenses.forEach(t => {
                const date = new Date(t.created_at || t.date);
                const monthIndex = date.getMonth();
                monthlyData[monthIndex] += parseFloat(t.amount);
            });

            transactionsChart.data.datasets[0].data = monthlyData;
            transactionsChart.update();
        }

        function setupForms() {
            document.getElementById('addTransactionForm').addEventListener('submit', async (e) => {
                e.preventDefault();

                const data = {
                    title: document.getElementById('transactionTitle').value,
                    amount: parseFloat(document.getElementById('transactionAmount').value),
                    type: document.getElementById('transactionType').value,
                    category_id: document.getElementById('transactionCategory').value || null
                };

                try {
                    const response = await fetch(API_URLS.create, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(data)
                    });

                    if (response.ok) {
                        alert('Transaction ajoutée!');
                        const modal = bootstrap.Modal.getInstance(document.getElementById('addTransactionModal'));
                        modal.hide();
                        document.getElementById('addTransactionForm').reset();

                        await loadTransactions();
                        await loadStats();
                    } else {
                        alert('Erreur lors de l\\'ajout');
                    }
                } catch (error) {
                    alert('Erreur réseau');
                }
            });

            document.getElementById('editTransactionForm').addEventListener('submit', async (e) => {
                e.preventDefault();

                const id = document.getElementById('editTransactionId').value;
                const data = {
                    title: document.getElementById('editTransactionTitle').value,
                    amount: parseFloat(document.getElementById('editTransactionAmount').value),
                    type: document.getElementById('editTransactionType').value,
                    category_id: document.getElementById('editTransactionCategory').value || null
                };

                // Utilisation de l'URL pré-générée en remplaçant '0' par l'ID réel
                const url = API_URLS.update.replace('/0', '/' + id);

                try {
                    const response = await fetch(url, {
                        method: 'PUT', // Ou POST selon l'API
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(data)
                    });

                    if (response.ok) {
                        alert('Transaction mise à jour!');
                        const modal = bootstrap.Modal.getInstance(document.getElementById('editTransactionModal'));
                        modal.hide();

                        await loadTransactions();
                        await loadStats();
                    } else {
                        alert('Erreur lors de la mise à jour');
                    }
                } catch (error) {
                    alert('Erreur réseau');
                }
            });
        }

        // Fonction globale pour être appelée depuis le HTML
        window.openEditModal = function(id, title, amount, type, categoryId) {
            document.getElementById('editTransactionId').value = id;
            document.getElementById('editTransactionTitle').value = title;
            document.getElementById('editTransactionAmount').value = amount;
            document.getElementById('editTransactionType').value = type;
            document.getElementById('editTransactionCategory').value = categoryId || '';

            const modal = new bootstrap.Modal(document.getElementById('editTransactionModal'));
            modal.show();
        };

        async function deleteTransaction() {
            const id = document.getElementById('editTransactionId').value;

            if (!confirm('Êtes-vous sûr de vouloir supprimer cette transaction?')) {
                return;
            }

            // Utilisation de l'URL pré-générée en remplaçant '0' par l'ID réel
            const url = API_URLS.delete.replace('/0', '/' + id);

            try {
                const response = await fetch(url, { method: 'DELETE' });

                if (response.ok) {
                    alert('Transaction supprimée!');
                    const modal = bootstrap.Modal.getInstance(document.getElementById('editTransactionModal'));
                    modal.hide();

                    await loadTransactions();
                    await loadStats();
                } else {
                    alert('Erreur lors de la suppression');
                }
            } catch (error) {
                alert('Erreur réseau');
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
        return "transactions/index.html.twig";
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
        return array (  448 => 334,  357 => 246,  319 => 211,  293 => 188,  289 => 187,  285 => 186,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Transactions - Budget App{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-cash-coin text-primary\" style=\"font-size: 15px;\"></span>
                        Transactions
                    </li>
                </ol>
            </nav>
        </div>

        <!-- Filtres -->
        <div class=\"card p-3 rounded-4 border shadow-sm mb-4\">
            <div class=\"row g-2\">
                <div class=\"col-6 col-md-3\">
                    <select class=\"form-select\" id=\"filterType\">
                        <option value=\"\">Tous les types</option>
                        <option value=\"income\">Revenus</option>
                        <option value=\"expense\">Dépenses</option>
                    </select>
                </div>
                <div class=\"col-6 col-md-3\">
                    <select class=\"form-select\" id=\"filterCategory\">
                        <option value=\"\">Toutes catégories</option>
                    </select>
                </div>
                <div class=\"col-6 col-md-3\">
                    <select class=\"form-select\" id=\"filterPeriod\">
                        <option value=\"\">Toutes périodes</option>
                        <option value=\"today\">Aujourd'hui</option>
                        <option value=\"week\">Cette semaine</option>
                        <option value=\"month\">Ce mois</option>
                        <option value=\"year\">Cette année</option>
                    </select>
                </div>
                <div class=\"col-6 col-md-3\">
                    <button class=\"btn btn-primary w-100\" id=\"btnFilter\">
                        <i class=\"bi bi-funnel\"></i> Filtrer
                    </button>
                </div>
            </div>
        </div>

        <!-- Statistiques rapides -->
        <div class=\"row mb-4\">
            <div class=\"col-4\">
                <div class=\"card rounded-4 border shadow-sm text-center p-3\">
                    <p class=\"text-muted mb-1 small\">Total Revenus</p>
                    <h5 class=\"text-success mb-0\" id=\"totalIncome\">--</h5>
                </div>
            </div>
            <div class=\"col-4\">
                <div class=\"card rounded-4 border shadow-sm text-center p-3\">
                    <p class=\"text-muted mb-1 small\">Total Dépenses</p>
                    <h5 class=\"text-danger mb-0\" id=\"totalExpense\">--</h5>
                </div>
            </div>
            <div class=\"col-4\">
                <div class=\"card rounded-4 border shadow-sm text-center p-3\">
                    <p class=\"text-muted mb-1 small\">Solde</p>
                    <h5 class=\"text-primary mb-0\" id=\"totalBalance\">--</h5>
                </div>
            </div>
        </div>

        <!-- Graphique -->
        <div class=\"card p-3 rounded-4 border shadow-sm mb-4\">
            <h6 class=\"fw-semibold mb-3\">Evolution des dépenses</h6>
            <canvas id=\"transactionsChart\" height=\"200\"></canvas>
        </div>

        <!-- Liste des transactions -->
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h5 class=\"fs-5 fw-semibold\">Toutes les transactions</h5>
            <button class=\"btn btn-success btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#addTransactionModal\">
                <i class=\"bi bi-plus\"></i> Ajouter
            </button>
        </div>

        <div class=\"card p-4 rounded-4 border shadow-sm\">
            <div id=\"transactionsList\">
                <div class=\"text-center py-4\">
                    <div class=\"spinner-border text-primary\" role=\"status\">
                        <span class=\"visually-hidden\">Chargement...</span>
                    </div>
                    <p class=\"mt-2 text-muted\">Chargement des transactions...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Ajouter Transaction -->
    <div class=\"modal fade\" id=\"addTransactionModal\" tabindex=\"-1\" aria-labelledby=\"addTransactionModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"addTransactionModalLabel\">Nouvelle Transaction</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"addTransactionForm\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Type</label>
                            <select class=\"form-select\" id=\"transactionType\" required>
                                <option value=\"expense\">Dépense</option>
                                <option value=\"income\">Revenu</option>
                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Titre</label>
                            <input type=\"text\" class=\"form-control\" id=\"transactionTitle\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Montant (€)</label>
                            <input type=\"number\" class=\"form-control\" id=\"transactionAmount\" required step=\"0.01\" min=\"0.01\">
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Catégorie</label>
                            <select class=\"form-select\" id=\"transactionCategory\">
                                <option value=\"\">Sélectionner une catégorie</option>
                            </select>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary w-100\">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Modifier Transaction -->
    <div class=\"modal fade\" id=\"editTransactionModal\" tabindex=\"-1\" aria-labelledby=\"editTransactionModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"editTransactionModalLabel\">Modifier Transaction</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"editTransactionForm\">
                        <input type=\"hidden\" id=\"editTransactionId\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Type</label>
                            <select class=\"form-select\" id=\"editTransactionType\" required>
                                <option value=\"expense\">Dépense</option>
                                <option value=\"income\">Revenu</option>
                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Titre</label>
                            <input type=\"text\" class=\"form-control\" id=\"editTransactionTitle\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Montant (€)</label>
                            <input type=\"number\" class=\"form-control\" id=\"editTransactionAmount\" required step=\"0.01\" min=\"0.01\">
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Catégorie</label>
                            <select class=\"form-select\" id=\"editTransactionCategory\">
                                <option value=\"\">Sélectionner une catégorie</option>
                            </select>
                        </div>
                        <div class=\"d-flex gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary flex-grow-1\">Enregistrer</button>
                            <button type=\"button\" class=\"btn btn-danger\" id=\"btnDeleteTransaction\">Supprimer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <script>
        let transactionsChart = null;

        // Configuration des URLs API avec un ID factice '0'
        const API_URLS = {
            create: \"{{ path('create_transaction') }}\",
            update: \"{{ path('update_transaction', {id: '0'}) }}\",
            delete: \"{{ path('delete_transaction', {id: '0'}) }}\"
        };

        document.addEventListener('DOMContentLoaded', async () => {
            const refreshTransactions = sessionStorage.getItem('refreshTransactions');
            if (refreshTransactions) {
                sessionStorage.removeItem('refreshTransactions');
                window.location.reload();
                return; // Stop further execution
            }

            await loadCategories();
            await loadTransactions();
            await loadStats();
            setupForms();
            setupChart();

            document.getElementById('btnFilter').addEventListener('click', applyFilters);
            document.getElementById('btnDeleteTransaction').addEventListener('click', deleteTransaction);
        });

        async function loadCategories() {
            try {
                const response = await fetch('{{ path('get_categories') }}');
                const categories = await response.json();

                const filterCategory = document.getElementById('filterCategory');
                const transactionCategory = document.getElementById('transactionCategory');
                const editTransactionCategory = document.getElementById('editTransactionCategory');

                // Vider les selects avant d'ajouter
                if(filterCategory) filterCategory.innerHTML = '<option value=\"\">Toutes catégories</option>';
                if(transactionCategory) transactionCategory.innerHTML = '<option value=\"\">Sélectionner une catégorie</option>';
                if(editTransactionCategory) editTransactionCategory.innerHTML = '<option value=\"\">Sélectionner une catégorie</option>';

                categories.forEach(cat => {
                    [filterCategory, transactionCategory, editTransactionCategory].forEach(select => {
                        if (select) {
                            const option = document.createElement('option');
                            option.value = cat.id;
                            option.textContent = cat.name;
                            select.appendChild(option);
                        }
                    });
                });
            } catch (error) {
                console.error('Erreur chargement catégories:', error);
            }
        }

        async function loadTransactions() {
            const filters = {
                type: document.getElementById('filterType').value || undefined,
                categoryId: document.getElementById('filterCategory').value || undefined,
                period: document.getElementById('filterPeriod').value || undefined
            };

            // Construction de l'URL avec les paramètres
            const url = new URL('{{ path('get_transactions') }}', window.location.origin);
            Object.keys(filters).forEach(key => {
                if(filters[key]) url.searchParams.append(key, filters[key]);
            });

            try {
                const response = await fetch(url);
                const transactions = await response.json();
                const container = document.getElementById('transactionsList');

                if (!transactions || transactions.length === 0) {
                    container.innerHTML = '<p class=\"text-muted text-center py-4\">Aucune transaction trouvée</p>';
                    updateChart([]);
                    return;
                }

                // Groupement par mois
                const grouped = {};
                transactions.forEach(tx => {
                    const date = new Date(tx.created_at || tx.date); // Adapter selon le format de date
                    const monthYear = date.toLocaleDateString('fr-FR', { month: 'long', year: 'numeric' });
                    // Capitalize first letter
                    const formattedDate = monthYear.charAt(0).toUpperCase() + monthYear.slice(1);

                    if (!grouped[formattedDate]) {
                        grouped[formattedDate] = [];
                    }
                    grouped[formattedDate].push(tx);
                });

                // Mettre à jour le graphique avec les données filtrées
                updateChart(transactions);

                let html = '';
                for (const [month, txs] of Object.entries(grouped)) {
                    html += `<h4 class=\"text-secondary fw-semibold mb-3 fs-6 mt-3\">\${month}</h4>`;

                    txs.forEach(tx => {
                        // Icône par défaut selon le type
                        let icon = tx.type === 'income' ? 'bi-arrow-down' : 'bi-arrow-up';
                        let bgClass = tx.type === 'income' ? 'bg-success-subtle text-success' : 'bg-danger-subtle text-danger';

                        // Icônes personnalisées selon catégorie (simulation)
                        const catName = (tx.category_name || '').toLowerCase();
                        if (catName.includes('electricité') || catName.includes('facture')) icon = 'bi-lightning-fill';
                        else if (catName.includes('mobile') || catName.includes('phone')) icon = 'bi-phone-fill';
                        else if (catName.includes('wifi') || catName.includes('internet')) icon = 'bi-wifi';
                        else if (catName.includes('eau') || catName.includes('water')) icon = 'bi-droplet-fill';
                        else if (catName.includes('netflix') || catName.includes('tv')) icon = 'bi-tv-fill';
                        else if (catName.includes('salaire')) icon = 'bi-bank2';
                        else if (catName.includes('course') || catName.includes('shopping')) icon = 'bi-cart-fill';

                        // Formatage date
                        const dateObj = new Date(tx.created_at || tx.date);
                        const dateStr = dateObj.toLocaleDateString('fr-FR', { day: 'numeric', month: 'short' }) + ' ' +
                                       dateObj.toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' });

                        html += `
                            <div class=\"transaction-item px-3 py-3 border-bottom\" role=\"button\"
                                 onclick=\"openEditModal(\${tx.id}, '\${tx.title.replace(/'/g, \"\\\\'\")}', \${tx.amount}, '\${tx.type}', \${tx.category_id || 'null'})\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"p-2 me-3 rounded-circle \${bgClass} d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px;\">
                                            <i class=\"bi \${icon}\"></i>
                                        </div>
                                        <div>
                                            <p class=\"fw-medium text-dark mb-0\">\${tx.title}</p>
                                            <p class=\"small text-muted mb-0\">\${dateStr}</p>
                                        </div>
                                    </div>
                                    <p class=\"fs-6 fw-semibold mb-0 \${tx.type === 'income' ? 'text-success' : 'text-danger'}\">
                                        \${tx.type === 'income' ? '+' : '-'} \${parseFloat(tx.amount).toFixed(2)} €
                                    </p>
                                </div>
                            </div>
                        `;
                    });
                }

                container.innerHTML = html;
            } catch (error) {
                console.error('Erreur chargement transactions:', error);
                document.getElementById('transactionsList').innerHTML = '<p class=\"text-danger text-center py-4\">Erreur de chargement</p>';
            }
        }

        async function loadStats() {
            try {
                const response = await fetch('{{ path('get_dashboard') }}');
                const stats = await response.json();

                document.getElementById('totalIncome').textContent = parseFloat(stats.totalIncome || 0).toFixed(2) + ' €';
                document.getElementById('totalExpense').textContent = parseFloat(stats.totalExpense || 0).toFixed(2) + ' €';
                document.getElementById('totalBalance').textContent = parseFloat(stats.balance || 0).toFixed(2) + ' €';
            } catch (error) {
                console.error('Erreur chargement stats:', error);
            }
        }

        function applyFilters() {
            loadTransactions();
        }

        function setupChart() {
            const ctx = document.getElementById('transactionsChart').getContext('2d');
            transactionsChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
                    datasets: [{
                        label: 'Dépenses',
                        data: Array(12).fill(0), // Initialement vide
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });
        }

        function updateChart(transactions) {
            if (!transactionsChart) return;

            // Filtrer que les dépenses
            const expenses = transactions.filter(t => t.type === 'expense');

            // Regrouper par mois (index 0-11)
            const monthlyData = Array(12).fill(0);

            expenses.forEach(t => {
                const date = new Date(t.created_at || t.date);
                const monthIndex = date.getMonth();
                monthlyData[monthIndex] += parseFloat(t.amount);
            });

            transactionsChart.data.datasets[0].data = monthlyData;
            transactionsChart.update();
        }

        function setupForms() {
            document.getElementById('addTransactionForm').addEventListener('submit', async (e) => {
                e.preventDefault();

                const data = {
                    title: document.getElementById('transactionTitle').value,
                    amount: parseFloat(document.getElementById('transactionAmount').value),
                    type: document.getElementById('transactionType').value,
                    category_id: document.getElementById('transactionCategory').value || null
                };

                try {
                    const response = await fetch(API_URLS.create, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(data)
                    });

                    if (response.ok) {
                        alert('Transaction ajoutée!');
                        const modal = bootstrap.Modal.getInstance(document.getElementById('addTransactionModal'));
                        modal.hide();
                        document.getElementById('addTransactionForm').reset();

                        await loadTransactions();
                        await loadStats();
                    } else {
                        alert('Erreur lors de l\\'ajout');
                    }
                } catch (error) {
                    alert('Erreur réseau');
                }
            });

            document.getElementById('editTransactionForm').addEventListener('submit', async (e) => {
                e.preventDefault();

                const id = document.getElementById('editTransactionId').value;
                const data = {
                    title: document.getElementById('editTransactionTitle').value,
                    amount: parseFloat(document.getElementById('editTransactionAmount').value),
                    type: document.getElementById('editTransactionType').value,
                    category_id: document.getElementById('editTransactionCategory').value || null
                };

                // Utilisation de l'URL pré-générée en remplaçant '0' par l'ID réel
                const url = API_URLS.update.replace('/0', '/' + id);

                try {
                    const response = await fetch(url, {
                        method: 'PUT', // Ou POST selon l'API
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(data)
                    });

                    if (response.ok) {
                        alert('Transaction mise à jour!');
                        const modal = bootstrap.Modal.getInstance(document.getElementById('editTransactionModal'));
                        modal.hide();

                        await loadTransactions();
                        await loadStats();
                    } else {
                        alert('Erreur lors de la mise à jour');
                    }
                } catch (error) {
                    alert('Erreur réseau');
                }
            });
        }

        // Fonction globale pour être appelée depuis le HTML
        window.openEditModal = function(id, title, amount, type, categoryId) {
            document.getElementById('editTransactionId').value = id;
            document.getElementById('editTransactionTitle').value = title;
            document.getElementById('editTransactionAmount').value = amount;
            document.getElementById('editTransactionType').value = type;
            document.getElementById('editTransactionCategory').value = categoryId || '';

            const modal = new bootstrap.Modal(document.getElementById('editTransactionModal'));
            modal.show();
        };

        async function deleteTransaction() {
            const id = document.getElementById('editTransactionId').value;

            if (!confirm('Êtes-vous sûr de vouloir supprimer cette transaction?')) {
                return;
            }

            // Utilisation de l'URL pré-générée en remplaçant '0' par l'ID réel
            const url = API_URLS.delete.replace('/0', '/' + id);

            try {
                const response = await fetch(url, { method: 'DELETE' });

                if (response.ok) {
                    alert('Transaction supprimée!');
                    const modal = bootstrap.Modal.getInstance(document.getElementById('editTransactionModal'));
                    modal.hide();

                    await loadTransactions();
                    await loadStats();
                } else {
                    alert('Erreur lors de la suppression');
                }
            } catch (error) {
                alert('Erreur réseau');
            }
        }
    </script>
{% endblock %}
", "transactions/index.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/transactions/index.html.twig");
    }
}
