<?php
require "controller/controller.php";

$controller = new Controller();
$controller->openDb();
$conn = $controller->conn;
$sql = "INSERT INTO `pilotos`
    (`name`, `surname`, `titles`, `link`)
VALUES
    ('Michael', 'Schumacher', 7, 'https://es.wikipedia.org/wiki/Michael_Schumacher'),
    ('Lewis', 'Hamilton', 7, 'https://es.wikipedia.org/wiki/Lewis_Hamilton'),
    ('Juan', 'Fangio', 5, 'https://es.wikipedia.org/wiki/Juan_Manuel_Fangio'),
    ('Sebastian', 'Vettel', 4, 'https://es.wikipedia.org/wiki/Sebastian_Vettel'),
    ('Ayrton', 'Senna', 3, 'https://es.wikipedia.org/wiki/Ayrton_Senna'),
    ('Niki', 'Lauda', 3, 'https://es.wikipedia.org/wiki/Niki_Lauda');";
echo $sql . "<br>";
$result = mysqli_query($conn, $sql);
echo $result;

$controller->closeDb();
