<?php
    namespace Weliton\InitSlim\Application\Middleware;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\Routing\RouteContext;

class JsonMiddleware implements InterfaceMiddleware
{
    public function __invoke(ServerRequestInterface $request, RequestHandlerInterface $hundler)
    {
        $context =  RouteContext::fromRequest($request);
        $route = $context->getRoute();
        
    }
}