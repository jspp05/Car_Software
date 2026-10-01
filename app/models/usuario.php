<?php

require_once __DIR__ ."/../../config/Database.php";

class Usuario{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM usuario";
        $consulta = $this->connection->query($sql);

        return $consulta->fetchAll(PDO::FETCH_ASSOC);

    }
}
