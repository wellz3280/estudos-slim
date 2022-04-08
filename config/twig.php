<?php
    declare(strict_types=1);

use Slim\App;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

return function(App $app){
    $twig = Twig::create(__DIR__.'/../app/view',['cache' => false]);
    $app->add(TwigMiddleware::create($app,$twig));
};