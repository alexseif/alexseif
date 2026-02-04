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

/* ai/chatGpt.html.twig */
class __TwigTemplate_6c12207c30e4018268bd09cdead0e5c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ai/chatGpt.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ai/chatGpt.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
\t\t<title>The State of AI in Alex Seif’s Creative Work — 2026</title>
\t\t<meta
\t\tname=\"description\" content=\"A Cairo-rooted, modular, animated trend report reframed around Alex Seif’s creative-tech practice.\"/>

\t\t<!-- Fonts (system stack for speed) and base colors -->
\t\t<style>:root
\t\t{
\t\t\t/* Cairo dusk palette */
\t\t\t--bg: #0e0f14;
\t\t\t--ink: #e9edf3;
\t\t\t--muted: #a8b0c0;
\t\t\t--accent: #6ec1e4; /* cool blue */
\t\t\t--accent-2: #f6a623; /* warm amber */
\t\t\t--card: #151822;
\t\t\t--line: #232835;

\t\t\t/* spacing & rhythm */
\t\t\t--space-1: 6px;
\t\t\t--space-2: 12px;
\t\t\t--space-3: 20px;
\t\t\t--space-4: 32px;
\t\t\t--space-5: 48px;

\t\t\t/* type scale */
\t\t\t--fs-0: 13px;
\t\t\t--fs-1: 15px;
\t\t\t--fs-2: 18px;
\t\t\t--fs-3: 22px;
\t\t\t--fs-4: 28px;
\t\t\t--fs-5: 36px;
\t\t\t--fs-6: 48px;

\t\t\t/* card radius */
\t\t\t--radius: 14px;
\t\t}

\t\t/* Reset & base */
\t\t* {
\t\t\tbox-sizing: border-box;
\t\t}
\t\thtml,
\t\tbody {
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t\tbackground: var(--bg);
\t\t\tcolor: var(--ink);
\t\t\tfont: 400 var(--fs-2) / 1.5 system-ui, -apple-system, Segoe UI, Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Apple Color Emoji\", \"Segoe UI Emoji\";
\t\t}
\t\timg {
\t\t\tmax-width: 100%;
\t\t\tdisplay: block;
\t\t}
\t\ta {
\t\t\tcolor: var(--accent);
\t\t\ttext-decoration: none;
\t\t}
\t\t.wrap {
\t\t\twidth: min(1100px, 92vw);
\t\t\tmargin: 0 auto;
\t\t}

\t\t/* Subtle gradient beams */
\t\t.beams {
\t\t\tposition: fixed;
\t\t\tinset: 0;
\t\t\tpointer-events: none;
\t\t\tz-index: 0;
\t\t\tbackground: radial-gradient(1200px 600px at 15% 10%, rgba(110,193,228,0.12), transparent 60%), radial-gradient(900px 450px at 85% 20%, rgba(246, 166, 35, 0.10), transparent 55%), radial-gradient(800px 400px at 50% 100%, rgba(110, 193, 228, 0.06), transparent 60%);
\t\t\tfilter: saturate(1.2);
\t\t}

\t\t/* Header hero */
\t\theader.hero {
\t\t\tposition: relative;
\t\t\tz-index: 1;
\t\t\tpadding: var(--space-5) 0;
\t\t}
\t\t.hero h1 {
\t\t\tfont-size: clamp(var(--fs-5), 4vw, var(--fs-6));
\t\t\tletter-spacing: -0.02em;
\t\t\tmargin: 0 0 var(--space-2);
\t\t}
\t\t.hero p.kicker {
\t\t\tcolor: var(--muted);
\t\t\tfont-size: var(--fs-3);
\t\t\tmargin: 0 0 var(--space-3);
\t\t}
\t\t.hero .tags {
\t\t\tdisplay: flex;
\t\t\tflex-wrap: wrap;
\t\t\tgap: var(--space-2);
\t\t}
\t\t.tag {
\t\t\tbackground: linear-gradient(180deg, rgba(110,193,228,0.18), rgba(110,193,228,0.10));
\t\t\tcolor: var(--ink);
\t\t\tborder: 1px solid rgba(110, 193, 228, 0.35);
\t\t\tpadding: 8px 12px;
\t\t\tborder-radius: 999px;
\t\t\tfont-size: var(--fs-1);
\t\t\tbackdrop-filter: blur(4px);
\t\t}

\t\t/* Sections */
\t\tsection {
\t\t\tposition: relative;
\t\t\tz-index: 1;
\t\t\tpadding: var(--space-5) 0;
\t\t\tborder-top: 1px solid var(--line);
\t\t}
\t\tsection h2 {
\t\t\tfont-size: var(--fs-4);
\t\t\tletter-spacing: -0.01em;
\t\t\tmargin: 0 0 var(--space-3);
\t\t}
\t\tsection .lead {
\t\t\tcolor: var(--muted);
\t\t\tfont-size: var(--fs-2);
\t\t\tmargin-bottom: var(--space-4);
\t\t}

\t\t/* Cards & grids */
\t\t.grid {
\t\t\tdisplay: grid;
\t\t\tgap: var(--space-3);
\t\t}
\t\t@media(min-width: 760px) {
\t\t\t.grid.cols-2 {
\t\t\t\tgrid-template-columns: 1fr 1fr;
\t\t\t}
\t\t\t.grid.cols-3 {
\t\t\t\tgrid-template-columns: repeat(3, 1fr);
\t\t\t}
\t\t}
\t\t.card {
\t\t\tbackground: linear-gradient(180deg, rgba(21,24,34,0.95), rgba(21,24,34,0.85));
\t\t\tborder: 1px solid var(--line);
\t\t\tborder-radius: var(--radius);
\t\t\tpadding: var(--space-3);
\t\t\tbox-shadow: 0 8px 30px rgba(0, 0, 0, 0.35);
\t\t\ttransform: translateY(8px);
\t\t\topacity: 0;
\t\t\twill-change: transform, opacity;
\t\t}
\t\t.card h3 {
\t\t\tfont-size: var(--fs-3);
\t\t\tmargin: 0 0 var(--space-2);
\t\t}
\t\t.card p {
\t\t\tcolor: var(--muted);
\t\t\tmargin: 0;
\t\t}
\t\t.card .meta {
\t\t\tdisplay: flex;
\t\t\tgap: var(--space-2);
\t\t\tmargin-top: var(--space-2);
\t\t\tflex-wrap: wrap;
\t\t}
\t\t.meta .chip {
\t\t\tbackground: #10131b;
\t\t\tborder: 1px solid var(--line);
\t\t\tcolor: var(--ink);
\t\t\tfont-size: var(--fs-1);
\t\t\tpadding: 6px 10px;
\t\t\tborder-radius: 999px;
\t\t}

