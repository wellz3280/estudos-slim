<?php
    namespace Weliton\InitSlim\Application\Middleware;
    
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
    use Slim\Routing\RouteContext;

class ArrMiddleware
{
    public function __invoke(Request $request, RequestHandler $handler)
    {
        $routeContext = RouteContext::fromRequest($request);
        $route = $routeContext->getRoute();
        
        $courseNome = $route->getArgument('usuario'); 
    
        echo "Bem Vindo {$courseNome}";

        return $handler->handle($request);
    }
}