<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

<h1>User Authentication with Laravel using custom guard</h1>

Almost every web application has some need for authentication. Users of our app need the ability to login and logout. Fortunately, Laravel provides a clean, simple and unobtrusive password-based authentication class to help you validate user credentials and retrieve information about the current user of your application.

This is Multiple user authentication examples in Laravel 5.4. Using this repository easily manage multiple user login projects.

Follow Below Step for use this repository.

## How to use

1. Download zip or clone the repository
2. Execute Following Command for install dependency : composer install (Required the composer install in your PC)
3. Execute Following Command for migrate database : php artisan migrate (All Migration files are available in this repository)
4. Run Seeder Files : php artisan db:seed

In this example, there are three different user role login. list out in below.

1. Master Login
2. Admin Login
3. User Login

## Master Login
    
    http://localhost/laravelMultiAuth/public/
    OR
    http://localhost/laravelMultiAuth/public/master
    OR
    http://localhost:8000/master
    

    Username : master@gmail.com
    Password : 2209

## Admin Login
    
    http://localhost/laravelMultiAuth/public/admin
    OR
    http://localhost/laravelMultiAuth/public/admin/login
    OR
    http://localhost:8000/admin
    
    Username : admin@gmail.com
    Password : 2209

## User Login
    
    http://localhost/laravelMultiAuth/public/user
    OR
    http://localhost/laravelMultiAuth/public/user/login
    OR
    http://localhost:8000/user

    Username : user@gmail.com
    Password : 2209
