<?php
$host = '127.0.0.1:3308'
$user= 'root'
$contraseñaDB = '123456'
$dbname = 'test_php'

$conexion = new mysqli($host,$user,$contraseñaDB,$dbname);

if($conexion -> conect_errpr){
    die('Error en la conexion'.$conexion->connect_error)
}

?>