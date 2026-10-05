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

    public function crear()
    {
        require_once __DIR__ . "/../views/vehiculo/crear.php";
    }

    public function guardar()
    {
       $placa = $_POST['placa'];
       $marca = $_POST['marca'];
       $modelo = $_POST['modelo'];
       $color = $_POST['color'];

       $vehiculo = new Vehiculo();
       $resultado = $vehiculo->guardar($placa, $marca, $modelo, $color);
       if ($resultado) {
           echo "Vehiculo guardado correctamente.";
       } else {
           echo "Error al guardar el vehiculo.";
       }
    }
}
?>