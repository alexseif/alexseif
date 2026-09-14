#!/usr/bin/env python3
import os
import sys
import time
import shutil
import urllib.request
import subprocess
from pathlib import Path

ROOT_DIR = Path(__file__).resolve().parent.parent
FRONTEND_DIR = ROOT_DIR / "frontend"
OUTPUT_PDF_ROOT = ROOT_DIR / "Alex_Seif_Software_Architect_CV.pdf"
PUBLIC_DIR = FRONTEND_DIR / "public"
OUTPUT_PDF_PUBLIC = PUBLIC_DIR / "Alex_Seif_Software_Architect_CV.pdf"
OUTPUT_PDF_PUBLIC_ALIAS = PUBLIC_DIR / "Alex-Seif-CV.pdf"

PORT = 4123
URL = f"http://127.0.0.1:{PORT}/resume"

def wait_for_server(url, timeout=15):
    start = time.time()
    while time.time() - start < timeout:
        try:
            with urllib.request.urlopen(url, timeout=2) as response:
                if response.status == 200:
                    return True
        except Exception:
            time.sleep(0.5)
    return False

def main():
    print("============================================================")
    print("DUTCH HSM CV PROGRAMMATIC PDF GENERATOR")
    print("Target Role: Senior Software Architect (€90k+ Tier - Netherlands)")
    print("============================================================")

    # 1. Verify cv.md canonical source
    cv_path = ROOT_DIR / "cv.md"
    if not cv_path.exists():
        print(f"[ERROR] Canonical cv.md not found at {cv_path}")
        sys.exit(1)
    print(f"[1/3] Verified canonical CV source: {cv_path.name}")

    # 2. Build Next.js
    print("[2/3] Building Next.js production bundle from cv.md...")
    res = subprocess.run(["npm", "run", "build"], cwd=str(FRONTEND_DIR), stdout=subprocess.DEVNULL)
    if res.returncode != 0:
        print("[ERROR] Next.js build failed")
        sys.exit(1)

    # 3. Start temporary next server
    print(f"[3/3] Launching headless Next.js server on port {PORT} & generating PDF...")
    server_proc = subprocess.Popen(
        ["npx", "next", "start", "-p", str(PORT)],
        cwd=str(FRONTEND_DIR),
        stdout=subprocess.DEVNULL,
        stderr=subprocess.DEVNULL
    )

    try:
        if not wait_for_server(URL, timeout=20):
            print("[ERROR] Server failed to start or respond in time.")
            sys.exit(1)

        print("[4/4] Generating print-ready A4 PDF via Headless Chrome...")
        chrome_cmd = [
            "google-chrome",
            "--headless=new",
            "--no-sandbox",
            "--disable-gpu",
            "--no-pdf-header-footer",
            f"--print-to-pdf={str(OUTPUT_PDF_ROOT)}",
            URL
        ]
        res = subprocess.run(chrome_cmd, capture_output=True, text=True)
        if res.returncode != 0:
            print(f"[ERROR] Chrome PDF generation failed: {res.stderr}")
            sys.exit(1)

        # Copy to public directories
        PUBLIC_DIR.mkdir(parents=True, exist_ok=True)
        shutil.copy2(OUTPUT_PDF_ROOT, OUTPUT_PDF_PUBLIC)
        shutil.copy2(OUTPUT_PDF_ROOT, OUTPUT_PDF_PUBLIC_ALIAS)

        file_size = OUTPUT_PDF_ROOT.stat().st_size
        print("============================================================")
        print(f"[SUCCESS] PDF Generated: {OUTPUT_PDF_ROOT.name} ({file_size:,} bytes)")
        print(f"[SUCCESS] Public Asset:  {OUTPUT_PDF_PUBLIC.relative_to(ROOT_DIR)}")
        print(f"[SUCCESS] Public Alias:  {OUTPUT_PDF_PUBLIC_ALIAS.relative_to(ROOT_DIR)}")
        print("============================================================")

    finally:
        server_proc.terminate()
        server_proc.wait()

if __name__ == "__main__":
    main()
