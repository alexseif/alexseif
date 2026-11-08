import time
import random
import smtplib
from pathlib import Path
from email.message import EmailMessage
from typing import Dict, Any, Optional, Tuple
import httpx

from .config import (
    OUTREACH_PROVIDER,
    SMTP_HOST,
    SMTP_PORT,
    SMTP_USER,
    SMTP_PASSWORD,
    SMTP_USE_TLS,
    BREVO_API_KEY,
    SENDER_NAME,
    SENDER_EMAIL,
    REPLY_TO_EMAIL,
    MIN_DELAY_SECONDS,
    MAX_DELAY_SECONDS,
)
from .db import log_dispatch, upsert_template, get_template

TEMPLATES_DIR = Path(__file__).resolve().parent / "templates"

def build_utm_url(domain: str, track: str = "agency", template_slug: str = "v1") -> str:
    clean_domain = domain.strip().lower().replace("http://", "").replace("https://", "").strip("/")
    campaign = template_slug if template_slug.startswith(f"{track}_") else f"{track}_{template_slug}"
    return f"https://alexseif.com/php-emergency-patch?utm_source=outreach&utm_medium=email&utm_campaign={campaign}&utm_content={clean_domain}"

def load_template_file(template_slug: str, track: str = "agency") -> Tuple[str, str]:
    template_file = TEMPLATES_DIR / f"{template_slug}.txt"
    if template_file.exists():
        content = template_file.read_text(encoding="utf-8")
        lines = content.strip().split("\n")
        subject = "Question regarding runtime patching"
        body_lines = []

        if lines and lines[0].startswith("SUBJECT:"):
            subject = lines[0].replace("SUBJECT:", "").strip()
            body_lines = lines[1:]
        else:
            body_lines = lines

        body = "\n".join(body_lines).strip()
        upsert_template(slug=template_slug, track=track, subject=subject, body=body)
        return subject, body

    # Fallback to DB if file doesn't exist
    cached = get_template(template_slug)
    if cached:
        return cached["subject"], cached["body"]

    # Default fallback
    subject = "Question regarding {{Company}}'s runtime patching (PHP & Node.js)"
    body = "Hi {{FirstName}},\n\nPlease review your runtime patch status: {{LandingUrl}}\n\nBest regards,\nAlex Seif"
    return subject, body

def render_template(template: str, context: Dict[str, str]) -> str:
    content = template
    for key, val in context.items():
        content = content.replace(f"{{{{{key}}}}}", str(val))
    return content

def send_via_smtp(to_email: str, subject: str, body: str) -> Tuple[bool, Optional[str]]:
    if not SMTP_HOST or not SMTP_USER or not SMTP_PASSWORD:
        return False, "SMTP configuration missing in environment"
    try:
        msg = EmailMessage()
        msg["Subject"] = subject
        msg["From"] = f"{SENDER_NAME} <{SENDER_EMAIL}>"
        msg["To"] = to_email
        msg["Reply-To"] = REPLY_TO_EMAIL
        msg.set_content(body)

        with smtplib.SMTP(SMTP_HOST, SMTP_PORT, timeout=15) as server:
            if SMTP_USE_TLS:
                server.starttls()
            server.login(SMTP_USER, SMTP_PASSWORD)
            server.send_message(msg)
        return True, None
    except Exception as e:
        return False, str(e)

def send_via_brevo(to_email: str, recipient_name: str, subject: str, body: str) -> Tuple[bool, Optional[str]]:
    if not BREVO_API_KEY:
        return False, "BREVO_API_KEY missing in environment"
    try:
        headers = {
            "api-key": BREVO_API_KEY,
            "Content-Type": "application/json",
            "Accept": "application/json",
        }
        payload = {
            "sender": {"name": SENDER_NAME, "email": SENDER_EMAIL},
            "to": [{"email": to_email, "name": recipient_name or to_email}],
            "replyTo": {"email": REPLY_TO_EMAIL, "name": SENDER_NAME},
            "subject": subject,
            "textContent": body,
        }
        with httpx.Client(timeout=10.0) as client:
            resp = client.post("https://api.brevo.com/v3/smtp/email", json=payload, headers=headers)
            if resp.status_code in (200, 201):
                return True, None
            return False, f"Brevo API error ({resp.status_code}): {resp.text}"
    except Exception as e:
        return False, str(e)

def dispatch_target(
    target: Dict[str, Any],
    dry_run: bool = True,
    provider: Optional[str] = None,
    template_slug: Optional[str] = None,
) -> Tuple[bool, str]:
    target_id = target["id"]
    recipient_email = target.get("contact_email")
    if not recipient_email:
        return False, "Target has no contact email"

    domain = target.get("domain") or ""
    track = target.get("track") or "agency"
    company = target.get("company_name") or domain or "your company"
    first_name = target.get("contact_first_name") or company

    if target.get("do_not_contact") == 1:
        reason = target.get("do_not_contact_reason") or "Opt-out requested"
        return False, f"Aborted: Target {domain or recipient_email} is marked do_not_contact ({reason})"

    # Determine default template slug by track
    active_slug = template_slug
    if not active_slug:
        if track == "partner":
            active_slug = "partner_v1"
        elif track == "direct_client":
            active_slug = "direct_client_v1"
        else:
            active_slug = "agency_v1"

    utm_url = build_utm_url(domain=domain, track=track, template_slug=active_slug)
    subject_raw, body_raw = load_template_file(active_slug, track=track)

    detected_platform = target.get("detected_platform") or "WordPress / PHP"
    detected_server = target.get("detected_server") or "Nginx / Apache"

    context = {
        "FirstName": first_name,
        "Company": company,
        "Domain": domain,
        "LandingUrl": utm_url,
        "DetectedPlatform": detected_platform,
        "DetectedServer": detected_server,
    }

    subject = render_template(subject_raw, context)
    body = render_template(body_raw, context)
    active_provider = (provider or OUTREACH_PROVIDER).lower()

    if dry_run:
        log_dispatch(
            target_id=target_id,
            recipient_email=recipient_email,
            subject=subject,
            body=body,
            provider="dry_run",
            template_slug=active_slug,
            utm_url=utm_url,
            status="dry_run",
            error_message=None,
        )
        return True, f"[DRY-RUN] [{track.upper()}] [{active_slug}] {recipient_email}: '{subject}' -> {utm_url}"

    # Live send
    success = False
    err: Optional[str] = None

    if active_provider == "brevo":
        success, err = send_via_brevo(
            to_email=recipient_email,
            recipient_name=target.get("contact_name") or first_name,
            subject=subject,
            body=body,
        )
    else:
        success, err = send_via_smtp(to_email=recipient_email, subject=subject, body=body)

    status_str = "success" if success else "failed"
    log_dispatch(
        target_id=target_id,
        recipient_email=recipient_email,
        subject=subject,
        body=body,
        provider=active_provider,
        template_slug=active_slug,
        utm_url=utm_url,
        status=status_str,
        error_message=err,
    )

    if success:
        return True, f"Successfully dispatched to {recipient_email} (Template: {active_slug})"
    return False, f"Failed sending to {recipient_email}: {err}"

def apply_rate_limit(min_sec: int = MIN_DELAY_SECONDS, max_sec: int = MAX_DELAY_SECONDS) -> float:
    delay = random.uniform(min_sec, max_sec)
    time.sleep(delay)
    return delay
