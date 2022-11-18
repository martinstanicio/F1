<tr>
    <td><?php echo $nombre; ?></td>
    <td><?php echo $apellido; ?></td>
    <td><?php echo $titulos; ?></td>
    <td><a href="<?php echo $link; ?>" title="<?php echo $link; ?>">Link</a></td>
    <td class="botones">
        <?php
        $item = "Piloto";
        include "views/components/botonborrar.php";
        ?>
    </td>
</tr>