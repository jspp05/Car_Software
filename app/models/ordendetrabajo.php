<?php

require_once __DIR__ ."/../../config/Database.php";

class ordendetrabajo{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM ordendetrabajo";
        $consulta = $this->connection->query($sql);

        return $consulta->fetchAll(PDO::FETCH_ASSOC);

    }
    public function guardar($fechaIngreso, $fechaEntrega, $idVehiculo, $idUsuario, $estado)
    {
        try {
        $sql = 
        "INSERT INTO ordendetrabajo (fechaIngreso, fechaEntrega, idVehiculo, idUsuario, estado) VALUES (:fechaIngreso, :fechaEntrega, :idVehiculo, :idUsuario, :estado)";
        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(":fechaIngreso", $fechaIngreso);
        $consulta->bindParam(":fechaEntrega", $fechaEntrega);
        $consulta->bindParam(":idVehiculo", $idVehiculo);
        $consulta->bindParam(":idUsuario", $idUsuario);
        $consulta->bindParam(":estado", $estado);

        return $consulta->execute();
        } catch (PDOException $e) {
            echo "Error al guardar la orden de trabajo: " . $e->getMessage();
        }
    }
}
