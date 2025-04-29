<?php
$host = '127.0.0.1:3308'
$user= 'root'
$contraseñaDB = '123456'
$dbname = 'test_php'

$conexion = new mysqli($host,$user,$contraseñaDB,$dbname);

if($conexion -> conect_error){
    die('Error en la conexion'.$conexion->connect_error)
}

if($conexion -> conect_error){
    echo "<h1> Sin conexion a la DB </h1>";
}
else($conexion -> conect_error){
    echo "<h1> Conexion realizada </h1>";
}

?>
