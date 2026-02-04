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

/* landing_page/_usp.html.twig */
class __TwigTemplate_70018ee34e10b6ffb90ebfb694e34d6a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_usp.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_usp.html.twig"));

        // line 1
        yield "<section class=\"container\" id=\"why\">
  <h2>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.why_choose.title"), "html", null, true);
        yield "</h2>
  <ul class=\"check-list\">
    <li>";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.why_choose.reasons.0"), "html", null, true);
        yield "</li>
    <li>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.why_choose.reasons.1"), "html", null, true);
        yield "</li>
    <li>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.why_choose.reasons.2"), "html", null, true);
        yield "</li>
    <li>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.why_choose.reasons.3"), "html", null, true);
        yield "</li>
    <li>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.why_choose.reasons.4"), "html", null, true);
        yield "</li>
    <li>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.why_choose.reasons.5"), "html", null, true);
        yield "</li>
  </ul>
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
        return "landing_page/_usp.html.twig";
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
        return array (  76 => 9,  72 => 8,  68 => 7,  64 => 6,  60 => 5,  56 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section class=\"container\" id=\"why\">
  <h2>{{ 'wordpress_optimize.why_choose.title'|trans }}</h2>
  <ul class=\"check-list\">
    <li>{{ 'wordpress_optimize.why_choose.reasons.0'|trans }}</li>
    <li>{{ 'wordpress_optimize.why_choose.reasons.1'|trans }}</li>
    <li>{{ 'wordpress_optimize.why_choose.reasons.2'|trans }}</li>
    <li>{{ 'wordpress_optimize.why_choose.reasons.3'|trans }}</li>
    <li>{{ 'wordpress_optimize.why_choose.reasons.4'|trans }}</li>
    <li>{{ 'wordpress_optimize.why_choose.reasons.5'|trans }}</li>
  </ul>
</section>
", "landing_page/_usp.html.twig", "/var/www/alexseif.com/templates/landing_page/_usp.html.twig");
    }
}
