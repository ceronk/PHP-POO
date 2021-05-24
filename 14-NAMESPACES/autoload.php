<?php

//por conveniencia se suele utilizar un nombre para la funcion
//autoloader similar a "app_autoloader"
function app_autoloader($class){
    require_once 'CLASS/'.$class.".php";
}


//FUNCION DE PHP

//      spl_autoload_register('funcion de autocarga de clases')

spl_autoload_register('app_autoloader');
