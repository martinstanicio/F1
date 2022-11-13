<header>
    <h1>Contactanos</h1>
</header>
<section class="container">
    <form action="index.php?action=contacto" method="POST">
        <div class="field">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required placeholder="Juan" />
        </div>
        <div class="field">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required placeholder="example@example.com" />
        </div>
        <div class="field">
            <label for="telefono">Número de teléfono</label>
            <input type="tel" name="telefono" id="telefono" placeholder="+54 9 348 412 34-45" />
        </div>
        <div class="field">
            <label for="genero">Género</label>
            <select name="genero" id="genero" required>
                <option value="" disabled seleced>Eliga una opción</option>
                <option value="masculino">Hombre</option>
                <option value="femenino">Mujer</option>
                <option value="no binario">No binario</option>
                <option value="x">Prefiero no decirlo</option>
            </select>
        </div>
        <div class="field">
            <label for="mensaje">Tu mensaje</label>
            <textarea name="mensaje" id="mensaje" rows="10" required></textarea>
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

    $sql = "INSERT INTO `formularios` (
        `nombre`,
        `email`,
        `telefono`,
        `genero`,
        `mensaje`
    ) VALUES (
        '" . $_POST["nombre"] . "',
        '" . $_POST["email"] . "',
        '" . $_POST["telefono"] . "',
        '" . $_POST["genero"] . "',
        '" . $_POST["mensaje"] . "'
    );";

    mysqli_query($controller->conn, $sql);
}
?>