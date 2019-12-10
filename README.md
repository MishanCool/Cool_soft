# Cool_soft
Software and Designing Company

# New Laravel
laravel new cool_soft

# Authentication
composer require laravel/ui --dev
php artisan ui vue --auth

# create database in localhost

# Clear cache
php artisan config:cache

# Database: Migrations
php artisan make:model Order -m   -> create model with migrations
php artisan migrate

php artisan migrate:rollback

# Drop all tables
php artisan migrate:fresh

#Create midleware
php artisan make:middleware chekRole

