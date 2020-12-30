git pull
composer install
bin/console cache:clear
bin/console doctrine:migrations:migrate --no-interaction
bin/console doctrine:migrations:diff
bin/console doctrine:migrations:migrate --no-interaction
bin/console assets:install