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

/* mindfulness/mindfulness-techniques.html.twig */
class __TwigTemplate_4eb2fb3ed1b53164604a518a900759c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mindfulness/mindfulness-techniques.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mindfulness/mindfulness-techniques.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mindfulness/mindfulness-techniques.html.twig", 1);
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

        // line 4
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alex_seif"), "html", null, true);
        yield "
\t- Mindfulness-Based Techniques
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "\t<section class=\"fullpage\">
\t\t<div class=\"x-container\">
\t\t\t<div class=\"ms-5\">
\t\t\t\t<div class=\"pages tab-content\" id=\"nav-tabContent\">
\t\t\t\t\t<div class=\"tab-pane fade show active page\" id=\"nav-page-1\" role=\"tabpanel\" aria-labelledby=\"nav-page-1-tab\" tabindex=\"0\">
\t\t\t\t\t\t<header class=\"mb-5 mt-5\">
\t\t\t\t\t\t\t<h2 class=\"fittext text-end\">Mindfulness-Based Techniques</h2>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<ul class='impressive'>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>Practicing mindfulness:</h3>
\t\t\t\t\t\t\t\tMeditation, deep breathing, or body scanning can help ground you in the present moment, reduce stress, and increase awareness of unhelpful thought patterns.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>Behavioral Activation:</h3>
\t\t\t\t\t\t\t\tSchedule and engage in activities that bring joy or a sense of accomplishment to combat depression and reinforce positive behavior changes.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>Journaling:</h3>
\t\t\t\t\t\t\t\tKeep a journal of emotions, triggers, and responses to track patterns and celebrate small victories.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>Self-Compassion Practices:</h3>
\t\t\t\t\t\t\t\tUse affirmations or guided self-compassion meditations to counteract harsh self-criticism.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>Exposure Therapy:</h3>
\t\t\t\t\t\t\t\tGradually expose yourself to feared situations or stimuli in a safe and controlled way to desensitize and change responses.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>Visualization:</h3>
\t\t\t\t\t\t\t\tImagine positive outcomes or mentally rehearse situations to reinforce healthier thought patterns.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>Problem-Solving Skills Training:</h3>
\t\t\t\t\t\t\t\tUse structured approaches to tackle challenges, like breaking problems into smaller steps and brainstorming solutions.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>Lifestyle Adjustments:</h3>
\t\t\t\t\t\t\t\tExercise, sleep hygiene, and nutrition improve mental health and make CBT more effective.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade page\" id=\"nav-page-2\" role=\"tabpanel\" aria-labelledby=\"nav-page-2-tab\" tabindex=\"0\">
\t\t\t\t\t\t<header class=\"mb-5 mt-5\">
\t\t\t\t\t\t\t<h2 class=\"fittext text-end\">How to Build Integrity</h2>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<ul class='impressive'>
\t\t\t\t\t\t\t<li>Commit yourself to
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">personal growth</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tStick to your word and
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">promises</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tBe
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">respectful</span>
\t\t\t\t\t\t\t\tand
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">reliable</span>
\t\t\t\t\t\t\t\tto others.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tBe authentically
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">vulnerable</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tBe a
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">role model</span>
\t\t\t\t\t\t\t\tto yourself and others.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tBe
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">transparent</span>
\t\t\t\t\t\t\t\twith your intentions.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tBe
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">gracious</span>/demonstrate
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">gratitude</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">Never be fake</span>
\t\t\t\t\t\t\t\tto yourself or others.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">Never make promises</span>
\t\t\t\t\t\t\t\tyou can't keep.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tBe
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">honest</span>
\t\t\t\t\t\t\t\tin your communications.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tAlways take full
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">accountability</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tAlways give your
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">best effort</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tHelp those in need; be
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">compassionate</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tLearn how to embody
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">patience</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tLearn to
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">be truthful</span>
\t\t\t\t\t\t\t\twith yourself.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tBe around others with
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">similar morals</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tShow
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">respect</span>
\t\t\t\t\t\t\t\tand
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">fairness</span>
\t\t\t\t\t\t\t\tto others.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tStop pleasing others;
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">serve the Diving</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tBe
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">consistent</span>
\t\t\t\t\t\t\t\tbetween what you think, say, and do.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
\t\t\t\t\t\t<button class=\"nav-link active\" id=\"nav-page-1-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-page-1\" type=\"button\" role=\"tab\" aria-controls=\"nav-page-1\" aria-selected=\"true\">Mindfulness-Based Techniques</button>
\t\t\t\t\t\t<button class=\"nav-link\" id=\"nav-page-2-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-page-2\" type=\"button\" role=\"tab\" aria-controls=\"nav-page-2\" aria-selected=\"false\">How to Build Integrity</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- .pages -->
\t\t\t</div>
\t\t\t<!-- .ms-5 -->
\t\t</div>
\t\t<!-- .x-container -->
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
        return "mindfulness/mindfulness-techniques.html.twig";
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
        return array (  105 => 9,  92 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ 'alex_seif'|trans }}
