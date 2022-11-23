<section class="container">
    <header>
        <h1>Login</h1>
    </header>
    <form method="POST">
        <div class="field">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" required autofocus />
        </div>
        <div class="field">
            <label for="contrasenia">Contraseña</label>
            <input type="password" name="contrasenia" id="contrasenia" required />
        </div>
        <div class="field">
            <input type="submit" value="Iniciar sesión" />
        </div>
    </form>
    <?php if (isset($_GET["error"])) { ?>
        <p class="center">El nombre de usuario o la contraseña son incorrectos.</p>
    <?php } ?>
</section>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new Controller;
    $controller->login();
}
?>