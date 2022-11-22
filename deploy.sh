#!/bin/bash

composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan view:cache
composer dump-autoload

