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

/* components/_services.twig */
class __TwigTemplate_f690ef0cda8963621e39861ddc672525 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_services.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_services.twig"));

        // line 1
        yield "<section class=\"py-24 px-6 bg-[#F0FDFA]\">
    <div class=\"max-w-[1200px] mx-auto fade-in-scroll\">
        <h2 class=\"text-[42px] font-bold text-[#1F2937] mb-12\">One responsible person for your clinic's website.</h2>
        <div class=\"grid lg:grid-cols-[60%_40%] gap-12 items-start\">
            <div>
                <p class=\"text-lg text-[#1F2937] leading-relaxed mb-12\">I don't just build websites and disappear. I take responsibility for keeping everything working — month after month.</p>
                <div class=\"grid md:grid-cols-2 gap-6\">
                    <div class=\"flex items-start gap-3\">
                        <div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
                            <i class=\"ri-check-line text-white text-sm\"></i>
                        </div>
                        <span class=\"text-base text-[#1F2937]\">Website monitoring</span>
                    </div>
                    <div class=\"flex items-start gap-3\">
                        <div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
                            <i class=\"ri-check-line text-white text-sm\"></i>
                        </div>
                        <span class=\"text-base text-[#1F2937]\">Fixing broken forms &amp; links</span>
                    </div>
                    <div class=\"flex items-start gap-3\">
                        <div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
                            <i class=\"ri-check-line text-white text-sm\"></i>
                        </div>
                        <span class=\"text-base text-[#1F2937]\">Security updates</span>
                    </div>
                    <div class=\"flex items-start gap-3\">
                        <div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
                            <i class=\"ri-check-line text-white text-sm\"></i>
                        </div>
                        <span class=\"text-base text-[#1F2937]\">Backups &amp; recovery</span>
                    </div>
                    <div class=\"flex items-start gap-3\">
                        <div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
                            <i class=\"ri-check-line text-white text-sm\"></i>
                        </div>
                        <span class=\"text-base text-[#1F2937]\">Minor content edits</span>
                    </div>
                    <div class=\"flex items-start gap-3\">
                        <div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
                            <i class=\"ri-check-line text-white text-sm\"></i>
                        </div>
                        <span class=\"text-base text-[#1F2937]\">Support during campaigns &amp; ads</span>
                    </div>
                </div>
            </div>
            <div class=\"bg-white rounded-2xl p-8 shadow-xl\">
                <div class=\"text-xs uppercase tracking-wider text-[#6B7280] mb-2\">Starting from</div>
                <div class=\"text-4xl font-bold text-[#0D9488] mb-2\">EGP 2,500<span class=\"text-xl text-[#6B7280] font-normal\">/month</span></div>
                <p class=\"text-sm text-[#6B7280] leading-relaxed\">Hosting billed separately if needed.</p>
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
        return "components/_services.twig";
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
        return new Source("<section class=\"py-24 px-6 bg-[#F0FDFA]\">
    <div class=\"max-w-[1200px] mx-auto fade-in-scroll\">
        <h2 class=\"text-[42px] font-bold text-[#1F2937] mb-12\">One responsible person for your clinic's website.</h2>
        <div class=\"grid lg:grid-cols-[60%_40%] gap-12 items-start\">
            <div>
                <p class=\"text-lg text-[#1F2937] leading-relaxed mb-12\">I don't just build websites and disappear. I take responsibility for keeping everything working — month after month.</p>
                <div class=\"grid md:grid-cols-2 gap-6\">
                    <div class=\"flex items-start gap-3\">
                        <div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
                            <i class=\"ri-check-line text-white text-sm\"></i>
                        </div>
                        <span class=\"text-base text-[#1F2937]\">Website monitoring</span>
                    </div>
                    <div class=\"flex items-start gap-3\">
                        <div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
                            <i class=\"ri-check-line text-white text-sm\"></i>
                        </div>
                        <span class=\"text-base text-[#1F2937]\">Fixing broken forms &amp; links</span>
                    </div>
                    <div class=\"flex items-start gap-3\">
                        <div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
                            <i class=\"ri-check-line text-white text-sm\"></i>
                        </div>
                        <span class=\"text-base text-[#1F2937]\">Security updates</span>
                    </div>
                    <div class=\"flex items-start gap-3\">
                        <div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
                            <i class=\"ri-check-line text-white text-sm\"></i>
                        </div>
                        <span class=\"text-base text-[#1F2937]\">Backups &amp; recovery</span>
                    </div>
                    <div class=\"flex items-start gap-3\">
                        <div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
                            <i class=\"ri-check-line text-white text-sm\"></i>
                        </div>
                        <span class=\"text-base text-[#1F2937]\">Minor content edits</span>
                    </div>
                    <div class=\"flex items-start gap-3\">
                        <div class=\"w-6 h-6 rounded-full bg-[#0D9488] flex items-center justify-center flex-shrink-0 mt-1\">
                            <i class=\"ri-check-line text-white text-sm\"></i>
                        </div>
                        <span class=\"text-base text-[#1F2937]\">Support during campaigns &amp; ads</span>
                    </div>
                </div>
            </div>
            <div class=\"bg-white rounded-2xl p-8 shadow-xl\">
                <div class=\"text-xs uppercase tracking-wider text-[#6B7280] mb-2\">Starting from</div>
                <div class=\"text-4xl font-bold text-[#0D9488] mb-2\">EGP 2,500<span class=\"text-xl text-[#6B7280] font-normal\">/month</span></div>
                <p class=\"text-sm text-[#6B7280] leading-relaxed\">Hosting billed separately if needed.</p>
            </div>
        </div>
    </div>
</section>
", "components/_services.twig", "/var/www/alexseif.com/templates/components/_services.twig");
    }
}
