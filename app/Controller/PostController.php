<?php
    namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class PostController implements InterfaceController
{
    public function index(Request $request, Response $response, array $args):Response
    {
        
    
        return $response;
    }
}