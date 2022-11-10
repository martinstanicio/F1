<?php
require_once "model/Model.php";

class Piloto extends Model
{
    public function __construct()
    {
        parent::__construct("pilotos");
    }
}
