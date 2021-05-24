<?php

class Usuario{
    public $nombre,$email;

    public function __construct()
    {
        $this->nombre= "Jalapeño";
        $this->email = "jalapeño@jalapeño.com";

        echo "Instancia del objeto creada<br>";
    }

    //TO SRING PERMITE
    public function __toString()
    {
        return "Hola {$this->nombre}, estas registrado con el email: {$this->email}";
    }


    public function __destruct()
    {
        //sirve para cuando al referencia a la clase/objeto 
        //desaparezca, "destruye" el objeto

        echo "Destruyendo el objeto";
    }


}


$usuario = new Usuario();

echo $usuario;

?>