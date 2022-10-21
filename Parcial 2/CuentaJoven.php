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

    function mostrar(){
        $info = "
        <h2>Cuenta Joven</h2>
        <hr>
        Se le acreditara una bonificacion del {$this->bonificacion}<br>
        Total mas bonificacion: $2750<br>
        ";

        return $info;
    }

    function esTitularValido(){
        $edad = 20;
        if ($edad >= 18 && $edad <=21) {
            $mayor="Si";
        }else{
            $mayor="No";
        }
        $data = "
        Mayor de edad: $mayor
        ";
        return $mayor;
    }
}

?>