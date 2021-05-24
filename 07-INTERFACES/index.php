<?php

interface Ordenador{
    public function encender();
    public function apagar();   
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

//para usar  interfaces se usa "implements" en la clase hija
class IMac implements Ordenador{
    public $modelo;

 
    public function getModelo()
    {
        return $this->modelo;
    }
 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }
    //ademas, agregar por obligacion las funciones creadas en la clase padre

    public function encender(){

    }
    public function apagar(){
        
    }
    public function reiniciar(){
        
    }
    public function desfragmentar()
    {
        
    }
        
    
    public function detectarUSB(){
        
    }
}


$Maquintoch = new IMac();

$Maquintoch->setModelo("Macbook PRO 2019");


echo $Maquintoch->getModelo();

var_dump($Maquintoch);
