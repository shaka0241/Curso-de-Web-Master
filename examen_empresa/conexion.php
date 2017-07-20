<?php
$server="localhost";
$usuario="root";
$contraseña="";
$bd="examen_empresa";
    
    $conexion=mysqli_connect($server, $usuario,$contraseña,$bd) or die ("Error al conectar la base de datos");

?>