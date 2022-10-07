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
            $Info = "
            <h2>Cuenta</h2>
            <hr>
            Titular: {$this->titular}<br>
            Cantidad: {$this->cantidad}<br><br>
            ";
        
            return $Info;
        }
    
        public function ingresar(){
            if ($cantidad < 0) {
                return 'Monto negativo';
            }
        }
    
        public function retirar(){
    
        }
    }

?>
