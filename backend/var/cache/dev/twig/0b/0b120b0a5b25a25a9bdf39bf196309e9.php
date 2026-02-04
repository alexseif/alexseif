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
class __TwigTemplate_81a70af027f0fe246bf34f0d9471d85d extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'meta' => [$this, 'block_meta'],
            'structured_data' => [$this, 'block_structured_data'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'nav' => [$this, 'block_nav'],
            'sitewrapper' => [$this, 'block_sitewrapper'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "html", null, true);
        yield "\" xml:lang=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "html", null, true);
        yield "\" data-theme=\"dark-mode\" dir=\"";
        yield (($this->extensions['App\Twig\RtlExtension']->isRtlLocale(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2))) ? ("rtl") : ("ltr"));
        yield "\" class=\"dark-mode\">
\t<head prefix=\"og: https://ogp.me/ns#\">
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
\t\t<meta name=\"description\" content=\"Alex Seif - Freelance Web Developer with 20 years of experience in Symfony, WordPress, DevOps, and more.\"/>
\t\t<meta name=\"keywords\" content=\"Alex Seif, Web Developer, Symfony, WordPress, DevOps, Portfolio\"/>
\t\t<meta name=\"author\" content=\"Alex Seif\"/>
\t\t<link rel=\"canonical\" href=\"https://alexseif.com/\"/>
\t\t<meta
\t\tname=\"robots\" content=\"index, follow\"/>
\t\t<!-- Preconnects for performance -->
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin/>
\t\t<link
\t\trel=\"preconnect\" href=\"https://connect.facebook.net\" crossorigin/>

\t\t<!-- Preload favicon and hero image -->
\t\t<link rel=\"preload\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "\" as=\"image\" type=\"image/x-icon\"/>
\t\t<link
\t\trel=\"preload\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://alexseif.com/images/alex-seif-business-card.png"), "html", null, true);
        yield "\" as=\"image\"/>

\t\t<!-- Favicon -->
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "\" type=\"image/x-icon\"/>
\t\t<link
\t\trel=\"icon\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "\" type=\"image/x-icon\"/>

\t\t<!-- Stylesheets -->
\t\t";
        // line 29
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 36
        yield "
\t\t<!-- Social Meta -->
\t\t";
        // line 38
        yield from $this->unwrap()->yieldBlock('meta', $context, $blocks);
        // line 50
        yield "
\t\t<!-- Structured Data -->
\t\t";
        // line 52
        yield from $this->unwrap()->yieldBlock('structured_data', $context, $blocks);
        // line 86
        yield "
\t\t<!-- Title -->
\t\t<title>
\t\t\t";
        // line 89
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 94
        yield "\t\t</title>

\t\t<!-- Google Tag (deferred for performance) -->
\t\t";
        // line 97
        if (("prod" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "environment", [], "any", false, false, false, 97))) {
            // line 98
            yield "\t\t\t<script>
\t\t\t\twindow.addEventListener('load', function () {
var gtagScript = document.createElement('script');
gtagScript.async = true;
gtagScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-QV4S3QWW7F';
document.head.appendChild(gtagScript);

gtagScript.onload = function () {
window.dataLayer = window.dataLayer || [];
function gtag() {
dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'G-QV4S3QWW7F');
};
});
\t\t\t</script>
\t\t";
        }
        // line 116
        yield "\t</head>
\t<body class=\"dark-mode\">
\t\t";
        // line 118
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 136
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 140
        yield "
\t\t<!-- Messenger Chat Plugin Code -->
\t\t<div id=\"fb-root\"></div>
\t\t<div id=\"fb-customer-chat\" class=\"fb-customerchat\"></div>

