<?php
include 'conexion.php';
$pk_codigo=$_POST['pk_codigo'];

$consulta="delete from producto where pk_codigo='".$pk_codigo."'";
mysqli_query($conexion,$consulta)or die (mysqli_error);
mysqli_close($conexion);

?>