"use client";

import React, { useEffect, useState, useTransition } from "react";
import { usePathname } from "next/navigation";

export function NavigationProgressBar() {
  const pathname = usePathname();
  const [isNavigating, setIsNavigating] = useState(false);
  const [progress, setProgress] = useState(0);
  const [isVisible, setIsVisible] = useState(false);

  // When pathname changes, complete navigation and smoothly dismiss the bar
  useEffect(() => {
    if (isNavigating || isVisible) {
      setProgress(100);
      const timer = setTimeout(() => {
        setIsVisible(false);
        setIsNavigating(false);
        setProgress(0);
      }, 250);
      return () => clearTimeout(timer);
    }
  }, [pathname]);

  // Intercept click on internal navigation links
  useEffect(() => {
    const handleAnchorClick = (e: MouseEvent) => {
      const target = (e.target as HTMLElement).closest("a");
      if (!target) return;

      const href = target.getAttribute("href");
      if (!href) return;

      // Ignore external, anchor-only, download, or modifier-clicked links
      if (
        href.startsWith("http") ||
        href.startsWith("mailto:") ||
        href.startsWith("tel:") ||
        href.startsWith("#") ||
        target.getAttribute("target") === "_blank" ||
        e.metaKey ||
        e.ctrlKey ||
        e.shiftKey ||
        e.altKey
      ) {
        return;
      }

      try {
        const targetUrl = new URL(href, window.location.href);
        if (targetUrl.pathname !== window.location.pathname) {
          setIsVisible(true);
          setIsNavigating(true);
          setProgress(25);

          setTimeout(() => {
            setProgress((p) => (p > 0 && p < 70 ? 70 : p));
          }, 100);

          setTimeout(() => {
            setProgress((p) => (p > 0 && p < 85 ? 85 : p));
          }, 300);
        }
      } catch {
        // Ignore malformed URLs
      }
    };

    document.addEventListener("click", handleAnchorClick, { capture: true });
    return () => {
      document.removeEventListener("click", handleAnchorClick, { capture: true });
    };
  }, []);

  // Safety fallback timeout: never stay stuck
  useEffect(() => {
    if (isNavigating) {
      const timeout = setTimeout(() => {
        setIsNavigating(false);
        setIsVisible(false);
        setProgress(0);
      }, 4000);
      return () => clearTimeout(timeout);
    }
  }, [isNavigating]);

  if (!isVisible) return null;

  return (
    <div
      aria-hidden="true"
      className="fixed top-0 left-0 right-0 h-[2.5px] z-[9999] pointer-events-none bg-transparent"
    >
      <div
        className="h-full bg-primary shadow-[0_0_8px_#B8860B,0_0_2px_#B8860B]"
        style={{
          width: `${progress}%`,
          opacity: progress === 100 ? 0 : 1,
          transition:
            progress === 100
              ? "width 150ms ease-out, opacity 250ms ease-in"
              : "width 300ms ease-out",
        }}
      />
    </div>
  );
}
