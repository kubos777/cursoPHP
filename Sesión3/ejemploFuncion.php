<?php 

function calculaAreaTriangulo($base,$altura){

	$area = ($base * $altura) / 2;

	return $area;
}

$area=calculaAreaTriangulo(100,50);

echo 'El área del triángulo es: '.$area.'     mts cuadrados';



 ?>