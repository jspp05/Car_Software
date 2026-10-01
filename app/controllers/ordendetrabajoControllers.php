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
}
?>