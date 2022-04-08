<?php
    declare(strict_types= 1);

use Slim\App;

return function(App $app){
    // pegando o container
    $setting = $app->getContainer()->get('settings');
    $errorMiddleware = $app->addErrorMiddleware($setting['errors']['displayErrorDetails']
    ,$setting['errors']['logErrorDetails'],$setting['errors']['logErrors']);

};