\t\t/* CTA */
\t\t.cta {
\t\t\tmargin-top: var(--space-4);
\t\t\tdisplay: flex;
\t\t\tgap: var(--space-2);
\t\t\tflex-wrap: wrap;
\t\t}
\t\t.btn {
\t\t\tdisplay: inline-flex;
\t\t\talign-items: center;
\t\t\tgap: 10px;
\t\t\tbackground: linear-gradient(180deg, rgba(110,193,228,0.18), rgba(110,193,228,0.10));
\t\t\tborder: 1px solid rgba(110, 193, 228, 0.35);
\t\t\tcolor: var(--ink);
\t\t\tpadding: 12px 16px;
\t\t\tborder-radius: 12px;
\t\t\tfont-weight: 600;
\t\t\ttransition: transform 160ms ease, box-shadow 160ms ease, background 160ms ease;
\t\t}
\t\t.btn:hover {
\t\t\ttransform: translateY(-2px);
\t\t\tbox-shadow: 0 10px 30px rgba(110, 193, 228, 0.25);
\t\t\tbackground: linear-gradient(180deg, rgba(110,193,228,0.24), rgba(110,193,228,0.14));
\t\t}
\t\t.btn.alt {
\t\t\tbackground: linear-gradient(180deg, rgba(246,166,35,0.18), rgba(246,166,35,0.10));
\t\t\tborder-color: rgba(246, 166, 35, 0.35);
\t\t}
\t\t.btn.alt:hover {
\t\t\tbox-shadow: 0 10px 30px rgba(246, 166, 35, 0.25);
\t\t\tbackground: linear-gradient(180deg, rgba(246,166,35,0.24), rgba(246,166,35,0.14));
\t\t}

\t\t/* Quote */
\t\t.quote {
\t\t\tbackground: linear-gradient(180deg, rgba(110,193,228,0.08), rgba(110,193,228,0.04));
\t\t\tborder: 1px dashed rgba(110, 193, 228, 0.30);
\t\t\tcolor: var(--ink);
\t\t\tpadding: var(--space-3);
\t\t\tborder-radius: var(--radius);
\t\t\tfont-size: var(--fs-3);
\t\t}
\t\t.quote small {
\t\t\tcolor: var(--muted);
\t\t\tdisplay: block;
\t\t\tmargin-top: var(--space-2);
\t\t}

\t\t/* Footer */
\t\tfooter {
\t\t\tposition: relative;
\t\t\tz-index: 1;
\t\t\tpadding: var(--space-5) 0;
\t\t\tcolor: var(--muted);
\t\t\tborder-top: 1px solid var(--line);
\t\t}

\t\t/* Reveal states */
\t\t.reveal {
\t\t\topacity: 0;
\t\t\ttransform: translateY(12px);
\t\t}
\t\t.reveal.in {
\t\t\topacity: 1;
\t\t\ttransform: translateY(0);
\t\t\ttransition: opacity 600ms cubic-bezier(0.2,.85,0.25,1), transform 600ms cubic-bezier(0.2,.85,0.25,1);
\t\t}

\t\t/* Keyframes for subtle shimmer on headers */
\t\t@keyframes shimmer {
\t\t\t0% {
\t\t\t\ttext-shadow: 0 0 0 rgba(110, 193, 228, 0);
\t\t\t}
\t\t\t50% {
\t\t\t\ttext-shadow: 0 0 18px rgba(110, 193, 228, 0.25);
\t\t\t}
\t\t\t100% {
\t\t\t\ttext-shadow: 0 0 0 rgba(110, 193, 228, 0);
\t\t\t}
\t\t}
\t\t.hero h1 span.spark {
\t\t\tcolor: var(--accent);
\t\t\tanimation: shimmer 5s ease-in-out infinite;
\t\t}
\t</style>
</head>

<body>
\t<div class=\"beams\" aria-hidden=\"true\"></div>

\t<header class=\"hero wrap\">
\t\t<h1 class=\"reveal\">The State of AI in
\t\t\t<span class=\"spark\">Alex Seif’s</span>
\t\t\tCreative Work — 2026</h1>
\t\t<p class=\"kicker reveal\">Cairo-rooted, modular, and ruthlessly responsive. Turning constraints into reusable clarity and animated proof.</p>
\t\t<div class=\"tags reveal\">
\t\t\t<span class=\"tag\">Mobile-first SCSS</span>
\t\t\t<span class=\"tag\">WordPress & WooCommerce</span>
\t\t\t<span class=\"tag\">Symfony + EasyAdmin</span>
\t\t\t<span class=\"tag\">Twig / JS / Doctrine</span>
\t\t\t<span class=\"tag\">Cairo storytelling</span>
\t\t</div>
\t\t<div class=\"cta reveal\" style=\"margin-top: var(--space-4);\">
\t\t\t<a href=\"#skills\" class=\"btn\">Explore skills</a>
\t\t\t<a href=\"#trends\" class=\"btn alt\">See 2026 trends</a>
\t\t</div>
\t</header>

