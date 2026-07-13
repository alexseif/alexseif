"use client";

import { motion } from "framer-motion";
import { Lightbulb, Server, Users } from "lucide-react";
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
          className="space-y-16"
        >
          <motion.div variants={fadeInUp} className="text-center space-y-6">
            <h2 className="text-foreground text-2xl md:text-3xl tracking-[0.2em] font-sans font-light uppercase">
              What I Actually Do
            </h2>
            <p className="text-foreground/70 text-md tracking-[0.1em] font-mono">
              Most people come to me with one of three problems:
            </p>
          </motion.div>

          <motion.div variants={fadeInUp} className="grid md:grid-cols-3 gap-px bg-border">
            <div className="bg-background p-10 space-y-6 group hover:bg-card/50 transition-colors duration-500">
              <div className="flex items-center gap-4">
                <Lightbulb className="h-5 w-5 text-primary" />
                <span className="text-primary text-xs tracking-[0.3em] uppercase font-mono">
                  01
                </span>
              </div>
              <h3 className="text-foreground text-xl font-sans font-light tracking-wide leading-snug">
                They need to build something that doesn't exist yet.
              </h3>
              <p className="text-foreground/80 leading-relaxed font-mono text-sm">
                I collect the requirements — from whoever is in the room — map what currently exists, design the database and APIs, and specify the infrastructure before a line of code is written.
              </p>
              <div className="pt-4 flex flex-wrap gap-2">
                {["Requirements", "Database Design", "APIs", "Infrastructure"].map((tag) => (
                  <span
                    key={tag}
                    className="text-xs text-foreground/60 font-mono border border-border/50 px-2 py-1"
                  >
                    {tag}
                  </span>
                ))}
              </div>
            </div>

            <div className="bg-background p-10 space-y-6 group hover:bg-card/50 transition-colors duration-500">
              <div className="flex items-center gap-4">
                <Server className="h-5 w-5 text-primary" />
                <span className="text-primary text-xs tracking-[0.3em] uppercase font-mono">
                  02
                </span>
              </div>
              <h3 className="text-foreground text-xl font-sans font-light tracking-wide leading-snug">
                They have something that works but can't scale, change, or be touched.
              </h3>
              <p className="text-foreground/80 leading-relaxed font-mono text-sm">
                I've migrated national-scale legacy systems without downtime, refactored catastrophic queries to sub-second response, and decoupled monoliths under live production traffic.
              </p>
              <div className="pt-4 flex flex-wrap gap-2">
                {["Legacy Migration", "Refactoring", "Decoupling"].map((tag) => (
                  <span
                    key={tag}
                    className="text-xs text-foreground/60 font-mono border border-border/50 px-2 py-1"
                  >
                    {tag}
                  </span>
                ))}
              </div>
            </div>

            <div className="bg-background p-10 space-y-6 group hover:bg-card/50 transition-colors duration-500">
              <div className="flex items-center gap-4">
                <Users className="h-5 w-5 text-primary" />
                <span className="text-primary text-xs tracking-[0.3em] uppercase font-mono">
                  03
                </span>
              </div>
              <h3 className="text-foreground text-xl font-sans font-light tracking-wide leading-snug">
                They need someone to own the technical function, not just advise on it.
              </h3>
              <p className="text-foreground/80 leading-relaxed font-mono text-sm">
                For NGOs and organizations without a technical lead, I operate as an embedded partner — architecture, vendor oversight, team capability building, and quarterly reviews.
              </p>
              <div className="pt-4 flex flex-wrap gap-2">
                {["Embedded Partner", "Vendor Oversight", "Capability Building"].map((tag) => (
                  <span
                    key={tag}
                    className="text-xs text-foreground/60 font-mono border border-border/50 px-2 py-1"
                  >
                    {tag}
                  </span>
                ))}
              </div>
            </div>
          </motion.div>

          <motion.div variants={fadeInUp} className="text-center pt-8">
            <p className="text-foreground/60 text-sm font-mono tracking-wide max-w-2xl mx-auto">
              <span className="text-foreground/80 font-bold">What I don't do:</span> run your QA. I'll design the test strategy and define what coverage looks like. Someone else executes it.
            </p>
          </motion.div>
        </motion.div>
      </div>
    </section>
  );
};
