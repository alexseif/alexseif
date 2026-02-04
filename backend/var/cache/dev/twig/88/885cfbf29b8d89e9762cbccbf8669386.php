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

/* landing_page/_audience.html.twig */
class __TwigTemplate_2a951c3b100a5b4f736b8e57126fee39 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_audience.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_audience.html.twig"));

        // line 1
        yield "<section id=\"audience\">
  <div class=\"container\">
    <header class=\"flow\">
      <h2>Who Is It For 👥</h2>
      <p>This offer is built for people who want clarity, speed, and presence—without the tech overwhelm.</p>
    </header>
    <ul class=\"audience-list badge-row\">
      <li class=\"badge\">Clinics & health professionals</li>
      <li class=\"badge\">Small businesses & local shops</li>
      <li class=\"badge\">Freelancers & consultants</li>
      <li class=\"badge\">Agencies & creative teams</li>
      <li class=\"badge\">Bloggers & content creators</li>
      <li class=\"badge\">Non-profits & community orgs</li>
      <li class=\"badge\">Startups & solo founders</li>
      <li class=\"badge\">Anyone with a dream and a domain</li>
    </ul>

    <p class=\"text-center\">Whether you need a quick fix or a full build, I’ll help you show up online with confidence.</p>
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
        return "landing_page/_audience.html.twig";
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
        return new Source("<section id=\"audience\">
  <div class=\"container\">
    <header class=\"flow\">
      <h2>Who Is It For 👥</h2>
      <p>This offer is built for people who want clarity, speed, and presence—without the tech overwhelm.</p>
    </header>
    <ul class=\"audience-list badge-row\">
      <li class=\"badge\">Clinics & health professionals</li>
      <li class=\"badge\">Small businesses & local shops</li>
      <li class=\"badge\">Freelancers & consultants</li>
      <li class=\"badge\">Agencies & creative teams</li>
      <li class=\"badge\">Bloggers & content creators</li>
      <li class=\"badge\">Non-profits & community orgs</li>
      <li class=\"badge\">Startups & solo founders</li>
      <li class=\"badge\">Anyone with a dream and a domain</li>
    </ul>

    <p class=\"text-center\">Whether you need a quick fix or a full build, I’ll help you show up online with confidence.</p>
  </div>
</section>
", "landing_page/_audience.html.twig", "/var/www/alexseif.com/templates/landing_page/_audience.html.twig");
    }
}
