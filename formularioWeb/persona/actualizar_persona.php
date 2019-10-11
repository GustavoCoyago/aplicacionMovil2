<?php
include 'conexion.php';
$pk_persona=$_POST['pk_persona'];
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$sexo=$_POST['sexo'];
$pais=$_POST['pais'];
$provincia=$_POST['provincia'];
$direccion=$_POST['direccion'];

$consulta="update persona set nombre='".$nombre."',cedula='".$cedula."',sexo='".$sexo."',pais='".$pais."'
,provincia='".$provincia."',direccion='".$direccion."'where pk_persona='".$pk_persona."'";
mysqli_query($conexion,$consulta)or die (mysqli_error);
mysqli_close($conexion);

?>