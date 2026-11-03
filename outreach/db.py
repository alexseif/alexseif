import sqlite3
import json
from datetime import datetime
from pathlib import Path
from typing import Dict, List, Optional, Any
from .config import DB_PATH

_initialized_paths = set()

def get_connection(db_path: Optional[Path] = None) -> sqlite3.Connection:
    path = db_path or DB_PATH
    conn = sqlite3.connect(path)
    conn.row_factory = sqlite3.Row
    str_path = str(path)
    if str_path not in _initialized_paths:
        _init_db_with_conn(conn)
        _initialized_paths.add(str_path)
    return conn

def _init_db_with_conn(conn: sqlite3.Connection) -> None:
    with conn:
        conn.execute("""
            CREATE TABLE IF NOT EXISTS targets (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                domain TEXT UNIQUE NOT NULL,
                company_name TEXT,
                track TEXT NOT NULL DEFAULT 'agency', -- agency, direct_client
                status TEXT NOT NULL DEFAULT 'imported', -- imported, ready, sent, skipped, failed
                contact_name TEXT,
                contact_first_name TEXT,
                contact_title TEXT,
                contact_email TEXT,
                detected_platform TEXT,
                detected_server TEXT,
                tech_confidence INTEGER DEFAULT 0,
                source TEXT DEFAULT 'manual',
                notes TEXT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        """)
        conn.execute("""
            CREATE TABLE IF NOT EXISTS dispatch_logs (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                target_id INTEGER NOT NULL,
                recipient_email TEXT NOT NULL,
                subject TEXT NOT NULL,
                body TEXT NOT NULL,
                provider TEXT NOT NULL,
                template_slug TEXT,
                utm_url TEXT,
                sent_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                status TEXT NOT NULL,
                error_message TEXT,
                FOREIGN KEY(target_id) REFERENCES targets(id)
            )
        """)
        conn.execute("""
            CREATE TABLE IF NOT EXISTS templates (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                slug TEXT UNIQUE NOT NULL,
                track TEXT NOT NULL DEFAULT 'agency',
                subject TEXT NOT NULL,
                body TEXT NOT NULL,
                version INTEGER NOT NULL DEFAULT 1,
                is_active BOOLEAN NOT NULL DEFAULT 1,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        """)
        conn.execute("""
            CREATE TABLE IF NOT EXISTS builtwith_cache (
                domain TEXT PRIMARY KEY,
                raw_json TEXT NOT NULL,
                cached_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        """)

        # Non-destructive migrations for existing tables
        cursor = conn.cursor()
        
        # Check targets columns
        cursor.execute("PRAGMA table_info(targets)")
        target_cols = {col["name"] for col in cursor.fetchall()}
        if "track" not in target_cols:
            cursor.execute("ALTER TABLE targets ADD COLUMN track TEXT NOT NULL DEFAULT 'agency'")
            cursor.execute("UPDATE targets SET track = 'agency' WHERE track IS NULL")
        if "detected_platform" not in target_cols:
            cursor.execute("ALTER TABLE targets ADD COLUMN detected_platform TEXT")
        if "detected_server" not in target_cols:
            cursor.execute("ALTER TABLE targets ADD COLUMN detected_server TEXT")
        if "tech_confidence" not in target_cols:
            cursor.execute("ALTER TABLE targets ADD COLUMN tech_confidence INTEGER DEFAULT 0")

        # Check dispatch_logs columns
        cursor.execute("PRAGMA table_info(dispatch_logs)")
        log_cols = {col["name"] for col in cursor.fetchall()}
        if "template_slug" not in log_cols:
            cursor.execute("ALTER TABLE dispatch_logs ADD COLUMN template_slug TEXT")
        if "utm_url" not in log_cols:
            cursor.execute("ALTER TABLE dispatch_logs ADD COLUMN utm_url TEXT")

def init_db(db_path: Optional[Path] = None) -> None:
    conn = get_connection(db_path)
    conn.close()

