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

/* default/home.html.twig */
class __TwigTemplate_54816efde4f9c310fc0854d737d63832 extends Template
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
            'content' => [$this, 'block_content'],
            'announcements' => [$this, 'block_announcements'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alex_seif"), "html", null, true);
        yield "
\t-
\t";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("web_developer")), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        yield "\t<div class=\"scrollsign\">
\t\t";
        // line 9
        yield Twig\Extension\CoreExtension::include($this->env, $context, "default/_about.html.twig");
        yield "
\t\t<section id=\"sales\" class=\"\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"card shadow\">
\t\t\t\t\t<div class=\"inline text-section\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<p class=\"font-large\">
\t\t\t\t\t\t\t\tIn the next 12- 18 months, AI models (like Google's new Overviews and future chatbots) will become the primary way patients search for and get recommended to healthcare providers. We help clinics like yours dominate that shift. We optimize your website's hidden 'semantic data' to directly feed these machines, ensuring the AI recommends you over your competitors for the most profitable patient queries.<br/>
\t\t\t\t\t\t\t\tFill in this form to get started today!
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-end \">
\t\t\t\t\t\t<a href=\"https://alexseif.com/intake\" class=\"cta\">Client Intake</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- .banner -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- .container -->
\t\t</section>
\t\t<div class=\"container\">
\t\t\t<h3>I build wonderous things like this</h3>
\t\t\t<div class=\"image-wrapper\">
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/sales/how-can-we-make-you-happy.webp"), "html", null, true);
        yield "\" alt=\"How can we make you happy\"/>
\t\t\t\t</figure>
\t\t\t</div>
\t\t\t<!--.image-wrapper-->
\t\t</div>
\t\t";
        // line 38
        yield Twig\Extension\CoreExtension::include($this->env, $context, "default/_value.html.twig");
        yield "
\t\t";
        // line 39
        yield Twig\Extension\CoreExtension::include($this->env, $context, "default/_services.html.twig");
        yield "
\t\t";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "default/_usp.html.twig");
        yield "
\t\t";
        // line 41
        yield from $this->loadTemplate("landing_page/_proof.html.twig", "default/home.html.twig", 41)->unwrap()->yield($context);
        // line 42
        yield "\t</div>
\t<!-- #fullpages -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_announcements(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "announcements"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "announcements"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/home.html.twig";
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
        return array (  175 => 45,  162 => 42,  160 => 41,  156 => 40,  152 => 39,  148 => 38,  140 => 33,  113 => 9,  110 => 8,  97 => 7,  84 => 5,  78 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
\t{{ 'alex_seif'|trans }}
\t-
\t{{ 'web_developer'|trans|capitalize }}
{% endblock %}
{% block content %}
\t<div class=\"scrollsign\">
\t\t{{ include('default/_about.html.twig') }}
\t\t<section id=\"sales\" class=\"\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"card shadow\">
\t\t\t\t\t<div class=\"inline text-section\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<p class=\"font-large\">
\t\t\t\t\t\t\t\tIn the next 12- 18 months, AI models (like Google's new Overviews and future chatbots) will become the primary way patients search for and get recommended to healthcare providers. We help clinics like yours dominate that shift. We optimize your website's hidden 'semantic data' to directly feed these machines, ensuring the AI recommends you over your competitors for the most profitable patient queries.<br/>
\t\t\t\t\t\t\t\tFill in this form to get started today!
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-end \">
\t\t\t\t\t\t<a href=\"https://alexseif.com/intake\" class=\"cta\">Client Intake</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- .banner -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- .container -->
\t\t</section>
\t\t<div class=\"container\">
\t\t\t<h3>I build wonderous things like this</h3>
\t\t\t<div class=\"image-wrapper\">
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"{{asset('build/images/sales/how-can-we-make-you-happy.webp')}}\" alt=\"How can we make you happy\"/>
\t\t\t\t</figure>
\t\t\t</div>
\t\t\t<!--.image-wrapper-->
\t\t</div>
\t\t{{ include('default/_value.html.twig') }}
\t\t{{ include('default/_services.html.twig') }}
\t\t{{ include('default/_usp.html.twig') }}
\t\t{% include 'landing_page/_proof.html.twig' %}
\t</div>
\t<!-- #fullpages -->
{% endblock %}
{% block announcements %}{% endblock %}
", "default/home.html.twig", "/var/www/alexseif.com/templates/default/home.html.twig");
    }
}
