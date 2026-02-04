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

/* components/_cta.twig */
class __TwigTemplate_890c30e2a2b212e99edd0548303862f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_cta.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_cta.twig"));

        // line 1
        yield "<section id=\"intake\" class=\"py-28 px-6 bg-gradient-to-b from-white to-[#F0FDFA]\">
    <div class=\"max-w-[700px] mx-auto text-center fade-in-scroll\">
        <h2 class=\"text-4xl font-bold text-[#1F2937] mb-6\">Not sure what you need yet?</h2>
        <p class=\"text-xl text-[#6B7280] leading-relaxed mb-12 max-w-[600px] mx-auto\">Start with a short clinic intake. I'll review your situation and tell you honestly what makes sense.</p>
        
        <form id=\"clinic-intake-form\" class=\"bg-white rounded-2xl p-8 shadow-xl max-w-md mx-auto mb-8 text-left\">
            <div class=\"space-y-4\">
                <div>
                    <label for=\"name\" class=\"block text-sm font-medium text-[#1F2937] mb-2\">Your Name *</label>
                    <input id=\"name\" required=\"\" class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0D9488] text-sm\" placeholder=\"Dr. Ahmed Hassan\" type=\"text\" name=\"name\">
                </div>
                <div>
                    <label for=\"clinic\" class=\"block text-sm font-medium text-[#1F2937] mb-2\">Clinic Name *</label>
                    <input id=\"clinic\" required=\"\" class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0D9488] text-sm\" placeholder=\"Cairo Dental Clinic\" type=\"text\" name=\"clinic\">
                </div>
                <div>
                    <label for=\"email\" class=\"block text-sm font-medium text-[#1F2937] mb-2\">Email *</label>
                    <input id=\"email\" required=\"\" class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0D9488] text-sm\" placeholder=\"doctor@clinic.com\" type=\"email\" name=\"email\">
                </div>
                <div>
                    <label for=\"phone\" class=\"block text-sm font-medium text-[#1F2937] mb-2\">Phone / WhatsApp *</label>
                    <input id=\"phone\" required=\"\" class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0D9488] text-sm\" placeholder=\"+20 100 123 4567\" type=\"tel\" name=\"phone\">
                </div>
                <div>
                    <label for=\"website\" class=\"block text-sm font-medium text-[#1F2937] mb-2\">Current Website (if any)</label>
                    <input id=\"website\" class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0D9488] text-sm\" placeholder=\"https://yourwebsite.com\" type=\"url\" name=\"website\">
                </div>
                <div>
                    <label for=\"message\" class=\"block text-sm font-medium text-[#1F2937] mb-2\">What's your main concern?</label>
                    <textarea id=\"message\" name=\"message\" rows=\"3\" maxlength=\"500\" class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0D9488] text-sm resize-none\" placeholder=\"Tell me briefly what's not working...\"></textarea>
                    <p class=\"text-xs text-[#6B7280] mt-1\">Maximum 500 characters</p>
                </div>
                <button type=\"submit\" class=\"w-full bg-[#0D9488] text-white py-4 rounded-full text-lg font-semibold hover:bg-[#0f766e] transition-all duration-200 hover:-translate-y-0.5 shadow-lg hover:shadow-xl whitespace-nowrap cursor-pointer flex items-center justify-center gap-2\">Start Clinic Intake<i class=\"ri-arrow-right-line\"></i></button>
            </div>
            
            <div id=\"success-message\" class=\"hidden mt-4 p-4 bg-[#10B981]/10 border border-[#10B981] rounded-lg\">
                <p class=\"text-[#10B981] text-sm font-medium text-center\">Thank you! I'll review your information and get back to you soon.</p>
            </div>
        </form>
        
        <div class=\"space-y-2 text-sm text-[#6B7280]\">
            <p>No obligation.</p>
            <p>No hard selling.</p>
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
        return "components/_cta.twig";
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
        return new Source("<section id=\"intake\" class=\"py-28 px-6 bg-gradient-to-b from-white to-[#F0FDFA]\">
    <div class=\"max-w-[700px] mx-auto text-center fade-in-scroll\">
        <h2 class=\"text-4xl font-bold text-[#1F2937] mb-6\">Not sure what you need yet?</h2>
        <p class=\"text-xl text-[#6B7280] leading-relaxed mb-12 max-w-[600px] mx-auto\">Start with a short clinic intake. I'll review your situation and tell you honestly what makes sense.</p>
        
        <form id=\"clinic-intake-form\" class=\"bg-white rounded-2xl p-8 shadow-xl max-w-md mx-auto mb-8 text-left\">
            <div class=\"space-y-4\">
                <div>
                    <label for=\"name\" class=\"block text-sm font-medium text-[#1F2937] mb-2\">Your Name *</label>
                    <input id=\"name\" required=\"\" class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0D9488] text-sm\" placeholder=\"Dr. Ahmed Hassan\" type=\"text\" name=\"name\">
                </div>
                <div>
                    <label for=\"clinic\" class=\"block text-sm font-medium text-[#1F2937] mb-2\">Clinic Name *</label>
                    <input id=\"clinic\" required=\"\" class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0D9488] text-sm\" placeholder=\"Cairo Dental Clinic\" type=\"text\" name=\"clinic\">
                </div>
                <div>
                    <label for=\"email\" class=\"block text-sm font-medium text-[#1F2937] mb-2\">Email *</label>
                    <input id=\"email\" required=\"\" class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0D9488] text-sm\" placeholder=\"doctor@clinic.com\" type=\"email\" name=\"email\">
                </div>
                <div>
                    <label for=\"phone\" class=\"block text-sm font-medium text-[#1F2937] mb-2\">Phone / WhatsApp *</label>
                    <input id=\"phone\" required=\"\" class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0D9488] text-sm\" placeholder=\"+20 100 123 4567\" type=\"tel\" name=\"phone\">
                </div>
                <div>
                    <label for=\"website\" class=\"block text-sm font-medium text-[#1F2937] mb-2\">Current Website (if any)</label>
                    <input id=\"website\" class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0D9488] text-sm\" placeholder=\"https://yourwebsite.com\" type=\"url\" name=\"website\">
                </div>
                <div>
                    <label for=\"message\" class=\"block text-sm font-medium text-[#1F2937] mb-2\">What's your main concern?</label>
                    <textarea id=\"message\" name=\"message\" rows=\"3\" maxlength=\"500\" class=\"w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0D9488] text-sm resize-none\" placeholder=\"Tell me briefly what's not working...\"></textarea>
                    <p class=\"text-xs text-[#6B7280] mt-1\">Maximum 500 characters</p>
                </div>
                <button type=\"submit\" class=\"w-full bg-[#0D9488] text-white py-4 rounded-full text-lg font-semibold hover:bg-[#0f766e] transition-all duration-200 hover:-translate-y-0.5 shadow-lg hover:shadow-xl whitespace-nowrap cursor-pointer flex items-center justify-center gap-2\">Start Clinic Intake<i class=\"ri-arrow-right-line\"></i></button>
            </div>
            
            <div id=\"success-message\" class=\"hidden mt-4 p-4 bg-[#10B981]/10 border border-[#10B981] rounded-lg\">
                <p class=\"text-[#10B981] text-sm font-medium text-center\">Thank you! I'll review your information and get back to you soon.</p>
            </div>
        </form>
        
        <div class=\"space-y-2 text-sm text-[#6B7280]\">
            <p>No obligation.</p>
            <p>No hard selling.</p>
        </div>
    </div>
</section>
", "components/_cta.twig", "/var/www/alexseif.com/templates/components/_cta.twig");
    }
}
