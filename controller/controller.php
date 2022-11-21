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
        $pages = [
            "admin",
            "autos",
            "borrar",
            "campeonato",
            "confirmacion",
            "contacto",
            "crear",
            "crearauto",
            "crearpiloto",
            "inicio",
            "login",
            "logout",
            "modificar",
            "pilotos",
        ];

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

    public function login()
    {
        require_once "config/admin.php";

        $usuario = $_POST["usuario"];
        $contrasenia = $_POST["contrasenia"];

        if ($usuario == Admin::USUARIO and $contrasenia == Admin::CONTRASENIA) {
            setcookie("usuario", "admin");
            header("location:index.php?action=admin");
        }
    }

    public function logout()
    {
        if (isset($_COOKIE["usuario"])) {
            setcookie("usuario", null, time() - 3600);
            header("location:index.php?action=login");
        } else {
            header("location:index.php?action=404");
        }
    }
}
