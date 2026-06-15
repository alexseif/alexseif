import React from "react"
import type { Metadata } from 'next'
import { Amiri, Inter, Playfair_Display } from 'next/font/google'
import Script from 'next/script'
import './globals.css'

const _amiri = Amiri({ subsets: ["arabic", "latin"], weight: ["400", "700"], variable: "--font-arabic" });
const _inter = Inter({ subsets: ["latin"], variable: "--font-sans" });
const _playfair = Playfair_Display({ subsets: ["latin"], variable: "--font-playfair" });

export const metadata: Metadata = {
  title: 'Alex Seif | Software Architect & Principal Software Engineer | NGO Technical Partner',
  description:
    'Software Architect & Principal Software Engineer. 20+ years of defensive engineering. Trusted Technical Partner for NGOs, enterprises, and high-stakes infrastructures globally.',
  keywords: [
    'Software Architect',
    'Software Engineer',
    'Technical Partner',
    'NGO Technical Partner',
    'CTO as a Service',
    'Systems Architect',
    'Digital Infrastructures',
    'Legacy Monolith Decoupling',
    'Static Code Forensics',
    'State-Preservation Queue Design',
    'Zero-Maintenance Engineering'
  ],
  generator: 'v0.app',
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
        <link
          href="https://assets.calendly.com/assets/external/widget.css"
          rel="stylesheet"
        />
        {/* Google Tag Manager */}
        <script
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
      <body className={`${_amiri.variable} ${_inter.variable} ${_playfair.variable} font-sans antialiased`}>
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

        {/* Calendly */}
        <Script
          src="https://assets.calendly.com/assets/external/widget.js"
          strategy="lazyOnload"
        />

        {/* Schema.org JSON-LD */}
        <Script id="schema-org" type="application/ld+json" strategy="afterInteractive">
          {`
            {
              "@context": "https://schema.org",
              "@type": ["Person", "ProfessionalService"],
              "name": "Alex Seif",
              "jobTitle": "Software Architect & Principal Software Engineer",
              "url": "https://alexseif.com",
              "description": "Expert Software Architect & Principal Software Engineer acting as a Technical Partner for NGOs and enterprise organizations globally.",
              "areaServed": ["World", "North America", "GCC", "Europe", "Egypt", "UAE", "KSA"],
              "knowsAbout": [
                "Software Architecture",
                "Principal Software Engineer",
                "Full Stack Development",
                "NGO Technical Partnership",
                "Legacy Monolith Decoupling",
                "System Integration"
              ]
            }
          `}
        </Script>
      </body>
    </html>
  )
}