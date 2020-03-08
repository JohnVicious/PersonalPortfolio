# Project Title

My personal portfolio website made using the Laravel 6.x framework and Bootstrap 4.x.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for viewing.

### Server Requirements

In order to run the site, your server will need to support Laravel 6.x. You will need to be able to run PHP and MySQL. Using a AMPP stack will suffice.

* [Larvel](https://laravel.com/docs/6.x/installation) - PHP framework
* [XAMPP](https://www.apachefriends.org/download.html) - Apache distribution containing MariaDB, PHP, and Perl

### Prerequisites

What is needed to install/compile in order to run the site and how to install them

* [Composer](https://getcomposer.org/download/) - Dependency Manager for PHP
* [NPM](https://nodejs.org/en/) - Package manager for JS libraries

### Installing

After cloning the repository, please copy the env.example file and rename it to .env. Then add your mysql connections parameters and create your database.

Below are the commands needed to pull all dependencies and compile all relevant information.

Pull composer dependencies via composer.json
```
composer install
```

Install node packages
```
npm install
```

Compile packages and create app.js and app.css
```
npm run dev
```

Generate application key for laravel
```
php artisan key:generate
```

Create database tables and seed them with site information
```
php artisan migrate --seed
```

## Deployment

In order to deploy the site, navigate to the root folder and run the following command:
```
php artisan serve
```

Once started, navigate to http://localhost:8000 to view the site.

## Built With

* [Laravel](https://laravel.com/docs/6.x/installation) - PHP framework
* [Bootstrap](https://getbootstrap.com/docs/4.0/getting-started/introduction/) - Styling framework

## Authors

* **John Klein** - https://github.com/JohnVicious

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Future Plans

I plan on adding additional projects to my portfolio in the future as submodules and linking to them from my projects page. As I include them, I will list them here.

Current projects:
* Portfolio Website