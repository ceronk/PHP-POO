<?php



//CALL se ejecuta cuando se llama un metodo que todavia no existe

class Persona
{
    private $nombre, $edad, $ciudad;


    public function __construct($nombre, $edad, $ciudad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    //Este metodo se llama cuando se invoca un metodo que no existe
    public function __call($name, $arguments)
    {
        // return "No existe el metodo";

        $prefix_Metodo = substr($name, 0, 3);

        if ($prefix_Metodo == 'get') {
            $nombre_Metodo = substr(strtolower($name), 3);

            if (!isset($this->$nombre_Metodo)) {
                return "El metodo que estas invocando no existe";
            }

            return $this->$nombre_Metodo;
        } else {
            return "El metodo que estas invocando no existe";
        }
    }
}


$persona = new Persona("Paco", 66, "Madrid");

echo $persona->getNombre();
echo $persona->getEdad();
echo $persona->getCiudad();

echo $persona->getMiau();
