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
php8.2 /usr/local/bin/composer dump-env prod
php8.2 /usr/local/bin/composer install --no-dev --optimize-autoloader
APP_ENV=prod php8.2 bin/console cache:clear
APP_ENV=prod php8.2 bin/console cache:warmup
APP_ENV=prod php8.2 bin/console doctrine:migrations:migrate --no-interaction
cd ..

# --- FRONTEND ---
echo "🚀 Extracting Frontend..."
cd frontend

# Load NVM/Node 20
export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"
nvm use 20

# Clean old build files to prevent 404/Bad Gateway mismatches
rm -rf .next public_old
mv public public_old || true

# Extract the new build
tar -xzf next_build.tar.gz
rm next_build.tar.gz
rm -rf public_old

npm install --production

echo "♻️ Restarting PM2..."
pm2 restart alexseif-frontend || pm2 start npm --name "alexseif-frontend" -- start

echo "✅ Deployment Successful."