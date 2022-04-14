<?php
    declare(strict_types=1);

use DI\Container;

return function(Container $container){

    $container->set('settings',function(){

        return 
           [
                // Slim Settings
                'errors' =>
                [
                    'determineRouteBeforeAppMiddleware' => false,
                    'displayErrorDetails' => true,
                    'logErrorDetails' => true,
                    'logErrors' => true,
                ],

                'db' =>
                [
                    'driver' => 'mysql',
                    'host' => 'localhost',
                    'database' => 'testeApi',
                    'username' => 'root',
                    'password' => '',
                    'charset'   => 'utf8',
                    'collation' => 'utf8_unicode_ci',
                    'prefix'    => '',
                ],
                'logger' =>
                [
                    'name' => 'slim-app',
                    'level' => Monolog\Logger::DEBUG,
                    'path' => __DIR__ . '/../logs/app.log'
                ],
            ];
            
        });//fim do container

        // 'db' => [
           
            
};