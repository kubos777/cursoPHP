<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Contacto</title>
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrap">

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="">
		<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" value="">

		<textarea name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>

		<div class="alert error">
			lorem
		</div>
		<div class="alert succes">
			lorem
		</div>
		
		<input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
		</form>


	</div>
</body>
</html>