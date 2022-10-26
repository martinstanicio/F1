<?php
require_once "config/db.php";
require_once "controller/controller.php";
require_once "model/model.php";
require_once "model/piloto.php";

$controller = new Controller();
$controller->template();
