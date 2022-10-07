<?php
    require_once('Persona.php');
    require_once('Cuenta.php');
    require_once('CuentaJoven.php');

    $persona = new Persona('Agustin',22,42801537);
    echo $persona->mostrar();

    $cuenta = new Cuenta('Agustin',100);
    echo $cuenta-> mostrar();

    $cuentaJoven = new CuentaJoven();
    echo $cuentaJoven-> mostrar();
?>