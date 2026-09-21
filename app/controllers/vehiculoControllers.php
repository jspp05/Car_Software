<?php

require_once __DIR__ . "/../models/vehiculo.php";

class vehiculoControllers
{
    public function index()
    {
        $vehiculo = new vehiculo();

        try {
            $vehiculos = $vehiculo->getAll();
        } catch (PDOException) {
            echo "No se encontraron vehiculos";
        }
    }
}