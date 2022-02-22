<?php

namespace Core\Contracts;

use Core\Contracts\View;

class RouteManager
{
    public static function bootRoute(string $uri)
    {
        $routes = require BASE_PATH."/_routes.php";

        if ($uri && in_array($uri, array_keys($routes))) {
            View::loadView($routes[$uri]);
            die;
        }

        View::loadView('errors/404');
        die;
    }
}
