<?php

namespace App\Controllers;

use Core\Contracts\Controller;
use Core\Contracts\View;

class GroupController extends Controller
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
        View::loadView('group/group');
    }
}
