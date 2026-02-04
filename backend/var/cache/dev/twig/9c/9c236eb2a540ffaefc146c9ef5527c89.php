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

/* landing_page/_testimonials.html.twig */
class __TwigTemplate_1b49fca15796332e3c9f54c1d6793825 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_testimonials.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_testimonials.html.twig"));

        // line 1
        yield "<section id=\"testimonials\">
  <div class=\"container\">
    <header class=\"flow\">
      <h2>What Clients Say</h2>
      <p>Real feedback from real people. These aren’t just reviews—they’re proof of trust, clarity, and results.</p>
    </header>
    <div class=\"testimonial-grid grid-3\">
     ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 9
            yield "  <script type=\"application/ld+json\">
  ";
            // line 10
            yield json_encode(["@context" => "https://schema.org", "@type" => "Review", "reviewRating" => ["@type" => "Rating", "ratingValue" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 15
$context["review"], "stars", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "stars", [], "any", false, false, false, 15), 5)) : (5)), "bestRating" => "5"], "author" => ["@type" => "Person", "name" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source,             // line 20
$context["review"], "name", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 20), "Anonymous")) : ("Anonymous")))], "reviewBody" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source,             // line 22
$context["review"], "review_text", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "review_text", [], "any", false, false, false, 22), "No review text provided")) : ("No review text provided"))), "itemReviewed" => ["@type" => "Product", "name" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source,             // line 25
$context["review"], "product", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "product", [], "any", false, false, false, 25), "Optimization Only")) : ("Optimization Only")))]]);
            // line 27
            yield "
  </script>
        <div class=\"testimonial-card card\">
          <div class=\"review-header\">
          ";
            // line 31
            if (CoreExtension::getAttribute($this->env, $this->source, $context["review"], "avatar", [], "any", true, true, false, 31)) {
                // line 32
                yield "            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/" . CoreExtension::getAttribute($this->env, $this->source, $context["review"], "avatar", [], "any", false, false, false, 32))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 32), "html", null, true);
                yield " avatar\" class=\"avatar\" />
          ";
            }
            // line 34
            yield "            <div>
          ";
            // line 35
            if (CoreExtension::getAttribute($this->env, $this->source, $context["review"], "name", [], "any", true, true, false, 35)) {
                // line 36
                yield "              <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 36), "html", null, true);
                yield "</strong>
          ";
            }
            // line 38
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["review"], "stars", [], "any", true, true, false, 38)) {
                // line 39
                yield "              <div class=\"stars\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, range(1, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "stars", [], "any", false, false, false, 39)), function ($__i__) use ($context, $macros) { $context["i"] = $__i__; return "★"; }), ""), "html", null, true);
                yield "</div>
          ";
            }
            // line 41
            yield "            </div>
          </div>
          <!-- .review-header -->
          ";
            // line 44
            if (CoreExtension::getAttribute($this->env, $this->source, $context["review"], "review_image", [], "any", true, true, false, 44)) {
                // line 45
                yield "          <figure>
        <img src=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "review_image", [], "any", false, false, false, 46), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "review_text", [], "any", false, false, false, 46), "html", null, true);
                yield "\" class=\"testimonial-img\" />
        <figcaption>
        <q>";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "review_text", [], "any", false, false, false, 48), "html", null, true);
                yield "</q>
        </figcaption>
          </figure>
          ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 51
$context["review"], "review_text", [], "any", true, true, false, 51)) {
                // line 52
                yield "          <p class=\"review-text\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "review_text", [], "any", false, false, false, 52), "html", null, true);
                yield "</p>
          ";
            }
            // line 54
            yield "        </div>
        <!-- .testimonial-card -->
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['review'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "    </div>
    <!-- .testimonial-grid -->
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
        return "landing_page/_testimonials.html.twig";
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
        return array (  145 => 57,  137 => 54,  131 => 52,  129 => 51,  123 => 48,  116 => 46,  113 => 45,  111 => 44,  106 => 41,  100 => 39,  97 => 38,  91 => 36,  89 => 35,  86 => 34,  78 => 32,  76 => 31,  70 => 27,  68 => 25,  67 => 22,  66 => 20,  65 => 15,  64 => 10,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section id=\"testimonials\">
  <div class=\"container\">
    <header class=\"flow\">
      <h2>What Clients Say</h2>
      <p>Real feedback from real people. These aren’t just reviews—they’re proof of trust, clarity, and results.</p>
    </header>
    <div class=\"testimonial-grid grid-3\">
     {% for review in reviews %}
  <script type=\"application/ld+json\">
  {{ {
    \"@context\": \"https://schema.org\",
    \"@type\": \"Review\",
    \"reviewRating\": {
      \"@type\": \"Rating\",
      \"ratingValue\": review.stars|default(5),
      \"bestRating\": \"5\"
    },
    \"author\": {
      \"@type\": \"Person\",
      \"name\": review.name|default(\"Anonymous\")|e
    },
    \"reviewBody\": review.review_text|default(\"No review text provided\")|e,
    \"itemReviewed\": {
      \"@type\": \"Product\",
      \"name\": review.product|default(\"Optimization Only\")|e
    }
  }|json_encode|raw }}
  </script>
        <div class=\"testimonial-card card\">
          <div class=\"review-header\">
          {% if review.avatar is defined %}
            <img src=\"{{ asset('build/' ~ review.avatar) }}\" alt=\"{{ review.name }} avatar\" class=\"avatar\" />
          {% endif %}
            <div>
          {% if review.name is defined %}
              <strong>{{ review.name }}</strong>
          {% endif %}
          {% if review.stars is defined %}
              <div class=\"stars\">{{ range(1, review.stars)|map(i => '★')|join('') }}</div>
          {% endif %}
            </div>
          </div>
          <!-- .review-header -->
          {% if review.review_image is defined %}
          <figure>
        <img src=\"{{ review.review_image }}\" alt=\"{{ review.review_text }}\" class=\"testimonial-img\" />
        <figcaption>
        <q>{{ review.review_text }}</q>
        </figcaption>
          </figure>
          {% elseif review.review_text is defined %}
          <p class=\"review-text\">{{ review.review_text }}</p>
          {% endif %}
        </div>
        <!-- .testimonial-card -->
      {% endfor %}
    </div>
    <!-- .testimonial-grid -->
      </div>
</section>
", "landing_page/_testimonials.html.twig", "/var/www/alexseif.com/templates/landing_page/_testimonials.html.twig");
    }
}
