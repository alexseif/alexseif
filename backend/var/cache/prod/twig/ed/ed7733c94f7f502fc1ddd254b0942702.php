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

/* default/_home.html.twig */
class __TwigTemplate_4a7d748a212f2c0d33d5141b359ae9d4 extends Template
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
        yield "<section class=\"fullpage intro clearfix\" id=\"home\">
\t<div class=\"x-container\" id=\"special-home-container\">
\t\t<header>
\t\t\t<h2 class=\"fittext\" id=\"my-title\">Freelance
\t\t\t\t<span>Web Developer</span>
\t\t\t\t";
        // line 7
        yield "\t\t\t\t<span>Copy Paster</span>
\t\t\t</h2>
\t\t</header>
\t\t<div class=\"bottom-section\" id=\"my-description\">
\t\t\t<div>
\t\t\t\tExpert in
\t\t\t\t";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("web_presence"), "html", null, true);
        yield ",
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ecommerce"), "html", null, true);
        yield "
\t\t\t\tSolutions,
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("travel_technology"), "html", null, true);
        yield "
\t\t\t\tInnovations,
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ngo"), "html", null, true);
        yield "
\t\t\t\tProjects,
\t\t\t</div>
\t\t\t<div>
\t\t\t\teLearning Platforms,
\t\t\t</div>
\t\t\t<div>
\t\t\t\teGovernment Services
\t\t\t</div>
\t\t\t<br/>
\t\t\t<a class='button start-project button_slide slide_right' href=\"https://wa.me/+201004006332\" target=\"_blank\">Start Your Project</a>
\t\t</div>
\t\t<!-- .bottom-section -->
\t</div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/_home.html.twig";
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
        return array (  77 => 24,  70 => 20,  63 => 16,  57 => 13,  49 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/_home.html.twig", "/var/www/alexseif/templates/default/_home.html.twig");
    }
}
