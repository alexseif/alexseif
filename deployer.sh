#!/bin/bash

# Reset and pull latest code
git reset HEAD --hard
git pull origin master

# Symfony environment setup
php8.2 /usr/local/bin/composer dump-env prod
php8.2 /usr/local/bin/composer install --no-dev --optimize-autoloader

# Clear and warm up cache
APP_ENV=prod APP_DEBUG=0 php8.2 bin/console cache:clear --env=prod
APP_ENV=prod APP_DEBUG=0 php8.2 bin/console cache:warmup --env=prod

# Run database migrations
php8.2 bin/console doctrine:migrations:migrate --no-interaction --env=prod

# Frontend build
npm ci --prefer-offline --no-audit
npm run build
