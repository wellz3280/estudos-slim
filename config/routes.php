<?php

declare(strict_types=1);

use App\Controller\FormController;
use App\Controller\HomeController;
use App\Controller\JsonController;
use App\Controller\PostController;
use App\Controller\TesteController;
use Slim\App;
use Weliton\InitSlim\Application\Middleware\ArrMiddleware;

return function(App $app){
    $app->get('/',HomeController::class. ':index');
    
    $app->get('/json/{name}/{idade}',JsonController::class.':index');
    $app->get('/teste/{usuario}/{senha}', TesteController::class.':index')->add(ArrMiddleware::class);
    $app->get('/form',FormController::class.':index');
    
    $app->post('/post', PostController::class.':index');
};
