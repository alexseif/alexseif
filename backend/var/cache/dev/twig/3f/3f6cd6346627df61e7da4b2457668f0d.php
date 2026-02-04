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

/* components/_hero.twig */
class __TwigTemplate_b31fe6a883da41a5da50e1b9ec3bf7c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_hero.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_hero.twig"));

        // line 1
        yield "<section class=\"pt-32 pb-24 px-6\">
    <div class=\"max-w-[1280px] mx-auto\">
        <div class=\"grid lg:grid-cols-[55%_45%] gap-12 items-center\">
            <div class=\"fade-in-scroll\">
                <div class=\"text-[#0D9488] text-sm font-semibold uppercase tracking-wider mb-6\">For Clinic Owners</div>
                <h1 class=\"text-5xl lg:text-[52px] font-bold text-[#1F2937] leading-tight mb-6\">
                    Reliable Websites &amp; Systems for Clinics <span class=\"text-[#0D9488]\">So You Don't Miss Patients</span>
                </h1>
                <p class=\"text-xl text-[#6B7280] leading-relaxed mb-12 max-w-[520px]\">
                    I help clinics keep their websites fast, secure, and working — especially when ads and WhatsApp are bringing real inquiries.
                </p>
                <div class=\"space-y-4\">
                    <div class=\"flex flex-wrap gap-4 items-center\">
                        <a href=\"#intake\" class=\"inline-block bg-[#0D9488] text-white px-12 py-4 rounded-full text-lg font-semibold hover:bg-[#0f766e] transition-all duration-200 hover:-translate-y-0.5 shadow-lg hover:shadow-xl whitespace-nowrap cursor-pointer\">Start Clinic Intake</a>
                        <a href=\"#intake\" class=\"inline-block bg-[#0D9488] text-white px-12 py-4 rounded-full text-lg font-semibold hover:bg-[#0f766e] transition-all duration-200 hover:-translate-y-0.5 shadow-lg hover:shadow-xl whitespace-nowrap cursor-pointer\">Start Diagnostic – 9,000 EGP</a>
                    </div>
                    <p class=\"text-sm text-[#6B7280] flex items-center gap-2\">
                        <i class=\"ri-check-line text-[#10B981]\"></i>No commitment. I'll review your situation first.
                    </p>
                </div>
            </div>
            <div class=\"fade-in-scroll relative\">
                <div class=\"relative rounded-3xl overflow-hidden\">
                    <img alt=\"Alex Seif - Your Technical Partner\" class=\"w-full h-auto object-cover\" src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/hero-alex.jpg"), "html", null, true);
        yield "\">
                    <div class=\"absolute inset-0 bg-gradient-to-t from-[#0D9488]/10 to-transparent\"></div>
                    <div class=\"absolute top-6 right-6 bg-white border-2 border-[#0D9488] rounded-full px-6 py-3 font-semibold text-[#0D9488] shadow-lg\">20+ Years</div>
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
        return "components/_hero.twig";
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
        return array (  73 => 24,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section class=\"pt-32 pb-24 px-6\">
    <div class=\"max-w-[1280px] mx-auto\">
        <div class=\"grid lg:grid-cols-[55%_45%] gap-12 items-center\">
            <div class=\"fade-in-scroll\">
                <div class=\"text-[#0D9488] text-sm font-semibold uppercase tracking-wider mb-6\">For Clinic Owners</div>
                <h1 class=\"text-5xl lg:text-[52px] font-bold text-[#1F2937] leading-tight mb-6\">
                    Reliable Websites &amp; Systems for Clinics <span class=\"text-[#0D9488]\">So You Don't Miss Patients</span>
                </h1>
                <p class=\"text-xl text-[#6B7280] leading-relaxed mb-12 max-w-[520px]\">
                    I help clinics keep their websites fast, secure, and working — especially when ads and WhatsApp are bringing real inquiries.
                </p>
                <div class=\"space-y-4\">
                    <div class=\"flex flex-wrap gap-4 items-center\">
                        <a href=\"#intake\" class=\"inline-block bg-[#0D9488] text-white px-12 py-4 rounded-full text-lg font-semibold hover:bg-[#0f766e] transition-all duration-200 hover:-translate-y-0.5 shadow-lg hover:shadow-xl whitespace-nowrap cursor-pointer\">Start Clinic Intake</a>
                        <a href=\"#intake\" class=\"inline-block bg-[#0D9488] text-white px-12 py-4 rounded-full text-lg font-semibold hover:bg-[#0f766e] transition-all duration-200 hover:-translate-y-0.5 shadow-lg hover:shadow-xl whitespace-nowrap cursor-pointer\">Start Diagnostic – 9,000 EGP</a>
                    </div>
                    <p class=\"text-sm text-[#6B7280] flex items-center gap-2\">
                        <i class=\"ri-check-line text-[#10B981]\"></i>No commitment. I'll review your situation first.
                    </p>
                </div>
            </div>
            <div class=\"fade-in-scroll relative\">
                <div class=\"relative rounded-3xl overflow-hidden\">
                    <img alt=\"Alex Seif - Your Technical Partner\" class=\"w-full h-auto object-cover\" src=\"{{ asset('build/images/hero-alex.jpg') }}\">
                    <div class=\"absolute inset-0 bg-gradient-to-t from-[#0D9488]/10 to-transparent\"></div>
                    <div class=\"absolute top-6 right-6 bg-white border-2 border-[#0D9488] rounded-full px-6 py-3 font-semibold text-[#0D9488] shadow-lg\">20+ Years</div>
                </div>
            </div>
        </div>
    </div>
</section>
", "components/_hero.twig", "/var/www/alexseif.com/templates/components/_hero.twig");
    }
}
