<?php 

	$num1 = intval($_POST['num1']);
	$num2 = intval($_POST['num2']);
	$op = intval($_POST['operaciones']);
	
	
	switch ($op) {
	 	case '1':
	 		$suma = $num1 + $num2;
	 		echo "La suma es un total de:" . $suma;
	 		break;

	 	case '2':
	 			$resta = $num1 - $num2;
	 			echo "La resta es un total de:" . $resta;
	 			break;

	 	case '3':
	 		$multi = $num1 * $num2;
	 		echo "La multiplicacion es un total de:" . $multi;
	 		break;

	 	case '4':
			if($num2 == 0){
                echo("<p>Introduce un numero diferente a cero<p>
<h1>Recuerda! un numero entre cero es infinito y mas alla :)</h1>");
            }else {
	 		$div = $num1 / $num2;
	 		echo "La division es un total de:" . $div;}
	 		break;
	 	
	 	default:
	 		echo "Por favor seleccione una operacion";
	 		break;	
	 		}	
 ?>
