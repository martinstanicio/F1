<?php
$controller = new Controller();
$controller->checkAdmin();
?>
<header>
    <h1>Crear auto</h1>
</header>
<section class="container">
    <form method="POST">
        <div class="field">
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca" required autofocus />
        </div>
        <div class="field">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required />
        </div>
        <div class="field">
            <label for="temporada">Temporada</label>
            <input type="number" min="1950" max="<?php echo date("Y"); ?>" name="temporada" id="temporada" required />
        </div>
        <div class="field">
            <label for="pilotos">Pilotos (separados por coma)</label>
            <input type="text" name="pilotos" id="pilotos" required />
        </div>
        <div class="field">
            <label for="motor">Motor</label>
            <input type="text" name="motor" id="motor" required />
        </div>
        <div class="field">
            <label for="cilindrada">Cilindrada (L)</label>
            <input type="number" min="0" step="0.1" name="cilindrada" id="cilindrada" required />
        </div>
        <div class="field">
            <label for="induccion">Inducción</label>
            <select name="induccion" id="induccion" required>
                <option value disabled selected>Eliga una opción</option>
                <option value="na">NA</option>
                <option value="turbo">Turbo</option>
                <option value="supercargado">Supercargado</option>
            </select>
        </div>
        <div class="field split">
            <div>
                <label for="hp">HP</label>
                <input type="number" min="1" name="hp" id="hp" required />
            </div>
            <p>@</p>
            <div>
                <label for="rpm">RPM</label>
                <input type="number" min="1" name="rpm" id="rpm" required />
            </div>
        </div>
        <div class="field split">
            <div>
                <label for="caja">Caja</label>
                <input type="text" name="caja" id="caja" required />
            </div>
            <div>
                <label for="velocidades">Velocidades</label>
                <input type="number" min="1" name="velocidades" id="velocidades" required />
            </div>
        </div>
        <div class="field">
            <label for="neumaticos">Neumaticos</label>
            <input type="text" name="neumaticos" id="neumaticos" required />
        </div>
        <div class="field split">
            <div>
                <label for="victorias">Victorias</label>
                <input type="number" min="0" name="victorias" id="victorias" required />
            </div>
            <div>
                <label for="carreras">Carreras</label>
                <input type="number" min="0" name="carreras" id="carreras" required />
            </div>
        </div>
        <div class="field">
            <label for="img">Imágen</label>
            <input type="text" name="img" id="img" required />
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
    $controller->openDb();

    $sql = "INSERT INTO `autos` (
        `marca`,
        `nombre`,
        `temporada`,
        `pilotos`,
        `motor`,
        `cilindrada`,
        `induccion`,
        `hp`,
        `rpm`,
        `caja`,
        `velocidades`,
        `neumaticos`,
        `victorias`,
        `carreras`,
        `img`
    ) VALUES (
        '" . $_POST["marca"] . "',
        '" . $_POST["nombre"] . "',
        '" . $_POST["temporada"] . "',
        '" . $_POST["pilotos"] . "',
        '" . $_POST["motor"] . "',
        '" . $_POST["cilindrada"] . "',
        '" . $_POST["induccion"] . "',
        '" . $_POST["hp"] . "',
        '" . $_POST["rpm"] . "',
        '" . $_POST["caja"] . "',
        '" . $_POST["velocidades"] . "',
        '" . $_POST["neumaticos"] . "',
        '" . $_POST["victorias"] . "',
        '" . $_POST["carreras"] . "',
        '" . $_POST["img"] . "'
    );";

    mysqli_query($controller->conn, $sql);
}
?>