<?php
if (isset($_COOKIE["usuario"])) {
    setcookie("usuario", null, time() - 3600);
    header("location:index.php?action=login");
} else {
    header("location:index.php?action=404");
}
