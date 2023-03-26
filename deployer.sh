git pull
export SYMFONY_ENV=prod
composer install --no-dev --optimize-autoloader
php7.4 bin/console cache:clear --env=prod --no-debug
php7.4 bin/console doctrine:migrations:migrate --no-debug --no-interaction --env=prod
php7.4 bin/console assets:install --env=prod