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

/* landing_page/_faq.html.twig */
class __TwigTemplate_640ea7d16488bebf27229ae874df97b2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_faq.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/_faq.html.twig"));

        // line 1
        yield "<section id=\"faq\">
  <div class=\"container\">
    <header class=\"flow\">
      <h2>Frequently Asked Questions</h2>
      <p>If you’re unsure, just message me directly. But here’s what most people ask before we start:</p>
    </header>
    <div class=\"faq-grid\" itemscope itemtype=\"https://schema.org/FAQPage\">
      <div class=\"faq-item\" itemprop=\"mainEntity\" itemscope itemtype=\"https://schema.org/Question\">
        <h3 itemprop=\"name\">How long does it take to build a WordPress site?</h3>
        <div itemprop=\"acceptedAnswer\" itemscope itemtype=\"https://schema.org/Answer\">
          <p itemprop=\"text\">Most sites are delivered in 7–10 days. If it’s a store or custom theme, we’ll scope it together and set a clear timeline. No surprises.</p>
        </div>
      </div>

      <div class=\"faq-item\" itemprop=\"mainEntity\" itemscope itemtype=\"https://schema.org/Question\">
        <h3 itemprop=\"name\">Do you offer support after launch?</h3>
        <div itemprop=\"acceptedAnswer\" itemscope itemtype=\"https://schema.org/Answer\">
          <p itemprop=\"text\">Yes. Every project includes WhatsApp support for tweaks, fixes, and questions. You won’t be left hanging.</p>
        </div>
      </div>

      <div class=\"faq-item\" itemprop=\"mainEntity\" itemscope itemtype=\"https://schema.org/Question\">
        <h3 itemprop=\"name\">Can you optimize my existing WordPress site?</h3>
        <div itemprop=\"acceptedAnswer\" itemscope itemtype=\"https://schema.org/Answer\">
          <p itemprop=\"text\">Absolutely. I’ll clean up your layout, boost speed, and tune your SEO so your site feels fresh and performs better.</p>
        </div>
      </div>

      <div class=\"faq-item\" itemprop=\"mainEntity\" itemscope itemtype=\"https://schema.org/Question\">
        <h3 itemprop=\"name\">What if I don’t know what I need yet?</h3>
        <div itemprop=\"acceptedAnswer\" itemscope itemtype=\"https://schema.org/Answer\">
          <p itemprop=\"text\">No problem. Just message me. I’ll ask a few questions and help you figure out what fits best—whether it’s a quick fix or a full build.</p>
        </div>
      </div>

      <div class=\"faq-item\" itemprop=\"mainEntity\" itemscope itemtype=\"https://schema.org/Question\">
        <h3 itemprop=\"name\">Do you work with clinics, startups, or freelancers?</h3>
        <div itemprop=\"acceptedAnswer\" itemscope itemtype=\"https://schema.org/Answer\">
          <p itemprop=\"text\">Yes. I’ve built sites for clinics, creators, agencies, and solo founders. If you’ve got a dream and a domain, I’ll help you show up online.</p>
        </div>
      </div>
    </div>
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
        return "landing_page/_faq.html.twig";
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
        return new Source("<section id=\"faq\">
  <div class=\"container\">
    <header class=\"flow\">
      <h2>Frequently Asked Questions</h2>
      <p>If you’re unsure, just message me directly. But here’s what most people ask before we start:</p>
    </header>
    <div class=\"faq-grid\" itemscope itemtype=\"https://schema.org/FAQPage\">
      <div class=\"faq-item\" itemprop=\"mainEntity\" itemscope itemtype=\"https://schema.org/Question\">
        <h3 itemprop=\"name\">How long does it take to build a WordPress site?</h3>
        <div itemprop=\"acceptedAnswer\" itemscope itemtype=\"https://schema.org/Answer\">
          <p itemprop=\"text\">Most sites are delivered in 7–10 days. If it’s a store or custom theme, we’ll scope it together and set a clear timeline. No surprises.</p>
        </div>
      </div>

      <div class=\"faq-item\" itemprop=\"mainEntity\" itemscope itemtype=\"https://schema.org/Question\">
        <h3 itemprop=\"name\">Do you offer support after launch?</h3>
        <div itemprop=\"acceptedAnswer\" itemscope itemtype=\"https://schema.org/Answer\">
          <p itemprop=\"text\">Yes. Every project includes WhatsApp support for tweaks, fixes, and questions. You won’t be left hanging.</p>
        </div>
      </div>

      <div class=\"faq-item\" itemprop=\"mainEntity\" itemscope itemtype=\"https://schema.org/Question\">
        <h3 itemprop=\"name\">Can you optimize my existing WordPress site?</h3>
        <div itemprop=\"acceptedAnswer\" itemscope itemtype=\"https://schema.org/Answer\">
          <p itemprop=\"text\">Absolutely. I’ll clean up your layout, boost speed, and tune your SEO so your site feels fresh and performs better.</p>
        </div>
      </div>

      <div class=\"faq-item\" itemprop=\"mainEntity\" itemscope itemtype=\"https://schema.org/Question\">
        <h3 itemprop=\"name\">What if I don’t know what I need yet?</h3>
        <div itemprop=\"acceptedAnswer\" itemscope itemtype=\"https://schema.org/Answer\">
          <p itemprop=\"text\">No problem. Just message me. I’ll ask a few questions and help you figure out what fits best—whether it’s a quick fix or a full build.</p>
        </div>
      </div>

      <div class=\"faq-item\" itemprop=\"mainEntity\" itemscope itemtype=\"https://schema.org/Question\">
        <h3 itemprop=\"name\">Do you work with clinics, startups, or freelancers?</h3>
        <div itemprop=\"acceptedAnswer\" itemscope itemtype=\"https://schema.org/Answer\">
          <p itemprop=\"text\">Yes. I’ve built sites for clinics, creators, agencies, and solo founders. If you’ve got a dream and a domain, I’ll help you show up online.</p>
        </div>
      </div>
    </div>
  </div>
</section>
", "landing_page/_faq.html.twig", "/var/www/alexseif.com/templates/landing_page/_faq.html.twig");
    }
}
