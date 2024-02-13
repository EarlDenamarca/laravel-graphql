#!/bin/sh

if [ ! -f 'vendor/autoload.php' ]; then
    composer install
fi

php artisan serve --host=0.0.0.0