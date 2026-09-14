import React from "react";
import { Mail, MessageSquare } from "lucide-react";
import { BrevoButton } from "./BrevoButton";

export const HeroSection = () => {
  return (
    <header className="min-h-screen flex flex-col items-center justify-center px-6 relative pt-28 pb-16">
      <div className="absolute inset-0 overflow-hidden pointer-events-none">
        <div className="absolute top-1/4 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary/10 to-transparent" />
        <div className="absolute top-3/4 left-0 right-0 h-px bg-gradient-to-r from-transparent via-primary/10 to-transparent" />
        <div className="absolute left-1/4 top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-primary/10 to-transparent" />
        <div className="absolute right-1/4 top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-primary/10 to-transparent" />
      </div>

      <div className="text-center space-y-8 max-w-4xl relative z-10 animate-in fade-in duration-700">
        {/* Arabic Greeting */}
        <div className="space-y-3">
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
        </div>

        {/* Name & Title */}
        <div className="space-y-4 pt-2">
          <div className="flex items-center justify-center gap-4 mb-2">
            <div className="h-px w-12 bg-primary/50" />
            <h1 className="text-foreground text-3xl md:text-4xl tracking-[0.2em] font-sans font-light uppercase">
              ALEX SEIF
            </h1>
            <div className="h-px w-12 bg-primary/50" />
          </div>
          <p className="text-foreground/80 text-sm md:text-base tracking-[0.25em] uppercase text-center font-mono">
            Software Architect | Full-Stack Engineer
          </p>
        </div>

        {/* Minimal High-Impact Core Pitch */}
        <div className="pt-2">
          <p className="text-foreground/80 text-base md:text-lg leading-relaxed max-w-2xl mx-auto font-mono text-center">
            20 years of copy-pasting until AI came along.
          </p>
        </div>

        {/* Contact Links */}
        <div className="flex flex-wrap items-center justify-center gap-x-6 gap-y-3 pt-2">
          <BrevoButton
            className="group flex items-center gap-2 text-foreground/50 hover:text-primary transition-colors cursor-pointer"
            ariaLabel="Let's Talk"
            title="Let's Talk"
          >
            <div className="h-7 w-7 rounded-full border border-border group-hover:border-primary/50 flex items-center justify-center transition-colors">
              <MessageSquare className="h-3 w-3" />
            </div>
            <span className="text-xs font-mono tracking-[0.2em] uppercase">
              Let's Talk
            </span>
          </BrevoButton>

          <a
            href="mailto:alex.seif@gmail.com"
            target="_blank"
            rel="noopener noreferrer"
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
          </a>

          <a
            href="https://wa.me/201004006332"
            target="_blank"
            rel="noopener noreferrer"
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
          </a>
        </div>

        {/* Scroll Indicator */}
        <div className="pt-10 flex flex-col items-center gap-2">
          <span className="text-[10px] text-foreground/50 tracking-[0.3em] uppercase font-mono">
            Scroll
          </span>
          <div className="w-px h-12 bg-gradient-to-b from-primary/60 to-transparent" />
        </div>
      </div>
    </header>
  );
};
