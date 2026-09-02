"use client";

import React from "react";
import { openBrevo } from "./utils";

interface BrevoButtonProps {
  children: React.ReactNode;
  className?: string;
  ariaLabel?: string;
  title?: string;
}

export function BrevoButton({
  children,
  className,
  ariaLabel,
  title,
}: BrevoButtonProps) {
  return (
    <button
      type="button"
      onClick={openBrevo}
      className={className}
      aria-label={ariaLabel}
      title={title}
    >
      {children}
    </button>
  );
}
