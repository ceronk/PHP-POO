<?php

// require_once 'CLASS/usuario.php';
// require_once 'CLASS/categoria.php';
// require_once 'CLASS/entrada.php';

require_once 'autoload.php'; //solo se incluye una vez


$usr = new Usuario();


echo $usr->nombre."<br>";
echo $usr->email;

$cat = new Categoria();

echo $cat->nombre;


?>