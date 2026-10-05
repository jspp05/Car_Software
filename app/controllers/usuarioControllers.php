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
    public function crear()
    {
        require_once __DIR__ . "/../views/usuario/crear.php";
    }

    public function guardar()
    {
       $TipoDeDocumento = $_POST['TipoDeDocumento'];
       $numeroDocumento = $_POST['numeroDocumento'];
       $nombreUsuario = $_POST['nombreUsuario'];
       $telefono = $_POST['telefono'];
       $correo = $_POST['correo'];
       $direccion = $_POST['dirección'];

       $usuario = new Usuario();
       $resultado = $usuario->guardar($TipoDeDocumento, $numeroDocumento, $nombreUsuario, $correo, $telefono, $direccion);
       if ($resultado) {
           echo "Usuario guardado correctamente.";
       } else {
           echo "Error al guardar el usuario.";
       }
    }
}
?>