<?php
include 'conexion.php';
$pk_codigo=$_POST['pk_codigo'];
$nombree=$_POST['nombre'];
$categoria=$_POST['categoria'];
$stock=$_POST['stock'];
$precioC=$_POST['precioCosto'];
$precioV=$_POST['precioVenta'];
$utilidad=$_POST['utilidad'];

$consulta="update producto set nombre='".$nombree."',categoria='".$categoria."',stock='".$stock."',precioCosto='".$precioC."'
,precioVenta='".$precioV."',utilidad='".$utilidad."'where pk_codigo='".$pk_codigo."'";
mysqli_query($conexion,$consulta)or die (mysqli_error);
mysqli_close($conexion);

?>