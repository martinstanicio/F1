<?php
class Controller
{
    public $conn;

    public function openDb()
    {
        require_once "config/db.php";

        $this->conn = mysqli_connect(
            DB::HOST,
            DB::USER,
            DB::PASS,
            DB::NAME,
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
        $pages = ["2022", "admin", "autos", "contacto", "crearauto", "crearpiloto", "inicio", "login", "logout", "pilotos"];

        $link = (isset($_GET["action"])) ? ($_GET["action"]) : ("inicio");

        $filename = (in_array($link, $pages)) ? $link : "404";

        include "views/" . $filename . ".php";
    }

    public function checkAdmin()
    {
        require_once "config/admin.php";

        if (!isset($_COOKIE["usuario"]) or $_COOKIE["usuario"] != Admin::USUARIO) {
            header("location:index.php?action=login");
        }
    }
}
