import React from "react";
import Link from "next/link";
import { Globe, RefreshCw, Users, FileCode2, ArrowRight } from "lucide-react";

export const TechnicalGridSection = () => {
  return (
    <section className="py-20 px-6 relative border-t border-border/30">
      <div className="max-w-6xl mx-auto">
        <div className="space-y-16">
          {/* Header */}
          <div className="text-center space-y-4">
            <p className="text-primary text-xs tracking-[0.4em] uppercase font-mono">
              // Systems Architecture & Production Engineering
            </p>
            <h2 className="text-foreground text-2xl md:text-3xl tracking-[0.2em] font-sans font-light uppercase">
              What I Actually Do
            </h2>
            <p className="text-foreground/75 text-sm md:text-base tracking-wide font-mono max-w-2xl mx-auto">
              I design, scale, and maintain high-concurrency web platforms, transactional engines, and data-intensive applications:
            </p>
          </div>

          {/* 3-Column Service Grid */}
          <div className="grid md:grid-cols-3 gap-px bg-border">
            {/* 01: High-Concurrency & Decoupled Platforms */}
            <div className="bg-background p-8 md:p-10 space-y-6 group hover:bg-card/50 transition-colors duration-500 flex flex-col justify-between">
              <div className="space-y-4">
                <div className="flex items-center justify-between">
                  <span className="text-primary text-xs tracking-[0.3em] uppercase font-mono">
                    01
                  </span>
                  <Globe className="h-5 w-5 text-primary transition-colors" />
                </div>
                <h3 className="text-foreground text-xl font-sans font-light tracking-wide leading-snug">
                  High-Concurrency & Decoupled Platforms
                </h3>
                <p className="text-foreground/80 leading-relaxed font-mono text-sm">
                  Architecting scalable platforms, Web GIS data pipelines, and transactional engines from scratch: establishing 3NF relational schemas, OpenAPI contracts, and deterministic cloud setups before writing code.
                </p>
              </div>
              <div className="pt-4 flex flex-wrap gap-2 border-t border-border/40">
                {["Distributed Systems", "Decoupled APIs", "Web GIS & PostGIS"].map((tag) => (
                  <span
                    key={tag}
                    className="text-xs text-primary font-mono border border-primary/20 bg-primary/5 px-2.5 py-1"
                  >
                    {tag}
                  </span>
                ))}
              </div>
            </div>

            {/* 02: Zero-Downtime Migration & Performance */}
            <div className="bg-background p-8 md:p-10 space-y-6 group hover:bg-card/50 transition-colors duration-500 flex flex-col justify-between">
              <div className="space-y-4">
                <div className="flex items-center justify-between">
                  <span className="text-primary text-xs tracking-[0.3em] uppercase font-mono">
                    02
                  </span>
                  <RefreshCw className="h-5 w-5 text-primary transition-colors" />
                </div>
                <h3 className="text-foreground text-xl font-sans font-light tracking-wide leading-snug">
                  Zero-Downtime Migration & Performance
                </h3>
                <p className="text-foreground/80 leading-relaxed font-mono text-sm">
                  Decoupling monolithic legacy platforms, resolving database query bottlenecks, and engineering sub-200ms latency under live production traffic with zero cutover downtime.
                </p>
              </div>
              <div className="pt-4 flex flex-wrap gap-2 border-t border-border/40">
                {["Database Normalization", "Redis Object Caching", "Zero Downtime"].map((tag) => (
                  <span
                    key={tag}
                    className="text-xs text-primary font-mono border border-primary/20 bg-primary/5 px-2.5 py-1"
                  >
                    {tag}
                  </span>
                ))}
              </div>
            </div>

            {/* 03: Architecture Ownership & Governance */}
            <div className="bg-background p-8 md:p-10 space-y-6 group hover:bg-card/50 transition-colors duration-500 flex flex-col justify-between">
              <div className="space-y-4">
                <div className="flex items-center justify-between">
                  <span className="text-primary text-xs tracking-[0.3em] uppercase font-mono">
                    03
                  </span>
                  <Users className="h-5 w-5 text-primary transition-colors" />
                </div>
                <h3 className="text-foreground text-xl font-sans font-light tracking-wide leading-snug">
                  Architecture Ownership & Governance
                </h3>
                <p className="text-foreground/80 leading-relaxed font-mono text-sm">
                  Providing end-to-end technical authority: establishing automated CI/CD quality gates, ensuring GDPR and PCI-DSS compliance, and eliminating architectural technical debt across systems.
                </p>
              </div>
              <div className="pt-4 flex flex-wrap gap-2 border-t border-border/40">
                {["Architecture Ownership", "GDPR & Compliance", "Deterministic CI/CD"].map((tag) => (
                  <span
                    key={tag}
                    className="text-xs text-primary font-mono border border-primary/20 bg-primary/5 px-2.5 py-1"
                  >
                    {tag}
                  </span>
                ))}
              </div>
            </div>
          </div>

          {/* Standalone Unique Value Proposition: Requirements Elicitation */}
          <div className="p-8 md:p-10 border border-primary/40 bg-card/30 rounded-sm relative overflow-hidden flex flex-col md:flex-row items-start md:items-center justify-between gap-6 shadow-xl">
            <div className="space-y-3 max-w-3xl">
              <div className="flex items-center gap-3">
                <FileCode2 className="h-5 w-5 text-primary" />
                <span className="text-primary text-xs font-mono tracking-widest uppercase">
                  Standalone Engagement // Diagnostic Sprint
                </span>
              </div>
              <h3 className="text-foreground text-xl md:text-2xl font-sans font-light tracking-wide">
                Requirements Elicitation & Software Architecture Consultation
              </h3>
              <p className="text-foreground/75 text-sm md:text-base font-mono leading-relaxed">
                Sound architecture decisions help most when the end goal is vague. Before building a complex website or web app, a diagnostic consultation sprint establishes decoupled system boundaries and clean data foundations so your web platform can adapt without costly rewrites.
              </p>
            </div>

            <Link
              href="/requirements-elicitation"
              className="inline-flex items-center gap-2 shrink-0 bg-primary/10 text-primary border border-primary/40 hover:bg-primary/20 transition-all font-mono text-xs tracking-widest uppercase px-6 py-4 rounded-sm shadow-sm group whitespace-nowrap"
            >
              Explore Consultation
              <ArrowRight className="h-4 w-4 group-hover:translate-x-1 transition-transform" />
            </Link>
          </div>
        </div>
      </div>
    </section>
  );
};
