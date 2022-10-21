<?php
    class Cuenta{
        public $titular;
        public $cantidad;

        function __construct($titular,$cantidad) {
            $this->titular = $titular;
            $this->cantidad = $cantidad;
        }
    
        public function setTitular(string $titular){
            $this-> titular = $titular;
        }
        public function getTitular(){
            return $this->titular;
        }
    
        public function setCantidad(float $cantidad){
            $this-> cantidad = $cantidad;
        }
        public function getCantidad(){
            return $this->cantidad;
        }
    
        public function mostrar(){
            $info = "
            <h2>Cuenta</h2>
            <hr>
            Titular: {$this->titular}<br>
            Cantidad: {$this->cantidad}<br><br>
            ";
        
            return $info;
        }
    
        public function ingresar(){
           $ingresa = 2000;
           $data = "Ingreso: $ingresa<br>";
           return $data;
        }
    
        public function retirar(){
            $retira = 500;
            $data2 = "
            Retiro: $retira <br>
            --------------------<br>
            Total: $2500
            ";

           return $data2;
        }

    }

?>
