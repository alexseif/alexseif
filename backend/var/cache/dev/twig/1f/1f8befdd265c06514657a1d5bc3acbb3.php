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

/* components/_website_build.twig */
class __TwigTemplate_7857ed20e5502567d82e24eb1e2c7aef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_website_build.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_website_build.twig"));

        // line 1
        yield "<section class=\"py-20 px-6 bg-[#F0FDFA]\">

\t<div class=\"max-w-[1200px] mx-auto fade-in-scroll\">
\t\t<div class=\"bg-white rounded-3xl shadow-lg overflow-hidden\">
\t\t\t<div class=\"grid lg:grid-cols-2\">
\t\t\t\t<div class=\"relative h-64 lg:h-auto\">
\t\t\t\t\t<img alt=\"Website Design\" class=\"w-full h-full object-cover\" src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/services-build.jpg"), "html", null, true);
        yield "\">
\t\t\t\t\t<div class=\"absolute inset-0 bg-gradient-to-r from-[#0D9488]/20 to-[#10B981]/20\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"p-12\">
\t\t\t\t\t<h2 class=\"text-3xl font-bold text-[#1F2937] mb-6\">Need a new website? We do that too — properly.</h2>
\t\t\t\t\t<p class=\"text-lg text-[#6B7280] leading-relaxed mb-8\">If your current website can't be fixed, I can build a clean, fast clinic website designed to turn visitors into real inquiries.</p>
\t\t\t\t\t<div class=\"space-y-4 pricing\">
\t\t\t\t\t\t<div class=\"flex items-center justify-between py-3 border-b border-gray-100\">
\t\t\t\t\t\t\t<span class=\"font-semibold text-[#1F2937]\">Web Vitals Diagnostic</span>
\t\t\t\t\t\t\t<span class=\"text-[#0D9488] font-bold\">EGP 9,000</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex items-center justify-between py-3 border-b border-gray-100\">
\t\t\t\t\t\t\t<span class=\"font-semibold text-[#1F2937]\">Clinic website build</span>
\t\t\t\t\t\t\t<span class=\"text-[#0D9488] font-bold\">
\t\t\t\t\t\t\t\t<small>from</small>
\t\t\t\t\t\t\t\tEGP 18,000</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-sm text-[#6B7280] mt-6\">50% upfront / 50% on delivery</p>
\t\t\t\t</div>
\t\t\t</div>
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
        return "components/_website_build.twig";
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
        return array (  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section class=\"py-20 px-6 bg-[#F0FDFA]\">

\t<div class=\"max-w-[1200px] mx-auto fade-in-scroll\">
\t\t<div class=\"bg-white rounded-3xl shadow-lg overflow-hidden\">
\t\t\t<div class=\"grid lg:grid-cols-2\">
\t\t\t\t<div class=\"relative h-64 lg:h-auto\">
\t\t\t\t\t<img alt=\"Website Design\" class=\"w-full h-full object-cover\" src=\"{{ asset('build/images/services-build.jpg') }}\">
\t\t\t\t\t<div class=\"absolute inset-0 bg-gradient-to-r from-[#0D9488]/20 to-[#10B981]/20\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"p-12\">
\t\t\t\t\t<h2 class=\"text-3xl font-bold text-[#1F2937] mb-6\">Need a new website? We do that too — properly.</h2>
\t\t\t\t\t<p class=\"text-lg text-[#6B7280] leading-relaxed mb-8\">If your current website can't be fixed, I can build a clean, fast clinic website designed to turn visitors into real inquiries.</p>
\t\t\t\t\t<div class=\"space-y-4 pricing\">
\t\t\t\t\t\t<div class=\"flex items-center justify-between py-3 border-b border-gray-100\">
\t\t\t\t\t\t\t<span class=\"font-semibold text-[#1F2937]\">Web Vitals Diagnostic</span>
\t\t\t\t\t\t\t<span class=\"text-[#0D9488] font-bold\">EGP 9,000</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex items-center justify-between py-3 border-b border-gray-100\">
\t\t\t\t\t\t\t<span class=\"font-semibold text-[#1F2937]\">Clinic website build</span>
\t\t\t\t\t\t\t<span class=\"text-[#0D9488] font-bold\">
\t\t\t\t\t\t\t\t<small>from</small>
\t\t\t\t\t\t\t\tEGP 18,000</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-sm text-[#6B7280] mt-6\">50% upfront / 50% on delivery</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
", "components/_website_build.twig", "/var/www/alexseif.com/templates/components/_website_build.twig");
    }
}
