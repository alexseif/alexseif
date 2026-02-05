#!/bin/bash
set -e # Stop on any error

cd /var/www/alexseif.com

# 1. Pull latest
git reset HEAD --hard
git pull origin master

# --- BACKEND (Symfony) ---
echo "⚙️  Deploying Symfony Backend..."
cd backend
php8.2 /usr/local/bin/composer dump-env prod
php8.2 /usr/local/bin/composer install --no-dev --optimize-autoloader
APP_ENV=prod php8.2 bin/console cache:clear
APP_ENV=prod php8.2 bin/console cache:warmup
APP_ENV=prod php8.2 bin/console doctrine:migrations:migrate --no-interaction
cd ..

# --- FRONTEND (PM2 Management) ---
echo "🚀 Refreshing Frontend..."
cd frontend
export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"
nvm use 20

# Install production dependencies
npm install --production

# Restart or Start the process
pm2 describe alexseif-frontend > /dev/null
if [ $? -eq 0 ]; then
  pm2 restart alexseif-frontend
else
  pm2 start npm --name "alexseif-frontend" -- run start
fi
cd ..

echo "✅ Deployment Complete."