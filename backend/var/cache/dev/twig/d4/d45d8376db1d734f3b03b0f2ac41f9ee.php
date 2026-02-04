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

/* components/_problems.twig */
class __TwigTemplate_9424130096049f627ca232992c591360 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_problems.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_problems.twig"));

        // line 1
        yield "<section class=\"py-24 px-6\">
    <div class=\"max-w-[900px] mx-auto fade-in-scroll\">
        <h2 class=\"text-4xl font-semibold text-[#1F2937] text-center mb-4\">Most clinic websites lose patients quietly.</h2>
        <div class=\"w-16 h-1 bg-[#0D9488] mx-auto mb-12\"></div>
        <div class=\"grid md:grid-cols-2 gap-6 mb-12\">
            <div class=\"bg-white p-6 rounded-xl border-l-4 border-[#0D9488] shadow-sm hover:shadow-md transition-shadow duration-300\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0 mt-1\">
                        <i class=\"ri-close-line text-red-600 text-lg\"></i>
                    </div>
                    <p class=\"text-[#1F2937] text-base leading-relaxed\">Contact forms stop working without anyone noticing</p>
                </div>
            </div>
            <div class=\"bg-white p-6 rounded-xl border-l-4 border-[#0D9488] shadow-sm hover:shadow-md transition-shadow duration-300\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0 mt-1\">
                        <i class=\"ri-close-line text-red-600 text-lg\"></i>
                    </div>
                    <p class=\"text-[#1F2937] text-base leading-relaxed\">WhatsApp buttons don't lead anywhere</p>
                </div>
            </div>
            <div class=\"bg-white p-6 rounded-xl border-l-4 border-[#0D9488] shadow-sm hover:shadow-md transition-shadow duration-300\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0 mt-1\">
                        <i class=\"ri-close-line text-red-600 text-lg\"></i>
                    </div>
                    <p class=\"text-[#1F2937] text-base leading-relaxed\">Website is slow on mobile</p>
                </div>
            </div>
            <div class=\"bg-white p-6 rounded-xl border-l-4 border-[#0D9488] shadow-sm hover:shadow-md transition-shadow duration-300\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0 mt-1\">
                        <i class=\"ri-close-line text-red-600 text-lg\"></i>
                    </div>
                    <p class=\"text-[#1F2937] text-base leading-relaxed\">Ads are running, but bookings are unclear</p>
                </div>
            </div>
            <div class=\"bg-white p-6 rounded-xl border-l-4 border-[#0D9488] shadow-sm hover:shadow-md transition-shadow duration-300 md:col-span-2 md:max-w-md md:mx-auto\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0 mt-1\">
                        <i class=\"ri-close-line text-red-600 text-lg\"></i>
                    </div>
                    <p class=\"text-[#1F2937] text-base leading-relaxed\">The last developer disappeared</p>
                </div>
            </div>
        </div>
        <p class=\"text-xl text-[#10B981] text-center italic font-medium\">This is common. It's not your fault.</p>
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
        return "components/_problems.twig";
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
        return new Source("<section class=\"py-24 px-6\">
    <div class=\"max-w-[900px] mx-auto fade-in-scroll\">
        <h2 class=\"text-4xl font-semibold text-[#1F2937] text-center mb-4\">Most clinic websites lose patients quietly.</h2>
        <div class=\"w-16 h-1 bg-[#0D9488] mx-auto mb-12\"></div>
        <div class=\"grid md:grid-cols-2 gap-6 mb-12\">
            <div class=\"bg-white p-6 rounded-xl border-l-4 border-[#0D9488] shadow-sm hover:shadow-md transition-shadow duration-300\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0 mt-1\">
                        <i class=\"ri-close-line text-red-600 text-lg\"></i>
                    </div>
                    <p class=\"text-[#1F2937] text-base leading-relaxed\">Contact forms stop working without anyone noticing</p>
                </div>
            </div>
            <div class=\"bg-white p-6 rounded-xl border-l-4 border-[#0D9488] shadow-sm hover:shadow-md transition-shadow duration-300\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0 mt-1\">
                        <i class=\"ri-close-line text-red-600 text-lg\"></i>
                    </div>
                    <p class=\"text-[#1F2937] text-base leading-relaxed\">WhatsApp buttons don't lead anywhere</p>
                </div>
            </div>
            <div class=\"bg-white p-6 rounded-xl border-l-4 border-[#0D9488] shadow-sm hover:shadow-md transition-shadow duration-300\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0 mt-1\">
                        <i class=\"ri-close-line text-red-600 text-lg\"></i>
                    </div>
                    <p class=\"text-[#1F2937] text-base leading-relaxed\">Website is slow on mobile</p>
                </div>
            </div>
            <div class=\"bg-white p-6 rounded-xl border-l-4 border-[#0D9488] shadow-sm hover:shadow-md transition-shadow duration-300\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0 mt-1\">
                        <i class=\"ri-close-line text-red-600 text-lg\"></i>
                    </div>
                    <p class=\"text-[#1F2937] text-base leading-relaxed\">Ads are running, but bookings are unclear</p>
                </div>
            </div>
            <div class=\"bg-white p-6 rounded-xl border-l-4 border-[#0D9488] shadow-sm hover:shadow-md transition-shadow duration-300 md:col-span-2 md:max-w-md md:mx-auto\">
                <div class=\"flex items-start gap-4\">
                    <div class=\"w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0 mt-1\">
                        <i class=\"ri-close-line text-red-600 text-lg\"></i>
                    </div>
                    <p class=\"text-[#1F2937] text-base leading-relaxed\">The last developer disappeared</p>
                </div>
            </div>
        </div>
        <p class=\"text-xl text-[#10B981] text-center italic font-medium\">This is common. It's not your fault.</p>
    </div>
</section>
", "components/_problems.twig", "/var/www/alexseif.com/templates/components/_problems.twig");
    }
}
