"use client";

import { motion } from "framer-motion";
import Link from "next/link";
import { Mail, ArrowRight, MessageSquare, FileText, Compass } from "lucide-react";
import { fadeInUp, stagger } from "./animations";
import { openBrevo } from "./utils";

export const HeroSection = () => {
  const handleContact = (
    e: React.MouseEvent,
    type: "email" | "whatsapp"
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
        className="text-center space-y-8 max-w-4xl relative z-10"
      >
        {/* Arabic Greeting */}
        <motion.div variants={fadeInUp} className="space-y-3">
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
          <p className="text-foreground/60 tracking-[0.4em] uppercase font-sans text-xs">
            Welcome
          </p>
        </motion.div>

        {/* Name & Title */}
        <motion.div variants={fadeInUp} className="space-y-4 pt-2">
          <div className="flex items-center justify-center gap-4 mb-2">
            <div className="h-px w-12 bg-primary/50" />
            <h1 className="text-foreground text-3xl md:text-4xl tracking-[0.2em] font-sans font-light uppercase">
              ALEX SEIF
            </h1>
            <div className="h-px w-12 bg-primary/50" />
          </div>
          <p className="text-foreground/80 text-sm md:text-base tracking-[0.25em] uppercase text-center font-mono">
            Software Architect & NGO Technical Partner
          </p>
        </motion.div>

        {/* Minimal High-Impact Core Pitch */}
        <motion.div variants={fadeInUp} className="space-y-4 pt-2">
          <div className="text-foreground/80 text-base md:text-lg leading-relaxed max-w-2xl mx-auto space-y-3 font-mono text-center">
            <p>
              20 years of hands-on software architecture. Specializing in high-concurrency PHP/Symfony ecosystems, distributed database optimization, and hostile-environment infrastructure.
            </p>
            <p className="text-primary font-medium tracking-wide text-sm md:text-base">
              // Pragmatic engineering. Zero downtime.
            </p>
          </div>
        </motion.div>

        {/* Direct Action Hub */}
        <motion.div
          variants={fadeInUp}
          className="flex flex-wrap items-center justify-center gap-4 pt-4"
        >
          <Link
            href="/case-studies"
            className="inline-flex items-center gap-2 bg-primary/10 text-primary border border-primary/40 hover:bg-primary/20 transition-all font-mono text-xs tracking-widest uppercase px-6 py-3 rounded-sm shadow-sm group"
          >
            <Compass className="h-4 w-4" />
            Explore Case Studies
            <ArrowRight className="h-3.5 w-3.5 group-hover:translate-x-1 transition-transform" />
          </Link>

          <Link
            href="/resume"
            className="inline-flex items-center gap-2 bg-card/60 text-foreground/90 border border-border hover:border-primary/40 hover:text-primary transition-all font-mono text-xs tracking-widest uppercase px-6 py-3 rounded-sm shadow-sm"
          >
            <FileText className="h-4 w-4" />
            Executive CV (PDF)
          </Link>
        </motion.div>

        {/* Contact Links */}
        <motion.div
          variants={fadeInUp}
          className="flex flex-wrap items-center justify-center gap-x-6 gap-y-3 pt-2"
        >
          <button
            onClick={openBrevo}
            className="group flex items-center gap-2 text-foreground/50 hover:text-primary transition-colors cursor-pointer"
            aria-label="Let's Talk"
            title="Let's Talk"
          >
            <div className="h-7 w-7 rounded-full border border-border group-hover:border-primary/50 flex items-center justify-center transition-colors">
              <MessageSquare className="h-3 w-3" />
            </div>
            <span className="text-xs font-mono tracking-[0.2em] uppercase">
              Let's Talk
            </span>
          </button>
          <button
            onClick={(e) => handleContact(e, "email")}
            className="group flex items-center gap-2 text-foreground/50 hover:text-primary transition-colors cursor-pointer"
            aria-label="Contact Alex Seif via Email"
            title="Email Alex Seif"
          >
            <div className="h-7 w-7 rounded-full border border-border group-hover:border-primary/50 flex items-center justify-center transition-colors">
              <Mail className="h-3 w-3" />
            </div>
            <span className="text-xs font-mono tracking-[0.2em] uppercase">
              Email
            </span>
          </button>
          <button
            onClick={(e) => handleContact(e, "whatsapp")}
            className="group flex items-center gap-2 text-foreground/50 hover:text-primary transition-colors cursor-pointer"
            aria-label="Contact Alex Seif via WhatsApp"
            title="WhatsApp Alex Seif"
          >
            <div className="h-7 w-7 rounded-full border border-border group-hover:border-primary/50 flex items-center justify-center transition-colors">
              <MessageSquare className="h-3 w-3" />
            </div>
            <span className="text-xs font-mono tracking-[0.2em] uppercase">
              WhatsApp
            </span>
          </button>
        </motion.div>

        {/* Scroll Indicator */}
        <motion.div
          variants={fadeInUp}
          className="pt-10 flex flex-col items-center gap-2"
        >
          <span className="text-[10px] text-foreground/50 tracking-[0.3em] uppercase font-mono">
            Scroll
          </span>
          <div className="w-px h-12 bg-gradient-to-b from-primary/60 to-transparent" />
        </motion.div>
      </motion.div>
    </header>
  );
};
