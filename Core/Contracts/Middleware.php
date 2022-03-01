<?php


namespace Core\Contracts;

class Middleware
{
    protected array $middlewares = [];

    public function __construct()
    {
        $this->middlewares = require_once __DIR__ . "/../../App/Middlewares/Kernel.php";
    }

    /**
     * function callMiddleware
     *
     * @param string $middlewareName
     */
    public function callMiddleware(string $middlewareName)
    {
        if($middlewareName && in_array($middlewareName, array_keys($this->middlewares))) {
            $middleware  = $this->middlewares[$middlewareName];

            if (!is_string($middleware))
            {
                throw new \Exception("Invalid Middleware", 1);
            }

            return (new $middleware());
        }

        throw new \Exception("Invalid Middleware: \"$middlewareName\"", 1);
    }
}
