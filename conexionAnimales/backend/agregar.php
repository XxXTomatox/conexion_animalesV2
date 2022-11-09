<?php 

    include "../conexion.php";
    $conexion= conexion();
    $nombre = $_POST['nombre'];
    $reguion = $_POST['region'];
    $comida =$_POST['comida'];
    $sql = "INSERT INTO t_animales (nombre,region,comida) VALUES ('$nombre','$reguion','$comida')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header('location:../index.php');
    }else {
        echo "No se pudo insertar";
    }
?>