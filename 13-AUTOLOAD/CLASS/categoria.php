<?php

class Categoria{
    public $nombre, $descripcion;


    public function __construct()
    {
        $this->nombre = "Accion";
        $this->descripcion = "Categoria enfocada a las reviews de videjuegos";
    }
}