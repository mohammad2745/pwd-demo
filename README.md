<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

#### about pwdapp

pwdapp is a laravel based web application for public works department of Bangladesh.

#### creating the laravel project
```bash
composer create-project --prefer-dist laravel/laravel pwdapp
```

#### configure and serve to PORT:8000
```bash
cd pwdapp
composer update
npm install
composer install
php artisan serve
```

#### creating models and controllers [AS PER HIGHERARCHY]

```bash
php artisan make:migration create_implementors_table --create=implementors
php artisan make:controller ImplementorController --resource --model=Implementor

php artisan make:migration create_projects_table --create=projects
php artisan make:controller ProjectController --resource --model=Project

php artisan make:migration create_budgets_table --create=budgets
php artisan make:controller BudgetController --resource --model=Budget
```

#### key generate
```bash
php artisan key:generate
```

#### database migration
```bash
php artisan migrate:install
php artisan migrate:refresh --seed

php artisan cache:clear
php artisan config:clear
```

#### database configuration
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE='pwdappdb'
DB_USERNAME='mdallrabbi'
DB_PASSWORD='****************'
```

#### license

pwdapp is licensed under the [MIT license](https://opensource.org/licenses/MIT) developed by [Md. All Rabbi](https://about.me/mdallrabbi).


###### thank you
