<?php
    namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;

class FormController implements InterfaceController
{
    public function index(Request $request, Response $response, array $args): Response
    {
        $view = Twig::fromRequest($request);
        return $view->render($response,'form.html',[
            'titulo' => 'form'
        ]);
    }
}