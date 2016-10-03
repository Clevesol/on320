<?php



use Slim\App as Slim;

session_cache_limiter(false);
session_start();
ini_set('display_errors', 'On');
define('INC_ROOT', dirname(__DIR__));

require  INC_ROOT . '../vendor/autoload.php';


$app = new Slim([
		'mode' => file_get_contents(INC_ROOT.'/mode.php')
]);

		
echo $app-> config('mode');
