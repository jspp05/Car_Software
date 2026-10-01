<?php

require_once __DIR__ . "/../models/usuario.php";

class usuarioControllers
{
    public function index()
    {
        $usuarioModel = new Usuario();

        try {
            $usuarios = $usuarioModel->getAll();
        } catch (PDOException) {
            echo "No se encontraron usuarios";
        }

        require_once __DIR__ . "/../views/usuario/index.php";
    }
}
?>