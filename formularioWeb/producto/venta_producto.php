<?php
include 'conexion.php';
$pk_codigo=$_POST['pk_codigo'];
$stock=$_POST['stock'];

$consulta="update producto set stock='".$stock."'where pk_codigo='".$pk_codigo."'";
mysqli_query($conexion,$consulta)or die (mysqli_error);
mysqli_close($conexion);

?>