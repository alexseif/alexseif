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

/* pages/home.html.twig */
class __TwigTemplate_63e76f35901e1a8d1d0f07875d73cb46 extends Template
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
            'structured_data' => [$this, 'block_structured_data'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
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

        yield "Alex Seif | Reliable Websites & Systems for Clinics in Egypt
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "\t";
        // line 8
        yield "\t";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("home");
        yield "

\t";
        // line 10
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "environment", [], "any", false, false, false, 10) == "dev")) {
            // line 11
            yield "\t\t";
            // line 12
            yield "\t";
        }
        // line 13
        yield "\t<link href=\"https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
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

        // line 16
        yield "\t";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("home");
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_structured_data(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "structured_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "structured_data"));

        // line 21
        yield "\t";
        yield from $this->loadTemplate("base/_seo_schema.twig", "pages/home.html.twig", 21)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
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

        // line 25
        yield "\t<div class=\"min-h-screen bg-[#FAFBFC]\">
\t\t<nav class=\"bg-white/80 backdrop-blur-sm fixed w-full top-0 z-50 border-b border-gray-100\">
\t\t\t<div class=\"max-w-[1280px] mx-auto px-6 py-4 flex items-center justify-between\">
\t\t\t\t<div
\t\t\t\t\tclass=\"flex items-center gap-3 logo-text\">
\t\t\t\t\t";
        // line 31
        yield "\t\t\t\t\tAlex Seif
\t\t\t\t</div>
\t\t\t\t<a href=\"#intake\" class=\"bg-[#0D9488] text-white px-6 py-2.5 rounded-full font-medium hover:bg-[#0f766e] transition-all duration-200 hover:-translate-y-0.5 whitespace-nowrap cursor-pointer text-sm\">Start Clinic Intake</a>
\t\t\t</div>
\t\t</nav>

\t\t";
        // line 37
        yield from $this->loadTemplate("components/_hero.twig", "pages/home.html.twig", 37)->unwrap()->yield($context);
        // line 38
        yield "\t\t";
        yield from $this->loadTemplate("components/_problems.twig", "pages/home.html.twig", 38)->unwrap()->yield($context);
        // line 39
        yield "\t\t";
        yield from $this->loadTemplate("components/_services.twig", "pages/home.html.twig", 39)->unwrap()->yield($context);
        // line 40
        yield "\t\t<section class=\"py-24 px-6\">
\t\t\t<div class=\"max-w-[1200px] mx-auto fade-in-scroll\">
\t\t\t\t<h2 class=\"text-[42px] font-bold text-[#1F2937] mb-6\">Clinic Web Vitals Diagnostic — 9,000 EGP</h2>
\t\t\t\t<p class=\"text-lg text-[#1F2937] leading-relaxed mb-8\">Get a full technical review of your clinic's online presence — delivered in 72 hours.</p>
\t\t\t\t<ul class=\"space-y-4 mb-8\">
\t\t\t\t\t<li class=\"flex items-start gap-3\">
\t\t\t\t\t\t<div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
\t\t\t\t\t\t\t<i class=\"ri-check-line text-white text-sm\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"text-base text-[#1F2937]\">Homepage clarity check (is it clear who you are + what you do?)</span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"flex items-start gap-3\">
\t\t\t\t\t\t<div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
\t\t\t\t\t\t\t<i class=\"ri-check-line text-white text-sm\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"text-base text-[#1F2937]\">Speed &amp; technical health report (mobile + desktop)</span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"flex items-start gap-3\">
\t\t\t\t\t\t<div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
\t\t\t\t\t\t\t<i class=\"ri-check-line text-white text-sm\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"text-base text-[#1F2937]\">Broken links, missing CTAs, WhatsApp tests</span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"flex items-start gap-3\">
\t\t\t\t\t\t<div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
\t\t\t\t\t\t\t<i class=\"ri-check-line text-white text-sm\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"text-base text-[#1F2937]\">SEO visibility — are you indexed, and how you appear</span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"flex items-start gap-3\">
\t\t\t\t\t\t<div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
\t\t\t\t\t\t\t<i class=\"ri-check-line text-white text-sm\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"text-base text-[#1F2937]\">Trust signals — proof, testimonials, medical language audit</span>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<p class=\"text-base text-[#1F2937] leading-relaxed mb-6\">
\t\t\t\t\t<strong>Delivery:</strong>
\t\t\t\t\t72 hours •
\t\t\t\t\t<strong>Fee:</strong>
\t\t\t\t\t9,000 EGP
\t\t\t\t\t";
        // line 83
        yield "\t\t\t\t</p>
\t\t\t\t<a class=\"cta-button inline-block bg-[#0D9488] text-white px-12 py-4 rounded-full text-lg font-semibold hover:bg-[#0f766e] transition-all duration-200 hover:-translate-y-0.5 shadow-lg hover:shadow-xl whitespace-nowrap cursor-pointer\" href=\"#intake\">Start Diagnostic</a>
\t\t\t</div>
\t\t</section>
\t\t";
        // line 87
        yield from $this->loadTemplate("components/_website_build.twig", "pages/home.html.twig", 87)->unwrap()->yield($context);
        // line 88
        yield "\t\t";
        yield from $this->loadTemplate("components/_faq.twig", "pages/home.html.twig", 88)->unwrap()->yield($context);
        // line 89
        yield "\t\t";
        yield from $this->loadTemplate("components/_founder.twig", "pages/home.html.twig", 89)->unwrap()->yield($context);
        // line 90
        yield "\t\t";
        yield from $this->loadTemplate("components/_cta.twig", "pages/home.html.twig", 90)->unwrap()->yield($context);
        // line 91
        yield "
\t\t<footer class=\"bg-[#0D9488] text-white py-12 px-6\">
\t\t\t<div class=\"max-w-[1280px] mx-auto\">
\t\t\t\t<div class=\"grid md:grid-cols-3 gap-8 mb-8\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<h3 class=\"font-semibold text-lg mb-4\">Alex Seif</h3>
\t\t\t\t\t\t<p class=\"text-white/80 text-sm leading-relaxed\">Reliable web development and maintenance for clinics in Egypt.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h3 class=\"font-semibold text-lg mb-4\">Services</h3>
\t\t\t\t\t\t<ul class=\"space-y-2 text-sm text-white/80\">
\t\t\t\t\t\t\t<li>Website Care (Monthly)</li>
\t\t\t\t\t\t\t<li>Website Builds</li>
\t\t\t\t\t\t\t<li>Web Vitals Diagnostic</li>
\t\t\t\t\t\t\t<li>Technical Support</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h3 class=\"font-semibold text-lg mb-4\">Contact</h3>
\t\t\t\t\t\t<ul class=\"space-y-2 text-sm text-white/80\">
\t\t\t\t\t\t\t<li>Based in Egypt</li>
\t\t\t\t\t\t\t<li>Serving Clinics Nationwide</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#intake\" class=\"hover:text-white transition-colors cursor-pointer\">Start Intake Form</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"border-t border-white/20 pt-6 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-white/70\">
\t\t\t\t\t<p>© 2025 Alex Seif. All rights reserved.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div>
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
        return "pages/home.html.twig";
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
        return array (  280 => 91,  277 => 90,  274 => 89,  271 => 88,  269 => 87,  263 => 83,  220 => 40,  217 => 39,  214 => 38,  212 => 37,  204 => 31,  197 => 25,  184 => 24,  172 => 21,  159 => 20,  144 => 16,  131 => 15,  119 => 13,  116 => 12,  114 => 11,  112 => 10,  106 => 8,  104 => 7,  91 => 6,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Alex Seif | Reliable Websites & Systems for Clinics in Egypt
{% endblock %}

{% block stylesheets %}
\t{# {{ parent() }} #}
\t{{ encore_entry_link_tags('home') }}

\t{% if app.environment == 'dev' %}
\t\t{# Debugging advice if styles look wrong during dev #}
\t{% endif %}
\t<link href=\"https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css\" rel=\"stylesheet\">
{% endblock %}
{% block javascripts %}
\t{{ encore_entry_script_tags('home') }}

{% endblock %}

{% block structured_data %}
\t{% include 'base/_seo_schema.twig' %}
{% endblock %}

{% block body %}
\t<div class=\"min-h-screen bg-[#FAFBFC]\">
\t\t<nav class=\"bg-white/80 backdrop-blur-sm fixed w-full top-0 z-50 border-b border-gray-100\">
\t\t\t<div class=\"max-w-[1280px] mx-auto px-6 py-4 flex items-center justify-between\">
\t\t\t\t<div
\t\t\t\t\tclass=\"flex items-center gap-3 logo-text\">
\t\t\t\t\t{# <img alt=\"Alex Seif Logo\" class=\"h-10 w-auto\" src=\"{{ asset('build/images/logo-clinic.png') }}\"> #}
\t\t\t\t\tAlex Seif
\t\t\t\t</div>
\t\t\t\t<a href=\"#intake\" class=\"bg-[#0D9488] text-white px-6 py-2.5 rounded-full font-medium hover:bg-[#0f766e] transition-all duration-200 hover:-translate-y-0.5 whitespace-nowrap cursor-pointer text-sm\">Start Clinic Intake</a>
\t\t\t</div>
\t\t</nav>

\t\t{% include 'components/_hero.twig' %}
\t\t{% include 'components/_problems.twig' %}
\t\t{% include 'components/_services.twig' %}
\t\t<section class=\"py-24 px-6\">
\t\t\t<div class=\"max-w-[1200px] mx-auto fade-in-scroll\">
\t\t\t\t<h2 class=\"text-[42px] font-bold text-[#1F2937] mb-6\">Clinic Web Vitals Diagnostic — 9,000 EGP</h2>
\t\t\t\t<p class=\"text-lg text-[#1F2937] leading-relaxed mb-8\">Get a full technical review of your clinic's online presence — delivered in 72 hours.</p>
\t\t\t\t<ul class=\"space-y-4 mb-8\">
\t\t\t\t\t<li class=\"flex items-start gap-3\">
\t\t\t\t\t\t<div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
\t\t\t\t\t\t\t<i class=\"ri-check-line text-white text-sm\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"text-base text-[#1F2937]\">Homepage clarity check (is it clear who you are + what you do?)</span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"flex items-start gap-3\">
\t\t\t\t\t\t<div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
\t\t\t\t\t\t\t<i class=\"ri-check-line text-white text-sm\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"text-base text-[#1F2937]\">Speed &amp; technical health report (mobile + desktop)</span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"flex items-start gap-3\">
\t\t\t\t\t\t<div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
\t\t\t\t\t\t\t<i class=\"ri-check-line text-white text-sm\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"text-base text-[#1F2937]\">Broken links, missing CTAs, WhatsApp tests</span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"flex items-start gap-3\">
\t\t\t\t\t\t<div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
\t\t\t\t\t\t\t<i class=\"ri-check-line text-white text-sm\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"text-base text-[#1F2937]\">SEO visibility — are you indexed, and how you appear</span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"flex items-start gap-3\">
\t\t\t\t\t\t<div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
\t\t\t\t\t\t\t<i class=\"ri-check-line text-white text-sm\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"text-base text-[#1F2937]\">Trust signals — proof, testimonials, medical language audit</span>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<p class=\"text-base text-[#1F2937] leading-relaxed mb-6\">
\t\t\t\t\t<strong>Delivery:</strong>
\t\t\t\t\t72 hours •
\t\t\t\t\t<strong>Fee:</strong>
\t\t\t\t\t9,000 EGP
\t\t\t\t\t{# •
\t\t\t\t\t\t\t\t\t\t<strong>Paid upfront</strong> #}
\t\t\t\t</p>
\t\t\t\t<a class=\"cta-button inline-block bg-[#0D9488] text-white px-12 py-4 rounded-full text-lg font-semibold hover:bg-[#0f766e] transition-all duration-200 hover:-translate-y-0.5 shadow-lg hover:shadow-xl whitespace-nowrap cursor-pointer\" href=\"#intake\">Start Diagnostic</a>
\t\t\t</div>
\t\t</section>
\t\t{% include 'components/_website_build.twig' %}
\t\t{% include 'components/_faq.twig' %}
\t\t{% include 'components/_founder.twig' %}
\t\t{% include 'components/_cta.twig' %}

\t\t<footer class=\"bg-[#0D9488] text-white py-12 px-6\">
\t\t\t<div class=\"max-w-[1280px] mx-auto\">
\t\t\t\t<div class=\"grid md:grid-cols-3 gap-8 mb-8\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<h3 class=\"font-semibold text-lg mb-4\">Alex Seif</h3>
\t\t\t\t\t\t<p class=\"text-white/80 text-sm leading-relaxed\">Reliable web development and maintenance for clinics in Egypt.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h3 class=\"font-semibold text-lg mb-4\">Services</h3>
\t\t\t\t\t\t<ul class=\"space-y-2 text-sm text-white/80\">
\t\t\t\t\t\t\t<li>Website Care (Monthly)</li>
\t\t\t\t\t\t\t<li>Website Builds</li>
\t\t\t\t\t\t\t<li>Web Vitals Diagnostic</li>
\t\t\t\t\t\t\t<li>Technical Support</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h3 class=\"font-semibold text-lg mb-4\">Contact</h3>
\t\t\t\t\t\t<ul class=\"space-y-2 text-sm text-white/80\">
\t\t\t\t\t\t\t<li>Based in Egypt</li>
\t\t\t\t\t\t\t<li>Serving Clinics Nationwide</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#intake\" class=\"hover:text-white transition-colors cursor-pointer\">Start Intake Form</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"border-t border-white/20 pt-6 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-white/70\">
\t\t\t\t\t<p>© 2025 Alex Seif. All rights reserved.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div>
{% endblock %}
", "pages/home.html.twig", "/var/www/alexseif.com/templates/pages/home.html.twig");
    }
}
