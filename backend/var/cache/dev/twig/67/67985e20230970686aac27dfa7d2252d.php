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

/* landing_page/_stats.html.twig */
class __TwigTemplate_f2e5acc262df57e1fedd17452778e95e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_stats.html.twig"));

        // line 1
        yield "<section id=\"stats\">
  <div class=\"container\">
    <header class=\"flow\">
      <h2>By the Numbers</h2>
      <p>Real results from real projects. These aren’t vanity metrics—they’re proof of clarity, speed, and trust.</p>
    </header>

    <div class=\"stats-grid\">
      <div class=\"stat-card\">
        <h3>400+</h3>
        <p>WordPress sites delivered</p>
      </div>
      <div class=\"stat-card\">
        <h3>30+</h3>
        <p>WooCommerce stores launched</p>
      </div>
      <div class=\"stat-card\">
        <h3>90%</h3>
        <p>Average speed improvement</p>
      </div>
      <div class=\"stat-card\">
        <h3>100%</h3>
        <p>WhatsApp response rate</p>
      </div>
    </div>
  </div>
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
        return "landing_page/_stats.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section id=\"stats\">
  <div class=\"container\">
    <header class=\"flow\">
      <h2>By the Numbers</h2>
      <p>Real results from real projects. These aren’t vanity metrics—they’re proof of clarity, speed, and trust.</p>
    </header>

    <div class=\"stats-grid\">
      <div class=\"stat-card\">
        <h3>400+</h3>
        <p>WordPress sites delivered</p>
      </div>
      <div class=\"stat-card\">
        <h3>30+</h3>
        <p>WooCommerce stores launched</p>
      </div>
      <div class=\"stat-card\">
        <h3>90%</h3>
        <p>Average speed improvement</p>
      </div>
      <div class=\"stat-card\">
        <h3>100%</h3>
        <p>WhatsApp response rate</p>
      </div>
    </div>
  </div>
</section>
", "landing_page/_stats.html.twig", "/var/www/alexseif.com/templates/landing_page/_stats.html.twig");
    }
}