\t<main>
\t\t<section id=\"skills\">
\t\t\t<div class=\"wrap\">
\t\t\t\t<h2 class=\"reveal\">Capabilities anchored in Cairo constraints</h2>
\t\t\t\t<p class=\"lead reveal\">Alex builds elastic interfaces and admin flows that survive heat, flaky AC, and client timelines—clean, scalable, and human.</p>

\t\t\t\t<div class=\"grid cols-3\">
\t\t\t\t\t<article class=\"card\" data-delay=\"0\">
\t\t\t\t\t\t<h3>Modular, mobile-first SCSS</h3>
\t\t\t\t\t\t<p>Never fixed widths. Layouts grow naturally, with tokens and utility classes that make reuse a given, not an afterthought.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Fluid grids</span>
\t\t\t\t\t\t\t<span class=\"chip\">Tokenized spacing</span>
\t\t\t\t\t\t\t<span class=\"chip\">QA overlays</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"card\" data-delay=\"80\">
\t\t\t\t\t\t<h3>WordPress/WooCommerce troubleshooting</h3>
\t\t\t\t\t\t<p>Elementor and block editor friction reframed into lean templates, CSP sanity, and performance-first decisions under real-world pressure.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">CSP fixes</span>
\t\t\t\t\t\t\t<span class=\"chip\">Lean markup</span>
\t\t\t\t\t\t\t<span class=\"chip\">Cart UX</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"card\" data-delay=\"160\">
\t\t\t\t\t\t<h3>Symfony admin flows</h3>
\t\t\t\t\t\t<p>Secure intake, readable dashboards, and Twig-first clarity. Doctrine mapping for analytics-ready payloads and future hooks.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">EasyAdmin</span>
\t\t\t\t\t\t\t<span class=\"chip\">Auth & roles</span>
\t\t\t\t\t\t\t<span class=\"chip\">Email-ready events</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</div>

\t\t\t\t<div class=\"cta\" style=\"margin-top: var(--space-4);\">
\t\t\t\t\t<a href=\"#projects\" class=\"btn\">See projects</a>
\t\t\t\t\t<a href=\"#principles\" class=\"btn alt\">Design principles</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"trends\">
\t\t\t<div class=\"wrap\">
\t\t\t\t<h2 class=\"reveal\">2026 AI trends, reframed for Alex’s workflow</h2>
\t\t\t\t<p class=\"lead reveal\">From “assistive” to “adaptive”—AI moves from novelty to the backbone of clean handoffs, smarter QA, and Cairo-friendly content ops.</p>

\t\t\t\t<div class=\"grid cols-2\">
\t\t\t\t\t<article class=\"card\" data-delay=\"0\">
\t\t\t\t\t\t<h3>Assistive coding to adaptive scaffolding</h3>
\t\t\t\t\t\t<p>Generate the boring bits: CRUD, form bindings, token maps. Keep the human taste for micro-interactions, Cairo color, and storytelling.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Scaffolds</span>
\t\t\t\t\t\t\t<span class=\"chip\">Lint-ready</span>
\t\t\t\t\t\t\t<span class=\"chip\">Testable</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"card\" data-delay=\"80\">
\t\t\t\t\t\t<h3>QA as a social game</h3>
\t\t\t\t\t\t<p>Overlay diffs, timed sprints, playful dares. Turn pixel-perfect checks into momentum, not drudgery.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Diff overlays</span>
\t\t\t\t\t\t\t<span class=\"chip\">Sprint timers</span>
\t\t\t\t\t\t\t<span class=\"chip\">Shareable proofs</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"card\" data-delay=\"160\">
\t\t\t\t\t\t<h3>Local-first intake analytics</h3>
\t\t\t\t\t\t<p>Map full JSON payloads, store locally, sync later. Own the data shape without vendor drama.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Doctrine entities</span>
\t\t\t\t\t\t\t<span class=\"chip\">Event hooks</span>
\t\t\t\t\t\t\t<span class=\"chip\">Export-ready</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"card\" data-delay=\"240\">
\t\t\t\t\t\t<h3>Content ops with Cairo warmth</h3>
\t\t\t\t\t\t<p>AI drafts; Alex adds the blue flower—little, real moments. The final copy feels lived-in, not generic.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Local metaphors</span>
\t\t\t\t\t\t\t<span class=\"chip\">Short loops</span>
\t\t\t\t\t\t\t<span class=\"chip\">Reusable blocks</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"projects\">
\t\t\t<div class=\"wrap\">
\t\t\t\t<h2 class=\"reveal\">Selected projects and micro-proofs</h2>
\t\t\t\t<p class=\"lead reveal\">Small wins stacked: admin clarity, lean storefronts, and playful QA sprints that convert feedback into upgrades.</p>

