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
$insertarConsulta="INSERT INTO Usuario(nombre_usuario,carrera,no_cuenta,direccion,telefono,email,contaseña)VALUES($nombreUsuario,$usuarioCarrera,$no_cuenta,$direccion,$telefono,$correo,$contraseña)";

if($conexion -> query($insertarConsulta)=== TRUE){
header('Location:../create.html');
  exit();
}else{
echo "<h1> Error de consulta </h1>";
}
  
?>