<?php

//Herencia: la posibilidad de compartir atributos y metodos entre clases

class Persona
{

    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;


    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }


    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }


    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function hablar()
    {
    }

    public function caminar()
    {
        return "Estoy caminando";
    }
}


class Informatico extends Persona
{

    public $lenguajes;
    public $experienciaProgramador;

    public function __construct()
    {
        $this->lenguajes = "HTML,CSS,PHP,JS";
        $this->experienciaProgramador = 10;
    }


    public function sabeLenguajes($lenguajes)
    {
        $this->lenguajes = $lenguajes;

        return $this->lenguajes;
    }

    public function programar()
    {
        return "soy programador lol";
    }

    public function repararOrdenador()
    {
        return "reparar ordenador";
    }

    public function ofimatica()
    {
        return "-escribir en word-";
    }
}

class TecnicoRedes extends Informatico
{

    public $auditarRedes;
    public $experienciaEnRedes;

    //al agregar un constructor en la clase hija (TecnicoRedes)
    //deja de heredar los datos del constructor padre(informatico)
    public function __construct()
    {

        //para heredar los datos del constructor de la clase padre
        //se utiliza la palabra reservada parent
        parent::__construct(); //para acceder de manera estatica a un metodo
        $this->auditarRedes = "experto";
        $this->experienciaEnRedes = 5;
    }

    public function auditoria()
    {
        return "Estoy auditando una red";
    }
}
