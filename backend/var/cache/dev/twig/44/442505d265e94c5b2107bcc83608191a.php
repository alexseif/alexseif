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

/* landing_page/index.html.twig */
class __TwigTemplate_099c55d84df83fbec755242e31c90142 extends Template
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
            'meta' => [$this, 'block_meta'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "landing_page/index.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.meta.title"), "html", null, true);
        yield "
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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
\t";
        // line 8
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("wp-optimize");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
\t";
        // line 12
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("wp-optimize");
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
    public function block_meta(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 15
        yield "\t<meta
\tname=\"description\" content=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.meta.description"), "html", null, true);
        yield "\"/>
\t<!-- Open Graph / Facebook -->
\t<meta property=\"og:type\" content=\"website\"/>
\t<meta property=\"og:url\" content=\"https://alexseif.com/wordpress-optimization\"/>
\t<meta property=\"og:title\" content=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.meta.title"), "html", null, true);
        yield "\"/>
\t<meta property=\"og:description\" content=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.meta.description"), "html", null, true);
        yield "\"/>
\t<meta
\tproperty=\"og:image\" content=\"https://alexseif.com/images/WordPress-Optimize-card.png\"/>
\t<!-- Twitter -->
\t<meta name=\"twitter:card\" content=\"summary_large_image\"/>
\t<meta name=\"twitter:site\" content=\"@alexseif\"/>
\t<meta name=\"twitter:creator\" content=\"@alexseif\"/>
\t<meta name=\"twitter:title\" content=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.meta.title"), "html", null, true);
        yield "\"/>
\t<meta name=\"twitter:description\" content=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.meta.description"), "html", null, true);
        yield "\"/>
\t<meta name=\"twitter:image\" content=\"https://alexseif.com/images/WordPress-Optimize-card.png\"/>
\t<meta name=\"robots\" content=\"index, follow\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
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

        // line 34
        yield "\t";
        yield from $this->loadTemplate("landing_page/_header.html.twig", "landing_page/index.html.twig", 34)->unwrap()->yield($context);
        // line 35
        yield "\t";
        yield from $this->loadTemplate("landing_page/_pricing.html.twig", "landing_page/index.html.twig", 35)->unwrap()->yield($context);
        // line 36
        yield "\t";
        yield from $this->loadTemplate("landing_page/_proof.html.twig", "landing_page/index.html.twig", 36)->unwrap()->yield($context);
        // line 37
        yield "\t";
        yield from $this->loadTemplate("landing_page/_audience.html.twig", "landing_page/index.html.twig", 37)->unwrap()->yield($context);
        // line 38
        yield "\t";
        yield from $this->loadTemplate("landing_page/_pain.html.twig", "landing_page/index.html.twig", 38)->unwrap()->yield($context);
        // line 39
        yield "\t";
        yield from $this->loadTemplate("landing_page/_solution.html.twig", "landing_page/index.html.twig", 39)->unwrap()->yield($context);
        // line 40
        yield "\t";
        yield from $this->loadTemplate("landing_page/_faq.html.twig", "landing_page/index.html.twig", 40)->unwrap()->yield($context);
        // line 41
        yield "\t";
        yield from $this->loadTemplate("landing_page/_contact.html.twig", "landing_page/index.html.twig", 41)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "landing_page/index.html.twig";
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
        return array (  246 => 41,  243 => 40,  240 => 39,  237 => 38,  234 => 37,  231 => 36,  228 => 35,  225 => 34,  212 => 33,  197 => 29,  193 => 28,  183 => 21,  179 => 20,  172 => 16,  169 => 15,  156 => 14,  143 => 12,  138 => 11,  125 => 10,  112 => 8,  107 => 7,  94 => 6,  80 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ 'wordpress_optimize.meta.title'|trans }}
{% endblock %}
{% block stylesheets %}
\t{{ parent() }}
\t{{ encore_entry_link_tags('wp-optimize') }}
{% endblock %}
{% block javascripts %}
\t{{ parent() }}
\t{{ encore_entry_script_tags('wp-optimize') }}
{% endblock %}
{% block meta %}
\t<meta
\tname=\"description\" content=\"{{ 'wordpress_optimize.meta.description'|trans }}\"/>
\t<!-- Open Graph / Facebook -->
\t<meta property=\"og:type\" content=\"website\"/>
\t<meta property=\"og:url\" content=\"https://alexseif.com/wordpress-optimization\"/>
\t<meta property=\"og:title\" content=\"{{ 'wordpress_optimize.meta.title'|trans }}\"/>
\t<meta property=\"og:description\" content=\"{{ 'wordpress_optimize.meta.description'|trans }}\"/>
\t<meta
\tproperty=\"og:image\" content=\"https://alexseif.com/images/WordPress-Optimize-card.png\"/>
\t<!-- Twitter -->
\t<meta name=\"twitter:card\" content=\"summary_large_image\"/>
\t<meta name=\"twitter:site\" content=\"@alexseif\"/>
\t<meta name=\"twitter:creator\" content=\"@alexseif\"/>
\t<meta name=\"twitter:title\" content=\"{{ 'wordpress_optimize.meta.title'|trans }}\"/>
\t<meta name=\"twitter:description\" content=\"{{ 'wordpress_optimize.meta.description'|trans }}\"/>
\t<meta name=\"twitter:image\" content=\"https://alexseif.com/images/WordPress-Optimize-card.png\"/>
\t<meta name=\"robots\" content=\"index, follow\"/>
{% endblock %}
{% block content %}
\t{% include 'landing_page/_header.html.twig' %}
\t{% include 'landing_page/_pricing.html.twig' %}
\t{% include 'landing_page/_proof.html.twig' %}
\t{% include 'landing_page/_audience.html.twig' %}
\t{% include 'landing_page/_pain.html.twig' %}
\t{% include 'landing_page/_solution.html.twig' %}
\t{% include 'landing_page/_faq.html.twig' %}
\t{% include 'landing_page/_contact.html.twig' %}
{% endblock %}
", "landing_page/index.html.twig", "/var/www/alexseif.com/templates/landing_page/index.html.twig");
    }
}
