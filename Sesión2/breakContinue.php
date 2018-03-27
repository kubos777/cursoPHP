<?php 

$semana= array('Lunes','Martes','Miercoles','Jueves','Viernes','Sábado','Domingo');


//foreach ($semana as $dia) {
//	echo $dia.'<br>';

//	if($dia == 'Viernes'){
//		echo 'Llegó el fin de semana';
		//Corta la ejecución de un ciclo
//		break;
//	}
//}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Break y Continue</title>
 </head>
 <body>
 	<h1>Días de la semana</h1>
	<?php 
	foreach ($semana as $dia) {
	
	if ( $dia =='Domingo'){
		//Se salta esa iteración!
		continue;
	}
	echo $dia.'<br>';
	}
	 ?>

 </body>
 </html>