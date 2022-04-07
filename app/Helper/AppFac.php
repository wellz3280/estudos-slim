<?php

    namespace App\Helper;

use Slim\Factory\AppFactory;

trait AppFac 
{

    public function appFac():AppFactory
    {
       return $app =  new AppFactory;
        
    }

}