<?php
    declare(strict_types=1);
    namespace Weliton\InitSlim\Application\UseCase;

use Weliton\InitSlim\Infraestructure\Repositories\HandleRepositore;

class Registration
{
    public function handle(Command $command):HandleRepositore
    {
        return $handle = new HandleRepositore($command->getPdo(),[],$command->getTableName());
    }   
}