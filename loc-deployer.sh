git pull
composer install
app/console cache:clear
app/console doctrine:schema:update --force
app/console assets:install