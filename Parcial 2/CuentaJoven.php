<?php
    class CuentaJoven extends Cuenta{
        public $bonificacion;
        
     function __construct($bonificacion) {
        $this->bonificacion = $bonificacion;
    }

    public function setBonificacion($bonificacion){
        $this-> bonificacion = $bonificacion;
    }
    public function getBonificacion(){
        return $this->bonificacion;
    }

    function esTitularValido(){
        $edad = 18;
        if ($edad >= 18) {
            $mayor=true;
        }else{
            $mayor=false;
        }
    }

    function mostrar(){
        $Info = "
        <h2>Cuenta Joven</h2>
        <hr>
        Bonificacion: {$this->bonificacion}<br>
        ";

        return $info;
    }
}

?>