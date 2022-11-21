<?php
$controller = new Controller();
$controller->checkAdmin();
?>
<header>
    <h1>Crear piloto</h1>
</header>
<section class="container">
    <form action="index.php?action=crear" method="POST">
        <input type="hidden" name="item" value="Piloto">
        <input type="hidden" name="redirect" value="index.php?action=admin">
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