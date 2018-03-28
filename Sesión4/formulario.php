<?php 

$errores= '';
if(isset($_POST['submit'])){

	$nombre = $_POST['nombre'];

	$correo = $_POST['correo'];

	if (!empty($nombre)) {
		//$nombre = trim($nombre);
		//$nombre = htmlspecialchars($nombre);
		//$nombre = stripcslashes($nombre);
		
		$nombre =filter_var($nombre,FILTER_SANITIZE_STRING);
		echo 'Tu nombre es: '.$nombre.'<br>';
	}else{
		$errores.='Por favor agrega un nombre papu!'.'<br>';
	}


	if (!empty($correo)) {
		$correo=filter_var($correo,FILTER_SANITIZE_EMAIL);

		if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
			$errores .= 'Po favo ingresa un correo valido! <br>';
		}else{
				echo 'Tu correo es: '.$correo;
			
		}

	}else {
		$errores.= 'Por favor agrega un correo';
	}
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.error{
			color: red;
		}
	</style>
</head>
<body>
	
	<!--<form action="validaEnvio.php" method="post">-->
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="text" name="nombre" placeholder="nombre">
		<input type="text" name="correo" placeholder="correo">

		<?php if(!empty($errores)): ?>
		<div class="error"><?php echo $errores; ?></div>
		<?php endif; ?>
	
		<input type="submit" name="submit">


	</form>
</body>
</html>