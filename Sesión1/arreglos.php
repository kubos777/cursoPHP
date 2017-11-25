<?php 
#################Arreglos indexados
//Pueden almacenar cualquier tipo de dato
//Primera forma de declaración de arreglos.
$semana= array('Lunes','Martes','Miercoles','Jueves','Viernes','Sábado','Domingo');

//Para acceder a los valores, comienzan desde la posición 0:
echo $semana[1]. '<br />';
echo $semana[0]. '<br />';
echo $semana[6]. '<br />';

//Podemos utilizar cualquier posición para nuevos valores del arreglo
$semana[9999]='Holi'. '<br />';
echo $semana[9999]. '<br />';

//Segunda forma de declarar un arreglo

$arreglo =[1,2,3,4,5,6,7,8,9,0];

echo $arreglo[0]. '<br />';

?>