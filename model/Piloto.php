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
    }

    public function updateTitulos($id)
    {
        $titulos = $this->getOne($id)["titulos"];

        $sql = "UPDATE `$this->table` SET `titulos`='" . $titulos + 1 . "' WHERE `id` = $id";

        mysqli_query($this->controller->conn, $sql);
    }
}
