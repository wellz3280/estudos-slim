<?php

use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require __DIR__.'/../vendor/autoload.php';


$appFac = AppFactory::create();

// erros
$appFac->addRoutingMiddleware();
$errorMiddleware = $appFac->addErrorMiddleware(true,true,true);

// adicionando twig
$twig = Twig::create(__DIR__.'/../app/view',['cache' => false]);
$appFac->add(TwigMiddleware::create($appFac,$twig));

$routes = require __DIR__.'/../config/routes.php';

// $app->group('/admin',function() use($app){
//    $app->get('/contato',function(){
//       echo "contato";
//    });
// });

foreach($routes as $index => $route){
   if($_SERVER['REQUEST_METHOD'] == 'GET'){
       $appFac->get($index,$route);
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $appFac->post($index,$route);
     }
     
}


$appFac->run();
