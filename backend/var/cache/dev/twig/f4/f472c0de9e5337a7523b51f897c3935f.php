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

/* landing_page/_pricing.html.twig */
class __TwigTemplate_dc76b2d43909a6518ff4847a6fd082b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_pricing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_pricing.html.twig"));

        // line 1
        yield "<section id=\"pricing\">
\t<div class=\"container\">
\t\t<div class=\"flow card shadow \">
\t\t\t<h2>Pricing</h2>
\t\t\t<p>I believe in fair pricing that respects the Egyptian market and empowers creators. This isn’t just about websites - it’s about helping each other build our own corner of the web, with speed, clarity, and trust.</p>
\t\t</div>

\t\t<!-- .flow -->
\t\t<div
\t\t\tclass=\"pricing-card\" id=\"pricing-card\">
\t\t\t<!-- Package Tabs -->
\t\t\t<div class=\"pricing-variations\">
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packages"]) || array_key_exists("packages", $context) ? $context["packages"] : (function () { throw new RuntimeError('Variable "packages" does not exist.', 13, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["pkg"]) {
            // line 14
            yield "\t\t\t\t\t<button class=\"package-pane ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 14)) {
                yield "active";
            }
            yield "\" data-package=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\">
\t\t\t\t\t\t<h4>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pkg"], "icon", [], "any", false, false, false, 15), "html", null, true);
            yield "
\t\t\t\t\t\t\t";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pkg"], "title", [], "any", false, false, false, 16), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t<p>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pkg"], "tagline", [], "any", false, false, false, 17), "html", null, true);
            yield "</p>
\t\t\t\t\t</button>
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['pkg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "\t\t\t</div>

\t\t\t<!-- Package Details (Pre-rendered for SEO) -->
\t\t\t<div class=\"pricing-core\">
\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packages"]) || array_key_exists("packages", $context) ? $context["packages"] : (function () { throw new RuntimeError('Variable "packages" does not exist.', 24, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["pkg"]) {
            // line 25
            yield "\t\t\t\t\t<div class=\"package-details\" id=\"package-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 25)) {
                yield " style=\"display:none\" ";
            }
            yield ">
\t\t\t\t\t\t<h3 class=\"price\">Starting from
\t\t\t\t\t\t\t<span>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["pkg"], "price", [], "any", false, false, false, 27), "EGP"), "html", null, true);
            yield "</span>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<ul class=\"feature-list\">
\t\t\t\t\t\t\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pkg"], "features", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 31
                yield "\t\t\t\t\t\t\t\t<li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["feature"], "html", null, true);
                yield "</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<p class=\"note\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pkg"], "note", [], "any", false, false, false, 34), "html", null, true);
            yield "</p>
\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t<a class=\"cta\" href=\"";
            // line 36
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_intake");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cta_default"), "html", null, true);
            yield "</a>
\t\t\t\t\t\t\t";
            // line 38
            yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Structured Data -->
\t\t\t\t\t<script type=\"application/ld+json\">
\t\t\t\t\t\t";
            // line 43
            yield json_encode(["@context" => "https://schema.org", "@type" => "Product", "name" => CoreExtension::getAttribute($this->env, $this->source,             // line 46
$context["pkg"], "title", [], "any", false, false, false, 46), "description" => CoreExtension::getAttribute($this->env, $this->source,             // line 47
$context["pkg"], "note", [], "any", false, false, false, 47), "sku" =>             // line 48
$context["key"], "image" => ["https://alexseif.com/images/WordPress-Optimize-card.png"], "brand" => ["@type" => "Brand", "name" => "WP Optimize by Alex Seif"], "offers" => ["@type" => "Offer", "priceCurrency" => "EGP", "price" => Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source,             // line 59
$context["pkg"], "price", [], "any", false, false, false, 59), [" EGP" => "", "," => ""])), "priceValidUntil" => "2025-12-31", "url" => ("https://alexseif.com/wordpress-optimization#" .             // line 61
$context["key"]), "availability" => "http://schema.org/InStock", "itemCondition" => "http://schema.org/NewCondition", "hasMerchantReturnPolicy" => ["@type" => "MerchantReturnPolicy", "returnPolicyCategory" => "https://schema.org/NoReturns"]]]);
            // line 69
            yield "
