<?php

require_once 'coche.php';


//declarando objeto
$coche = new Coche('Amarillo','Renault','Clio',150,200,5);
$coche1 = new Coche('Rojo','Toyota','Trueno',300,180,4);
var_dump($coche);


echo $coche->mostrarInformacion($coche1);


?>