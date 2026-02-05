#!/bin/bash
set -e

PROJECT_ROOT="/var/www/alexseif.com"
cd $PROJECT_ROOT

echo "⚔️ Resetting Git..."
git reset HEAD --hard
git pull origin master

# --- BACKEND ---
echo "⚙️  Symfony Ops..."
cd backend
# Run install first so Flex/plugins are available for dump-env
php8.2 /usr/local/bin/composer install --no-dev --optimize-autoloader
php8.2 /usr/local/bin/composer dump-env prod
APP_ENV=prod php8.2 bin/console cache:clear
APP_ENV=prod php8.2 bin/console cache:warmup
APP_ENV=prod php8.2 bin/console doctrine:migrations:migrate --no-interaction
cd ..

# --- FRONTEND ---
echo "🏗️ Building Frontend on Server..."
cd frontend

# Load NVM/Node 20
export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"
nvm use 20

# We need ALL dependencies to run the build (not just --production)
npm install --no-audit

# Build the project natively on the server
# I've added a memory limit to ensure your other 20 sites stay stable
echo "🔨 Executing Next.js Build..."
NODE_OPTIONS="--max-old-space-size=1024" npm run build

echo "♻️ Restarting PM2..."
# This ensures the process is fresh and pointing to the new .next folder
pm2 restart alexseif-frontend || pm2 start npm --name "alexseif-frontend" -- start

echo "✅ Deployment Successful. The machine is serving the story."