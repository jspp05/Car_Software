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

    public function guardar($TipoDeDocumento, $numeroDocumento, $nombreUsuario, $correo, $telefono, $direccion)
    {
        try {
        $sql = 
        "INSERT INTO usuario (TipoDeDocumento, numeroDocumento, nombreUsuario, correo, telefono, direccion) VALUES (:TipoDeDocumento, :numeroDocumento, :nombreUsuario, :correo, :telefono, :direccion)";
        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(":TipoDeDocumento", $TipoDeDocumento);
        $consulta->bindParam(":numeroDocumento", $numeroDocumento);
        $consulta->bindParam(":nombreUsuario", $nombreUsuario);
        $consulta->bindParam(":correo", $correo);
        $consulta->bindParam(":telefono", $telefono);
        $consulta->bindParam(":direccion", $direccion);

        return $consulta->execute();
        } catch (PDOException $e) {
            echo "Error al guardar el usuario: " . $e->getMessage();
        }
    }
}
