<?php
require_once "model/Model.php";

class Formulario extends Model
{
    public function __construct()
    {
        parent::__construct("formularios");
    }

    public function insertOne(array $data)
    {
        $this->controller->openDb();

        $sql = "INSERT INTO `$this->table` (
            `nombre`,
            `email`,
            `telefono`,
            `genero`,
            `mensaje`
        ) VALUES (
            '" . $data["nombre"] . "',
            '" . $data["email"] . "',
            '" . $data["telefono"] . "',
            '" . $data["genero"] . "',
            '" . $data["mensaje"] . "'
        );";

        mysqli_query($this->controller->conn, $sql);

        $this->controller->closeDb();
    }
}
