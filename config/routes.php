<?php

use App\Controller\HomeController;
use App\Controller\PostController;
use App\Controller\JsonController;

    return  [
        '/' => HomeController::class.':index',
        '/json/{name}/{idade}' => JsonController::class.':index',
        '/post' => PostController::class.':index'
    ];