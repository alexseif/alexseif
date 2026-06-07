import HomeClient from "./HomeClient";
import { getAllProjects } from "@/lib/projects";

export default async function HomePage() {
  const allProjects = getAllProjects();

  // Highlighted enterprise deep-dives as per blueprint
  const eliteSlugs = [
    "2020-moi-egypt-traffic",
    "2020-dubai-police-academy",
    "wallety",
    "2021-saso"
  ];

  const eliteProjects = allProjects.filter((p) => eliteSlugs.includes(p.slug));

  const jsonLd = {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Alex Seif",
    "jobTitle": "Systems Architect & Technical Partner",
    "url": "https://alexseif.com",
    "sameAs": [
      "https://github.com/alexseif"
    ],
    "knowsAbout": ["Software Architecture", "Enterprise Digital Training", "Sovereign Systems", "Fintech Transactions", "Air-Gapped Intranet System"]
  };

  return (
    <>
      <script
        type="application/ld+json"
        dangerouslySetInnerHTML={{ __html: JSON.stringify(jsonLd) }}
      />
      <HomeClient eliteProjects={eliteProjects} />
    </>
  );
}
