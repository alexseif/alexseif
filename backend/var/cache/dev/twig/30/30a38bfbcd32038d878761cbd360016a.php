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

/* @EasyAdmin/page/login.html.twig */
class __TwigTemplate_48fe016113db201ea703d7a260c41fac extends Template
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
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'header_logo' => [$this, 'block_header_logo'],
            'login_form_wrapper' => [$this, 'block_login_form_wrapper'],
            'login_form_credentials_wrapper' => [$this, 'block_login_form_credentials_wrapper'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return $this->loadTemplate(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 2, $this->source); })()), "hasContext", [], "any", false, false, false, 2)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 2, $this->source); })()), "templatePath", ["layout"], "method", false, false, false, 2)) : ("@EasyAdmin/page/login_minimal.html.twig")), "@EasyAdmin/page/login.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/login.html.twig"));

        // line 3
        $context["__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 3, $this->source); })()), "hasContext", [], "any", false, false, false, 3)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 3, $this->source); })()), "i18n", [], "any", false, false, false, 3), "translationDomain", [], "any", false, false, false, 3)) : (((array_key_exists("translation_domain", $context)) ? (($context["translation_domain"] ?? "messages")) : (""))));
        // line 2
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        yield "page-login";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield ((array_key_exists("page_title", $context)) ? ((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 6, $this->source); })())) : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 6, $this->source); })()), "hasContext", [], "any", false, false, false, 6)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 6, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 6)) : (""))));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_favicon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 9
        yield "    ";
        if (((array_key_exists("favicon_path", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["favicon_path"]) || array_key_exists("favicon_path", $context) ? $context["favicon_path"] : (function () { throw new RuntimeError('Variable "favicon_path" does not exist.', 9, $this->source); })()), false)) : (false))) {
            // line 10
            yield "        <link rel=\"shortcut icon\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["favicon_path"]) || array_key_exists("favicon_path", $context) ? $context["favicon_path"] : (function () { throw new RuntimeError('Variable "favicon_path" does not exist.', 10, $this->source); })()), "html", null, true);
            yield "\">
    ";
        } else {
            // line 12
            yield "        ";
            yield from $this->yieldParentBlock("head_favicon", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        // line 17
        yield "    ";
        $context["page_title"] =         $this->unwrap()->renderBlock("page_title", $context, $blocks);
        // line 18
        yield "    ";
        $context["_username_label"] = ((array_key_exists("username_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["username_label"]) || array_key_exists("username_label", $context) ? $context["username_label"] : (function () { throw new RuntimeError('Variable "username_label" does not exist.', 18, $this->source); })()), [],         // line 3
(isset($context["__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509"]) || array_key_exists("__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509", $context) ? $context["__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509"] : (function () { throw new RuntimeError('Variable "__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509" does not exist.', 3, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.username", [], "EasyAdminBundle")));
        // line 19
        yield "    ";
        $context["_password_label"] = ((array_key_exists("password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["password_label"]) || array_key_exists("password_label", $context) ? $context["password_label"] : (function () { throw new RuntimeError('Variable "password_label" does not exist.', 19, $this->source); })()), [],         // line 3
(isset($context["__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509"]) || array_key_exists("__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509", $context) ? $context["__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509"] : (function () { throw new RuntimeError('Variable "__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509" does not exist.', 3, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.password", [], "EasyAdminBundle")));
        // line 20
        yield "    ";
        $context["_forgot_password_label"] = ((array_key_exists("forgot_password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["forgot_password_label"]) || array_key_exists("forgot_password_label", $context) ? $context["forgot_password_label"] : (function () { throw new RuntimeError('Variable "forgot_password_label" does not exist.', 20, $this->source); })()), [],         // line 3
(isset($context["__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509"]) || array_key_exists("__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509", $context) ? $context["__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509"] : (function () { throw new RuntimeError('Variable "__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509" does not exist.', 3, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.forgot_password", [], "EasyAdminBundle")));
        // line 21
        yield "    ";
        $context["_remember_me_label"] = ((array_key_exists("remember_me_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["remember_me_label"]) || array_key_exists("remember_me_label", $context) ? $context["remember_me_label"] : (function () { throw new RuntimeError('Variable "remember_me_label" does not exist.', 21, $this->source); })()), [],         // line 3
(isset($context["__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509"]) || array_key_exists("__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509", $context) ? $context["__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509"] : (function () { throw new RuntimeError('Variable "__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509" does not exist.', 3, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.remember_me", [], "EasyAdminBundle")));
        // line 22
        yield "    ";
        $context["_sign_in_label"] = ((array_key_exists("sign_in_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["sign_in_label"]) || array_key_exists("sign_in_label", $context) ? $context["sign_in_label"] : (function () { throw new RuntimeError('Variable "sign_in_label" does not exist.', 22, $this->source); })()), [],         // line 3
(isset($context["__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509"]) || array_key_exists("__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509", $context) ? $context["__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509"] : (function () { throw new RuntimeError('Variable "__internal_1136a87f6725f6a65d38f7461cd8e3d434e3e2d683a7586476e71345a26df509" does not exist.', 3, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.sign_in", [], "EasyAdminBundle")));
        // line 23
        yield "
    ";
        // line 24
        yield from $this->loadTemplate("@EasyAdmin/flash_messages.html.twig", "@EasyAdmin/page/login.html.twig", 24)->unwrap()->yield($context);
        // line 25
        yield "
    <div class=\"login-wrapper\">
        <header class=\"main-header\">
            <div id=\"header-logo\">
                ";
        // line 29
        yield from $this->unwrap()->yieldBlock('header_logo', $context, $blocks);
        // line 42
        yield "            </div>
        </header>

        <section class=\"content\">
            ";
        // line 46
        if (((array_key_exists("error", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })()), false)) : (false))) {
            // line 47
            yield "                <div class=\"w-100 alert alert-danger rounded mb-3\">
                    ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 48, $this->source); })()), "messageKey", [], "any", false, false, false, 48), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 48, $this->source); })()), "messageData", [], "any", false, false, false, 48), "security"), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 51
        yield "
            ";
        // line 52
        yield from $this->unwrap()->yieldBlock('login_form_wrapper', $context, $blocks);
        // line 96
        yield "        </section>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        // line 30
        yield "                    ";
        if ((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 30, $this->source); })())) {
            // line 31
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 31, $this->source); })()), "hasContext", [], "any", false, false, false, 31)) {
                // line 32
                yield "                            <a class=\"logo ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 32, $this->source); })())) > 14)) ? ("logo-long") : (""));
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 32, $this->source); })())), "html", null, true);
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 32, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 32));
                yield "\">
                                ";
                // line 33
                yield (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 33, $this->source); })());
                yield "
                            </a>
                        ";
            } else {
                // line 36
                yield "                            <div class=\"logo ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 36, $this->source); })())) > 14)) ? ("logo-long") : (""));
                yield "\">
                                ";
                // line 37
                yield (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 37, $this->source); })());
                yield "
                            </div>
                        ";
            }
            // line 40
            yield "                    ";
        }
        // line 41
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_login_form_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_form_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_form_wrapper"));

        // line 53
        yield "            <form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("action", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 53, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                ";
        // line 54
        if (((array_key_exists("csrf_token_intention", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["csrf_token_intention"]) || array_key_exists("csrf_token_intention", $context) ? $context["csrf_token_intention"] : (function () { throw new RuntimeError('Variable "csrf_token_intention" does not exist.', 54, $this->source); })()), false)) : (false))) {
            // line 55
            yield "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["csrf_token_intention"]) || array_key_exists("csrf_token_intention", $context) ? $context["csrf_token_intention"] : (function () { throw new RuntimeError('Variable "csrf_token_intention" does not exist.', 55, $this->source); })())), "html", null, true);
            yield "\">
                ";
        }
        // line 57
        yield "
                <input type=\"hidden\" name=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("target_path_parameter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["target_path_parameter"]) || array_key_exists("target_path_parameter", $context) ? $context["target_path_parameter"] : (function () { throw new RuntimeError('Variable "target_path_parameter" does not exist.', 58, $this->source); })()), "_target_path")) : ("_target_path")), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("target_path", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["target_path"]) || array_key_exists("target_path", $context) ? $context["target_path"] : (function () { throw new RuntimeError('Variable "target_path" does not exist.', 58, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 58, $this->source); })()), "hasContext", [], "any", false, false, false, 58)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 58, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 58))) : ("/")))) : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 58, $this->source); })()), "hasContext", [], "any", false, false, false, 58)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 58, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 58))) : ("/")))), "html", null, true);
        yield "\" />

                ";
        // line 60
        yield from $this->unwrap()->yieldBlock('login_form_credentials_wrapper', $context, $blocks);
        // line 81
        yield "
                ";
        // line 82
        if (((array_key_exists("remember_me_enabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["remember_me_enabled"]) || array_key_exists("remember_me_enabled", $context) ? $context["remember_me_enabled"] : (function () { throw new RuntimeError('Variable "remember_me_enabled" does not exist.', 82, $this->source); })()), false)) : (false))) {
            // line 83
            yield "                    <div class=\"form-group\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("remember_me_parameter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["remember_me_parameter"]) || array_key_exists("remember_me_parameter", $context) ? $context["remember_me_parameter"] : (function () { throw new RuntimeError('Variable "remember_me_parameter" does not exist.', 84, $this->source); })()), "_remember_me")) : ("_remember_me")), "html", null, true);
            yield "\" ";
            yield ((((array_key_exists("remember_me_checked", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["remember_me_checked"]) || array_key_exists("remember_me_checked", $context) ? $context["remember_me_checked"] : (function () { throw new RuntimeError('Variable "remember_me_checked" does not exist.', 84, $this->source); })()), false)) : (false))) ? ("checked") : (""));
            yield ">
                        <label class=\"form-check-label\" for=\"remember_me\">
                            ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_remember_me_label"]) || array_key_exists("_remember_me_label", $context) ? $context["_remember_me_label"] : (function () { throw new RuntimeError('Variable "_remember_me_label" does not exist.', 86, $this->source); })()), "html", null, true);
            yield "
                        </label>
                    </div>
                ";
        }
        // line 90
        yield "
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_sign_in_label"]) || array_key_exists("_sign_in_label", $context) ? $context["_sign_in_label"] : (function () { throw new RuntimeError('Variable "_sign_in_label" does not exist.', 91, $this->source); })()), "html", null, true);
        yield "</button>
            </form>

            <script src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login.js", Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage::PACKAGE_NAME")), "html", null, true);
        yield "\"></script>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_login_form_credentials_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_form_credentials_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_form_credentials_wrapper"));

        // line 61
        yield "                    <div class=\"form-group\">
                        <label class=\"form-control-label required\" for=\"username\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_username_label"]) || array_key_exists("_username_label", $context) ? $context["_username_label"] : (function () { throw new RuntimeError('Variable "_username_label" does not exist.', 62, $this->source); })()), "html", null, true);
        yield "</label>
                        <div class=\"form-widget\">
                            <input type=\"text\" id=\"username\" name=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("username_parameter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["username_parameter"]) || array_key_exists("username_parameter", $context) ? $context["username_parameter"] : (function () { throw new RuntimeError('Variable "username_parameter" does not exist.', 64, $this->source); })()), "_username")) : ("_username")), "html", null, true);
        yield "\" class=\"form-control\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("last_username", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 64, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" required autofocus autocomplete=\"username\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-control-label required\" for=\"password\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_password_label"]) || array_key_exists("_password_label", $context) ? $context["_password_label"] : (function () { throw new RuntimeError('Variable "_password_label" does not exist.', 69, $this->source); })()), "html", null, true);
        yield "</label>
                        <div class=\"form-widget\">
                            <input type=\"password\" id=\"password\" name=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("password_parameter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["password_parameter"]) || array_key_exists("password_parameter", $context) ? $context["password_parameter"] : (function () { throw new RuntimeError('Variable "password_parameter" does not exist.', 71, $this->source); })()), "_password")) : ("_password")), "html", null, true);
        yield "\" class=\"form-control\" required autocomplete=\"current-password\">
                        </div>

                        ";
        // line 74
        if (((array_key_exists("forgot_password_enabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["forgot_password_enabled"]) || array_key_exists("forgot_password_enabled", $context) ? $context["forgot_password_enabled"] : (function () { throw new RuntimeError('Variable "forgot_password_enabled" does not exist.', 74, $this->source); })()), false)) : (false))) {
            // line 75
            yield "                            <div class=\"form-text\">
                                <a href=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("forgot_password_path", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["forgot_password_path"]) || array_key_exists("forgot_password_path", $context) ? $context["forgot_password_path"] : (function () { throw new RuntimeError('Variable "forgot_password_path" does not exist.', 76, $this->source); })()), "#")) : ("#")), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_forgot_password_label"]) || array_key_exists("_forgot_password_label", $context) ? $context["_forgot_password_label"] : (function () { throw new RuntimeError('Variable "_forgot_password_label" does not exist.', 76, $this->source); })()), "html", null, true);
            yield "</a>
                            </div>
                        ";
        }
        // line 79
        yield "                    </div>
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
        return "@EasyAdmin/page/login.html.twig";
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
        return array (  434 => 79,  426 => 76,  423 => 75,  421 => 74,  415 => 71,  410 => 69,  400 => 64,  395 => 62,  392 => 61,  379 => 60,  366 => 94,  360 => 91,  357 => 90,  350 => 86,  343 => 84,  340 => 83,  338 => 82,  335 => 81,  333 => 60,  326 => 58,  323 => 57,  317 => 55,  315 => 54,  310 => 53,  297 => 52,  286 => 41,  283 => 40,  277 => 37,  272 => 36,  266 => 33,  257 => 32,  254 => 31,  251 => 30,  238 => 29,  225 => 96,  223 => 52,  220 => 51,  214 => 48,  211 => 47,  209 => 46,  203 => 42,  201 => 29,  195 => 25,  193 => 24,  190 => 23,  188 => 3,  186 => 22,  184 => 3,  182 => 21,  180 => 3,  178 => 20,  176 => 3,  174 => 19,  172 => 3,  170 => 18,  167 => 17,  154 => 16,  139 => 12,  133 => 10,  130 => 9,  117 => 8,  94 => 6,  71 => 5,  61 => 2,  59 => 3,  46 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider #}
{% extends ea.hasContext ? ea.templatePath('layout') : '@EasyAdmin/page/login_minimal.html.twig' %}
{% trans_default_domain ea.hasContext ? ea.i18n.translationDomain : (translation_domain is defined ? translation_domain ?? 'messages') %}

{% block body_class 'page-login' %}
{% block page_title %}{{ page_title is defined ? page_title|raw : (ea.hasContext ? ea.dashboardTitle|raw : '') }}{% endblock %}

{% block head_favicon %}
    {% if favicon_path|default(false) %}
        <link rel=\"shortcut icon\" href=\"{{ favicon_path }}\">
    {% else %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block wrapper_wrapper %}
    {% set page_title = block('page_title') %}
    {% set _username_label = username_label is defined ? username_label|trans : 'login_page.username'|trans({}, 'EasyAdminBundle') %}
    {% set _password_label = password_label is defined ? password_label|trans : 'login_page.password'|trans({}, 'EasyAdminBundle') %}
    {% set _forgot_password_label = forgot_password_label is defined ? forgot_password_label|trans : 'login_page.forgot_password'|trans({}, 'EasyAdminBundle') %}
    {% set _remember_me_label = remember_me_label is defined ? remember_me_label|trans : 'login_page.remember_me'|trans({}, 'EasyAdminBundle') %}
    {% set _sign_in_label = sign_in_label is defined ? sign_in_label|trans : 'login_page.sign_in'|trans({}, 'EasyAdminBundle') %}

    {% include '@EasyAdmin/flash_messages.html.twig' %}

    <div class=\"login-wrapper\">
        <header class=\"main-header\">
            <div id=\"header-logo\">
                {% block header_logo %}
                    {% if page_title %}
                        {% if ea.hasContext %}
                            <a class=\"logo {{ page_title|length > 14 ? 'logo-long' }}\" title=\"{{ page_title|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
                                {{ page_title|raw }}
                            </a>
                        {% else %}
                            <div class=\"logo {{ page_title|length > 14 ? 'logo-long' }}\">
                                {{ page_title|raw }}
                            </div>
                        {% endif %}
                    {% endif %}
                {% endblock header_logo %}
            </div>
        </header>

        <section class=\"content\">
            {% if error|default(false) %}
                <div class=\"w-100 alert alert-danger rounded mb-3\">
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>
            {% endif %}

            {% block login_form_wrapper %}
            <form method=\"post\" action=\"{{ action|default('') }}\">
                {% if csrf_token_intention|default(false) %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(csrf_token_intention) }}\">
                {% endif %}

                <input type=\"hidden\" name=\"{{ target_path_parameter|default('_target_path') }}\" value=\"{{ target_path|default(ea.hasContext ? path(ea.dashboardRouteName) : '/') }}\" />

                {% block login_form_credentials_wrapper %}
                    <div class=\"form-group\">
                        <label class=\"form-control-label required\" for=\"username\">{{ _username_label }}</label>
                        <div class=\"form-widget\">
                            <input type=\"text\" id=\"username\" name=\"{{ username_parameter|default('_username') }}\" class=\"form-control\" value=\"{{ last_username|default('') }}\" required autofocus autocomplete=\"username\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-control-label required\" for=\"password\">{{ _password_label }}</label>
                        <div class=\"form-widget\">
                            <input type=\"password\" id=\"password\" name=\"{{ password_parameter|default('_password') }}\" class=\"form-control\" required autocomplete=\"current-password\">
                        </div>

                        {% if forgot_password_enabled|default(false) %}
                            <div class=\"form-text\">
                                <a href=\"{{ forgot_password_path|default('#') }}\">{{ _forgot_password_label }}</a>
                            </div>
                        {% endif %}
                    </div>
                {% endblock login_form_credentials_wrapper %}

                {% if remember_me_enabled|default(false) %}
                    <div class=\"form-group\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"{{ remember_me_parameter|default('_remember_me') }}\" {{ remember_me_checked|default(false) ? 'checked' }}>
                        <label class=\"form-check-label\" for=\"remember_me\">
                            {{ _remember_me_label }}
                        </label>
                    </div>
                {% endif %}

                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">{{ _sign_in_label }}</button>
            </form>

            <script src=\"{{ asset('login.js', constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Asset\\\\AssetPackage::PACKAGE_NAME')) }}\"></script>
            {% endblock login_form_wrapper %}
        </section>
    </div>
{% endblock %}
", "@EasyAdmin/page/login.html.twig", "/var/www/alexseif.com/vendor/easycorp/easyadmin-bundle/templates/page/login.html.twig");
    }
}
