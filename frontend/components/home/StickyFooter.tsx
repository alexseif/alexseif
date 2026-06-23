"use client";

import Link from "next/link";
import { motion, useScroll, useTransform } from "framer-motion";
import { ArrowRight } from "lucide-react";
import { Button } from "@/components/ui/button";
import { openBrevo } from "./utils";

export const StickyFooter = () => {
  const { scrollY } = useScroll();

  const footerOpacity = useTransform(scrollY, [400, 600], [0, 1]);
  const footerY = useTransform(scrollY, [400, 600], [50, 0]);
  const footerScale = useTransform(scrollY, [400, 600], [0.95, 1]);

  return (
    <>
      {/* Sticky Scroll Footer */}
      <motion.div
        style={{
          opacity: footerOpacity,
          y: footerY,
          scale: footerScale,
        }}
        className="fixed bottom-8 left-0 right-0 z-50 flex justify-center px-4 pointer-events-none"
      >
        <div className="max-w-xl w-full bg-background/60 backdrop-blur-xl border border-primary/20 rounded-full px-6 py-4 shadow-[0_0_30px_rgba(0,0,0,0.5)] flex items-center justify-between gap-4 pointer-events-auto relative overflow-hidden group">
          {/* Subtle blueprint grid effect for the footer */}
          <div className="absolute inset-0 opacity-10 pointer-events-none blueprint-grid" />

          <div className="flex flex-col min-w-0 relative z-10">
            <span className="text-[10px] text-primary/60 font-mono tracking-[0.2em] uppercase mb-0.5">
              Navigation // Intake
            </span>
            <h4 className="text-foreground text-xs md:text-sm font-sans font-light tracking-wide truncate">
              The Path Discovery: Client intake
            </h4>
          </div>

          <Button
            onClick={openBrevo}
            size="sm"
            className="rounded-full bg-primary text-primary-foreground hover:bg-primary/90 font-mono text-[10px] tracking-widest uppercase h-9 has-[>svg]:px-5 px-5 shrink-0 relative z-10"
          >
            Path Discovery
            <ArrowRight className="ml-2 h-3.5 w-3.5" />
          </Button>
        </div>
      </motion.div>

      {/* Minimalist Scroll Trigger for Resume */}
      <motion.div
        style={{
          opacity: footerOpacity,
        }}
        className="fixed bottom-8 left-8 z-40 pointer-events-auto hidden lg:block"
      >
        <Link
          href="/resume"
          className="font-mono text-[10px] tracking-widest uppercase text-foreground/40 hover:text-primary transition-colors bg-background/50 hover:bg-card/80 backdrop-blur px-3 py-2 border border-border/50 rounded-sm"
        >
          [ Alex Seif Resume.pdf ]
        </Link>
      </motion.div>
    </>
  );
};
