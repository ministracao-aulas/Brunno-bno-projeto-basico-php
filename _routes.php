<?php

use App\Controllers\HomepageController;
use App\Controllers\UserController;
use App\Controllers\CourseController;
use App\Controllers\GroupController;


/*
M =
V = Ok
C = Ok
*/

return [
    '/index.php'        => [HomepageController::class, 'index'],
    '/'                 => [HomepageController::class, 'index'],

    '/users'            => [UserController::class, 'index'],
    '/users/show'       => [UserController::class, 'show'],
    '/users/create'     => [UserController::class, 'create'],
    '/users/store'      => [UserController::class, 'store'],
    // '/users/fake'       => [UserController::class, 'fakeList'],

    'courses/'          => [CourseController::class, 'index'],
    '/courses/create'   => [CourseController::class, 'form'],

    '/group/'           => [GroupController::class, 'index'],

    '/login'            => [HomepageController::class, 'login'],
];
