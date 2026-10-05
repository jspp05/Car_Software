<?php

require_once __DIR__ ."/../../config/Database.php";

class Vehiculo{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM vehiculo";
        $consulta = $this->connection->query($sql);

        return $consulta->fetchAll(PDO::FETCH_ASSOC);

    }

    public function guardar($placa, $marca, $modelo, $color)
    {
        try {
        $sql = 
        "INSERT INTO vehiculo (placa, marca, modelo, color) VALUES (:placa, :marca, :modelo, :color)";
        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(":placa", $placa);
        $consulta->bindParam(":marca", $marca);
        $consulta->bindParam(":modelo", $modelo);
        $consulta->bindParam(":color", $color);

        return $consulta->execute();
        } catch (PDOException $e) {
            echo "Error al guardar el vehiculo:";
        }
    }
}
