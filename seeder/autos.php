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
    `img` VARCHAR(255) NOT NULL DEFAULT 'https://via.placeholder.com/400x300',
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
    ('Mclaren', 'MP4/4', 1988, 'Ayrton Senna,Alain Prost', 'V6', 1.5, 'Turbo', 700, 12500, 'Manual', 6, 'Goodyear', 15, 16, 'https://upload.wikimedia.org/wikipedia/commons/b/bd/McLaren_MP4-4_front-left_Suzuka_RacingTheater.jpg'),
    ('Ferrari', 'F2004', 2004, 'Michael Schumacher,Rubens Barrichello', 'V10', 3, 'NA', 900, 19000, 'Secuencial semiautomática', 7, 'Bridgestone', 15, 18, 'https://upload.wikimedia.org/wikipedia/commons/8/87/Scuderia_Ferrari_F2004.jpg'),
    ('Renault', 'R25',  2005, 'Fernando Alonso,Giancarlo Fisichella', 'V10', 3, 'NA', 900, 19000, 'Secuencial semiautomática', 6, 'Michelín', 8, 19, 'https://upload.wikimedia.org/wikipedia/commons/4/4d/Fernando_Alonso_2005_Canada.jpg'),
    ('Red Bull', 'RB16B',  2021, 'Max Verstappen,Sergio Pérez', 'V6', 1.6, 'Turbo', 900, 15000, 'Secuencial semiautomática', 8, 'Pirelli', 11, 22, 'https://upload.wikimedia.org/wikipedia/commons/a/a2/Alexander_Albon-Red_Bull_RB16_%284%29.jpg'),
    ('Williams', 'FW14B',  1992, 'Nigel Mansell,Riccardo Patrese', 'V10', 3.5, 'NA', 750, 13000, 'Secuencial semiautomática', 6, 'Goodyear', 10, 16, 'https://upload.wikimedia.org/wikipedia/commons/3/33/Williams_FW14B.jpg'),
    ('Ferrari', '156',  1961, 'Phil Hill,Wolfgang von Trips,Giancarlo Baghetti', 'V6', 1.5, 'NA', 190, 9500, 'Manual', 5, 'Dunlop', 5, 8, 'https://upload.wikimedia.org/wikipedia/commons/7/7f/LGHA_2018_-_Les_monoplaces_%2811%29.jpg');";

try {
    mysqli_query($conn, $table);
    mysqli_query($conn, $insert);
} catch (Exception $e) {
    echo $e;
}
