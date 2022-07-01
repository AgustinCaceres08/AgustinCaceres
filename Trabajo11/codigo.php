<?php
    include 'conexion.php';

    $dni = $_POST['dni'];

    $consulta ="SELECT*
                FROM `socio` 
                WHERE DNI = $dni";

    $resultado = mysqli_query($conexion,$consulta);
    $filas = mysqli_fetch_all($resultado,MYSQLI_ASSOC);
    
    echo json_encode($filas);
?>
