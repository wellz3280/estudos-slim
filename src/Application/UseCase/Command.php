<?php
    declare(strict_types=1);
    namespace Weliton\InitSlim\Application\UseCase;

use PDO;

class Command
{
    private PDO $pdo;
    private string $tableName;

    public function __construct(PDO $pdo,string $tableName)
    {
        $this->pdo = $pdo;
        $this->tableName = $tableName;
    }

     
    public function getPdo():PDO
    {
        return $this->pdo;
    }

    public function getTableName():string
    {
        return $this->tableName;
    }
}