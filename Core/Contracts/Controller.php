<?php

namespace Core\Contracts;

abstract class Controller
{
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
