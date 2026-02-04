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

/* experiments/index.html.twig */
class __TwigTemplate_e745a297439cb21480be68d341137419 extends Template
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
            'meta_description' => [$this, 'block_meta_description'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "experiments/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "experiments/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "experiments/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Experiments
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        // line 7
        yield "\t<meta name=\"description\" content=\"Explore experimental features and enhancements From codepen and accross the web\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        yield "\t";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("experiments");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        yield "\t";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("experiments");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        yield "\t<section id=\"experiments\">
\t\t<div class=\"info\">
\t\t\t<h1>Experiments</h1>
\t\t\t<a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_experiments_cta");
        yield "\">CTA</a>
\t\t\t<a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_experiments_graph");
        yield "\">Graph</a>
\t\t\t<a href=\"#illustrating-yin-yang\">illustrating the structure of a ☯ symbol (SVG)</a>
\t\t\t<a href=\"#yin-yang\">Yin Yang</a>
\t\t\t<a href=\"#yin-yang-2\">Yin Yang 2</a>
\t\t</div>
\t</section>
\t<section id=\"illustrating-yin-yang\">
\t\t<div class=\"info\">
\t\t\t<h2>illustrating the structure of a ☯ symbol (SVG)</h2>
\t\t\t<a href=\"https://codepen.io/thebabydino/pen/XRYWrE\" target=\"_blank\">CodePen</a>
\t\t</div>
\t\t<svg viewbox='-13 -7 34 17' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
\t\t\t<marker id='a' viewbox='-8 -4 8 8' markerwidth='5' markerheight='5' orient='auto' refx='-7'>
\t\t\t\t<path d='M-8 0 0-4V4'/>
\t\t\t</marker>
\t\t\t<marker id='a1' viewbox='0 -4 8 8' markerwidth='5' markerheight='5' refx='7' orient='auto'>
\t\t\t\t<path d='M8 0 0-4V4'/>
\t\t\t</marker>

\t\t\t<!-- guides -->
\t\t\t<path
\t\t\td='M13-6H0V9
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t M0 0h11M0-2h9M0-3h7M0-4h9M0 6h13M0 3h8
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t M-6 0V9M-3 3V7M6 0V9M3 3V7'/>

\t\t\t<!-- the big circle -->
\t\t\t<circle
\t\t\tr='6'/>

\t\t\t<!-- smaller (inner) circles -->
\t\t\t<g id='c'>
\t\t\t\t<circle r='3' cy='3'/>
\t\t\t\t<circle r='1' cy='3'/>
\t\t\t</g>
\t\t\t<use xlink:href='#c' y='-6'/>

\t\t\t<path
\t\t\td='M0 6
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t A6 6 0 0 1 0-6
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t A3 3 0 0 1 0 0
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t A3 3 0 0 0 0 6'/>

\t\t\t<!-- small marker circles -->
\t\t\t<g id='q'>
\t\t\t\t<g id='p'>
\t\t\t\t\t<circle r='.1' cy='2'/>
\t\t\t\t\t<circle r='.1'/>
\t\t\t\t</g>
\t\t\t\t<use xlink:href='#p' y='4'/>
\t\t\t\t<circle r='.1' cy='3'/>
\t\t\t</g>
\t\t\t<use xlink:href='#q' y='-6'/>
\t\t\t<circle r='.1' cx='-6'/>
\t\t\t<circle r='.1' cx='6'/>
\t\t\t<circle r='.1' cx='-3' cy='3'/>
\t\t\t<circle
\t\t\tr='.1' cx='3' cy='3'/>

\t\t\t<!-- meas lines & text -->
\t\t\t<g id='m'>
\t\t\t\t<path d='M8-6v2'/>
\t\t\t\t<text x='8.2' y='-4.8'>r/3</text>
\t\t\t</g>
\t\t\t<use xlink:href='#m' y='2'/>
\t\t\t<use xlink:href='#m' y='4'/>
\t\t\t<g id='m1'>
\t\t\t\t<path d='M10.5 0v6'/>
\t\t\t\t<text x='10.7' y='3.25'>r</text>
\t\t\t</g>
\t\t\t<use xlink:href='#m1' y='-6'/>
\t\t\t<g id='m3'>
\t\t\t\t<path d='M-6 8.5h6'/>
\t\t\t\t<text x='-3.15' y='9.3'>r</text>
\t\t\t\t<g id='m2'>
\t\t\t\t\t<path d='M-6 6.5h3'/>
\t\t\t\t\t<text x='-5.15' y='7.3'>r/2</text>
\t\t\t\t</g>
\t\t\t\t<use xlink:href='#m2' x='3'/>
\t\t\t</g>
\t\t\t<use xlink:href='#m3' x='6'/>
\t\t\t<g id='m4'>
\t\t\t\t<path d='M7 0v3'/>
\t\t\t\t<text x='7.3' y='1.7'>r/2</text>
\t\t\t</g>
\t\t\t<use xlink:href='#m4' y='3'/>
\t\t\t<g>
\t\t\t\t<path d='M6.5-2v1m0-3v1'/>
\t\t\t\t<text x='5.8' y='-2.3'>r/6</text>
\t\t\t\t<path d='M12.5-6V6'/>
\t\t\t\t<text x='13' y='.25'>d = 2·r</text>
\t\t\t\t<text x='9' y='8'>r = d/2</text>
\t\t\t</g>

\t\t\t<!-- diameter end points -->
\t\t\t<text y='-6.2'>A</text>
\t\t\t<text y='5.8'>B</text>
\t\t</svg>

\t</section>
\t<section id=\"yin-yang\">
\t\t<div class=\"info\">
\t\t\t<h2>Yin-Yang</h2>
\t\t\t<a href=\"https://codepen.io/sfi0zy/pen/rMwBVK\" target=\"_blank\">CodePen</a>
\t\t</div>
\t\t<div id=\"yin-yang\">
\t\t\t<div class=\"yin-yang\"></div>
\t\t</div>
\t</section>
\t<section id=\"yin-yang-2\">
\t\t<div class=\"info\">
\t\t\t<h2>clip-path: shape()</h2>
\t\t\t<a href=\"https://codepen.io/donotfold/pen/GggWpBg\" target=\"_blank\">CodePen</a>
\t\t</div>
\t\t<div id='yin-yang'>
\t\t\t<div class='yin-yang'></div>
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
        return "experiments/index.html.twig";
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
        return array (  192 => 22,  188 => 21,  183 => 18,  170 => 17,  156 => 13,  143 => 12,  129 => 10,  116 => 9,  104 => 7,  91 => 6,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Experiments
{% endblock %}

{% block meta_description %}
\t<meta name=\"description\" content=\"Explore experimental features and enhancements From codepen and accross the web\"/>
{% endblock %}
{% block stylesheets %}
\t{{ encore_entry_link_tags('experiments') }}
{% endblock %}
{% block javascripts %}
\t{{ encore_entry_script_tags('experiments') }}
{% endblock %}


{% block body %}
\t<section id=\"experiments\">
\t\t<div class=\"info\">
\t\t\t<h1>Experiments</h1>
\t\t\t<a href=\"{{ path('app_experiments_cta') }}\">CTA</a>
\t\t\t<a href=\"{{ path('app_experiments_graph') }}\">Graph</a>
\t\t\t<a href=\"#illustrating-yin-yang\">illustrating the structure of a ☯ symbol (SVG)</a>
\t\t\t<a href=\"#yin-yang\">Yin Yang</a>
\t\t\t<a href=\"#yin-yang-2\">Yin Yang 2</a>
\t\t</div>
\t</section>
\t<section id=\"illustrating-yin-yang\">
\t\t<div class=\"info\">
\t\t\t<h2>illustrating the structure of a ☯ symbol (SVG)</h2>
\t\t\t<a href=\"https://codepen.io/thebabydino/pen/XRYWrE\" target=\"_blank\">CodePen</a>
\t\t</div>
\t\t<svg viewbox='-13 -7 34 17' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
\t\t\t<marker id='a' viewbox='-8 -4 8 8' markerwidth='5' markerheight='5' orient='auto' refx='-7'>
\t\t\t\t<path d='M-8 0 0-4V4'/>
\t\t\t</marker>
\t\t\t<marker id='a1' viewbox='0 -4 8 8' markerwidth='5' markerheight='5' refx='7' orient='auto'>
\t\t\t\t<path d='M8 0 0-4V4'/>
\t\t\t</marker>

\t\t\t<!-- guides -->
\t\t\t<path
\t\t\td='M13-6H0V9
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t M0 0h11M0-2h9M0-3h7M0-4h9M0 6h13M0 3h8
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t M-6 0V9M-3 3V7M6 0V9M3 3V7'/>

\t\t\t<!-- the big circle -->
\t\t\t<circle
\t\t\tr='6'/>

\t\t\t<!-- smaller (inner) circles -->
\t\t\t<g id='c'>
\t\t\t\t<circle r='3' cy='3'/>
\t\t\t\t<circle r='1' cy='3'/>
\t\t\t</g>
\t\t\t<use xlink:href='#c' y='-6'/>

\t\t\t<path
\t\t\td='M0 6
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t A6 6 0 0 1 0-6
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t A3 3 0 0 1 0 0
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t A3 3 0 0 0 0 6'/>

\t\t\t<!-- small marker circles -->
\t\t\t<g id='q'>
\t\t\t\t<g id='p'>
\t\t\t\t\t<circle r='.1' cy='2'/>
\t\t\t\t\t<circle r='.1'/>
\t\t\t\t</g>
\t\t\t\t<use xlink:href='#p' y='4'/>
\t\t\t\t<circle r='.1' cy='3'/>
\t\t\t</g>
\t\t\t<use xlink:href='#q' y='-6'/>
\t\t\t<circle r='.1' cx='-6'/>
\t\t\t<circle r='.1' cx='6'/>
\t\t\t<circle r='.1' cx='-3' cy='3'/>
\t\t\t<circle
\t\t\tr='.1' cx='3' cy='3'/>

\t\t\t<!-- meas lines & text -->
\t\t\t<g id='m'>
\t\t\t\t<path d='M8-6v2'/>
\t\t\t\t<text x='8.2' y='-4.8'>r/3</text>
\t\t\t</g>
\t\t\t<use xlink:href='#m' y='2'/>
\t\t\t<use xlink:href='#m' y='4'/>
\t\t\t<g id='m1'>
\t\t\t\t<path d='M10.5 0v6'/>
\t\t\t\t<text x='10.7' y='3.25'>r</text>
\t\t\t</g>
\t\t\t<use xlink:href='#m1' y='-6'/>
\t\t\t<g id='m3'>
\t\t\t\t<path d='M-6 8.5h6'/>
\t\t\t\t<text x='-3.15' y='9.3'>r</text>
\t\t\t\t<g id='m2'>
\t\t\t\t\t<path d='M-6 6.5h3'/>
\t\t\t\t\t<text x='-5.15' y='7.3'>r/2</text>
\t\t\t\t</g>
\t\t\t\t<use xlink:href='#m2' x='3'/>
\t\t\t</g>
\t\t\t<use xlink:href='#m3' x='6'/>
\t\t\t<g id='m4'>
\t\t\t\t<path d='M7 0v3'/>
\t\t\t\t<text x='7.3' y='1.7'>r/2</text>
\t\t\t</g>
\t\t\t<use xlink:href='#m4' y='3'/>
\t\t\t<g>
\t\t\t\t<path d='M6.5-2v1m0-3v1'/>
\t\t\t\t<text x='5.8' y='-2.3'>r/6</text>
\t\t\t\t<path d='M12.5-6V6'/>
\t\t\t\t<text x='13' y='.25'>d = 2·r</text>
\t\t\t\t<text x='9' y='8'>r = d/2</text>
\t\t\t</g>

\t\t\t<!-- diameter end points -->
\t\t\t<text y='-6.2'>A</text>
\t\t\t<text y='5.8'>B</text>
\t\t</svg>

\t</section>
\t<section id=\"yin-yang\">
\t\t<div class=\"info\">
\t\t\t<h2>Yin-Yang</h2>
\t\t\t<a href=\"https://codepen.io/sfi0zy/pen/rMwBVK\" target=\"_blank\">CodePen</a>
\t\t</div>
\t\t<div id=\"yin-yang\">
\t\t\t<div class=\"yin-yang\"></div>
\t\t</div>
\t</section>
\t<section id=\"yin-yang-2\">
\t\t<div class=\"info\">
\t\t\t<h2>clip-path: shape()</h2>
\t\t\t<a href=\"https://codepen.io/donotfold/pen/GggWpBg\" target=\"_blank\">CodePen</a>
\t\t</div>
\t\t<div id='yin-yang'>
\t\t\t<div class='yin-yang'></div>
\t\t</div>
\t</section>
{% endblock %}
", "experiments/index.html.twig", "/var/www/alexseif.com/templates/experiments/index.html.twig");
    }
}
