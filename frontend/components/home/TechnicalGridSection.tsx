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
              NGO Technical Partner
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
                Legacy Modernization & Scale
              </h3>
              <p className="text-foreground/90 leading-relaxed">
                Decomposing monolithic applications, optimizing sluggish MySQL database layers (3NF / Star Schema), and eliminating race conditions.
              </p>
              <div className="pt-4 flex flex-wrap gap-2">
                {["3NF", "Star Schema", "Decoupling"].map((tech) => (
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
                High-Concurrency Engineering
              </h3>
              <p className="text-foreground/90 leading-relaxed">
                Architecting distributed booking engines, custom locking state buffers, and fault-tolerant transaction pipelines.
              </p>
              <div className="pt-4 flex flex-wrap gap-2">
                {["Lock-State", "Distributed", "Fault-Tolerant"].map((tech) => (
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
                Production Agentic AI Engine
              </h3>
              <p className="text-foreground/90 leading-relaxed">
                Decomposing unstructured historical data via Python RAG pipelines and executing persistent multi-agent loops utilizing LangGraph.
              </p>
              <div className="pt-4 flex flex-wrap gap-2">
                {["RAG", "LangGraph", "Multi-Agent"].map((tech) => (
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
