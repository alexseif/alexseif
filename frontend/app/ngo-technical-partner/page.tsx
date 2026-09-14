import Link from "next/link";
import {
  ArrowLeft,
  CheckCircle2,
  FileCheck,
  ShieldCheck,
  Lock,
  Clock,
  ArrowRight,
  MessageSquare,
  Mail,
  Landmark,
  ExternalLink,
} from "lucide-react";
import { Footer } from "@/components/Footer";
import type { Metadata } from "next";

export const metadata: Metadata = {
  title: "NGO & Institutional Technical Partner | Alex Seif",
  description:
    "Hands-on architectural governance and technical ownership for international development, donor transparency portals, and civic platforms complying with UN, EU, and GIZ standards.",
  openGraph: {
    title: "NGO & Institutional Technical Partner | Alex Seif",
    description:
      "Direct architectural governance for donor reporting, multilingual data sovereignty, and independent vendor oversight without agency overhead.",
    url: "https://alexseif.com/ngo-technical-partner",
  },
};

export default function NGOPartnerPage() {
  const jsonLd = {
    "@context": "https://schema.org",
    "@type": "Service",
    name: "NGO & Institutional Platforms Technical Governance",
    serviceType: "Technical Architecture & Governance Retainer",
    provider: {
      "@type": "Person",
      name: "Alex Seif",
      jobTitle: "Software Architect | Full-Stack Engineer",
      url: "https://alexseif.com",
    },
    description:
      "Architectural governance and hands-on technical ownership for international development programs, public sector accountability portals, and NGO digital systems.",
    areaServed: ["Netherlands", "Europe", "Worldwide"],
  };

  const pillars = [
    {
      icon: FileCheck,
      title: "Donor & Transparency Portals",
      desc: "High-integrity web platforms built to meet strict UN, GIZ, and EU institutional reporting standards. We design verifiable public dashboards and automated audit trails that ensure complete donor accountability.",
    },
    {
      icon: ShieldCheck,
      title: "Agency & Vendor Oversight",
      desc: "Independent technical review of third-party software deliverables. I audit external codebases, validate database schemas, and enforce QA standards before sign-off, protecting your program from vendor lock-in.",
    },
    {
      icon: Lock,
      title: "Data Sovereignty & Security",
      desc: "Multilingual systems engineered with strict data isolation, GDPR compliance, and perimeter security zoning. Secure sensitive civic data across regional jurisdictions with zero data leaks.",
    },
    {
      icon: Clock,
      title: "Technical Retainer & Continuity",
      desc: "Direct architectural ownership and on-call engineering availability for critical cutovers. Long-term system stewardship prevents technical debt and bit rot across multi-year grant cycles.",
    },
  ];

  const deliverables = [
    {
      title: "Institutional Donor Compliance Audit",
      desc: "Comprehensive evaluation of existing data schemas and reporting workflows against UN, EU, and GIZ compliance mandates.",
    },
    {
      title: "Multilingual Data Model Standardization",
      desc: "Decoupled localization architectures that prevent metadata corruption and ensure character integrity across RTL (Arabic) and LTR scripts.",
    },
    {
      title: "Vendor SLA & Code Quality Gates",
      desc: "Deterministic acceptance criteria, automated test suites, and strict pull-request reviews for external development contracts.",
    },
    {
      title: "Zero-Downtime Infrastructure Migration",
      desc: "Safe database cutovers, cloud server hardening, and containerized deployments with rollback protections for active civic portals.",
    },
  ];

  return (
    <>
      <script
        type="application/ld+json"
        dangerouslySetInnerHTML={{ __html: JSON.stringify(jsonLd) }}
      />
      <main className="min-h-screen bg-background blueprint-grid selection:bg-primary/20 selection:text-primary">
        <div className="max-w-6xl mx-auto px-6 py-12 md:py-24 space-y-20">
          {/* Navigation */}
          <div>
            <Link
              href="/"
              className="inline-flex items-center gap-2 text-foreground/50 hover:text-primary font-mono text-xs uppercase tracking-widest transition-colors group"
            >
              <ArrowLeft className="h-4 w-4 group-hover:-translate-x-1 transition-transform" />
              Return to Core
            </Link>
          </div>

          {/* Hero Header */}
          <section className="space-y-6 max-w-4xl border-b border-border/50 pb-12">
            <div className="flex items-center gap-3">
              <Landmark className="h-5 w-5 text-primary" />
              <span className="text-primary text-xs font-mono tracking-[0.35em] uppercase">
                Institutional & Civic Platforms
              </span>
            </div>
            <h1 className="text-3xl md:text-5xl font-sans font-light tracking-wide text-foreground leading-tight">
              NGO Technical Partner & Institutional Architecture
            </h1>
            <p className="text-foreground/80 text-lg md:text-xl font-mono leading-relaxed pt-2">
              Transparency portals, donor reporting dashboards, and civic platforms require dedicated technical governance. I provide hands-on architectural ownership: ensuring multilingual data sovereignty, institutional donor compliance, and vendor accountability without digital agency overhead.
            </p>
          </section>

          {/* The Core Challenge */}
          <section className="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 items-start">
            <div className="md:col-span-4 space-y-3">
              <div className="flex items-center gap-2 text-primary font-mono text-xs uppercase tracking-wider">
                <ShieldCheck className="h-4 w-4" />
                The Governance Gap
              </div>
              <h2 className="text-2xl font-sans font-light tracking-wide text-foreground">
                Why Civic Systems Require Independent Architecture
              </h2>
            </div>
            <div className="md:col-span-8 space-y-6 text-foreground/80 font-mono text-sm md:text-base leading-relaxed">
              <div className="p-5 border-l-2 border-primary bg-primary/5 text-foreground/90 space-y-2">
                <p className="font-semibold text-primary text-xs uppercase tracking-wider font-mono">
                  // The Institutional Dilemma
                </p>
                <p className="text-sm md:text-base italic leading-relaxed">
                  "Non-profit initiatives and international agencies often inherit fragmented digital platforms built by multiple external agencies. Without in-house technical leadership, systems suffer from un-indexed databases, postmeta corruption, security vulnerabilities, and vendor lock-in that jeopardize donor trust."
                </p>
              </div>
              <p>
                Serving institutional donors like UN agencies, GIZ, and the European Union demands strict accountability. When teams lack a dedicated Software Architect, simple feature additions introduce data regressions, faceted search queries slow to a crawl, and compliance audits become administrative nightmares.
              </p>
              <p>
                With 20+ years of production engineering experience, I step into international development projects as an embedded technical partner. I evaluate third-party code, refactor damaged schemas, and enforce robust engineering standards so your leadership can focus on mission impact.
              </p>
            </div>
          </section>

          {/* 4 Governance Pillars */}
          <section className="space-y-10">
            <div className="space-y-3">
              <span className="text-primary text-xs font-mono tracking-widest uppercase">
                // Four Pillars of Technical Stewardship
              </span>
              <h2 className="text-2xl md:text-3xl font-sans font-light tracking-wide text-foreground">
                How We Protect Your Digital Infrastructure
              </h2>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
              {pillars.map((pillar, index) => (
                <div
                  key={index}
                  className="p-8 border border-border/50 bg-card/20 space-y-4 rounded-sm hover:border-primary/40 transition-colors"
                >
                  <div className="h-12 w-12 bg-primary/10 flex items-center justify-center rounded-sm border border-primary/20">
                    <pillar.icon className="h-6 w-6 text-primary" />
                  </div>
                  <h3 className="text-foreground font-sans text-xl font-light tracking-wide">
                    {pillar.title}
                  </h3>
                  <p className="text-foreground/75 font-mono text-sm leading-relaxed">
                    {pillar.desc}
                  </p>
                </div>
              ))}
            </div>
          </section>

          {/* Concrete Deliverables */}
          <section className="p-8 md:p-12 border border-border bg-card/20 space-y-8 rounded-sm">
            <div className="space-y-2">
              <span className="text-primary text-xs font-mono tracking-widest uppercase">
                // Practical Deliverables
              </span>
              <h2 className="text-2xl md:text-3xl font-sans font-light tracking-wide text-foreground">
                What Your Program Receives
              </h2>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
              {deliverables.map((item, idx) => (
                <div
                  key={idx}
                  className="flex items-start gap-4 p-4 border border-border/40 bg-background/50"
                >
                  <CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" />
                  <div className="space-y-1">
                    <h4 className="text-foreground font-sans text-base font-medium">
                      {item.title}
                    </h4>
                    <p className="text-foreground/70 font-mono text-xs leading-relaxed">
                      {item.desc}
                    </p>
                  </div>
                </div>
              ))}
            </div>
          </section>

          {/* Case Study Spotlight: NSCE */}
          <section className="p-8 md:p-10 border border-primary/30 bg-primary/5 rounded-sm space-y-6">
            <div className="space-y-2">
              <span className="text-primary text-xs font-mono tracking-widest uppercase">
                // Empirical Proof
              </span>
              <h3 className="text-foreground text-xl md:text-2xl font-sans font-light tracking-wide">
                Case Study: North South Consultants Exchange (NSCE)
              </h3>
            </div>
            <p className="text-foreground/80 font-mono text-sm md:text-base leading-relaxed">
              NSCE is an international development consultancy tracking complex regional aid programs funded by UN agencies, GIZ, and the EU. Retained as Full-Stack Engineer and Architect to resolve widespread multilingual metadata corruption, decouple translation keys, and eliminate postmeta full-table scans with composite indexes.
            </p>
            <div>
              <Link
                href="/case-studies/2025-nsce"
                className="inline-flex items-center gap-2 text-primary hover:text-primary/80 font-mono text-xs tracking-widest uppercase font-medium group"
              >
                Read Full NSCE Case Study
                <ExternalLink className="h-3.5 w-3.5 group-hover:translate-x-0.5 transition-transform" />
              </Link>
            </div>
          </section>

          {/* Booking & Call to Action */}
          <section className="p-10 md:p-14 border border-primary/40 bg-primary/5 text-center space-y-8 rounded-sm relative overflow-hidden">
            <div className="max-w-2xl mx-auto space-y-4">
              <span className="text-primary text-xs font-mono tracking-[0.3em] uppercase">
                // Direct Architectural Engagement
              </span>
              <h2 className="text-2xl md:text-4xl font-sans font-light tracking-wide text-foreground">
                Discuss Your Platform or Program
              </h2>
              <p className="text-foreground/80 font-mono text-sm md:text-base leading-relaxed">
                Whether you are launching a new donor portal, conducting vendor oversight, or preparing for an institutional audit, let's ensure your platform is built for lasting reliability.
              </p>
            </div>

            <div className="flex flex-wrap items-center justify-center gap-4 pt-4">
              <a
                href="mailto:alex.seif@gmail.com?subject=NGO%20Technical%20Partner%20Inquiry"
                className="inline-flex items-center gap-2 bg-primary text-primary-foreground hover:bg-primary/90 transition-all font-mono text-xs tracking-widest uppercase px-8 py-4 rounded-sm shadow-md group"
              >
                <Mail className="h-4 w-4" />
                Schedule Consultation via Email
                <ArrowRight className="h-3.5 w-3.5 group-hover:translate-x-1 transition-transform" />
              </a>

              <a
                href="https://wa.me/201004006332"
                target="_blank"
                rel="noopener noreferrer"
                className="inline-flex items-center gap-2 bg-background border border-primary/30 text-foreground hover:border-primary transition-all font-mono text-xs tracking-widest uppercase px-8 py-4 rounded-sm shadow-sm"
              >
                <MessageSquare className="h-4 w-4 text-primary" />
                Direct WhatsApp
              </a>
            </div>
          </section>
        </div>
      </main>
      <Footer />
    </>
  );
}
