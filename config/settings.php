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
                    'database' => 'testShine',
                    'username' => 'root',
                    'password' => '',
                    'charset'   => 'utf8',
                    'collation' => 'utf8_unicode_ci',
                    'prefix'    => '',
                ]
            ];
            
        });//fim do container

        // 'db' => [
           
            
};