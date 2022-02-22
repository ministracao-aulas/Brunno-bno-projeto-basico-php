<?php

namespace Core\Contracts;

class View
{
    protected static $basePath = BASE_PATH;

    protected static function loadFile(string $fileToLoad)
    {
        if (file_exists($fileToLoad)) {
            require $fileToLoad;
            die;
        }

        return false;
    }

    public static function page404()
    {
        static::loadFile(static::$basePath."/views/errors/404")
            or
            die('<h1>404</h1>');
    }

    public static function loadView(string $view)
    {
        $fileToLoad = static::$basePath."/views/{$view}.php";

        static::loadFile($fileToLoad)
            or
            page404();

        die;
    }
}
