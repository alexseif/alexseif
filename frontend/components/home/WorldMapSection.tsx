"use client";

import { useRef } from "react";
import { motion, useScroll, useTransform } from "framer-motion";

const countries = [
  { name: "Egypt", code: "EG", x: 53, y: 38 },
  { name: "UAE", code: "AE", x: 58, y: 42 },
  { name: "KSA", code: "SA", x: 55, y: 42 },
  { name: "Russia", code: "RU", x: 65, y: 25 },
  { name: "Spain", code: "ES", x: 45, y: 35 },
  { name: "Greece", code: "GR", x: 50, y: 35 },
  { name: "Kuwait", code: "KW", x: 56, y: 40 },
];

export const WorldMapSection = () => {
  const scrollRef = useRef<HTMLDivElement>(null);

  const { scrollYProgress } = useScroll({
    target: scrollRef,
    offset: ["start end", "end start"],
  });

  const mapOpacity = useTransform(scrollYProgress, [0, 0.3, 0.7, 1], [0, 1, 1, 0]);
  const mapScale = useTransform(scrollYProgress, [0, 0.5], [0.9, 1]);

  return (
    <section ref={scrollRef} className="min-h-[70vh] md:min-h-[100vh] relative py-20 pb-28">
      <div className="sticky top-0 h-[40vh] md:h-[70vh] flex items-center justify-center px-6">
        <motion.div
          style={{ opacity: mapOpacity, scale: mapScale }}
          className="max-w-5xl w-full relative"
        >
          {/* Text overlay */}
          <motion.div
            initial={{ opacity: 0, y: 30 }}
            whileInView={{ opacity: 1, y: 0 }}
            transition={{ duration: 1, delay: 0.3 }}
            viewport={{ once: true }}
            className="text-center mt-12 space-y-6"
          >
            <h2 className="text-foreground text-1xl md:text-2xl tracking-[0.2em] font-sans font-light uppercase">
              Global Software <strong className="text-primary">Architecture</strong> & Full Stack Consulting
            </h2>
            <p className="text-foreground/70 text-sm max-w-2xl mx-auto mt-4 leading-relaxed font-sans">
              Operating across North America, the GCC, and Europe, providing CTO-level technical partnership and defensive engineering for high-stakes environments.
            </p>
          </motion.div>
          {/* World Map SVG (Desktop) */}
          <div className="hidden md:block relative w-full aspect-[2/1] bg-card/30 border border-border/50 rounded overflow-hidden">
            {/* Simplified world map outline */}
            <svg
              viewBox="0 0 100 50"
              className="w-full h-full"
              preserveAspectRatio="xMidYMid meet"
            >
              {/* Continents simplified paths */}
              <path
                d="M15,20 Q20,15 30,18 T45,15 Q50,12 55,15 T70,18 Q75,20 80,18 M10,25 Q15,22 25,25 T40,22 M50,25 Q55,22 65,25 T80,22 M20,30 Q30,28 40,32 M55,30 Q65,28 75,32 M25,35 Q35,33 45,38 M60,35 Q70,33 78,38"
                fill="none"
                stroke="rgba(184, 134, 11, 0.15)"
                strokeWidth="0.3"
              />

              {/* Country pulse points */}
              {countries.map((country, index) => (
                <g key={country.code}>
                  {/* Outer pulse ring */}
                  <circle
                    cx={country.x}
                    cy={country.y}
                    r="1"
                    fill="none"
                    stroke="rgba(184, 134, 11, 0.4)"
                    strokeWidth="0.2"
                    className="animate-pulse-ring"
                    style={{ animationDelay: `${index * 0.3}s` }}
                  />
                  {/* Core point */}
                  <circle
                    cx={country.x}
                    cy={country.y}
                    r="0.5"
                    fill="#B8860B"
                  />
                </g>
              ))}

              {/* Connection lines */}
              <path
                d="M53,38 L58,42 M53,38 L55,42 M53,38 L65,25 M53,38 L45,35 M53,38 L50,35 M53,38 L56,40"
                fill="none"
                stroke="rgba(184, 134, 11, 2)"
                strokeWidth="0.15"
                strokeDasharray="1,1"
              />
            </svg>

            {/* Country labels */}
            <div className="absolute inset-0">
              {countries.map((country) => (
                <div
                  key={country.code}
                  className="absolute text-xs text-primary/70 font-mono tracking-wider opacity-0 md:opacity-100"
                  style={{
                    left: `${country.x}%`,
                    top: `${country.y}%`,
                    transform: "translate(50%, 150%)",
                  }}
                  title={country.name}
                >
                  {country.code}
                </div>
              ))}
            </div>
          </div>

          {/* Mobile Country List (Mobile only) */}
          <div className="flex md:hidden flex-wrap justify-center gap-2 mt-8">
            {countries.map((country) => (
              <span
                key={country.code}
                className="text-xs text-foreground/70 font-mono border border-border/50 px-2 py-1 bg-card/10"
              >
                {country.name}
              </span>
            ))}
          </div>


        </motion.div>
      </div>
    </section>
  );
};
