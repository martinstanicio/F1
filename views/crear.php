<?php
$item = $_POST["item"];
$redirect = $_POST["redirect"];

require_once "model/$item.php";

$modelo = new $item();
$modelo->insertOne($_POST);

header("location:$redirect");
