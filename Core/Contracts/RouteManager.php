<?php

namespace Core\Contracts;

use Core\Contracts\View;

class RouteManager
{
    public static function basePath(string $default = '')
    {
        return static::entryPoint()['basePath'] ?? $default;
    }
    
    public static function uri(string $default = '/')
    {
        return static::entryPoint()['uri'] ?? $default;
    }

    protected static function entryPoint() :array
    {
        $entryPoint = explode('index.php', ($_SERVER['PHP_SELF'] ?? ''), 2);

        return [
            'basePath'   => ($entryPoint[0] ?? null) ?: "/",
            'uri'        => ($entryPoint[1] ?? null) ?: "/",
        ];
    }

    public static function bootRoute(string $uri)
    {
        $routes = require BASE_DIR."/_routes.php";

        if ($uri && in_array($uri, array_keys($routes))) {
            View::loadView($routes[$uri]);
            die;
        }

        View::loadView('errors/404');
        die;
    }

    public static function listenRequests()
    {
        $initialUri = urldecode(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
        );
        
        $uri = str_replace(static::basePath(), '/', $initialUri);
        return static::bootRoute($uri);
    }
}
