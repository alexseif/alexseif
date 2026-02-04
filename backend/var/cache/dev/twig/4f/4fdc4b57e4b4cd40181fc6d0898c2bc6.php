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

/* default/_value.html.twig */
class __TwigTemplate_80ead9d018f0c98458cba4db0a82e55c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_value.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_value.html.twig"));

        // line 1
        yield "<section id=\"value\">
\t<div class=\"container\">
\t\t<div class=\"flow\">
\t\t\t<div>
\t\t\t\t<h2>
\t\t\t\t\t<em>Enabling</em>
\t\t\t\t\tYou Through Digital Experiences</h2>
\t\t\t</div>
\t\t\t<div class=\"card shadow\">
\t\t\t\t<header>
\t\t\t\t\t<h3>My Values</h3>
\t\t\t\t</header>
\t\t\t\t<div class=\"\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tI pride myself on
\t\t\t\t\t\t\t\t<strong>building long-term relationships</strong>
\t\t\t\t\t\t\t\twith my clients, effectively communicating their value through their websites, and enhancing their connection with their audience.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tAs a PHP freelance developer, I specialize in delivering tailored web
\t\t\t\t\t\t\t\t<strong>solutions that drive success</strong>. 🚀 My expertise in fullstack development ensures robust, scalable, and user-friendly applications.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Attention to detail</strong>
\t\t\t\t\t\t\t\tensures that each project not only meets but exceeds client expectations. Whether you need custom web development, consultation, seamless integration, or ongoing support, I'm here to turn your vision into reality. 💡
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- .card -->
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
        return "default/_value.html.twig";
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
        return new Source("<section id=\"value\">
\t<div class=\"container\">
\t\t<div class=\"flow\">
\t\t\t<div>
\t\t\t\t<h2>
\t\t\t\t\t<em>Enabling</em>
\t\t\t\t\tYou Through Digital Experiences</h2>
\t\t\t</div>
\t\t\t<div class=\"card shadow\">
\t\t\t\t<header>
\t\t\t\t\t<h3>My Values</h3>
\t\t\t\t</header>
\t\t\t\t<div class=\"\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tI pride myself on
\t\t\t\t\t\t\t\t<strong>building long-term relationships</strong>
\t\t\t\t\t\t\t\twith my clients, effectively communicating their value through their websites, and enhancing their connection with their audience.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tAs a PHP freelance developer, I specialize in delivering tailored web
\t\t\t\t\t\t\t\t<strong>solutions that drive success</strong>. 🚀 My expertise in fullstack development ensures robust, scalable, and user-friendly applications.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Attention to detail</strong>
\t\t\t\t\t\t\t\tensures that each project not only meets but exceeds client expectations. Whether you need custom web development, consultation, seamless integration, or ongoing support, I'm here to turn your vision into reality. 💡
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- .card -->
\t</div>
\t<!-- .container -->
</section>
", "default/_value.html.twig", "/var/www/alexseif.com/templates/default/_value.html.twig");
    }
}
