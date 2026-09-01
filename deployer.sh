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

# Restart PM2 cleanly using ecosystem config from project root
echo "♻️ Reloading PM2 Service..."
cd "$PROJECT_ROOT"
pm2 startOrReload ecosystem.config.cjs --update-env
pm2 save

echo "✅ Deployment Successful. The machine is serving the story."