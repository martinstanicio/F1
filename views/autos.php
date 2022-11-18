<header>
    <h1>Autos icónicos</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
    </p>
</header>
<section class="container autos">
    <?php
    require_once "model/Auto.php";

    $auto = new Auto();
    $autos = $auto->getAll();

    foreach ($autos as $auto) {
        $id = htmlspecialchars($auto["id"]);
        $marca = htmlspecialchars($auto["marca"]);
        $nombre = htmlspecialchars($auto["nombre"]);
        $temporada = htmlspecialchars($auto["temporada"]);
        $pilotos = htmlspecialchars($auto["pilotos"]);
        $motor = htmlspecialchars($auto["motor"]);
        $cilindrada = htmlspecialchars($auto["cilindrada"]);
        $induccion = htmlspecialchars($auto["induccion"]);
        $hp = htmlspecialchars($auto["hp"]);
        $rpm = htmlspecialchars($auto["rpm"]);
        $caja = htmlspecialchars($auto["caja"]);
        $velocidades = htmlspecialchars($auto["velocidades"]);
        $neumaticos = htmlspecialchars($auto["neumaticos"]);
        $victorias = htmlspecialchars($auto["victorias"]);
        $carreras = htmlspecialchars($auto["carreras"]);
        $img = htmlspecialchars($auto["img"]);

        include "views/components/auto.php";
    }
    ?>
</section>