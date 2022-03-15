<?php

namespace App\Controllers;

use Core\Contracts\Controller;
use Core\Contracts\View;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

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

    /**
     * function create
     */
    public function create()
    {
        View::loadView('users/create');
    }

    /**
     * function store
     */
    public function store()
    {
        $data = $this->request()->post(
            'email',
            'password',
            'name'
        );
    }
}
