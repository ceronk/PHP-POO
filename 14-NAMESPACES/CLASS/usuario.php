<?php

//namespace nombrepaquete
namespace MisClases;


class Usuario{
    public $nombre, $email;


    public function __construct()
    {
        $this->nombre = "Jalapeño";
        $this->email = "jalapeño@jalapeño";
    }
}