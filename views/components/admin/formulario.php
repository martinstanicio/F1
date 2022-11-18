<tr>
    <td><?php echo $nombre; ?></td>
    <td><a href="<?php echo "mailto:" . $email; ?>"><?php echo $email; ?></a></td>
    <td><?php echo $telefono; ?></td>
    <td><?php echo ucfirst($genero); ?></td>
    <td class="mensaje" title="<?php echo $mensaje; ?>"><?php echo $mensaje; ?></td>
    <td class="botones">
        <?php
        $item = "Formulario";
        include "views/components/botonborrar.php";
        ?>
    </td>
</tr>