<h1>Listado De Usuarios</h1>


<?php if (!empty($usuarios)) { ?>
<table border="1">
    <tr>
        <th>id</th>
        <th>Tipo de Documento</th>
        <th>Número de Documento</th>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Dirección</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
      <tr>

        <td><?= $usuario["id"]?> </td>
        <td><?= $usuario["TipoDeDocumento"]?> </td>
        <td><?= $usuario["numeroDocumento"]?> </td>
        <td><?= $usuario["nombreUsuario"]?> </td>
        <td><?= $usuario["telefono"]?> </td>
        <td><?= $usuario["correo"]?> </td>
        <td><?= $usuario["direccion"]?> </td>
        <td> <a href="/usuario/editar/<?= $usuario["id"] ?>">Editar</a> </td>
        <td>
            <form method="POST" action="/usuario/eliminar">
                <input type="hidden" name="id" value="<?= $usuario["id"] ?>">
                <button type="submit">Eliminar</button>
            </form>
      </tr>
    <?php endforeach; ?>
</table>
<?php } else { ?>
    <p>No hay usuarios disponibles.</p>
<?php } ?>