<?php

use Core\Contracts\RouteManager;

use Core\Contracts\EnvBase;

if(!function_exists('basePath')) {
    function basePath() {
        return RouteManager::basePath();
    }
}

if(!function_exists('assets')) {
    function assets(string $value) {
        return RouteManager::basePath().$value;
    }
}

if(!function_exists('dd')) {
    function dd(...$params) {
        echo "<pre>";
        die(var_dump(...$params));
    }
}

if(!function_exists('addSlashForAll')) {
    function addSlashForAll(array $arrayData, bool|null $keepOriginal = false, bool|null $addOnEnd = false)
    {
        foreach ($arrayData as $key => $value) {
            $key    = trim($key);

            $key = str_replace(['///', '//', '\\'], '/', $key);
            $key = str_replace(['///', '//'], '/', $key);

            $keyWithoutSlash = $key;

            $key = substr($key, 0, 1) != '/'            ? "/{$key}" : $key;
            $key = $addOnEnd && substr($key, -1) != '/' ? "{$key}/" : $key;

            if($keepOriginal) {
                $newArrayData[$keyWithoutSlash] = $value;
            }

            $newArrayData[$key] = $value;
        }

        return $newArrayData ?? $arrayData ?? [];
    }
}

if(!function_exists('env')) {
    function env(string $key, string $default = null) {
        // $envValidations = require BASE_DIR.'/resources/settings/envValidations.php';
        // $envInstance    = new EnvBase(BASE_DIR . '/_env.php', $envValidations);

        return EnvBase::env($key, $default) ?? null;
    }
}
