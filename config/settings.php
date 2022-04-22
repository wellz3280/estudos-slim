<?php
    declare(strict_types=1);

use DI\Container;
// Container
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


                'logger' =>
                [
                    'name' => 'slim-app',
                    'level' => Monolog\Logger::DEBUG,
                    'path' => __DIR__ . '/../logs/app.log'
                ],

                'doctrine' =>
                [
                    'dev_mode' => true,
                    'cache_dir' => __DIR__.'/var/doctrine',
                    'metadata_dirs' => [__DIR__.'/src/Domain'],
                ],
                'connection' => [
                    'driver' => 'pdo_mysql',
                    'host' => 'localhost',
                    'port' => 3306,
                    'dbname' => 'testeApi',
                    'user' => 'root',
                    'password' => '',
                    'charset' => 'utf-8'
                ]
                
            ];
            
        });//fim do container

        // 'db' => [
           
            
};