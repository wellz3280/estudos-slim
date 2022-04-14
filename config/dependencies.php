<?php

declare(strict_types=1);

use Dotenv\Dotenv;
use Slim\App;

return function(App $app){
    $env = Dotenv::createImmutable(__DIR__.'/../../');
    $env->load();

    
};