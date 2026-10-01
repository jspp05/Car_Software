<h1>Listado De Ordenes de Trabajo</h1>


<?php if (!empty($ordenes)) { ?>
<table border="1">
    <tr>
        <th>id</th>
        <th>fechaIngreso</th>
        <th>fechaEntrega</th>
        <th>idVehiculo</th>
        <th>idUsuario</th>
        <th>estado</th>

    </tr>
    <?php foreach ($ordenes as $orden): ?>
      <tr>

        <td><?= $orden["id"]?> </td>
        <td><?= $orden["fechaIngreso"]?> </td>
        <td><?= $orden["fechaEntrega"]?> </td>
        <td><?= $orden["idVehiculo"]?> </td>
        <td><?= $orden["idUsuario"]?> </td>
        <td><?= $orden["estado"]?> </td>
      </tr>
    <?php endforeach; ?>
</table>
<?php } else { ?>
    <p>No hay ordenes de trabajo disponibles.</p>
<?php } ?>