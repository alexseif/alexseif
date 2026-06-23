"use client";

import { motion } from "framer-motion";
import { Terminal, Info, ArrowRight } from "lucide-react";
import { Button } from "@/components/ui/button";
import { Tooltip, TooltipTrigger, TooltipContent } from "@/components/ui/tooltip";
import { fadeInUp, stagger } from "./animations";
import { openBrevo } from "./utils";

export const PathDiscoverySection = () => {
  return (
    <section id="path-discovery" className="py-14 md:py-20 px-6 relative">
      <div className="max-w-3xl mx-auto">
        <motion.div
          initial="hidden"
          whileInView="visible"
          viewport={{ once: true, margin: "-100px" }}
          variants={stagger}
        >
          <motion.div
            variants={fadeInUp}
            className="relative border border-border bg-card/30 p-6 md:p-10 overflow-hidden"
          >
            {/* Corner accents */}
            <div className="absolute top-0 left-0 w-8 h-8 border-t border-l border-primary" />
            <div className="absolute top-0 right-0 w-8 h-8 border-t border-r border-primary" />
            <div className="absolute bottom-0 left-0 w-8 h-8 border-b border-l border-primary" />
            <div className="absolute bottom-0 right-0 w-8 h-8 border-b border-r border-primary" />

            <div className="text-center space-y-8">
              <div className="flex items-center justify-center gap-4">
                <Terminal className="h-5 w-5 text-primary" />
                <span className="text-primary text-xs tracking-[0.4em] uppercase font-mono">
                  Entry Point
                </span>
              </div>

              <h3 className="text-foreground text-2xl md:text-4xl font-sans font-light tracking-wide flex flex-col items-center gap-2">
                <span>Path Discovery</span>
                <div className="flex items-center gap-2">
                  <span
                    className="text-primary text-2xl md:text-4xl"
                    style={{
                      fontFamily: "var(--font-arabic)",
                      letterSpacing: "0.08em",
                    }}
                  >
                    تَعَارُف المَسَار
                  </span>
                </div>
              </h3>

              <div className="text-foreground/70 md:text-base max-w-xl mx-auto leading-relaxed text-start space-y-4">
                <p>
                  True dominion over your infrastructure requires a partner{" "}
                  <span
                    className="text-primary text-2xl md:text-3xl"
                    style={{ fontFamily: "var(--font-arabic)" }}
                  >
                    رَفِيق
                  </span>
                  .
                  <Tooltip>
                    <TooltipTrigger asChild>
                      <button
                        type="button"
                        onClick={(e) => e.preventDefault()}
                        onTouchStart={(e) => e.currentTarget.focus()}
                        className="inline-flex size-4 items-center justify-center rounded-full border border-primary/70 bg-card/70 text-primary hover:bg-primary hover:text-primary-foreground transition-colors ms-1 cursor-help md:cursor-pointer"
                        aria-label="What is a Rafiq?"
                      >
                        <Info className="h-3.5 w-3.5" />
                      </button>
                    </TooltipTrigger>
                    <TooltipContent
                      side="top"
                      className="bg-card text-foreground border border-primary/40 shadow-lg space-y-1"
                    >
                      <p className="text-3xl font-mono text-primary">Rafiq</p>
                      <p className="text-sm text-foreground/70 max-w-xs">
                        Someone who walks the path with you.
                      </p>
                    </TooltipContent>
                  </Tooltip>
                </p>
                <p>
                  This discovery phase is not a pitch&mdash;it is a deliberate
                  extraction of your ultimate objectives. Together, we isolate the
                  friction and expose hidden leverage.
                </p>
                <p>
                  My mandate is to ensure your machine serves your empire.{" "}
                  <strong>Because</strong> the shortest path between vision and
                  reality is a guided ascent.
                </p>
              </div>
              <div className="flex flex-col sm:flex-row items-center justify-center gap-4 pt-8">
                <Button
                  onClick={openBrevo}
                  size="lg"
                  className="bg-primary text-primary-foreground hover:bg-primary/90 font-mono text-sm tracking-wider px-12 py-6 group disabled:opacity-80 w-full sm:w-auto"
                >
                  Path Discovery
                  <ArrowRight className="ml-3 h-4 w-4 group-hover:translate-x-1 transition-transform" />
                </Button>
              </div>
            </div>
          </motion.div>
        </motion.div>
      </div>
    </section>
  );
};
