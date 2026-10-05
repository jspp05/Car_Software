<?php

require_once __DIR__ . "/../models/ordendetrabajo.php";

class ordendetrabajoControllers
{
    public function index()
    {
        $ordendetrabajoModel = new ordendetrabajo();

        try {
            $ordenes = $ordendetrabajoModel->getAll();
        } catch (PDOException) {
            echo "No se encontraron ordenes de trabajo";
        }

        require_once __DIR__ . "/../views/ordendetrabajo/index.php";
    }
     public function crear()
    {
        require_once __DIR__ . "/../views/ordendetrabajo/crear.php";
    }

    public function guardar()
    {
       $fechaIngreso = $_POST['fechaIngreso'];
       $fechaEntrega = $_POST['fechaEntrega'];
       $idVehiculo = $_POST['idVehiculo'];
       $idUsuario = $_POST['idUsuario'];
       $estado = $_POST['estado'];

       $ordendetrabajo = new ordendetrabajo();
       $resultado = $ordendetrabajo->guardar($fechaIngreso, $fechaEntrega, $idVehiculo, $idUsuario, $estado);
       if ($resultado) {
           echo "Orden de trabajo guardada correctamente.";
       } else {
           echo "Error al guardar la orden de trabajo.";
       }
    }
}
?>