<?php

namespace App\Controllers;

use Core\Contracts\Controller;
use Core\Contracts\View;

class UserController extends Controller
{
    /**
     * function index
     */
    public function index()
    {
        View::loadView('users/index');
    }

    /**
     * function show
     */
    public function show()
    {
        View::loadView('users/show');
    }
}
