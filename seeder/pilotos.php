<?php
require_once "../config/DB.php";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_connect(
    DB::HOST,
    DB::USER,
    DB::PASS,
    DB::NAME,
);

$table = "CREATE TABLE IF NOT EXISTS `f1`.`pilotos` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(255) NOT NULL,
    `apellido` VARCHAR(255) NOT NULL,
    `titulos` INT NOT NULL,
    `link` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;";
$insert = "INSERT INTO `pilotos` (
    `nombre`,
    `apellido`,
    `titulos`,
    `link`
) VALUES
    ('Michael', 'Schumacher', 7, 'https://es.wikipedia.org/wiki/Michael_Schumacher'),
    ('Lewis', 'Hamilton', 7, 'https://es.wikipedia.org/wiki/Lewis_Hamilton'),
    ('Juan', 'Fangio', 5, 'https://es.wikipedia.org/wiki/Juan_Manuel_Fangio'),
    ('Sebastian', 'Vettel', 4, 'https://es.wikipedia.org/wiki/Sebastian_Vettel'),
    ('Ayrton', 'Senna', 3, 'https://es.wikipedia.org/wiki/Ayrton_Senna'),
    ('Niki', 'Lauda', 3, 'https://es.wikipedia.org/wiki/Niki_Lauda');";

try {
    mysqli_query($conn, $table);
    mysqli_query($conn, $insert);
} catch (Exception $e) {
    echo $e;
}
