<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //POO
    class Coche
    {

        //atributos
        public $color = "rojo";
        public $marca = "Ferrari";
        public $modelo = "Aventador";
        public $velocidad = 300;
        public $caballaje = 500; //wtf
        public $plazas = 2;

        //metodos
        public function getColor()
        {
            //this busca en esta clase la propiedad X
            return $this->color;
        }

        public function setColor($color)
        {
            $this->color = $color;
        }
        public function setModelo($modelo)
        {
            $this->modelo = $modelo;
        }

        public function acelerar()
        {
            $this->velocidad++;
        }

        public function frenar()
        {
            $this->velocidad--;
        }

        public function getVelocidad()
        {
            return $this->velocidad;
        }
    }

    //creando objeto / instanciar la clase

    $coche = new Coche();
    //var_dump($coche);

    //Usando metodos
    //echo $coche->getVelocidad();

    $coche->setColor("Amarillo");
    echo "El color del coche es: " . $coche->getColor() . "<br>";

    $coche->acelerar();
    $coche->acelerar();
    $coche->acelerar();
    $coche->acelerar();
    $coche->frenar();
    echo "Velocidad actual del coche: " . $coche->getVelocidad();


    $coche2 = new Coche();
    $coche2->setColor("Verde");
    $coche2->setModelo("Gallardo");


    var_dump($coche);
    var_dump($coche2);

    ?>
</body>

</html>