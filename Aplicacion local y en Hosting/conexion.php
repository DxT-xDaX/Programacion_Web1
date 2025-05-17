<?php
$host = 'sql311.infinityfree.com'
$user= 'if0_38704732'
$contraseñaDB = 'ulKiOtA4lBRe'
$dbname = 'if0_38704732_ico'

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