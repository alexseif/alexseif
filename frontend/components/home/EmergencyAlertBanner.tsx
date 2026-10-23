import Link from "next/link";

export function EmergencyAlertBanner() {
  const message = (
    <span className="inline-flex items-center gap-3 px-6">
      <span className="flex h-2 w-2 rounded-full bg-red-500 animate-pulse" />
      <span className="font-semibold text-red-400 tracking-wider">CRITICAL INCIDENT ADVISORY</span>
      <span className="text-red-500/70 font-mono">//</span>
      <span className="text-red-200">
        php2shell (CVE-2026-109618 & CVE-2026-109619) Remote Code Execution in PHP 5.4+ Core
      </span>
      <span className="text-red-500/70 font-mono">//</span>
      <span className="text-red-400 underline underline-offset-4 decoration-red-500/50 font-semibold group-hover:text-red-200 transition-colors">
        Zero-Downtime Hotpatching & Runtime Audit Available →
      </span>
      <span className="text-red-600 font-mono pl-3">///</span>
    </span>
  );

  return (
    <aside
      aria-label="Security Advisory Banner"
      className="relative w-full overflow-hidden bg-red-950/80 border-b border-red-600/50 py-2.5 z-40 transition-colors hover:bg-red-900/90"
    >
      <Link
        href="/php2shell"
        className="block font-mono text-[11px] md:text-xs tracking-wider uppercase text-red-200 group"
      >
        <div className="animate-marquee-scroll whitespace-nowrap flex">
          {message}
          {message}
          {message}
          {message}
        </div>
      </Link>
    </aside>
  );
}