\t\t";
        // line 145
        if (("prod" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "environment", [], "any", false, false, false, 145))) {
            // line 146
            yield "\t\t\t<script>
\t\t\t\twindow.addEventListener('load', function () {
var chatbox = document.getElementById('fb-customer-chat');
chatbox.setAttribute(\"page_id\", \"268403033331219\");
chatbox.setAttribute(\"attribution\", \"biz_inbox\");

window.fbAsyncInit = function () {
FB.init({xfbml: true, version: 'v10.0'});
};

var js,
fjs = document.getElementsByTagName('script')[0];
if (document.getElementById('facebook-jssdk')) 
return;



js = document.createElement('script');
js.id = 'facebook-jssdk';
js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
fjs.parentNode.insertBefore(js, fjs);
});
\t\t\t</script>
\t\t";
        }
        // line 170
        yield "\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        yield "\t\t\t";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
\t\t\t";
        // line 31
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("wp-optimize");
        yield "
\t\t\t";
        // line 32
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "locale", [], "any", false, false, false, 32) != "en")) {
            // line 33
            yield "\t\t\t\t";
            yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("rtl");
            yield "
\t\t\t";
        }
        // line 35
        yield "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 39
        yield "\t\t\t<meta property=\"og:title\" content=\"Alex Seif - Web Developer\"/>
\t\t\t<meta property=\"og:url\" content=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "uri", [], "any", false, false, false, 40), "html", null, true);
        yield "\"/>
\t\t\t<meta property=\"og:image\" content=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://alexseif.com/images/alex-seif-business-card.png"), "html", null, true);
        yield "\"/>
\t\t\t<meta property=\"og:site_name\" content=\"Alex Seif\"/>
\t\t\t<meta property=\"og:description\" content=\"Freelance Web Developer with 20 years of experience in Symfony, WordPress, DevOps, and more.\"/>
\t\t\t<meta property=\"og:type\" content=\"website\"/>
\t\t\t<meta name=\"twitter:card\" content=\"summary_large_image\"/>
\t\t\t<meta name=\"twitter:title\" content=\"Alex Seif\"/>
\t\t\t<meta name=\"twitter:description\" content=\"Freelance Web Developer | 20 Years of Delivering Excellence.\"/>
\t\t\t<meta name=\"twitter:image\" content=\"https://alexseif.com/images/alex-seif-business-card.png\"/>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_structured_data(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "structured_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "structured_data"));

        // line 53
        yield "\t\t\t<script type=\"application/ld+json\">
\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"@context\": \"https://schema.org\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"@type\": \"ProfessionalService\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"name\": \"Alex Seif – WordPress Optimization\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"image\": \"https://alexseif.com/images/WordPress-Optimize-card.png\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"url\": \"https://alexseif.com/wordpress-optimization\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"description\":
\t\t\t\t";
        // line 61
        yield json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.meta.description"));
        yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"address\": {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"@type\": \"PostalAddress\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"addressLocality\": \"Cairo\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"addressRegion\": \"EG\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"addressCountry\": \"Egypt\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"telephone\": \"+20-100-400-6332\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"areaServed\": \"EG\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"priceRange\": \"\$\$\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"founder\": {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"@type\": \"Person\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"name\": \"Alex Seif\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"jobTitle\":
\t\t\t\t";
        // line 75
        yield json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("wordpress_optimize.meta.job_title"));
        yield "
\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"sameAs\": [
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"https://twitter.com/alexseif\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"https://linkedin.com/in/alexseif\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"https://github.com/alexseif\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"https://www.instagram.com/alex_makes_websites\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          ]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t</script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 90
        yield "\t\t\t\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alex_seif"), "html", null, true);
        yield "
\t\t\t\t–
\t\t\t\t";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("web_developer")), "html", null, true);
        yield "
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 119
        yield "\t\t\t";
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 124
        yield "\t\t\t<div id=\"background-noise\">
\t\t\t\t<canvas class=\"background-grid\" id=\"dotCanvas\"></canvas>
\t\t\t</div>
\t\t\t";
        // line 127
        yield from $this->unwrap()->yieldBlock('sitewrapper', $context, $blocks);
        // line 132
        yield "\t\t\t";
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 135
        yield "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 119
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 120
        yield "\t\t\t\t";
        yield from $this->unwrap()->yieldBlock('nav', $context, $blocks);
        // line 123
        yield "\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 120
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 121
        yield "\t\t\t\t\t";
        yield from $this->loadTemplate("_nav.html.twig", "base.html.twig", 121)->unwrap()->yield($context);
        // line 122
        yield "\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 127
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sitewrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sitewrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sitewrapper"));

        // line 128
        yield "\t\t\t\t<main id=\"site-wrapper\">
\t\t\t\t\t";
        // line 129
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 130
        yield "\t\t\t\t</main>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 132
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 133
        yield "\t\t\t\t";
        yield from $this->loadTemplate("footer.html.twig", "base.html.twig", 133)->unwrap()->yield($context);
        // line 134
        yield "\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
        yield "\t\t\t";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
