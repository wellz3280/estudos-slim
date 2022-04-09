<?php

use Slim\App;

return function(App $app){
  $config = $app->getContainer()->get('settings');

  $config['logger'] = function($c) {
  $logger = new \Monolog\Logger('my_logger');
  $file_handler = new \Monolog\Handler\StreamHandler(__DIR__.'/../logs/app.log');
  $logger->pushHandler($file_handler);
  
  return $logger;
};
};