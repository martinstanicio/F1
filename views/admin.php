<?php
$controller = new Controller();
$controller->checkAdmin();
$controller->openDb();
?>
<header>
    <h1>Dashboard</h1>
</header>
<section class="container">
    <article id="formularios">
        <h2>Formularios</h2>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Género</th>
                        <th>Mensaje</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once "model/Formulario.php";
                    $formulario = new Formulario();
                    $formularios = $formulario->getAll();
                    foreach ($formularios as $formulario) {
                        $id = htmlspecialchars($formulario["id"]);
                        $nombre = htmlspecialchars($formulario["nombre"]);
                        $email = htmlspecialchars($formulario["email"]);
                        $telefono = htmlspecialchars($formulario["telefono"]);
                        $genero = htmlspecialchars($formulario["genero"]);
                        $mensaje = htmlspecialchars($formulario["mensaje"]);
                        include "views/components/admin/formulario.php";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </article>
    <article id="pilotos">
        <h2>
            Pilotos
            <a href="index.php?action=crearpiloto">(Crear)</a>
        </h2>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Títulos</th>
                        <th>Link</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once "model/Piloto.php";
                    $piloto = new Piloto();
                    $pilotos = $piloto->getAll();
                    foreach ($pilotos as $piloto) {
                        $id = htmlspecialchars($piloto["id"]);
                        $nombre = htmlspecialchars($piloto["nombre"]);
                        $apellido = htmlspecialchars($piloto["apellido"]);
                        $titulos = htmlspecialchars($piloto["titulos"]);
                        $link = htmlspecialchars($piloto["link"]);
                        include "views/components/admin/piloto.php";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </article>
    <article id="autos">
        <h2>
            Autos
            <a href="index.php?action=crearauto">(Crear)</a>
        </h2>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Nombre</th>
                        <th>Temporada</th>
                        <th>Pilotos</th>
                        <th>Motor</th>
                        <th>Cilindrada</th>
                        <th>Inducción</th>
                        <th>HP</th>
                        <th>RPM</th>
                        <th>Caja</th>
                        <th>Velocidades</th>
                        <th>Neumaticos</th>
                        <th>Victorias</th>
                        <th>Carreras</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
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
                        include "views/components/admin/auto.php";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </article>
</section>
<?php
$controller->closeDb();
?>