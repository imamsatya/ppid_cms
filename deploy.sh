#!/bin/bash

composer install --optimize-autoloader --no-dev
<<<<<<< HEAD
php artisan cache:clear
php artisan config:cache
php artisan view:cache
php artisan route:clear
php artisan optimize
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
php artisan jwt:secret
=======
php artisan config:cache
php artisan view:cache
>>>>>>> origin/main
composer dump-autoload

