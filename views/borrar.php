<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item = $_POST["item"];

    require_once "model/$item.php";

    $modelo = new $item();
    $modelo->deleteOne($_POST["id"]);

    header("location:index.php?action=admin");
}
