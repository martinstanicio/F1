<?php
require_once "model/Model.php";

class Piloto extends Model
{
    public function __construct()
    {
        parent::__construct("pilotos");
    }

    public function insertOne(array $data)
    {
        $this->controller->openDb();

        $sql = "INSERT INTO `$this->table` (
            `nombre`,
            `apellido`,
            `titulos`,
            `link`
        ) VALUES (
            '" . $data["nombre"] . "',
            '" . $data["apellido"] . "',
            " . $data["titulos"] . ",
            '" . $data["link"] . "'
        );";

        mysqli_query($this->controller->conn, $sql);

        $this->controller->closeDb();
    }
}
