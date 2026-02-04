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

/* landing_page/_header.html.twig */
class __TwigTemplate_7a7dabd324a9765ffb974fdbc895a25e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_header.html.twig"));

        // line 1
        yield "<section id=\"intro\">
\t<header>
\t\t<div class=\"container\">
\t\t\t<div id=\"personal-intro\" class=\"banner\">
\t\t\t\t<div class=\"image-wrapper\">
\t\t\t\t\t<img src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/2023-06-22.webp"), "html", null, true);
        yield "\" alt=\"Alex Seif, freelance web developer\" width=\"\" fetchpriority=\"high\"/>
\t\t\t\t</div>
\t\t\t\t<div>";
        // line 8
        yield Twig\Extension\CoreExtension::nl2br($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.header.subtitle"));
        yield "</div>
\t\t\t</div>
\t\t</div>
\t</header>
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
        return "landing_page/_header.html.twig";
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
        return array (  60 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section id=\"intro\">
\t<header>
\t\t<div class=\"container\">
\t\t\t<div id=\"personal-intro\" class=\"banner\">
\t\t\t\t<div class=\"image-wrapper\">
\t\t\t\t\t<img src=\"{{ asset('build/images/2023-06-22.webp') }}\" alt=\"Alex Seif, freelance web developer\" width=\"\" fetchpriority=\"high\"/>
\t\t\t\t</div>
\t\t\t\t<div>{{ 'wordpress_optimize.header.subtitle'|trans|raw|nl2br }}</div>
\t\t\t</div>
\t\t</div>
\t</header>
</section>
", "landing_page/_header.html.twig", "/var/www/alexseif.com/templates/landing_page/_header.html.twig");
    }
}
