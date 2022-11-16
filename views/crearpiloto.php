<?php
$controller = new Controller();
$controller->checkAdmin();
?>
<header>
    <h1>Crear piloto</h1>
</header>
<section class="container">
    <form method="POST">
        <div class="field">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required autofocus />
        </div>
        <div class="field">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" required />
        </div>
        <div class="field">
            <label for="titulos">Cantidad de títulos</label>
            <input type="number" min="0" name="titulos" id="titulos" required />
        </div>
        <div class="field">
            <label for="link">Link</label>
            <input type="url" name="link" id="link" required />
        </div>
        <div class="field">
            <input type="submit" value="Enviar" />
        </div>
        <div class="field">
            <input type="reset" value="Resetear" />
        </div>
    </form>
</section>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new Controller();
    $controller->openDb();

    $sql = "INSERT INTO `pilotos` (
        `nombre`,
        `apellido`,
        `titulos`,
        `link`
    ) VALUES (
        '" . $_POST["nombre"] . "',
        '" . $_POST["apellido"] . "',
        '" . $_POST["titulos"] . "',
        '" . $_POST["link"] . "'
    );";

    mysqli_query($controller->conn, $sql);
}
?>