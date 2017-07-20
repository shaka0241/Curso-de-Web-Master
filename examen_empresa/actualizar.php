<?php

$server="localhost";
$usuario="root";
$contraseña="";
$bd="examen_empresa";

$conexion = mysqli_connect($server,$usuario,$contraseña,$bd)or die("Error en la conexion");

$idregistro=$_POST['idregistro'];
$nombre_empresa=$_POST['nombre_empresa'];
$tipo_empresa=$_POST['tipologia_empresa'];


mysqli_query($conexion,"UPDATE registro set nombre_empresa='$nombre_empresa',tipo_empresa='$tipologia_empresa'where idregistro='$idregistro'");

mysqli_close($conexion);
echo"Datos actualizados";


?>