\t\t\t";
        // line 138
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("wp-optimize");
        yield "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  576 => 138,  571 => 137,  558 => 136,  547 => 134,  544 => 133,  531 => 132,  509 => 129,  497 => 130,  495 => 129,  492 => 128,  479 => 127,  468 => 122,  465 => 121,  452 => 120,  441 => 123,  438 => 120,  425 => 119,  414 => 135,  411 => 132,  409 => 127,  404 => 124,  401 => 119,  388 => 118,  375 => 92,  369 => 90,  356 => 89,  334 => 75,  317 => 61,  307 => 53,  294 => 52,  274 => 41,  270 => 40,  267 => 39,  254 => 38,  243 => 35,  237 => 33,  235 => 32,  231 => 31,  226 => 30,  213 => 29,  200 => 170,  174 => 146,  172 => 145,  165 => 140,  162 => 136,  160 => 118,  156 => 116,  136 => 98,  134 => 97,  129 => 94,  127 => 89,  122 => 86,  120 => 52,  116 => 50,  114 => 38,  110 => 36,  108 => 29,  102 => 26,  97 => 24,  91 => 21,  86 => 19,  62 => 2,  59 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\" xml:lang=\"{{ app.request.locale }}\" data-theme=\"dark-mode\" dir=\"{{ is_rtl_locale(app.request.locale) ? 'rtl' : 'ltr' }}\" class=\"dark-mode\">
\t<head prefix=\"og: https://ogp.me/ns#\">
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
\t\t<meta name=\"description\" content=\"Alex Seif - Freelance Web Developer with 20 years of experience in Symfony, WordPress, DevOps, and more.\"/>
\t\t<meta name=\"keywords\" content=\"Alex Seif, Web Developer, Symfony, WordPress, DevOps, Portfolio\"/>
\t\t<meta name=\"author\" content=\"Alex Seif\"/>
\t\t<link rel=\"canonical\" href=\"https://alexseif.com/\"/>
\t\t<meta
\t\tname=\"robots\" content=\"index, follow\"/>
\t\t<!-- Preconnects for performance -->
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin/>
\t\t<link
\t\trel=\"preconnect\" href=\"https://connect.facebook.net\" crossorigin/>

\t\t<!-- Preload favicon and hero image -->
\t\t<link rel=\"preload\" href=\"{{ asset('favicon.ico') }}\" as=\"image\" type=\"image/x-icon\"/>
\t\t<link
\t\trel=\"preload\" href=\"{{ asset('https://alexseif.com/images/alex-seif-business-card.png') }}\" as=\"image\"/>

\t\t<!-- Favicon -->
\t\t<link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" type=\"image/x-icon\"/>
\t\t<link
\t\trel=\"icon\" href=\"{{ asset('favicon.ico') }}\" type=\"image/x-icon\"/>

\t\t<!-- Stylesheets -->
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t\t{{ encore_entry_link_tags('wp-optimize') }}
\t\t\t{% if app.request.locale != 'en' %}
\t\t\t\t{{ encore_entry_link_tags('rtl') }}
\t\t\t{% endif %}
\t\t{% endblock %}

\t\t<!-- Social Meta -->
\t\t{% block meta %}
\t\t\t<meta property=\"og:title\" content=\"Alex Seif - Web Developer\"/>
\t\t\t<meta property=\"og:url\" content=\"{{ app.request.uri }}\"/>
\t\t\t<meta property=\"og:image\" content=\"{{ asset('https://alexseif.com/images/alex-seif-business-card.png') }}\"/>
\t\t\t<meta property=\"og:site_name\" content=\"Alex Seif\"/>
\t\t\t<meta property=\"og:description\" content=\"Freelance Web Developer with 20 years of experience in Symfony, WordPress, DevOps, and more.\"/>
\t\t\t<meta property=\"og:type\" content=\"website\"/>
\t\t\t<meta name=\"twitter:card\" content=\"summary_large_image\"/>
\t\t\t<meta name=\"twitter:title\" content=\"Alex Seif\"/>
\t\t\t<meta name=\"twitter:description\" content=\"Freelance Web Developer | 20 Years of Delivering Excellence.\"/>
\t\t\t<meta name=\"twitter:image\" content=\"https://alexseif.com/images/alex-seif-business-card.png\"/>
\t\t{% endblock %}