\t\t\t\t\t</script>

\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['pkg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "\t\t\t</div>
\t\t</div>
\t</div>
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
        return "landing_page/_pricing.html.twig";
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
        return array (  210 => 73,  193 => 69,  191 => 61,  190 => 59,  189 => 48,  188 => 47,  187 => 46,  186 => 43,  179 => 38,  173 => 36,  168 => 34,  165 => 33,  156 => 31,  152 => 30,  146 => 27,  136 => 25,  119 => 24,  113 => 20,  96 => 17,  92 => 16,  88 => 15,  79 => 14,  62 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section id=\"pricing\">
\t<div class=\"container\">
\t\t<div class=\"flow card shadow \">
\t\t\t<h2>Pricing</h2>
\t\t\t<p>I believe in fair pricing that respects the Egyptian market and empowers creators. This isn’t just about websites - it’s about helping each other build our own corner of the web, with speed, clarity, and trust.</p>
\t\t</div>

\t\t<!-- .flow -->
\t\t<div
\t\t\tclass=\"pricing-card\" id=\"pricing-card\">
\t\t\t<!-- Package Tabs -->
\t\t\t<div class=\"pricing-variations\">
\t\t\t\t{% for key, pkg in packages %}
\t\t\t\t\t<button class=\"package-pane {% if loop.first %}active{% endif %}\" data-package=\"{{ key }}\">
\t\t\t\t\t\t<h4>{{ pkg.icon }}
\t\t\t\t\t\t\t{{ pkg.title }}</h4>
\t\t\t\t\t\t<p>{{ pkg.tagline }}</p>
\t\t\t\t\t</button>
\t\t\t\t{% endfor %}
\t\t\t</div>

\t\t\t<!-- Package Details (Pre-rendered for SEO) -->
\t\t\t<div class=\"pricing-core\">
\t\t\t\t{% for key, pkg in packages %}
\t\t\t\t\t<div class=\"package-details\" id=\"package-{{ key }}\" {% if not loop.first %} style=\"display:none\" {% endif %}>
\t\t\t\t\t\t<h3 class=\"price\">Starting from
\t\t\t\t\t\t\t<span>{{ pkg.price|format_currency('EGP') }}</span>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<ul class=\"feature-list\">
\t\t\t\t\t\t\t{% for feature in pkg.features %}
\t\t\t\t\t\t\t\t<li>{{ feature }}</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<p class=\"note\">{{ pkg.note }}</p>
\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t<a class=\"cta\" href=\"{{ path('app_intake') }}\">{{ 'cta_default'|trans }}</a>
\t\t\t\t\t\t\t{# <a class=\"cta\" href=\"https://wa.me/+201004006332\" target=\"_blank\">{{ 'cta_default'|trans }}</a> #}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Structured Data -->
\t\t\t\t\t<script type=\"application/ld+json\">
\t\t\t\t\t\t{{ {
  \"@context\": \"https://schema.org\",
  \"@type\": \"Product\",
  \"name\": pkg.title,
  \"description\": pkg.note,
  \"sku\": key,
  \"image\": [
    \"https://alexseif.com/images/WordPress-Optimize-card.png\"
  ],
  \"brand\": {
    \"@type\": \"Brand\",
    \"name\": \"WP Optimize by Alex Seif\"
  },
  \"offers\": {
    \"@type\": \"Offer\",
    \"priceCurrency\": \"EGP\",
    \"price\": pkg.price|replace({' EGP': '', ',': ''})|trim,
    \"priceValidUntil\": \"2025-12-31\",
    \"url\": \"https://alexseif.com/wordpress-optimization#\" ~ key,
    \"availability\": \"http://schema.org/InStock\",
    \"itemCondition\": \"http://schema.org/NewCondition\",
    \"hasMerchantReturnPolicy\": {
      \"@type\": \"MerchantReturnPolicy\",
      \"returnPolicyCategory\": \"https://schema.org/NoReturns\"
    }
  }
}|json_encode|raw }}
\t\t\t\t\t</script>

\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
</section>
", "landing_page/_pricing.html.twig", "/var/www/alexseif.com/templates/landing_page/_pricing.html.twig");
    }
}
