import argparse
import csv
import sys
from pathlib import Path
from typing import Optional

from .db import (
    init_db,
    upsert_target,
    get_targets,
    update_target_contact,
    mark_target_status,
    get_stats,
    get_connection,
)
from .enricher import enrich_domain
from .sender import dispatch_target, apply_rate_limit
from .harvester import harvest_presets, export_to_csv, import_to_db, PRESET_TARGETS
from .config import (
    DAILY_SEND_LIMIT,
    OUTREACH_PROVIDER,
    SENDER_EMAIL,
    REPLY_TO_EMAIL,
)

def cmd_import(args: argparse.Namespace) -> None:
    csv_path = Path(args.file)
    if not csv_path.exists():
        print(f"Error: File not found: {csv_path}", file=sys.stderr)
        sys.exit(1)

    print(f"[*] Importing targets from {csv_path}...")
    imported_count = 0

    with open(csv_path, mode="r", encoding="utf-8-sig") as f:
        reader = csv.DictReader(f)
        for row in reader:
            # Flexible column header lookups
            domain = row.get("domain") or row.get("Domain") or row.get("website") or row.get("Website")
            if not domain:
                continue

            company = row.get("company") or row.get("Company") or row.get("company_name") or row.get("name")
            contact_name = row.get("contact_name") or row.get("name") or row.get("Contact")
            contact_title = row.get("title") or row.get("Title") or row.get("position")
            contact_email = row.get("email") or row.get("Email") or row.get("contact_email")

            upsert_target(
                domain=domain,
                company_name=company,
                contact_name=contact_name,
                contact_title=contact_title,
                contact_email=contact_email,
                source="csv_import",
            )
            imported_count += 1

    print(f"[+] Successfully processed {imported_count} targets.")
    show_status_summary()

def cmd_add(args: argparse.Namespace) -> None:
    target_id = upsert_target(
        domain=args.domain,
        company_name=args.company,
        contact_name=args.name,
        contact_title=args.title,
        contact_email=args.email,
        source="cli_manual",
    )
    print(f"[+] Added target {args.domain} (ID: {target_id}).")
    show_status_summary()

def cmd_enrich(args: argparse.Namespace) -> None:
    targets = get_targets(status="imported", limit=args.limit)
    if not targets:
        print("[*] No un-enriched targets found. Run 'import' or 'add' first.")
        return

    print(f"[*] Enriching {len(targets)} targets...")
    for idx, t in enumerate(targets, start=1):
        domain = t["domain"]
        company = t["company_name"]
        print(f"[{idx}/{len(targets)}] Discovering contacts for {domain} ({company})...")

        res = enrich_domain(domain=domain, company_name=company)
        if res and res.email:
            update_target_contact(
                target_id=t["id"],
                contact_email=res.email,
                contact_name=res.full_name,
                contact_first_name=res.first_name,
                contact_title=res.title,
                source=res.source,
                status="ready",
                notes=res.notes,
            )
            print(f"    -> Found: {res.email} ({res.first_name or 'N/A'}, {res.title or 'N/A'}) [{res.source}]")
        else:
            mark_target_status(
                target_id=t["id"],
                status="skipped",
                notes="No contact or mail exchanger identified",
            )
            print(f"    -> [!] Could not identify contacts for {domain}. Marked as skipped.")

    print("[+] Enrichment cycle complete.")
    show_status_summary()

def cmd_send(args: argparse.Namespace) -> None:
    is_live = bool(args.live)
    limit = args.limit or DAILY_SEND_LIMIT

    ready_targets = get_targets(status="ready", limit=limit)
    if not ready_targets:
        print("[*] No targets in 'ready' status with contact emails. Run 'enrich' first.")
        return

    mode_label = "LIVE SEND" if is_live else "DRY-RUN (SAFETY MODE)"
    print(f"[*] Preparing {mode_label} for {len(ready_targets)} targets...")
    print(f"[*] Sender: {SENDER_EMAIL} | Reply-To: {REPLY_TO_EMAIL}")
    print(f"[*] Provider: {args.provider or OUTREACH_PROVIDER}")

    if is_live and not args.yes:
        confirm = input(f"Are you sure you want to send {len(ready_targets)} real emails? (yes/no): ")
        if confirm.lower() not in ("yes", "y"):
            print("Aborted by user.")
            return

    for idx, target in enumerate(ready_targets, start=1):
        domain = target["domain"]
        email = target["contact_email"]
        company = target["company_name"]

        print(f"[{idx}/{len(ready_targets)}] Processing {email} ({company} // {domain})...")
        ok, msg = dispatch_target(
            target=target,
            dry_run=not is_live,
            provider=args.provider,
        )

        if ok:
            print(f"    [OK] {msg}")
        else:
            print(f"    [ERR] {msg}")

        # In live mode, throttle between dispatches
        if is_live and idx < len(ready_targets):
            delay = apply_rate_limit()
            print(f"    ... waiting {delay:.1f}s before next send ...")

    print("[+] Dispatch run finished.")
    show_status_summary()

