<?php
    //$aux = $_GET['nombre'];
    //echo $aux;

    $aux = $_POST["nombre"];
    echo $aux;

    $aux2 = $_POST["apellido"];
    echo $aux2;

    $aux3 = $_POST["genero"];
    echo $aux3;

    if (isset($_POST["color"])) {
        foreach ($_POST["color"] as $key => $value) {
            
        }
    }
?>
