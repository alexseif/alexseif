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

/* intake/index.html.twig */
class __TwigTemplate_fe2bba94eb41f691247a495911ebd82b extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'sitewrapper' => [$this, 'block_sitewrapper'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "intake/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "intake/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "intake/index.html.twig", 1);
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

        // line 4
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.title"), "html", null, true);
        yield "
\t-
\t";
        // line 6
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        yield "\t";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
\t";
        // line 11
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("intake");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
\t";
        // line 16
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("intake");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sitewrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sitewrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sitewrapper"));

        // line 20
        yield "\t<div
\t\tid=\"intake-form\" class=\"fullpage intake-container\" ";
        // line 21
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "locale", [], "any", false, false, false, 21) == "ar")) {
            yield " dir=\"rtl\" ";
        }
        yield ">
\t\t<!-- Progress Bar -->
\t\t<div class=\"progress-bar\">
\t\t\t<div class=\"progress-fill\" id=\"progress-fill\"></div>
\t\t</div>

\t\t<!-- Form Steps -->
\t\t<div
\t\t\tclass=\"form-wrapper\">
\t\t\t<!-- Step 1: Clinic Name and Your Name -->
\t\t\t<div class=\"step active\" id=\"step-1\">
\t\t\t\t<h2>";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step1.title");
        yield "</h2>
\t\t\t\t<p>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step1.subtitle"), "html", null, true);
        yield "</p>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"clinic-name\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step1.clinic_name"), "html", null, true);
        yield "</label>
\t\t\t\t\t<input type=\"text\" id=\"clinic-name\" name=\"clinicName\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"your-name\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step1.your_name"), "html", null, true);
        yield "</label>
\t\t\t\t\t<input type=\"text\" id=\"your-name\" name=\"yourName\" required>
\t\t\t\t</div>
\t\t\t\t<button class=\"btn-next\" data-next=\"2\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.buttons.next"), "html", null, true);
        yield "</button>
\t\t\t</div>

\t\t\t<!-- Step 2: Role and WhatsApp -->
\t\t\t<div class=\"step\" id=\"step-2\">
\t\t\t\t<h2>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step2.title"), "html", null, true);
        yield "</h2>
\t\t\t\t<p>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step2.subtitle"), "html", null, true);
        yield "</p>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"role\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step2.role"), "html", null, true);
        yield "</label>
\t\t\t\t\t<select id=\"role\" name=\"role\" required>
\t\t\t\t\t\t<option value=\"\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step2.role"), "html", null, true);
        yield "...</option>
\t\t\t\t\t\t<option value=\"doctor\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step2.role_doctor"), "html", null, true);
        yield "</option>
\t\t\t\t\t\t<option value=\"manager\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step2.role_manager"), "html", null, true);
        yield "</option>
\t\t\t\t\t\t<option value=\"marketing\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step2.role_marketing"), "html", null, true);
        yield "</option>
\t\t\t\t\t\t<option value=\"other\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step2.role_other"), "html", null, true);
        yield "</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"whatsapp\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step2.whatsapp"), "html", null, true);
        yield "</label>
\t\t\t\t\t<input type=\"tel\" id=\"whatsapp\" name=\"whatsapp\" required>
\t\t\t\t</div>
\t\t\t\t<button class=\"btn-prev\" data-prev=\"1\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.buttons.previous"), "html", null, true);
        yield "</button>
\t\t\t\t<button class=\"btn-next\" data-next=\"3\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.buttons.next"), "html", null, true);
        yield "</button>
\t\t\t</div>

\t\t\t<!-- Step 3: Email and Website -->
\t\t\t<div class=\"step\" id=\"step-3\">
\t\t\t\t<h2>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step3.title"), "html", null, true);
        yield "</h2>
\t\t\t\t<p>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step3.subtitle"), "html", null, true);
        yield "</p>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"email\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step3.email"), "html", null, true);
        yield "</label>
\t\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"website\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step3.website"), "html", null, true);
        yield "</label>
\t\t\t\t\t<input type=\"url\" id=\"website\" name=\"website\" placeholder=\"https://example.com\">
\t\t\t\t\t<div class=\"checkbox-group\">
\t\t\t\t\t\t<label for=\"no-website\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step3.no_website"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"no-website\" name=\"noWebsite\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button class=\"btn-prev\" data-prev=\"2\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.buttons.previous"), "html", null, true);
        yield "</button>
\t\t\t\t<button class=\"btn-next\" data-next=\"4\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.buttons.next"), "html", null, true);
        yield "</button>
\t\t\t</div>

