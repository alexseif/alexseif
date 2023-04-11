composer install --no-dev --optimize-autoloader
php bin/console cache:clear --env=prod --no-debug
php bin/console doctrine:migrations:migrate --no-debug --no-interaction --env=prod
yarn install