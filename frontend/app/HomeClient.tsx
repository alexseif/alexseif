"use client";

import dynamic from "next/dynamic";
import { Footer } from "@/components/Footer";
import { StatCounterSection } from "@/components/home/StatCounterSection";
import { HeroSection } from "@/components/home/HeroSection";

const TechnicalGridSection = dynamic(
  () => import("@/components/home/TechnicalGridSection").then((mod) => mod.TechnicalGridSection)
);
const NGOPartnerSection = dynamic(
  () => import("@/components/home/NGOPartnerSection").then((mod) => mod.NGOPartnerSection)
);
const CaseStudiesSection = dynamic(
  () => import("@/components/home/CaseStudiesSection").then((mod) => mod.CaseStudiesSection)
);
const PathDiscoverySection = dynamic(
  () => import("@/components/home/PathDiscoverySection").then((mod) => mod.PathDiscoverySection)
);
const WorldMapSection = dynamic(
  () => import("@/components/home/WorldMapSection").then((mod) => mod.WorldMapSection)
);

export default function HomeClient({ eliteProjects }: { eliteProjects: any[] }) {
  return (
    <main className="min-h-screen bg-background overflow-x-hidden blueprint-grid">
      <HeroSection />
      <StatCounterSection />
      <TechnicalGridSection />
      <NGOPartnerSection />
      <CaseStudiesSection eliteProjects={eliteProjects} />
      <PathDiscoverySection />
      <WorldMapSection />
      <Footer />
    </main>
  );
}
