    <?php
    //POO



class Coche
    {
        // public $color = "rojo";
        // public $marca = "Ferrari";
        // public $modelo = "Aventador";
        // public $velocidad = 300;
        // public $caballaje = 500; //wtf
        // public $plazas = 2;


        //atributos

        //PUBLIC
        //Permite acceder desde cualquier lugar,dentro de la clase actual
        //dentro de clases que hereden esta clase o fuera de la clase
        public $color;

        //PROTECTED
        //Se puede acceder a la clase que los define y desde clases
        // que hereden esta clase
        protected $marca;

        //PRIVATE
        //Unicamente se puede acceder desde esta clase
        private $miauwu;


        public $modelo;
        public $velocidad;
        public $caballaje; //wtf
        public $plazas;

        //constructor es el primer metodo que se define
        public function __construct($color,$marca,$modelo,$velocidad,$caballaje,$plazas)
        {
            //buena practica, setear valores dentro del constructor
            //y no directamente en la declaracion de variables
            $this->color = $color;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->velocidad = $velocidad;
            $this->caballaje = $caballaje;
            $this->plazas = $plazas;
        }

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

        //para setear el tipo de dato a recibir
        //se le puede pasar el objeto de tipo coche para que tome esos
        //datos como referencia
        public function mostrarInformacion(Coche $miObjeto){

            //si la variable recibida es un objeto: ...
            if (is_object($miObjeto)) {
                

            $informacion = "<h1>Información del coche</h1>";
            $informacion.="Color: ".$miObjeto->color."<br>";
            $informacion.="Modelo: ".$miObjeto->marca."<br>";
            $informacion.="Modelo: ".$miObjeto->modelo."<br>";
            $informacion.="Velocidad: ".$miObjeto->velocidad."<br>";
            }
            else{
                $informacion = "Tu dato es este: $miObjeto";
            }

            return $informacion;
        }
    }

    //creando objeto / instanciar la clase

    // $coche = new Coche();
    // //var_dump($coche);

    // //Usando metodos
    // //echo $coche->getVelocidad();

    // $coche->setColor("Amarillo");
    // echo "El color del coche es: " . $coche->getColor() . "<br>";

    // $coche->acelerar();
    // $coche->acelerar();
    // $coche->acelerar();
    // $coche->acelerar();
    // $coche->frenar();
    // echo "Velocidad actual del coche: " . $coche->getVelocidad();


    // $coche2 = new Coche();
    // $coche2->setColor("Verde");
    // $coche2->setModelo("Gallardo");


    // var_dump($coche);
    // var_dump($coche2);

    ?>