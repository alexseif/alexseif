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

/* landing_page/_portfolio.html.twig */
class __TwigTemplate_c052678e7476f2a9ad0fc8f56c046646 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_portfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_portfolio.html.twig"));

        // line 1
        yield "<div class=\"container\">
  <header class=\"flow\">
    <h2>Selected Work</h2>
    <p>Here’s a glimpse of recent work, real results, real traction.</p>
  </header>
  <!-- .flow -->
  <div class=\"grid-3 portfolio-grid\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["works"]) || array_key_exists("works", $context) ? $context["works"] : (function () { throw new RuntimeError('Variable "works" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 9
            yield "      <div class=\"card\">
        <div class=\"image-wrapper\">
          <img src=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/images/portfolio/" . CoreExtension::getAttribute($this->env, $this->source, $context["work"], "image", [], "any", false, false, false, 11))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["work"], "title", [], "any", false, false, false, 11), "html", null, true);
            yield " Project Screenshot\" />
        </div>
        <div class=\"card-body\">
          <h3>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["work"], "title", [], "any", false, false, false, 14), "html", null, true);
            yield "</h3>
          <p>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["work"], "short", [], "any", false, false, false, 15), "html", null, true);
            yield "</p>
          <div class=\"badge-row\">
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["work"], "badges", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                // line 18
                yield "              <div class=\"badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["badge"], "html", null, true);
                yield "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['badge'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "          </div>
        </div>
        <!-- .card-body -->
        <div class=\"card-footer\">
          <a href=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["work"], "link", [], "any", false, false, false, 24), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["work"], "title", [], "any", false, false, false, 24), "html", null, true);
            yield "</a>
        </div>
        <!-- .card-footer -->
      </div>
      <!-- .card -->
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['work'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "  </div>
  <!-- .portfolio-grid -->
</div>
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
        return "landing_page/_portfolio.html.twig";
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
        return array (  115 => 30,  101 => 24,  95 => 20,  86 => 18,  82 => 17,  77 => 15,  73 => 14,  65 => 11,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container\">
  <header class=\"flow\">
    <h2>Selected Work</h2>
    <p>Here’s a glimpse of recent work, real results, real traction.</p>
  </header>
  <!-- .flow -->
  <div class=\"grid-3 portfolio-grid\">
    {% for work in works %}
      <div class=\"card\">
        <div class=\"image-wrapper\">
          <img src=\"{{ asset('build/images/portfolio/' ~ work.image) }}\" alt=\"{{ work.title }} Project Screenshot\" />
        </div>
        <div class=\"card-body\">
          <h3>{{ work.title }}</h3>
          <p>{{ work.short }}</p>
          <div class=\"badge-row\">
            {% for badge in work.badges %}
              <div class=\"badge\">{{ badge }}</div>
            {% endfor %}
          </div>
        </div>
        <!-- .card-body -->
        <div class=\"card-footer\">
          <a href=\"{{ work.link }}\" target=\"_blank\">{{ work.title }}</a>
        </div>
        <!-- .card-footer -->
      </div>
      <!-- .card -->
    {% endfor %}
  </div>
  <!-- .portfolio-grid -->
</div>
", "landing_page/_portfolio.html.twig", "/var/www/alexseif.com/templates/landing_page/_portfolio.html.twig");
    }
}
