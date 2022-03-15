<?php

namespace Core\Contracts;

use Core\Contracts\Request;

abstract class Controller
{
    /**
     * function request
     *
     * @return Request
     */
    public final function request() :Request
    {
        return (new Request);
    }

    /**
     * function middleware
     *
     * @param array $middlewares
     */
    public function middleware(array $middlewares)
    {
        $middlewareInstance = new Middleware;

        if($middlewares) {
            foreach ($middlewares as $middleware)
            {
                $middlewareInstance->callMiddleware($middleware);
            }
        }
    }
}
