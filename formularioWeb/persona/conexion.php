<?php
    $hostname="localhost";
    $database="formulario_per";
    $username="root";
    $password="";

    $conexion=new mysqli($hostname,$username,$password,$database);
    if($conexion->connect_errno){
        echo "Error al conectarse a la BD";
    }

?>