<header>
    <h1>Login</h1>
</header>
<section class="container">
    <form method="POST">
        <div class="field">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" required />
        </div>
        <div class="field">
            <label for="contrasenia">Contraseña</label>
            <input type="password" name="contrasenia" id="contrasenia" required />
        </div>
        <div class="field">
            <input type="submit" value="Iniciar sesión" />
        </div>
    </form>
</section>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "config/admin.php";

    $usuario = $_POST["usuario"];
    $contrasenia = $_POST["contrasenia"];

    if ($usuario == Admin::USUARIO and $contrasenia == Admin::CONTRASENIA) {
        setcookie("usuario", "admin");
        header("location:index.php?action=admin");
    }
}
?>