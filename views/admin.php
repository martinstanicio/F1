<?php
require_once "config/admin.php";

if (!isset($_COOKIE["usuario"]) or $_COOKIE["usuario"] != Admin::USUARIO) {
    header("location:index.php?action=login");
}

$controller = new Controller();
$controller->openDb();
?>
<header>
    <h1>Dashboard</h1>
</header>
<section class="container">
    <article>
        <h2>Formularios</h2>
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
    </article>
</section>
<?php
$controller->closeDb();
?>