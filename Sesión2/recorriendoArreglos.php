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

/*
for($i =0; $i < count($meses);$i++){
	echo $i.$meses[$i].'<br>';
}
*/
$contador = 0;

while ($contador < count($meses)) {
	echo $contador.$meses[$contador].'<br>';
	$contador+=1;
}



?>