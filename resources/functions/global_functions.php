<?php

use Core\Contracts\RouteManager;

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