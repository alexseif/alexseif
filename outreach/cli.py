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
    update_target_technographics,
    mark_target_status,
    get_stats,
    get_connection,
    list_templates,
)
from .enricher import enrich_domain
from .sender import dispatch_target, apply_rate_limit, load_template_file, build_utm_url
from .harvester import harvest_presets, export_to_csv, import_to_db, PRESET_TARGETS
from .builtwith import inspect_domain
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

    track = args.track or "agency"
    print(f"[*] Importing targets from {csv_path} into Track: [{track.upper()}]...")
    imported_count = 0

    with open(csv_path, mode="r", encoding="utf-8-sig") as f:
        reader = csv.DictReader(f)
        for row in reader:
            domain = row.get("domain") or row.get("Domain") or row.get("website") or row.get("Website")
            if not domain:
                continue

            company = row.get("company") or row.get("Company") or row.get("company_name") or row.get("name")
            contact_name = row.get("contact_name") or row.get("name") or row.get("Contact")
            contact_title = row.get("title") or row.get("Title") or row.get("position")
            contact_email = row.get("email") or row.get("Email") or row.get("contact_email")
            row_track = row.get("track") or track

            upsert_target(
                domain=domain,
                company_name=company,
                track=row_track,
                contact_name=contact_name,
                contact_title=contact_title,
                contact_email=contact_email,
                source="csv_import",
            )
            imported_count += 1

    print(f"[+] Successfully processed {imported_count} targets.")
    show_status_summary(track=track)

def cmd_add(args: argparse.Namespace) -> None:
    track = args.track or "agency"
    target_id = upsert_target(
        domain=args.domain,
        company_name=args.company,
        track=track,
        contact_name=args.name,
        contact_title=args.title,
        contact_email=args.email,
        source="cli_manual",
    )
    print(f"[+] Added target {args.domain} (ID: {target_id}) under Track: [{track.upper()}].")
    show_status_summary(track=track)

def cmd_inspect(args: argparse.Namespace) -> None:
    print(f"[*] Running technographic inspection for: {args.domain}...")
    res = inspect_domain(args.domain, use_cache=not args.fresh)
    print("\n--- Technographic Profile ---")
    print(f"  Domain:     {res.get('domain')}")
    print(f"  Platform:   {res.get('platform')}")
    print(f"  Server:     {res.get('server')}")
    print(f"  Is PHP:     {res.get('is_php')}")
    print(f"  Is Node.js: {res.get('is_nodejs')}")
    print(f"  Confidence: {res.get('confidence')}%")
    print(f"  Source:     {res.get('source')}")
    if res.get("signals"):
        print(f"  Signals:    {', '.join(res.get('signals'))}")
    if res.get("technologies"):
        print(f"  Tech Tags:  {', '.join(res.get('technologies'))}")
    print("-----------------------------\n")

def cmd_fingerprint(args: argparse.Namespace) -> None:
    targets = get_targets(track=args.track, limit=args.limit)
    if not targets:
        print("[*] No targets found to fingerprint.")
        return

    print(f"[*] Fingerprinting {len(targets)} targets (Track: {args.track or 'ALL'})...")
    for idx, t in enumerate(targets, start=1):
        domain = t["domain"]
        res = inspect_domain(domain)
        platform = res.get("platform")
        server = res.get("server")
        confidence = res.get("confidence", 0)

        update_target_technographics(
            target_id=t["id"],
            platform=platform,
            server=server,
            confidence=confidence,
        )
        print(f"[{idx}/{len(targets)}] {domain:<25} -> {platform:<25} ({server}) [{confidence}%]")

    print("[+] Fingerprinting complete.")

def cmd_enrich(args: argparse.Namespace) -> None:
    targets = get_targets(status="imported", track=args.track, limit=args.limit)
    if not targets:
        print("[*] No un-enriched targets found. Run 'import', 'harvest', or 'add' first.")
        return

    print(f"[*] Enriching {len(targets)} targets (Track: {args.track or 'ALL'})...")
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
    show_status_summary(track=args.track)

