import React from "react";
import Link from "next/link";

export function Footer() {
  return (
    <footer className="py-16 px-6 border-t border-border/30">
      <div className="max-w-6xl mx-auto">
        <div className="flex flex-col md:flex-row justify-between items-center gap-8">
          <div className="text-center md:text-left" title="إسكندر سيف">
            <p
              className="font-serif text-2xl text-primary"
              style={{ fontFamily: "var(--font-arabic)" }}
            >
              أ. س.
            </p>
            <p className="text-foreground/70 text-xs mt-2 tracking-wider uppercase">
              Alex Seif
            </p>
          </div>

          <div className="flex items-center gap-8 text-xs text-foreground/70 font-mono">
            <span title="Egypt">EG</span>
            <span title="United Arab Emirates">UAE</span>
            <span title="Kingdom Saudia of Arabia">KSA</span>
            <span title="Russia">RU</span>
            <span title="Spain">ES</span>
            <span title="Greece">GR</span>
            <span title="Kuwait">KW</span>
          </div>

          <div className="flex items-center gap-6">
            <Link href="/resume" className="text-foreground/70/40 hover:text-primary transition-colors text-[10px] font-mono tracking-widest uppercase">
              [ Alex Seif Resume.pdf ]
            </Link>
            <p className="text-foreground/70/40 text-xs font-mono">
              © MMXXVI
            </p>
            <img
              src="/Alexandria-Lighthouse.png"
              alt="Alexandria Lighthouse"
              title="Alexandria Lighthouse"
              className="h-auto w-24 grayscale hover:grayscale-0 opacity-70 hover:opacity-100 transition-all duration-500 rounded-[12px]"
            />
          </div>
        </div>
      </div>
    </footer>
  );
}
