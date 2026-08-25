"use client";

import { motion } from "framer-motion";
import { FileCheck, ShieldCheck, Lock, Clock, ArrowRight } from "lucide-react";
import { Button } from "@/components/ui/button";
import { fadeInUp, stagger } from "./animations";
import { openBrevo } from "./utils";

export const NGOPartnerSection = () => {
  const deliverables = [
    {
      icon: FileCheck,
      title: "Donor & Transparency Portals",
      description: "High-integrity web platforms built for UN, GIZ, and EU reporting standards and public donor accountability."
    },
    {
      icon: ShieldCheck,
      title: "Agency & Vendor Oversight",
      description: "Independent technical review of third-party agency deliverables, validating code quality and data integrity before sign-off."
    },
    {
      icon: Lock,
      title: "Data Sovereignty & Security",
      description: "Multilingual systems engineered with strict data sovereignty, GDPR compliance, and perimeter security zoning."
    },
    {
      icon: Clock,
      title: "Dedicated System Retainer",
      description: "One experienced architect who knows your codebase deeply and is on-call when critical operational needs arise."
    }
  ];

  return (
    <section className="py-20 px-6 relative bg-card/10 border-t border-border/30">
      <div className="max-w-6xl mx-auto">
        <motion.div
          initial="hidden"
          whileInView="visible"
          viewport={{ once: true, margin: "-100px" }}
          variants={stagger}
          className="space-y-16"
        >
          {/* Header */}
          <motion.div variants={fadeInUp} className="text-center space-y-4 max-w-3xl mx-auto">
            <p className="text-primary text-xs tracking-[0.4em] uppercase font-mono">
              // Embedded Technical Partnership
            </p>
            <h2 className="text-foreground text-2xl md:text-3xl tracking-[0.2em] font-sans font-light uppercase">
              For NGOs & Non-Profits
            </h2>
            <p className="text-foreground/80 font-mono text-sm md:text-base leading-relaxed text-center pt-2">
              You have a transparency portal, donor reporting dashboard, or data system that lacks a dedicated technical lead. I provide fractional, retainer-based technical ownership — ensuring data sovereignty, compliance with UN/EU/GIZ institutional donors, and vendor accountability without agency overhead.
            </p>
          </motion.div>

          {/* 4 Pillars Grid */}
          <motion.div variants={fadeInUp} className="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {deliverables.map((item, index) => (
              <div
                key={index}
                className="bg-background border border-border/50 p-6 space-y-4 group hover:border-primary/50 transition-colors flex flex-col justify-between"
              >
                <div className="space-y-4">
                  <div className="h-10 w-10 bg-primary/10 flex items-center justify-center rounded-sm border border-primary/20">
                    <item.icon className="h-5 w-5 text-primary group-hover:scale-110 transition-transform" />
                  </div>
                  <h3 className="text-foreground font-sans font-medium uppercase tracking-wider text-sm">
                    {item.title}
                  </h3>
                  <p className="text-foreground/70 font-mono text-xs leading-relaxed">
                    {item.description}
                  </p>
                </div>
              </div>
            ))}
          </motion.div>

          {/* CTA */}
          <motion.div variants={fadeInUp} className="flex justify-center pt-4">
            <Button
              onClick={openBrevo}
              className="bg-primary text-primary-foreground hover:bg-primary/90 font-mono text-xs tracking-widest uppercase px-8 py-6 rounded-sm group shadow-md"
            >
              Discuss Your Portal or Program
              <ArrowRight className="ml-2 h-4 w-4 group-hover:translate-x-1 transition-transform" />
            </Button>
          </motion.div>
        </motion.div>
      </div>
    </section>
  );
};
