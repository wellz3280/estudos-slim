<?php

    namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class JsonController implements InterfaceController {
    public function index(Request $request,Response $response,array $args):Response
    {

       $arr = $this->data();
        // retorna todos os elementos do array
        $load = json_encode(['carros' => $arr], JSON_PRETTY_PRINT);
        $response->getBody()->write($load);
        
        return $response->withHeader('Content-Type', 'application/json');
        
    }

    private function data():array
    {
        return [
            1 =>
            [
                'marca' => 'fiat',
                'modelo' => 'uno',
                'ano' => '2019',
                'cor' => 'vermelho',
                'tabela_fip' => 19.300,
                'km_rodados' => 123.000
            ],
            2 =>
            [
                'marca' => 'volkswagem',
                'modelo' => 'onix',
                'ano' => '2022',
                'cor' => 'prata',
                'tabela_fip' => 79.300,
                'km_rodados' => 12.000
            ],
            3 =>
            [
                'marca' => 'volkswagem',
                'modelo' => 'gol',
                'ano' => '2020',
                'cor' => 'preto',
                'tabela_fip' => 69.300,
                'km_rodados' => 0
            ],
            4 =>
            [
                'marca' => 'fiat',
                'modelo' => 'argos',
                'ano' => '2020',
                'cor' => 'prata',
                'tabela_fip' => 50.300,
                'km_rodados' => 16.000
            ]
        ];
    }

    public function filter(Request $request,Response $response,array $args):Response
    {
        $arr = $this->data();

        foreach($arr as $key => $value){
           
            if($value['marca'] == $args['marca']){ 
                $load = json_encode($value, JSON_PRETTY_PRINT);
                $response->getBody()->write($load);
            }
        }

        return $response->withHeader('Content-Type', 'application/json');
    }
}