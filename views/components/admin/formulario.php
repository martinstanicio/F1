<tr>
    <td><?php echo $nombre; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $telefono; ?></td>
    <td><?php echo $genero; ?></td>
    <td><?php echo $mensaje; ?></td>
    <td class="botones">
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Borrar">
        </form>
    </td>
</tr>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "model/Formulario.php";

    $controller = new Controller();
    $controller->openDb();

    $id = $_POST["id"];

    $formulario = new Formulario();
    $formulario->deleteOne($id);

    header("location:index.php?action=admin");
}
?>