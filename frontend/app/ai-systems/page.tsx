import Link from "next/link";
import {
  ArrowLeft,
  CheckCircle2,
  ShieldCheck,
  Cpu,
  Database,
  Bot,
  Zap,
  Lock,
  ArrowRight,
  MessageSquare,
  Mail,
  Layers,
  Scale,
} from "lucide-react";
import { Footer } from "@/components/Footer";
import type { Metadata } from "next";

export const metadata: Metadata = {
  title: "Enterprise AI Architecture & Agentic Systems | Alex Seif",
  description:
    "Production-grade RAG pipelines, autonomous agentic workflows, and privacy-first AI systems engineered with strict data sovereignty, deterministic execution, and zero downtime.",
  openGraph: {
    title: "Enterprise AI Architecture & Agentic Systems | Alex Seif",
    description:
      "Bridge 20 years of database normalization and distributed systems with modern agentic AI and verifiable RAG pipelines.",
    url: "https://alexseif.com/ai-systems",
  },
};

export default function AISystemsPage() {
  const jsonLd = {
    "@context": "https://schema.org",
    "@type": "Service",
    name: "Enterprise AI Architecture & Agentic Systems",
    serviceType: "Enterprise AI Architecture & Production Engineering",
    provider: {
      "@type": "Person",
      name: "Alex Seif",
      jobTitle: "Software Architect | Full-Stack Engineer",
      url: "https://alexseif.com",
    },
    description:
      "Production-grade RAG pipelines, autonomous agentic workflows, and privacy-first AI systems engineered with strict data sovereignty and deterministic execution.",
    areaServed: ["Netherlands", "Europe", "Worldwide"],
  };

  const pitfalls = [
    {
      icon: Lock,
      title: "Data Sovereignty & Model Exposure",
      desc: "Sending proprietary enterprise or citizen data to public model endpoints creates catastrophic compliance risks under GDPR, the EU AI Act, and institutional donor mandates.",
    },
    {
      icon: Scale,
      title: "Probabilistic Non-Determinism",
      desc: "Naive prompt wrappers produce hallucinations and inconsistent output schemas that break downstream transactional databases and operational software.",
    },
    {
      icon: Zap,
      title: "Token Runaway & Latency Spikes",
      desc: "Unoptimized context windows and naive multi-agent loops cause exponential token cost inflation and multi-second request latency that degrades production UX.",
    },
    {
      icon: Layers,
      title: "Brittle Prototype Debt",
      desc: "Demo-grade LangChain or notebook scripts lack retry logic, circuit breakers, semantic caching, and regression evals required for real-world enterprise uptime.",
    },
  ];

  const pillars = [
    {
      icon: Database,
      badge: "Private Intelligence",
      title: "Data-Sovereign RAG & Knowledge Systems",
      desc: "Enterprise retrieval-augmented generation built on PostgreSQL with pgvector, hybrid dense/sparse search, and local or private VPC LLMs. Engineered with strict role-based document access controls (RBAC) and zero data leakage to public model training sets.",
      tags: ["PostgreSQL / pgvector", "Hybrid Search", "Local & VPC LLMs", "Strict RBAC"],
    },
    {
      icon: Bot,
      badge: "Autonomous Execution",
      title: "Deterministic Agentic Automation & ETL",
      desc: "Persistent multi-agent task loops that execute complex multi-step business logic, data harvesting, AST code transformations, and unstructured-to-structured document ingestion without manual human bottlenecking.",
      tags: ["Multi-Agent Loops", "AST Parsers", "Headless Scrapers", "Task Orchestration"],
    },
    {
      icon: Cpu,
      badge: "Diagnostic Sprint",
      title: "AI Architecture Feasibility Sprint",
      desc: "A 1-to-2 week fixed-scope architectural audit. We analyze your data readiness, benchmark token economics, validate privacy boundaries, and deliver a turnkey Architecture Decision Record (ADR) before you commit capital to development.",
      tags: ["Feasibility Audit", "Token Economics", "Privacy Review", "Turnkey ADR Blueprint"],
    },
    {
      icon: Zap,
      badge: "Production Hardening",
      title: "AI Production Hardening & Token Tuning",
      desc: "Rescuing and stabilizing fragile AI prototypes. We implement semantic caching layers, automated eval harnesses, fallback routing, and token optimization strategies that reduce API overhead by 40% to 70% while restoring sub-second response times.",
      tags: ["Semantic Caching", "Eval Harnesses", "Latency Reduction", "40-70% Cost Cut"],
    },
  ];

  const processSteps = [
    {
      phase: "Phase 01",
      title: "Data Readiness & Threat Modeling",
      desc: "Evaluating source documents, privacy boundaries, compliance exposure, and retrieval volume to establish non-negotiable architectural constraints.",
    },
    {
      phase: "Phase 02",
      title: "Schema & Boundary Orchestration",
      desc: "Designing vector schemas, embedding strategies, chunking heuristics, agentic state machines, and API contracts before code execution.",
    },
    {
      phase: "Phase 03",
      title: "Hardened Production Delivery & Evals",
      desc: "Deploying resilient services with automated regression evals, token monitoring, semantic caching, and graceful failure fallbacks.",
    },
  ];

  const deliverables = [
    {
      title: "Zero-Leakage Vector Storage",
      desc: "Self-hosted or VPC-isolated vector databases with deterministic indexing and strict tenant data isolation.",
    },
    {
      title: "Deterministic Structured Outputs",
      desc: "Strict JSON schema enforcement and Pydantic validation pipelines ensuring zero broken API payloads.",
    },
    {
      title: "Regression Eval Harnesses",
      desc: "Automated ground-truth test suites preventing model drift, regression, or hallucination in production.",
    },
    {
      title: "Token & Latency Observability",
      desc: "Real-time tracking of token expenditure, per-step latency, and semantic cache hit rates across all agentic paths.",
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
              className="inline-flex items-center gap-2 text-foreground hover:text-primary font-mono text-xs uppercase tracking-widest transition-colors group"
            >
              <ArrowLeft className="h-4 w-4 group-hover:-translate-x-1 transition-transform" />
              Return to Core
            </Link>
          </div>

          {/* Hero Header */}
          <section className="space-y-6 max-w-4xl border-b border-border/50 pb-12">
            <div className="flex items-center gap-3">
              <Cpu className="h-5 w-5 text-primary" />
              <span className="text-primary text-xs font-mono tracking-[0.35em] uppercase">
                // Deterministic AI Engineering
              </span>
            </div>
            <h1 className="text-3xl md:text-5xl font-sans font-light tracking-wide text-foreground leading-tight">
              Enterprise AI Architecture & Agentic Systems
            </h1>
            <p className="text-foreground text-lg md:text-xl font-mono leading-relaxed pt-2">
              Moving beyond fragile prototypes. Bridging 20 years of database normalization, high-concurrency routing, and air-gapped infrastructure with modern agentic execution and verifiable RAG pipelines.
            </p>
          </section>

          {/* The Problem / Reality Check */}
          <section className="space-y-10">
            <div className="space-y-3">
              <span className="text-primary text-xs font-mono tracking-widest uppercase">
                // The Operational Reality
              </span>
              <h2 className="text-2xl md:text-3xl font-sans font-light tracking-wide text-foreground">
                Where AI Prototypes Fail In Production
              </h2>
              <p className="text-foreground font-mono text-sm max-w-2xl leading-relaxed">
                Building a demo takes an afternoon. Building a production AI system that survives hostile data, regulatory audits, and peak load requires rigorous systems architecture.
              </p>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
              {pitfalls.map((item, idx) => {
                const IconComponent = item.icon;
                return (
                  <div
                    key={idx}
                    className="p-8 border border-border/50 bg-background/60 rounded-sm space-y-4 hover:border-primary/40 transition-colors"
                  >
                    <div className="flex items-center gap-3">
                      <IconComponent className="h-5 w-5 text-primary" />
                      <h3 className="text-foreground font-sans text-lg font-light tracking-wide">
                        {item.title}
                      </h3>
                    </div>
                    <p className="text-foreground font-mono text-sm leading-relaxed">
                      {item.desc}
                    </p>
                  </div>
                );
              })}
            </div>
          </section>

          {/* The 4 Core Offerings */}
          <section className="space-y-10">
            <div className="space-y-3">
              <span className="text-primary text-xs font-mono tracking-widest uppercase">
                // Specialized AI Offerings
              </span>
              <h2 className="text-2xl md:text-3xl font-sans font-light tracking-wide text-foreground">
                Engineered For Determinism & Scale
              </h2>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
              {pillars.map((pillar, idx) => {
                const IconComponent = pillar.icon;
                return (
                  <div
                    key={idx}
                    className="p-8 md:p-10 border border-border/50 bg-background/60 rounded-sm flex flex-col justify-between space-y-6 hover:border-primary/40 transition-colors"
                  >
                    <div className="space-y-4">
                      <div className="flex items-center justify-between">
                        <div className="flex items-center gap-2">
                          <IconComponent className="h-4 w-4 text-primary" />
                          <span className="text-primary text-xs font-mono tracking-widest uppercase">
                            {pillar.badge}
                          </span>
                        </div>
                      </div>
                      <h3 className="text-foreground text-xl md:text-2xl font-sans font-light tracking-wide">
                        {pillar.title}
                      </h3>
                      <p className="text-foreground text-sm md:text-base font-mono leading-relaxed">
                        {pillar.desc}
                      </p>
                    </div>

                    <div className="pt-4 flex flex-wrap gap-2 border-t border-border/40">
                      {pillar.tags.map((tag) => (
                        <span
                          key={tag}
                          className="text-xs text-primary font-mono border border-primary/20 bg-primary/5 px-2.5 py-1"
                        >
                          {tag}
                        </span>
                      ))}
                    </div>
                  </div>
                );
              })}
            </div>
          </section>

          {/* Process Framework */}
          <section className="space-y-10">
            <div className="space-y-3">
              <span className="text-primary text-xs font-mono tracking-widest uppercase">
                // The Engineering Loop
              </span>
              <h2 className="text-2xl md:text-3xl font-sans font-light tracking-wide text-foreground">
                How We Deliver Production AI
              </h2>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-3 gap-px bg-border">
              {processSteps.map((step, idx) => (
                <div key={idx} className="bg-background p-8 space-y-5">
                  <span className="text-primary text-xs font-mono tracking-widest uppercase">
                    {step.phase}
                  </span>
                  <h3 className="text-xl font-sans font-light text-foreground">
                    {step.title}
                  </h3>
                  <p className="text-foreground font-mono text-sm leading-relaxed">
                    {step.desc}
                  </p>
                </div>
              ))}
            </div>
          </section>

          {/* Production Deliverables */}
          <section className="space-y-8">
            <div className="space-y-3">
              <span className="text-primary text-xs font-mono tracking-widest uppercase">
                // Verifiable Standards
              </span>
              <h2 className="text-2xl md:text-3xl font-sans font-light tracking-wide text-foreground">
                What Production Architecture Guarantees
              </h2>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
              {deliverables.map((item, idx) => (
                <div key={idx} className="flex items-start gap-4 p-5 border border-border/40 bg-background/50">
                  <CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" />
                  <div className="space-y-1">
                    <h3 className="text-foreground font-sans text-base font-medium">
                      {item.title}
                    </h3>
                    <p className="text-foreground font-mono text-xs leading-relaxed">
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
                // Initiate Architecture Review
              </span>
              <h2 className="text-2xl md:text-4xl font-sans font-light tracking-wide text-foreground">
                Architect Your AI System For Production Reality
              </h2>
              <p className="text-foreground font-mono text-sm md:text-base leading-relaxed">
                Whether you need a private, data-sovereign RAG pipeline, automated agentic pipelines, or an architectural audit of an existing prototype, let us discuss your requirements honestly.
              </p>
            </div>

            <div className="flex flex-wrap items-center justify-center gap-4 pt-4">
              <a
                href="mailto:alex.seif@gmail.com?subject=Enterprise%20AI%20Architecture%20Inquiry"
                className="inline-flex items-center gap-2 bg-primary text-primary-foreground hover:bg-primary/90 transition-all font-mono text-xs tracking-widest uppercase px-8 py-4 rounded-sm shadow-md group"
              >
                <Mail className="h-4 w-4" />
                Schedule AI Architecture Consultation
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
