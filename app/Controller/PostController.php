<?php
    namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class PostController implements InterfaceController
{
    public function index(Request $request, Response $response, array $args):Response
    {
        $arr = [
            'nome' => $_POST['nome'],
            'idade' => $_POST['idade'],
            'sexo' => $_POST['sexo']    
        ];
        
        var_dump($arr);
        return $response;
    }
}