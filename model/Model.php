<?php

abstract class Model
{
    private $conn;
    private $table;

    public function __construct($table)
    {
        $this->table = $table;

        $mcv = new McvController();
        $mcv->openDb();
        $this->conn = $mcv->conn;
    }

    public function getAll(): array
    {
        $sql = "SELECT * FROM " . $this->table;
        $result = mysqli_query($this->conn, $sql);
        $table = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $table;
    }
}
