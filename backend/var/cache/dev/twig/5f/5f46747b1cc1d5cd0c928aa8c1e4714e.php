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

/* landing_page/_contact.html.twig */
class __TwigTemplate_0a4d8405e597069ef0b5c21b956063c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_contact.html.twig"));

        // line 1
        yield "<section id=\"contact\">
  <div class=\"container\">
    <div class=\"banner\">
      <div class=\"image-wrapper\">
        <img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/2023-06-22.webp"), "html", null, true);
        yield "\" alt=\"Alex Seif, freelance web developer\" width=\"\" fetchpriority=\"high\" />
      </div>

      <div>
        <h2>Let’s Talk</h2>
        <p>If you’re ready to improve your site, launch something new, or just want to ask a few questions -> I’m here.</p>
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
        return "landing_page/_contact.html.twig";
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
        return array (  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section id=\"contact\">
  <div class=\"container\">
    <div class=\"banner\">
      <div class=\"image-wrapper\">
        <img src=\"{{ asset('build/images/2023-06-22.webp') }}\" alt=\"Alex Seif, freelance web developer\" width=\"\" fetchpriority=\"high\" />
      </div>

      <div>
        <h2>Let’s Talk</h2>
        <p>If you’re ready to improve your site, launch something new, or just want to ask a few questions -> I’m here.</p>
      </div>
    </div>
  </div>
</section>
", "landing_page/_contact.html.twig", "/var/www/alexseif.com/templates/landing_page/_contact.html.twig");
    }
}
