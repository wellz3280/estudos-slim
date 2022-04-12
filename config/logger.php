<?php

use Slim\App;

return function(App $app){
  $config = $app->getContainer()->get('settings');

  $config['logger'] = function($c) use($config) {
  $logger = new \Monolog\Logger($config['logger']['path']);
  $file_handler = new \Monolog\Handler\StreamHandler($config['logger']['path']);
  $logger->pushHandler($file_handler);
  
  return $logger;
};
};