\t\t\t<!-- Step 4: Instagram and Interests -->
\t\t\t<div class=\"step\" id=\"step-4\">
\t\t\t\t<h2>";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step4.title"), "html", null, true);
        yield "</h2>
\t\t\t\t<p>";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step4.subtitle"), "html", null, true);
        yield "</p>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"instagram\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step4.instagram"), "html", null, true);
        yield "</label>
\t\t\t\t\t<input type=\"url\" id=\"instagram\" name=\"instagram\" placeholder=\"@alex_seif\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step4.interests_label"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"radio-group\">
\t\t\t\t\t\t<input type=\"radio\" id=\"interest-website\" name=\"interest\" value=\"website\" required>
\t\t\t\t\t\t<label for=\"interest-website\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step4.interest_website"), "html", null, true);
        yield "</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"radio-group\">
\t\t\t\t\t\t<input type=\"radio\" id=\"interest-ai\" name=\"interest\" value=\"ai\" required>
\t\t\t\t\t\t<label for=\"interest-ai\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step4.interest_ai"), "html", null, true);
        yield "</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"radio-group\">
\t\t\t\t\t\t<input type=\"radio\" id=\"interest-both\" name=\"interest\" value=\"both\" required>
\t\t\t\t\t\t<label for=\"interest-both\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step4.interest_both"), "html", null, true);
        yield "</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button class=\"btn-prev\" data-prev=\"3\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.buttons.previous"), "html", null, true);
        yield "</button>
\t\t\t\t<button class=\"btn-next\" data-next=\"5\">";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.buttons.next"), "html", null, true);
        yield "</button>
\t\t\t</div>

\t\t\t<!-- Step 5: Situation and Message -->
\t\t\t<div class=\"step\" id=\"step-5\">
\t\t\t\t<h2>";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step5.title"), "html", null, true);
        yield "</h2>
\t\t\t\t<p>";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step5.subtitle"), "html", null, true);
        yield "</p>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step5.situation_label"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"radio-group\">
\t\t\t\t\t\t<input type=\"radio\" id=\"situation-advertise\" name=\"situation\" value=\"advertise\" required>
\t\t\t\t\t\t<label for=\"situation-advertise\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step5.situation_advertise"), "html", null, true);
        yield "</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"radio-group\">
\t\t\t\t\t\t<input type=\"radio\" id=\"situation-new\" name=\"situation\" value=\"new\" required>
\t\t\t\t\t\t<label for=\"situation-new\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step5.situation_new"), "html", null, true);
        yield "</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"radio-group\">
\t\t\t\t\t\t<input type=\"radio\" id=\"situation-modernize\" name=\"situation\" value=\"modernize\" required>
\t\t\t\t\t\t<label for=\"situation-modernize\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step5.situation_modernize"), "html", null, true);
        yield "</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"message\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.step5.message"), "html", null, true);
        yield "</label>
\t\t\t\t\t<textarea id=\"message\" name=\"message\" rows=\"4\"></textarea>
\t\t\t\t</div>
\t\t\t\t<button class=\"btn-prev\" data-prev=\"4\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.buttons.previous"), "html", null, true);
        yield "</button>
\t\t\t\t<button class=\"btn-submit\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.buttons.submit"), "html", null, true);
        yield "</button>
\t\t\t</div>

\t\t\t<!-- Completion Screen -->
\t\t\t<div class=\"step completion\" id=\"step-complete\">
\t\t\t\t<div class=\"completion-icon\">
\t\t\t\t\t<svg width=\"64\" height=\"64\" viewbox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<path d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t<h2>";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.completion.title"), "html", null, true);
        yield "</h2>
\t\t\t\t<p>";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.completion.subtitle"), "html", null, true);
        yield "</p>
\t\t\t\t<a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alx_home");
        yield "\" class=\"btn-home\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("intake_form.completion.back_home"), "html", null, true);
        yield "</a>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 155
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 156
        yield "\t";
        yield from $this->loadTemplate("intake/_footer.html.twig", "intake/index.html.twig", 156)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "intake/index.html.twig";
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
        return array (  494 => 156,  481 => 155,  463 => 150,  459 => 149,  455 => 148,  442 => 138,  438 => 137,  432 => 134,  425 => 130,  418 => 126,  411 => 122,  405 => 119,  400 => 117,  396 => 116,  388 => 111,  384 => 110,  378 => 107,  371 => 103,  364 => 99,  358 => 96,  351 => 92,  346 => 90,  342 => 89,  334 => 84,  330 => 83,  323 => 79,  317 => 76,  310 => 72,  305 => 70,  301 => 69,  293 => 64,  289 => 63,  283 => 60,  276 => 56,  272 => 55,  268 => 54,  264 => 53,  260 => 52,  255 => 50,  250 => 48,  246 => 47,  238 => 42,  232 => 39,  225 => 35,  220 => 33,  216 => 32,  200 => 21,  197 => 20,  184 => 19,  162 => 18,  149 => 16,  144 => 15,  131 => 14,  118 => 11,  113 => 10,  100 => 9,  87 => 6,  81 => 4,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ 'intake_form.title'|trans }}