def cmd_send(args: argparse.Namespace) -> None:
    is_live = bool(args.live)
    limit = args.limit or DAILY_SEND_LIMIT
    track = args.track or "all"

    ready_targets = get_targets(status="ready", track=track, limit=limit)
    if not ready_targets:
        print(f"[*] No targets in 'ready' status for Track: [{track.upper()}]. Run 'enrich' first.")
        return

    mode_label = "LIVE SEND" if is_live else "DRY-RUN (SAFETY MODE)"
    print(f"[*] Preparing {mode_label} for {len(ready_targets)} targets...")
    print(f"[*] Track Filter: [{track.upper()}] | Template Override: {args.template or 'AUTO (by track)'}")
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
        target_track = target.get("track") or "agency"

        print(f"[{idx}/{len(ready_targets)}] Processing {email} ({company} // {domain} // Track: {target_track})...", flush=True)
        ok, msg = dispatch_target(
            target=target,
            dry_run=not is_live,
            provider=args.provider,
            template_slug=args.template,
        )

        if ok:
            print(f"    [OK] {msg}", flush=True)
        else:
            print(f"    [ERR] {msg}", flush=True)

        if is_live and idx < len(ready_targets):
            delay = apply_rate_limit()
            print(f"    ... waiting {delay:.1f}s before next send ...", flush=True)

    print("[+] Dispatch run finished.")
    show_status_summary(track=track)

def cmd_harvest(args: argparse.Namespace) -> None:
    regions = ["nl", "de", "uk"] if "all" in args.regions else args.regions
    track = args.track or "agency"
    print(f"[*] Harvesting target agencies for regions: {', '.join(regions)} (Track: {track})...")
    targets = harvest_presets(regions)
    print(f"[+] Found {len(targets)} qualified candidate agencies.")

    if args.to_db:
        init_db()
        added = 0
        for domain, company, _ in targets:
            upsert_target(domain=domain, company_name=company, track=track, source="harvester")
            added += 1
        print(f"[+] Imported {added} verified targets directly into database under Track: [{track.upper()}].")

    csv_path = Path(args.output) if args.output else Path("outreach/targets.csv")
    added_csv = export_to_csv(targets, csv_path)
    print(f"[+] Saved {added_csv} verified targets to {csv_path}.")
    show_status_summary(track=track)

def show_status_summary(track: Optional[str] = None) -> None:
    if not track or track == "all":
        stats_all = get_stats()
        stats_agency = get_stats(track="agency")
        stats_client = get_stats(track="direct_client")

        print("\n--- Pipeline Summary (All Tracks) ---")
        print(f"  Total Targets:      {stats_all.get('total', 0)}")
        print(f"  Pending Enrichment: {stats_all.get('imported', 0)}")
        print(f"  Ready to Send:      {stats_all.get('ready', 0)}")
        print(f"  Successfully Sent:  {stats_all.get('sent', 0)}")
        print(f"  Live Dispatches:    {stats_all.get('dispatched', 0)}")
        print("-------------------------------------")
        print(f"  Track 1 [AGENCY]:        {stats_agency.get('total', 0)} total | {stats_agency.get('sent', 0)} sent | {stats_agency.get('ready', 0)} ready")
        print(f"  Track 2 [DIRECT_CLIENT]: {stats_client.get('total', 0)} total | {stats_client.get('sent', 0)} sent | {stats_client.get('ready', 0)} ready")
        print("-------------------------------------\n")
    else:
        stats = get_stats(track=track)
        print(f"\n--- Pipeline Status [Track: {track.upper()}] ---")
        print(f"  Total Targets:      {stats.get('total', 0)}")
        print(f"  Pending Enrichment: {stats.get('imported', 0)}")
        print(f"  Ready to Send:      {stats.get('ready', 0)}")
        print(f"  Successfully Sent:  {stats.get('sent', 0)}")
        print(f"  Skipped / Failed:   {stats.get('skipped', 0) + stats.get('failed', 0)}")
        print(f"  Live Dispatches:    {stats.get('dispatched', 0)}")
        print("------------------------------------------\n")

def cmd_status(args: argparse.Namespace) -> None:
    init_db()
    show_status_summary(track=args.track)

    conn = get_connection()
    where_clause = ""
    params = []
    if args.track and args.track != "all":
        where_clause = " WHERE t.track = ?"
        params.append(args.track)

    logs = conn.execute(
        f"""
        SELECT l.*, t.company_name, t.track 
        FROM dispatch_logs l 
        JOIN targets t ON l.target_id = t.id 
        {where_clause}
        ORDER BY l.id DESC LIMIT 10
        """,
        tuple(params),
    ).fetchall()
    conn.close()

    if logs:
        print("Recent Dispatch Activity:")
        for log in logs:
            slug_tag = f"[{log['template_slug']}]" if log["template_slug"] else ""
            print(f"  [{log['sent_at']}] [{log['status'].upper()}] [{log['track'].upper()}] {slug_tag} {log['recipient_email']} - {log['subject']}")
        print()

