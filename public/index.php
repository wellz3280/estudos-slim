<?php

use DI\Container;
use Slim\App;
use Slim\Factory\AppFactory;
use Weliton\InitSlim\Application\Middleware\HelloMiddleware;
use Weliton\InitSlim\Application\Middleware\NameMiddleware;

require __DIR__.'/../vendor/autoload.php';

// setando container
$container = new Container();
AppFactory::setContainer($container);

// configurações usando container
$settings = require __DIR__.'/../config/settings.php';
$settings($container);

$app = AppFactory::create();

// erros
$errors = require __DIR__.'/../config/middlewareError.php';
$errors($app);

// adicionando twig
$twig = require __DIR__.'/../config/twig.php';
$twig($app);

//rotas
$routes = require __DIR__.'/../config/routes.php';
$routes($app);


$app->run();