\t- Mindfulness-Based Techniques
{% endblock %}

{% block content %}
\t<section class=\"fullpage\">
\t\t<div class=\"x-container\">
\t\t\t<div class=\"ms-5\">
\t\t\t\t<div class=\"pages tab-content\" id=\"nav-tabContent\">
\t\t\t\t\t<div class=\"tab-pane fade show active page\" id=\"nav-page-1\" role=\"tabpanel\" aria-labelledby=\"nav-page-1-tab\" tabindex=\"0\">
\t\t\t\t\t\t<header class=\"mb-5 mt-5\">
\t\t\t\t\t\t\t<h2 class=\"fittext text-end\">Mindfulness-Based Techniques</h2>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<ul class='impressive'>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>Practicing mindfulness:</h3>
\t\t\t\t\t\t\t\tMeditation, deep breathing, or body scanning can help ground you in the present moment, reduce stress, and increase awareness of unhelpful thought patterns.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>Behavioral Activation:</h3>
\t\t\t\t\t\t\t\tSchedule and engage in activities that bring joy or a sense of accomplishment to combat depression and reinforce positive behavior changes.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>Journaling:</h3>
\t\t\t\t\t\t\t\tKeep a journal of emotions, triggers, and responses to track patterns and celebrate small victories.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>Self-Compassion Practices:</h3>
\t\t\t\t\t\t\t\tUse affirmations or guided self-compassion meditations to counteract harsh self-criticism.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>Exposure Therapy:</h3>
\t\t\t\t\t\t\t\tGradually expose yourself to feared situations or stimuli in a safe and controlled way to desensitize and change responses.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>Visualization:</h3>
\t\t\t\t\t\t\t\tImagine positive outcomes or mentally rehearse situations to reinforce healthier thought patterns.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>Problem-Solving Skills Training:</h3>
\t\t\t\t\t\t\t\tUse structured approaches to tackle challenges, like breaking problems into smaller steps and brainstorming solutions.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h3>Lifestyle Adjustments:</h3>
\t\t\t\t\t\t\t\tExercise, sleep hygiene, and nutrition improve mental health and make CBT more effective.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade page\" id=\"nav-page-2\" role=\"tabpanel\" aria-labelledby=\"nav-page-2-tab\" tabindex=\"0\">
\t\t\t\t\t\t<header class=\"mb-5 mt-5\">
\t\t\t\t\t\t\t<h2 class=\"fittext text-end\">How to Build Integrity</h2>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<ul class='impressive'>
\t\t\t\t\t\t\t<li>Commit yourself to
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">personal growth</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tStick to your word and
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">promises</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tBe
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">respectful</span>
\t\t\t\t\t\t\t\tand
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">reliable</span>
\t\t\t\t\t\t\t\tto others.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tBe authentically
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">vulnerable</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tBe a
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">role model</span>
\t\t\t\t\t\t\t\tto yourself and others.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tBe
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">transparent</span>
\t\t\t\t\t\t\t\twith your intentions.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tBe
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">gracious</span>/demonstrate
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">gratitude</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">Never be fake</span>
\t\t\t\t\t\t\t\tto yourself or others.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">Never make promises</span>
\t\t\t\t\t\t\t\tyou can't keep.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tBe
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">honest</span>
\t\t\t\t\t\t\t\tin your communications.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tAlways take full
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">accountability</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tAlways give your
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">best effort</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tHelp those in need; be
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">compassionate</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tLearn how to embody
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">patience</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tLearn to
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">be truthful</span>
\t\t\t\t\t\t\t\twith yourself.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tBe around others with
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">similar morals</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tShow
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">respect</span>
\t\t\t\t\t\t\t\tand
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">fairness</span>
\t\t\t\t\t\t\t\tto others.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tStop pleasing others;
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">serve the Diving</span>.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\tBe
\t\t\t\t\t\t\t\t<span class=\"text-decoration-underline\">consistent</span>
\t\t\t\t\t\t\t\tbetween what you think, say, and do.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
\t\t\t\t\t\t<button class=\"nav-link active\" id=\"nav-page-1-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-page-1\" type=\"button\" role=\"tab\" aria-controls=\"nav-page-1\" aria-selected=\"true\">Mindfulness-Based Techniques</button>
\t\t\t\t\t\t<button class=\"nav-link\" id=\"nav-page-2-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-page-2\" type=\"button\" role=\"tab\" aria-controls=\"nav-page-2\" aria-selected=\"false\">How to Build Integrity</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- .pages -->
\t\t\t</div>
\t\t\t<!-- .ms-5 -->
\t\t</div>
\t\t<!-- .x-container -->
\t</section>
{% endblock %}
", "mindfulness/mindfulness-techniques.html.twig", "/var/www/alexseif.com/templates/mindfulness/mindfulness-techniques.html.twig");
    }
}
