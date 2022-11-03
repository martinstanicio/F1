<article class="autos__auto">
    <img src="<?php echo "./img/" . $img . ".jpg"; ?>" alt="<?php echo $img; ?>">
    <div class="text">
        <h2><?php echo $nombre; ?></h2>
        <p><?php echo $descripcion; ?></p>
        <ul>
            <?php
            foreach (explode(",", $items) as $item) {
                echo "<li>" . $item . "</li>";
            }
            ?>
        </ul>
    </div>
</article>