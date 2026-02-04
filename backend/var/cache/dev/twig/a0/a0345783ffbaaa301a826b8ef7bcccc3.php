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

/* landing_page/_pain.html.twig */
class __TwigTemplate_e8d81dd2d96fb1c23a29d2e4cad411ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_pain.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_pain.html.twig"));

        // line 1
        yield "<section id=\"why\">
  <div class=\"container\">
    <header class=\"flow\">
      <h2>You’ve got a dream and a domain, let’s build the rest</h2>
      <p>Whether you’re starting fresh or upgrading what you’ve got, I help turn ideas into websites that feel clean, fast, and ready for real growth. No jargon. No overwhelm. Just a clear path forward.</p>
    </header>
    <div class=\"flow\">
      <div class=\"card\">
        <div class=\"image-wrapper\">
          <img src=\"https://fireart.studio/wp-content/uploads/2020/09/screenshot-1058-1.jpg.webp\" alt=\"Clean modern website layout example\" width=\"\" />
        </div>
      </div>
      <div>
        <ul class=\"fancy-list\">
          <li>Your site should load fast and feel smooth on any device</li>
          <li>Your content should be easy to read, easy to trust</li>
          <li>Your business should show up in search and smart answers</li>
          <li>Your visitors should know what to do and want to do it</li>
          <li>Your data should be strucutured for Crawlers and AI</li>
        </ul>
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
        return "landing_page/_pain.html.twig";
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
        return new Source("<section id=\"why\">
  <div class=\"container\">
    <header class=\"flow\">
      <h2>You’ve got a dream and a domain, let’s build the rest</h2>
      <p>Whether you’re starting fresh or upgrading what you’ve got, I help turn ideas into websites that feel clean, fast, and ready for real growth. No jargon. No overwhelm. Just a clear path forward.</p>
    </header>
    <div class=\"flow\">
      <div class=\"card\">
        <div class=\"image-wrapper\">
          <img src=\"https://fireart.studio/wp-content/uploads/2020/09/screenshot-1058-1.jpg.webp\" alt=\"Clean modern website layout example\" width=\"\" />
        </div>
      </div>
      <div>
        <ul class=\"fancy-list\">
          <li>Your site should load fast and feel smooth on any device</li>
          <li>Your content should be easy to read, easy to trust</li>
          <li>Your business should show up in search and smart answers</li>
          <li>Your visitors should know what to do and want to do it</li>
          <li>Your data should be strucutured for Crawlers and AI</li>
        </ul>
      </div>
    </div>
  </div>
</section>
", "landing_page/_pain.html.twig", "/var/www/alexseif.com/templates/landing_page/_pain.html.twig");
    }
}
