<header>
    <h1>Autos icónicos</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
    </p>
</header>
<section class="container autos">
    <?php
    require "model/Auto.php";

    $controller = new Controller();
    $controller->openDb();

    $auto = new Auto();
    $autos = $auto->getAll();

    foreach ($autos as $auto) {
        $nombre = $auto["nombre"];
        $descripcion = $auto["descripcion"];
        $items = $auto["items"];
        $img = $auto["img"];

        include "views/components/auto.php";
    }

    $controller->closeDb();
    ?>
</section>