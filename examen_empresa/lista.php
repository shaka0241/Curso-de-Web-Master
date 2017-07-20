<?php
 
$servidor= "localhost";
$usuario= "root";
$clave= "";
$basedatos= "examen_empresa";
 
$conexion=mysql_connect ($servidor, $usuario, $clave) or die ('problema conectando porque :' . mysql_error());
mysql_select_db ($basedatos,$conexion);
 
$cadena="SELECT * FROM registro";
$tabla= mysql_query($cadena, $conexion) or die ("problema con cadena de conexion<br><b>" . mysql_error()."</b>");
 
$registros_encontrados = mysql_num_rows($tabla);
 
echo "Encontrados: ". $registros_encontrados."<br>";
 
while ($registro = mysql_fetch_array($tabla))
{
   
    echo $registro['idregistro']." ";
    echo $registro['nombre_empresa']." ";
    echo $registro['tipo_empresa']." ";
    echo $registro['pais']." ";
    echo $registro['estado']." ";
    echo $registro['ciudad']." ";
    echo $registro['descripcion']."<br>";
    
}
?>