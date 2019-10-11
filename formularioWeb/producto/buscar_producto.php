<?php
include 'conexion.php';
$pk_codigo=$_GET['pk_codigo'];

$consulta="select * from producto where pk_codigo='$pk_codigo'";
$resultado=$conexion->query($consulta);

while($fila=$resultado->fetch_array()){
    $producto[]=array_map('utf8_encode',$fila);
}
echo json_encode($producto);
$resultado->close();

?>