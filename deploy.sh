#!/bin/bash

composer install --optimize-autoloader --no-dev
php artisan cache:clear
php artisan config:cache
php artisan view:cache
php artisan route:clear
php artisan optimize
composer dump-autoload

