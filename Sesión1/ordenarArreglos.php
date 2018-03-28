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
$numeros= array(1,20,100,10,999,21);
	//Ordena el arreglo de forma alfabetica
 sort($meses);
 	//Ordena el arreglo de forma alfabetica inversa
 rsort($meses);

 sort($numeros);
 rsort($numeros); 
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
		<h1>Ordenando números</h1>
	<ul>
		<?php 
		//Itera sobre cada elemento del arreglo
		foreach ($numeros as $numero) {
			# Ejecutar instrucciones
			echo '<li>'.$numero.'</li>';
		}
		 ?>
	</ul>
</body>
</html>