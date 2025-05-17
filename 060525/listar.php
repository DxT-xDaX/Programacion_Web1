<?php
include("./conexion.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar datos</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>Numero</th>
            <th>Nombre Usuario</th>
            <th>Carrera</th>
        </tr>
 <?php
 //Iniciamos php

 //Generar la consulta base a la tabla persona
 $consulta = "SELECT * FROM persona";
 //Enviar la consulta con ayuda de la conexion
 $resultado= $conecta ->query($consulta);
 //$resultado guarda la consulta 
 
 /*
 if($resultado == true){
    echo "bien";
 }else{
    echo "mal";
 }
 */

 while($row = $resultado->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row{'id}'}."</td>";
    echo "<td>".$row{'nombre_usuario}'}."</td>";
    echo "<td>".$row{'carrera}'}."</td>";
    echo "</tr>";
 }
 


 ?>


    </table>
</body>
</html>