def cmd_list(args: argparse.Namespace) -> None:
    init_db()
    status_filter = args.status if args.status != "all" else None
    targets = get_targets(status=status_filter, track=args.track)
    if not targets:
        print(f"[*] No targets found matching Track: {args.track}, Status: {args.status}")
        return

    conn = get_connection()
    print(f"\n{'ID':<4} {'Company':<20} {'Domain':<22} {'Track':<14} {'Platform':<22} {'Email':<28} {'Status':<8} {'Sent At':<19}")
    print("-" * 145)
    for t in targets:
        tid = t["id"]
        company = (t["company_name"] or "")[:18]
        domain = (t["domain"] or "")[:20]
        track = (t["track"] or "agency")[:12]
        platform = (t["detected_platform"] or "Unknown")[:20]
        email = (t["contact_email"] or "N/A")[:26]
        status = t["status"].upper()

        log = conn.execute(
            "SELECT sent_at FROM dispatch_logs WHERE target_id = ? ORDER BY id DESC LIMIT 1", (tid,)
        ).fetchone()
        sent_at = log["sent_at"] if log else "-"

        print(f"{tid:<4} {company:<20} {domain:<22} {track:<14} {platform:<22} {email:<28} {status:<8} {sent_at:<19}")
    conn.close()
    print("-" * 145)
    print(f"Total: {len(targets)} targets\n")

def cmd_export(args: argparse.Namespace) -> None:
    init_db()
    out_file = Path(args.output or "outreach/campaign_report.csv")
    targets = get_targets(track=args.track)
    conn = get_connection()

    with open(out_file, "w", encoding="utf-8", newline="") as f:
        writer = csv.writer(f)
        writer.writerow([
            "ID", "Company", "Domain", "Track", "Detected Platform", "Detected Server",
            "Contact Name", "Contact First Name", "Contact Title", "Contact Email",
            "Status", "Template Slug", "UTM URL", "Sent At", "Notes"
        ])
        for t in targets:
            tid = t["id"]
            log = conn.execute(
                "SELECT template_slug, utm_url, sent_at FROM dispatch_logs WHERE target_id = ? ORDER BY id DESC LIMIT 1",
                (tid,)
            ).fetchone()
            template_slug = log["template_slug"] if log else ""
            utm_url = log["utm_url"] if log else ""
            sent_at = log["sent_at"] if log else ""

            writer.writerow([
                tid,
                t["company_name"],
                t["domain"],
                t["track"],
                t["detected_platform"] or "",
                t["detected_server"] or "",
                t["contact_name"] or "",
                t["contact_first_name"] or "",
                t["contact_title"] or "",
                t["contact_email"] or "",
                t["status"],
                template_slug,
                utm_url,
                sent_at,
                t["notes"] or "",
            ])
    conn.close()
    print(f"[+] Exported tracking report for Track [{args.track or 'ALL'}] to: {out_file}")

def cmd_templates(args: argparse.Namespace) -> None:
    init_db()
    # Ensure standard files are registered
    load_template_file("agency_v1", track="agency")
    load_template_file("direct_client_v1", track="direct_client")

    templates = list_templates(track=args.track)
    print(f"\n{'ID':<4} {'Slug':<20} {'Track':<15} {'Version':<8} {'Subject'}")
    print("-" * 80)
    for tmpl in templates:
        print(f"{tmpl['id']:<4} {tmpl['slug']:<20} {tmpl['track']:<15} v{tmpl['version']:<7} {tmpl['subject']}")
    print("-" * 80)
    print(f"Total: {len(templates)} templates\n")

