<?php 
//UNO
//print_r($_POST);

//echo count($_POST);
//POST por detrás

//$nombre = $_POST['nombre'];
//$sexo = $_POST['sexo'];
//$year = $_POST['year'];
//$terminos = $_POST['terminos'];

//echo 'Hola, '.$nombre.' eres '.$sexo;		
	
//GET se ve en el link

//print_r($_GET)

//DOS
if (!$_GET){
	header('Location: http://192.168.64.2/cursoPHP/Sesión4/');
}

$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];

if($nombre){
echo $nombre.'<br>';
}else{
	echo 'El usuario no ingreso el nombre! <br>';
}

echo $sexo.'<br>';
echo $year.'<br>';
echo $terminos.'<br>';





 ?>
