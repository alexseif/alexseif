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

/* _nav.html.twig */
class __TwigTemplate_e1f263e7f07ec244426fccb305825bd7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        // line 1
        yield "<header class=\"nav\">
\t<div class=\"container\">
\t\t<div id=\"nav\">
\t\t\t<h1>
\t\t\t\t<a href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alx_home");
        yield "\" id=\"logo-div\">
\t\t\t\t\t<img src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/ALX.webp"), "html", null, true);
        yield "\" width=\"80\" alt=\"Alex Seif logo\"/>
\t\t\t\t\t<span>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alex_seif"), "html", null, true);
        yield "</span>
\t\t\t\t</a>
\t\t\t</h1>

\t\t\t<nav role=\"navigation\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#about\">👋🏾 Hi</a></li>
\t\t\t\t\t<li><a href=\"#value\">Values</a></li>
\t\t\t\t\t<li><a href=\"#usp\">Expertise</a></li>
\t\t\t\t\t<li><a class=\"accent\"href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_intake", ["utm_source" => "_nav"]);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cta_default"), "html", null, true);
        yield "</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t\t<!-- #nav -->
\t</div>
</header>
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
        return "_nav.html.twig";
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
        return array (  74 => 16,  62 => 7,  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"nav\">
\t<div class=\"container\">
\t\t<div id=\"nav\">
\t\t\t<h1>
\t\t\t\t<a href=\"{{ path('alx_home') }}\" id=\"logo-div\">
\t\t\t\t\t<img src=\"{{ asset('build/images/ALX.webp') }}\" width=\"80\" alt=\"Alex Seif logo\"/>
\t\t\t\t\t<span>{{ 'alex_seif'|trans }}</span>
\t\t\t\t</a>
\t\t\t</h1>

\t\t\t<nav role=\"navigation\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#about\">👋🏾 Hi</a></li>
\t\t\t\t\t<li><a href=\"#value\">Values</a></li>
\t\t\t\t\t<li><a href=\"#usp\">Expertise</a></li>
\t\t\t\t\t<li><a class=\"accent\"href=\"{{ path('app_intake', {'utm_source': '_nav'}) }}\">{{ 'cta_default'|trans }}</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t\t<!-- #nav -->
\t</div>
</header>
", "_nav.html.twig", "/var/www/alexseif.com/templates/_nav.html.twig");
    }
}
