<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Laravel Blog

A demo CRUD project with Todo funtionality build on Laravel 7.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

- Install latest version XAMPP/LAMP stack
- Install composer

### Quick Start

```
# Create DB in localhost
create a new database in your localhost

# Clone the repository in local machine
git clone https://github.com/basudebmondal/laravelblog.git

# Setup environment
rename `.env.example` file to `.env` inside your project root and fill the database information.

# Edit the env file and add DB params
DB_DATABASE="your_db_name"

# Install dependencies
Run `composer install`

# Setup the APP_KEY value in your .env file
Run `php artisan key:generate` 

# Create Application schema
Run `php artisan migrate`

# Run Laravel server
Run `php artisan serve`

#####You can now access your project at localhost:8000 :)

## If for some reason your project stop working do these:
- Run `composer install`
- Run `php artisan migrate`

```

## Versioning

1.0.0

## Authors

* **Basudeb Mondal** - *Initial work*

## Acknowledgments

* Laravel 7 Documentation
* Tutorialspoint
* [Youtube - Laravel PHP Framework Tutorial - Full Course 6.5 Hours (2020)](https://www.youtube.com/watch?v=BXiHvgrJfkg&t=16143s)