\t\t\t\t<div class=\"grid cols-2\">
\t\t\t\t\t<article class=\"card\" data-delay=\"0\">
\t\t\t\t\t\t<h3>Clinic intake admin (Symfony)</h3>
\t\t\t\t\t\t<p>Secure auth, human-readable dashboards, custom Twig labels, and export-ready filters. Email hooks queued for future rollout.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Auth flows</span>
\t\t\t\t\t\t\t<span class=\"chip\">Twig renderers</span>
\t\t\t\t\t\t\t<span class=\"chip\">Analytics-ready</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"card\" data-delay=\"80\">
\t\t\t\t\t\t<h3>WooCommerce cart polish</h3>
\t\t\t\t\t\t<p>Markup diet, CSP fixes, and micro-interactions that respect mobile thumbs and Cairo commute attention spans.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Performance</span>
\t\t\t\t\t\t\t<span class=\"chip\">CSP headers</span>
\t\t\t\t\t\t\t<span class=\"chip\">Thumb-friendly</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"card\" data-delay=\"160\">
\t\t\t\t\t\t<h3>Infinite menu loop</h3>
\t\t\t\t\t\t<p>True seamless scrolling with lean DOM, smart clones, and velocity clamps—no jitter, just vibe.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Lean DOM</span>
\t\t\t\t\t\t\t<span class=\"chip\">Velocity clamps</span>
\t\t\t\t\t\t\t<span class=\"chip\">Seamless UX</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"card\" data-delay=\"240\">
\t\t\t\t\t\t<h3>QA overlay rituals</h3>
\t\t\t\t\t\t<p>Figma-to-front overlay checks turned into friendly challenges. Proof-first culture with shareable wins.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Overlay diff</span>
\t\t\t\t\t\t\t<span class=\"chip\">Sprint cadence</span>
\t\t\t\t\t\t\t<span class=\"chip\">Proof culture</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"principles\">
\t\t\t<div class=\"wrap\">
\t\t\t\t<h2 class=\"reveal\">Operating principles</h2>
\t\t\t\t<div class=\"grid\">
\t\t\t\t\t<article class=\"card\" data-delay=\"0\">
\t\t\t\t\t\t<h3>Modular or bust</h3>
\t\t\t\t\t\t<p>Everything reusable. Tokens for spacing, color, and type; components that read like a story, not a riddle.</p>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"card\" data-delay=\"80\">
\t\t\t\t\t\t<h3>Performance is kindness</h3>
\t\t\t\t\t\t<p>Fast pages respect human bandwidth. Cairo heat included.</p>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"card\" data-delay=\"160\">
\t\t\t\t\t\t<h3>Proof beats promise</h3>
\t\t\t\t\t\t<p>Deliver visible upgrades—diffs, timings, and before/afters that make trust a default.</p>
\t\t\t\t\t</article>
\t\t\t\t</div>

\t\t\t\t<div style=\"margin-top: var(--space-4);\" class=\"quote reveal\">
\t\t\t\t\t“Blue flowers in Cairo: fragile, rare, and real. That’s the bar for copy, code, and care.”
\t\t\t\t\t<small>— Alex Seif</small>
\t\t\t\t</div>

\t\t\t\t<div class=\"cta\" style=\"margin-top: var(--space-4);\">
\t\t\t\t\t<a href=\"#contact\" class=\"btn\">Collaborate</a>
\t\t\t\t\t<a href=\"#download\" class=\"btn alt\">Download HTML</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"contact\">
\t\t\t<div class=\"wrap\">
\t\t\t\t<h2 class=\"reveal\">Contact & handoff</h2>
\t\t\t\t<p class=\"lead reveal\">Ready for clean handoffs, tight scopes, and momentum. Send a brief; Alex returns a modular plan.</p>
\t\t\t\t<div class=\"grid cols-2\">
\t\t\t\t\t<article class=\"card\" data-delay=\"0\">
\t\t\t\t\t\t<h3>Handoff bundle</h3>
\t\t\t\t\t\t<p>Readable SCSS, component docs, and QA overlay exports. Zero guesswork.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Docs</span>
\t\t\t\t\t\t\t<span class=\"chip\">Tokens</span>
\t\t\t\t\t\t\t<span class=\"chip\">Exports</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"card\" data-delay=\"80\">
\t\t\t\t\t\t<h3>Timeline discipline</h3>
\t\t\t\t\t\t<p>Short sprints and proof checkpoints. Constraints are fuel, not friction.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Sprints</span>
\t\t\t\t\t\t\t<span class=\"chip\">Checkpoints</span>
\t\t\t\t\t\t\t<span class=\"chip\">Slack time</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>

\t<footer>
\t\t<div class=\"wrap\">
\t\t\t<p>© 2026 — Crafted for Alex Seif. Built as a living report: elastic, animated, and warm.</p>
\t\t</div>
\t</footer>

\t<!-- JS: Intersection-based reveal + staggered card lifts -->
\t<script>
\t\t// Smooth hash scroll
document.querySelectorAll('a[href^=\"#\"]').forEach(a => {
a.addEventListener('click', e => {
const id = a.getAttribute('href').slice(1);
const el = document.getElementById(id);
if (! el) 
return;

e.preventDefault();
el.scrollIntoView({behavior: 'smooth', block: 'start'});
});
});

// Reveal observer for headers and paragraphs
const revealObserver = new IntersectionObserver((entries) => {
entries.forEach(entry => {
if (entry.isIntersecting) {
entry.target.classList.add('in');
revealObserver.unobserve(entry.target);
}
});
}, {threshold: 0.2});

document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

// Card lift with stagger
const cardObserver = new IntersectionObserver((entries) => {
entries.forEach(entry => {
const el = entry.target;
if (entry.isIntersecting) {
const delay = Number(el.dataset.delay || 0);
setTimeout(() => {
el.style.opacity = 1;
el.style.transform = 'translateY(0)';
el.style.transition = 'opacity 600ms cubic-bezier(.2,.85,.25,1), transform 600ms cubic-bezier(.2,.85,.25,1)';
}, delay);
cardObserver.unobserve(el);
}
});
}, {threshold: 0.15});

document.querySelectorAll('.card').forEach(el => cardObserver.observe(el));

// Optional: soft parallax on beams based on mouse
const beams = document.querySelector('.beams');
let tx = 0,
ty = 0,
vx = 0,
vy = 0;
window.addEventListener('mousemove', (e) => {
const x = (e.clientX / window.innerWidth) - 0.5;
const y = (e.clientY / window.innerHeight) - 0.5;
tx = x * 4;
ty = y * 3;
});
function loop() {
vx += (tx - vx) * 0.06;
vy += (ty - vy) * 0.06;
beams.style.transform = `translate(\${vx}px, \${vy}px)`;
requestAnimationFrame(loop);
}
loop();

// Accessibility: reduce motion if user prefers
const mediaQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
if (mediaQuery.matches) { // Disable heavy animations for comfort
document.querySelectorAll('.card').forEach(el => {
el.style.transition = 'none';
el.style.opacity = 1;
el.style.transform = 'none';
});
document.querySelectorAll('.reveal').forEach(el => {
el.style.transition = 'none';
el.classList.add('in');
});
beams.style.transform = 'none';
}
\t</script>
</body></html>
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
        return "ai/chatGpt.html.twig";
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
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
\t\t<title>The State of AI in Alex Seif’s Creative Work — 2026</title>
\t\t<meta
\t\tname=\"description\" content=\"A Cairo-rooted, modular, animated trend report reframed around Alex Seif’s creative-tech practice.\"/>

