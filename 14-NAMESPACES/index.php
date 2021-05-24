<?php



require_once 'autoload.php';


// $usr = new Usuario();


// echo $usr->nombre."<br>";
// echo $usr->email;

// $cat = new Categoria();

// echo $cat->nombre;


//ESPACIOS DE NOMBRES Y PAQUETES

class Principal{
    public $usuario, $categoria, $entrada;

    public function __construct()
    {
        $this->usuario = new Usuario();
        new MisClases\Usuario;
    }
}


?>