def cmd_harvest(args: argparse.Namespace) -> None:
    regions = ["nl", "de", "uk"] if "all" in args.regions else args.regions
    print(f"[*] Harvesting target agencies for regions: {', '.join(regions)}...")
    targets = harvest_presets(regions)
    print(f"[+] Found {len(targets)} qualified candidate agencies.")

    if args.to_db:
        added = import_to_db(targets)
        print(f"[+] Imported {added} verified targets directly into database.")

    csv_path = Path(args.output) if args.output else Path("outreach/targets.csv")
    added_csv = export_to_csv(targets, csv_path)
    print(f"[+] Saved {added_csv} verified targets to {csv_path}.")
    show_status_summary()

def show_status_summary() -> None:
    stats = get_stats()
    print("\n--- Pipeline Status ---")
    print(f"  Total Targets:      {stats.get('total', 0)}")
    print(f"  Pending Enrichment: {stats.get('imported', 0)}")
    print(f"  Ready to Send:      {stats.get('ready', 0)}")
    print(f"  Successfully Sent:  {stats.get('sent', 0)}")
    print(f"  Skipped / Failed:   {stats.get('skipped', 0) + stats.get('failed', 0)}")
    print(f"  Live Dispatches:    {stats.get('dispatched', 0)}")
    print("-----------------------\n")

def cmd_status(args: argparse.Namespace) -> None:
    init_db()
    show_status_summary()

    # Show recent dispatches if any
    conn = get_connection()
    logs = conn.execute(
        "SELECT l.*, t.company_name FROM dispatch_logs l JOIN targets t ON l.target_id = t.id ORDER BY l.id DESC LIMIT 5"
    ).fetchall()
    conn.close()

    if logs:
        print("Recent Dispatch Activity:")
        for log in logs:
            print(f"  [{log['sent_at']}] [{log['status'].upper()}] {log['recipient_email']} ({log['company_name']}) - {log['subject']}")
        print()

def main() -> None:
    init_db()
    parser = argparse.ArgumentParser(description="PHP Emergency Patch Outreach Automation Agent")
    subparsers = parser.add_subparsers(dest="command", required=True)

    # harvest
    p_harvest = subparsers.add_parser("harvest", help="Harvest pre-qualified agencies by region")
    p_harvest.add_argument(
        "--regions",
        "-r",
        nargs="+",
        default=["nl"],
        choices=["nl", "de", "uk", "all"],
        help="Target regions to harvest (default: nl)",
    )
    p_harvest.add_argument(
        "--output",
        "-o",
        default="outreach/targets.csv",
        help="CSV file destination (default: outreach/targets.csv)",
    )
    p_harvest.add_argument(
        "--to-db",
        action="store_true",
        help="Automatically import harvested targets directly into SQLite database",
    )
    p_harvest.set_defaults(func=cmd_harvest)

    # import
    p_import = subparsers.add_parser("import", help="Import domains and companies from CSV")
    p_import.add_argument("--file", "-f", required=True, help="Path to CSV file")
    p_import.set_defaults(func=cmd_import)

    # add
    p_add = subparsers.add_parser("add", help="Add a single domain manually")
    p_add.add_argument("domain", help="Target domain (e.g., example.com)")
    p_add.add_argument("--company", help="Company name")
    p_add.add_argument("--name", help="Contact person's full name")
    p_add.add_argument("--title", help="Contact job title")
    p_add.add_argument("--email", help="Contact email address")
    p_add.set_defaults(func=cmd_add)

    # enrich
    p_enrich = subparsers.add_parser("enrich", help="Discover decision-maker contacts for imported targets")
    p_enrich.add_argument("--limit", "-l", type=int, default=None, help="Max targets to enrich in this run")
    p_enrich.set_defaults(func=cmd_enrich)

    # send
    p_send = subparsers.add_parser("send", help="Send outreach emails (dry-run by default)")
    p_send.add_argument("--live", action="store_true", help="Execute real email dispatch (omit for dry-run)")
    p_send.add_argument("--yes", "-y", action="store_true", help="Skip confirmation prompt in live mode")
    p_send.add_argument("--limit", "-l", type=int, default=None, help="Max emails to send")
    p_send.add_argument("--provider", choices=["smtp", "brevo"], help="Override sending provider")
    p_send.set_defaults(func=cmd_send)

    # status
    p_status = subparsers.add_parser("status", help="Show current pipeline metrics and recent activity")
    p_status.set_defaults(func=cmd_status)

    args = parser.parse_args()
    args.func(args)

if __name__ == "__main__":
    main()
