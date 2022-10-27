<?php
require "model/Model.php";

class Piloto extends Model
{
    public function __construct()
    {
        parent::__construct("pilotos");
    }
}
