#!/bin/bash
set -e

PROJECT_ROOT="/var/www/alexseif.com"
cd "$PROJECT_ROOT"

echo "⚔️ Resetting Git..."
git reset HEAD --hard
git pull origin master

# --- FRONTEND ---
echo "🏗️ Building Frontend on Server..."
cd "$PROJECT_ROOT/frontend"

# Load NVM/Node 20 if present
export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"
nvm use 20 2>/dev/null || true

# Install dependencies
npm install --no-audit

# Build the project natively on the server
echo "🔨 Executing Next.js Build..."
NODE_OPTIONS="--max-old-space-size=1024" npm run build

echo "♻️ Restarting PM2 Cleanly..."
# Clear any orphaned processes on port 3000
fuser -k 3000/tcp 2>/dev/null || true

# Restart or start PM2 instance from frontend directory
pm2 restart alexseif-frontend 2>/dev/null || pm2 start npm --name "alexseif-frontend" -- start
pm2 save

echo "✅ Deployment Successful. The machine is serving the story."