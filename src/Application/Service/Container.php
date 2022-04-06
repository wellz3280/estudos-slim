<?php
    namespace Weliton\InitSlim\Application\Service;
    

class Container
{
    // private Container $container;
    public static function createContainer():Container
    {
        return new Container();
    }
    
}