\t\t<!-- Fonts (system stack for speed) and base colors -->
\t\t<style>:root
\t\t{
\t\t\t/* Cairo dusk palette */
\t\t\t--bg: #0e0f14;
\t\t\t--ink: #e9edf3;
\t\t\t--muted: #a8b0c0;
\t\t\t--accent: #6ec1e4; /* cool blue */
\t\t\t--accent-2: #f6a623; /* warm amber */
\t\t\t--card: #151822;
\t\t\t--line: #232835;

\t\t\t/* spacing & rhythm */
\t\t\t--space-1: 6px;
\t\t\t--space-2: 12px;
\t\t\t--space-3: 20px;
\t\t\t--space-4: 32px;
\t\t\t--space-5: 48px;

\t\t\t/* type scale */
\t\t\t--fs-0: 13px;
\t\t\t--fs-1: 15px;
\t\t\t--fs-2: 18px;
\t\t\t--fs-3: 22px;
\t\t\t--fs-4: 28px;
\t\t\t--fs-5: 36px;
\t\t\t--fs-6: 48px;

\t\t\t/* card radius */
\t\t\t--radius: 14px;
\t\t}

\t\t/* Reset & base */
\t\t* {
\t\t\tbox-sizing: border-box;
\t\t}
\t\thtml,
\t\tbody {
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t\tbackground: var(--bg);
\t\t\tcolor: var(--ink);
\t\t\tfont: 400 var(--fs-2) / 1.5 system-ui, -apple-system, Segoe UI, Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Apple Color Emoji\", \"Segoe UI Emoji\";
\t\t}
\t\timg {
\t\t\tmax-width: 100%;
\t\t\tdisplay: block;
\t\t}
\t\ta {
\t\t\tcolor: var(--accent);
\t\t\ttext-decoration: none;
\t\t}
\t\t.wrap {
\t\t\twidth: min(1100px, 92vw);
\t\t\tmargin: 0 auto;
\t\t}

\t\t/* Subtle gradient beams */
\t\t.beams {
\t\t\tposition: fixed;
\t\t\tinset: 0;
\t\t\tpointer-events: none;
\t\t\tz-index: 0;
\t\t\tbackground: radial-gradient(1200px 600px at 15% 10%, rgba(110,193,228,0.12), transparent 60%), radial-gradient(900px 450px at 85% 20%, rgba(246, 166, 35, 0.10), transparent 55%), radial-gradient(800px 400px at 50% 100%, rgba(110, 193, 228, 0.06), transparent 60%);
\t\t\tfilter: saturate(1.2);
\t\t}

\t\t/* Header hero */
\t\theader.hero {
\t\t\tposition: relative;
\t\t\tz-index: 1;
\t\t\tpadding: var(--space-5) 0;
\t\t}
\t\t.hero h1 {
\t\t\tfont-size: clamp(var(--fs-5), 4vw, var(--fs-6));
\t\t\tletter-spacing: -0.02em;
\t\t\tmargin: 0 0 var(--space-2);
\t\t}
\t\t.hero p.kicker {
\t\t\tcolor: var(--muted);
\t\t\tfont-size: var(--fs-3);
\t\t\tmargin: 0 0 var(--space-3);
\t\t}
\t\t.hero .tags {
\t\t\tdisplay: flex;
\t\t\tflex-wrap: wrap;
\t\t\tgap: var(--space-2);
\t\t}
\t\t.tag {
\t\t\tbackground: linear-gradient(180deg, rgba(110,193,228,0.18), rgba(110,193,228,0.10));
\t\t\tcolor: var(--ink);
\t\t\tborder: 1px solid rgba(110, 193, 228, 0.35);
\t\t\tpadding: 8px 12px;
\t\t\tborder-radius: 999px;
\t\t\tfont-size: var(--fs-1);
\t\t\tbackdrop-filter: blur(4px);
\t\t}

\t\t/* Sections */
\t\tsection {
\t\t\tposition: relative;
\t\t\tz-index: 1;
\t\t\tpadding: var(--space-5) 0;
\t\t\tborder-top: 1px solid var(--line);
\t\t}
\t\tsection h2 {
\t\t\tfont-size: var(--fs-4);
\t\t\tletter-spacing: -0.01em;
\t\t\tmargin: 0 0 var(--space-3);
\t\t}
\t\tsection .lead {
\t\t\tcolor: var(--muted);
\t\t\tfont-size: var(--fs-2);
\t\t\tmargin-bottom: var(--space-4);
\t\t}

\t\t/* Cards & grids */
\t\t.grid {
\t\t\tdisplay: grid;
\t\t\tgap: var(--space-3);
\t\t}
\t\t@media(min-width: 760px) {
\t\t\t.grid.cols-2 {
\t\t\t\tgrid-template-columns: 1fr 1fr;
\t\t\t}
\t\t\t.grid.cols-3 {
\t\t\t\tgrid-template-columns: repeat(3, 1fr);
\t\t\t}
\t\t}
\t\t.card {
\t\t\tbackground: linear-gradient(180deg, rgba(21,24,34,0.95), rgba(21,24,34,0.85));
\t\t\tborder: 1px solid var(--line);
\t\t\tborder-radius: var(--radius);
\t\t\tpadding: var(--space-3);
\t\t\tbox-shadow: 0 8px 30px rgba(0, 0, 0, 0.35);
\t\t\ttransform: translateY(8px);
\t\t\topacity: 0;
\t\t\twill-change: transform, opacity;
\t\t}
\t\t.card h3 {
\t\t\tfont-size: var(--fs-3);
\t\t\tmargin: 0 0 var(--space-2);
\t\t}
\t\t.card p {
\t\t\tcolor: var(--muted);
\t\t\tmargin: 0;
\t\t}
\t\t.card .meta {
\t\t\tdisplay: flex;
\t\t\tgap: var(--space-2);
\t\t\tmargin-top: var(--space-2);
\t\t\tflex-wrap: wrap;
\t\t}
\t\t.meta .chip {
\t\t\tbackground: #10131b;
\t\t\tborder: 1px solid var(--line);
\t\t\tcolor: var(--ink);
\t\t\tfont-size: var(--fs-1);
\t\t\tpadding: 6px 10px;
\t\t\tborder-radius: 999px;
\t\t}

