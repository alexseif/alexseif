"use client";

import { Footer } from "@/components/Footer";
import { StatCounter } from "@/components/home/stat-counter";
import { HeroSection } from "@/components/home/HeroSection";
import { WorldMapSection } from "@/components/home/WorldMapSection";
import { TechnicalGridSection } from "@/components/home/TechnicalGridSection";
import { PathDiscoverySection } from "@/components/home/PathDiscoverySection";
import { CaseStudiesSection } from "@/components/home/CaseStudiesSection";
import { StickyFooter } from "@/components/home/StickyFooter";

export default function HomeClient({ eliteProjects }: { eliteProjects: any[] }) {
  return (
    <main className="min-h-screen bg-background overflow-x-hidden blueprint-grid">
      <HeroSection />
      <StatCounter />
      <TechnicalGridSection />
      <CaseStudiesSection eliteProjects={eliteProjects} />
      <PathDiscoverySection />
      <WorldMapSection />
      <Footer />
      <StickyFooter />
    </main>
  );
}
