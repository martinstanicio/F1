<?php
class McvController
{
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
