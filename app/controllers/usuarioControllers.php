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

    public function editar()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    }
    public function eliminar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        if (!$id) { echo "ID de usuario no válido."; return; }

        $usuario = new Usuario();
        try {
            $usuario->eliminar($id);
            header("Location: /usuario");   // vuelve a la lista
            exit;
        } catch (PDOException $e) {
            echo "No se pudo eliminar el usuario. Es posible que tenga vehículos u órdenes asociadas.";
        }
}
}
?>