<?php 
include('includes/verificarSession.php');
require_once("../clases/BaseDatos.php");


$baseDatos = new BaseDatos();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Baja Locacion</title>
	<meta charset="UTF-8">
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
			$baseDatos->bajaLocacion($_GET['id']);
			 ?>	

			<br>
			<a class="simple-link"href='bajaLocacion.php'>Volver a baja de  locaciones</a>
			<br>
			<a class="simple-link"href='home.php'>Volver a home</a>
		</div>
	</div>

<?php include("includes/preloader.php") ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/preloader.js"></script>
</body>
</html>