\t-
\t{{ parent() }}
{% endblock %}

{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('intake') }}
{% endblock %}

{% block javascripts %}
\t{{ parent() }}
\t{{ encore_entry_script_tags('intake') }}
{% endblock %}
{% block header %}{% endblock %}
{% block sitewrapper %}
\t<div
\t\tid=\"intake-form\" class=\"fullpage intake-container\" {% if app.request.locale == 'ar' %} dir=\"rtl\" {% endif %}>
\t\t<!-- Progress Bar -->
\t\t<div class=\"progress-bar\">
\t\t\t<div class=\"progress-fill\" id=\"progress-fill\"></div>
\t\t</div>

\t\t<!-- Form Steps -->
\t\t<div
\t\t\tclass=\"form-wrapper\">
\t\t\t<!-- Step 1: Clinic Name and Your Name -->
\t\t\t<div class=\"step active\" id=\"step-1\">
\t\t\t\t<h2>{{ 'intake_form.step1.title'|trans|raw }}</h2>
\t\t\t\t<p>{{ 'intake_form.step1.subtitle'|trans }}</p>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"clinic-name\">{{ 'intake_form.step1.clinic_name'|trans }}</label>
\t\t\t\t\t<input type=\"text\" id=\"clinic-name\" name=\"clinicName\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"your-name\">{{ 'intake_form.step1.your_name'|trans }}</label>
\t\t\t\t\t<input type=\"text\" id=\"your-name\" name=\"yourName\" required>
\t\t\t\t</div>
\t\t\t\t<button class=\"btn-next\" data-next=\"2\">{{ 'intake_form.buttons.next'|trans }}</button>
\t\t\t</div>

\t\t\t<!-- Step 2: Role and WhatsApp -->
\t\t\t<div class=\"step\" id=\"step-2\">
\t\t\t\t<h2>{{ 'intake_form.step2.title'|trans }}</h2>
\t\t\t\t<p>{{ 'intake_form.step2.subtitle'|trans }}</p>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"role\">{{ 'intake_form.step2.role'|trans }}</label>
\t\t\t\t\t<select id=\"role\" name=\"role\" required>
\t\t\t\t\t\t<option value=\"\">{{ 'intake_form.step2.role'|trans }}...</option>
\t\t\t\t\t\t<option value=\"doctor\">{{ 'intake_form.step2.role_doctor'|trans }}</option>
\t\t\t\t\t\t<option value=\"manager\">{{ 'intake_form.step2.role_manager'|trans }}</option>
\t\t\t\t\t\t<option value=\"marketing\">{{ 'intake_form.step2.role_marketing'|trans }}</option>
\t\t\t\t\t\t<option value=\"other\">{{ 'intake_form.step2.role_other'|trans }}</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"whatsapp\">{{ 'intake_form.step2.whatsapp'|trans }}</label>
\t\t\t\t\t<input type=\"tel\" id=\"whatsapp\" name=\"whatsapp\" required>
\t\t\t\t</div>
\t\t\t\t<button class=\"btn-prev\" data-prev=\"1\">{{ 'intake_form.buttons.previous'|trans }}</button>
\t\t\t\t<button class=\"btn-next\" data-next=\"3\">{{ 'intake_form.buttons.next'|trans }}</button>
\t\t\t</div>

\t\t\t<!-- Step 3: Email and Website -->
\t\t\t<div class=\"step\" id=\"step-3\">
\t\t\t\t<h2>{{ 'intake_form.step3.title'|trans }}</h2>
\t\t\t\t<p>{{ 'intake_form.step3.subtitle'|trans }}</p>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"email\">{{ 'intake_form.step3.email'|trans }}</label>
\t\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"website\">{{ 'intake_form.step3.website'|trans }}</label>
\t\t\t\t\t<input type=\"url\" id=\"website\" name=\"website\" placeholder=\"https://example.com\">
\t\t\t\t\t<div class=\"checkbox-group\">
\t\t\t\t\t\t<label for=\"no-website\">{{ 'intake_form.step3.no_website'|trans }}</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"no-website\" name=\"noWebsite\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button class=\"btn-prev\" data-prev=\"2\">{{ 'intake_form.buttons.previous'|trans }}</button>
\t\t\t\t<button class=\"btn-next\" data-next=\"4\">{{ 'intake_form.buttons.next'|trans }}</button>
\t\t\t</div>

