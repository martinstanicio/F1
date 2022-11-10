<?php
require_once "config/admin.php";
?>
<footer>
    <p>Martín Stanicio, Alejo Rivera. Colegio Del Norte. 2022.</p>
    <ul>
        <li><a href="https://www.facebook.com/Formula1">Facebook</a></li>
        <li><a href="https://twitter.com/f1">Twitter</a></li>
        <li><a href="https://www.instagram.com/f1/">Instagram</a></li>
        <li><a href="https://www.youtube.com/F1">YouTube</a></li>

        <?php if (isset($_COOKIE["usuario"]) and $_COOKIE["usuario"] == Admin::USUARIO) { ?>
            <li><a href="index.php?action=admin">Admin</a></li>
            <li><a href="index.php?action=logout">Cerrar sesión</a></li>
        <?php } else { ?>
            <li><a href="index.php?action=login">Iniciar sesión</a></li>
        <?php } ?>
    </ul>
</footer>