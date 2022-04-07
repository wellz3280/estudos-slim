<?php
    namespace App\Controller;

use App\Helper\AppFac;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class TesteController implements InterfaceController
{
    use AppFac;
    public function index(Request $request, Response $response, array $args):Response
    {
        $app = $this->appFac()::create();
    
            $response->getBody()->write('redirecionado com sucesso');
            $app->redirect('/teste','/',302);
        
        
        return $response;
    }
}