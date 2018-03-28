<?php 

//Operador ternario en PHP
//(condicion) ? sisecumple : sinosecumple
//isset nos dice si ha sido seteada, true o false

$edad = 22;
$edad = (isset($edad))  ? $edad : 'El usuario no estableció su edad';

echo 'Edad:   '.$edad;

 ?>