<?php

namespace App\Controllers;

use Core\Contracts\Controller;
use Core\Contracts\View;

class CourseController extends Controller
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
        View::loadView('courses/index');
    }

    /**
     * function show
     */
    public function form()
    {
        View::loadView('courses/courses-form');
    }
}
