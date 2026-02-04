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

/* default/merry-christmas.html.twig */
class __TwigTemplate_9efa8a62ffadb67966740827cda0b434 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'meta' => [$this, 'block_meta'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'announcements' => [$this, 'block_announcements'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "default/merry-christmas.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("merry_christmas_from"), "html", null, true);
        yield "
\t";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alex_seif"), "html", null, true);
        yield "
\t-
\t";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("web_developer")), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "\t<meta property=\"og:title\" content=\"Merry Christmas from Alex Seif!\">
\t<meta property=\"og:description\" content=\"May your Christmas be merry and your New Year bright!\">
\t<meta property=\"og:image\" content=\"https://alexseif.com/images/merry-christmas.png\">
\t<meta property=\"og:url\" content=\"https://alexseif.com/merry-christmas\">
\t<meta property=\"og:type\" content=\"website\">
\t<meta name=\"twitter:card\" content=\"summary_large_image\">
\t<meta name=\"twitter:title\" content=\"Merry Christmas from Alex Seif!\">
\t<meta name=\"twitter:description\" content=\"May your Christmas be merry and your New Year bright!\">
\t<meta name=\"twitter:image\" content=\"https://alexseif.com/images/merry-christmas.png\">
";
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "\t";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("merrychristmas");
        yield "

";
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "\t";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("merrychristmas");
        yield "
\t<script type=\"text/javascript\" src=\"https://platform-api.sharethis.com/js/sharethis.js#property=677bc0165e09d6001a1a134d&product=inline-share-buttons&source=platform\" async=\"async\"></script>
";
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "\t<div id=\"logo\">
\t\t<a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alx_home");
        yield "\" class=\"\" id=\"logo-div\">
\t\t\t<img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/ALX.png"), "html", null, true);
        yield "\" width=\"100\" height=\"100\" alt=\"Alex Seif logo\" class=\"img-fluid\"/>
\t\t</a>
\t</div>
\t<canvas></canvas>
\t<!-- <h1>hover over the purple stars..</h1> -->
\t<div class=\"christmas-card\">
\t\t<div>
\t\t\t<h1 class=\"title\">Merry Christmas<br/>
\t\t\t\tعيد ميلاد مجيد<br/>
\t\t\t\tՇնորհավոր Սուրբ Ծնունդ</h1>
\t\t\t";
        // line 42
        yield "\t\t\t<h3 class=\"name\">
\t\t\t\t<a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alx_home");
        yield "\" class=\"h3\">ALex Seif</a>
\t\t\t</h3>
\t\t</div>
\t</div>
\t<!-- ShareThis BEGIN -->
\t<div class=\"sharethis-inline-share-buttons\"></div>
\t<!-- ShareThis END -->
";
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_announcements(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/merry-christmas.html.twig";
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
        return array (  176 => 51,  163 => 43,  160 => 42,  147 => 31,  143 => 30,  140 => 29,  133 => 28,  124 => 24,  117 => 23,  108 => 20,  101 => 19,  87 => 9,  80 => 8,  73 => 6,  68 => 4,  63 => 3,  56 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/merry-christmas.html.twig", "/var/www/alexseif/templates/default/merry-christmas.html.twig");
    }
}
