git pull
composer install
app/console cache:clear
app/console doctrine:migrations:migrate --no-interaction
app/console doctrine:migrations:diff
app/console doctrine:migrations:migrate --no-interaction
app/console assets:install