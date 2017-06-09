<?php
use Routing\Router;

error_reporting(-1);
ini_set('display_errors', 'On');

require('../../bin/init.php');

$request = (isset($_SERVER['PATH_INFO'])) ? $_SERVER['PATH_INFO'] : '/';

$router = new Router();

if(!$router -> run($request))
	header("HTTP/1.0 404 Not Found");
