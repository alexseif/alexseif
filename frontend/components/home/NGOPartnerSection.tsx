"use client";

import { motion } from "framer-motion";
import { Network, Eye, ShieldAlert, GraduationCap, ArrowRight } from "lucide-react";
import { Button } from "@/components/ui/button";
import { fadeInUp, stagger } from "./animations";
import { openBrevo } from "./utils";

export const NGOPartnerSection = () => {
  const deliverables = [
    {
      icon: Network,
      title: "Architecture & Strategy",
      description: "Fractional technical leadership to design decoupled architectures, define robust API boundaries, and establish scalable engineering roadmaps."
    },
    {
      icon: Eye,
      title: "Vendor & Delivery Oversight",
      description: "Independent technical auditing of third-party agencies, enforcing code quality, and ensuring business requirements translate into working infrastructure."
    },
    {
      icon: ShieldAlert,
      title: "Legacy Infrastructure Rescue",
      description: "Remediation of sluggish, undocumented legacy monoliths. Structuring zero-downtime migrations and eliminating critical race conditions."
    },
    {
      icon: GraduationCap,
      title: "Knowledge Transfer",
      description: "Mentoring internal teams, establishing deterministic Git workflows, and mitigating key-person risks across your engineering organization."
    }
  ];

  return (
    <section className="py-20 px-6 relative bg-card/10">
      <div className="max-w-6xl mx-auto">
        <motion.div
          initial="hidden"
          whileInView="visible"
          viewport={{ once: true, margin: "-100px" }}
          variants={stagger}
          className="space-y-16"
        >
          <motion.div variants={fadeInUp} className="text-center space-y-4">
            <h2 className="text-foreground text-2xl md:text-3xl tracking-[0.2em] font-sans font-light uppercase">
              Embedded Technical Partner
            </h2>
            <p className="text-foreground/70 max-w-2xl mx-auto leading-relaxed text-sm md:text-base">
              For organizations needing an independent technical lead to own the engineering function, oversee vendors, and guide architectural strategy without the overhead of a full-time executive hire.
            </p>
          </motion.div>

          <motion.div variants={fadeInUp} className="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {deliverables.map((item, index) => (
              <div key={index} className="bg-background border border-border/50 p-6 space-y-4 group hover:border-primary/50 transition-colors">
                <div className="h-10 w-10 bg-card/50 flex items-center justify-center rounded-sm">
                  <item.icon className="h-5 w-5 text-primary group-hover:scale-110 transition-transform" />
                </div>
                <h3 className="text-foreground font-sans font-medium uppercase tracking-wider text-sm">
                  {item.title}
                </h3>
                <p className="text-foreground/70 text-sm leading-relaxed">
                  {item.description}
                </p>
              </div>
            ))}
          </motion.div>

          <motion.div variants={fadeInUp} className="flex justify-center pt-8">
            <Button
              onClick={openBrevo}
              className="bg-primary text-primary-foreground hover:bg-primary/90 font-mono tracking-wider px-8 py-6 group"
            >
              Start a Conversation
              <ArrowRight className="ml-2 h-4 w-4 group-hover:translate-x-1 transition-transform" />
            </Button>
          </motion.div>
        </motion.div>
      </div>
    </section>
  );
};
