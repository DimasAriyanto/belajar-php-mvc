<?php

require_once __DIR__ . '/../vendor/autoload.php';

use KuliahProgrammer\BelajarPhpMvc\App\Router;
use KuliahProgrammer\BelajarPhpMvc\Controller\HomeController;
use KuliahProgrammer\BelajarPhpMvc\Middleware\AuthMiddleware;
use KuliahProgrammer\BelajarPhpMvc\Controller\ProductController;

Router::add('GET', '/products/([0-9a-zA-Z]*)', ProductController::class, 'categories');

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);
Router::add('GET', '/world', HomeController::class, 'world', [AuthMiddleware::class]);

Router::run();
