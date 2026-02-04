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

/* default/_usp.html.twig */
class __TwigTemplate_192f18b3076ec9c8bf7f8fb2a6bbf735 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_usp.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_usp.html.twig"));

        // line 1
        yield "<section id=\"usp\">
\t<div class=\"container\">
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["aboutSections"]) || array_key_exists("aboutSections", $context) ? $context["aboutSections"] : (function () { throw new RuntimeError('Variable "aboutSections" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 4
            yield "\t\t\t<div class=\"card flow column\">
\t\t\t\t<h3>";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["section"], "title", [], "any", false, false, false, 5), "html", null, true);
            yield "</h3>
\t\t\t\t<p>";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["section"], "description", [], "any", false, false, false, 6), "html", null, true);
            yield "</p>
\t\t\t\t<div class=\"badge-row align-right\">
\t\t\t\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["section"], "tags", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
                // line 9
                yield "\t\t\t\t\t\t<span class=\"badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["region"], "html", null, true);
                yield "</span>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['region'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            yield "\t\t\t\t</div>
\t\t\t\t<!-- .badge-row -->
\t\t\t</div>
\t\t\t<!-- .card -->
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['section'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "\t</div>
\t<!-- .container -->
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/_usp.html.twig";
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
        return array (  91 => 16,  81 => 11,  72 => 9,  68 => 8,  63 => 6,  59 => 5,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section id=\"usp\">
\t<div class=\"container\">
\t\t{% for section in aboutSections %}
\t\t\t<div class=\"card flow column\">
\t\t\t\t<h3>{{ section.title }}</h3>
\t\t\t\t<p>{{ section.description }}</p>
\t\t\t\t<div class=\"badge-row align-right\">
\t\t\t\t\t{% for region in section.tags %}
\t\t\t\t\t\t<span class=\"badge\">{{ region }}</span>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<!-- .badge-row -->
\t\t\t</div>
\t\t\t<!-- .card -->
\t\t{% endfor %}
\t</div>
\t<!-- .container -->
</section>
", "default/_usp.html.twig", "/var/www/alexseif.com/templates/default/_usp.html.twig");
    }
}
