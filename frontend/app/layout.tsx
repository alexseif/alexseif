import React from "react"
import type { Metadata } from 'next'
import { Amiri, Inter, Playfair_Display } from 'next/font/google'
import Script from 'next/script'
import './globals.css'

const _amiri = Amiri({ subsets: ["arabic", "latin"], weight: ["400", "700"], variable: "--font-arabic" });
const _inter = Inter({ subsets: ["latin"], variable: "--font-sans" });
const _playfair = Playfair_Display({ subsets: ["latin"], variable: "--font-playfair" });

export const metadata: Metadata = {
  title: 'Alex Seif | Systems Architect & Technical Partner',
  description:
    'Systems Architect & Technical Partner. 20+ years of defensive engineering, legacy monolith decoupling, and deep-end enterprise & sovereign infrastructure execution.',
  keywords: [
    'Systems Architect',
    'Technical Partner',
    'Sovereign Infrastructures',
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
  const GA_ID = process.env.NEXT_PUBLIC_GA_ID;

  return (
    <html lang="en">
      <head>
        <link
          href="https://assets.calendly.com/assets/external/widget.css"
          rel="stylesheet"
        />
      </head>
      <body className={`${_amiri.variable} ${_inter.variable} ${_playfair.variable} font-sans antialiased`}>
        {children}

        {/* Calendly */}
        <Script
          src="https://assets.calendly.com/assets/external/widget.js"
          strategy="lazyOnload"
        />

        {/* Google Analytics 4 */}
        {GA_ID && (
          <>
            <Script
              src={`https://www.googletagmanager.com/gtag/js?id=${GA_ID}`}
              strategy="afterInteractive"
            />
            <Script id="google-analytics" strategy="afterInteractive">
              {`
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', '${GA_ID}');
              `}
            </Script>
          </>
        )}
      </body>
    </html>
  )
}