<?php
include 'conexion.php';
$pk_persona=$_POST['pk_persona'];
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$sexo=$_POST['sexo'];
$pais=$_POST['pais'];
$provincia=$_POST['provincia'];
$direccion=$_POST['direccion'];

$consulta="insert into persona values('".$pk_persona."',
'".$nombre."','".$cedula."','".$sexo."','".$pais."','".$provincia."','".$direccion."')";
mysqli_query($conexion,$consulta)or die (mysqli_error);
mysqli_close($conexion);

?>