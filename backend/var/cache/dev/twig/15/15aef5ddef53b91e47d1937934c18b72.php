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

/* default/about.html.twig */
class __TwigTemplate_d964a6fbcf0de4b9935aeb6b37de1604 extends Template
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
            'nav' => [$this, 'block_nav'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/about.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("alex_seif"), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("web_developer")), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "  <div>
    <section>
      <div>
        <div>
          <div>
            <div>
              <div>
                <span><Award />20 Years of Elite Web Development</span>
              </div>
              <h1>
                Premium Web Solutions
                <span>That Convert</span>
              </h1>
              <p>I craft high-performance digital experiences that resonate with users and algorithms alike. From Symfony backends to WordPress optimizations, I deliver solutions that drive business growth.</p>
              <div>
                <button>Start Your Project<ArrowRight /></button>
                <button>View Portfolio</button>
              </div>
            </div>
            <div>
              <div>
                <img src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/2023-06-22.webp"), "html", null, true);
        yield "\" alt=\"Professional Developer\" />
              </div>
              <div>
                <div>
                  <div>
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                  <div>
                    <p>500+ Projects</p>
                    <p>Delivered Successfully</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div>
              <div>
                <Users />
              </div>
              <h3>Enterprise-Ready</h3>
              <p>Scalable solutions for companies of all sizes</p>
            </div>
            <div>
              <div>
                <Code />
              </div>
              <h3>Full-Stack Mastery</h3>
              <p>PHP, Symfony, WordPress, and DevOps expertise</p>
            </div>
            <div>
              <div>
                <Award />
              </div>
              <h3>SEO Optimized</h3>
              <p>Built to rank and convert from day one</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div>
        <div>
          <h2>Technical Expertise</h2>
          <p>Two decades of mastering cutting-edge technologies to deliver solutions that exceed expectations.</p>
        </div>

        <div>
          ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["expertise"]) || array_key_exists("expertise", $context) ? $context["expertise"] : (function () { throw new RuntimeError('Variable "expertise" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 86
            yield "            <div>
              <div>
                <div>
                  <i data-lucide=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 89), "html", null, true);
            yield "\"></i>
                </div>
                <h3>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 91), "html", null, true);
            yield "</h3>
                <p>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 92), "html", null, true);
            yield "</p>
                <div>
                  ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "technologies", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
                // line 95
                yield "                    <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tech"], "html", null, true);
                yield "</span>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tech'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "                </div>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "        </div>
      </div>
    </section>

    <section>
      <div>
        <div>
          <h2>Proven Track Record</h2>
          <p>Twenty years of delivering exceptional results across industries and company sizes.</p>
        </div>

        <div>
          ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clientTypes"]) || array_key_exists("clientTypes", $context) ? $context["clientTypes"] : (function () { throw new RuntimeError('Variable "clientTypes" does not exist.', 113, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 114
            yield "            <div>
              <div>
                <div>
                  <i data-lucide=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "icon", [], "any", false, false, false, 117), "html", null, true);
            yield "\"></i>
                </div>
                <div>
                  <h3>";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "title", [], "any", false, false, false, 120), "html", null, true);
            yield "</h3>
                  <p>";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "description", [], "any", false, false, false, 121), "html", null, true);
            yield "</p>
                  <div>
                    <span>";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "projects", [], "any", false, false, false, 123), "html", null, true);
            yield "</span>
                    <p>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "highlight", [], "any", false, false, false, 124), "html", null, true);
            yield "</p>
                  </div>
                </div>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "        </div>

        <div>
          <h3>Industries Served</h3>
          <div>
            ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["industries"]) || array_key_exists("industries", $context) ? $context["industries"] : (function () { throw new RuntimeError('Variable "industries" does not exist.', 135, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["industry"]) {
            // line 136
            yield "              <div>
                <p>";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["industry"], "html", null, true);
            yield "</p>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['industry'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        yield "          </div>
        </div>
      </div>
    </section>
    <section>
      <div>
        <div>
          <h2>Proven Track Record</h2>
          <p>Twenty years of delivering exceptional results across industries and company sizes.</p>
        </div>

        <div>
          ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clientTypes"]) || array_key_exists("clientTypes", $context) ? $context["clientTypes"] : (function () { throw new RuntimeError('Variable "clientTypes" does not exist.', 152, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 153
            yield "            <div>
              <div>
                <div>
                  <i data-lucide=\"";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "icon", [], "any", false, false, false, 156), "html", null, true);
            yield "\"></i>
                </div>
                <div>
                  <h3>";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "title", [], "any", false, false, false, 159), "html", null, true);
            yield "</h3>
                  <p>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "description", [], "any", false, false, false, 160), "html", null, true);
            yield "</p>
                  <div>
                    <span>";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "projects", [], "any", false, false, false, 162), "html", null, true);
            yield "</span>
                    <p>";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "highlight", [], "any", false, false, false, 163), "html", null, true);
            yield "</p>
                  </div>
                </div>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        yield "        </div>

        <div>
          <h3>Industries Served</h3>
          <div>
            ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["industries"]) || array_key_exists("industries", $context) ? $context["industries"] : (function () { throw new RuntimeError('Variable "industries" does not exist.', 174, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["industry"]) {
            // line 175
            yield "              <div>
                <p>";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["industry"], "html", null, true);
            yield "</p>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['industry'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        yield "          </div>
        </div>
      </div>
    </section>
    <section>
      <div>
        <div>
          <h2>Client Success Stories</h2>
          <p>Trusted by organizations worldwide to deliver mission-critical web solutions.</p>
        </div>

        <div>
          ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["testimonials"]) || array_key_exists("testimonials", $context) ? $context["testimonials"] : (function () { throw new RuntimeError('Variable "testimonials" does not exist.', 191, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 192
            yield "            <div>
              <div>
                <div>
                  <i data-lucide=\"quote\"></i>
                </div>
              </div>

              <div>
                <div>
                  ";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "rating", [], "any", false, false, false, 201)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 202
                yield "                    <i data-lucide=\"star\"></i>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            yield "                </div>

                <p>\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "content", [], "any", false, false, false, 206), "html", null, true);
            yield "\"</p>

                <div>
                  <img src=\"";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 209), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "author", [], "any", false, false, false, 209), "html", null, true);
            yield "\" />
                  <div>
                    <p>";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "author", [], "any", false, false, false, 211), "html", null, true);
            yield "</p>
                    <p>";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "role", [], "any", false, false, false, 212), "html", null, true);
            yield "</p>
                    <p>";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "company", [], "any", false, false, false, 213), "html", null, true);
            yield "</p>
                  </div>
                </div>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['testimonial'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        yield "        </div>

        <div>
          <div>
            <div>
              <p>500+</p>
              <p>Projects Delivered</p>
            </div>
            <div></div>
            <div>
              <p>98%</p>
              <p>Client Satisfaction</p>
            </div>
            <div></div>
            <div>
              <p>20</p>
              <p>Years Experience</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div>
        <div>
          <h2>Ready to Elevate Your Digital Presence?</h2>
          <p>Let's discuss how I can help you build a solution that drives real business results.</p>
        </div>

        <div>
          <div>
            <h3>Let's Start the Conversation</h3>

            <div>
              <div>
                <div>
                  <i data-lucide=\"mail\"></i>
                </div>
                <div>
                  <h4>Email</h4>
                  <p>hello@yourexpertdeveloper.com</p>
                  <p>Response within 4 hours</p>
                </div>
              </div>

              <div>
                <div>
                  <i data-lucide=\"phone\"></i>
                </div>
                <div>
                  <h4>Phone</h4>
                  <p>+1 (555) 123-4567</p>
                  <p>Available 9 AM - 6 PM EST</p>
                </div>
              </div>

              <div>
                <div>
                  <i data-lucide=\"calendar\"></i>
                </div>
                <div>
                  <h4>Free Consultation</h4>
                  <p>30-minute strategy session</p>
                  <p>Discuss your project goals</p>
                </div>
              </div>
            </div>

            <div>
              <h4>Typical Project Timeline</h4>
              <div>
                <div>
                  <span>Discovery & Planning</span>
                  <span>1-2 weeks</span>
                </div>
                <div>
                  <span>Development & Testing</span>
                  <span>4-12 weeks</span>
                </div>
                <div>
                  <span>Launch & Optimization</span>
                  <span>1-2 weeks</span>
                </div>
              </div>
            </div>
          </div>

          <div>
            <form method=\"POST\">
              <div>
                <div>
                  <label for=\"name\">Full Name *</label>
                  <input type=\"text\" name=\"name\" id=\"name\" required placeholder=\"Your full name\" />
                </div>
                <div>
                  <label for=\"email\">Email Address *</label>
                  <input type=\"email\" name=\"email\" id=\"email\" required placeholder=\"your.email@company.com\" />
                </div>
              </div>

              <div>
                <div>
                  <label for=\"company\">Company</label>
                  <input type=\"text\" name=\"company\" id=\"company\" placeholder=\"Your company name\" />
                </div>
                <div>
                  <label for=\"budget\">Project Budget</label>
                  <select name=\"budget\" id=\"budget\">
                    <option value=\"\">Select budget range</option>
                    ";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["budgetRanges"]) || array_key_exists("budgetRanges", $context) ? $context["budgetRanges"] : (function () { throw new RuntimeError('Variable "budgetRanges" does not exist.', 328, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["range"]) {
            // line 329
            yield "                      <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["range"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["range"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['range'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        yield "                  </select>
                </div>
              </div>

              <div>
                <label for=\"message\">Project Details *</label>
                <textarea name=\"message\" id=\"message\" rows=\"6\" required placeholder=\"Tell me about your project goals, technical requirements, timeline, and any specific challenges you're facing...\"></textarea>
              </div>

              <button type=\"submit\">
                Start Your Project
                <i data-lucide=\"arrow-right\"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div>
        <div>
          <div>
            <div>
              <i data-lucide=\"code\"></i>
            </div>
            <span>Expert Developer</span>
          </div>
          <p>Twenty years of crafting premium web solutions that drive business growth. From Symfony backends to WordPress optimization, I deliver excellence.</p>
          <div>
            <div>
              <i data-lucide=\"mail\"></i>
              <span>hello@yourexpertdeveloper.com</span>
            </div>
            <div>
              <i data-lucide=\"phone\"></i>
              <span>+1 (555) 123-4567</span>
            </div>
            <div>
              <i data-lucide=\"map-pin\"></i>
              <span>Available Worldwide</span>
            </div>
          </div>
        </div>

        <div>
          <h3>Services</h3>
          <ul>
            <li>
              <a href=\"#\">Symfony Development</a>
            </li>
            <li>
              <a href=\"#\">WordPress Optimization</a>
            </li>
            <li>
              <a href=\"#\">DevOps & Security</a>
            </li>
            <li>
              <a href=\"#\">Performance Tuning</a>
            </li>
            <li>
              <a href=\"#\">Technical SEO</a>
            </li>
          </ul>
        </div>

        <div>
          <h3>Industries</h3>
          <ul>
            <li>
              <a href=\"#\">Enterprise Software</a>
            </li>
            <li>
              <a href=\"#\">E-commerce</a>
            </li>
            <li>
              <a href=\"#\">Government</a>
            </li>
            <li>
              <a href=\"#\">Healthcare</a>
            </li>
            <li>
              <a href=\"#\">Financial Services</a>
            </li>
          </ul>
        </div>
      </div>

      <div>
        <div>
          <div>
            <div>© 2024 Expert Developer. All rights reserved.</div>
            <div>
              <a href=\"#\">Privacy Policy</a>
              <a href=\"#\">Terms of Service</a>
            </div>
          </div>
        </div>
      </div>

      <div>
        <div>
          <div>
            AI vibe coded development by
            <a href=\"https://biela.dev/\" target=\"_blank\" rel=\"noopener noreferrer\">Biela.dev</a>, powered by
            <a href=\"https://teachmecode.ae/\" target=\"_blank\" rel=\"noopener noreferrer\">TeachMeCode® Institute</a>
          </div>
        </div>
      </div>
    </footer>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 442
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_announcements(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "announcements"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "announcements"));

        // line 443
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/about.html.twig";
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
        return array (  747 => 443,  734 => 442,  613 => 331,  602 => 329,  598 => 328,  487 => 219,  475 => 213,  471 => 212,  467 => 211,  460 => 209,  454 => 206,  450 => 204,  443 => 202,  439 => 201,  428 => 192,  424 => 191,  410 => 179,  401 => 176,  398 => 175,  394 => 174,  387 => 169,  375 => 163,  371 => 162,  366 => 160,  362 => 159,  356 => 156,  351 => 153,  347 => 152,  333 => 140,  324 => 137,  321 => 136,  317 => 135,  310 => 130,  298 => 124,  294 => 123,  289 => 121,  285 => 120,  279 => 117,  274 => 114,  270 => 113,  256 => 101,  247 => 97,  238 => 95,  234 => 94,  229 => 92,  225 => 91,  220 => 89,  215 => 86,  211 => 85,  156 => 33,  133 => 12,  120 => 11,  108 => 9,  95 => 8,  79 => 3,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
  {{ 'alex_seif'|trans }} - {{ 'web_developer'|trans|capitalize }}
{% endblock %}
{# {% block stylesheets %}
  {{ encore_entry_link_tags('about') }}
{% endblock %} #}
{% block nav %}

{% endblock %}
{% block body %}
  <div>
    <section>
      <div>
        <div>
          <div>
            <div>
              <div>
                <span><Award />20 Years of Elite Web Development</span>
              </div>
              <h1>
                Premium Web Solutions
                <span>That Convert</span>
              </h1>
              <p>I craft high-performance digital experiences that resonate with users and algorithms alike. From Symfony backends to WordPress optimizations, I deliver solutions that drive business growth.</p>
              <div>
                <button>Start Your Project<ArrowRight /></button>
                <button>View Portfolio</button>
              </div>
            </div>
            <div>
              <div>
                <img src=\"{{ asset('build/images/2023-06-22.webp') }}\" alt=\"Professional Developer\" />
              </div>
              <div>
                <div>
                  <div>
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                  <div>
                    <p>500+ Projects</p>
                    <p>Delivered Successfully</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div>
              <div>
                <Users />
              </div>
              <h3>Enterprise-Ready</h3>
              <p>Scalable solutions for companies of all sizes</p>
            </div>
            <div>
              <div>
                <Code />
              </div>
              <h3>Full-Stack Mastery</h3>
              <p>PHP, Symfony, WordPress, and DevOps expertise</p>
            </div>
            <div>
              <div>
                <Award />
              </div>
              <h3>SEO Optimized</h3>
              <p>Built to rank and convert from day one</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div>
        <div>
          <h2>Technical Expertise</h2>
          <p>Two decades of mastering cutting-edge technologies to deliver solutions that exceed expectations.</p>
        </div>

        <div>
          {% for item in expertise %}
            <div>
              <div>
                <div>
                  <i data-lucide=\"{{ item.icon }}\"></i>
                </div>
                <h3>{{ item.title }}</h3>
                <p>{{ item.description }}</p>
                <div>
                  {% for tech in item.technologies %}
                    <span>{{ tech }}</span>
                  {% endfor %}
                </div>
              </div>
            </div>
          {% endfor %}
        </div>
      </div>
    </section>

    <section>
      <div>
        <div>
          <h2>Proven Track Record</h2>
          <p>Twenty years of delivering exceptional results across industries and company sizes.</p>
        </div>

        <div>
          {% for client in clientTypes %}
            <div>
              <div>
                <div>
                  <i data-lucide=\"{{ client.icon }}\"></i>
                </div>
                <div>
                  <h3>{{ client.title }}</h3>
                  <p>{{ client.description }}</p>
                  <div>
                    <span>{{ client.projects }}</span>
                    <p>{{ client.highlight }}</p>
                  </div>
                </div>
              </div>
            </div>
          {% endfor %}
        </div>

        <div>
          <h3>Industries Served</h3>
          <div>
            {% for industry in industries %}
              <div>
                <p>{{ industry }}</p>
              </div>
            {% endfor %}
          </div>
        </div>
      </div>
    </section>
    <section>
      <div>
        <div>
          <h2>Proven Track Record</h2>
          <p>Twenty years of delivering exceptional results across industries and company sizes.</p>
        </div>

        <div>
          {% for client in clientTypes %}
            <div>
              <div>
                <div>
                  <i data-lucide=\"{{ client.icon }}\"></i>
                </div>
                <div>
                  <h3>{{ client.title }}</h3>
                  <p>{{ client.description }}</p>
                  <div>
                    <span>{{ client.projects }}</span>
                    <p>{{ client.highlight }}</p>
                  </div>
                </div>
              </div>
            </div>
          {% endfor %}
        </div>

        <div>
          <h3>Industries Served</h3>
          <div>
            {% for industry in industries %}
              <div>
                <p>{{ industry }}</p>
              </div>
            {% endfor %}
          </div>
        </div>
      </div>
    </section>
    <section>
      <div>
        <div>
          <h2>Client Success Stories</h2>
          <p>Trusted by organizations worldwide to deliver mission-critical web solutions.</p>
        </div>

        <div>
          {% for testimonial in testimonials %}
            <div>
              <div>
                <div>
                  <i data-lucide=\"quote\"></i>
                </div>
              </div>

              <div>
                <div>
                  {% for i in 1..testimonial.rating %}
                    <i data-lucide=\"star\"></i>
                  {% endfor %}
                </div>

                <p>\"{{ testimonial.content }}\"</p>

                <div>
                  <img src=\"{{ testimonial.image }}\" alt=\"{{ testimonial.author }}\" />
                  <div>
                    <p>{{ testimonial.author }}</p>
                    <p>{{ testimonial.role }}</p>
                    <p>{{ testimonial.company }}</p>
                  </div>
                </div>
              </div>
            </div>
          {% endfor %}
        </div>

        <div>
          <div>
            <div>
              <p>500+</p>
              <p>Projects Delivered</p>
            </div>
            <div></div>
            <div>
              <p>98%</p>
              <p>Client Satisfaction</p>
            </div>
            <div></div>
            <div>
              <p>20</p>
              <p>Years Experience</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div>
        <div>
          <h2>Ready to Elevate Your Digital Presence?</h2>
          <p>Let's discuss how I can help you build a solution that drives real business results.</p>
        </div>

        <div>
          <div>
            <h3>Let's Start the Conversation</h3>

            <div>
              <div>
                <div>
                  <i data-lucide=\"mail\"></i>
                </div>
                <div>
                  <h4>Email</h4>
                  <p>hello@yourexpertdeveloper.com</p>
                  <p>Response within 4 hours</p>
                </div>
              </div>

              <div>
                <div>
                  <i data-lucide=\"phone\"></i>
                </div>
                <div>
                  <h4>Phone</h4>
                  <p>+1 (555) 123-4567</p>
                  <p>Available 9 AM - 6 PM EST</p>
                </div>
              </div>

              <div>
                <div>
                  <i data-lucide=\"calendar\"></i>
                </div>
                <div>
                  <h4>Free Consultation</h4>
                  <p>30-minute strategy session</p>
                  <p>Discuss your project goals</p>
                </div>
              </div>
            </div>

            <div>
              <h4>Typical Project Timeline</h4>
              <div>
                <div>
                  <span>Discovery & Planning</span>
                  <span>1-2 weeks</span>
                </div>
                <div>
                  <span>Development & Testing</span>
                  <span>4-12 weeks</span>
                </div>
                <div>
                  <span>Launch & Optimization</span>
                  <span>1-2 weeks</span>
                </div>
              </div>
            </div>
          </div>

          <div>
            <form method=\"POST\">
              <div>
                <div>
                  <label for=\"name\">Full Name *</label>
                  <input type=\"text\" name=\"name\" id=\"name\" required placeholder=\"Your full name\" />
                </div>
                <div>
                  <label for=\"email\">Email Address *</label>
                  <input type=\"email\" name=\"email\" id=\"email\" required placeholder=\"your.email@company.com\" />
                </div>
              </div>

              <div>
                <div>
                  <label for=\"company\">Company</label>
                  <input type=\"text\" name=\"company\" id=\"company\" placeholder=\"Your company name\" />
                </div>
                <div>
                  <label for=\"budget\">Project Budget</label>
                  <select name=\"budget\" id=\"budget\">
                    <option value=\"\">Select budget range</option>
                    {% for range in budgetRanges %}
                      <option value=\"{{ range }}\">{{ range }}</option>
                    {% endfor %}
                  </select>
                </div>
              </div>

              <div>
                <label for=\"message\">Project Details *</label>
                <textarea name=\"message\" id=\"message\" rows=\"6\" required placeholder=\"Tell me about your project goals, technical requirements, timeline, and any specific challenges you're facing...\"></textarea>
              </div>

              <button type=\"submit\">
                Start Your Project
                <i data-lucide=\"arrow-right\"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div>
        <div>
          <div>
            <div>
              <i data-lucide=\"code\"></i>
            </div>
            <span>Expert Developer</span>
          </div>
          <p>Twenty years of crafting premium web solutions that drive business growth. From Symfony backends to WordPress optimization, I deliver excellence.</p>
          <div>
            <div>
              <i data-lucide=\"mail\"></i>
              <span>hello@yourexpertdeveloper.com</span>
            </div>
            <div>
              <i data-lucide=\"phone\"></i>
              <span>+1 (555) 123-4567</span>
            </div>
            <div>
              <i data-lucide=\"map-pin\"></i>
              <span>Available Worldwide</span>
            </div>
          </div>
        </div>

        <div>
          <h3>Services</h3>
          <ul>
            <li>
              <a href=\"#\">Symfony Development</a>
            </li>
            <li>
              <a href=\"#\">WordPress Optimization</a>
            </li>
            <li>
              <a href=\"#\">DevOps & Security</a>
            </li>
            <li>
              <a href=\"#\">Performance Tuning</a>
            </li>
            <li>
              <a href=\"#\">Technical SEO</a>
            </li>
          </ul>
        </div>

        <div>
          <h3>Industries</h3>
          <ul>
            <li>
              <a href=\"#\">Enterprise Software</a>
            </li>
            <li>
              <a href=\"#\">E-commerce</a>
            </li>
            <li>
              <a href=\"#\">Government</a>
            </li>
            <li>
              <a href=\"#\">Healthcare</a>
            </li>
            <li>
              <a href=\"#\">Financial Services</a>
            </li>
          </ul>
        </div>
      </div>

      <div>
        <div>
          <div>
            <div>© 2024 Expert Developer. All rights reserved.</div>
            <div>
              <a href=\"#\">Privacy Policy</a>
              <a href=\"#\">Terms of Service</a>
            </div>
          </div>
        </div>
      </div>

      <div>
        <div>
          <div>
            AI vibe coded development by
            <a href=\"https://biela.dev/\" target=\"_blank\" rel=\"noopener noreferrer\">Biela.dev</a>, powered by
            <a href=\"https://teachmecode.ae/\" target=\"_blank\" rel=\"noopener noreferrer\">TeachMeCode® Institute</a>
          </div>
        </div>
      </div>
    </footer>
  </div>
{% endblock %}
{% block announcements %}

{% endblock %}
{# {% block javascripts %}
  {{ encore_entry_script_tags('about') }}
{% endblock %} #}
", "default/about.html.twig", "/var/www/alexseif.com/templates/default/about.html.twig");
    }
}
