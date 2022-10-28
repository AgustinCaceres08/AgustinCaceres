<?php
    require_once('Persona.php');
    require_once('Tarjeta.php');

    $persona = new Persona('Agustin Caceres',24,42801537,'20-42801537-2');
    echo $persona->mostrar();

    $tarjeta = new Tarjeta('Junior','BNA','07/2028');
    if ($tarjeta->tipoTarjeta() != "Menor"){
        echo $tarjeta->mostrar();
    }else{
        echo "
        <h2>Cuenta</h2>
        <hr>
        <b>Usted es menor de edad</b>
        ";
    }
?>