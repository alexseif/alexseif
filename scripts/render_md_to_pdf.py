#!/usr/bin/env python3
import sys
import subprocess
import tempfile
from pathlib import Path

CSS_STYLES = """
@page {
    size: A4;
    margin: 15mm 18mm 15mm 18mm;
}

* {
    box-sizing: border-box;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    color: #1a202c;
    background: #ffffff;
    font-size: 9.5pt;
    line-height: 1.45;
    margin: 0;
    padding: 0;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact;
}

h1 {
    font-size: 20pt;
    font-weight: 700;
    color: #0f172a;
    margin: 0 0 2pt 0;
    letter-spacing: -0.5px;
}

h2 {
    font-size: 11.5pt;
    font-weight: 700;
    color: #0f172a;
    border-bottom: 1.5px solid #0284c7;
    padding-bottom: 2pt;
    margin-top: 10pt;
    margin-bottom: 5pt;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    page-break-after: avoid;
}

h3 {
    font-size: 10.5pt;
    font-weight: 700;
    color: #1e293b;
    margin-top: 6pt;
    margin-bottom: 1pt;
    page-break-after: avoid;
}

p {
    margin: 0 0 5pt 0;
}

ul {
    margin: 2pt 0 6pt 0;
    padding-left: 14pt;
}

li {
    margin-bottom: 2.5pt;
    line-height: 1.4;
    page-break-inside: avoid;
}

li strong {
    color: #0f172a;
}

hr {
    border: none;
    border-top: 1px solid #e2e8f0;
    margin: 6pt 0;
}

a {
    color: #0284c7;
    text-decoration: none;
}

strong {
    font-weight: 600;
}

em {
    color: #475569;
}
"""

def render_md_to_pdf(md_path: Path, output_pdf: Path):
    if not md_path.exists():
        print(f"Error: Markdown file {md_path} does not exist.")
        sys.exit(1)

    # 1. Run pandoc to convert MD to HTML body
    pandoc_cmd = ["pandoc", str(md_path), "-f", "markdown", "-t", "html5"]
    res = subprocess.run(pandoc_cmd, capture_output=True, text=True)
    if res.returncode != 0:
        print(f"Pandoc error: {res.stderr}")
        sys.exit(1)

    html_body = res.stdout

    full_html = f"""<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<style>
{CSS_STYLES}
</style>
</head>
<body>
{html_body}
</body>
</html>"""

    with tempfile.NamedTemporaryFile(suffix=".html", mode="w", encoding="utf-8", delete=False) as tmp:
        tmp.write(full_html)
        tmp_path = tmp.name

    try:
        output_pdf.parent.mkdir(parents=True, exist_ok=True)
        chrome_cmd = [
            "google-chrome",
            "--headless=new",
            "--no-sandbox",
            "--disable-gpu",
            "--no-pdf-header-footer",
            f"--print-to-pdf={str(output_pdf)}",
            f"file://{tmp_path}"
        ]
        chrome_res = subprocess.run(chrome_cmd, capture_output=True, text=True)
        if chrome_res.returncode != 0:
            print(f"Chrome error: {chrome_res.stderr}")
            sys.exit(1)
        
        print(f"[SUCCESS] Rendered: {output_pdf} ({output_pdf.stat().st_size:,} bytes)")
    finally:
        Path(tmp_path).unlink(missing_ok=True)

if __name__ == "__main__":
    if len(sys.argv) < 3:
        print("Usage: render_md_to_pdf.py <input.md> <output.pdf>")
        sys.exit(1)
    render_md_to_pdf(Path(sys.argv[1]), Path(sys.argv[2]))
