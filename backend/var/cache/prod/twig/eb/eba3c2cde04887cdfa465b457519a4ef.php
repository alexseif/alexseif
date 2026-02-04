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

/* default/_about.html.twig */
class __TwigTemplate_8f765654dcd7258979422d0ab4661d83 extends Template
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
        // line 1
        yield "<section class=\"fullpage slide\" id=\"about\">
    <div class=\"container\">
        <div class=\"d-flex flex-column flex-md-row mb-5 fs-4 align-items-end\" id=\"intro\">
            <div class=\"image-wrapper\">
                <img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/2023-06-22.jpg"), "html", null, true);
        yield "\" alt=\"Alex Seif, freelance web developer\" width=\"600\">
            </div>
            <div class=\"ps-5 bg-opacity-75 bg-black p-2 p-md-5\">
                <h1 class=\"fw-bold\">Freelance Web Developer</h1>
                <p class=\"text-start\">
                    Hi, I'm
                    <span class=\"fw-bold\">Alex Seif</span>, a passionate freelance web developer based in Cairo, Egypt. With over
                    <span class=\"h3\">20 years</span>
                    of experience, I've been dedicated to crafting exceptional online experiences for governments, businesses & individuals around the world.
                </p>
            </div>
        </div>
        <div class=\"d-flex flex-column flex-md-row gap-5 justify-content-star p-2 p-md-5\" id=\"number-boxes\">
            <div>
                <span class=\"fs-1 fw-bold\">20 Years</span>
                <p>
                WOW, 20 years! I'm grateful for all the creativity & impact I've witnessed. Working with amazing clients. Ready for more adventure.
                </p>
            </div>
            <div class=\"\">
                <span class=\"fs-1 fw-bold\">+42,000 Hrs</span>
                <p>With a dedication to every project, I've logged over
                    <span class=\"bold\">42,000</span>
                    hours,
                    ensuring each line of code contributes to the success of the final product.</p>
            </div>
            <div class=\"\">
                <span class=\"fs-1\">+400 Projects</span>
                <p>Worked on over
                    <span class=\"bold\">400</span>
                    projects with 100s of clients, my work has reached
                    over 250M+ Users & devices from diverse business sizes, markets & industries.</p>
            </div>
        </div>
        <hr/>
    </div>
</section>
<section class=\"fullpage\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"bigtext fw-bold mb-5\">Providing Value Through Digital Experiences</h2>
            </div>
            <div class=\"col-md-4 col\">
                <h3>My values</h3>
                <p class=\"fs-5 text-md-justify lh-md-lg\">
                    I pride myself on
                    <strong>building long-term relationships</strong>
                    with my clients, effectively communicating their value through their websites, and enhancing their connection with their audience.
                </p>
                <p class=\"fs-5 text-md-justify lh-md-lg\">
                    As a PHP freelance developer, I specialize in delivering tailored web
                    <strong>solutions that drive success</strong>. 🚀 My expertise in fullstack development ensures robust, scalable, and user-friendly applications.
                </p>
                <p class=\"fs-5 text-md-justify lh-md-lg\">
                    <strong>Attention to detail</strong>
                    ensures that each project not only meets but exceeds client expectations. Whether you need custom web development, consultation, seamless integration, or ongoing support, I'm here to turn your vision into reality. 💡
                </p>
            </div>
        </div>
        <!-- .row -->
        <hr/>
    </div>
    <!-- .x-container -->
</section>
<section>
    <div class=\"container\">
        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aboutSections"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 73
            yield "            <div class=\"row row-cols-md-2 row-cols-1\">
                <div class=\"col p-2 p-md-5\">
                    <h2 class=\"fw-bold\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["section"], "title", [], "any", false, false, false, 75), "html", null, true);
            yield "</h2>
                    <p class=\"fs-5\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["section"], "description", [], "any", false, false, false, 76), "html", null, true);
            yield "</p>
                </div>
                <div class=\"col bg-black bg-opacity-25 p-2 p-md-5 ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::cycle(["", "order-last order-md-first"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 78)), "html", null, true);
            yield "\">
                    <div class=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::cycle(["fs-1", "fs-1", "fs-5", "fs-4"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 79)), "html", null, true);
            yield "\">
                        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["section"], "tags", [], "any", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
                // line 81
                yield "                            <span class=\"badge text-wrap\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["region"], "html", null, true);
                yield "</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['region'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "                    </div>
                </div>
            </div>
            <hr/>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "    </div>
    <!-- .x-container -->
</section>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/_about.html.twig";
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
        return array (  187 => 88,  169 => 83,  160 => 81,  156 => 80,  152 => 79,  148 => 78,  143 => 76,  139 => 75,  135 => 73,  118 => 72,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/_about.html.twig", "/var/www/alexseif/templates/default/_about.html.twig");
    }
}
