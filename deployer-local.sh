#!/bin/bash
# git reset HEAD --hard
# git pull origin master
php8.2 /usr/local/bin/composer dump-env dev
php8.2 /usr/local/bin/composer install --optimize-autoloader
APP_ENV=prod APP_DEBUG=0 php8.2 bin/console cache:clear --env=dev
php8.2 bin/console doctrine:migrations:migrate --no-interaction --env=dev
npm install
npm run build