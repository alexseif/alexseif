import time
import random
import smtplib
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
from .db import log_dispatch

DEFAULT_SUBJECT = "Question regarding {{Company}}'s runtime patching (PHP & Node.js)"

DEFAULT_BODY_TEMPLATE = """Hi {{FirstName}},

Two critical engine-level vulnerability waves recently hit production web fleets:

1. PHP Core (php2shell CVE-2026-109618 / 109619): Stale memory allocators and worker state contamination under default PHP-FPM pools.
2. Node.js October 2026 Advisory (CVE-2026-111497): Critical Brotli decoder buffer overflow permitting unauthenticated RCE on Node.js 22.x, 24.x, and 26.x.

For web agencies managing multiple client deployments, standard advice ("put up a WAF" or "run `apt upgrade`") creates problems: WAFs miss compressed payload variations, and blind OS updates risk breaking production dependencies and custom plugins.

I am a Software Architect with 20+ years of production experience. I audit and patch production PHP and Node.js runtimes with zero service interruption.

Standard Incident Remediation:
- Fixed Entry Package: EUR 140 per site / application (includes full pre-patch backup, dependencies update, version upgrade, and zero-downtime runtime hotpatch).
- Complex / Legacy Stacks: Sized by codebase architecture at EUR 75/hour.
- Ongoing Retainers: Monthly outsourcing retainers available for continuous fleet maintenance, billed either independently or through a registered corporate entity.

If {{Company}} runs client applications that cannot afford downtime but cannot stay exposed to active RCE exploits, I can audit and patch your setup today.

Are you available for a brief 10-minute sync this week?

Technical overview: https://alexseif.com/php-emergency-patch

Best regards,
Alex Seif
Software Architect
alex.seif@gmail.com | +20 100 400 6332
"""

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
    subject_template: str = DEFAULT_SUBJECT,
    body_template: str = DEFAULT_BODY_TEMPLATE,
) -> Tuple[bool, str]:
    target_id = target["id"]
    recipient_email = target.get("contact_email")
    if not recipient_email:
        return False, "Target has no contact email"

    first_name = target.get("contact_first_name") or target.get("company_name") or "there"
    company = target.get("company_name") or target.get("domain") or "your company"
    domain = target.get("domain") or ""

    context = {
        "FirstName": first_name,
        "Company": company,
        "Domain": domain,
    }

    subject = render_template(subject_template, context)
    body = render_template(body_template, context)
    active_provider = (provider or OUTREACH_PROVIDER).lower()

    if dry_run:
        log_dispatch(
            target_id=target_id,
            recipient_email=recipient_email,
            subject=subject,
            body=body,
            provider="dry_run",
            status="dry_run",
            error_message=None,
        )
        return True, f"[DRY-RUN] Would send to {recipient_email} ({company}): '{subject}'"

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
        status=status_str,
        error_message=err,
    )

    if success:
        return True, f"Successfully dispatched to {recipient_email}"
    return False, f"Failed sending to {recipient_email}: {err}"

def apply_rate_limit(min_sec: int = MIN_DELAY_SECONDS, max_sec: int = MAX_DELAY_SECONDS) -> float:
    delay = random.uniform(min_sec, max_sec)
    time.sleep(delay)
    return delay
