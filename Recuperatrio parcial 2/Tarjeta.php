<?php
    class Tarjeta{
        public $plan;
        public $entidad;
        public $fecha_vencimiento;

        function __construct($plan,$entidad,$fecha_vencimiento){
            $this->plan = $plan;
            $this->entidad = $entidad;
            $this->fechaVencimiento = $fecha_vencimiento;
        }

        public function setEntidad(string $entidad){
            $this-> entidad = $entidad;
        }
        public function getEntidad(){
            return $this->entidad;
        }

        public function setFechaVencimiento(string $fecha_vencimiento){
            $this-> fechaVencimiento = $fecha_vencimiento;
        }
        public function getFechaVencimiento(){
            return $this->fechaVencimiento;
        }

        public function setPlan(string $plan){
            $this-> plan = $plan;
        }
        public function getPlan(){
            return $this->plan;
        }

        public function mostrar(){
            $info = "
            <h2>Cuenta</h2>
            <hr>
            <b>Tarjeta:</b> {$this->plan}<br>
            <b>Entidad:</b> {$this->entidad}<br>
            <b>Vencimiento:</b> {$this->fechaVencimiento}<br><br>
            ";
        
            return $info;
        }

        public function tipoTarjeta(){ // Quise traer el dato de la edad desde persona y no pude
            if ($edad >= 18) {
                $tipo="Mayor";
            }if ($edad < 18) {
                $tipo="Menor";
            }

            return $tipo;
        }
     }   
?>