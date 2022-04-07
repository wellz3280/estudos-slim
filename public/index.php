<?php

use Slim\App;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Weliton\InitSlim\Application\Middleware\HelloMiddleware;
use Weliton\InitSlim\Application\Middleware\NameMiddleware;

require __DIR__.'/../vendor/autoload.php';

// $config = require __DIR__.'/../config/config.php';

$appFac = AppFactory::create();

// erros
$errorMiddleware = $appFac->addErrorMiddleware(true,true,true);

// adicionando twig
$twig = Twig::create(__DIR__.'/../app/view',['cache' => false]);
$appFac->add(TwigMiddleware::create($appFac,$twig));


$routes = require __DIR__.'/../config/routes.php';

$routes($appFac);


$appFac->run();
