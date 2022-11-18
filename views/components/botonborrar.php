<form action="index.php?action=borrar" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="hidden" name="item" value="<?php echo $item; ?>">
    <input type="submit" value="Borrar">
</form>