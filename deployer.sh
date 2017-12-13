export PATH="$PATH:/usr/bin"
git pull
export SYMFONY_ENV=prod
php-latest -d allow_url_fopen=1 -d php_openssl=1 composer.phar install --no-dev --optimize-autoloader 
php-latest app/console cache:clear --env=prod --no-debug
#php-latest app/console doctrine:migrations:migrate --no-debug --no-interaction --env=prod 
php-latest app/console assets:install --env=prod 