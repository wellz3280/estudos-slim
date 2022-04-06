<?php
    namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;

class HomeController implements InterfaceController
{
    public function index(Request $request, Response $response, array $args):Response    
    {
        $view = Twig::fromRequest($request);
        return $view->render($response,'home.html',[
            'titulo' => 'Pagina home'
        ]);
    }
}