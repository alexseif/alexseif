"use client";

import { motion } from "framer-motion";
import { Mail, ArrowRight, MessageSquare, LucideGithub } from "lucide-react";
import { fadeInUp, stagger } from "./animations";
import { openBrevo } from "./utils";

export const HeroSection = () => {
  const handleContact = (
    e: React.MouseEvent,
    type: "email" | "whatsapp" | "linkedIn" | "github"
  ) => {
    e.preventDefault();
    switch (type) {
      case "email":
        const user = "alex.seif";
        const domain = "gmail.com";
        window.open(`mailto:${user}@${domain}`, "_blank");
        break;
      case "whatsapp":
        const country = "20";
        const rest = "1004006332";
        window.open(`https://wa.me/${country}${rest}`, "_blank");
        break;
      case "linkedIn":
        const linkedInuser = "alexseif";
        const linkedIndomain = "linkedin.com";
        window.open(`https://${linkedIndomain}/in/${linkedInuser}`, "_blank");
        break;
      case "github":
        const githubUser = "alexseif";
        const githubDomain = "github.com";
        window.open(`https://${githubDomain}/${githubUser}`, "_blank");
        break;
    }
  };

  return (
    <header className="min-h-screen flex flex-col items-center justify-center px-6 relative pt-28 pb-16">
      <div className="absolute inset-0 overflow-hidden pointer-events-none">
        <div className="absolute top-1/4 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary/10 to-transparent" />
        <div className="absolute top-3/4 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary/10 to-transparent" />
        <div className="absolute left-1/4 top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-primary/10 to-transparent" />
        <div className="absolute right-1/4 top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-primary/10 to-transparent" />
      </div>

      <motion.div
        initial="hidden"
        animate="visible"
        variants={stagger}
        className="text-center space-y-10 max-w-4xl relative z-10"
      >
        <motion.div variants={fadeInUp} className="space-y-6">
          <p
            className="font-serif text-4xl md:text-5xl lg:text-6xl text-primary leading-tight"
            style={{
              fontFamily: "var(--font-arabic)",
              fontWeight: 700,
              textShadow: "0 0 8px rgba(184, 134, 11, 0.35)",
            }}
            dir="rtl"
          >
            أهلاً و سهلاً
          </p>
          <p className="text-foreground/70 tracking-[0.4em] uppercase font-sans">
            Welcome
          </p>
        </motion.div>

        <motion.div variants={fadeInUp} className="space-y-6 pt-8">
          <div className="flex items-center justify-center gap-4 mb-8">
            <div className="h-px w-12 bg-primary/50" />
            <h1 className="text-foreground text-2xl md:text-3xl tracking-[0.2em] font-sans font-light uppercase">
              ALEX SEIF
            </h1>
            <div className="h-px w-12 bg-primary/50" />
          </div>
          <p className="text-foreground/80 text-md tracking-[0.3em] uppercase text-center">
            Software Architect & NGO Technical Partner
          </p>
        </motion.div>
        <motion.div variants={fadeInUp} className="space-y-6 pt-4">
          <div className="text-foreground/70 text-base md:text-lg leading-relaxed max-w-3xl mx-auto space-y-6 font-mono text-center">
            <p>
              I've spent 20 years solving the problems that come before the code — understanding what's actually needed, designing how it fits together, and building systems that survive contact with reality.
            </p>
            <p>
              Air-gapped government ministries. National payment gateways. Tourism platforms that became the market reference. Ministry-level scheduling infrastructure under distributed load. Whatever you're building, I've probably worked in harder constraints.
            </p>
          </div>
        </motion.div>

        <motion.div
          variants={fadeInUp}
          className="flex flex-wrap items-center justify-center gap-x-8 gap-y-4 pt-8"
        >
          <button
            onClick={openBrevo}
            className="group flex items-center gap-2 text-foreground/50 hover:text-primary transition-colors cursor-pointer"
            aria-label="Let's Talk"
            title="Let's Talk"
          >
            <div className="h-8 w-8 rounded-full border border-border group-hover:border-primary/50 flex items-center justify-center transition-colors">
              <MessageSquare className="h-3.5 w-3.5" />
            </div>
            <span className="text-md font-mono tracking-[0.2em] uppercase">
              Let's Talk
            </span>
          </button>
          <button
            onClick={(e) => handleContact(e, "email")}
            className="group flex items-center gap-2 text-foreground/50 hover:text-primary transition-colors cursor-pointer"
            aria-label="Contact Alex Seif via Email"
            title="Email Alex Seif"
          >
            <div className="h-8 w-8 rounded-full border border-border group-hover:border-primary/50 flex items-center justify-center transition-colors">
              <Mail className="h-3.5 w-3.5" />
            </div>
            <span className="text-md font-mono tracking-[0.2em] uppercase">
              Email
            </span>
          </button>
          <button
            onClick={(e) => handleContact(e, "whatsapp")}
            className="group flex items-center gap-2 text-foreground/50 hover:text-primary transition-colors cursor-pointer"
            aria-label="Contact Alex Seif via WhatsApp"
            title="WhatsApp Alex Seif"
          >
            <div className="h-8 w-8 rounded-full border border-border group-hover:border-primary/50 flex items-center justify-center transition-colors">
              <MessageSquare className="h-3.5 w-3.5" />
            </div>
            <span className="text-md font-mono tracking-[0.2em] uppercase">
              WhatsApp
            </span>
          </button>
          <button
            onClick={(e) => handleContact(e, "github")}
            className="group flex items-center gap-2 text-foreground/50 hover:text-primary transition-colors cursor-pointer"
            aria-label="View Alex Seif's GitHub Profile"
            title="GitHub Profile"
          >
            <div className="h-8 w-8 rounded-full border border-border group-hover:border-primary/50 flex items-center justify-center transition-colors">
              <LucideGithub className="h-3.5 w-3.5" />
            </div>
            <span className="text-md font-mono tracking-[0.2em] uppercase">
              Github
            </span>
          </button>
        </motion.div>

        <motion.div
          variants={fadeInUp}
          className="pt-16 flex flex-col items-center gap-3"
        >
          <span className="text-xs text-foreground/70 tracking-[0.3em] uppercase">
            Scroll
          </span>
          <div className="w-px h-16 bg-gradient-to-b from-primary/60 to-transparent" />
        </motion.div>
      </motion.div>
    </header>
  );
};
