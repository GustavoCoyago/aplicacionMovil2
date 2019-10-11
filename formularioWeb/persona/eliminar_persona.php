<?php
include 'conexion.php';

$pk_persona=$_POST['pk_persona'];

$consulta="delete from persona where pk_persona='".$pk_persona."'";
mysqli_query($conexion,$consulta)or die (mysqli_error);
mysqli_close($conexion);

?>