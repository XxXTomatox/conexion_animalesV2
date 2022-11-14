<?php 
    function conexion() {
        $servidor = 'localhost';//127.0.0.1 loopback
        $usuario = 'root'; // por defecto es root
        $password = '';//por defecto no tiene password
        $base = 'animales_conexion';
        $puerto= 3306;

    $conexion = mysqli_connect(
            $servidor,
            $usuario,
            $password,
            $base,
            $puerto
        );
        return $conexion;
    }
?>