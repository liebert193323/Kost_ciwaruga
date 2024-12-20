<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Project

This project is built using the Laravel framework. It is a simple **Kost Management System** that allows for easy handling of room rental and tenant information.

## Prerequisites

Before you begin, ensure you have met the following requirements:
- PHP 7.4 or higher
- Composer
- MySQL database
- Node.js and npm (for frontend assets)

## Installation Guide

### 1. Clone the Repository

Clone the project from GitHub to your local machine:


```
git clone https://github.com/liebert193323/Kost_ciwaruga.git,
```

### 2. Install PHP Dependencies
Navigate to the project directory and install the necessary PHP dependencies via Composer:


```
cd Kost_ciwaruga
composer instal
```

### 3. Set up the Environment
Copy the .env.example file to .env:

Then, generate the application key:

```
cp .env.example .env
```
```
php artisan key:generate
```

### 4. Set up the Database
Create a MySQL database and update your .env file with the correct database credentials.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password


```

### 5. Run Migrations
Run the database migrations to set up the database tables:

```
php artisan migrate

```
###6. Run the Application
Finally, start the development server:

```
php artisan serve
```

