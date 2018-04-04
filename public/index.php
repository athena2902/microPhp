<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('BASE_DIR', __DIR__ . '/../');
require_once  BASE_DIR . 'app/Core/bootstrap.php';
global $routes;
$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';

$urlParsers = new \App\Core\UrlParser($requestMethod, $requestUri);
$method = $urlParsers->getAction();
$controller = $urlParsers->getController();
$obj = new $controller();
call_user_func([$obj, $method]);