def upsert_target(
    domain: str,
    company_name: Optional[str] = None,
    track: str = "agency",
    contact_name: Optional[str] = None,
    contact_title: Optional[str] = None,
    contact_email: Optional[str] = None,
    detected_platform: Optional[str] = None,
    detected_server: Optional[str] = None,
    tech_confidence: int = 0,
    source: str = "manual",
    db_path: Optional[Path] = None,
) -> int:
    domain_clean = domain.strip().lower().replace("http://", "").replace("https://", "").strip("/")
    first_name = ""
    if contact_name:
        parts = contact_name.strip().split()
        first_name = parts[0] if parts else ""

    status = "imported"
    if contact_email:
        status = "ready"

    conn = get_connection(db_path)
    with conn:
        cursor = conn.cursor()
        cursor.execute(
            """
            INSERT INTO targets (
                domain, company_name, track, contact_name, contact_first_name,
                contact_title, contact_email, detected_platform, detected_server,
                tech_confidence, source, status
            )
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
            ON CONFLICT(domain) DO UPDATE SET
                company_name = COALESCE(excluded.company_name, targets.company_name),
                track = COALESCE(excluded.track, targets.track),
                contact_name = COALESCE(excluded.contact_name, targets.contact_name),
                contact_first_name = COALESCE(excluded.contact_first_name, targets.contact_first_name),
                contact_title = COALESCE(excluded.contact_title, targets.contact_title),
                contact_email = COALESCE(excluded.contact_email, targets.contact_email),
                detected_platform = COALESCE(excluded.detected_platform, targets.detected_platform),
                detected_server = COALESCE(excluded.detected_server, targets.detected_server),
                tech_confidence = MAX(excluded.tech_confidence, targets.tech_confidence),
                status = CASE 
                    WHEN targets.status IN ('sent') THEN targets.status 
                    WHEN excluded.contact_email IS NOT NULL THEN 'ready' 
                    ELSE targets.status 
                END,
                updated_at = CURRENT_TIMESTAMP
            """,
            (
                domain_clean,
                company_name or domain_clean.split(".")[0].capitalize(),
                track,
                contact_name,
                first_name,
                contact_title,
                contact_email,
                detected_platform,
                detected_server,
                tech_confidence,
                source,
                status,
            ),
        )
        target_id = cursor.lastrowid or 0
        if not target_id:
            cursor.execute("SELECT id FROM targets WHERE domain = ?", (domain_clean,))
            row = cursor.fetchone()
            target_id = row["id"] if row else 0
    conn.close()
    return target_id

def update_target_contact(
    target_id: int,
    contact_email: str,
    contact_name: Optional[str] = None,
    contact_first_name: Optional[str] = None,
    contact_title: Optional[str] = None,
    source: Optional[str] = None,
    status: str = "ready",
    notes: Optional[str] = None,
    db_path: Optional[Path] = None,
) -> None:
    first_name = contact_first_name
    if not first_name and contact_name:
        parts = contact_name.strip().split()
        first_name = parts[0] if parts else ""

    conn = get_connection(db_path)
    with conn:
        conn.execute(
            """
            UPDATE targets
            SET contact_email = ?,
                contact_name = COALESCE(?, contact_name),
                contact_first_name = COALESCE(?, contact_first_name),
                contact_title = COALESCE(?, contact_title),
                source = COALESCE(?, source),
                status = ?,
                notes = COALESCE(?, notes),
                updated_at = CURRENT_TIMESTAMP
            WHERE id = ?
            """,
            (contact_email, contact_name, first_name, contact_title, source, status, notes, target_id),
        )
    conn.close()

def update_target_technographics(
    target_id: int,
    platform: Optional[str] = None,
    server: Optional[str] = None,
    confidence: int = 0,
    db_path: Optional[Path] = None,
) -> None:
    conn = get_connection(db_path)
    with conn:
        conn.execute(
            """
            UPDATE targets
            SET detected_platform = COALESCE(?, detected_platform),
                detected_server = COALESCE(?, detected_server),
                tech_confidence = MAX(?, tech_confidence),
                updated_at = CURRENT_TIMESTAMP
            WHERE id = ?
            """,
            (platform, server, confidence, target_id),
        )
    conn.close()

def mark_target_status(target_id: int, status: str, notes: Optional[str] = None, db_path: Optional[Path] = None) -> None:
    conn = get_connection(db_path)
    with conn:
        conn.execute(
            """
            UPDATE targets
            SET status = ?,
                notes = COALESCE(?, notes),
                updated_at = CURRENT_TIMESTAMP
            WHERE id = ?
            """,
            (status, notes, target_id),
        )
    conn.close()

def get_targets(
    status: Optional[str] = None,
    track: Optional[str] = None,
    limit: Optional[int] = None,
    db_path: Optional[Path] = None,
) -> List[Dict[str, Any]]:
    conn = get_connection(db_path)
    query = "SELECT * FROM targets WHERE 1=1"
    params: List[Any] = []
    if status:
        query += " AND status = ?"
        params.append(status)
    if track and track != "all":
        query += " AND track = ?"
        params.append(track)
    query += " ORDER BY id ASC"
    if limit:
        query += " LIMIT ?"
        params.append(limit)

    cursor = conn.cursor()
    cursor.execute(query, tuple(params))
    rows = [dict(r) for r in cursor.fetchall()]
    conn.close()
    return rows

