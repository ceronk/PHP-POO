<?php



require_once 'autoload.php';

use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;

//se puede asignar alias a las clases de namespaces que se repiten
//pero alojados en distintos paquetes :0

use PanelAdministrador\Usuario as UsuarioAdmin;


class Principal
{
    public $usuario, $categoria, $entrada;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }


    public function getUsuario()
    {
        return $this->usuario;
    }


    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }


    public function getCategoria()
    {
        return $this->categoria;
    }


    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }


    public function getEntrada()
    {
        return $this->entrada;
    }


    public function setEntrada($entrada)
    {
        $this->entrada = $entrada;

        return $this;
    }


    public function informacion(){
        //constantes
        echo "<br>El nombre de la clase es: " . __CLASS__;
        echo "<br>El nombre del metodo es: " . __METHOD__;
    }
}

//objeto principal
$principal = new Principal();

$principal->informacion();

if (method_exists($principal, 'setEntrada')){
    echo '<br>El método existe';
}
else{
    echo '<br>El método no existe';
}

//objeto otro paquete
$usr = new UsuarioAdmin();
//var_dump($usr);

//COMPROBAR SI EXISTE UNA CLASE

$clase = @class_exists('MisClases\Usuario');

//Si no existe muestra un Warning y continua la ejecucion

//Para ocultar los warnings se utiliza "@" antes de la clase

//a ocultarle los warnings (para una mejor presentacion)

if ($clase) {
    echo "<h1>La clase SI existe</h1>";
} else {
    echo "<h1>La clase NO existe</h1>";
}
