<header>
    <h1>Pilotos importantes</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
    </p>
</header>
<section class="container">
    <div class="pilotos">
        <?php
        require_once "model/Piloto.php";
        $piloto = new Piloto();
        $pilotos = $piloto->getAll();

        foreach ($pilotos as $piloto) {
            $nombre = htmlspecialchars($piloto["nombre"]);
            $apellido = htmlspecialchars($piloto["apellido"]);
            $titulos = htmlspecialchars($piloto["titulos"]);
            $link = htmlspecialchars($piloto["link"]);

            $bg = "background-image: url(./img/" . strtolower($apellido) . ".jpg);";

            include "views/components/piloto.php";
        }
        ?>
    </div>
</section>