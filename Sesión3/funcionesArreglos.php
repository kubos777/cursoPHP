<?php 

$amigo = array('telefono'=>123556,'edad'=>22,'pais'=>'México');

//extract Extrae los elementos de un arreglo como variables
/*extract($amigo);

echo $telefono.'<br>';
echo $edad.'<br>';
echo $pais.'<br>';
*/
$semana= array('Lunes','Martes','Miercoles','Jueves','Viernes','Sábado','Domingo');

//array_pop extrae el último elemento de un arreglo y lo elimina

//$ultimo_dia = array_pop($semana);

//foreach ($semana as $dia) {
//	echo $dia.'<br>';
//}
//echo $ultimo_dia;

//join separa elementos por algún caracter
//echo join(' - ',$semana);
 
//echo count($semana);

//sort($semana);
//rsort($semana);
$semana_reverse = array_reverse($semana);
echo join(', ',$semana_reverse);



//http://php.net/manual/es/ref.array.php
 ?>