<?php

declare(strict_types=1);

use App\Controller\HomeController;
use App\Controller\JsonController;
use App\Controller\PostController;
use App\Controller\TesteController;
use Slim\App;
use Weliton\InitSlim\Application\Middleware\HelloMiddleware;
use Weliton\InitSlim\Application\Middleware\NameMiddleware;

use function DI\get;

return function(App $app){
    $app->get('/',HomeController::class. ':index')
    ->add(HelloMiddleware::class)
    ->add(NameMiddleware::class);
    
    $app->get('/json/{name}/{idade}',JsonController::class.':index');
    $app->get('/post', PostController::class.':index');
    
    $app->get('/teste', TesteController::class.':index');
};
