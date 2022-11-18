<?php

abstract class Model
{
    protected $controller;
    protected $table;

    public function __construct($table)
    {
        $this->controller = new Controller();
        $this->table = $table;

        $this->controller->openDb();
    }

    public function __destruct()
    {
        $this->controller->closeDb();
    }

    public function getAll(): array
    {
        $sql = "SELECT * FROM " . $this->table;
        $result = mysqli_query($this->controller->conn, $sql);
        $table = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $table;
    }

    public function getOne($id)
    {
        $sql = "SELECT * FROM $this->table WHERE `id` = $id";;
        $result = mysqli_query($this->controller->conn, $sql);
        $items = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $items[0];
    }

    abstract public function insertOne(array $data);

    public function deleteOne($id)
    {
        $sql = "DELETE FROM `" . $this->table . "` WHERE `id` = " . $id;
        mysqli_query($this->controller->conn, $sql);
    }
}
