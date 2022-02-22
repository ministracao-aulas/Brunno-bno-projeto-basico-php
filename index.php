<?php

use Core\Contracts\RouteManager;

require_once __DIR__ . "/autoload.php";

define('BASE_PATH', __DIR__);

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

RouteManager::bootRoute($uri);
