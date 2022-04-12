<?php
    namespace Weliton\InitSlim\Application\Middleware;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

interface InterfaceMiddleware
{
    public function __invoke(ServerRequestInterface $request,RequestHandlerInterface $hundler);
    
}