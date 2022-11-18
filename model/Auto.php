<?php
require_once "model/Model.php";

class Auto extends Model
{
    public function __construct()
    {
        parent::__construct("autos");
    }

    public function insertOne(array $data)
    {
        $sql = "INSERT INTO `$this->table` (
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
        ) VALUES (
            '" . $data["marca"] . "',
            '" . $data["nombre"] . "',
            " . $data["temporada"] . ",
            '" . $data["pilotos"] . "',
            '" . $data["motor"] . "',
            " . $data["cilindrada"] . ",
            '" . $data["induccion"] . "',
            " . $data["hp"] . ",
            " . $data["rpm"] . ",
            '" . $data["caja"] . "',
            " . $data["velocidades"] . ",
            '" . $data["neumaticos"] . "',
            " . $data["victorias"] . ",
            " . $data["carreras"] . ",
            '" . $data["img"] . "'
        );";

        mysqli_query($this->controller->conn, $sql);
    }
}
