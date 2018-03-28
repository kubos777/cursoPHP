<?php 

//$numero =10;
//Las funciones no pueden acceder a las variables de fuera de la función y afuera no se puede acceder a las variables de la función.

function mostrarNumero(){
	$numero=10;
	//echo $numero;
	return $numero;
}

echo mostrarNumero();

//echo $numero;

 ?>