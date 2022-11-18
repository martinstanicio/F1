<tr>
    <td><?php echo $marca; ?></td>
    <td><?php echo $nombre; ?></td>
    <td><?php echo $temporada; ?></td>
    <td>
        <ul>
            <?php foreach (explode(",", $pilotos) as $piloto) { ?>
                <li><?php echo trim($piloto); ?></li>
            <?php } ?>
        </ul>
    </td>
    <td><?php echo $motor; ?></td>
    <td><?php echo $cilindrada . "L"; ?></td>
    <td><?php echo $induccion; ?></td>
    <td><?php echo number_format($hp); ?></td>
    <td><?php echo number_format($rpm); ?></td>
    <td><?php echo $caja; ?></td>
    <td><?php echo $velocidades; ?></td>
    <td><?php echo $neumaticos; ?></td>
    <td><?php echo $victorias; ?></td>
    <td><?php echo $carreras; ?></td>
    <td>
        <a href="<?php echo "./img/" . $img . ".jpg"; ?>" title="<?php echo $nombre; ?>" about="_blank">
            Imagen
        </a>
    </td>
    <td class="botones">
        <?php
        $item = "Auto";
        include "views/components/botonborrar.php";
        ?>
    </td>
</tr>