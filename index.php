<?php
declare(strict_types=1);

use Core\Contracts\RouteManager;

require_once __DIR__ . "/boot.php";

RouteManager::listenRequests();
