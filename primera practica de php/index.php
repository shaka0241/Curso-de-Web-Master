<?php

header("Content-type: text/html; charset='utf-8'");
/* echo("<meta charset=\"utf-8\">");

echo ("hola canción"); 


$nombre2="Curso de Web Master";

echo ("<html>
		<head>
		<meta charset='utf-8'>
			<title>Primera clase de php</title>
		</head>
		<body>

		<p> Mi nombre es $nombre </p>
		Esto es una canción

		<p>".$nombre." es el facilitador del ".$nombre2."</p>



		</body>
		</html>");

$nombre="Alberto Rojas";
		$numero = 50;
		$calculo = $numero/2+6;
		echo $calculo/4;

		$logico=false;
		echo "<p> El tipo booleano o logico siguiente tiene el valor de $logico </p>";

		$variablenombre="nombre";
		echo $$variablenombre;

		$miarray = array(1,3,4,5,1);
		print_r($miarray);
		echo "La longitud de mi array es ".sizeof($miarray); 

		$miarray2["dia"]="sabado";
		$miarray2["mes"]="abril";
		$miarray2["año"]="2017";

		var_dump($miarray2);

		unset($miarray2["año"]);
		echo "<br><br>";
		print_r($miarray2);

		$usuario = "Arianna";

		if ($usuario == "Genesis") {
			//Bloque de instrucciones que se ejecutara si es cierto
			echo "<h1>Bienvenida Gene!</h1>";
		}
		else
		{
			//caso contrario, mostramos el siguiente mensaje
			echo "<h1>Lo sentimos $usuario, no tienes acceso al sistema!</h1>";
		}




		$edad = 15;

		if ($edad>=18) {
			echo "<h1> Eres mayor de edad podeis entrar y mirar todos lo que vos querais!! </h1>";
		}
		else 
		{
			echo "<h1> No menol pa tras!!! no teneis el año </h1>";
		}


$usuario = "Alberto";

		if ($usuario == "Genesis" || $usuario == "Arianna") {
			//Bloque de instrucciones que se ejecutara si es cierto
			echo "<h1>Bienvenida $usuario</h1>";
		}
		else
		{
			//caso contrario, mostramos el siguiente mensaje
			echo "<h1>Lo sentimos $usuario, no tienes acceso al sistema!</h1>";
		}


		for ($i=1; $i<=10 ; $i++) { 
			echo "<p>$i</p>";
		}

		echo "<p>fin del for</p>";

		for ($i=10; $i>=1 ; $i--) { 
			echo "<p>$i</p>";
		}

		echo "<p>fin del for</p>";


		$curso = array("Gabo","Daniel","Edwin","Pandita");
		
		for ($i=0; $i<4 ; $i++) { 
					echo "<p>$curso[$i]</p>";
		}


$curso = array("Gabo","Daniel","Edwin","Pandita");

	foreach ($curso as $valor) {
		echo "<article>$valor</article>";
	}


	$i=0;

	while($i<= 100){
				
		echo "$i"."<br>";
		$i=$i+5;
	}*/

$num = -10;

do {
	echo "Mi numero es:".$num."<br>";
	$num++;
} while ( $num <= 10);



?>

