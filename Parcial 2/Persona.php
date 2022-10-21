<?php
    class Persona{
        public $nombre;
        public $edad;
        public $dni;

        function __construct($nombre,$edad,$dni) {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->dni = $dni;
        }
    
        public function setNombre(string $nombre){
            $this-> nombre = $nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }
    
        
        public function setEdad(int $edad){
            $this-> edad = $edad;
        }
        public function getEdad(){
            return $this->edad;
        }
        
        
        public function setDNI(int $dni){
            $this-> dni = $dni;
        }
        public function getDNI(){
            return $this->dni;
        }
    
        function mostrar(){
            $info = "
            <h2>Persona</h2>
            <hr>
            Nombre: {$this->nombre}<br>
            Edad: {$this->edad}<br>
            DNI: {$this->dni}<br><br>
            ";
    
            return $info;
        }

        public function esMayorDeEdad(){
            if ($edad  > 18) {
                $mayor = true;
            }else{
                $mayor = false;
            }
        }
    }

?>
