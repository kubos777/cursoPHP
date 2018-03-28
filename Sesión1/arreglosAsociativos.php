<?php 
//Los arreglos asociativos, trabajan de forma similar a los diccionarios en 
//python.
$datos_personales= array('Teléfono'=>'1234567890','Edad'=>21,'Apellidos'=>'kubOS Chávez','País'=>'México');

echo 'El télefono de Jorge es: '.$datos_personales['Teléfono'].'<br />';
echo 'La edad de Jorge es: '.$datos_personales['Edad'].'<br />';
echo 'Sus apellidos son: '.$datos_personales['Apellidos'].'<br />';
echo 'Su nacionalidad es: '.$datos_personales['País'].'<br />';

//También se pueden sobreescribir este tipo de arreglos

$datos_personales['País']='Rusa';

echo 'Su nacionalidad es: '.$datos_personales['País'].'<br />';


 ?>