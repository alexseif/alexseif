import HomeClient from "./HomeClient";
import { getSelectedProjects } from "@/lib/projects";

export default async function HomePage() {
  const allSelected = getSelectedProjects();
  // Randomly select 4 projects from the selected projects pool
  const eliteProjects = [...allSelected].sort(() => 0.5 - Math.random()).slice(0, 4);

  const jsonLd = {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Alex Seif",
    "jobTitle": "Software Architect & Full-Stack Developer",
    "url": "https://alexseif.com",
    "sameAs": [
      "https://github.com/alexseif",
      "https://linkedin.com/in/alexseif"
    ],
    "knowsAbout": [
      "Software Architecture",
      "Full-Stack Development",
      "Symfony Framework",
      "Drupal Enterprise",
      "WordPress Multisite & FSE",
      "PostgreSQL PostGIS",
      "MySQL 3NF & Star Schema",
      "High-Concurrency Routing",
      "Zero-Downtime Infrastructure Migrations"
    ]
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
