import React from "react";

export const openCalendly = (e?: React.MouseEvent) => {
  e?.preventDefault();
  if (typeof window !== "undefined" && (window as any).Calendly) {
    (window as any).Calendly.initPopupWidget({
      url: "https://calendly.com/alex-seif/path-discovery",
    });
  }
  return false;
};
