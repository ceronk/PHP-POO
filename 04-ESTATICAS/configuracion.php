<?php 

//clase estatica
class Configuracion{

    public static $color; //propiedad
    public static $newsletter;
    public static $entorno;


    public static function getColor(){
        //con self se accede a una propiedad que es estatica

        //el self es equivalente al this pero solo para 
        //atributos estaticos
        return self::$color;
    }

    public static function setColor($color){
        self::$color = $color;
    }

    public static function getNewsletter(){
        return self::$newsletter;
    }

    public static function setNewsletter($newsletter){
        self::$newsletter = $newsletter;
    }

    public static function getEntorno(){
        return self::$entorno;
    }

    public static function setEntorno($entorno){
        self::$entorno = $entorno;
    }



}
