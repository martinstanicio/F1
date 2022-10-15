<?php
class McvController
{
    public function template()
    {
        include "views/template.php";
    }

    public function pageLinks()
    {
        if (isset($_GET["action"])) {
            $links = $_GET["action"];
        } else {
            $links = "inicio";
        }

        if ($links == "2022" || $links == "autos" || $links == "contacto" || $links == "inicio" || $links == "pilotos") {
            $module = "views/" . $links . ".php";
        } else {
            $module = "views/inicio.php";
        }

        include $module;
    }
}