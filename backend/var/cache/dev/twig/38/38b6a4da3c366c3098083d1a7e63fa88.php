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

/* landing_page/_clients.html.twig */
class __TwigTemplate_80aa08d6b6575d4d0cdf5c1b2898af66 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_clients.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_clients.html.twig"));

        // line 1
        yield "<div class=\"container\">
  <header class=\"flow\">
    <h2>";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.clients.title"), "html", null, true);
        yield "</h2>
    <p class=\"fs-3\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.clients.subtitle"), "html", null, true);
        yield "</p>
  </header>
  <div>
    <div class=\"masonry-carousel\">
      <div class=\"masonry-track\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["portfolio_images"]) || array_key_exists("portfolio_images", $context) ? $context["portfolio_images"] : (function () { throw new RuntimeError('Variable "portfolio_images" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 10
            yield "          <div class=\"masonry-item\">
            <img src=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/images/logos/" . $context["image"])), "html", null, true);
            yield "\" alt=\"Client Logo\" />
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "        <!-- Duplicate for infinite scroll -->
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["portfolio_images"]) || array_key_exists("portfolio_images", $context) ? $context["portfolio_images"] : (function () { throw new RuntimeError('Variable "portfolio_images" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 16
            yield "          <div class=\"masonry-item\">
            <img src=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/images/logos/" . $context["image"])), "html", null, true);
            yield "\" alt=\"Client Logo\" />
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "      </div>
      <!-- .masonry-track -->
    </div>
    <!-- .masonry-carousel -->
    <div class=\"masonry-carousel\">
      <div class=\"masonry-track\">
        ";
        // line 26
        $context["shuffled"] = Twig\Extension\CoreExtension::sort($this->env, (isset($context["portfolio_images"]) || array_key_exists("portfolio_images", $context) ? $context["portfolio_images"] : (function () { throw new RuntimeError('Variable "portfolio_images" does not exist.', 26, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (((Twig\Extension\CoreExtension::random($this->env->getCharset()) < 0.5)) ? ( -1) : (1)); });
        // line 27
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["shuffled"]) || array_key_exists("shuffled", $context) ? $context["shuffled"] : (function () { throw new RuntimeError('Variable "shuffled" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 28
            yield "          <div class=\"masonry-item\">
            <img src=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/images/logos/" . $context["image"])), "html", null, true);
            yield "\" alt=\"Client Logo\" />
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "        <!-- Duplicate for infinite scroll -->
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["portfolio_images"]) || array_key_exists("portfolio_images", $context) ? $context["portfolio_images"] : (function () { throw new RuntimeError('Variable "portfolio_images" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 34
            yield "          <div class=\"masonry-item\">
            <img src=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/images/logos/" . $context["image"])), "html", null, true);
            yield "\" alt=\"Client Logo\" />
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "      </div>
      <!-- .masonry-track -->
    </div>
    <!-- .masonry-carousel -->
  </div>
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
        return "landing_page/_clients.html.twig";
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
        return array (  145 => 38,  136 => 35,  133 => 34,  129 => 33,  126 => 32,  117 => 29,  114 => 28,  109 => 27,  107 => 26,  99 => 20,  90 => 17,  87 => 16,  83 => 15,  80 => 14,  71 => 11,  68 => 10,  64 => 9,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container\">
  <header class=\"flow\">
    <h2>{{ 'wordpress_optimize.clients.title'|trans }}</h2>
    <p class=\"fs-3\">{{ 'wordpress_optimize.clients.subtitle'|trans }}</p>
  </header>
  <div>
    <div class=\"masonry-carousel\">
      <div class=\"masonry-track\">
        {% for image in portfolio_images %}
          <div class=\"masonry-item\">
            <img src=\"{{ asset('build/images/logos/' ~ image) }}\" alt=\"Client Logo\" />
          </div>
        {% endfor %}
        <!-- Duplicate for infinite scroll -->
        {% for image in portfolio_images %}
          <div class=\"masonry-item\">
            <img src=\"{{ asset('build/images/logos/' ~ image) }}\" alt=\"Client Logo\" />
          </div>
        {% endfor %}
      </div>
      <!-- .masonry-track -->
    </div>
    <!-- .masonry-carousel -->
    <div class=\"masonry-carousel\">
      <div class=\"masonry-track\">
        {% set shuffled = portfolio_images|sort((a, b) => random() < 0.5 ? -1 : 1) %}
        {% for image in shuffled %}
          <div class=\"masonry-item\">
            <img src=\"{{ asset('build/images/logos/' ~ image) }}\" alt=\"Client Logo\" />
          </div>
        {% endfor %}
        <!-- Duplicate for infinite scroll -->
        {% for image in portfolio_images %}
          <div class=\"masonry-item\">
            <img src=\"{{ asset('build/images/logos/' ~ image) }}\" alt=\"Client Logo\" />
          </div>
        {% endfor %}
      </div>
      <!-- .masonry-track -->
    </div>
    <!-- .masonry-carousel -->
  </div>
</div>
", "landing_page/_clients.html.twig", "/var/www/alexseif.com/templates/landing_page/_clients.html.twig");
    }
}
