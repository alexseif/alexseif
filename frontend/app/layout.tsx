import React from "react"
import type { Metadata } from 'next'
import { Amiri, Inter } from 'next/font/google'
import { Analytics } from '@vercel/analytics/next'
import './globals.css'
import { Playfair_Display } from 'next/font/google'

const _amiri = Amiri({ subsets: ["arabic", "latin"], weight: ["400", "700"], variable: "--font-arabic" });
const _inter = Inter({ subsets: ["latin"], variable: "--font-sans" });
const _playfair = Playfair_Display({ subsets: ["latin"], variable: "--font-playfair" });

export const metadata: Metadata = {
  title: 'Alex Seif | Software Architect',
  description: 'Software architect with 20 years designing mission-critical systems across Egypt, UAE, KSA, Russia, Spain, Greece, and Kuwait.',
  generator: 'v0.app',
  icons: {
    icon: [
      {
        url: '/icon-light-32x32.png',
        media: '(prefers-color-scheme: light)',
      },
      {
        url: '/icon-dark-32x32.png',
        media: '(prefers-color-scheme: dark)',
      },
      {
        url: '/icon.svg',
        type: 'image/svg+xml',
      },
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
      <body className={`${_amiri.variable} ${_inter.variable} font-sans antialiased`}>
        {children}
        <Analytics />
      </body>
    </html>
  )
}
