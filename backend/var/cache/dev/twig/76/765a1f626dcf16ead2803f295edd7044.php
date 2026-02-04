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

/* landing_page/_nav.html.twig */
class __TwigTemplate_080700c887a96c4e23194b9e9a947d7e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_nav.html.twig"));

        // line 1
        yield "<header class=\"nav\">
  <div class=\"container\">
    <div id=\"nav\">
      <h1>
        <a href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alx_home");
        yield "\" id=\"logo-div\">
          <img src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Wordpress-Optimize-logo.webp"), "html", null, true);
        yield "\" alt=\"WordPress Optimization, speed up Wordpress\" width=\"60\" />
          <span>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.header.title"), "html", null, true);
        yield "</span>
        </a>
      </h1>
      <!-- .brand -->

      <nav role=\"navigation\">
        <ul>
          <li>
            <a href=\"#why\">Why It Works</a>
          </li>
          <li>
            <a href=\"#clients\">Work</a>
          </li>
          <li>
            <a href=\"#pricing\">Pricing</a>
          </li>
          <li>
            <a href=\"#faq\">FAQ</a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- #nav -->
  </div>
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
        return "landing_page/_nav.html.twig";
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
        return array (  62 => 7,  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"nav\">
  <div class=\"container\">
    <div id=\"nav\">
      <h1>
        <a href=\"{{ path('alx_home') }}\" id=\"logo-div\">
          <img src=\"{{ asset('build/images/Wordpress-Optimize-logo.webp') }}\" alt=\"WordPress Optimization, speed up Wordpress\" width=\"60\" />
          <span>{{ 'wordpress_optimize.header.title'|trans }}</span>
        </a>
      </h1>
      <!-- .brand -->

      <nav role=\"navigation\">
        <ul>
          <li>
            <a href=\"#why\">Why It Works</a>
          </li>
          <li>
            <a href=\"#clients\">Work</a>
          </li>
          <li>
            <a href=\"#pricing\">Pricing</a>
          </li>
          <li>
            <a href=\"#faq\">FAQ</a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- #nav -->
  </div>
</header>
", "landing_page/_nav.html.twig", "/var/www/alexseif.com/templates/landing_page/_nav.html.twig");
    }
}
