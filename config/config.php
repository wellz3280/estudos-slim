<?php
    declare(strict_types=1);

use DI\Container;
use Slim\App;

return function(Container $container){
    
   return [
        'config' => [
            'displayErrorDetails' => true,
    
            'logger' => [
                'name' => 'slim-app',
                'level' => Monolog\Logger::DEBUG,
                'path' => __DIR__ . '/../logs/app.log'
            ],
        ],
    ];

};