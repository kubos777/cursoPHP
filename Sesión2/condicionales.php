<?php 

//Sintaxis
//if(condicion){
//Instrucciones
//}
/* Operadores de comparación

== Igual que
< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente de
! Negación
*/

/* Operadores lógicos

&& and Una y la otra deben cumplirse
|| or Con una que se cumpla
^ xor Una y solo una de las dos

*/
$edad = 17;
$nombre = 'kubos'
if($edad >= 18 && $nombre =='kubos'){
	echo '<h1>Pasale papu!</h1>';
}
if($edad< 18 or $nombre != 'kubos'){
	echo '<h1>Estas chavo, chavo!</h1>';
}

?>
