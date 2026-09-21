<h1>Listado De vehiculo</h1>


<?php if (!empty($vehiculo)) { ?>
<table border="1">
    <tr>
        <th>id</th>
        <th>placa</th>
        <th>marca</th>
        <th>modelo</th>
        <th>color</th>

    </tr>
    <?php foreach ($vehiculo as $vehiculo): ?>
      <tr>

        <td><?= $vehiculo["id"]?> </td>
        <td><?= $vehiculo["placa"]?> </td>
        <td><?= $vehiculo["marca"]?> </td>
        <td><?= $vehiculo["modelo"]?> </td>
        <td><?= $vehiculo["color"]?> </td>
      </tr>
    <?php endforeach; ?>
</table>
<?php } else { ?>
    <p>No hay vehiculo disponibles.</p>
<?php } ?>