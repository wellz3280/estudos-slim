<?php

declare(strict_types=1);

use App\Controller\FormController;
use App\Controller\HomeController;
use App\Controller\JsonController;
use App\Controller\PostController;
use App\Controller\TesteController;
use Slim\App;
use Weliton\InitSlim\Application\Middleware\ArrMiddleware;
use Weliton\InitSlim\Application\Middleware\JsonMiddleware;

return function(App $app){
    $app->get('/',HomeController::class. ':index');
    
    // rota para json carros
    $app->group('/api', function($app) {
        $app->group('/json',function($app){
        
            $app->get('/carros',JsonController::class.':index');
            $app->get('/carros/{ano}',JsonController::class.':filter');

        });
    });


    $app->get('/teste/{id}', TesteController::class.':index')->add(JsonMiddleware::class);
    $app->get('/form',FormController::class.':index');
    
    $app->post('/post', PostController::class.':index');
};
