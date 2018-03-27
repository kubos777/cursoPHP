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

$vani = array ('telefono' => 1234567890,'edad' => 22,'pais' => 'Rusia')
 ?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title>For Each</title>
 </head>
 <body>

 	<!--<h1>Meses</h1>-->
 	<ul>
 		<?php 
 		//foreach ($meses as $mes) {
 		//	echo '<li>'.$mes.'</li>';
 		//}

 		foreach ($vani as $dato => $valor) {
 			echo '<li>'.$dato.' : '.$valor.'</li>'; 
 		}

 		 ?>
 	</ul>
 	
 </body>
 </html>