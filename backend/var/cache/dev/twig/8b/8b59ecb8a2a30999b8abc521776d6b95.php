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

/* components/_faq.twig */
class __TwigTemplate_2fbc76e8bf6741a5dad90ea49d54fffc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_faq.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_faq.twig"));

        // line 1
        yield "<section class=\"py-24 px-6 bg-white\">
    <div class=\"max-w-[900px] mx-auto fade-in-scroll\">
        <h2 class=\"text-4xl font-bold text-[#1F2937] text-center mb-12\">Frequently Asked Questions</h2>
        <div class=\"space-y-6\">
            <div class=\"bg-[#F0FDFA] rounded-xl p-6 border-l-4 border-[#0D9488]\">
                <h3 class=\"text-xl font-semibold text-[#1F2937] mb-3\">What is included in Website Care for Clinics?</h3>
                <p class=\"text-[#6B7280] leading-relaxed\">Website monitoring, fixing broken forms and links, security updates, backups and recovery, minor content edits, and support during campaigns and ads.</p>
            </div>
            <div class=\"bg-[#F0FDFA] rounded-xl p-6 border-l-4 border-[#0D9488]\">
                <h3 class=\"text-xl font-semibold text-[#1F2937] mb-3\">How much is Website Care?</h3>
                <p class=\"text-[#6B7280] leading-relaxed\">Website Care starts from EGP 2,500 per month. Hosting is billed separately if needed.</p>
            </div>
            <div class=\"bg-[#F0FDFA] rounded-xl p-6 border-l-4 border-[#0D9488]\">
                <h3 class=\"text-xl font-semibold text-[#1F2937] mb-3\">Do you build new clinic websites?</h3>
                <p class=\"text-[#6B7280] leading-relaxed\">Yes. If your current website can't be fixed, I can build a clean, fast clinic website designed to turn visitors into real inquiries. Assessments start at EGP 9,000 and builds from EGP 18,000.</p>
            </div>
            <div class=\"bg-[#F0FDFA] rounded-xl p-6 border-l-4 border-[#0D9488]\">
                <h3 class=\"text-xl font-semibold text-[#1F2937] mb-3\">Who will I be dealing with?</h3>
                <p class=\"text-[#6B7280] leading-relaxed\">You deal directly with me, Alex. I've been building and maintaining websites for over 20 years and stay responsible for keeping things working.</p>
            </div>
            <div class=\"bg-[#F0FDFA] rounded-xl p-6 border-l-4 border-[#0D9488]\">
                <h3 class=\"text-xl font-semibold text-[#1F2937] mb-3\">Is there any commitment to start?</h3>
                <p class=\"text-[#6B7280] leading-relaxed\">No. Start with a short clinic intake. I'll review your situation and tell you honestly what makes sense—no obligation or hard selling.</p>
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
        return "components/_faq.twig";
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
        return new Source("<section class=\"py-24 px-6 bg-white\">
    <div class=\"max-w-[900px] mx-auto fade-in-scroll\">
        <h2 class=\"text-4xl font-bold text-[#1F2937] text-center mb-12\">Frequently Asked Questions</h2>
        <div class=\"space-y-6\">
            <div class=\"bg-[#F0FDFA] rounded-xl p-6 border-l-4 border-[#0D9488]\">
                <h3 class=\"text-xl font-semibold text-[#1F2937] mb-3\">What is included in Website Care for Clinics?</h3>
                <p class=\"text-[#6B7280] leading-relaxed\">Website monitoring, fixing broken forms and links, security updates, backups and recovery, minor content edits, and support during campaigns and ads.</p>
            </div>
            <div class=\"bg-[#F0FDFA] rounded-xl p-6 border-l-4 border-[#0D9488]\">
                <h3 class=\"text-xl font-semibold text-[#1F2937] mb-3\">How much is Website Care?</h3>
                <p class=\"text-[#6B7280] leading-relaxed\">Website Care starts from EGP 2,500 per month. Hosting is billed separately if needed.</p>
            </div>
            <div class=\"bg-[#F0FDFA] rounded-xl p-6 border-l-4 border-[#0D9488]\">
                <h3 class=\"text-xl font-semibold text-[#1F2937] mb-3\">Do you build new clinic websites?</h3>
                <p class=\"text-[#6B7280] leading-relaxed\">Yes. If your current website can't be fixed, I can build a clean, fast clinic website designed to turn visitors into real inquiries. Assessments start at EGP 9,000 and builds from EGP 18,000.</p>
            </div>
            <div class=\"bg-[#F0FDFA] rounded-xl p-6 border-l-4 border-[#0D9488]\">
                <h3 class=\"text-xl font-semibold text-[#1F2937] mb-3\">Who will I be dealing with?</h3>
                <p class=\"text-[#6B7280] leading-relaxed\">You deal directly with me, Alex. I've been building and maintaining websites for over 20 years and stay responsible for keeping things working.</p>
            </div>
            <div class=\"bg-[#F0FDFA] rounded-xl p-6 border-l-4 border-[#0D9488]\">
                <h3 class=\"text-xl font-semibold text-[#1F2937] mb-3\">Is there any commitment to start?</h3>
                <p class=\"text-[#6B7280] leading-relaxed\">No. Start with a short clinic intake. I'll review your situation and tell you honestly what makes sense—no obligation or hard selling.</p>
            </div>
        </div>
    </div>
</section>

", "components/_faq.twig", "/var/www/alexseif.com/templates/components/_faq.twig");
    }
}
