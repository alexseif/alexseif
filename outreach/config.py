import os
from pathlib import Path
from dotenv import load_dotenv

# Search for .env in current directory, outreach/, or project root
current_dir = Path(__file__).resolve().parent
root_dir = current_dir.parent

if (current_dir / ".env").exists():
    load_dotenv(current_dir / ".env")
elif (root_dir / ".env").exists():
    load_dotenv(root_dir / ".env")
else:
    load_dotenv()

DB_PATH = Path(os.getenv("OUTREACH_DB_PATH", str(current_dir / "outreach.db")))

OUTREACH_PROVIDER = os.getenv("OUTREACH_PROVIDER", "smtp").lower()

SMTP_HOST = os.getenv("SMTP_HOST", "")
SMTP_PORT = int(os.getenv("SMTP_PORT", "587"))
SMTP_USER = os.getenv("SMTP_USER", "")
SMTP_PASSWORD = os.getenv("SMTP_PASSWORD", "")
SMTP_USE_TLS = os.getenv("SMTP_USE_TLS", "true").lower() in ("true", "1", "yes")

BREVO_API_KEY = os.getenv("BREVO_API_KEY", "")

SENDER_NAME = os.getenv("SENDER_NAME", "Alex Seif")
SENDER_EMAIL = os.getenv("SENDER_EMAIL", "alex.seif@gmail.com")
REPLY_TO_EMAIL = os.getenv("REPLY_TO_EMAIL", "alex.seif@gmail.com")

HUNTER_API_KEY = os.getenv("HUNTER_API_KEY", "")

MIN_DELAY_SECONDS = int(os.getenv("MIN_DELAY_SECONDS", "60"))
MAX_DELAY_SECONDS = int(os.getenv("MAX_DELAY_SECONDS", "90"))
DAILY_SEND_LIMIT = int(os.getenv("DAILY_SEND_LIMIT", "30"))
