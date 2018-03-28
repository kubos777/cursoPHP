<?php 
//3
if($_POST){

	echo $_POST['nombre'];
}

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formularios</title>
</head>
<body>
	<!--1-->
		<!--<form action="recibe.php"  method="post" >-->
			<!--2-->
			<!--<form action="recibe.php"  method="get" >-->
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  method="post" >
			<input type="text" placeholder="Nombre:" name="nombre">
			<br>
			<label for="hombre">Hombre</label>
			<input type="radio" name="sexo" value="Hombre">
			<label for="mujer">Mujer</label>
			<input type="radio" name="sexo" value="Hombre">
			
			<br>
			<select name="year" id="year">
				<option value="2000">2000</option>
				<option value="2001">2001</option>
				<option value="2002">2002</option>
			</select>
			<br>
			<label for="terminos">Acepto los terminos</label>
			<input type="checkbox" name="terminos" value="acepto">

			

			<br>
			<input type="submit" value="Enviar">


		</form>
</body>
</html>