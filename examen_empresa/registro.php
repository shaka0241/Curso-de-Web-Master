<?php

include_once('conexion.php');

$nombre_empresa=$_POST['nombre_empresa'];
$tipologia_empresa=$_POST['tipologia_empresa'];
$pais=$_POST['pais'];
$estado=$_POST['estado'];
$ciudad=$_POST['ciudad'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$descripcion=$_POST['descripcion'];

$insertar = "INSERT INTO registro(nombre_empresa,tipo_empresa,pais,estado,ciudad,user,password,descripcion)VALUES('$nombre_empresa','$tipologia_empresa','$pais','$estado','$ciudad','$usuario','$password','$descripcion')";

$resultado = mysqli_query($conexion,$insertar) or die ("Error al ingresar datos");

mysqli_close($conexion);
echo"Datos ingresados correctamente"



?>