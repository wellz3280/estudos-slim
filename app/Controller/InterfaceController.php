<?php
    namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

interface InterfaceController
{
    public function index(Request $request,Response $response,array $args):Response;
}