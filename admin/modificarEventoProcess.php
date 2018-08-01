<?php
include('includes/verificarSession.php'); 
require_once("../clases/BaseDatos.php");

$bd = new BaseDatos();


	if(!isset($_POST['esPortada'])){
	$_POST['esPortada']=0;

}
if(!isset($_POST['esDestacado'])){
	$_POST['esDestacado']=0;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar evento</title>
	<meta charset="UTF-8">
	<title>Alta eventos</title>
		<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body class="bkground">
	<div class="container">
			<div class="row">
				<div class="col s6">
			      <a href="home.php"><img src="../imagenes/logo.png" alt="" style=""></a>
				</div>
				<div class="col s6">
					<a href="index.php"><i class="material-icons" alt="Cerrar Sesion" >&#xE888;</i></a>
				</div>
				</div>
			</div>
	</div>
	<div class="row">
		<div class="center">
			<?php 
$bd->actualizarEvento($_POST['artista'],$_POST['fecha'],$_POST['copete'],$_POST['descripcion'],
							$_POST['linkTicket'],$_POST['linkYoutube1'],$_POST['linkFacebook1'],$_POST['linkTwitter1'],$_POST['linkInstagram1'],
$_POST['linkFacebook2'],$_POST['linkTwitter2'],$_POST['linkInstagram2'],
$_FILES['imagenBig']['name'],$_FILES['imagenMd']['name'],$_FILES['imagenSm']['name'],
$_POST['esPortada'],$_POST['esDestacado'],$_POST['locacion'],$_GET['id']);
 ?>
			<br>
			<a class="simple-link"href='operacionesSobreEventos.php'>Volver a modificar evento</a>
			<br>
			<a class="simple-link"href='home.php'>Volver a home</a>
		</div>
	</div>
</body>
</html>