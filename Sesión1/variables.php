<?php
	//Las variables se declaran con el símbolo de pesos al inicio
	//PHP es de tipado dinámico
	$nombre ='kubOS';
	#Números enteros
	$numero= 21;
	#Números flotantes
	$numero_decimal=21.10;
	#Booleanos (true/false)
	$verdadero= true;
	$falso=false;
	#Arrays
	#Object
	#Class
	#Null
	$edad;
	//Las variables se imprimen de la misma forma, con símbolo de pesos $
	//Dentro de las comillas dobles nosotros podemos llamar variables,
	//caso contrario a las comillas simples.
	echo "Hola, $nombre";

	//La concatenación en PHP se realiza con el punto .

	echo "Tu edad es: ".$numero;

	//Para conocer el tipo de dato podemos utilizar la función gettype()

	echo gettype($verdadero);


 ?>