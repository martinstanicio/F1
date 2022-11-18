<?php
$id = $_GET["id"];

require_once "model/Piloto.php";

$piloto = new Piloto();
$piloto->updateTitulos($id);

header("location:index.php?action=admin");
