"use client";

import { Footer } from "@/components/Footer";
import { StatCounter } from "@/components/home/stat-counter";
import { HeroSection } from "@/components/home/HeroSection";
import { WorldMapSection } from "@/components/home/WorldMapSection";
import { TechnicalGridSection } from "@/components/home/TechnicalGridSection";
import { NGOPartnerSection } from "@/components/home/NGOPartnerSection";
import { PathDiscoverySection } from "@/components/home/PathDiscoverySection";
import { CaseStudiesSection } from "@/components/home/CaseStudiesSection";

export default function HomeClient({ eliteProjects }: { eliteProjects: any[] }) {
  return (
    <main className="min-h-screen bg-background overflow-x-hidden blueprint-grid">
      <HeroSection />
      <StatCounter />
      <TechnicalGridSection />
      <NGOPartnerSection />
      <CaseStudiesSection eliteProjects={eliteProjects} />
      <PathDiscoverySection />
      <WorldMapSection />
      <Footer />
    </main>
  );
}
