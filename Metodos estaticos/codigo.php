<?php
    class humano{
        public static $nombre = 'Agustin Cacaeres';

        public static function saludar(){
            echo 'Hola mundo';
        }
    
        public function SaludoPersonalizado(){
            echo 'Hola'.self::$nombre;
        }
    }
   

    $humano = new Humano;
    $humano -> SaludoPersonalizado();
    
?>