<?php
require_once "../config/DB.php";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_connect(
    DB::HOST,
    DB::USER,
    DB::PASS,
    DB::NAME,
);

$table = "CREATE TABLE IF NOT EXISTS `f1`.`autos` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `marca` VARCHAR(255) NOT NULL,
    `nombre` VARCHAR(255) NOT NULL,
    `temporada` INT NOT NULL,
    `pilotos` VARCHAR(255) NOT NULL,
    `motor` VARCHAR(255) NOT NULL,
    `cilindrada` DECIMAL(3,1) NOT NULL,
    `induccion` ENUM('NA','Turbo','Supercargado') NOT NULL,
    `hp` INT NOT NULL,
    `rpm` INT NOT NULL,
    `caja` VARCHAR(255) NOT NULL,
    `velocidades` INT NOT NULL,
    `neumaticos` VARCHAR(255) NOT NULL,
    `victorias` VARCHAR(255) NOT NULL,
    `carreras` VARCHAR(255) NOT NULL,
    `img` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;";
$insert = "INSERT INTO `autos` (
    `marca`,
    `nombre`,
    `temporada`,
    `pilotos`,
    `motor`,
    `cilindrada`,
    `induccion`,
    `hp`,
    `rpm`,
    `caja`,
    `velocidades`,
    `neumaticos`,
    `victorias`,
    `carreras`,
    `img`
) VALUES
    ('Mclaren', 'MP4/4', 1988, 'Ayrton Senna,Alain Prost', 'V6', 1.5, 'Turbo', 700, 12500, 'Manual', 6, 'Goodyear', 15, 16, 'mp4-4'),
    ('Ferrari', 'F2004', 2004, 'Michael Schumacher,Rubens Barrichello', 'V10', 3, 'NA', 900, 19000, 'Secuencial semiautomática', 7, 'Bridgestone', 15, 18, 'f2004'),
    ('Renault', 'R25',  2005, 'Fernando Alonso,Giancarlo Fisichella', 'V10', 3, 'NA', 900, 19000, 'Secuencial semiautomática', 6, 'Michelín', 8, 19, 'r25');";

try {
    mysqli_query($conn, $table);
    mysqli_query($conn, $insert);
} catch (Exception $e) {
    echo $e;
}
