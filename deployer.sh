#!/bin/bash

# 1. Reset and pull latest code (This gets your Symfony changes and Frontend package.json)
git reset HEAD --hard
git pull origin master

# --- BACKEND (Symfony) ---
echo "⚙️  Deploying Symfony Backend..."
cd backend
php8.2 /usr/local/bin/composer dump-env prod
php8.2 /usr/local/bin/composer install --no-dev --optimize-autoloader

# Clear and warm up cache
APP_ENV=prod APP_DEBUG=0 php8.2 bin/console cache:clear --env=prod
APP_ENV=prod APP_DEBUG=0 php8.2 bin/console cache:warmup --env=prod

# Run database migrations
php8.2 bin/console doctrine:migrations:migrate --no-interaction --env=prod
cd ..

# --- FRONTEND (Next.js Runtime Check) ---
echo "🚀 Refreshing Frontend Environment..."
cd frontend
export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"
nvm use 20

# We only run npm install to ensure dependencies for 'npm run start' are there
# We do NOT run 'npm run build' here anymore.
npm install --production --no-audit

# Restart PM2 to pick up the new .next folder uploaded via rsync
pm2 restart alexseif-frontend || pm2 start npm --name "alexseif-frontend" -- run start
cd ..

echo "✅ Server-side Tasks Complete."