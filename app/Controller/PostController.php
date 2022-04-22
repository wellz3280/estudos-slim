<?php
    namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Weliton\InitSlim\Application\UseCase\Command;
use Weliton\InitSlim\Application\UseCase\Registration;
use Weliton\InitSlim\Domain\Entities\Pet;
use Weliton\InitSlim\Infraestructure\Persistance\Connection;

class PostController implements InterfaceController
{
    public function index(Request $request, Response $response, array $args):Response
    {
        
        $pet = new Pet();
        $pet->setName($_POST['nome'])
            ->setRaca($_POST['raca'])
            ->setIdade((int)$_POST['idade']);

        $registration = new Registration($pet->arrPet());
        $create = $registration->handle(new Command(Connection::startConn(),'pets'));
        
        if($create->create()){
            $response->getBody()->write("Linha inserida com sucesso");
        }else{
            $response->getBody()->write('Erro ao Inserrir linha');
        }        
        
        return $response;
    }
}