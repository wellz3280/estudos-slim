<?php

declare(strict_types=1);

use DI\Container;
use Dotenv\Dotenv;
use Slim\App;

return function(Container $container){
    $container->set('connection', function(){
        
        $env = Dotenv::createImmutable(__DIR__.'/../../');
        $env->load();

        $conn = new PDO("mysql:host={$_ENV['HOST']};dbname={$_ENV['DB_NAME']}",
        $_ENV['USUARIO'],$_ENV['PASSWORD']);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

        return $conn;

    });

};