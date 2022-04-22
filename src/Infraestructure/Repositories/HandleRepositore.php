<?php
    declare(strict_types=1);
    namespace Weliton\InitSlim\Infraestructure\Repositories;

use PDO;

class HandleRepositore
{
    private PDO $pdo;
    private array $data;
    private string $tableName;

    public function __construct(PDO $pdo,array $data = [],string $tableName)
    {
        $this->pdo = $pdo;
        $this->data = $data;
        $this->tableName = $tableName;
    }

    public function read():array
    {

        $stmt = $this->pdo->prepare("SELECT * FROM {$this->tableName}");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function create():void
    {
        echo "create seccess";
    }
}