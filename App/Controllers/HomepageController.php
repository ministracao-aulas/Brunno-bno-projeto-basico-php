<?php

namespace App\Controllers;

use Core\Contracts\Controller;
use Core\Contracts\View;

class HomepageController extends Controller
{
    /**
     * function index
     */
    public function index()
    {
        $this->middleware(['auth']);

        View::loadView('homepage/index');
    }

    /**
     * function login
     */
    public function login()
    {
        View::loadView('homepage/login');
    }
}
