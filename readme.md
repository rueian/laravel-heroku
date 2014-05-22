# Laravel PHP Framework with Heroku

## Environment Detection
Please modify `bootstrap/start.php` to specify local environment.

For other environments, they can be assigned with `LARAVEL_ENV` variable.

## Database Settings
For heroku database settings, you can copy .env.heroku.php to the corresponding file name that match your `LARAVEL_ENV` variable on heroku.

For example, if your `LARAVEL_ENV` variable is 'staging', then you should go to heroku bash:
```
$ heroku run bash
```
and copy this file as `.env.staging.php`
```
$ cp .env.heroku.php .env.staging.php
```
if you need to modify this file in heroku, you can use this [heroku-vim](https://github.com/naaman/heroku-vim).

## Other Configuration
Please see [Laravel Configuration Docs](http://laravel.com/docs/configuration)
