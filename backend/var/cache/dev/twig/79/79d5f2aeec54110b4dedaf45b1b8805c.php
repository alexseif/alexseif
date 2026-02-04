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

/* default/_about.html.twig */
class __TwigTemplate_ba55957b8c1288ce63f6f55b966ec30f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_about.html.twig"));

        // line 1
        yield "<section id=\"about\" class=\"fullpage\">
\t<div class=\"container\">
\t\t<div class=\"banner\">
\t\t\t<div class=\"image-wrapper\">
\t\t\t\t<img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/2023-06-22.webp"), "html", null, true);
        yield "\" alt=\"Alex Seif, freelance web developer\" width=\"\" fetchpriority=\"high\"/>
\t\t\t</div>
\t\t\t<div class=\"inline\">
\t\t\t\t👋🏾 Hi, I'm
\t\t\t\t<h1>Alex Seif</h1>
\t\t\t\t<p>
\t\t\t\t\ta passionate freelance web developer based in Cairo, Egypt.<br/>
\t\t\t\t\tWith over
\t\t\t\t\t<em>20 years</em>
\t\t\t\t\tof experience, I've been dedicated to crafting exceptional online experiences for governments, businesses & individuals around the world.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<!-- .banner -->
\t\t<div class=\"number-boxes grid-3\">
\t\t\t<div class=\"card\">
\t\t\t\t<div id=\"trophy-div\">
\t\t\t\t\t<h4>20 Years</h4>
\t\t\t\t\t<div>";
        // line 23
        yield Twig\Extension\CoreExtension::include($this->env, $context, "default/_trophy.html.twig");
        yield "</div>
\t\t\t\t</div>
\t\t\t\t<p>WOW, 20 years! I'm grateful for all the creativity & impact I've witnessed. Working with amazing clients.</p>
\t\t\t</div>
\t\t\t<div class=\"card\">
\t\t\t\t<h4>+25,000 Hrs</h4>
\t\t\t\t<p>
\t\t\t\t\tWith a dedication to every project, I've logged over
\t\t\t\t\t<em>25,000 hours</em>, ensuring each line of code contributes to the success of the final product.
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"card\">
\t\t\t\t<h4>+400 Projects</h4>
\t\t\t\t<p>
\t\t\t\t\tWorked on over
\t\t\t\t\t<em>over 400 projects</em>
\t\t\t\t\twith 100s of clients, my work has reached over 250M+ Users & devices from diverse business sizes, markets & industries.
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<!-- .card -->
\t\t</div>
\t\t<!-- .number-boxes -->
\t\t<div class=\"\">
\t\t\t<div>
\t\t\t\t<h3>Built for impact,<br/>
\t\t\t\t\t<em>Designed to convert,</em><br/>
\t\t\t\t\tfield tested.</h3>
\t\t\t</div>
\t\t\t<div class=\"flow space-between column\">
\t\t\t\t<div class=\"card shadow\">
\t\t\t\t\t<div class=\"badge-row\">
\t\t\t\t\t\t<div class=\"badge\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("websites"), "html", null, true);
        yield "</div>
\t\t\t\t\t\t<div class=\"badge\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("web_presence"), "html", null, true);
        yield "</div>
\t\t\t\t\t\t<div class=\"badge\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ecommerce"), "html", null, true);
        yield "
\t\t\t\t\t\t\tSolutions</div>
\t\t\t\t\t\t<div class=\"badge\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("travel_technology"), "html", null, true);
        yield "
\t\t\t\t\t\t\tInnovations</div>
\t\t\t\t\t\t<div class=\"badge\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ngo"), "html", null, true);
        yield "
\t\t\t\t\t\t\tProjects</div>
\t\t\t\t\t\t<div class=\"badge\">eLearning Platforms</div>
\t\t\t\t\t\t<div class=\"badge\">eGovernment Services</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- .card -->
\t\t</div>
\t\t<!-- .flow -->
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
        return "default/_about.html.twig";
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
        return array (  127 => 60,  122 => 58,  117 => 56,  113 => 55,  109 => 54,  75 => 23,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section id=\"about\" class=\"fullpage\">
\t<div class=\"container\">
\t\t<div class=\"banner\">
\t\t\t<div class=\"image-wrapper\">
\t\t\t\t<img src=\"{{ asset('build/images/2023-06-22.webp') }}\" alt=\"Alex Seif, freelance web developer\" width=\"\" fetchpriority=\"high\"/>
\t\t\t</div>
\t\t\t<div class=\"inline\">
\t\t\t\t👋🏾 Hi, I'm
\t\t\t\t<h1>Alex Seif</h1>
\t\t\t\t<p>
\t\t\t\t\ta passionate freelance web developer based in Cairo, Egypt.<br/>
\t\t\t\t\tWith over
\t\t\t\t\t<em>20 years</em>
\t\t\t\t\tof experience, I've been dedicated to crafting exceptional online experiences for governments, businesses & individuals around the world.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<!-- .banner -->
\t\t<div class=\"number-boxes grid-3\">
\t\t\t<div class=\"card\">
\t\t\t\t<div id=\"trophy-div\">
\t\t\t\t\t<h4>20 Years</h4>
\t\t\t\t\t<div>{{ include('default/_trophy.html.twig') }}</div>
\t\t\t\t</div>
\t\t\t\t<p>WOW, 20 years! I'm grateful for all the creativity & impact I've witnessed. Working with amazing clients.</p>
\t\t\t</div>
\t\t\t<div class=\"card\">
\t\t\t\t<h4>+25,000 Hrs</h4>
\t\t\t\t<p>
\t\t\t\t\tWith a dedication to every project, I've logged over
\t\t\t\t\t<em>25,000 hours</em>, ensuring each line of code contributes to the success of the final product.
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"card\">
\t\t\t\t<h4>+400 Projects</h4>
\t\t\t\t<p>
\t\t\t\t\tWorked on over
\t\t\t\t\t<em>over 400 projects</em>
\t\t\t\t\twith 100s of clients, my work has reached over 250M+ Users & devices from diverse business sizes, markets & industries.
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<!-- .card -->
\t\t</div>
\t\t<!-- .number-boxes -->
\t\t<div class=\"\">
\t\t\t<div>
\t\t\t\t<h3>Built for impact,<br/>
\t\t\t\t\t<em>Designed to convert,</em><br/>
\t\t\t\t\tfield tested.</h3>
\t\t\t</div>
\t\t\t<div class=\"flow space-between column\">
\t\t\t\t<div class=\"card shadow\">
\t\t\t\t\t<div class=\"badge-row\">
\t\t\t\t\t\t<div class=\"badge\">{{ 'websites'|trans }}</div>
\t\t\t\t\t\t<div class=\"badge\">{{ 'web_presence'|trans }}</div>
\t\t\t\t\t\t<div class=\"badge\">{{ 'ecommerce'|trans }}
\t\t\t\t\t\t\tSolutions</div>
\t\t\t\t\t\t<div class=\"badge\">{{ 'travel_technology'|trans }}
\t\t\t\t\t\t\tInnovations</div>
\t\t\t\t\t\t<div class=\"badge\">{{ 'ngo'|trans }}
\t\t\t\t\t\t\tProjects</div>
\t\t\t\t\t\t<div class=\"badge\">eLearning Platforms</div>
\t\t\t\t\t\t<div class=\"badge\">eGovernment Services</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- .card -->
\t\t</div>
\t\t<!-- .flow -->
\t</div>
\t<!-- .container -->
</section>
", "default/_about.html.twig", "/var/www/alexseif.com/templates/default/_about.html.twig");
    }
}
