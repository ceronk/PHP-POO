<?php

class Usuario{

    //casi siempre las constantes se escriben en mayusculas
    // (sin el signo de dolar)
    const URL_COMPLETA = "http://localhost;";
    public $email;
    public $passwo;



    

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of passwo
     */ 
    public function getPasswo()
    {
        return $this->passwo;
    }

    /**
     * Set the value of passwo
     *
     * @return  self
     */ 
    public function setPasswo($passwo)
    {
        $this->passwo = $passwo;

        return $this;
    }
}

$usuario = new Usuario();

//para acceder a la constante
echo $usuario::URL_COMPLETA;


//tambien se puede llamar a la constante invocando directamente la clase

echo Usuario::URL_COMPLETA;

var_dump($usuario);











?>