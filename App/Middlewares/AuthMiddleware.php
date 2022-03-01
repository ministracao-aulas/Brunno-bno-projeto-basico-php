<?php

namespace App\Middlewares;

class AuthMiddleware
{
    public function __construct()
    {
        if(!isset($_SESSION)) {
            throw new \Exception("Invalid session", 1);
        }

        if(!isset($_SESSION['user_id'])) {
            $_SESSION['flash_message'] = [
                'color'     => 'danger',
                'content'   => "Não autorizado",
            ];

            header('Location:'. basePath().'login');
        }
    }
}
