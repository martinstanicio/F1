<tr>
    <td><?php echo $nombre; ?></td>
    <td><a href="<?php echo "mailto:" . $email; ?>"><?php echo $email; ?></a></td>
    <td><?php echo $telefono; ?></td>
    <td><?php echo ucfirst($genero); ?></td>
    <td class="mensaje" title="<?php echo $mensaje; ?>"><?php echo $mensaje; ?></td>
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