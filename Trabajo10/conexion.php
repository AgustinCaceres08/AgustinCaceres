<?php
    $usuario = 'root';
    $pass = 'clave';
    $server = 'LocalHost';
    $db = 'bdd';
    $conexion = new mysqli($server,$usuario,$pass,$db);
    
    if (mysqli_error($conexion)) {
        echo('Conexion establecida <br>');
        $consulta = "SELECT*FROM Personas";
        $resultado = mysqli_query($conexion,$consulta);
        $fila = mysqli_fetch_row($resultado); 
        var_dump($fila); echo '<br>';
    }else{
        echo('Error en la conexion con la Base de Datos');
    }
?>