def log_dispatch(
    target_id: int,
    recipient_email: str,
    subject: str,
    body: str,
    provider: str,
    status: str,
    template_slug: Optional[str] = None,
    utm_url: Optional[str] = None,
    error_message: Optional[str] = None,
    db_path: Optional[Path] = None,
) -> None:
    conn = get_connection(db_path)
    with conn:
        conn.execute(
            """
            INSERT INTO dispatch_logs (
                target_id, recipient_email, subject, body, provider,
                template_slug, utm_url, status, error_message
            )
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
            """,
            (target_id, recipient_email, subject, body, provider, template_slug, utm_url, status, error_message),
        )
        if status in ("success", "dry_run"):
            conn.execute(
                "UPDATE targets SET status = 'sent', updated_at = CURRENT_TIMESTAMP WHERE id = ?",
                (target_id,),
            )
        elif status == "failed":
            conn.execute(
                "UPDATE targets SET status = 'failed', notes = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?",
                (error_message, target_id),
            )
    conn.close()

def get_stats(track: Optional[str] = None, db_path: Optional[Path] = None) -> Dict[str, int]:
    conn = get_connection(db_path)
    cursor = conn.cursor()
    
    where_clause = ""
    params: List[Any] = []
    if track and track != "all":
        where_clause = " WHERE track = ?"
        params.append(track)

    cursor.execute(f"SELECT status, count(*) as count FROM targets{where_clause} GROUP BY status", tuple(params))
    counts = {r["status"]: r["count"] for r in cursor.fetchall()}
    
    cursor.execute(f"SELECT count(*) as total FROM targets{where_clause}", tuple(params))
    counts["total"] = cursor.fetchone()["total"] or 0

    if track and track != "all":
        cursor.execute(
            """
            SELECT count(*) as total_dispatches 
            FROM dispatch_logs l
            JOIN targets t ON l.target_id = t.id
            WHERE l.status = 'success' AND t.track = ?
            """,
            (track,),
        )
    else:
        cursor.execute("SELECT count(*) as total_dispatches FROM dispatch_logs WHERE status = 'success'")
        
    counts["dispatched"] = cursor.fetchone()["total_dispatches"] or 0
    conn.close()
    return counts

# Template Registry Helpers
def upsert_template(
    slug: str,
    track: str,
    subject: str,
    body: str,
    version: int = 1,
    is_active: bool = True,
    db_path: Optional[Path] = None,
) -> None:
    conn = get_connection(db_path)
    with conn:
        conn.execute(
            """
            INSERT INTO templates (slug, track, subject, body, version, is_active)
            VALUES (?, ?, ?, ?, ?, ?)
            ON CONFLICT(slug) DO UPDATE SET
                track = excluded.track,
                subject = excluded.subject,
                body = excluded.body,
                version = excluded.version,
                is_active = excluded.is_active
            """,
            (slug, track, subject, body, version, is_active),
        )
    conn.close()

def get_template(slug: str, db_path: Optional[Path] = None) -> Optional[Dict[str, Any]]:
    conn = get_connection(db_path)
    cursor = conn.cursor()
    cursor.execute("SELECT * FROM templates WHERE slug = ?", (slug,))
    row = cursor.fetchone()
    conn.close()
    return dict(row) if row else None

def list_templates(track: Optional[str] = None, db_path: Optional[Path] = None) -> List[Dict[str, Any]]:
    conn = get_connection(db_path)
    cursor = conn.cursor()
    query = "SELECT * FROM templates WHERE 1=1"
    params: List[Any] = []
    if track and track != "all":
        query += " AND track = ?"
        params.append(track)
    query += " ORDER BY id ASC"
    cursor.execute(query, tuple(params))
    rows = [dict(r) for r in cursor.fetchall()]
    conn.close()
    return rows

# BuiltWith Caching Helpers
def get_cached_builtwith(domain: str, db_path: Optional[Path] = None) -> Optional[Dict[str, Any]]:
    conn = get_connection(db_path)
    cursor = conn.cursor()
    cursor.execute("SELECT raw_json FROM builtwith_cache WHERE domain = ?", (domain.strip().lower(),))
    row = cursor.fetchone()
    conn.close()
    if row and row["raw_json"]:
        try:
            return json.loads(row["raw_json"])
        except Exception:
            return None
    return None

def set_cached_builtwith(domain: str, data: Dict[str, Any], db_path: Optional[Path] = None) -> None:
    conn = get_connection(db_path)
    with conn:
        conn.execute(
            """
            INSERT INTO builtwith_cache (domain, raw_json)
            VALUES (?, ?)
            ON CONFLICT(domain) DO UPDATE SET
                raw_json = excluded.raw_json,
                cached_at = CURRENT_TIMESTAMP
            """,
            (domain.strip().lower(), json.dumps(data)),
        )
    conn.close()
