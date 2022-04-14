<?php
    namespace Weliton\InitSlim\Infraestructure;

use Dotenv\Dotenv;
use PDO;

class Connection
{
    public static function startConn():PDO
    {
        $env = Dotenv::createImmutable(__DIR__.'/../../');
        $env->load();

        $conn = new PDO("mysql:host={$_ENV['HOST']};dbname={$_ENV['DB_NAME']}",
        $_ENV['USUARIO'],$_ENV['PASSWORD']);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        
        return $conn;
    }
}