\t\t/* CTA */
\t\t.cta {
\t\t\tmargin-top: var(--space-4);
\t\t\tdisplay: flex;
\t\t\tgap: var(--space-2);
\t\t\tflex-wrap: wrap;
\t\t}
\t\t.btn {
\t\t\tdisplay: inline-flex;
\t\t\talign-items: center;
\t\t\tgap: 10px;
\t\t\tbackground: linear-gradient(180deg, rgba(110,193,228,0.18), rgba(110,193,228,0.10));
\t\t\tborder: 1px solid rgba(110, 193, 228, 0.35);
\t\t\tcolor: var(--ink);
\t\t\tpadding: 12px 16px;
\t\t\tborder-radius: 12px;
\t\t\tfont-weight: 600;
\t\t\ttransition: transform 160ms ease, box-shadow 160ms ease, background 160ms ease;
\t\t}
\t\t.btn:hover {
\t\t\ttransform: translateY(-2px);
\t\t\tbox-shadow: 0 10px 30px rgba(110, 193, 228, 0.25);
\t\t\tbackground: linear-gradient(180deg, rgba(110,193,228,0.24), rgba(110,193,228,0.14));
\t\t}
\t\t.btn.alt {
\t\t\tbackground: linear-gradient(180deg, rgba(246,166,35,0.18), rgba(246,166,35,0.10));
\t\t\tborder-color: rgba(246, 166, 35, 0.35);
\t\t}
\t\t.btn.alt:hover {
\t\t\tbox-shadow: 0 10px 30px rgba(246, 166, 35, 0.25);
\t\t\tbackground: linear-gradient(180deg, rgba(246,166,35,0.24), rgba(246,166,35,0.14));
\t\t}

\t\t/* Quote */
\t\t.quote {
\t\t\tbackground: linear-gradient(180deg, rgba(110,193,228,0.08), rgba(110,193,228,0.04));
\t\t\tborder: 1px dashed rgba(110, 193, 228, 0.30);
\t\t\tcolor: var(--ink);
\t\t\tpadding: var(--space-3);
\t\t\tborder-radius: var(--radius);
\t\t\tfont-size: var(--fs-3);
\t\t}
\t\t.quote small {
\t\t\tcolor: var(--muted);
\t\t\tdisplay: block;
\t\t\tmargin-top: var(--space-2);
\t\t}

\t\t/* Footer */
\t\tfooter {
\t\t\tposition: relative;
\t\t\tz-index: 1;
\t\t\tpadding: var(--space-5) 0;
\t\t\tcolor: var(--muted);
\t\t\tborder-top: 1px solid var(--line);
\t\t}

\t\t/* Reveal states */
\t\t.reveal {
\t\t\topacity: 0;
\t\t\ttransform: translateY(12px);
\t\t}
\t\t.reveal.in {
\t\t\topacity: 1;
\t\t\ttransform: translateY(0);
\t\t\ttransition: opacity 600ms cubic-bezier(0.2,.85,0.25,1), transform 600ms cubic-bezier(0.2,.85,0.25,1);
\t\t}

\t\t/* Keyframes for subtle shimmer on headers */
\t\t@keyframes shimmer {
\t\t\t0% {
\t\t\t\ttext-shadow: 0 0 0 rgba(110, 193, 228, 0);
\t\t\t}
\t\t\t50% {
\t\t\t\ttext-shadow: 0 0 18px rgba(110, 193, 228, 0.25);
\t\t\t}
\t\t\t100% {
\t\t\t\ttext-shadow: 0 0 0 rgba(110, 193, 228, 0);
\t\t\t}
\t\t}
\t\t.hero h1 span.spark {
\t\t\tcolor: var(--accent);
\t\t\tanimation: shimmer 5s ease-in-out infinite;
\t\t}
\t</style>
</head>

<body>
\t<div class=\"beams\" aria-hidden=\"true\"></div>

\t<header class=\"hero wrap\">
\t\t<h1 class=\"reveal\">The State of AI in
\t\t\t<span class=\"spark\">Alex Seif’s</span>
\t\t\tCreative Work — 2026</h1>
\t\t<p class=\"kicker reveal\">Cairo-rooted, modular, and ruthlessly responsive. Turning constraints into reusable clarity and animated proof.</p>
\t\t<div class=\"tags reveal\">
\t\t\t<span class=\"tag\">Mobile-first SCSS</span>
\t\t\t<span class=\"tag\">WordPress & WooCommerce</span>
\t\t\t<span class=\"tag\">Symfony + EasyAdmin</span>
\t\t\t<span class=\"tag\">Twig / JS / Doctrine</span>
\t\t\t<span class=\"tag\">Cairo storytelling</span>
\t\t</div>
\t\t<div class=\"cta reveal\" style=\"margin-top: var(--space-4);\">
\t\t\t<a href=\"#skills\" class=\"btn\">Explore skills</a>
\t\t\t<a href=\"#trends\" class=\"btn alt\">See 2026 trends</a>
\t\t</div>
\t</header>

\t<main>
\t\t<section id=\"skills\">
\t\t\t<div class=\"wrap\">
\t\t\t\t<h2 class=\"reveal\">Capabilities anchored in Cairo constraints</h2>
\t\t\t\t<p class=\"lead reveal\">Alex builds elastic interfaces and admin flows that survive heat, flaky AC, and client timelines—clean, scalable, and human.</p>

