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
    `img` VARCHAR(255) NOT NULL DEFAULT 'https://via.placeholder.com/400x300',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;";
$insert = "INSERT INTO `pilotos` (
    `nombre`,
    `apellido`,
    `titulos`,
    `link`,
    `img`
) VALUES
    ('Michael', 'Schumacher', 7, 'https://es.wikipedia.org/wiki/Michael_Schumacher', 'https://images.hola.com/imagenes/actualidad/20190103135170/michael-schumacher-50-cumpleanos-gt/0-633-684/michael-schumacher-t.jpg'),
    ('Lewis', 'Hamilton', 7, 'https://es.wikipedia.org/wiki/Lewis_Hamilton', 'https://upload.wikimedia.org/wikipedia/commons/3/36/Lewis_Hamilton_Silverstone_2018.jpg'),
    ('Juan', 'Fangio', 5, 'https://es.wikipedia.org/wiki/Juan_Manuel_Fangio', 'https://i0.wp.com/www.automundo.com.ar/wp-content/uploads/2022/02/Juan-Manuel-Fangio-Ferrari-1956-4.jpg?resize=708%2C472&ssl=1'),
    ('Sebastian', 'Vettel', 4, 'https://es.wikipedia.org/wiki/Sebastian_Vettel', 'https://upload.wikimedia.org/wikipedia/commons/0/0b/Sebastian_Vettel_2011_Sebastian_Vettel_in_Yokohama_Infiniti_event.jpg'),
    ('Ayrton', 'Senna', 3, 'https://es.wikipedia.org/wiki/Ayrton_Senna', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gettyimages-600969539-1584256651.jpg'),
    ('Niki', 'Lauda', 3, 'https://es.wikipedia.org/wiki/Niki_Lauda', 'https://i0.wp.com/automundo.com.ar/wp-content/uploads/2019/05/Niki-Lauda-1.jpg?fit=1200%2C800&ssl=1'),
    ('Max', 'Verstappen', 2, 'https://es.wikipedia.org/wiki/Max_Verstappen', 'https://upload.wikimedia.org/wikipedia/commons/4/43/%C3%96AMTC_Welt_des_Motorsports_2016-72.jpg'),
    ('Fernando', 'Alonso', 2, 'https://es.wikipedia.org/wiki/Fernando_Alonso', 'https://upload.wikimedia.org/wikipedia/commons/3/34/2019_Indianapolis_500%2C_Fernando_Alonso_-_03.jpg'),
    ('Kimi', 'Räikkönen', 1, 'https://es.wikipedia.org/wiki/Kimi_R%C3%A4ikk%C3%B6nen', 'https://upload.wikimedia.org/wikipedia/commons/4/46/2014_Formula_1_Gulf_Air_Bahrain_Grand_Prix_%2813712837654%29.jpg');";

try {
    mysqli_query($conn, $table);
    mysqli_query($conn, $insert);
} catch (Exception $e) {
    echo $e;
}
