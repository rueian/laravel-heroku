<?php

// Copy this file to the corresponding file name that match your LARAVEL_ENV variable on heroku.
// For example, if your LARAVEL_ENV variable is 'staging', then you should copy this file as .env.staging.php

$config = parse_url($_SERVER['DATABASE_URL']);

return array(
	'DEFAULT_DATABASE' => 'heroku',
	'HEROKU_DATABASE_SETTINGS' => array(
		'driver'   => 'pgsql',
		'host'     => $config['host'],
		'database' => starts_with($config['path'], '/') ? substr($config['path'], 1) : $config['path'],
		'username' => $config['user'],
		'password' => $config['pass'],
		'charset'  => 'utf8',
		'prefix'   => '',
		'schema'   => 'public',
		'port'     => $config['port'],
	),
);