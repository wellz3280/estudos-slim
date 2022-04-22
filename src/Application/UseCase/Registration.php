<?php
    declare(strict_types=1);
    namespace Weliton\InitSlim\Application\UseCase;

use Weliton\InitSlim\Infraestructure\Repositories\HandleRepositore;

class Registration
{
    private ?array $data;

    public function __construct(?array $data)
    {
        $this->data = $data;
    }

    public function handle(Command $command):HandleRepositore
    {
        return $handle = new HandleRepositore($command->getPdo(),$this->data,$command->getTableName());
    }   
}