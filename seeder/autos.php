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
    `nombre` VARCHAR(255) NOT NULL,
    `descripcion` VARCHAR(255) NOT NULL,
    `items` VARCHAR(255) NOT NULL,
    `img` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;";
$insert = "INSERT INTO `autos` (
    `nombre`,
    `descripcion`,
    `items`,
    `img`
) VALUES
    ('Mclaren <strong>MP4/4</strong>', 'Diseñado para la temporada de 1988. Fue conducido por <strong>Ayrton Senna</strong> y <strong>Alain Prost</strong>.', '1.5L V6 <strong>Turbo</strong>,<strong>700 HP</strong> @ 12.500 rpm,Manual de <strong>6</strong> velocidades,Neumáticos <strong>Goodyear</strong>,<strong>15</strong> victorias en 16 carreras', 'mp4-4'),
    ('Ferrari <strong>F2004</strong>', 'Diseñado para la temporada de 2004. Fue conducido por <strong>Michael Schumacher</strong> y <strong>Rubens Barrichello</strong>.', '3.0L V10 <strong>NA</strong>,<strong>900HP</strong> @ 19.000 rpm,Secuencial semiautomática de <strong>7</strong> velocidades,Neumáticos <strong>Bridgestone</strong>,<strong>15</strong> victorias en 18 carreras', 'f2004'),
    ('Renault <strong>R25</strong>',   'Diseñado para la temporada de 2005. Fue conducido por <strong>Fernando Alonso</strong> y <strong>Giancarlo Fisichella</strong>.', '3.0L V10 <strong>NA</strong>,<strong>900HP</strong> @ 19.000 rpm,Secuencial semiautomática de <strong>6</strong> velocidades,Neumáticos <strong>Michelín</strong>,<strong>8</strong> victorias en 19 carreras', 'r25');";

try {
    mysqli_query($conn, $table);
    mysqli_query($conn, $insert);
} catch (Exception $e) {
    echo $e;
}
