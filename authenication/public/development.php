
<?php

return [
	'app' => [
		'url' => 'http://localhost/authenication',
		'hash' => [
			'algo' => PASSWORD_BCRYPT,
			'cost' => 10
		]

	],
	'db' => [
		'driver' => 'mysql',
		'host' => '127.0.0.1',
		'name' => 'site',
		'username' => 'root',
		'password' => '',
		'charset' => 'utf8',
		'collation' => ',utf8_unicode_ci',
		'prefix' => ''

	],
	'auth' => [
		'seesion' => 'user_id'.
		'remember' => 'user_r'
	],
	'mail' => [
		'smtp_auth' => true,
		'smtp_secure' => 'tls',
		'host' => 'smtp.gmail.com',
		'username' => 's.handeeban@gmail.com',
		'password' => '0750814741'

	],

	'twig' =>[
		'debug' => true
	],

	'csrf' => [
	'session' => 'csrf_token'

	]
	
];