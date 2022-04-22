<?php
    declare(strict_types=1);
    namespace Weliton\InitSlim\Domain\Entities;

final class Pet
{
    private string $name;
    private string $raca;
    private int $idade;

    public function arrPet():array
    {
        return[
            'name' => $this->getName(),
            'raca' => $this->getRaca(),
            'idade' => $this->getIdade(),
        ];
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getRaca()
    {
        return $this->raca;
    }

    public function setRaca($raca)
    {
        $this->raca = $raca;

        return $this;
    }

    public function getIdade():int
    {
        return $this->idade;
    }

    public function setIdade($idade):self
    {
        $this->idade = $idade;

        return $this;
    }
}