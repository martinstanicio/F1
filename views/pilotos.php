<header>
    <h1>Pilotos importantes</h1>
    <p>
        Aquí podrás encontrar a los pilotos que tuvieron el mayor impacto en toda la historia de la Fórmula 1, desde sus comienzos hasta la actualidad.
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
            $img = htmlspecialchars($piloto["img"]);

            $bg = "background-image: url(" . $img . ");";

            include "views/components/piloto.php";
        }
        ?>
    </div>
</section>