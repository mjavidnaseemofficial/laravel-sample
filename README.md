# laravel-sample
Laravel 6

composer update or install

if bootsrap design not show use this command
composer require laravel/ui
then install bootstrap with auth or not

php artisan ui bootstrap (--auth)
after that you need to write

npm install && npm run dev

create database using mysql or your favour database

 .env file and update the credentials to access your MySQL database:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=database_name
    DB_USERNAME=root
    DB_PASSWORD= if any password

 database migrate: php artisan migrate

 run the project using command : php artisan serve    