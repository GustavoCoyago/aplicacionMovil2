<?php
include 'conexion.php';
$pk_codigo=$_POST['pk_codigo'];
$nombree=$_POST['nombre'];
$categoria=$_POST['categoria'];
$stock=$_POST['stock'];
$precioC=$_POST['precioCosto'];
$precioV=$_POST['precioVenta'];
$utilidad=$_POST['utilidad'];

$consulta="insert into producto values('".$pk_codigo."',
'".$nombree."','".$categoria."','".$stock."','".$precioC."','".$precioV."','".$utilidad."')";
mysqli_query($conexion,$consulta)or die (mysqli_error);
mysqli_close($conexion);

?>