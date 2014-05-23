# Laravel PHP Framework with Heroku
This project modify some default configurations of [Laravel Framework](http://laravel.com/) to make deploying to heroku more easily.

## Install Laravel on Local
After clone this project, you need to install Laravel through composer.
```
$ composer install
```

## Environment Detection
Please replace 'your-machine-name' in `bootstrap/start.php` to specify local environment to your machines.

For other environments, they can be assigned with `$_SERVER['LARAVEL_ENV']` variable.

## Database Settings

The `.env.heroku.php` is configured with heroku postgresql database.
You can just set `$_SERVER['LARAVEL_ENV']` to 'heroku' in heroku app settings.

## Deploy to Heroku
After configurations, you can deploy to heroku with
```
$ git push heroku master
```

## Other Configuration
Please see
* [Laravel Configuration Docs](http://laravel.com/docs/configuration)
* [Heroku PHP Docs](https://devcenter.heroku.com/categories/php)
