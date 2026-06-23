"use client";

import { motion } from "framer-motion";
import { Server, Shield, Brain } from "lucide-react";
import { fadeInUp, stagger } from "./animations";

export const TechnicalGridSection = () => {
  return (
    <section className="py-20 px-6 relative">
      <div className="max-w-6xl mx-auto">
        <motion.div
          initial="hidden"
          whileInView="visible"
          viewport={{ once: true, margin: "-100px" }}
          variants={stagger}
          className="space-y-20"
        >
          <motion.div variants={fadeInUp} className="text-center space-y-4">
            <p className="text-primary text-xs tracking-[0.4em] uppercase font-mono">
              // Foundation
            </p>
            <h2 className="text-foreground text-2xl md:text-3xl tracking-[0.2em] font-sans font-light uppercase">
              Principal Engineering
            </h2>
          </motion.div>

          <motion.div variants={fadeInUp} className="grid md:grid-cols-3 gap-px bg-border">
            <div className="bg-background p-10 space-y-6 group hover:bg-card/50 transition-colors duration-500">
              <div className="flex items-center gap-4">
                <Server className="h-5 w-5 text-primary" />
                <span className="text-primary text-xs tracking-[0.3em] uppercase font-mono">
                  01
                </span>
              </div>
              <h3 className="text-foreground text-xl font-sans font-light tracking-wide">
                Architecture & Legacy Decoupling
              </h3>
              <p className="text-foreground/90 leading-relaxed">
                Decomposing monolithic architectures, establishing strict API boundaries, and orchestrating zero-downtime data migrations across complex legacy systems.
              </p>
              <div className="pt-4 flex flex-wrap gap-2">
                {["API Boundaries", "Zero-Downtime", "Decoupling"].map((tech) => (
                  <span
                    key={tech}
                    className="text-xs text-foreground/70 font-mono border border-border/50 px-2 py-1"
                  >
                    {tech}
                  </span>
                ))}
              </div>
            </div>

            <div className="bg-background p-10 space-y-6 group hover:bg-card/50 transition-colors duration-500">
              <div className="flex items-center gap-4">
                <Shield className="h-5 w-5 text-primary" />
                <span className="text-primary text-xs tracking-[0.3em] uppercase font-mono">
                  02
                </span>
              </div>
              <h3 className="text-foreground text-xl font-sans font-light tracking-wide">
                High-Concurrency Infrastructure
              </h3>
              <p className="text-foreground/90 leading-relaxed">
                Engineering distributed state-locking mechanisms, fault-tolerant transaction pipelines, and resilient databases for national-scale throughput.
              </p>
              <div className="pt-4 flex flex-wrap gap-2">
                {["State-Locking", "National-Scale", "Resiliency"].map((tech) => (
                  <span
                    key={tech}
                    className="text-xs text-foreground/70 font-mono border border-border/50 px-2 py-1"
                  >
                    {tech}
                  </span>
                ))}
              </div>
            </div>

            <div className="bg-background p-10 space-y-6 group hover:bg-card/50 transition-colors duration-500">
              <div className="flex items-center gap-4">
                <Brain className="h-5 w-5 text-primary" />
                <span className="text-primary text-xs tracking-[0.3em] uppercase font-mono">
                  03
                </span>
              </div>
              <h3 className="text-foreground text-xl font-sans font-light tracking-wide">
                Agentic AI Orchestration
              </h3>
              <p className="text-foreground/90 leading-relaxed">
                Engineering deterministic multi-agent workflows, decoupling LLM context generation from critical execution paths for production-grade reliability.
              </p>
              <div className="pt-4 flex flex-wrap gap-2">
                {["Deterministic", "LangGraph", "Multi-Agent"].map((tech) => (
                  <span
                    key={tech}
                    className="text-xs text-foreground/70 font-mono border border-border/50 px-2 py-1"
                  >
                    {tech}
                  </span>
                ))}
              </div>
            </div>
          </motion.div>
        </motion.div>
      </div>
    </section>
  );
};
