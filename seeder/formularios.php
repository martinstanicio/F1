<?php
require_once "../config/DB.php";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_connect(
    DB::HOST,
    DB::USER,
    DB::PASS,
    DB::NAME,
);

$table = "CREATE TABLE IF NOT EXISTS `f1`.`formularios` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `telefono` VARCHAR(255) NOT NULL,
    `genero` ENUM('m','f','o','p') NOT NULL,
    `mensaje` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;";
$insert = "INSERT INTO `formularios` (
    `nombre`,
    `email`,
    `telefono`,
    `genero`,
    `mensaje`
) VALUES
    ('Juan', 'juan@example.com', '549011123456', 'm', 'abc'),
    ('Juana', 'juana@example.com', '549011789012', 'f', 'def'),
    ('Carlos', 'carlos@example.com', '549011345678', 'm', 'ghi')";

try {
    mysqli_query($conn, $table);
    mysqli_query($conn, $insert);
} catch (Exception $e) {
    echo $e;
}
