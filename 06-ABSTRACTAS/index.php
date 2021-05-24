<?php

//para definir una clase abstracta se escribe abstract al inicio
//de la clase
abstract class Ordenador
{

    //se definen las propiedades y metodos abstractos

    public $encendido;

    //solamente se definen las funciones


    // public function encender(){         <----    metodo normal
    //     $this->encender = true;
    // }

    abstract function encender(); //metodo abstracto

    public function apagar()
    {
        $this->encender = false;
    }
}




class PcAsus extends Ordenador
{ //se hereda de Ordenador
    public $software;

    public function arrancarSoftware()
    {
        $this->software = true;
    }

    public function encender()
    { //con abstraccion se tiene que 
        //crear por obligacion un metodo 
        //abstracto que se definio en la clase padre

        $this->encender = true;
    }
}



$ordenador = new PcAsus();
$ordenador->arrancarSoftware();
$ordenador->encender();
$ordenador->apagar();

var_dump($ordenador);