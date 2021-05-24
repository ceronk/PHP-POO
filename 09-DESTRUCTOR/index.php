<?php

class Usuario{
    public $nombre,$email;

    public function __construct()
    {
        echo "Instancia del objeto creada<br>";
    }

    public function __destruct()
    {
        //sirve para cuando al referencia a la clase/objeto 
        //desaparezca, "destruye" el objeto

        echo "Destruyendo el objeto";
    }


}


$usuario = new Usuario();

for ($i=0; $i <=200 ; $i++) { 
    echo $i."<br>";
}


?>