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

    /**
     * function loadRoute
     *
     */
    protected static function loadRoute(array $route)
    {
        if (count($route) != 2 || !isset($route[1]))
        {
            return false;
        }

        $routeData  = array_filter($route, 'is_string');
        $class      = $route[0];
        $method     = $route[1];

        $instance = new $class();
        $instance->{$method}();
    }

    public static function bootRoute(string $uri)
    {
        $routes = require BASE_DIR."/_routes.php";
        $routes = addSlashForAll($routes, true, true);

        if (
            $uri &&
            in_array($uri, array_keys($routes)) &&
            is_array($routes[$uri]) &&
            count($routes[$uri]) === 2
        )
        {
            return static::loadRoute($routes[$uri]);
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
