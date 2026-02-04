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

/* default/_services.html.twig */
class __TwigTemplate_cd8e70ff60f4d1aafcb6719b32042857 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_services.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_services.html.twig"));

        // line 1
        yield "<section id=\"services\">
\t<div class=\"container\">
\t\t<header class=\"flow\">
\t\t\t<h2>Services</h2>
\t\t</header>
\t\t<div class=\"grid-3\">
\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 8
            yield "\t\t\t\t<div class=\"card shadow\">
\t\t\t\t\t<div class=\"card-inner\">

\t\t\t\t\t\t<div class=\"card-face card-face-front\">
\t\t\t\t\t\t\t<div class=\"card-container\">
\t\t\t\t\t\t\t\t<h4>";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 13), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t<p>";
            // line 14
            yield CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 14);
            yield "</p>
\t\t\t\t\t\t\t\t<div class=\"badge-row\">
\t\t\t\t\t\t\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "tags", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 17
                yield "\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tag"], "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-face card-face-back\">
\t\t\t\t\t\t\t";
            // line 23
            if (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "img", [], "any", true, true, false, 23)) {
                // line 24
                yield "\t\t\t\t\t\t\t\t<div class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/" . CoreExtension::getAttribute($this->env, $this->source, $context["service"], "img", [], "any", false, false, false, 26))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 26), "html", null, true);
                yield "\"/>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 30
            yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "\t\t</div>
\t\t<!-- .grid-3 -->
\t</div>
\t<!-- .container -->
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
        return "default/_services.html.twig";
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
        return array (  119 => 34,  110 => 30,  101 => 26,  97 => 24,  95 => 23,  89 => 19,  80 => 17,  76 => 16,  71 => 14,  67 => 13,  60 => 8,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section id=\"services\">
\t<div class=\"container\">
\t\t<header class=\"flow\">
\t\t\t<h2>Services</h2>
\t\t</header>
\t\t<div class=\"grid-3\">
\t\t\t{% for service in services %}
\t\t\t\t<div class=\"card shadow\">
\t\t\t\t\t<div class=\"card-inner\">

\t\t\t\t\t\t<div class=\"card-face card-face-front\">
\t\t\t\t\t\t\t<div class=\"card-container\">
\t\t\t\t\t\t\t\t<h4>{{ service.title }}</h4>
\t\t\t\t\t\t\t\t<p>{{ service.description|raw }}</p>
\t\t\t\t\t\t\t\t<div class=\"badge-row\">
\t\t\t\t\t\t\t\t\t{% for tag in service.tags %}
\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">{{ tag }}</span>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-face card-face-back\">
\t\t\t\t\t\t\t{% if service.img is defined %}
\t\t\t\t\t\t\t\t<div class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/' ~ service.img) }}\" alt=\"{{ service.title }}\"/>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t\t<!-- .grid-3 -->
\t</div>
\t<!-- .container -->
</section>
", "default/_services.html.twig", "/var/www/alexseif.com/templates/default/_services.html.twig");
    }
}
