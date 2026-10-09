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

/* transfert/confirm.html.twig */
class __TwigTemplate_6abebf3c10929e839fcc8fd9a4b5bc0a extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transfert/confirm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transfert/confirm.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "title", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "Confirmation")) : ("Confirmation")), "html", null, true);
        yield " - Budget App";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transfert");
        yield "\">Transfert</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-arrow-left-right text-primary\" style=\"font-size: 15px;\"></span>
                        ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "title", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "Confirmation")) : ("Confirmation")), "html", null, true);
        yield "
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"transfer-card text-center\">
            <div class=\"mb-3\">
                <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "icon", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 23, $this->source); })()), "icon", [], "any", false, false, false, 23), "https://img.icons8.com/fluency/48/money-bag.png")) : ("https://img.icons8.com/fluency/48/money-bag.png")), "html", null, true);
        yield "\" alt=\"icon\">
            </div>
            <div class=\"d-flex justify-content-center align-items-center gap-1\">
                <span class=\"fs-3\">€</span>
                <span class=\"amount\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("amount", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 27, $this->source); })()), "0")) : ("0")), "html", null, true);
        yield "</span>
            </div>
            <p class=\"text-muted mb-3 small\">Montant</p>
            <div class=\"divider\">
            </div>
            <div class=\"d-flex justify-content-between\"><span class=\"text-muted small\">Frais transaction
                </span><strong class=\"small\">Gratuit</strong>
            </div>
        </div>

        <!-- MAIN CARD -->
        <div class=\"container\">
            <div class=\"card card-custom mx-0 p-3\">
                <!-- Emétteur -->
                <div>
                    <div class=\"text-muted small mb-0\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "from_label", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 42, $this->source); })()), "from_label", [], "any", false, false, false, 42), "De")) : ("De")), "html", null, true);
        yield "</div>
                    <div class=\"d-flex align-items-center gap-3\">
                        <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "from_icon", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 44, $this->source); })()), "from_icon", [], "any", false, false, false, 44), "assets/images/icons8-visa-48.png")) : ("assets/images/icons8-visa-48.png"))), "html", null, true);
        yield "\" width=\"45\"
                            alt=\"Source\" />
                        <div>
                            <div class=\"fw-semibold\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "from_name", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 47, $this->source); })()), "from_name", [], "any", false, false, false, 47), "Visa card")) : ("Visa card")), "html", null, true);
        yield "</div>
                            <div class=\"text-muted small\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "from_details", [], "any", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 48, $this->source); })()), "from_details", [], "any", false, false, false, 48), "**** **** **** 4234")) : ("**** **** **** 4234")), "html", null, true);
        yield "</div>
                        </div>
                    </div>
                </div>
                <div class=\"divider\"></div>
                <!-- Recepteur -->
                <div>
                    <div class=\"text-muted small mb-0\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "to_label", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 55, $this->source); })()), "to_label", [], "any", false, false, false, 55), "A")) : ("A")), "html", null, true);
        yield "</div>
                    <div class=\"d-flex align-items-center gap-3\">
                        <img src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "to_icon", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 57, $this->source); })()), "to_icon", [], "any", false, false, false, 57), "/assets/images/profil.jpg")) : ("/assets/images/profil.jpg")), "html", null, true);
        yield "\" class=\"rounded-circle\" width=\"45\" />
                        <div>
                            <div class=\"fw-semibold\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "to_name", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 59, $this->source); })()), "to_name", [], "any", false, false, false, 59), ((array_key_exists("recipientName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["recipientName"]) || array_key_exists("recipientName", $context) ? $context["recipientName"] : (function () { throw new RuntimeError('Variable "recipientName" does not exist.', 59, $this->source); })()), ((array_key_exists("recipient", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["recipient"]) || array_key_exists("recipient", $context) ? $context["recipient"] : (function () { throw new RuntimeError('Variable "recipient" does not exist.', 59, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 59), "fullName", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "fullName", [], "any", false, false, false, 59), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59))))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 59), "fullName", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "fullName", [], "any", false, false, false, 59), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59))))))) : (((array_key_exists("recipient", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["recipient"]) || array_key_exists("recipient", $context) ? $context["recipient"] : (function () { throw new RuntimeError('Variable "recipient" does not exist.', 59, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 59), "fullName", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "fullName", [], "any", false, false, false, 59), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59))))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 59), "fullName", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "fullName", [], "any", false, false, false, 59), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59))))))))) : (((array_key_exists("recipientName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["recipientName"]) || array_key_exists("recipientName", $context) ? $context["recipientName"] : (function () { throw new RuntimeError('Variable "recipientName" does not exist.', 59, $this->source); })()), ((array_key_exists("recipient", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["recipient"]) || array_key_exists("recipient", $context) ? $context["recipient"] : (function () { throw new RuntimeError('Variable "recipient" does not exist.', 59, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 59), "fullName", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "fullName", [], "any", false, false, false, 59), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59))))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 59), "fullName", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "fullName", [], "any", false, false, false, 59), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59))))))) : (((array_key_exists("recipient", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["recipient"]) || array_key_exists("recipient", $context) ? $context["recipient"] : (function () { throw new RuntimeError('Variable "recipient" does not exist.', 59, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 59), "fullName", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "fullName", [], "any", false, false, false, 59), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59))))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 59), "fullName", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "fullName", [], "any", false, false, false, 59), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59))))))))), "html", null, true);
        yield "</div>
                            <div class=\"text-muted small\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "to_details", [], "any", true, true, false, 60)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 60, $this->source); })()), "to_details", [], "any", false, false, false, 60), ((array_key_exists("recipientIdentifier", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["recipientIdentifier"]) || array_key_exists("recipientIdentifier", $context) ? $context["recipientIdentifier"] : (function () { throw new RuntimeError('Variable "recipientIdentifier" does not exist.', 60, $this->source); })()), "**** **** **** 0000")) : ("**** **** **** 0000")))) : (((array_key_exists("recipientIdentifier", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["recipientIdentifier"]) || array_key_exists("recipientIdentifier", $context) ? $context["recipientIdentifier"] : (function () { throw new RuntimeError('Variable "recipientIdentifier" does not exist.', 60, $this->source); })()), "**** **** **** 0000")) : ("**** **** **** 0000")))), "html", null, true);
        yield "</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- INFO TRANSFERT -->
            <div class=\"card card-custom p-3 mt-3\">
                <div class=\"info-row\">
                    <span class=\"text-muted small\">Type d'opération</span><strong>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "title", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 68, $this->source); })()), "title", [], "any", false, false, false, 68), "Transfert")) : ("Transfert")), "html", null, true);
        yield "</strong>
                </div>
                <div class=\"info-row\">
                    <span class=\"text-muted small\">Transfert à partir</span><strong>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "from_name", [], "any", true, true, false, 71)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 71, $this->source); })()), "from_name", [], "any", false, false, false, 71), "Portefeuille")) : ("Portefeuille")), "html", null, true);
        yield "</strong>
                </div>
                <div class=\"info-row\">
                    <span class=\"text-muted small\">Message</span><strong class=\"text-end\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("description", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 74, $this->source); })()), "Aucun message")) : ("Aucun message")), "html", null, true);
        yield "</strong>
                </div>
            </div>
        </div>
        <div class=\"container text-center mb-5\">
            <button class=\"btn btn-primary confirm-btn d-flex\" id=\"btnToOTP\">
                ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "button_label", [], "any", true, true, false, 80)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 80, $this->source); })()), "button_label", [], "any", false, false, false, 80), "Confirmer")) : ("Confirmer")), "html", null, true);
        yield "
            </button>
        </div>
    </div>
    <!-- MODALS -->
    <div class=\"modal fade\" id=\"otpModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content rounded-4 p-4 text-center\">
                <button type=\"button\" class=\"btn-close position-absolute top-0 start-0 m-3\"
                    data-bs-dismiss=\"modal\"></button>
                <h6 class=\"fw-semibold mb-4\">Verification OTP</h6>
                <div class=\"d-flex justify-content-center gap-3 mb-3\" id=\"otpContainer\">
                    <input type=\"text\" maxlength=\"1\" class=\"otp-input form-control text-center fw-bold fs-4\" style=\"width: 50px; height: 50px;\" />
                    <input type=\"text\" maxlength=\"1\" class=\"otp-input form-control text-center fw-bold fs-4\" style=\"width: 50px; height: 50px;\" />
                    <input type=\"text\" maxlength=\"1\" class=\"otp-input form-control text-center fw-bold fs-4\" style=\"width: 50px; height: 50px;\" />
                    <input type=\"text\" maxlength=\"1\" class=\"otp-input form-control text-center fw-bold fs-4\" style=\"width: 50px; height: 50px;\" />
                </div>
                <p class=\"text-muted mb-1 small\">
                    Un code a été envoyé à votre téléphone
                </p>
                <p class=\"mb-4\">
                    <span id=\"resendText\" class=\"text-primary fw-semibold\"><span id=\"timer\">01:00</span></span>
                </p>
                <button class=\"btn btn-primary rounded-pill py-2 fw-bold\" id=\"btnToLoading\">
                    Continuer
                </button>
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
                    <p class=\"text-muted small\">Votre transfert a été effectué !</p>
                    <div class=\"my-4\">
                        <span class=\"text-muted small\">Total Transfert</span>
                        <h2 class=\"fw-bold text-primary\" id=\"successAmountDisplay\">
                            €";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("amount", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 129, $this->source); })()), "0")) : ("0")), "html", null, true);
        yield "
                        </h2>
                    </div>
                    <a href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-primary confirm-btn py-3 mt-5\">
                        Terminer
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal d'erreur -->
    <div class=\"modal fade\" id=\"errorModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content border-0 rounded-4 p-4 text-center\">
                <div class=\"bg-danger rounded-circle d-inline-flex p-3 mb-3 text-white\">
                    <i class=\"bi bi-x-lg fs-1\"></i>
                </div>
                <h4 class=\"fw-bold\">Erreur !</h4>
                <p class=\"text-muted small\" id=\"errorMessage\">Une erreur est survenue lors du transfert.</p>
                <button class=\"btn btn-primary mt-3\" data-bs-dismiss=\"modal\">
                    Réessayer
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            // Initialisation des modals
            const otpModalEl = document.getElementById(\"otpModal\");
            const loadingModalEl = document.getElementById(\"loadingModal\");
            const successModalEl = document.getElementById(\"successModal\");
            const errorModalEl = document.getElementById(\"errorModal\");

            let modalOtp, modalLoading, modalSuccess, modalError;

            if (otpModalEl) modalOtp = new bootstrap.Modal(otpModalEl);
            if (loadingModalEl) modalLoading = new bootstrap.Modal(loadingModalEl);
            if (successModalEl) modalSuccess = new bootstrap.Modal(successModalEl);
            if (errorModalEl) modalError = new bootstrap.Modal(errorModalEl);

            // Données du transfert
            const transferData = {
                recipientIdentifier: '";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("recipientIdentifier", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["recipientIdentifier"]) || array_key_exists("recipientIdentifier", $context) ? $context["recipientIdentifier"] : (function () { throw new RuntimeError('Variable "recipientIdentifier" does not exist.', 172, $this->source); })()), "")) : ("")), "js"), "html", null, true);
        yield "',
                recipientName: '";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("recipientName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["recipientName"]) || array_key_exists("recipientName", $context) ? $context["recipientName"] : (function () { throw new RuntimeError('Variable "recipientName" does not exist.', 173, $this->source); })()), "")) : ("")), "js"), "html", null, true);
        yield "',
                amount: ";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("amount", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 174, $this->source); })()), 0)) : (0)), "html", null, true);
        yield ",
                description: '";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("description", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 175, $this->source); })()), "")) : ("")), "js"), "html", null, true);
        yield "',
                type: '";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 176, $this->source); })()), "bank_transfer")) : ("bank_transfer")), "js"), "html", null, true);
        yield "'
            };

            // Gestion du Timer OTP
            let timeLeft = 60;
            let timerInterval;

            function startTimer() {
                clearInterval(timerInterval);
                timeLeft = 60;
                updateTimerDisplay();
                const timerElement = document.getElementById(\"timer\");
                const resendElement = document.getElementById(\"resendText\");

                if (timerElement) {
                    timerInterval = setInterval(() => {
                        timeLeft--;
                        updateTimerDisplay();
                        if (timeLeft <= 0) {
                            clearInterval(timerInterval);
                            if (resendElement) {
                                resendElement.innerHTML = '<a href=\"javascript:void(0);\" id=\"resendCode\" class=\"text-primary text-decoration-none\">Renvoyer le code</a>';
                                const resendBtn = document.getElementById(\"resendCode\");
                                if (resendBtn) {
                                    resendBtn.addEventListener(\"click\", () => {
                                        startTimer();
                                        // Ici, on pourrait ajouter un appel AJAX pour renvoyer le code
                                    });
                                }
                            }
                        }
                    }, 1000);
                }
            }

            function updateTimerDisplay() {
                const timerElement = document.getElementById(\"timer\");
                if (timerElement) {
                    const minutes = Math.floor(timeLeft / 60);
                    const seconds = timeLeft % 60;
                    timerElement.textContent =
                        `\${minutes.toString().padStart(2, '0')}:\${seconds.toString().padStart(2, '0')}`;
                }
            }

            // Focus automatique sur les inputs OTP
            const otpInputs = document.querySelectorAll(\".otp-input\");
            otpInputs.forEach((input, index) => {
                input.addEventListener(\"input\", (e) => {
                    if (e.target.value.length === 1 && index < otpInputs.length - 1) {
                        otpInputs[index + 1].focus();
                    }
                });
                input.addEventListener(\"keydown\", (e) => {
                    if (e.key === \"Backspace\" && !e.target.value && index > 0) {
                        otpInputs[index - 1].focus();
                    }
                });
            });

            // 1. Ouvrir OTP au clic sur Confirmer
            const btnToOTP = document.getElementById(\"btnToOTP\");
            if (btnToOTP && modalOtp) {
                btnToOTP.addEventListener(\"click\", () => {
                    modalOtp.show();
                    startTimer();
                    setTimeout(() => {
                        if (otpInputs.length > 0) otpInputs[0].focus();
                    }, 500);
                });
            }

            // 2. OTP -> Loading -> Appel API -> Succès ou Erreur
            const btnToLoading = document.getElementById(\"btnToLoading\");
            if (btnToLoading) {
                btnToLoading.addEventListener(\"click\", () => {
                    // Vérifier si l'OTP est rempli
                    let otp = \"\";
                    otpInputs.forEach(input => otp += input.value);
                    if (otp.length < 4) {
                        // On pourrait afficher un message plus joli, mais alert suffit pour l'instant
                        // Ou mieux, ajouter une classe is-invalid aux inputs
                        otpInputs.forEach(input => input.classList.add('is-invalid'));
                        return;
                    }

                    if (modalOtp) modalOtp.hide();
                    clearInterval(timerInterval);

                    // On attend un petit délai pour que la fermeture de OTP soit fluide
                    setTimeout(() => {
                        if (modalLoading) modalLoading.show();

                        // Simulation ou Appel réel API
                        // Pour l'instant on simule le succès après un délai,
                        // mais on peut décommenter l'appel API quand le backend est prêt

                        // Appel API réel
                        fetch('";
        // line 274
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_transfert");
        yield "', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-Requested-With': 'XMLHttpRequest'
                                },
                                body: JSON.stringify(transferData)
                        })
                        .then(response => response.json())
                        .then(data => {
                             if (modalLoading) modalLoading.hide();
                             if (data.success) {
                                 if (data.balance) {
                                     sessionStorage.setItem('newBalance', data.balance);
                                 }
                                 sessionStorage.setItem('refreshTransactions', 'true');
                                 if (modalSuccess) modalSuccess.show();
                             } else {
                                 const errorMsg = document.getElementById(\"errorMessage\");
                                 if (errorMsg) errorMsg.textContent = data.error || \"Erreur inconnue\";
                                 if (modalError) modalError.show();
                             }
                        })
                        .catch(error => {
                             if (modalLoading) modalLoading.hide();
                             const errorMsg = document.getElementById(\"errorMessage\");
                             if (errorMsg) errorMsg.textContent = \"Une erreur de communication est survenue.\";
                             if (modalError) modalError.show();
                        });

                    }, 400);
                });
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
        return "transfert/confirm.html.twig";
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
        return array (  442 => 274,  341 => 176,  337 => 175,  333 => 174,  329 => 173,  325 => 172,  282 => 132,  276 => 129,  224 => 80,  215 => 74,  209 => 71,  203 => 68,  192 => 60,  188 => 59,  183 => 57,  178 => 55,  168 => 48,  164 => 47,  158 => 44,  153 => 42,  135 => 27,  128 => 23,  117 => 15,  111 => 12,  107 => 11,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}{{ config.title|default('Confirmation') }} - Budget App{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"breadcrumb mt-3\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_transfert') }}\">Transfert</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <span class=\"bi bi-arrow-left-right text-primary\" style=\"font-size: 15px;\"></span>
                        {{ config.title|default('Confirmation') }}
                    </li>
                </ol>
            </nav>
        </div>

        <div class=\"transfer-card text-center\">
            <div class=\"mb-3\">
                <img src=\"{{ config.icon|default('https://img.icons8.com/fluency/48/money-bag.png') }}\" alt=\"icon\">
            </div>
            <div class=\"d-flex justify-content-center align-items-center gap-1\">
                <span class=\"fs-3\">€</span>
                <span class=\"amount\">{{ amount|default('0') }}</span>
            </div>
            <p class=\"text-muted mb-3 small\">Montant</p>
            <div class=\"divider\">
            </div>
            <div class=\"d-flex justify-content-between\"><span class=\"text-muted small\">Frais transaction
                </span><strong class=\"small\">Gratuit</strong>
            </div>
        </div>

        <!-- MAIN CARD -->
        <div class=\"container\">
            <div class=\"card card-custom mx-0 p-3\">
                <!-- Emétteur -->
                <div>
                    <div class=\"text-muted small mb-0\">{{ config.from_label|default('De') }}</div>
                    <div class=\"d-flex align-items-center gap-3\">
                        <img src=\"{{ asset(config.from_icon|default('assets/images/icons8-visa-48.png')) }}\" width=\"45\"
                            alt=\"Source\" />
                        <div>
                            <div class=\"fw-semibold\">{{ config.from_name|default('Visa card') }}</div>
                            <div class=\"text-muted small\">{{ config.from_details|default('**** **** **** 4234') }}</div>
                        </div>
                    </div>
                </div>
                <div class=\"divider\"></div>
                <!-- Recepteur -->
                <div>
                    <div class=\"text-muted small mb-0\">{{ config.to_label|default('A') }}</div>
                    <div class=\"d-flex align-items-center gap-3\">
                        <img src=\"{{ config.to_icon|default('/assets/images/profil.jpg') }}\" class=\"rounded-circle\" width=\"45\" />
                        <div>
                            <div class=\"fw-semibold\">{{ config.to_name|default(recipientName|default(recipient|default(app.user.fullName|default(app.user.email)))) }}</div>
                            <div class=\"text-muted small\">{{ config.to_details|default(recipientIdentifier|default('**** **** **** 0000')) }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- INFO TRANSFERT -->
            <div class=\"card card-custom p-3 mt-3\">
                <div class=\"info-row\">
                    <span class=\"text-muted small\">Type d'opération</span><strong>{{ config.title|default('Transfert') }}</strong>
                </div>
                <div class=\"info-row\">
                    <span class=\"text-muted small\">Transfert à partir</span><strong>{{ config.from_name|default('Portefeuille') }}</strong>
                </div>
                <div class=\"info-row\">
                    <span class=\"text-muted small\">Message</span><strong class=\"text-end\">{{ description|default('Aucun message') }}</strong>
                </div>
            </div>
        </div>
        <div class=\"container text-center mb-5\">
            <button class=\"btn btn-primary confirm-btn d-flex\" id=\"btnToOTP\">
                {{ config.button_label|default('Confirmer') }}
            </button>
        </div>
    </div>
    <!-- MODALS -->
    <div class=\"modal fade\" id=\"otpModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content rounded-4 p-4 text-center\">
                <button type=\"button\" class=\"btn-close position-absolute top-0 start-0 m-3\"
                    data-bs-dismiss=\"modal\"></button>
                <h6 class=\"fw-semibold mb-4\">Verification OTP</h6>
                <div class=\"d-flex justify-content-center gap-3 mb-3\" id=\"otpContainer\">
                    <input type=\"text\" maxlength=\"1\" class=\"otp-input form-control text-center fw-bold fs-4\" style=\"width: 50px; height: 50px;\" />
                    <input type=\"text\" maxlength=\"1\" class=\"otp-input form-control text-center fw-bold fs-4\" style=\"width: 50px; height: 50px;\" />
                    <input type=\"text\" maxlength=\"1\" class=\"otp-input form-control text-center fw-bold fs-4\" style=\"width: 50px; height: 50px;\" />
                    <input type=\"text\" maxlength=\"1\" class=\"otp-input form-control text-center fw-bold fs-4\" style=\"width: 50px; height: 50px;\" />
                </div>
                <p class=\"text-muted mb-1 small\">
                    Un code a été envoyé à votre téléphone
                </p>
                <p class=\"mb-4\">
                    <span id=\"resendText\" class=\"text-primary fw-semibold\"><span id=\"timer\">01:00</span></span>
                </p>
                <button class=\"btn btn-primary rounded-pill py-2 fw-bold\" id=\"btnToLoading\">
                    Continuer
                </button>
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
                    <p class=\"text-muted small\">Votre transfert a été effectué !</p>
                    <div class=\"my-4\">
                        <span class=\"text-muted small\">Total Transfert</span>
                        <h2 class=\"fw-bold text-primary\" id=\"successAmountDisplay\">
                            €{{ amount|default('0') }}
                        </h2>
                    </div>
                    <a href=\"{{ path('app_home') }}\" class=\"btn btn-primary confirm-btn py-3 mt-5\">
                        Terminer
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal d'erreur -->
    <div class=\"modal fade\" id=\"errorModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content border-0 rounded-4 p-4 text-center\">
                <div class=\"bg-danger rounded-circle d-inline-flex p-3 mb-3 text-white\">
                    <i class=\"bi bi-x-lg fs-1\"></i>
                </div>
                <h4 class=\"fw-bold\">Erreur !</h4>
                <p class=\"text-muted small\" id=\"errorMessage\">Une erreur est survenue lors du transfert.</p>
                <button class=\"btn btn-primary mt-3\" data-bs-dismiss=\"modal\">
                    Réessayer
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function () {
            // Initialisation des modals
            const otpModalEl = document.getElementById(\"otpModal\");
            const loadingModalEl = document.getElementById(\"loadingModal\");
            const successModalEl = document.getElementById(\"successModal\");
            const errorModalEl = document.getElementById(\"errorModal\");

            let modalOtp, modalLoading, modalSuccess, modalError;

            if (otpModalEl) modalOtp = new bootstrap.Modal(otpModalEl);
            if (loadingModalEl) modalLoading = new bootstrap.Modal(loadingModalEl);
            if (successModalEl) modalSuccess = new bootstrap.Modal(successModalEl);
            if (errorModalEl) modalError = new bootstrap.Modal(errorModalEl);

            // Données du transfert
            const transferData = {
                recipientIdentifier: '{{ recipientIdentifier|default('')|escape('js') }}',
                recipientName: '{{ recipientName|default('')|escape('js') }}',
                amount: {{ amount|default(0) }},
                description: '{{ description|default('')|escape('js') }}',
                type: '{{ type|default('bank_transfer')|escape('js') }}'
            };

            // Gestion du Timer OTP
            let timeLeft = 60;
            let timerInterval;

            function startTimer() {
                clearInterval(timerInterval);
                timeLeft = 60;
                updateTimerDisplay();
                const timerElement = document.getElementById(\"timer\");
                const resendElement = document.getElementById(\"resendText\");

                if (timerElement) {
                    timerInterval = setInterval(() => {
                        timeLeft--;
                        updateTimerDisplay();
                        if (timeLeft <= 0) {
                            clearInterval(timerInterval);
                            if (resendElement) {
                                resendElement.innerHTML = '<a href=\"javascript:void(0);\" id=\"resendCode\" class=\"text-primary text-decoration-none\">Renvoyer le code</a>';
                                const resendBtn = document.getElementById(\"resendCode\");
                                if (resendBtn) {
                                    resendBtn.addEventListener(\"click\", () => {
                                        startTimer();
                                        // Ici, on pourrait ajouter un appel AJAX pour renvoyer le code
                                    });
                                }
                            }
                        }
                    }, 1000);
                }
            }

            function updateTimerDisplay() {
                const timerElement = document.getElementById(\"timer\");
                if (timerElement) {
                    const minutes = Math.floor(timeLeft / 60);
                    const seconds = timeLeft % 60;
                    timerElement.textContent =
                        `\${minutes.toString().padStart(2, '0')}:\${seconds.toString().padStart(2, '0')}`;
                }
            }

            // Focus automatique sur les inputs OTP
            const otpInputs = document.querySelectorAll(\".otp-input\");
            otpInputs.forEach((input, index) => {
                input.addEventListener(\"input\", (e) => {
                    if (e.target.value.length === 1 && index < otpInputs.length - 1) {
                        otpInputs[index + 1].focus();
                    }
                });
                input.addEventListener(\"keydown\", (e) => {
                    if (e.key === \"Backspace\" && !e.target.value && index > 0) {
                        otpInputs[index - 1].focus();
                    }
                });
            });

            // 1. Ouvrir OTP au clic sur Confirmer
            const btnToOTP = document.getElementById(\"btnToOTP\");
            if (btnToOTP && modalOtp) {
                btnToOTP.addEventListener(\"click\", () => {
                    modalOtp.show();
                    startTimer();
                    setTimeout(() => {
                        if (otpInputs.length > 0) otpInputs[0].focus();
                    }, 500);
                });
            }

            // 2. OTP -> Loading -> Appel API -> Succès ou Erreur
            const btnToLoading = document.getElementById(\"btnToLoading\");
            if (btnToLoading) {
                btnToLoading.addEventListener(\"click\", () => {
                    // Vérifier si l'OTP est rempli
                    let otp = \"\";
                    otpInputs.forEach(input => otp += input.value);
                    if (otp.length < 4) {
                        // On pourrait afficher un message plus joli, mais alert suffit pour l'instant
                        // Ou mieux, ajouter une classe is-invalid aux inputs
                        otpInputs.forEach(input => input.classList.add('is-invalid'));
                        return;
                    }

                    if (modalOtp) modalOtp.hide();
                    clearInterval(timerInterval);

                    // On attend un petit délai pour que la fermeture de OTP soit fluide
                    setTimeout(() => {
                        if (modalLoading) modalLoading.show();

                        // Simulation ou Appel réel API
                        // Pour l'instant on simule le succès après un délai,
                        // mais on peut décommenter l'appel API quand le backend est prêt

                        // Appel API réel
                        fetch('{{ path('api_transfert') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-Requested-With': 'XMLHttpRequest'
                                },
                                body: JSON.stringify(transferData)
                        })
                        .then(response => response.json())
                        .then(data => {
                             if (modalLoading) modalLoading.hide();
                             if (data.success) {
                                 if (data.balance) {
                                     sessionStorage.setItem('newBalance', data.balance);
                                 }
                                 sessionStorage.setItem('refreshTransactions', 'true');
                                 if (modalSuccess) modalSuccess.show();
                             } else {
                                 const errorMsg = document.getElementById(\"errorMessage\");
                                 if (errorMsg) errorMsg.textContent = data.error || \"Erreur inconnue\";
                                 if (modalError) modalError.show();
                             }
                        })
                        .catch(error => {
                             if (modalLoading) modalLoading.hide();
                             const errorMsg = document.getElementById(\"errorMessage\");
                             if (errorMsg) errorMsg.textContent = \"Une erreur de communication est survenue.\";
                             if (modalError) modalError.show();
                        });

                    }, 400);
                });
            }
        });
    </script>
{% endblock %}
", "transfert/confirm.html.twig", "/home/yangue/Documents/ProjetFilRougeIlaria2025/Backend_bloc3/templates/transfert/confirm.html.twig");
    }
}
