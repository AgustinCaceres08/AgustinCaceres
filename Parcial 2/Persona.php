<?php
    class Persona{
        public $nombre;
        public $edad;
        public $DNI;

        function __construct($nombre,$edad,$DNI) {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->DNI = $DNI;
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
        
        
        public function setDNI(int $DNI){
            $this-> DNI = $DNI;
        }
        public function getDNI(){
            return $this->DNI;
        }
    
        function mostrar(){
            $Info = "
            <h2>Persona</h2>
            <hr>
            Nombre: {$this->nombre}<br>
            Edad: {$this->edad}<br>
            DNI: {$this->DNI}<br><br>
            ";
    
            return $Info;
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
