<?php


//TRAITS permiten definir una serie de metodos
//para compartirlo entre diferentes clases (en vez de heredarlo en todas)
//ya que pueda que no posea las mismas caracteristicas
//una clase padre X



//es util cuando no se quiere utilizar la herencia

trait Utilidades
{
    public function mostrarNombre()
    {
        echo "<h1>$this->nombre</h1>";
    }
}


class Coche{
    public $nombre, $marca;
    use Utilidades;
}


class Persona
{
    public $nombre, $apellidos;

    use Utilidades;
}

class VideoJuego
{
    public $nombre, $anio;

    use Utilidades;
}



$co = new Coche();

$persona = new Persona();

$video = new VideoJuego();


$co->nombre = "Ferrari";
$co->mostrarNombre();


$persona->nombre = "Juan";
$persona->mostrarNombre();


$video->nombre = "Mario Bros";
$video->mostrarNombre();
