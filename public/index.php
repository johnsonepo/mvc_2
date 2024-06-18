<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR | E_PARSE | E_NOTICE);

require_once __DIR__ ."/../vendor/autoload.php";

use app\core\Application; 
use app\controllers\AuthController;
use app\controllers\HomeController;

$app = new Application(dirname(__DIR__));

$app->router->get("/", [HomeController::class,'index']);
$app->router->get("/contact", [HomeController::class, 'contact']);
$app->router->post("/contact", [HomeController::class, 'submitContact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);

$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->run();