def main() -> None:
    init_db()
    parser = argparse.ArgumentParser(description="Multi-Track PHP & Node.js Outreach Automation Agent")
    subparsers = parser.add_subparsers(dest="command", required=True)

    # harvest
    p_harvest = subparsers.add_parser("harvest", help="Harvest pre-qualified agencies by region")
    p_harvest.add_argument("--regions", "-r", nargs="+", default=["nl"], choices=["nl", "de", "uk", "all"])
    p_harvest.add_argument("--track", choices=["agency", "direct_client"], default="agency")
    p_harvest.add_argument("--output", "-o", default="outreach/targets.csv")
    p_harvest.add_argument("--to-db", action="store_true")
    p_harvest.set_defaults(func=cmd_harvest)

    # import
    p_import = subparsers.add_parser("import", help="Import domains and companies from CSV")
    p_import.add_argument("--file", "-f", required=True, help="Path to CSV file")
    p_import.add_argument("--track", choices=["agency", "direct_client"], default="agency")
    p_import.set_defaults(func=cmd_import)

    # add
    p_add = subparsers.add_parser("add", help="Add a single domain manually")
    p_add.add_argument("domain", help="Target domain (e.g., example.com)")
    p_add.add_argument("--company", help="Company name")
    p_add.add_argument("--track", choices=["agency", "direct_client"], default="agency")
    p_add.add_argument("--name", help="Contact person's full name")
    p_add.add_argument("--title", help="Contact job title")
    p_add.add_argument("--email", help="Contact email address")
    p_add.set_defaults(func=cmd_add)

    # inspect
    p_inspect = subparsers.add_parser("inspect", help="Inspect domain technographics (BuiltWith / Passive)")
    p_inspect.add_argument("domain", help="Target domain to inspect")
    p_inspect.add_argument("--fresh", action="store_true", help="Bypass SQLite cache")
    p_inspect.set_defaults(func=cmd_inspect)

    # fingerprint
    p_fp = subparsers.add_parser("fingerprint", help="Batch fingerprint targets to detect CMS and servers")
    p_fp.add_argument("--track", choices=["agency", "direct_client", "all"], default="all")
    p_fp.add_argument("--limit", "-l", type=int, default=None)
    p_fp.set_defaults(func=cmd_fingerprint)

    # enrich
    p_enrich = subparsers.add_parser("enrich", help="Discover decision-maker contacts for imported targets")
    p_enrich.add_argument("--track", choices=["agency", "direct_client", "all"], default="all")
    p_enrich.add_argument("--limit", "-l", type=int, default=None)
    p_enrich.set_defaults(func=cmd_enrich)

    # send
    p_send = subparsers.add_parser("send", help="Send outreach emails (dry-run by default)")
    p_send.add_argument("--track", choices=["agency", "direct_client", "all"], default="all")
    p_send.add_argument("--template", "-t", help="Template slug override (e.g., agency_v1, direct_client_v1)")
    p_send.add_argument("--live", action="store_true", help="Execute real email dispatch (omit for dry-run)")
    p_send.add_argument("--yes", "-y", action="store_true", help="Skip confirmation prompt in live mode")
    p_send.add_argument("--limit", "-l", type=int, default=None)
    p_send.add_argument("--provider", choices=["smtp", "brevo"])
    p_send.set_defaults(func=cmd_send)

    # status
    p_status = subparsers.add_parser("status", help="Show current pipeline metrics and recent activity")
    p_status.add_argument("--track", choices=["agency", "direct_client", "all"], default="all")
    p_status.set_defaults(func=cmd_status)

    # list
    p_list = subparsers.add_parser("list", help="List targets with status, track, and reach timestamps")
    p_list.add_argument("--track", choices=["agency", "direct_client", "all"], default="all")
    p_list.add_argument("--status", "-s", default="all", choices=["all", "sent", "ready", "imported", "skipped", "failed"])
    p_list.set_defaults(func=cmd_list)

    # export
    p_export = subparsers.add_parser("export", help="Export full campaign tracking report to CSV")
    p_export.add_argument("--track", choices=["agency", "direct_client", "all"], default="all")
    p_export.add_argument("--output", "-o", default="outreach/campaign_report.csv")
    p_export.set_defaults(func=cmd_export)

    # templates
    p_tmpl = subparsers.add_parser("templates", help="List registered email templates")
    p_tmpl.add_argument("--track", choices=["agency", "direct_client", "all"], default="all")
    p_tmpl.set_defaults(func=cmd_templates)

    args = parser.parse_args()
    args.func(args)

if __name__ == "__main__":
    main()
