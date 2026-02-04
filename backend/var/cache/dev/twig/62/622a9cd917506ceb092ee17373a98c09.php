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

/* base/_seo_schema.twig */
class __TwigTemplate_2bf2837f19ef83a781f4f10262efd0bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/_seo_schema.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/_seo_schema.twig"));

        // line 1
        yield "<script type=\"application/ld+json\">
\t{
\t  \"@context\": \"https://schema.org\",
\t  \"@graph\": [
\t    {
\t      \"@id\": \"#person\",
\t      \"@type\": \"Person\",
\t      \"name\": \"Alex Seif\",
\t      \"jobTitle\": \"Website Consultant for Clinics\",
\t      \"sameAs\": []
\t    },
\t    {
\t      \"@id\": \"#organization\",
\t      \"@type\": \"Organization\",
\t      \"name\": \"Alex Seif\",
\t      \"founder\": {
\t        \"@id\": \"#person\"
\t      },
\t      \"areaServed\": {
\t        \"@type\": \"Country\",
\t        \"name\": \"Egypt\"
\t      },
\t      \"hasOfferCatalog\": {
\t        \"@type\": \"OfferCatalog\",
\t        \"name\": \"Website Care for Clinics\",
\t        \"itemListElement\": [
\t          {
\t            \"@type\": \"Offer\",
\t            \"itemOffered\": {
\t              \"@id\": \"#service-website-care\"
\t            }
\t          },
\t          {
\t            \"@type\": \"Offer\",
\t            \"itemOffered\": {
\t              \"@id\": \"#service-website-builds\"
\t            }
\t          }
\t        ]
\t      }
\t    },
\t    {
\t      \"@id\": \"#service-website-care\",
\t      \"@type\": \"Service\",
\t      \"name\": \"Website Care for Clinics\",
\t      \"provider\": {
\t        \"@id\": \"#organization\"
\t      },
\t      \"serviceType\": \"Website Care for Clinics\",
\t      \"areaServed\": {
\t        \"@type\": \"Country\",
\t        \"name\": \"Egypt\"
\t      },
\t      \"offers\": {
\t        \"@type\": \"Offer\",
\t        \"price\": \"2500\",
\t        \"priceCurrency\": \"EGP\",
\t        \"billingIncrement\": \"Monthly\"
\t      }
\t    },
\t    {
\t      \"@id\": \"#service-website-builds\",
\t      \"@type\": \"Service\",
\t      \"name\": \"Clinic Website Builds\",
\t      \"provider\": {
\t        \"@id\": \"#organization\"
\t      },
\t      \"serviceType\": \"Clinic Website Builds\",
\t      \"areaServed\": {
\t        \"@type\": \"Country\",
\t        \"name\": \"Egypt\"
\t      },
\t      \"offers\": [
\t        {
\t          \"@type\": \"Offer\",
\t          \"name\": \"Web Vitals Diagnostic\",
\t          \"price\": \"9000\",
\t          \"priceCurrency\": \"EGP\"
\t        },
\t        {
\t          \"@type\": \"Offer\",
\t          \"name\": \"Clinic Website Build\",
\t          \"price\": \"18000\",
\t          \"priceCurrency\": \"EGP\",
\t          \"priceSpecification\": {
\t            \"@type\": \"UnitPriceSpecification\",
\t            \"price\": \"18000\",
\t            \"priceCurrency\": \"EGP\",
\t            \"valueAddedTaxIncluded\": true
\t          }
\t        }
\t      ]
\t    },
\t    {
\t      \"@id\": \"#faqpage\",
\t      \"@type\": \"FAQPage\",
\t      \"mainEntity\": [
\t        {
\t          \"@type\": \"Question\",
\t          \"name\": \"What is included in Website Care for Clinics?\",
\t          \"acceptedAnswer\": {
\t            \"@type\": \"Answer\",
\t            \"text\": \"Website monitoring, fixing broken forms and links, security updates, backups and recovery, minor content edits, and support during campaigns and ads.\"
\t          }
\t        },
\t        {
\t          \"@type\": \"Question\",
\t          \"name\": \"How much is Website Care?\",
\t          \"acceptedAnswer\": {
\t            \"@type\": \"Answer\",
\t            \"text\": \"Website Care starts from EGP 2,500 per month. Hosting is billed separately if needed.\"
\t          }
\t        },
\t        {
\t          \"@type\": \"Question\",
\t          \"name\": \"Do you build new clinic websites?\",
\t          \"acceptedAnswer\": {
\t            \"@type\": \"Answer\",
\t            \"text\": \"Yes. If your current website can't be fixed, I can build a clean, fast clinic website designed to turn visitors into real inquiries. Assessments start at EGP 9,000 and builds from EGP 18,000.\"
\t          }
\t        },
\t        {
\t          \"@type\": \"Question\",
\t          \"name\": \"Who will I be dealing with?\",
\t          \"acceptedAnswer\": {
\t            \"@type\": \"Answer\",
\t            \"text\": \"You deal directly with me, Alex. I've been building and maintaining websites for over 20 years and stay responsible for keeping things working.\"
\t          }
\t        },
\t        {
\t          \"@type\": \"Question\",
\t          \"name\": \"Is there any commitment to start?\",
\t          \"acceptedAnswer\": {
\t            \"@type\": \"Answer\",
\t            \"text\": \"No. Start with a short clinic intake. I'll review your situation and tell you honestly what makes sense—no obligation or hard selling.\"
\t          }
\t        }
\t      ]
\t    }
\t  ]
\t}
</script>
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
        return "base/_seo_schema.twig";
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
        return new Source("<script type=\"application/ld+json\">
\t{
\t  \"@context\": \"https://schema.org\",
\t  \"@graph\": [
\t    {
\t      \"@id\": \"#person\",
\t      \"@type\": \"Person\",
\t      \"name\": \"Alex Seif\",
\t      \"jobTitle\": \"Website Consultant for Clinics\",
\t      \"sameAs\": []
\t    },
\t    {
\t      \"@id\": \"#organization\",
\t      \"@type\": \"Organization\",
\t      \"name\": \"Alex Seif\",
\t      \"founder\": {
\t        \"@id\": \"#person\"
\t      },
\t      \"areaServed\": {
\t        \"@type\": \"Country\",
\t        \"name\": \"Egypt\"
\t      },
\t      \"hasOfferCatalog\": {
\t        \"@type\": \"OfferCatalog\",
\t        \"name\": \"Website Care for Clinics\",
\t        \"itemListElement\": [
\t          {
\t            \"@type\": \"Offer\",
\t            \"itemOffered\": {
\t              \"@id\": \"#service-website-care\"
\t            }
\t          },
\t          {
\t            \"@type\": \"Offer\",
\t            \"itemOffered\": {
\t              \"@id\": \"#service-website-builds\"
\t            }
\t          }
\t        ]
\t      }
\t    },
\t    {
\t      \"@id\": \"#service-website-care\",
\t      \"@type\": \"Service\",
\t      \"name\": \"Website Care for Clinics\",
\t      \"provider\": {
\t        \"@id\": \"#organization\"
\t      },
\t      \"serviceType\": \"Website Care for Clinics\",
\t      \"areaServed\": {
\t        \"@type\": \"Country\",
\t        \"name\": \"Egypt\"
\t      },
\t      \"offers\": {
\t        \"@type\": \"Offer\",
\t        \"price\": \"2500\",
\t        \"priceCurrency\": \"EGP\",
\t        \"billingIncrement\": \"Monthly\"
\t      }
\t    },
\t    {
\t      \"@id\": \"#service-website-builds\",
\t      \"@type\": \"Service\",
\t      \"name\": \"Clinic Website Builds\",
\t      \"provider\": {
\t        \"@id\": \"#organization\"
\t      },
\t      \"serviceType\": \"Clinic Website Builds\",
\t      \"areaServed\": {
\t        \"@type\": \"Country\",
\t        \"name\": \"Egypt\"
\t      },
\t      \"offers\": [
\t        {
\t          \"@type\": \"Offer\",
\t          \"name\": \"Web Vitals Diagnostic\",
\t          \"price\": \"9000\",
\t          \"priceCurrency\": \"EGP\"
\t        },
\t        {
\t          \"@type\": \"Offer\",
\t          \"name\": \"Clinic Website Build\",
\t          \"price\": \"18000\",
\t          \"priceCurrency\": \"EGP\",
\t          \"priceSpecification\": {
\t            \"@type\": \"UnitPriceSpecification\",
\t            \"price\": \"18000\",
\t            \"priceCurrency\": \"EGP\",
\t            \"valueAddedTaxIncluded\": true
\t          }
\t        }
\t      ]
\t    },
\t    {
\t      \"@id\": \"#faqpage\",
\t      \"@type\": \"FAQPage\",
\t      \"mainEntity\": [
\t        {
\t          \"@type\": \"Question\",
\t          \"name\": \"What is included in Website Care for Clinics?\",
\t          \"acceptedAnswer\": {
\t            \"@type\": \"Answer\",
\t            \"text\": \"Website monitoring, fixing broken forms and links, security updates, backups and recovery, minor content edits, and support during campaigns and ads.\"
\t          }
\t        },
\t        {
\t          \"@type\": \"Question\",
\t          \"name\": \"How much is Website Care?\",
\t          \"acceptedAnswer\": {
\t            \"@type\": \"Answer\",
\t            \"text\": \"Website Care starts from EGP 2,500 per month. Hosting is billed separately if needed.\"
\t          }
\t        },
\t        {
\t          \"@type\": \"Question\",
\t          \"name\": \"Do you build new clinic websites?\",
\t          \"acceptedAnswer\": {
\t            \"@type\": \"Answer\",
\t            \"text\": \"Yes. If your current website can't be fixed, I can build a clean, fast clinic website designed to turn visitors into real inquiries. Assessments start at EGP 9,000 and builds from EGP 18,000.\"
\t          }
\t        },
\t        {
\t          \"@type\": \"Question\",
\t          \"name\": \"Who will I be dealing with?\",
\t          \"acceptedAnswer\": {
\t            \"@type\": \"Answer\",
\t            \"text\": \"You deal directly with me, Alex. I've been building and maintaining websites for over 20 years and stay responsible for keeping things working.\"
\t          }
\t        },
\t        {
\t          \"@type\": \"Question\",
\t          \"name\": \"Is there any commitment to start?\",
\t          \"acceptedAnswer\": {
\t            \"@type\": \"Answer\",
\t            \"text\": \"No. Start with a short clinic intake. I'll review your situation and tell you honestly what makes sense—no obligation or hard selling.\"
\t          }
\t        }
\t      ]
\t    }
\t  ]
\t}
</script>
", "base/_seo_schema.twig", "/var/www/alexseif.com/templates/base/_seo_schema.twig");
    }
}
