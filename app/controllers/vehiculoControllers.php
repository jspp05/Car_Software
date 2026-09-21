<?php

require_once __DIR__ . "/../models/vehiculo.php";

class vehiculoControllers
{
    public function index()
    {
        $vehiculoModel = new Vehiculo();

        try {
            $vehiculos = $vehiculoModel->getAll();
        } catch (PDOException) {
            echo "No se encontraron vehiculos";
        }

        require_once __DIR__ . "/../views/vehiculo/index.php";
    }
}
?>