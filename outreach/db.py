import sqlite3
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
                status TEXT NOT NULL DEFAULT 'imported',
                contact_name TEXT,
                contact_first_name TEXT,
                contact_title TEXT,
                contact_email TEXT,
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
                sent_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                status TEXT NOT NULL,
                error_message TEXT,
                FOREIGN KEY(target_id) REFERENCES targets(id)
            )
        """)

def init_db(db_path: Optional[Path] = None) -> None:
    conn = get_connection(db_path)
    conn.close()

def upsert_target(
    domain: str,
    company_name: Optional[str] = None,
    contact_name: Optional[str] = None,
    contact_title: Optional[str] = None,
    contact_email: Optional[str] = None,
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
            INSERT INTO targets (domain, company_name, contact_name, contact_first_name, contact_title, contact_email, source, status)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)
            ON CONFLICT(domain) DO UPDATE SET
                company_name = COALESCE(excluded.company_name, targets.company_name),
                contact_name = COALESCE(excluded.contact_name, targets.contact_name),
                contact_first_name = COALESCE(excluded.contact_first_name, targets.contact_first_name),
                contact_title = COALESCE(excluded.contact_title, targets.contact_title),
                contact_email = COALESCE(excluded.contact_email, targets.contact_email),
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
                contact_name,
                first_name,
                contact_title,
                contact_email,
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

def get_targets(status: Optional[str] = None, limit: Optional[int] = None, db_path: Optional[Path] = None) -> List[Dict[str, Any]]:
    conn = get_connection(db_path)
    query = "SELECT * FROM targets"
    params: List[Any] = []
    if status:
        query += " WHERE status = ?"
        params.append(status)
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
    error_message: Optional[str] = None,
    db_path: Optional[Path] = None,
) -> None:
    conn = get_connection(db_path)
    with conn:
        conn.execute(
            """
            INSERT INTO dispatch_logs (target_id, recipient_email, subject, body, provider, status, error_message)
            VALUES (?, ?, ?, ?, ?, ?, ?)
            """,
            (target_id, recipient_email, subject, body, provider, status, error_message),
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

def get_stats(db_path: Optional[Path] = None) -> Dict[str, int]:
    conn = get_connection(db_path)
    cursor = conn.cursor()
    cursor.execute("SELECT status, count(*) as count FROM targets GROUP BY status")
    counts = {r["status"]: r["count"] for r in cursor.fetchall()}
    cursor.execute("SELECT count(*) as total FROM targets")
    counts["total"] = cursor.fetchone()["total"] or 0
    cursor.execute("SELECT count(*) as total_dispatches FROM dispatch_logs WHERE status = 'success'")
    counts["dispatched"] = cursor.fetchone()["total_dispatches"] or 0
    conn.close()
    return counts
