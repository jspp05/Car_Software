<h1>Actualizando Datos</h1>
<form action="/usuario/editar" method='POST'>
    <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
    <label>usuario</label>
    <input type="text" name="usuario" value="<?= $usuario->usuario ?>">
</form>