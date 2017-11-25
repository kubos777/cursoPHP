<?php 
	$meses= array(
		'Enero',
		'Febrero',
		'Marzo',
		'Abril',
		'Mayo',
		'Junio',
		'Julio',
		'Agosto',
		'Septiembre',
		'Octubre',
		'Noviembre',
		'Diciembre'
		);
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Meses del año</title>
</head>
<body>
	<h1>Meses del año</h1>
	<ul>
		<?php 
		//Itera sobre cada elemento del arreglo
		foreach ($meses as $mes) {
			# Ejecutar instrucciones
			echo '<li>'.$mes.'</li>';
		}
		 ?>
	</ul>
</body>
</html>