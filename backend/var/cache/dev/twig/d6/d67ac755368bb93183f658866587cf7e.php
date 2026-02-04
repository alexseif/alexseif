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

/* landing_page/_solution.html.twig */
class __TwigTemplate_fd5456812906424ba444ddf2b8607313 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_solution.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_solution.html.twig"));

        // line 1
        yield "<section id=\"solution\">
  <div class=\"container\">
    <header class=\"flow\">
      <h2>From Idea to Online -> Fast, Clean, and Ready to Grow</h2>
      <p>Whether you need a simple website, a full WooCommerce store, or just a speed boost—I help you build a digital presence that feels smooth, trustworthy, and ready for real business. Built on WordPress, optimized for Cairo and beyond.</p>
    </header>

    <div class=\"card-wrapper grid-3\">
      <div class=\"card\">
        <h3>🛠️ Website Setup</h3>
        <p>Custom design, mobile-friendly layout, and clear structure—delivered in 7–10 days.</p>
      </div>
      <div class=\"card\">
        <h3>🛒 WooCommerce Stores</h3>
        <p>Product pages, payment gateways, cart flows, and retention tools—ready to sell from day one.</p>
      </div>
      <div class=\"card\">
        <h3>⚡ Optimization & Support</h3>
        <p>Speed, security, backups, and direct support—so your site stays fast and stress-free.</p>
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
        return "landing_page/_solution.html.twig";
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
        return new Source("<section id=\"solution\">
  <div class=\"container\">
    <header class=\"flow\">
      <h2>From Idea to Online -> Fast, Clean, and Ready to Grow</h2>
      <p>Whether you need a simple website, a full WooCommerce store, or just a speed boost—I help you build a digital presence that feels smooth, trustworthy, and ready for real business. Built on WordPress, optimized for Cairo and beyond.</p>
    </header>

    <div class=\"card-wrapper grid-3\">
      <div class=\"card\">
        <h3>🛠️ Website Setup</h3>
        <p>Custom design, mobile-friendly layout, and clear structure—delivered in 7–10 days.</p>
      </div>
      <div class=\"card\">
        <h3>🛒 WooCommerce Stores</h3>
        <p>Product pages, payment gateways, cart flows, and retention tools—ready to sell from day one.</p>
      </div>
      <div class=\"card\">
        <h3>⚡ Optimization & Support</h3>
        <p>Speed, security, backups, and direct support—so your site stays fast and stress-free.</p>
      </div>
    </div>
  </div>
</section>
", "landing_page/_solution.html.twig", "/var/www/alexseif.com/templates/landing_page/_solution.html.twig");
    }
}
