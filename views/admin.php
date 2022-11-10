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

</section>
<?php
$controller->closeDb();
?>