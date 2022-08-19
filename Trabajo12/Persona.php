<?php
    class Persona{  // clase
        public $nombre = 'Agustin';                 //
        public $apellido = 'Caceres';               // atributos
        public $fecha_nacimiento = '2000-07-08';    //

        public function __construct($nombre,$apellido,$fecha_nacimiento){   // metodo constructor
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->fecha_nacimiento = $fecha_nacimiento;
        }

        public function getNombre(){
            return $this -> nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
    }

    $persona = new Persona('Agustin','Caceres','2000-07-08');
    //echo $persona -> getNombre();

    $persona -> setNombre('Marcos');
    echo $persona -> nombre;
?>
