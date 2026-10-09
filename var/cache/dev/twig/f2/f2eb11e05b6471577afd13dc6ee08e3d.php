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

/* auth/new_password.html.twig */
class __TwigTemplate_3864085da171531d2b837e339390718f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/new_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/new_password.html.twig"));

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

        yield "Créer un nouveau mot de passe - Budget App";
        
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
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings");
        yield "\">Paramètres</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-gear text-black\" style=\"font-size: 15px;\"></span>
                        Créer un nouveau mot de passe
                    </li>
                </ol>
            </nav>
        </div>

        <h6 class=\"mb-0 fs-4 text-black fw-bold\">Nouveau mot de passe</h6><br>
        <div class=\"form m-auto\">
            <div class=\" mb-4 position-relative\">
                <label class=\"position-absolute text-muted fs-6\" style=\"top: -13px; left: 0; z-index: 5;\">Mot de passe</label>
                <div class=\"border rounded-3 d-flex align-items-center\" style=\"height: 40px;\">
                    <input type=\"password\" id=\"password\" class=\"form-control border-0 bg-transparent text-muted fs-6\"
                           placeholder=\"6 - 20 caractères\" style=\"box-shadow: none;\">
                </div>
            </div>
            <div class=\" mb-4 position-relative\">
                <label class=\"position-absolute text-muted fs-6\" style=\"top: -13px; left: 0; z-index: 5;\">Confirmer mot de passe</label>
                <div class=\"border rounded-3 d-flex align-items-center\" style=\"height: 40px;\">
                    <input type=\"password\" id=\"confirmPassword\" class=\"form-control border-0 bg-transparent text-muted fs-6\"
                           placeholder=\"6 - 20 caractères\" style=\"box-shadow: none;\">
                </div>
            </div>
            <div class=\"d-flex justify-content-end gap-2\">
                <button class=\"btn btn-primary text-white\" id=\"btnToOTP\">Réinitialiser le mot de passe</button>
            </div>
        </div>

        <!-- MODALS -->
        <div class=\"modal fade modal-top\" id=\"otpModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog m-0 w-100 shadow-lg\">
                <div class=\"modal-content rounded-4 p-4 text-center\">
                    <button type=\"button\" class=\"btn-close position-absolute top-0 start-0 m-3\" data-bs-dismiss=\"modal\">
                    </button>
                    <h6 class=\"fw-semibold mb-4\">Verification OTP</h6>
                    <div class=\"d-flex justify-content-center gap-3 mb-3\">
                        <input type=\"text\" maxlength=\"1\" class=\"otp-input form-control text-center fw-bold fs-4\" style=\"width: 50px; height: 50px;\" />
                        <input type=\"text\" maxlength=\"1\" class=\"otp-input form-control text-center fw-bold fs-4\" style=\"width: 50px; height: 50px;\" />
                        <input type=\"text\" maxlength=\"1\" class=\"otp-input form-control text-center fw-bold fs-4\" style=\"width: 50px; height: 50px;\" />
                        <input type=\"text\" maxlength=\"1\" class=\"otp-input form-control text-center fw-bold fs-4\" style=\"width: 50px; height: 50px;\" />
                    </div>
                    <p class=\"text-muted mb-1 small\">Un code a été envoyé à votre téléphone </p>
                    <p class=\"mb-4\"><span id=\"resendText\" class=\"text-primary fw-semibold\"><span id=\"timer\">01:00</span></span></p><br>
                    <button class=\"btn btn-primary w-100 rounded-3 py-2\" id=\"btnToLoading\">Continuer</button>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"loadingModal\" data-bs-backdrop=\"static\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content border-0 bg-transparent text-center\">
                    <div class=\"spinner-border text-white mb-3\" style=\"width: 3rem; height: 3rem\"></div>
                    <p class=\"text-white fw-bold\">Encours...</p>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"successModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content border-0 rounded-4 p-5 text-center bg-primary text-white overflow-hidden\">
                    <div class=\"bg-white rounded-4 p-4 text-dark shadow position-relative\" style=\"z-index: 2\">
                        <div class=\"bg-success rounded-circle d-inline-flex p-3 mb-3 text-white\">
                            <i class=\"bi bi-check-lg fs-1\"></i>
                        </div>
                        <h4 class=\"fw-bold\">Succes !</h4>
                        <p class=\"text-muted small\">Votre mot de passe a été modifié !</p>
                        <button class=\"btn btn-primary w-100 py-3\" id=\"btnDone\">Terminer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            // Initialisation des modals
            const modalOtp = new bootstrap.Modal(document.getElementById(\"otpModal\"));
            const modalLoading = new bootstrap.Modal(document.getElementById(\"loadingModal\"));
            const modalSuccess = new bootstrap.Modal(document.getElementById(\"successModal\"));

            // 1. Ouvrir OTP au clic sur Confirmer
            const btnToOTP = document.getElementById(\"btnToOTP\");

            if (btnToOTP) {
                btnToOTP.addEventListener(\"click\", () => {
                    const password = document.getElementById('password').value;
                    const confirmPassword = document.getElementById('confirmPassword').value;

                    if (password.length < 6) {
                        alert('Le mot de passe doit contenir au moins 6 caractères');
                        return;
                    }

                    if (password !== confirmPassword) {
                        alert('Les mots de passe ne correspondent pas');
                        return;
                    }

                    modalOtp.show();
                    startTimer();
                });
            }

            // 2. OTP -> Loading -> Succès
            const btnToLoading = document.getElementById(\"btnToLoading\");

            if (btnToLoading) {
                btnToLoading.addEventListener(\"click\", () => {
                    // Vérification OTP basique
                    let otp = \"\";
                    document.querySelectorAll('.otp-input').forEach(input => otp += input.value);

                    if (otp.length < 4) {
                        alert('Veuillez entrer le code complet');
                        return;
                    }

                    modalOtp.hide();

                    // On attend un petit délai pour que la fermeture de OTP soit fluide
                    setTimeout(() => {
                        modalLoading.show();

                        // Simulation du traitement (2 secondes)
                        setTimeout(() => {
                            modalLoading.hide();

                            // Ici on ferait normalement l'appel API pour changer le mot de passe
                            // fetch('/api/change-password', ...)

                            // On affiche le succès après la fermeture du chargement
                            setTimeout(() => modalSuccess.show(), 500);
                        }, 2000);
                    }, 400);
                });
            }

            // 3. Redirection Home
            const btnDone = document.getElementById(\"btnDone\");

            if (btnDone) {
                btnDone.addEventListener(\"click\", () => {
                    window.location.href = \"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings");
        yield "\";
                });
            }

            // 4. Auto-focus OTP inputs
            const otpInputs = document.querySelectorAll(\".otp-input\");

            otpInputs.forEach((input, index) => {
                input.addEventListener(\"input\", () => {
                    if (input.value && index < otpInputs.length - 1) {
                        otpInputs[index + 1].focus();
                    }
                });

                input.addEventListener(\"keydown\", (e) => {
                    if (e.key === \"Backspace\" && !e.target.value && index > 0) {
                        otpInputs[index - 1].focus();
                    }
                });
            });

            // 5. Timer OTP
            let timeLeft = 60;
            let timerInterval;

            function startTimer() {
                timeLeft = 60;
                const timerElement = document.getElementById(\"timer\");

                if (timerInterval) clearInterval(timerInterval);

                if (timerElement) {
                    updateTimerDisplay();
                    timerInterval = setInterval(() => {
                        timeLeft--;
                        updateTimerDisplay();

                        if (timeLeft <= 0) {
                            clearInterval(timerInterval);
                        }
                    }, 1000);
                }
            }

            function updateTimerDisplay() {
                const timerElement = document.getElementById(\"timer\");
                let m = Math.floor(timeLeft / 60);
                let s = timeLeft % 60;
                timerElement.textContent = `\${String(m).padStart(2, '0')}:\${String(s).padStart(2, '0')}`;
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
        return "auth/new_password.html.twig";
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
        return array (  257 => 155,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un nouveau mot de passe - Budget App{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_settings') }}\">Paramètres</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-gear text-black\" style=\"font-size: 15px;\"></span>
                        Créer un nouveau mot de passe
                    </li>
                </ol>
            </nav>
        </div>

        <h6 class=\"mb-0 fs-4 text-black fw-bold\">Nouveau mot de passe</h6><br>
        <div class=\"form m-auto\">
            <div class=\" mb-4 position-relative\">
                <label class=\"position-absolute text-muted fs-6\" style=\"top: -13px; left: 0; z-index: 5;\">Mot de passe</label>
                <div class=\"border rounded-3 d-flex align-items-center\" style=\"height: 40px;\">
                    <input type=\"password\" id=\"password\" class=\"form-control border-0 bg-transparent text-muted fs-6\"
                           placeholder=\"6 - 20 caractères\" style=\"box-shadow: none;\">
                </div>
            </div>
            <div class=\" mb-4 position-relative\">
                <label class=\"position-absolute text-muted fs-6\" style=\"top: -13px; left: 0; z-index: 5;\">Confirmer mot de passe</label>
                <div class=\"border rounded-3 d-flex align-items-center\" style=\"height: 40px;\">
                    <input type=\"password\" id=\"confirmPassword\" class=\"form-control border-0 bg-transparent text-muted fs-6\"
                           placeholder=\"6 - 20 caractères\" style=\"box-shadow: none;\">
                </div>
            </div>
            <div class=\"d-flex justify-content-end gap-2\">
                <button class=\"btn btn-primary text-white\" id=\"btnToOTP\">Réinitialiser le mot de passe</button>
            </div>
        </div>

        <!-- MODALS -->
        <div class=\"modal fade modal-top\" id=\"otpModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog m-0 w-100 shadow-lg\">
                <div class=\"modal-content rounded-4 p-4 text-center\">
                    <button type=\"button\" class=\"btn-close position-absolute top-0 start-0 m-3\" data-bs-dismiss=\"modal\">
                    </button>
                    <h6 class=\"fw-semibold mb-4\">Verification OTP</h6>
                    <div class=\"d-flex justify-content-center gap-3 mb-3\">
                        <input type=\"text\" maxlength=\"1\" class=\"otp-input form-control text-center fw-bold fs-4\" style=\"width: 50px; height: 50px;\" />
                        <input type=\"text\" maxlength=\"1\" class=\"otp-input form-control text-center fw-bold fs-4\" style=\"width: 50px; height: 50px;\" />
                        <input type=\"text\" maxlength=\"1\" class=\"otp-input form-control text-center fw-bold fs-4\" style=\"width: 50px; height: 50px;\" />
                        <input type=\"text\" maxlength=\"1\" class=\"otp-input form-control text-center fw-bold fs-4\" style=\"width: 50px; height: 50px;\" />
                    </div>
                    <p class=\"text-muted mb-1 small\">Un code a été envoyé à votre téléphone </p>
                    <p class=\"mb-4\"><span id=\"resendText\" class=\"text-primary fw-semibold\"><span id=\"timer\">01:00</span></span></p><br>
                    <button class=\"btn btn-primary w-100 rounded-3 py-2\" id=\"btnToLoading\">Continuer</button>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"loadingModal\" data-bs-backdrop=\"static\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content border-0 bg-transparent text-center\">
                    <div class=\"spinner-border text-white mb-3\" style=\"width: 3rem; height: 3rem\"></div>
                    <p class=\"text-white fw-bold\">Encours...</p>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"successModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content border-0 rounded-4 p-5 text-center bg-primary text-white overflow-hidden\">
                    <div class=\"bg-white rounded-4 p-4 text-dark shadow position-relative\" style=\"z-index: 2\">
                        <div class=\"bg-success rounded-circle d-inline-flex p-3 mb-3 text-white\">
                            <i class=\"bi bi-check-lg fs-1\"></i>
                        </div>
                        <h4 class=\"fw-bold\">Succes !</h4>
                        <p class=\"text-muted small\">Votre mot de passe a été modifié !</p>
                        <button class=\"btn btn-primary w-100 py-3\" id=\"btnDone\">Terminer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            // Initialisation des modals
            const modalOtp = new bootstrap.Modal(document.getElementById(\"otpModal\"));
            const modalLoading = new bootstrap.Modal(document.getElementById(\"loadingModal\"));
            const modalSuccess = new bootstrap.Modal(document.getElementById(\"successModal\"));

            // 1. Ouvrir OTP au clic sur Confirmer
            const btnToOTP = document.getElementById(\"btnToOTP\");

            if (btnToOTP) {
                btnToOTP.addEventListener(\"click\", () => {
                    const password = document.getElementById('password').value;
                    const confirmPassword = document.getElementById('confirmPassword').value;

                    if (password.length < 6) {
                        alert('Le mot de passe doit contenir au moins 6 caractères');
                        return;
                    }

                    if (password !== confirmPassword) {
                        alert('Les mots de passe ne correspondent pas');
                        return;
                    }

                    modalOtp.show();
                    startTimer();
                });
            }

            // 2. OTP -> Loading -> Succès
            const btnToLoading = document.getElementById(\"btnToLoading\");

            if (btnToLoading) {
                btnToLoading.addEventListener(\"click\", () => {
                    // Vérification OTP basique
                    let otp = \"\";
                    document.querySelectorAll('.otp-input').forEach(input => otp += input.value);

                    if (otp.length < 4) {
                        alert('Veuillez entrer le code complet');
                        return;
                    }

                    modalOtp.hide();

                    // On attend un petit délai pour que la fermeture de OTP soit fluide
                    setTimeout(() => {
                        modalLoading.show();

                        // Simulation du traitement (2 secondes)
                        setTimeout(() => {
                            modalLoading.hide();

                            // Ici on ferait normalement l'appel API pour changer le mot de passe
                            // fetch('/api/change-password', ...)

                            // On affiche le succès après la fermeture du chargement
                            setTimeout(() => modalSuccess.show(), 500);
                        }, 2000);
                    }, 400);
                });
            }

            // 3. Redirection Home
            const btnDone = document.getElementById(\"btnDone\");

            if (btnDone) {
                btnDone.addEventListener(\"click\", () => {
                    window.location.href = \"{{ path('app_settings') }}\";
                });
            }

            // 4. Auto-focus OTP inputs
            const otpInputs = document.querySelectorAll(\".otp-input\");

            otpInputs.forEach((input, index) => {
                input.addEventListener(\"input\", () => {
                    if (input.value && index < otpInputs.length - 1) {
                        otpInputs[index + 1].focus();
                    }
                });

                input.addEventListener(\"keydown\", (e) => {
                    if (e.key === \"Backspace\" && !e.target.value && index > 0) {
                        otpInputs[index - 1].focus();
                    }
                });
            });

            // 5. Timer OTP
            let timeLeft = 60;
            let timerInterval;

            function startTimer() {
                timeLeft = 60;
                const timerElement = document.getElementById(\"timer\");

                if (timerInterval) clearInterval(timerInterval);

                if (timerElement) {
                    updateTimerDisplay();
                    timerInterval = setInterval(() => {
                        timeLeft--;
                        updateTimerDisplay();

                        if (timeLeft <= 0) {
                            clearInterval(timerInterval);
                        }
                    }, 1000);
                }
            }

            function updateTimerDisplay() {
                const timerElement = document.getElementById(\"timer\");
                let m = Math.floor(timeLeft / 60);
                let s = timeLeft % 60;
                timerElement.textContent = `\${String(m).padStart(2, '0')}:\${String(s).padStart(2, '0')}`;
            }
        });
    </script>
{% endblock %}
", "auth/new_password.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/auth/new_password.html.twig");
    }
}
