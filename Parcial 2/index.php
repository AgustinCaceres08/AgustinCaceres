<?php
    require_once('Persona.php');
    require_once('Cuenta.php');
    require_once('CuentaJoven.php');

    $persona = new Persona('Agustin',22,42801537);
    echo $persona->mostrar();

    $cuenta = new Cuenta('Agustin',1000);
    echo $cuenta-> mostrar();
    echo $cuenta-> ingresar();
    echo $cuenta-> retirar();

    $cuentaJoven = new CuentaJoven('10%');
    if ($cuentaJoven->esTitularValido() == "Si") {
        echo $cuentaJoven-> mostrar();
    }else{
        echo "
        <h2>Cuenta Joven</h2>
        <hr>
        Sin bonificacion <br>";
    }
    echo $cuentaJoven-> esTitularValido();
?>