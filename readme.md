# Configuring PIPL LARAVEL LIBRARY

Please follow the belor steps to configuring the code library at your system.


## Step1
Clone the laravel library using below command
git clone http://192.168.2.200/administrator/laravel-pipl-lib.git



## Step2
Open your command propmt. Navigate to your working directory e.g=> /var/www/clonned directory

sudo composer install (in linux)

composer install (windows)
 
 This command will install all require packages files to your directory (Vendor folder).

## Step3
Now run the following command to create a new application key

php artisan key:generate


## Step4
Now change the database settings in ".env" file and config/datatbase.php file.

E.g: .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test_laravel --enter your database name
DB_USERNAME=root
DB_PASSWORD=root

E.g: config/datatbase.php

'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'test_laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix' => 'test_',
            'strict' => false,
            'engine' => null,
        ],
        

## Step4
Please make sure your application "bootstrap" and "storage" folder must have writable permissions.

## Step5
Now run below commands:

php artisan migrate

php artisan db:seed






