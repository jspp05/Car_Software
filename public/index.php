<?php

require_once __DIR__ . "/../app/controllers/vehiculoControllers.php";
require_once __DIR__ . "/../app/controllers/usuarioControllers.php";
require_once __DIR__ . "/../app/controllers/ordendetrabajoControllers.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

?>

<a href="/vehiculo">Vehículos</a>
<a href="/usuario">Usuarios</a>
<a href="/ordendetrabajo">Órdenes de trabajo</a>
<a href="/crear/vehiculo">Crear Vehículo</a>
<a href="/crear/usuario">Crear Usuario</a>
<a href="/crear/ordendetrabajo">Crear Orden de Trabajo</a>

<?php
if ($method === 'GET' && $uri === '/vehiculo'){
    
    $vehiculoController = new vehiculoControllers();
    $vehiculoController->index();
} elseif ($method === 'GET' && $uri === '/usuario') {
    $usuarioController = new usuarioControllers();
    $usuarioController->index();
} elseif ($method === 'GET' && $uri === '/ordendetrabajo') {
    $ordendetrabajoController = new ordendetrabajoControllers();
    $ordendetrabajoController->index();
} elseif($method === 'GET' && $uri === '/crear/vehiculo'){
    $VehiculoController = new vehiculoControllers();
    $VehiculoController->crear();

} elseif($method === 'POST' && $uri === '/vehiculo'){
    $VehiculoController = new vehiculoControllers();
    $VehiculoController->guardar();

} elseif($method === 'GET' && $uri === '/crear/usuario'){
    $UsuarioController = new usuarioControllers();
    $UsuarioController->crear();

} elseif($method === 'POST' && $uri === '/usuario'){
    $UsuarioController = new usuarioControllers();
    $UsuarioController->guardar();
} elseif($method === 'GET' && $uri === '/crear/usuario'){
    $UsuarioController = new usuarioControllers();
    $UsuarioController->crear();

} elseif($method === 'GET' && $uri === '/crear/ordendetrabajo'){
    $OrdendetrabajoController = new ordendetrabajoControllers();
    $OrdendetrabajoController->crear();
} elseif($method === 'POST' && $uri === '/ordendetrabajo'){
    $OrdendetrabajoController = new ordendetrabajoControllers();
    $OrdendetrabajoController->guardar();
}