\t\t\t<!-- Step 4: Instagram and Interests -->
\t\t\t<div class=\"step\" id=\"step-4\">
\t\t\t\t<h2>{{ 'intake_form.step4.title'|trans }}</h2>
\t\t\t\t<p>{{ 'intake_form.step4.subtitle'|trans }}</p>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"instagram\">{{ 'intake_form.step4.instagram'|trans }}</label>
\t\t\t\t\t<input type=\"url\" id=\"instagram\" name=\"instagram\" placeholder=\"@alex_seif\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>{{ 'intake_form.step4.interests_label'|trans }}</label>
\t\t\t\t\t<div class=\"radio-group\">
\t\t\t\t\t\t<input type=\"radio\" id=\"interest-website\" name=\"interest\" value=\"website\" required>
\t\t\t\t\t\t<label for=\"interest-website\">{{ 'intake_form.step4.interest_website'|trans }}</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"radio-group\">
\t\t\t\t\t\t<input type=\"radio\" id=\"interest-ai\" name=\"interest\" value=\"ai\" required>
\t\t\t\t\t\t<label for=\"interest-ai\">{{ 'intake_form.step4.interest_ai'|trans }}</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"radio-group\">
\t\t\t\t\t\t<input type=\"radio\" id=\"interest-both\" name=\"interest\" value=\"both\" required>
\t\t\t\t\t\t<label for=\"interest-both\">{{ 'intake_form.step4.interest_both'|trans }}</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button class=\"btn-prev\" data-prev=\"3\">{{ 'intake_form.buttons.previous'|trans }}</button>
\t\t\t\t<button class=\"btn-next\" data-next=\"5\">{{ 'intake_form.buttons.next'|trans }}</button>
\t\t\t</div>

\t\t\t<!-- Step 5: Situation and Message -->
\t\t\t<div class=\"step\" id=\"step-5\">
\t\t\t\t<h2>{{ 'intake_form.step5.title'|trans }}</h2>
\t\t\t\t<p>{{ 'intake_form.step5.subtitle'|trans }}</p>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label>{{ 'intake_form.step5.situation_label'|trans }}</label>
\t\t\t\t\t<div class=\"radio-group\">
\t\t\t\t\t\t<input type=\"radio\" id=\"situation-advertise\" name=\"situation\" value=\"advertise\" required>
\t\t\t\t\t\t<label for=\"situation-advertise\">{{ 'intake_form.step5.situation_advertise'|trans }}</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"radio-group\">
\t\t\t\t\t\t<input type=\"radio\" id=\"situation-new\" name=\"situation\" value=\"new\" required>
\t\t\t\t\t\t<label for=\"situation-new\">{{ 'intake_form.step5.situation_new'|trans }}</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"radio-group\">
\t\t\t\t\t\t<input type=\"radio\" id=\"situation-modernize\" name=\"situation\" value=\"modernize\" required>
\t\t\t\t\t\t<label for=\"situation-modernize\">{{ 'intake_form.step5.situation_modernize'|trans }}</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"message\">{{ 'intake_form.step5.message'|trans }}</label>
\t\t\t\t\t<textarea id=\"message\" name=\"message\" rows=\"4\"></textarea>
\t\t\t\t</div>
\t\t\t\t<button class=\"btn-prev\" data-prev=\"4\">{{ 'intake_form.buttons.previous'|trans }}</button>
\t\t\t\t<button class=\"btn-submit\">{{ 'intake_form.buttons.submit'|trans }}</button>
\t\t\t</div>

\t\t\t<!-- Completion Screen -->
\t\t\t<div class=\"step completion\" id=\"step-complete\">
\t\t\t\t<div class=\"completion-icon\">
\t\t\t\t\t<svg width=\"64\" height=\"64\" viewbox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t<path d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t<h2>{{ 'intake_form.completion.title'|trans }}</h2>
\t\t\t\t<p>{{ 'intake_form.completion.subtitle'|trans }}</p>
\t\t\t\t<a href=\"{{ path('alx_home') }}\" class=\"btn-home\">{{ 'intake_form.completion.back_home'|trans }}</a>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
{% block footer %}
\t{% include 'intake/_footer.html.twig' %}
{% endblock %}
", "intake/index.html.twig", "/var/www/alexseif.com/templates/intake/index.html.twig");
    }
}
