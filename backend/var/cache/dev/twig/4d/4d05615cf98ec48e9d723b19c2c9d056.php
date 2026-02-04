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

/* landing_page/_proof.html.twig */
class __TwigTemplate_78223a051a13c185b9d655b3ae95d466 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_proof.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_proof.html.twig"));

        // line 12
        yield "\t<section id=\"proof\"> <div class=\"container\">
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"#portfolio\">Selected Work</a></li>
\t\t\t\t<li><a href=\"#clients\">Clients</a></li>
\t\t\t\t<li><a href=\"#testimonials\">Testimonials</a></li>
\t\t\t\t<li><a href=\"#stats\">Results</a></li>
\t\t\t</ul>
\t\t</nav>
\t</div>
</section>
<section id=\"clients\">
\t";
        // line 24
        yield from $this->loadTemplate("landing_page/_portfolio.html.twig", "landing_page/_proof.html.twig", 24)->unwrap()->yield($context);
        // line 25
        yield "\t";
        yield from $this->loadTemplate("landing_page/_clients.html.twig", "landing_page/_proof.html.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "</section>
";
        // line 28
        yield from $this->loadTemplate("landing_page/_stats.html.twig", "landing_page/_proof.html.twig", 28)->unwrap()->yield($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "landing_page/_proof.html.twig";
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
        return array (  70 => 28,  67 => 26,  64 => 25,  62 => 24,  48 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# TODO: 4. Proof Section #}
{# Purpose: Build trust Elements:

Delivered projects (Eka, Seen Media)

Testimonials or client quotes

Screenshots or metrics


 #}
\t<section id=\"proof\"> <div class=\"container\">
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"#portfolio\">Selected Work</a></li>
\t\t\t\t<li><a href=\"#clients\">Clients</a></li>
\t\t\t\t<li><a href=\"#testimonials\">Testimonials</a></li>
\t\t\t\t<li><a href=\"#stats\">Results</a></li>
\t\t\t</ul>
\t\t</nav>
\t</div>
</section>
<section id=\"clients\">
\t{% include 'landing_page/_portfolio.html.twig' %}
\t{% include 'landing_page/_clients.html.twig' %}
</section>
{# {% include 'landing_page/_testimonials.html.twig' %} #}
{% include 'landing_page/_stats.html.twig' %}
", "landing_page/_proof.html.twig", "/var/www/alexseif.com/templates/landing_page/_proof.html.twig");
    }
}
