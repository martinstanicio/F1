<?php

abstract class Model
{
    protected $controller;
    protected $table;

    public function __construct($table)
    {
        $this->controller = new Controller();
        $this->table = $table;
    }

    public function getAll(): array
    {
        $this->controller->openDb();

        $sql = "SELECT * FROM " . $this->table;
        $result = mysqli_query($this->controller->conn, $sql);
        $table = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $this->controller->closeDb();
        return $table;
    }

    abstract public function insertOne(array $data);

    public function deleteOne($id)
    {
        $this->controller->openDb();

        $sql = "DELETE FROM `" . $this->table . "` WHERE `id` = " . $id;
        mysqli_query($this->controller->conn, $sql);

        $this->controller->closeDb();
    }
}
