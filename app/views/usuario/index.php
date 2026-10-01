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
      </tr>
    <?php endforeach; ?>
</table>
<?php } else { ?>
    <p>No hay usuarios disponibles.</p>
<?php } ?>