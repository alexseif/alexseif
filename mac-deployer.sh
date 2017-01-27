git pull
php -d memory_limit=-1 /usr/local/bin/composer install
app/console cache:clear
app/console doctrine:schema:update --force
app/console assets:install