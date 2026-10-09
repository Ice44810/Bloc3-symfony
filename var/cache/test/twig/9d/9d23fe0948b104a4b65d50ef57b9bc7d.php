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

/* profile/index.html.twig */
class __TwigTemplate_a8192bc563a8c02520fb556154ef8863 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

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

        yield "Profil - Budget App";
        
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
         PAGE: PROFIL
         Fonctionnalité: Afficher et modifier les informations du profil utilisateur
     -->

    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-person-fill text-black\" style=\"font-size: 15px;\"></span>
                        Profil
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container-fluid p-0\">
            <div class=\"profile-header d-flex align-items-center justify-content-between p-3 my-1 bg-white\">
                <div class=\"d-flex align-items-center\">
                    <img src=\"";
        // line 27
        yield (((($tmp = (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "avatar", [], "any", false, false, false, 27), "/assets/images/profil.jpg")) : ("/assets/images/profil.jpg")), "html", null, true)) : ("/assets/images/profil.jpg"));
        yield "\" alt=\"Profil\"
                        class=\"rounded-circle profile-img me-3\" style=\"width: 60px; height: 60px;\" id=\"userAvatar\">
                    <div>
                        <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\">
                            <h5 class=\"mb-0 fw-bold\" id=\"userName\">";
        // line 31
        yield (((($tmp = (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "fullName", [], "any", false, false, false, 31), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), "@"), 0, [], "array", false, false, false, 31))) : (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), "@"), 0, [], "array", false, false, false, 31))), "html", null, true)) : ("Utilisateur"));
        yield "</h5>
                        </a>
                        <p class=\"cardNumber\">
                            <span class=\"text-muted small mb-0\">ID: <span id=\"userId\">";
        // line 34
        yield (((($tmp = (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true)) : ("N/A"));
        yield "</span>
                                <i class=\"bi bi-files text-primary\" role=\"button\" title=\"Copier le numéro\"></i></span>
                        </p>
                    </div>
                </div>
                <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\"><i class=\"bi bi-chevron-right fs-5 text-muted\"></i></a>
            </div>

            <div class=\"list-group list-group-flush\">

                <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_qr");
        yield "\" class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-primary-subtle text-primary\"><i class=\"bi bi-qr-code-scan\"></i>
                        </div>
                        <span>QR code transfert</span>
                    </div>
                    <i class=\"bi bi-chevron-right text-muted\"></i>
                </a>

                <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bank_history");
        yield "\"
                    class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-warning-subtle text-warning\"><i class=\"bi bi-cash\"></i></div>
                        <span>Balance Compte</span>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <span class=\"me-3 fw-bold\" id=\"balanceDisplay\">--</span>
                        <i class=\"bi bi-chevron-right text-muted\"></i>
                    </div>
                </a>

                <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rewards");
        yield "\" class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-danger-subtle text-danger\"><i class=\"bi bi-gift-fill\"></i></div>
                        <span>Mes Cadeaux</span>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <span class=\"me-3 fw-bold\" id=\"rewardsCount\">--</span>
                        <i class=\"bi bi-chevron-right text-muted\"></i>
                    </div>
                </a>

                <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_banque");
        yield "\" class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-info-subtle text-info\"><i class=\"bi bi-bank\"></i></div>
                        <span>Banque</span>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <span class=\"me-3 text-muted\">1 lien</span>
                        <i class=\"bi bi-chevron-right text-muted\"></i>
                    </div>
                </a>

                <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bill");
        yield "\" class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-success-subtle text-success\"><i
                                class=\"bi bi-file-earmark-text\"></i>
                        </div>
                        <span>Gestion des Factures</span>
                    </div>
                    <i class=\"bi bi-chevron-right text-muted\"></i>
                </a>

                <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_topup");
        yield "\" class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-secondary-subtle text-secondary\"><i
                                class=\"bi bi-credit-card-2-back\"></i></div>
                        <span>Lien Paiement</span>
                    </div>
                    <i class=\"bi bi-chevron-right text-muted\"></i>
                </a>

                <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_card_info");
        yield "\"
                    class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-dark-subtle text-dark\"><i class=\"bi bi-credit-card\"></i></div>
                        <span>Carte de Crédit</span>
                    </div>
                    <i class=\"bi bi-chevron-right text-muted\"></i>
                </a>

                <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\"
                    class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-primary-subtle text-primary\"><i class=\"bi bi-people-fill\"></i>
                        </div>
                        <span>Gestion Contacts</span>
                    </div>
                    <i class=\"bi bi-chevron-right text-muted\"></i>
                </a>

                <a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings");
        yield "\" class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-secondary-subtle text-secondary\"><i class=\"bi bi-gear-fill\"></i>
                        </div>
                        <span>Paramètres</span>
                    </div>
                    <i class=\"bi bi-chevron-right text-muted\"></i>
                </a>
            </div>
        </div>
    </div>

    <!--
         MODAL DE MODIFICATION DU PROFIL
         Permet de modifier les informations personnelles
     -->
    <div class=\"modal fade\" id=\"editProfileModal\" tabindex=\"-1\" aria-labelledby=\"editProfileModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"editProfileModalLabel\">Modifier le Profil</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"editProfileForm\">
                        <!-- Email -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Email</label>
                            <input type=\"email\" class=\"form-control\" id=\"profileEmail\" value=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 153, $this->source); })()), "email", [], "any", false, false, false, 153), "html", null, true);
        yield "\" required>
                        </div>

                        <!-- Nom complet -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Nom complet</label>
                            <input type=\"text\" class=\"form-control\" id=\"profileFullName\" value=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 159, $this->source); })()), "fullName", [], "any", false, false, false, 159), "html", null, true);
        yield "\" placeholder=\"Votre nom complet\">
                        </div>

                        <!-- Téléphone -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Téléphone</label>
                            <input type=\"tel\" class=\"form-control\" id=\"profilePhone\" value=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 165, $this->source); })()), "phone", [], "any", false, false, false, 165), "html", null, true);
        yield "\" placeholder=\"Votre numéro de téléphone\">
                        </div>

                        <!-- Adresse -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Adresse</label>
                            <input type=\"text\" class=\"form-control\" id=\"profileAddress\" value=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 171, $this->source); })()), "address", [], "any", false, false, false, 171), "html", null, true);
        yield "\" placeholder=\"Votre adresse\">
                        </div>

                        <!-- Code postal et Ville -->
                        <div class=\"row\">
                            <div class=\"col-6 mb-3\">
                                <label class=\"form-label\">Code postal</label>
                                <input type=\"text\" class=\"form-control\" id=\"profilePostcode\" value=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 178, $this->source); })()), "postcode", [], "any", false, false, false, 178), "html", null, true);
        yield "\" placeholder=\"Code postal\">
                            </div>
                            <div class=\"col-6 mb-3\">
                                <label class=\"form-label\">Ville</label>
                                <input type=\"text\" class=\"form-control\" id=\"profileVille\" value=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 182, $this->source); })()), "ville", [], "any", false, false, false, 182), "html", null, true);
        yield "\" placeholder=\"Ville\">
                            </div>
                        </div>

                        <!-- Bouton de soumission -->
                        <button type=\"submit\" class=\"btn btn-primary w-100\">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class=\"footer py-2\">
        <div class=\"d-flex justify-content-around align-items-center\">
            <a href=\"";
        // line 197
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"footer-link\">
                <i class=\"bi bi-house-door-fill\"></i>
                <span>Accueil</span>
            </a>
            <a href=\"";
        // line 201
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transactions_view");
        yield "\" class=\"footer-link\">
                <i class=\"bi bi-clock-history\"></i>
                <span>Historique</span>
            </a>
            <a href=\"";
        // line 205
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_qr");
        yield "\" class=\"footer-link\">
                <i class=\"bi bi-qr-code-scan\"></i>
                <span>QR</span>
            </a>
            <a href=\"";
        // line 209
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rewards");
        yield "\" class=\"footer-link\">
                <i class=\"bi bi-gift\"></i>
                <span>Récompenses</span>
            </a>
            <a href=\"";
        // line 213
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"active-link\">
                <i class=\"bi bi-person\"></i>
                <span>Profil</span>
            </a>
        </div>
    </footer>

    <script>
        // GESTION DU CHARGEMENT DE LA PAGE

        document.addEventListener('DOMContentLoaded', async () => {
            // Charger les données du profil
            await loadProfile();

            // Charger les statistiques
            await loadStats();

            // Configurer le formulaire de modification
            setupForm();
        });

        // Charger les données du profil utilisateur depuis l'API

        async function loadProfile() {
            try {

                // APPEL API POUR LE PROFIL
                // Récupère les informations de l'utilisateur connecté
                const response = await fetch('";
        // line 241
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_profile");
        yield "');
                const result = await response.json();

                if (result.success && result.user) {
                    const profile = result.user;
                    // Mettre à jour les éléments du DOM
                    document.getElementById('userName').textContent = profile.fullName || profile.email.split('@')[0];
                    document.getElementById('userEmail').textContent = profile.email;
                    document.getElementById('userId').textContent = profile.id;

                    // Formater le rôle (admin -> Administrateur)
                    const roleElement = document.getElementById('userRole');
                    if (roleElement) {
                        roleElement.textContent = profile.role === 'admin' || (profile.roles && profile.roles.includes('ROLE_ADMIN')) ? 'Administrateur' : 'Utilisateur';
                    }

                    // Afficher le nombre de cadeaux
                    const rewardsCountElement = document.getElementById('rewardsCount');
                    if (rewardsCountElement) {
                        // Valeur arbitraire ou récupérée si disponible
                        rewardsCountElement.textContent = (profile.rewardsCount || 21) + ' Cadeaux';
                    }

                    // Mettre à jour l'avatar si disponible
                    if (profile.avatar) {
                        document.getElementById('userAvatar').src = profile.avatar;
                    }

                    // REMPLIR LE FORMULAIRE DE MODIFICATION

                    document.getElementById('profileEmail').value = profile.email || '';
                    document.getElementById('profileFullName').value = profile.fullName || '';
                    document.getElementById('profilePhone').value = profile.phone || '';
                    document.getElementById('profileAddress').value = profile.address || '';
                    document.getElementById('profilePostcode').value = profile.postcode || '';
                    document.getElementById('profileVille').value = profile.ville || '';
                }
            } catch (error) {
                console.error('Erreur chargement profil:', error);
                // Afficher des valeurs par défaut en cas d'erreur
                document.getElementById('userName').textContent = 'Utilisateur';
                document.getElementById('userEmail').textContent = 'email@exemple.com';
            }
        }

        // Charger les statistiques du compte

        async function loadStats() {
            try {
                // APPEL API POUR LES STATISTIQUES
                // Récupère le solde et le nombre de transactions

                const response = await fetch('";
        // line 293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_dashboard");
        yield "');
                const stats = await response.json();

                if (stats.success) {
                    // Formater et afficher le solde
                    const balance = parseFloat(stats.balance || 0).toFixed(2);
                    document.getElementById('userBalance').textContent = `\${balance} €`;
                    document.getElementById('balanceDisplay').textContent = `\${balance} €`;

                    // Stocker le solde dans le localStorage pour le partager
                    localStorage.setItem('userBalance', balance);

                    // Afficher le nombre de transactions
                    // Si transactionCount n'est pas fourni, on compte les transactions récentes
                    const count = stats.transactionCount || (stats.recent_transactions ? stats.recent_transactions.length : 0);
                    document.getElementById('transactionCount').textContent = count;
                }
            } catch (error) {
                console.error('Erreur chargement stats:', error);
                document.getElementById('userBalance').textContent = '0.00 €';
                document.getElementById('balanceDisplay').textContent = '0.00 €';
                document.getElementById('transactionCount').textContent = '0';
            }
        }

        // Configurer le formulaire de modification du profil

        function setupForm() {
            const form = document.getElementById('editProfileForm');

            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                // COLLECTER LES DONNÉES DU FORMULAIRE
                const data = {
                    email: document.getElementById('profileEmail').value,
                    fullName: document.getElementById('profileFullName').value || null,
                    phone: document.getElementById('profilePhone').value || null,
                    address: document.getElementById('profileAddress').value || null,
                    postcode: document.getElementById('profilePostcode').value || null,
                    ville: document.getElementById('profileVille').value || null
                };

                try {
                    // APPEL API POUR METTRE À JOUR LE PROFIL
                    const response = await fetch('";
        // line 337
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_profile");
        yield "', {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(data)
                    });

                    const result = await response.json();

                    if (result.success) {
                        alert('Profil mis à jour avec succès!');

                        // Fermer le modal
                        const modal = bootstrap.Modal.getInstance(document.getElementById('editProfileModal'));
                        modal.hide();

                        // Recharger les données
                        await loadProfile();
                    } else {
                        alert(result.error || 'Erreur lors de la mise à jour');
                    }
                } catch (error) {
                    console.error('Erreur mise à jour profil:', error);
                    alert('Erreur lors de la mise à jour');
                }
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
        return "profile/index.html.twig";
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
        return array (  517 => 337,  470 => 293,  415 => 241,  384 => 213,  377 => 209,  370 => 205,  363 => 201,  356 => 197,  338 => 182,  331 => 178,  321 => 171,  312 => 165,  303 => 159,  294 => 153,  263 => 125,  250 => 115,  238 => 106,  226 => 97,  213 => 87,  199 => 76,  185 => 65,  170 => 53,  158 => 44,  150 => 39,  142 => 34,  136 => 31,  132 => 30,  126 => 27,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil - Budget App{% endblock %}

{% block body %}
    <!--
         PAGE: PROFIL
         Fonctionnalité: Afficher et modifier les informations du profil utilisateur
     -->

    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-person-fill text-black\" style=\"font-size: 15px;\"></span>
                        Profil
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"container-fluid p-0\">
            <div class=\"profile-header d-flex align-items-center justify-content-between p-3 my-1 bg-white\">
                <div class=\"d-flex align-items-center\">
                    <img src=\"{{ user ? user.avatar|default('/assets/images/profil.jpg') : '/assets/images/profil.jpg' }}\" alt=\"Profil\"
                        class=\"rounded-circle profile-img me-3\" style=\"width: 60px; height: 60px;\" id=\"userAvatar\">
                    <div>
                        <a href=\"{{ path('app_profile_edit') }}\">
                            <h5 class=\"mb-0 fw-bold\" id=\"userName\">{{ user ? user.fullName|default(user.email|split('@')[0]) : 'Utilisateur' }}</h5>
                        </a>
                        <p class=\"cardNumber\">
                            <span class=\"text-muted small mb-0\">ID: <span id=\"userId\">{{ user ? user.id : 'N/A' }}</span>
                                <i class=\"bi bi-files text-primary\" role=\"button\" title=\"Copier le numéro\"></i></span>
                        </p>
                    </div>
                </div>
                <a href=\"{{ path('app_profile_edit') }}\"><i class=\"bi bi-chevron-right fs-5 text-muted\"></i></a>
            </div>

            <div class=\"list-group list-group-flush\">

                <a href=\"{{ path('app_qr') }}\" class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-primary-subtle text-primary\"><i class=\"bi bi-qr-code-scan\"></i>
                        </div>
                        <span>QR code transfert</span>
                    </div>
                    <i class=\"bi bi-chevron-right text-muted\"></i>
                </a>

                <a href=\"{{ path('app_bank_history') }}\"
                    class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-warning-subtle text-warning\"><i class=\"bi bi-cash\"></i></div>
                        <span>Balance Compte</span>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <span class=\"me-3 fw-bold\" id=\"balanceDisplay\">--</span>
                        <i class=\"bi bi-chevron-right text-muted\"></i>
                    </div>
                </a>

                <a href=\"{{ path('app_rewards') }}\" class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-danger-subtle text-danger\"><i class=\"bi bi-gift-fill\"></i></div>
                        <span>Mes Cadeaux</span>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <span class=\"me-3 fw-bold\" id=\"rewardsCount\">--</span>
                        <i class=\"bi bi-chevron-right text-muted\"></i>
                    </div>
                </a>

                <a href=\"{{ path('app_banque') }}\" class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-info-subtle text-info\"><i class=\"bi bi-bank\"></i></div>
                        <span>Banque</span>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <span class=\"me-3 text-muted\">1 lien</span>
                        <i class=\"bi bi-chevron-right text-muted\"></i>
                    </div>
                </a>

                <a href=\"{{ path('app_bill') }}\" class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-success-subtle text-success\"><i
                                class=\"bi bi-file-earmark-text\"></i>
                        </div>
                        <span>Gestion des Factures</span>
                    </div>
                    <i class=\"bi bi-chevron-right text-muted\"></i>
                </a>

                <a href=\"{{ path('app_topup') }}\" class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-secondary-subtle text-secondary\"><i
                                class=\"bi bi-credit-card-2-back\"></i></div>
                        <span>Lien Paiement</span>
                    </div>
                    <i class=\"bi bi-chevron-right text-muted\"></i>
                </a>

                <a href=\"{{ path('app_card_info') }}\"
                    class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-dark-subtle text-dark\"><i class=\"bi bi-credit-card\"></i></div>
                        <span>Carte de Crédit</span>
                    </div>
                    <i class=\"bi bi-chevron-right text-muted\"></i>
                </a>

                <a href=\"{{ path('app_contact') }}\"
                    class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-primary-subtle text-primary\"><i class=\"bi bi-people-fill\"></i>
                        </div>
                        <span>Gestion Contacts</span>
                    </div>
                    <i class=\"bi bi-chevron-right text-muted\"></i>
                </a>

                <a href=\"{{ path('app_settings') }}\" class=\"list-group-item d-flex align-items-center justify-content-between py-3\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-square me-3 bg-secondary-subtle text-secondary\"><i class=\"bi bi-gear-fill\"></i>
                        </div>
                        <span>Paramètres</span>
                    </div>
                    <i class=\"bi bi-chevron-right text-muted\"></i>
                </a>
            </div>
        </div>
    </div>

    <!--
         MODAL DE MODIFICATION DU PROFIL
         Permet de modifier les informations personnelles
     -->
    <div class=\"modal fade\" id=\"editProfileModal\" tabindex=\"-1\" aria-labelledby=\"editProfileModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"editProfileModalLabel\">Modifier le Profil</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <form id=\"editProfileForm\">
                        <!-- Email -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Email</label>
                            <input type=\"email\" class=\"form-control\" id=\"profileEmail\" value=\"{{ user.email }}\" required>
                        </div>

                        <!-- Nom complet -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Nom complet</label>
                            <input type=\"text\" class=\"form-control\" id=\"profileFullName\" value=\"{{ user.fullName }}\" placeholder=\"Votre nom complet\">
                        </div>

                        <!-- Téléphone -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Téléphone</label>
                            <input type=\"tel\" class=\"form-control\" id=\"profilePhone\" value=\"{{ user.phone }}\" placeholder=\"Votre numéro de téléphone\">
                        </div>

                        <!-- Adresse -->
                        <div class=\"mb-3\">
                            <label class=\"form-label\">Adresse</label>
                            <input type=\"text\" class=\"form-control\" id=\"profileAddress\" value=\"{{ user.address }}\" placeholder=\"Votre adresse\">
                        </div>

                        <!-- Code postal et Ville -->
                        <div class=\"row\">
                            <div class=\"col-6 mb-3\">
                                <label class=\"form-label\">Code postal</label>
                                <input type=\"text\" class=\"form-control\" id=\"profilePostcode\" value=\"{{ user.postcode }}\" placeholder=\"Code postal\">
                            </div>
                            <div class=\"col-6 mb-3\">
                                <label class=\"form-label\">Ville</label>
                                <input type=\"text\" class=\"form-control\" id=\"profileVille\" value=\"{{ user.ville }}\" placeholder=\"Ville\">
                            </div>
                        </div>

                        <!-- Bouton de soumission -->
                        <button type=\"submit\" class=\"btn btn-primary w-100\">Enregistrer</button>
                    </form>
                </div>
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
        // GESTION DU CHARGEMENT DE LA PAGE

        document.addEventListener('DOMContentLoaded', async () => {
            // Charger les données du profil
            await loadProfile();

            // Charger les statistiques
            await loadStats();

            // Configurer le formulaire de modification
            setupForm();
        });

        // Charger les données du profil utilisateur depuis l'API

        async function loadProfile() {
            try {

                // APPEL API POUR LE PROFIL
                // Récupère les informations de l'utilisateur connecté
                const response = await fetch('{{ path('get_profile') }}');
                const result = await response.json();

                if (result.success && result.user) {
                    const profile = result.user;
                    // Mettre à jour les éléments du DOM
                    document.getElementById('userName').textContent = profile.fullName || profile.email.split('@')[0];
                    document.getElementById('userEmail').textContent = profile.email;
                    document.getElementById('userId').textContent = profile.id;

                    // Formater le rôle (admin -> Administrateur)
                    const roleElement = document.getElementById('userRole');
                    if (roleElement) {
                        roleElement.textContent = profile.role === 'admin' || (profile.roles && profile.roles.includes('ROLE_ADMIN')) ? 'Administrateur' : 'Utilisateur';
                    }

                    // Afficher le nombre de cadeaux
                    const rewardsCountElement = document.getElementById('rewardsCount');
                    if (rewardsCountElement) {
                        // Valeur arbitraire ou récupérée si disponible
                        rewardsCountElement.textContent = (profile.rewardsCount || 21) + ' Cadeaux';
                    }

                    // Mettre à jour l'avatar si disponible
                    if (profile.avatar) {
                        document.getElementById('userAvatar').src = profile.avatar;
                    }

                    // REMPLIR LE FORMULAIRE DE MODIFICATION

                    document.getElementById('profileEmail').value = profile.email || '';
                    document.getElementById('profileFullName').value = profile.fullName || '';
                    document.getElementById('profilePhone').value = profile.phone || '';
                    document.getElementById('profileAddress').value = profile.address || '';
                    document.getElementById('profilePostcode').value = profile.postcode || '';
                    document.getElementById('profileVille').value = profile.ville || '';
                }
            } catch (error) {
                console.error('Erreur chargement profil:', error);
                // Afficher des valeurs par défaut en cas d'erreur
                document.getElementById('userName').textContent = 'Utilisateur';
                document.getElementById('userEmail').textContent = 'email@exemple.com';
            }
        }

        // Charger les statistiques du compte

        async function loadStats() {
            try {
                // APPEL API POUR LES STATISTIQUES
                // Récupère le solde et le nombre de transactions

                const response = await fetch('{{ path('get_dashboard') }}');
                const stats = await response.json();

                if (stats.success) {
                    // Formater et afficher le solde
                    const balance = parseFloat(stats.balance || 0).toFixed(2);
                    document.getElementById('userBalance').textContent = `\${balance} €`;
                    document.getElementById('balanceDisplay').textContent = `\${balance} €`;

                    // Stocker le solde dans le localStorage pour le partager
                    localStorage.setItem('userBalance', balance);

                    // Afficher le nombre de transactions
                    // Si transactionCount n'est pas fourni, on compte les transactions récentes
                    const count = stats.transactionCount || (stats.recent_transactions ? stats.recent_transactions.length : 0);
                    document.getElementById('transactionCount').textContent = count;
                }
            } catch (error) {
                console.error('Erreur chargement stats:', error);
                document.getElementById('userBalance').textContent = '0.00 €';
                document.getElementById('balanceDisplay').textContent = '0.00 €';
                document.getElementById('transactionCount').textContent = '0';
            }
        }

        // Configurer le formulaire de modification du profil

        function setupForm() {
            const form = document.getElementById('editProfileForm');

            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                // COLLECTER LES DONNÉES DU FORMULAIRE
                const data = {
                    email: document.getElementById('profileEmail').value,
                    fullName: document.getElementById('profileFullName').value || null,
                    phone: document.getElementById('profilePhone').value || null,
                    address: document.getElementById('profileAddress').value || null,
                    postcode: document.getElementById('profilePostcode').value || null,
                    ville: document.getElementById('profileVille').value || null
                };

                try {
                    // APPEL API POUR METTRE À JOUR LE PROFIL
                    const response = await fetch('{{ path('update_profile') }}', {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(data)
                    });

                    const result = await response.json();

                    if (result.success) {
                        alert('Profil mis à jour avec succès!');

                        // Fermer le modal
                        const modal = bootstrap.Modal.getInstance(document.getElementById('editProfileModal'));
                        modal.hide();

                        // Recharger les données
                        await loadProfile();
                    } else {
                        alert(result.error || 'Erreur lors de la mise à jour');
                    }
                } catch (error) {
                    console.error('Erreur mise à jour profil:', error);
                    alert('Erreur lors de la mise à jour');
                }
            });
        }
    </script>
{% endblock %}

", "profile/index.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/profile/index.html.twig");
    }
}
