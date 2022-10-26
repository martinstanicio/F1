<?php
class Controller
{
    public $conn;

    public function openDb()
    {
        $this->conn = mysqli_connect(
            DB::HOST,
            DB::NAME,
            DB::USER,
            DB::PASS,
        );
    }

    public function closeDb()
    {
        mysqli_close($this->conn);
    }

    public function template()
    {
        include "views/template.php";
    }

    public function pageLinks()
    {
        $pages = ["2022", "autos", "contacto", "inicio", "pilotos",];

        $link = (isset($_GET["action"])) ? ($_GET["action"]) : ("inicio");

        $filename = (in_array($link, $pages)) ? $link : "404";

        include "views/" . $filename . ".php";
    }
}
