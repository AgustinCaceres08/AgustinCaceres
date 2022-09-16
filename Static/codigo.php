<?php
    class date_f {
        public static function getFecha(){
            $anio = date('Y');
            $mes = date('m');
            $dia = date('d');
            
            return $dia.'/'.$mes.'/'.$anio;
        }
    }

    echo date_f::getFecha();
?>