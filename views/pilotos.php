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
        $controller = new Controller();
        $controller->openDb();

        $piloto = new Piloto();
        $pilotos = $piloto->getAll();

        foreach ($pilotos as $piloto) {
            $name = htmlspecialchars($piloto["name"]);
            $surname = htmlspecialchars($piloto["surname"]);
            $titles = htmlspecialchars($piloto["titles"]);
            $link = htmlspecialchars($piloto["link"]);

            $bg = "background-image: url(./img/" . strtolower($surname) . ".jpg);";

            include "views/components/piloto.php";
        }

        $controller->closeDb();
        ?>
    </div>
</section>