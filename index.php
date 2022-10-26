<?php
require_once "config/db.php";
require_once "controller/controller.php";
require_once "model/model.php";

$mcv = new McvController();
$mcv->template();
