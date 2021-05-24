<?php 
require_once 'configuracion.php';


//esta es la forma de acceder a atributos y metodos estaticos
//en vez de crear un objeto
Configuracion::setColor("Azul");
Configuracion::setEntorno("localhost");
Configuracion::setNewsletter(true);


//para mostrar
echo Configuracion::$color . "<br>";
echo Configuracion::$entorno . "<br>";
echo Configuracion::$newsletter . "<br>";

// "al final es lo mismo pero se accede de manera diferente"


//instanciar objeto del que forma


$configuracion = new Configuracion();

//para darle valor
$configuracion::$color = "Rojo" . "<br>";

echo $configuracion::$color;

var_dump($configuracion);







?>