import React from "react"
import type { Metadata } from 'next'
import { Amiri, Inter } from 'next/font/google'
import Script from 'next/script'
import './globals.css'

const _amiri = Amiri({
  subsets: ["arabic", "latin"],
  weight: ["400", "700"],
  variable: "--font-arabic",
  display: "swap",
});
const _inter = Inter({
  subsets: ["latin"],
  variable: "--font-sans",
  display: "swap",
});

export const metadata: Metadata = {
  metadataBase: new URL('https://alexseif.com'),
  title: {
    default: 'Alex Seif | Software Architect & Full-Stack Developer',
    template: '%s | Alex Seif',
  },
  description:
    'Software Architect and Full-Stack Developer with over 20 years of experience in high-concurrency systems architecture, Symfony, Drupal, WordPress, PostgreSQL/PostGIS, and zero-downtime database optimization.',
  keywords: [
    'Software Architect',
    'Full-Stack Developer',
    'Symfony Developer',
    'Drupal Developer',
    'WordPress Developer',
    'PHP 8 Specialist',
    'React Developer',
    'FastAPI',
    'PostgreSQL PostGIS',
    'MySQL Replication',
    'High-Concurrency Systems',
    'Zero-Downtime Migration',
    'Cloud Infrastructure',
    'Netherlands Relocation',
  ],
  authors: [{ name: 'Alex Seif', url: 'https://alexseif.com' }],
  creator: 'Alex Seif',
  alternates: {
    canonical: '/',
  },
  openGraph: {
    type: 'website',
    locale: 'en_US',
    url: 'https://alexseif.com',
    siteName: 'Alex Seif | Software Architect & Full-Stack Developer',
    title: 'Alex Seif | Software Architect & Full-Stack Developer',
    description:
      '20+ years of hands-on software architecture, Symfony, Drupal, WordPress, PostgreSQL/PostGIS, and zero-downtime database optimization.',
  },
  twitter: {
    card: 'summary_large_image',
    title: 'Alex Seif | Software Architect & Full-Stack Developer',
    description:
      '20+ years of hands-on software architecture, Symfony, Drupal, WordPress, and zero-downtime database optimization.',
  },
  icons: {
    icon: [
      { url: '/icon-light-32x32.png', media: '(prefers-color-scheme: light)' },
      { url: '/icon-dark-32x32.png', media: '(prefers-color-scheme: dark)' },
      { url: '/icon.svg', type: 'image/svg+xml' },
    ],
    apple: '/apple-icon.png',
  },
}

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode
}>) {
  return (
    <html lang="en">
      <head>
        {/* Google Tag Manager - Loaded on idle to prevent blocking FCP / TBT */}
        <Script
          id="gtm-script"
          strategy="lazyOnload"
          dangerouslySetInnerHTML={{
            __html: `(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K5BKGDM');`
          }}
        />
        {/* End Google Tag Manager */}
      </head>
      <body className={`${_amiri.variable} ${_inter.variable} font-sans antialiased`}>
        {/* Google Tag Manager (noscript) */}
        <noscript>
          <iframe
            src="https://www.googletagmanager.com/ns.html?id=GTM-K5BKGDM"
            height="0"
            width="0"
            style={{ display: "none", visibility: "hidden" }}
          ></iframe>
        </noscript>
        {/* End Google Tag Manager (noscript) */}
        {children}

        {/* Schema.org JSON-LD */}
        <Script id="schema-org" type="application/ld+json" strategy="afterInteractive">
          {`
            {
              "@context": "https://schema.org",
              "@type": ["Person", "ProfessionalService"],
              "name": "Alex Seif",
              "jobTitle": "Software Architect & Full-Stack Developer",
              "url": "https://alexseif.com",
              "description": "Software Architect and Full-Stack Developer specializing in high-concurrency systems, Symfony, Drupal, WordPress, and database optimization.",
              "areaServed": ["Netherlands", "Europe", "Global", "Egypt", "UAE", "Saudi Arabia"],
              "knowsAbout": [
                "Software Architecture",
                "Full-Stack Development",
                "Symfony",
                "Drupal Enterprise",
                "WordPress Multisite & FSE",
                "PHP 8",
                "React",
                "Python FastAPI",
                "PostgreSQL PostGIS",
                "MySQL Master-Slave Replication",
                "Zero-Downtime Migrations",
                "Air-Gapped Intranet Architecture",
                "High-Concurrency Systems"
              ]
            }
          `}
        </Script>
      </body>
    </html>
  )
}