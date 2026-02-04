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
class __TwigTemplate_b6d24ef7b9ec501f559821dec0cff266 extends Template
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
        // line 1
        yield "<div class=\"side-nav d-flex flex-column justify-content-between text-center align-content-center align-items-center\" id=\"nav\">
\t<header>
\t\t<h1>
\t\t\t<a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alx_home");
        yield "\" class=\"\" id=\"logo-div\">
\t\t\t\t<img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/ALX.png"), "html", null, true);
        yield "\" width=\"100\" height=\"100\" alt=\"Alex Seif logo\" class=\"img-fluid\"/>
\t\t\t\t<span class=\"lh-1 fs-1 fw-bold text-center d-flex justify-content-center flex-column align-items-center align-content-center\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alex_seif2"), "html", null, true);
        yield "</span>
\t\t\t</a>
\t\t</h1>
\t</header>
\t<!-- .pe-top -->
\t<footer>
\t\t<h2>
\t\t\t<a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alx_home");
        yield "\" id=\"trophy-div\">
\t\t\t\t";
        // line 14
        yield Twig\Extension\CoreExtension::include($this->env, $context, "default/_trophy.html.twig");
        yield "
\t\t\t\t<span class=\"lh-1 fs-1 fw-bold text-center d-flex justify-content-center flex-column align-items-center align-content-center\">20 Years</span>
\t\t\t</a>
\t\t</h2>
\t\t<div class=\"x-menu-btn\">
\t\t\t<div class=\"x-menu-line\"></div>
\t\t\t<div class=\"x-menu-line\"></div>
\t\t\t<div class=\"x-menu-line\"></div>
\t\t</div>
\t</footer>
</div>
<div id=\"nav-container\">
\t<nav role=\"navigation\">
\t\t<div class=\"menu-container\">
\t\t\t";
        // line 29
        yield "\t\t\t";
        // line 30
        yield "\t\t\t\t<a href=\"#\" class=\"x-link\"> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("the_future"), "html", null, true);
        yield "</a>
\t\t\t<div class=\"x-social\">
\t\t\t\t<a href=\"https://www.instagram.com/freelancer_alex/\" target=\"_blank\" class=\"social-icon-link\"><img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/014-instagram.svg"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alex_seif_instragram"), "html", null, true);
        yield "\" class=\"social-icon\"></a>
\t\t\t\t<a href=\"https://www.instagram.com/freelancer_alex/\" target=\"_blank\" class=\"social-icon-link\"><img src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/027-whatsapp.svg"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alex_seif_instragram"), "html", null, true);
        yield "\" class=\"social-icon\"></a>
\t\t\t\t<a href=\"https://www.instagram.com/freelancer_alex/\" target=\"_blank\" class=\"social-icon-link\"><img src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/013-facebook.svg"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alex_seif_instragram"), "html", null, true);
        yield "\" class=\"social-icon\"></a>
\t\t\t</div>
\t\t</div>

\t</nav>
</div>
";
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
        return array (  106 => 34,  100 => 33,  94 => 32,  88 => 30,  86 => 29,  69 => 14,  65 => 13,  55 => 6,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "_nav.html.twig", "/var/www/alexseif/templates/_nav.html.twig");
    }
}
