<article class="autos__auto">
    <img src="<?php echo $img; ?>" alt="<?php echo $nombre; ?>">
    <div class="text">
        <h2><?php echo $marca; ?> <strong><?php echo $nombre; ?></strong></h2>
        <p>
            <?php
            echo "Diseñado para la temporada de " .  $temporada . ". ";
            echo "Fue conducido por";
            foreach (explode(",", $pilotos) as $piloto) {
                echo ", <strong>" . trim($piloto) . "</strong>";
            } ?>.
        </p>
        <ul>
            <li><?php echo $cilindrada . "L " . $motor . " <strong>" . $induccion . "</strong>"; ?></li>
            <li><?php echo "<strong>" . number_format($hp) . "HP</strong> @ " . number_format($rpm) . "RPM"; ?></li>
            <li><?php echo $caja . " de <strong>" . $velocidades . "</strong> velocidades"; ?></li>
            <li><?php echo "Neumáticos <strong>" . $neumaticos . "</strong>"; ?></li>
            <li><?php echo "<strong>" . $victorias . "</strong> victorias en " . $carreras . " carreras"; ?></li>
        </ul>
    </div>
</article>