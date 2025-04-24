<?php
include('./conexion.php');
$nombreUsuario=$_GET['nombreUsuario'];
$carreraUsuario=$_GET['usuarioCarrera'];
$no_cuenta=$_GET['no_cuenta'];
$telefono=$_GET['telefono'];
$direccion=$_GET['direccion'];
$correo=$_GET['correo'];
$contraseña=$_GET['contraseña'];

echo $nombreUsuario . $carreraUsuario . $no_cuenta . $telefono . $direccion . $correo . $contraseña;
$insertarConsulta="INSERT INTO persona (nombre_usuario,carrera,no_cuenta,direccion,telefono,email)VALUES($nombreUsuario,$usuarioCarrera,$no_cuenta,$telefono,$direccion,$correo,$contraseña)";

?>