\t\t\t\t<div class=\"grid cols-3\">
\t\t\t\t\t<article class=\"card\" data-delay=\"0\">
\t\t\t\t\t\t<h3>Modular, mobile-first SCSS</h3>
\t\t\t\t\t\t<p>Never fixed widths. Layouts grow naturally, with tokens and utility classes that make reuse a given, not an afterthought.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Fluid grids</span>
\t\t\t\t\t\t\t<span class=\"chip\">Tokenized spacing</span>
\t\t\t\t\t\t\t<span class=\"chip\">QA overlays</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"card\" data-delay=\"80\">
\t\t\t\t\t\t<h3>WordPress/WooCommerce troubleshooting</h3>
\t\t\t\t\t\t<p>Elementor and block editor friction reframed into lean templates, CSP sanity, and performance-first decisions under real-world pressure.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">CSP fixes</span>
\t\t\t\t\t\t\t<span class=\"chip\">Lean markup</span>
\t\t\t\t\t\t\t<span class=\"chip\">Cart UX</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"card\" data-delay=\"160\">
\t\t\t\t\t\t<h3>Symfony admin flows</h3>
\t\t\t\t\t\t<p>Secure intake, readable dashboards, and Twig-first clarity. Doctrine mapping for analytics-ready payloads and future hooks.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">EasyAdmin</span>
\t\t\t\t\t\t\t<span class=\"chip\">Auth & roles</span>
\t\t\t\t\t\t\t<span class=\"chip\">Email-ready events</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</div>

\t\t\t\t<div class=\"cta\" style=\"margin-top: var(--space-4);\">
\t\t\t\t\t<a href=\"#projects\" class=\"btn\">See projects</a>
\t\t\t\t\t<a href=\"#principles\" class=\"btn alt\">Design principles</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"trends\">
\t\t\t<div class=\"wrap\">
\t\t\t\t<h2 class=\"reveal\">2026 AI trends, reframed for Alex’s workflow</h2>
\t\t\t\t<p class=\"lead reveal\">From “assistive” to “adaptive”—AI moves from novelty to the backbone of clean handoffs, smarter QA, and Cairo-friendly content ops.</p>

\t\t\t\t<div class=\"grid cols-2\">
\t\t\t\t\t<article class=\"card\" data-delay=\"0\">
\t\t\t\t\t\t<h3>Assistive coding to adaptive scaffolding</h3>
\t\t\t\t\t\t<p>Generate the boring bits: CRUD, form bindings, token maps. Keep the human taste for micro-interactions, Cairo color, and storytelling.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Scaffolds</span>
\t\t\t\t\t\t\t<span class=\"chip\">Lint-ready</span>
\t\t\t\t\t\t\t<span class=\"chip\">Testable</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"card\" data-delay=\"80\">
\t\t\t\t\t\t<h3>QA as a social game</h3>
\t\t\t\t\t\t<p>Overlay diffs, timed sprints, playful dares. Turn pixel-perfect checks into momentum, not drudgery.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Diff overlays</span>
\t\t\t\t\t\t\t<span class=\"chip\">Sprint timers</span>
\t\t\t\t\t\t\t<span class=\"chip\">Shareable proofs</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"card\" data-delay=\"160\">
\t\t\t\t\t\t<h3>Local-first intake analytics</h3>
\t\t\t\t\t\t<p>Map full JSON payloads, store locally, sync later. Own the data shape without vendor drama.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Doctrine entities</span>
\t\t\t\t\t\t\t<span class=\"chip\">Event hooks</span>
\t\t\t\t\t\t\t<span class=\"chip\">Export-ready</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"card\" data-delay=\"240\">
\t\t\t\t\t\t<h3>Content ops with Cairo warmth</h3>
\t\t\t\t\t\t<p>AI drafts; Alex adds the blue flower—little, real moments. The final copy feels lived-in, not generic.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Local metaphors</span>
\t\t\t\t\t\t\t<span class=\"chip\">Short loops</span>
\t\t\t\t\t\t\t<span class=\"chip\">Reusable blocks</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"projects\">
\t\t\t<div class=\"wrap\">
\t\t\t\t<h2 class=\"reveal\">Selected projects and micro-proofs</h2>
\t\t\t\t<p class=\"lead reveal\">Small wins stacked: admin clarity, lean storefronts, and playful QA sprints that convert feedback into upgrades.</p>

\t\t\t\t<div class=\"grid cols-2\">
\t\t\t\t\t<article class=\"card\" data-delay=\"0\">
\t\t\t\t\t\t<h3>Clinic intake admin (Symfony)</h3>
\t\t\t\t\t\t<p>Secure auth, human-readable dashboards, custom Twig labels, and export-ready filters. Email hooks queued for future rollout.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Auth flows</span>
\t\t\t\t\t\t\t<span class=\"chip\">Twig renderers</span>
\t\t\t\t\t\t\t<span class=\"chip\">Analytics-ready</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"card\" data-delay=\"80\">
\t\t\t\t\t\t<h3>WooCommerce cart polish</h3>
\t\t\t\t\t\t<p>Markup diet, CSP fixes, and micro-interactions that respect mobile thumbs and Cairo commute attention spans.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Performance</span>
\t\t\t\t\t\t\t<span class=\"chip\">CSP headers</span>
\t\t\t\t\t\t\t<span class=\"chip\">Thumb-friendly</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"card\" data-delay=\"160\">
\t\t\t\t\t\t<h3>Infinite menu loop</h3>
\t\t\t\t\t\t<p>True seamless scrolling with lean DOM, smart clones, and velocity clamps—no jitter, just vibe.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Lean DOM</span>
\t\t\t\t\t\t\t<span class=\"chip\">Velocity clamps</span>
\t\t\t\t\t\t\t<span class=\"chip\">Seamless UX</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>

