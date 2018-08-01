<?php 

require_once("clases/BaseDatos.php");

$baseDatos = new BaseDatos();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	$cant=strlen("Sir Rod Stewart fue reconocido dos veces por el “Rock and Roll Hall of Fame” y es uno de los artistas más importantes de todos los tiempos con más de 200 millones de álbumes vendidos. 
");
	echo $cant;

	echo str_replace("-","/","03-12")
	 ?>
</body>
</html>