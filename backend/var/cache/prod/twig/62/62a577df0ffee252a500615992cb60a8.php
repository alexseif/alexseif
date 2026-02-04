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

/* base.html.twig */
class __TwigTemplate_5a6d9ab99064a78a8e9f9b35120caeaf extends Template
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
            'meta' => [$this, 'block_meta'],
            'title' => [$this, 'block_title'],
            'structured_data' => [$this, 'block_structured_data'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'nav' => [$this, 'block_nav'],
            'sitewrapper' => [$this, 'block_sitewrapper'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html class='full' lang=\"en\" xml:lang=\"en\" data-bs-theme=\"dark\">
\t<head
\t\tprefix=\"og: https://ogp.me/ns#\">
\t\t<!-- Google tag (gtag.js) -->
\t\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-QV4S3QWW7F\"></script>
\t\t<script>
\t\t\twindow.dataLayer = window.dataLayer || [];
function gtag() {
dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-QV4S3QWW7F');
\t\t</script>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\">
\t\t";
        // line 19
        yield from $this->unwrap()->yieldBlock('meta', $context, $blocks);
        // line 35
        yield "\t\t<title>
\t\t\t";
        // line 36
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 39
        yield "\t\t</title>
\t\t";
        // line 40
        yield from $this->unwrap()->yieldBlock('structured_data', $context, $blocks);
        // line 45
        yield "\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "\"/>
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "\"/>
\t\t";
        // line 47
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 51
        yield "
\t\t";
        // line 52
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 55
        yield "\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js\"></script>
\t</head>
\t<body>
\t\t";
        // line 58
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 76
        yield "
\t\t<!-- Messenger Chat Plugin Code -->
\t\t<div id=\"fb-root\"></div>

\t\t<!-- Your Chat Plugin code -->
\t\t<div id=\"fb-customer-chat\" class=\"fb-customerchat\"></div>

\t\t";
        // line 83
        if (("prod" == CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "environment", [], "any", false, false, false, 83))) {
            // line 84
            yield "\t\t\t<script>
\t\t\t\tvar chatbox = document.getElementById('fb-customer-chat');
chatbox.setAttribute(\"page_id\", \"268403033331219\");
chatbox.setAttribute(\"attribution\", \"biz_inbox\");
window.fbAsyncInit = function () {
FB.init({xfbml: true, version: 'v10.0'});
};

(function (d, s, id) {
var js,
fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) 
return;



js = d.createElement(s);
js.id = id;
js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
\t\t\t</script>
\t\t";
        }
        // line 107
        yield "\t</body>
</html>
";
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "\t\t\t<meta property=\"og:title\" content=\"Alex Seif\">
\t\t\t<meta property=\"og:url\" content=\"https://alexseif.com\">
\t\t\t<meta property=\"og:image\" content=\"https://alexseif.com/images/alex-seif-business-card.png\">
\t\t\t<meta property=\"og:site_name\" content=\"Alex Seif\">
\t\t\t<meta property=\"og:description\" content=\"Freelance Web Developer | 20 Years of Delivering Excellence.\">
\t\t\t<meta property=\"og:type\" content=\"website\">
\t\t\t<meta name=\"twitter:card\" content=\"summary_large_image\">
\t\t\t<meta name=\"twitter:title\" content=\"Alex Seif\">
\t\t\t<meta name=\"twitter:description\" content=\"Freelance Web Developer | 20 Years of Delivering Excellence.\">
\t\t\t<meta name=\"twitter:image\" content=\"https://alexseif.com/images/alex-seif-business-card.png\">
\t\t\t<link rel=\"canonical\" href=\"https://alexseif.com/\">
\t\t\t<meta name=\"description\" content=\"Freelance Web Developer | 20 Years of Delivering Excellence.\">
\t\t\t<meta name=\"keywords\" content=\"Freelance Web Developer, Cairo, Egypt, Web Apps, Web Presence, eCommerce, Travel Technology, NGO, eLearning, eGovernment\">
\t\t\t<meta name=\"author\" content=\"Alex Seif\">
\t\t";
        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "\t\t\t\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alex_seif_freelance_web_design_developer_i_always"), "html", null, true);
        yield "
\t\t\t";
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_structured_data(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "\t\t\t<script type=\"application/ld+json\">
\t\t\t\t{ \"@context\": \"https://schema.org\", \"@type\": \"Person\", \"name\": \"Alex Seif\", \"jobTitle\": \"Freelance Web Developer\", \"address\": { \"@type\": \"PostalAddress\", \"addressLocality\": \"Cairo\", \"addressRegion\": \"EG\" } }
\t\t\t</script>
\t\t";
        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        yield "\t\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t\t";
        // line 49
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
\t\t";
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield "\t\t\t";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
\t\t";
        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        yield "\t\t\t";
        yield from $this->unwrap()->yieldBlock('nav', $context, $blocks);
        // line 62
        yield "\t\t\t<canvas class=\"background-grid\" id=\"dotCanvas\"></canvas>
\t\t\t<div id=\"background-noise\">
\t\t\t\t<div id=\"noise-bg\"></div>
\t\t\t\t<canvas id=\"noise-canvas\"></canvas>
\t\t\t</div>
\t\t\t";
        // line 67
        yield from $this->unwrap()->yieldBlock('sitewrapper', $context, $blocks);
        // line 72
        yield "\t\t\t";
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 75
        yield "\t\t";
        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
        yield "\t\t\t\t";
        yield from $this->loadTemplate("_nav.html.twig", "base.html.twig", 60)->unwrap()->yield($context);
        // line 61
        yield "\t\t\t";
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sitewrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield "\t\t\t\t<main id=\"site-wrapper\">
\t\t\t\t\t";
        // line 69
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 70
        yield "\t\t\t\t</main>
\t\t\t";
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield "\t\t\t\t";
        yield from $this->loadTemplate("footer.html.twig", "base.html.twig", 73)->unwrap()->yield($context);
        // line 74
        yield "\t\t\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  318 => 74,  315 => 73,  308 => 72,  298 => 69,  292 => 70,  290 => 69,  287 => 68,  280 => 67,  275 => 61,  272 => 60,  265 => 59,  260 => 75,  257 => 72,  255 => 67,  248 => 62,  245 => 59,  238 => 58,  230 => 53,  223 => 52,  216 => 49,  213 => 48,  206 => 47,  198 => 41,  191 => 40,  183 => 37,  176 => 36,  157 => 20,  150 => 19,  143 => 107,  118 => 84,  116 => 83,  107 => 76,  105 => 58,  100 => 55,  98 => 52,  95 => 51,  93 => 47,  89 => 46,  84 => 45,  82 => 40,  79 => 39,  77 => 36,  74 => 35,  72 => 19,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "/var/www/alexseif/templates/base.html.twig");
    }
}
