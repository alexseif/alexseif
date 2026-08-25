import Link from "next/link";
import { ArrowLeft, CheckCircle2, ShieldAlert, FileText, Cpu, Terminal, ArrowRight, MessageSquare, Mail } from "lucide-react";
import { Footer } from "@/components/Footer";
import type { Metadata } from "next";

export const metadata: Metadata = {
  title: "Requirements Elicitation & Technical Architecture Consultation | Alex Seif",
  description:
    "Eliminate software failure before writing a single line of code. A rigorous architectural consultation sprint that converts ambiguous business needs into build-ready engineering blueprints.",
  openGraph: {
    title: "Requirements Elicitation & System Architecture Consultation",
    description:
      "Turn ambiguous business goals into deterministic, battle-tested software blueprints before spending budget on development.",
    url: "https://alexseif.com/requirements-elicitation",
  },
};

export default function RequirementsElicitationPage() {
  const jsonLd = {
    "@context": "https://schema.org",
    "@type": "Service",
    name: "Requirements Elicitation & Software Architecture Consultation",
    serviceType: "Technical Architecture Consultation",
    provider: {
      "@type": "Person",
      name: "Alex Seif",
      jobTitle: "Senior Software Architect & Principal Systems Engineer",
      url: "https://alexseif.com",
    },
    description:
      "A structured architectural consultation sprint designed to translate high-level business vision into actionable, deterministic system specifications and data schemas.",
    areaServed: ["Netherlands", "Europe", "Worldwide"],
  };

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
              <Terminal className="h-5 w-5 text-primary" />
              <span className="text-primary text-xs font-mono tracking-[0.35em] uppercase">
                Specialized Diagnostic Sprint
              </span>
            </div>
            <h1 className="text-3xl md:text-5xl font-sans font-light tracking-wide text-foreground leading-tight">
              Requirements Elicitation & System Architecture Consultation
            </h1>
            <p className="text-foreground/80 text-lg md:text-xl font-mono leading-relaxed pt-2">
              Sound architecture decisions help most when the end goal is vague. When your vision is still evolving, we eliminate costly guesswork upfront by establishing decoupled boundaries and clean data foundations that allow your system to adapt without total rewrites.
            </p>
          </section>

          {/* The Problem */}
          <section className="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 items-start">
            <div className="md:col-span-4 space-y-3">
              <div className="flex items-center gap-2 text-primary font-mono text-xs uppercase tracking-wider">
                <ShieldAlert className="h-4 w-4" />
                The Core Reality
              </div>
              <h2 className="text-2xl font-sans font-light tracking-wide text-foreground">
                Architectural Clarity in Uncertain Environments
              </h2>
            </div>
            <div className="md:col-span-8 space-y-6 text-foreground/80 font-mono text-sm md:text-base leading-relaxed">
              <div className="p-5 border-l-2 border-primary bg-primary/5 text-foreground/90 space-y-2">
                <p className="font-semibold text-primary text-xs uppercase tracking-wider font-mono">
                  // The Architecture Paradox
                </p>
                <p className="text-sm md:text-base italic leading-relaxed">
                  "When the final product endpoint is vague or subject to rapid change, rigid technical assumptions are fatal. Sound architecture isolates volatility behind clean contracts and modular abstractions, giving your business the freedom to pivot without re-engineering the core."
                </p>
              </div>
              <p>
                When non-technical stakeholders speak to developers without an architect in the room, critical nuances get lost in translation. Business objectives turn into loose feature wishlists, edge cases are neglected, database schemas are rushed, and scope creep explodes budgets.
              </p>
              <p>
                As a Software Architect with 20+ years of enterprise experience, I conduct structured diagnostic interviews across your team to extract the underlying business logic, map data flows, and specify the architecture before costly development cycles begin.
              </p>
            </div>
          </section>

          {/* The 3-Step Process */}
          <section className="space-y-10">
            <div className="space-y-3">
              <span className="text-primary text-xs font-mono tracking-widest uppercase">
                // The Structured Sprint
              </span>
              <h2 className="text-2xl md:text-3xl font-sans font-light tracking-wide text-foreground">
                How The Consultation Works
              </h2>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-3 gap-px bg-border">
              {/* Step 1 */}
              <div className="bg-background p-8 space-y-5">
                <span className="text-primary text-xs font-mono tracking-widest uppercase">
                  Phase 01
                </span>
                <h3 className="text-xl font-sans font-light text-foreground">
                  Domain & Constraint Elicitation
                </h3>
                <p className="text-foreground/75 font-mono text-sm leading-relaxed">
                  Deep-dive stakeholder sessions to extract the real business workflows, user roles, security boundaries, and SLA requirements.
                </p>
              </div>

              {/* Step 2 */}
              <div className="bg-background p-8 space-y-5">
                <span className="text-primary text-xs font-mono tracking-widest uppercase">
                  Phase 02
                </span>
                <h3 className="text-xl font-sans font-light text-foreground">
                  Schema & Boundary Modeling
                </h3>
                <p className="text-foreground/75 font-mono text-sm leading-relaxed">
                  Relational data modeling (3NF/Star schemas), API payload specifications, asynchronous queue logic, and system topology mapping.
                </p>
              </div>

              {/* Step 3 */}
              <div className="bg-background p-8 space-y-5">
                <span className="text-primary text-xs font-mono tracking-widest uppercase">
                  Phase 03
                </span>
                <h3 className="text-xl font-sans font-light text-foreground">
                  Architecture Blueprint Delivery
                </h3>
                <p className="text-foreground/75 font-mono text-sm leading-relaxed">
                  A comprehensive, turnkey Architecture Decision Record (ADR) and technical specification ready for immediate developer execution.
                </p>
              </div>
            </div>
          </section>

          {/* Tangible Deliverables */}
          <section className="p-8 md:p-12 border border-border bg-card/20 space-y-8 rounded-sm">
            <div className="space-y-2">
              <span className="text-primary text-xs font-mono tracking-widest uppercase">
                // What You Walk Away With
              </span>
              <h2 className="text-2xl md:text-3xl font-sans font-light tracking-wide text-foreground">
                Concrete Engineering Deliverables
              </h2>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
              {[
                {
                  title: "Entity-Relationship & Data Schemas",
                  desc: "Normalized database structures with strict constraint mappings, preventing data corruption and query bottlenecks.",
                },
                {
                  title: "API & Boundary Contracts (OpenAPI)",
                  desc: "Deterministic endpoint definitions, payload structures, authentication paradigms, and third-party integration schemas.",
                },
                {
                  title: "Infrastructure & Security Topology",
                  desc: "Containerized deployment configurations (Docker), network security zoning, backup policies, and disaster recovery specs.",
                },
                {
                  title: "Vendor / Developer RFP Package",
                  desc: "An unambiguous technical brief that enables accurate developer bidding, eliminates scope creep, and enforces QA acceptance gates.",
                },
              ].map((item, idx) => (
                <div key={idx} className="flex items-start gap-4 p-4 border border-border/40 bg-background/50">
                  <CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" />
                  <div className="space-y-1">
                    <h3 className="text-foreground font-sans text-base font-medium">
                      {item.title}
                    </h3>
                    <p className="text-foreground/70 font-mono text-xs leading-relaxed">
                      {item.desc}
                    </p>
                  </div>
                </div>
              ))}
            </div>
          </section>

          {/* Booking & Call to Action */}
          <section className="p-10 md:p-14 border border-primary/40 bg-primary/5 text-center space-y-8 rounded-sm relative overflow-hidden">
            <div className="max-w-2xl mx-auto space-y-4">
              <span className="text-primary text-xs font-mono tracking-[0.3em] uppercase">
                // Initiate Diagnostic Sprint
              </span>
              <h2 className="text-2xl md:text-4xl font-sans font-light tracking-wide text-foreground">
                Validate Your Architecture Before You Build
              </h2>
              <p className="text-foreground/80 font-mono text-sm md:text-base leading-relaxed">
                Whether you are starting a high-stakes new build, decoupling a fragile legacy system, or seeking vendor oversight, let's establish the architectural truth upfront.
              </p>
            </div>

            <div className="flex flex-wrap items-center justify-center gap-4 pt-4">
              <a
                href="mailto:alex.seif@gmail.com?subject=Requirements%20Elicitation%20Consultation%20Inquiry"
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