\t\t<!-- Structured Data -->
\t\t{% block structured_data %}
\t\t\t<script type=\"application/ld+json\">
\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"@context\": \"https://schema.org\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"@type\": \"ProfessionalService\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"name\": \"Alex Seif – WordPress Optimization\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"image\": \"https://alexseif.com/images/WordPress-Optimize-card.png\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"url\": \"https://alexseif.com/wordpress-optimization\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"description\":
\t\t\t\t{{ 'wordpress_optimize.meta.description'|trans|json_encode|raw }},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"address\": {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"@type\": \"PostalAddress\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"addressLocality\": \"Cairo\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"addressRegion\": \"EG\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"addressCountry\": \"Egypt\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"telephone\": \"+20-100-400-6332\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"areaServed\": \"EG\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"priceRange\": \"\$\$\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"founder\": {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"@type\": \"Person\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"name\": \"Alex Seif\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"jobTitle\":
\t\t\t\t{{ 'wordpress_optimize.meta.job_title'|trans|json_encode|raw }}
\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          \"sameAs\": [
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"https://twitter.com/alexseif\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"https://linkedin.com/in/alexseif\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"https://github.com/alexseif\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"https://www.instagram.com/alex_makes_websites\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          ]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t</script>
\t\t{% endblock %}

\t\t<!-- Title -->
\t\t<title>
\t\t\t{% block title %}
\t\t\t\t{{ 'alex_seif'|trans }}
\t\t\t\t–
\t\t\t\t{{ 'web_developer'|trans|capitalize }}
\t\t\t{% endblock %}
\t\t</title>

\t\t<!-- Google Tag (deferred for performance) -->
\t\t{% if 'prod' == app.environment %}
\t\t\t<script>
\t\t\t\twindow.addEventListener('load', function () {
var gtagScript = document.createElement('script');
gtagScript.async = true;
gtagScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-QV4S3QWW7F';
document.head.appendChild(gtagScript);

gtagScript.onload = function () {
window.dataLayer = window.dataLayer || [];
function gtag() {
dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'G-QV4S3QWW7F');
};
});
\t\t\t</script>
\t\t{% endif %}
\t</head>
\t<body class=\"dark-mode\">
\t\t{% block body %}
\t\t\t{% block header %}
\t\t\t\t{% block nav %}
\t\t\t\t\t{% include '_nav.html.twig' %}
\t\t\t\t{% endblock %}
\t\t\t{% endblock %}
\t\t\t<div id=\"background-noise\">
\t\t\t\t<canvas class=\"background-grid\" id=\"dotCanvas\"></canvas>
\t\t\t</div>
\t\t\t{% block sitewrapper %}
\t\t\t\t<main id=\"site-wrapper\">
\t\t\t\t\t{% block content %}{% endblock %}
\t\t\t\t</main>
\t\t\t{% endblock %}
\t\t\t{% block footer %}
\t\t\t\t{% include 'footer.html.twig' %}
\t\t\t{% endblock %}
\t\t{% endblock %}
\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}
\t\t\t{{ encore_entry_script_tags('wp-optimize') }}
\t\t{% endblock %}

\t\t<!-- Messenger Chat Plugin Code -->
\t\t<div id=\"fb-root\"></div>
\t\t<div id=\"fb-customer-chat\" class=\"fb-customerchat\"></div>

\t\t{% if 'prod' == app.environment %}
\t\t\t<script>
\t\t\t\twindow.addEventListener('load', function () {
var chatbox = document.getElementById('fb-customer-chat');
chatbox.setAttribute(\"page_id\", \"268403033331219\");
chatbox.setAttribute(\"attribution\", \"biz_inbox\");

window.fbAsyncInit = function () {
FB.init({xfbml: true, version: 'v10.0'});
};

var js,
fjs = document.getElementsByTagName('script')[0];
if (document.getElementById('facebook-jssdk')) 
return;



js = document.createElement('script');
js.id = 'facebook-jssdk';
js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
fjs.parentNode.insertBefore(js, fjs);
});
\t\t\t</script>
\t\t{% endif %}
\t</body>
</html>
", "base.html.twig", "/var/www/alexseif.com/templates/base.html.twig");
    }
}
