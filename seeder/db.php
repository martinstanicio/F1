<?php
require_once "../config/DB.php";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_connect("localhost", "root", "");

$user = "CREATE USER IF NOT EXISTS '" . DB::USER . "'@'" . DB::HOST . "' IDENTIFIED by '" . DB::PASS . "';";
$usage = "GRANT USAGE ON *.* TO '" . DB::USER . "'@'" . DB::HOST . "' require_once NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;";
$db = "CREATE DATABASE IF NOT EXISTS `" . DB::NAME . "`;";
$privileges = "GRANT ALL PRIVILEGES ON `" . DB::NAME . "`.* TO '" . DB::USER . "'@'" . DB::HOST . "';";
$use = "USE `" . DB::NAME . "`;";

try {
    mysqli_query($conn, $user);
    mysqli_query($conn, $usage);
    mysqli_query($conn, $db);
    mysqli_query($conn, $privileges);
    mysqli_query($conn, $use);
} catch (Exception $e) {
    echo $e;
}
