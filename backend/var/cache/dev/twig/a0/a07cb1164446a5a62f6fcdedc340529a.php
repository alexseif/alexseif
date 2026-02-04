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

/* components/_founder.twig */
class __TwigTemplate_3dbb3bbaf8b69e8fa9835e2441b07de8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_founder.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_founder.twig"));

        // line 1
        yield "<section class=\"py-24 px-6 relative overflow-hidden\">
\t<div class=\"absolute left-0 top-0 bottom-0 w-[30%] bg-gradient-to-r from-[#10B981]/10 to-transparent\"></div>
\t<div class=\"max-w-[1200px] mx-auto relative fade-in-scroll\">
\t\t<div class=\"grid lg:grid-cols-[45%_55%] gap-12 items-center\">
\t\t\t<div>
\t\t\t\t<img alt=\"Alex Seif\" class=\"w-full rounded-2xl border-2 border-[#0D9488]/20 shadow-lg\" src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/alex-portrait.webp"), "html", null, true);
        yield "\">

\t\t\t</div>
\t\t\t<div>
\t\t\t\t<div class=\"text-[#0D9488] text-sm font-semibold uppercase tracking-wider mb-4\">About Alex</div>
\t\t\t\t<h2 class=\"text-4xl font-bold text-[#1F2937] mb-8\">You'll be dealing with me directly.</h2>
\t\t\t\t<div class=\"space-y-6 text-lg text-[#1F2937] leading-relaxed\">
\t\t\t\t\t<p>I'm Alex. I've been building and maintaining websites for over 20 years.</p>
\t\t\t\t\t<p>Many of my clients stayed with me for years — not because of fancy tech, but because I show up, fix problems, and don't disappear.</p>
\t\t\t\t\t<p class=\"font-semibold\">Clinics need calm, reliable support — not experiments.</p>
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
        return "components/_founder.twig";
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
        return array (  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section class=\"py-24 px-6 relative overflow-hidden\">
\t<div class=\"absolute left-0 top-0 bottom-0 w-[30%] bg-gradient-to-r from-[#10B981]/10 to-transparent\"></div>
\t<div class=\"max-w-[1200px] mx-auto relative fade-in-scroll\">
\t\t<div class=\"grid lg:grid-cols-[45%_55%] gap-12 items-center\">
\t\t\t<div>
\t\t\t\t<img alt=\"Alex Seif\" class=\"w-full rounded-2xl border-2 border-[#0D9488]/20 shadow-lg\" src=\"{{ asset('build/images/alex-portrait.webp') }}\">

\t\t\t</div>
\t\t\t<div>
\t\t\t\t<div class=\"text-[#0D9488] text-sm font-semibold uppercase tracking-wider mb-4\">About Alex</div>
\t\t\t\t<h2 class=\"text-4xl font-bold text-[#1F2937] mb-8\">You'll be dealing with me directly.</h2>
\t\t\t\t<div class=\"space-y-6 text-lg text-[#1F2937] leading-relaxed\">
\t\t\t\t\t<p>I'm Alex. I've been building and maintaining websites for over 20 years.</p>
\t\t\t\t\t<p>Many of my clients stayed with me for years — not because of fancy tech, but because I show up, fix problems, and don't disappear.</p>
\t\t\t\t\t<p class=\"font-semibold\">Clinics need calm, reliable support — not experiments.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
", "components/_founder.twig", "/var/www/alexseif.com/templates/components/_founder.twig");
    }
}
