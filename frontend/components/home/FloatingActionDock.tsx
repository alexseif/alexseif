import React from "react";
import Link from "next/link";
import { Compass, FileText, ArrowRight } from "lucide-react";

export const FloatingActionDock = () => {
  return (
    <aside
      aria-label="Quick Actions"
      className="fixed bottom-6 inset-x-0 z-50 flex justify-center px-4 pointer-events-none"
    >
      <nav className="pointer-events-auto flex items-center gap-2 sm:gap-3 bg-background/85 backdrop-blur-xl border border-primary/30 rounded-full p-1.5 shadow-[0_8px_32px_rgba(0,0,0,0.45)]">
        <Link
          href="/case-studies"
          className="inline-flex items-center gap-2 bg-primary/15 text-primary hover:bg-primary/25 border border-primary/30 transition-all font-mono text-xs tracking-wider uppercase px-4 py-2 rounded-full group"
        >
          <Compass className="h-3.5 w-3.5" />
          <span>Explore Case Studies</span>
          <ArrowRight className="h-3 w-3 group-hover:translate-x-0.5 transition-transform" />
        </Link>

        <Link
          href="/resume"
          className="inline-flex items-center gap-2 bg-card/70 text-foreground hover:text-primary hover:border-primary/40 border border-border/60 transition-all font-mono text-xs tracking-wider uppercase px-4 py-2 rounded-full"
        >
          <FileText className="h-3.5 w-3.5" />
          <span>Executive CV (PDF)</span>
        </Link>
      </nav>
    </aside>
  );
};
