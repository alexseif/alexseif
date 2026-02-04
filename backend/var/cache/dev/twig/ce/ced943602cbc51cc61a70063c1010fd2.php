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

/* default/web-evolution.html.twig */
class __TwigTemplate_40007eaf8ac8bed19e6f0247c4f06c30 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/web-evolution.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/web-evolution.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/web-evolution.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Web Evolution |
\t";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alex_seif"), "html", null, true);
        yield "
\t-
\t";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("web_developer")), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        yield "\t<section class=\"fullpage clearfix\" id=\"web-evolution\">
\t\t<canvas class=\"background-grid\"></canvas>
\t\t<div class=\"x-container\">
\t\t\t<header>
\t\t\t\t<h2 class=\"fittext\">Evolution<br/>
\t\t\t\t\t<small class=\"fs-1\">of the</small><br/>
\t\t\t\t\tWeb</h2>
\t\t\t</header>
\t\t\t<section id=\"web-evolution-milestones\">
\t\t\t\t<h2>
\t\t\t\t\t<span class=\"fittext\">1990s</span>
\t\t\t\t\t<br/>
\t\t\t\t\t<span class=\"text-secondary\">Birth of the Web</span>
\t\t\t\t</h2>
\t\t\t\t<h3>Web 1.0</h3>
\t\t\t\t<p class=\"text-secondary\">The era of static websites and read-only content.</p>
\t\t\t\t<hr>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>1990:</span>
\t\t\t\t\t\tTim Berners-Lee invented the World Wide Web.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>1993:</span>
\t\t\t\t\t\tMosaic, the first widely used web browser, was introduced.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>1995:</span>
\t\t\t\t\t\tIntroduction of JavaScript by Netscape.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>1995:</span>
\t\t\t\t\t\tLaunch of Amazon and eBay, marking the start of eCommerce.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>1998:</span>
\t\t\t\t\t\tGoogle was founded, changing the way we search the internet.</li>
\t\t\t\t</ul>
\t\t\t\t<h2>
\t\t\t\t\t<span class=\"fittext\">2000s</span>
\t\t\t\t\t<br/>
\t\t\t\t\t<span class=\"text-secondary\">Web 2.0 and the Rise of Social Media
\t\t\t\t\t</span>
\t\t\t\t</h2>
\t\t\t\t<h3>Web 2.0</h3>
\t\t\t\t<p class=\"text-secondary\">The era of dynamic content, user interaction, and social media.</p>
\t\t\t\t<hr>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2001:</span>
\t\t\t\t\t\tLaunch of Wikipedia.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2004:</span>
\t\t\t\t\t\tFacebook was launched.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2005:</span>
\t\t\t\t\t\tYouTube was launched.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2006:</span>
\t\t\t\t\t\tjQuery was released, simplifying JavaScript programming.</li>
\t\t\t\t</ul>
\t\t\t\t<h2>
\t\t\t\t\t<span class=\"fittext\">2010s</span>
\t\t\t\t\t<br/>
\t\t\t\t\t<span class=\"text-secondary\">
\t\t\t\t\t\tThe Rise of Modern Web Technologies</span>
\t\t\t\t</h2>
\t\t\t\t<h3>Web 3.0</h3>
\t\t\t\t<p class=\"text-secondary\">The era of semantic web, advanced web applications, and decentralized technologies.</p>
\t\t\t\t<hr>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2010:</span>
\t\t\t\t\t\tHTML5 was released, adding new features for web developers.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2011:</span>
\t\t\t\t\t\tIntroduction of Bootstrap, aiding in responsive web design.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2014:</span>
\t\t\t\t\t\tGoogle introduced Material Design.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2015:</span>
\t\t\t\t\t\tECMAScript 6 (ES6) was released, bringing significant improvements to JavaScript.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2016:</span>
\t\t\t\t\t\tIntroduction of Progressive Web Apps (PWAs).</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2017:</span>
\t\t\t\t\t\tReact and Vue.js gained massive popularity.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2018:</span>
\t\t\t\t\t\tWebAssembly (Wasm) reached MVP, enabling high-performance applications in web browsers.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2019:</span>
\t\t\t\t\t\tIntroduction of JAMstack architecture.</li>
\t\t\t\t</ul>
\t\t\t\t<h2>
\t\t\t\t\t<span class=\"fittext\">2020s</span>
\t\t\t\t\t<br/>
\t\t\t\t\t<span class=\"text-secondary\">
\t\t\t\t\t\tModern Web Development</span>
\t\t\t\t</h2>
\t\t\t\t<h3>Web 3.0</h3>
\t\t\t\t<p class=\"text-secondary\">Continued advancements in web technologies and frameworks.</p>
\t\t\t\t<hr>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2020:</span>
\t\t\t\t\t\tLaunch of Next.js, enhancing server-side rendering and static site generation.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2020:</span>
\t\t\t\t\t\tCOVID-19 pandemic increased the demand for contactless solutions and online services.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2021:</span>
\t\t\t\t\t\tPopularity of WebAssembly, enabling high-performance applications in web browsers.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2022:</span>
\t\t\t\t\t\tIntroduction of new JavaScript frameworks like SvelteKit and Qwik.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2023:</span>
\t\t\t\t\t\tContinued growth of Progressive Web Apps (PWAs).</li>
\t\t\t\t</ul>
\t\t\t</section>
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/web-evolution.html.twig";
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
        return array (  110 => 8,  97 => 7,  84 => 5,  79 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Web Evolution |
\t{{ 'alex_seif'|trans }}
\t-
\t{{ 'web_developer'|trans|capitalize }}
{% endblock %}
{% block content %}
\t<section class=\"fullpage clearfix\" id=\"web-evolution\">
\t\t<canvas class=\"background-grid\"></canvas>
\t\t<div class=\"x-container\">
\t\t\t<header>
\t\t\t\t<h2 class=\"fittext\">Evolution<br/>
\t\t\t\t\t<small class=\"fs-1\">of the</small><br/>
\t\t\t\t\tWeb</h2>
\t\t\t</header>
\t\t\t<section id=\"web-evolution-milestones\">
\t\t\t\t<h2>
\t\t\t\t\t<span class=\"fittext\">1990s</span>
\t\t\t\t\t<br/>
\t\t\t\t\t<span class=\"text-secondary\">Birth of the Web</span>
\t\t\t\t</h2>
\t\t\t\t<h3>Web 1.0</h3>
\t\t\t\t<p class=\"text-secondary\">The era of static websites and read-only content.</p>
\t\t\t\t<hr>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>1990:</span>
\t\t\t\t\t\tTim Berners-Lee invented the World Wide Web.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>1993:</span>
\t\t\t\t\t\tMosaic, the first widely used web browser, was introduced.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>1995:</span>
\t\t\t\t\t\tIntroduction of JavaScript by Netscape.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>1995:</span>
\t\t\t\t\t\tLaunch of Amazon and eBay, marking the start of eCommerce.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>1998:</span>
\t\t\t\t\t\tGoogle was founded, changing the way we search the internet.</li>
\t\t\t\t</ul>
\t\t\t\t<h2>
\t\t\t\t\t<span class=\"fittext\">2000s</span>
\t\t\t\t\t<br/>
\t\t\t\t\t<span class=\"text-secondary\">Web 2.0 and the Rise of Social Media
\t\t\t\t\t</span>
\t\t\t\t</h2>
\t\t\t\t<h3>Web 2.0</h3>
\t\t\t\t<p class=\"text-secondary\">The era of dynamic content, user interaction, and social media.</p>
\t\t\t\t<hr>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2001:</span>
\t\t\t\t\t\tLaunch of Wikipedia.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2004:</span>
\t\t\t\t\t\tFacebook was launched.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2005:</span>
\t\t\t\t\t\tYouTube was launched.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2006:</span>
\t\t\t\t\t\tjQuery was released, simplifying JavaScript programming.</li>
\t\t\t\t</ul>
\t\t\t\t<h2>
\t\t\t\t\t<span class=\"fittext\">2010s</span>
\t\t\t\t\t<br/>
\t\t\t\t\t<span class=\"text-secondary\">
\t\t\t\t\t\tThe Rise of Modern Web Technologies</span>
\t\t\t\t</h2>
\t\t\t\t<h3>Web 3.0</h3>
\t\t\t\t<p class=\"text-secondary\">The era of semantic web, advanced web applications, and decentralized technologies.</p>
\t\t\t\t<hr>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2010:</span>
\t\t\t\t\t\tHTML5 was released, adding new features for web developers.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2011:</span>
\t\t\t\t\t\tIntroduction of Bootstrap, aiding in responsive web design.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2014:</span>
\t\t\t\t\t\tGoogle introduced Material Design.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2015:</span>
\t\t\t\t\t\tECMAScript 6 (ES6) was released, bringing significant improvements to JavaScript.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2016:</span>
\t\t\t\t\t\tIntroduction of Progressive Web Apps (PWAs).</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2017:</span>
\t\t\t\t\t\tReact and Vue.js gained massive popularity.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2018:</span>
\t\t\t\t\t\tWebAssembly (Wasm) reached MVP, enabling high-performance applications in web browsers.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2019:</span>
\t\t\t\t\t\tIntroduction of JAMstack architecture.</li>
\t\t\t\t</ul>
\t\t\t\t<h2>
\t\t\t\t\t<span class=\"fittext\">2020s</span>
\t\t\t\t\t<br/>
\t\t\t\t\t<span class=\"text-secondary\">
\t\t\t\t\t\tModern Web Development</span>
\t\t\t\t</h2>
\t\t\t\t<h3>Web 3.0</h3>
\t\t\t\t<p class=\"text-secondary\">Continued advancements in web technologies and frameworks.</p>
\t\t\t\t<hr>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2020:</span>
\t\t\t\t\t\tLaunch of Next.js, enhancing server-side rendering and static site generation.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2020:</span>
\t\t\t\t\t\tCOVID-19 pandemic increased the demand for contactless solutions and online services.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2021:</span>
\t\t\t\t\t\tPopularity of WebAssembly, enabling high-performance applications in web browsers.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2022:</span>
\t\t\t\t\t\tIntroduction of new JavaScript frameworks like SvelteKit and Qwik.</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<span>2023:</span>
\t\t\t\t\t\tContinued growth of Progressive Web Apps (PWAs).</li>
\t\t\t\t</ul>
\t\t\t</section>
\t\t</div>
\t</section>
{% endblock %}
", "default/web-evolution.html.twig", "/var/www/alexseif.com/templates/default/web-evolution.html.twig");
    }
}
