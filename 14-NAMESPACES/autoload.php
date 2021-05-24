<?php

function app_autoloader($class){
    include 'CLASS/'.$class.".php";
}

spl_autoload_register('app_autoloader');
