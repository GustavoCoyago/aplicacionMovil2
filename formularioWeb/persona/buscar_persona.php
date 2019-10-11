<?php
include 'conexion.php';
$pk_persona=$_GET['pk_persona'];

$consulta="select * from persona where pk_persona='$pk_persona'";
$resultado=$conexion->query($consulta);

while($fila=$resultado->fetch_array()){
    $persona[]=array_map('utf8_encode',$fila);
}
echo json_encode($persona);
$resultado->close();

?>