<?php 
/* Estructura
switch (variable) {
	case 'value':
		# code...
		break;
	
	default:
		# code...
		break;
}
*/

$mes = 'Agosto';

switch ($mes) {
	case 'Diciembre':
		echo 'Es Diciembre!';
		break;
	case 'Enero':
		echo 'Es enero, el mejor mes!';
		break;
	default:
		echo 'Mes sin importancia';
		break;
}

 ?>