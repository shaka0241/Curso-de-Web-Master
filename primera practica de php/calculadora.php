<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>

<form action="operacion.php" method="post">
	
	<label for="operaciones">Favor Ingrese su operacion deseada</label>
	<select name="operaciones">
					<option value="1">Suma</option>
					<option value="2">Resta</option>
					<option value="3">Multiplica</option>
					<option value="4">Divide</option>
					<option value="" selected>No ha seleccionado ninguna</option>
				</select>

				<br>
				<br>

				<label for="num1">Ingrese Primer Numero</label>
				<input type="number" name="num1">

				<br>
				<br>

				<label for="num2">Ingrese Segundo numero</label>
				<input type="number" name="num2">

				<br>
				<br>

				<input type="submit" value="Realizar Operacion">


</form>

</body>
</html>