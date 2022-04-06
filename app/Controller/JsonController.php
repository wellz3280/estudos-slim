<?php

    namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class JsonController implements InterfaceController {
    public function index(Request $request,Response $response,array $args):Response
    {
      
        $arr = [
            'nome' => $args['name'],
            'idade' => $args['idade']
        ];

        $payload = json_encode(['alunos' => $arr], JSON_PRETTY_PRINT);
        $response->getBody()->write($payload);
        
        return $response->withHeader('Content-Type', 'application/json');
    }
}