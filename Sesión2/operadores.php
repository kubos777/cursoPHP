<?php  

/* 

········Operadores Aritméticos:

+	Suma
-	Resta
*	Multiplicación
/	División
% moudulo


$numero = 10;
$numero2 = 50;

$resultado = ($numero + $numero2);
$resultado2 = ($numero - $numero2);
$resultado3 = ($numero * $numero2);
$resultado4 = ($numero / $numero2);
$resultado5 = $numero%2;

echo 'El resulltado es '.$resultado.'<br>';
echo 'El resulltado es '.$resultado2.'<br>';
echo 'El resulltado es '.$resultado3.'<br>';
echo 'El resulltado es '.$resultado4.'<br>';
echo 'El resulltado es '.$resultado5.'<br>';
*/


/*
·······Operadores de Asignación:

=
+=
-=
*=
/=


$numero = 10;
$numero2 =20;

echo 'Valor antes de la asignación '.$numero.'<br>';
#$numero = $numero +7

$numero += 7;

echo 'Valor despues de la asignación '.$numero.'<br>';


*/


/*
·······Operadores de Comparación:

==
===
!=, <>
!==
>
<
>=
<=


$numero = '10'; //String
$variable = true;

//if($variable ===true){
//	echo 'Identico';
//} else{
//	echo 'No identico';
//}

if($numero === 10){ //Entero
	echo 'El número es exactamente igual a '.$numero;
} else {
	echo 'El número no es exactamente igual';
}

*/


/*
·······Operadores Lógicos:

and, &&
or, ||
xor
!


·······Operadores de Incremento/Decremento:

++ post
++ pre
-- post
-- pre

*/


$texto = 'Cadena de texto ';
$texto .= 'Cadena de texto DOS ';

echo $texto;

//$texto3 = $texto . $texto2;


//echo $texto3;





?>