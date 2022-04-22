<?php
    declare(strict_types=1);
    namespace Weliton\InitSlim\Infraestructure\Repositories;

use PDO;
use PDOException;

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

    public function create():bool
    {
        try{
            $sql = "INSERT INTO {$this->tableName} (name,raca,idade) Values (:name,:raca,:idade)";
            $stmt = $this->pdo->prepare($sql);
            
            foreach($this->data as $p => $v){
                $stmt->bindValue(':'.$p,$v);
            }

            if($stmt->execute()){
                return true;
            }

        }catch(PDOException $e){
            echo "Error".$e->getMessage();
        }
    }
}