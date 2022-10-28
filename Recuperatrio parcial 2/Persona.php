<?php
    class Persona{
        public $nombre;
        public $edad;
        public $dni;
        public $cuit;

        function __construct($nombre,$edad,$dni,$cuit) {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->dni = $dni;
            $this->cuit = $cuit;
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

        public function setCuit(string $cuit){
            $this-> cuit = $cuit;
        }
        public function getCuit(){
            return $this->cuit;
        }
    
        function mostrar(){
            $info = "
            <h2>Persona</h2>
            <hr>
            <b>Nombre:</b> {$this->nombre}<br>
            <b>DNI:</b> {$this->dni}<br>
            <b>Edad:</b> {$this->edad}<br>
            <b>Cuit:</b> {$this->cuit}<br><br>
            ";
    
            return $info;
        }

        public function esMayorDeEdad(){
            if ($edad  > 18) {
                $mayor = "si";
            }else{
                $mayor = "No";
            }

            return $mayor;
        }
    }

?>
