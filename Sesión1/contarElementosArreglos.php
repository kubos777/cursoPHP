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
//Con ayuda de la función count()

echo count($meses).'<br />';

//Para calcularlo de forma "dinámica":

$ultimo_mes = count($meses)-1;
//Podemos pasar variables como índices
echo $meses[$ultimo_mes].'<br />';




 ?>