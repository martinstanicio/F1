<?php
$controller = new Controller();
$controller->checkAdmin();
?>
<header>
    <h1>Crear auto</h1>
</header>
<section class="container">
    <form action="index.php?action=crear" method="POST">
        <input type="hidden" name="item" value="Auto">
        <input type="hidden" name="redirect" value="index.php?action=admin">
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
                <option value="NA">NA</option>
                <option value="Turbo">Turbo</option>
                <option value="Supercargado">Supercargado</option>
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
            <input type="url" name="img" id="img" />
        </div>
        <div class="field">
            <input type="submit" value="Enviar" />
        </div>
        <div class="field">
            <input type="reset" value="Resetear" />
        </div>
    </form>
</section>