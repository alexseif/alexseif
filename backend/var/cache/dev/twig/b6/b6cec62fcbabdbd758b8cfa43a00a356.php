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

/* footer.html.twig */
class __TwigTemplate_e078569c9e2584ecc5af9a3db37ad2f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        yield "<footer>
\t<div class=\"container\">
\t\t<div class=\"footer-wrapper\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_landing_page");
        yield "\" title=\"Wordpress Oprimization packages\"><img src=\" ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Wordpress-Optimize-logo.webp"), "html", null, true);
        yield " \" alt=\" wordpress optimization packages\" width=\"50\"/></a>
\t\t\t\t\t";
        // line 8
        yield "\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://www.instagram.com/alex_makes_websites/\" target=\"_blank\" class=\"social-icon-link\" aria-label=\"Instagram: Alex Makes Websites\">";
        // line 10
        yield from $this->loadTemplate("icons/014-instagram.svg", "footer.html.twig", 10)->unwrap()->yield($context);
        yield "</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<a href=\"https://wakatime.com/badge/github/alexseif/alexseif\" target=\"_blank\"><img src=\"https://wakatime.com/badge/github/alexseif/alexseif.svg\" alt=\"wakatime\"></a>
\t\t\t<nav></nav>

\t\t\t<div class=\"shadow\">
\t\t\t\t<a class=\"cta\" href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_intake", ["utm_source" => "_footer"]);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cta_default"), "html", null, true);
        yield "</a>

\t\t\t</div>
\t\t</div>
\t\t<!-- .footer-wrapper -->
\t</div>
\t<!-- .container -->
</footer>
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
        return "footer.html.twig";
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
        return array (  75 => 17,  65 => 10,  61 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer>
\t<div class=\"container\">
\t\t<div class=\"footer-wrapper\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('app_landing_page') }}\" title=\"Wordpress Oprimization packages\"><img src=\" {{ asset('build/images/Wordpress-Optimize-logo.webp') }} \" alt=\" wordpress optimization packages\" width=\"50\"/></a>
\t\t\t\t\t{# <a href=\"https://www.instagram.com/alex_makes_websites/\" target=\"_blank\" class=\"social-icon-link\" aria-label=\"Instagram: Alex Makes Websites\">{% include 'icons/014-instagram.svg' %}</a> #}
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://www.instagram.com/alex_makes_websites/\" target=\"_blank\" class=\"social-icon-link\" aria-label=\"Instagram: Alex Makes Websites\">{% include 'icons/014-instagram.svg' %}</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<a href=\"https://wakatime.com/badge/github/alexseif/alexseif\" target=\"_blank\"><img src=\"https://wakatime.com/badge/github/alexseif/alexseif.svg\" alt=\"wakatime\"></a>
\t\t\t<nav></nav>

\t\t\t<div class=\"shadow\">
\t\t\t\t<a class=\"cta\" href=\"{{ path('app_intake', {'utm_source': '_footer'}) }}\">{{ 'cta_default'|trans }}</a>

\t\t\t</div>
\t\t</div>
\t\t<!-- .footer-wrapper -->
\t</div>
\t<!-- .container -->
</footer>
", "footer.html.twig", "/var/www/alexseif.com/templates/footer.html.twig");
    }
}