\t\t\t\t\t<article class=\"card\" data-delay=\"240\">
\t\t\t\t\t\t<h3>QA overlay rituals</h3>
\t\t\t\t\t\t<p>Figma-to-front overlay checks turned into friendly challenges. Proof-first culture with shareable wins.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Overlay diff</span>
\t\t\t\t\t\t\t<span class=\"chip\">Sprint cadence</span>
\t\t\t\t\t\t\t<span class=\"chip\">Proof culture</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"principles\">
\t\t\t<div class=\"wrap\">
\t\t\t\t<h2 class=\"reveal\">Operating principles</h2>
\t\t\t\t<div class=\"grid\">
\t\t\t\t\t<article class=\"card\" data-delay=\"0\">
\t\t\t\t\t\t<h3>Modular or bust</h3>
\t\t\t\t\t\t<p>Everything reusable. Tokens for spacing, color, and type; components that read like a story, not a riddle.</p>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"card\" data-delay=\"80\">
\t\t\t\t\t\t<h3>Performance is kindness</h3>
\t\t\t\t\t\t<p>Fast pages respect human bandwidth. Cairo heat included.</p>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"card\" data-delay=\"160\">
\t\t\t\t\t\t<h3>Proof beats promise</h3>
\t\t\t\t\t\t<p>Deliver visible upgrades—diffs, timings, and before/afters that make trust a default.</p>
\t\t\t\t\t</article>
\t\t\t\t</div>

\t\t\t\t<div style=\"margin-top: var(--space-4);\" class=\"quote reveal\">
\t\t\t\t\t“Blue flowers in Cairo: fragile, rare, and real. That’s the bar for copy, code, and care.”
\t\t\t\t\t<small>— Alex Seif</small>
\t\t\t\t</div>

\t\t\t\t<div class=\"cta\" style=\"margin-top: var(--space-4);\">
\t\t\t\t\t<a href=\"#contact\" class=\"btn\">Collaborate</a>
\t\t\t\t\t<a href=\"#download\" class=\"btn alt\">Download HTML</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"contact\">
\t\t\t<div class=\"wrap\">
\t\t\t\t<h2 class=\"reveal\">Contact & handoff</h2>
\t\t\t\t<p class=\"lead reveal\">Ready for clean handoffs, tight scopes, and momentum. Send a brief; Alex returns a modular plan.</p>
\t\t\t\t<div class=\"grid cols-2\">
\t\t\t\t\t<article class=\"card\" data-delay=\"0\">
\t\t\t\t\t\t<h3>Handoff bundle</h3>
\t\t\t\t\t\t<p>Readable SCSS, component docs, and QA overlay exports. Zero guesswork.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Docs</span>
\t\t\t\t\t\t\t<span class=\"chip\">Tokens</span>
\t\t\t\t\t\t\t<span class=\"chip\">Exports</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"card\" data-delay=\"80\">
\t\t\t\t\t\t<h3>Timeline discipline</h3>
\t\t\t\t\t\t<p>Short sprints and proof checkpoints. Constraints are fuel, not friction.</p>
\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"chip\">Sprints</span>
\t\t\t\t\t\t\t<span class=\"chip\">Checkpoints</span>
\t\t\t\t\t\t\t<span class=\"chip\">Slack time</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>

\t<footer>
\t\t<div class=\"wrap\">
\t\t\t<p>© 2026 — Crafted for Alex Seif. Built as a living report: elastic, animated, and warm.</p>
\t\t</div>
\t</footer>

\t<!-- JS: Intersection-based reveal + staggered card lifts -->
\t<script>
\t\t// Smooth hash scroll
document.querySelectorAll('a[href^=\"#\"]').forEach(a => {
a.addEventListener('click', e => {
const id = a.getAttribute('href').slice(1);
const el = document.getElementById(id);
if (! el) 
return;

e.preventDefault();
el.scrollIntoView({behavior: 'smooth', block: 'start'});
});
});

// Reveal observer for headers and paragraphs
const revealObserver = new IntersectionObserver((entries) => {
entries.forEach(entry => {
if (entry.isIntersecting) {
entry.target.classList.add('in');
revealObserver.unobserve(entry.target);
}
});
}, {threshold: 0.2});

document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

// Card lift with stagger
const cardObserver = new IntersectionObserver((entries) => {
entries.forEach(entry => {
const el = entry.target;
if (entry.isIntersecting) {
const delay = Number(el.dataset.delay || 0);
setTimeout(() => {
el.style.opacity = 1;
el.style.transform = 'translateY(0)';
el.style.transition = 'opacity 600ms cubic-bezier(.2,.85,.25,1), transform 600ms cubic-bezier(.2,.85,.25,1)';
}, delay);
cardObserver.unobserve(el);
}
});
}, {threshold: 0.15});

document.querySelectorAll('.card').forEach(el => cardObserver.observe(el));

// Optional: soft parallax on beams based on mouse
const beams = document.querySelector('.beams');
let tx = 0,
ty = 0,
vx = 0,
vy = 0;
window.addEventListener('mousemove', (e) => {
const x = (e.clientX / window.innerWidth) - 0.5;
const y = (e.clientY / window.innerHeight) - 0.5;
tx = x * 4;
ty = y * 3;
});
function loop() {
vx += (tx - vx) * 0.06;
vy += (ty - vy) * 0.06;
beams.style.transform = `translate(\${vx}px, \${vy}px)`;
requestAnimationFrame(loop);
}
loop();

// Accessibility: reduce motion if user prefers
const mediaQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
if (mediaQuery.matches) { // Disable heavy animations for comfort
document.querySelectorAll('.card').forEach(el => {
el.style.transition = 'none';
el.style.opacity = 1;
el.style.transform = 'none';
});
document.querySelectorAll('.reveal').forEach(el => {
el.style.transition = 'none';
el.classList.add('in');
});
beams.style.transform = 'none';
}
\t</script>
</body></html>
", "ai/chatGpt.html.twig", "/var/www/alexseif.com/templates/ai/chatGpt.html.twig");
    }
}
