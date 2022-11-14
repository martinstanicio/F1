<tr>
    <td><?php echo $nombre; ?></td>
    <td><?php echo $apellido; ?></td>
    <td><?php echo $titulos; ?></td>
    <td><a href="<?php echo $link; ?>" title="<?php echo $link; ?>">Link</a></td>
    <td class="botones">
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Borrar">
        </form>
    </td>
</tr>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "model/Piloto.php";

    $controller = new Controller();
    $controller->openDb();

    $id = $_POST["id"];

    $piloto = new Piloto();
    $piloto->deleteOne($id);

    header("location:index.php?action=admin");
}
?>