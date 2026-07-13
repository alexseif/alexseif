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
          <motion.div variants={fadeInUp} className="text-center space-y-6 max-w-3xl mx-auto">
            <h2 className="text-foreground text-2xl md:text-3xl tracking-[0.2em] font-sans font-light uppercase">
              FOR NGOs SPECIFICALLY
            </h2>
            <div className="text-foreground/80 leading-relaxed text-sm md:text-base space-y-4 text-left">
              <p>
                You have a transparency platform, a donor portal, or a data system that was built by whoever was available at the time. It works until it doesn't. Nobody owns it technically.
              </p>
              <p>
                I've worked with international NGOs reporting to UN, GIZ, and EU institutional donors. I understand data sovereignty, multilingual requirements, geographic data visualization, and the reality that your budget isn't elastic.
              </p>
              <p>
                I offer retainer-based technical partnership — not a project quote, not a consultancy firm. One person who knows your system and is reachable when it matters.
              </p>
            </div>
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
