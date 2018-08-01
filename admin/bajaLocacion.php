
<?php 
include('includes/verificarSession.php');
require_once("../clases/BaseDatos.php");

$baseDatos = new BaseDatos();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fenix Admin Panel</title>
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
			      <h5 class="white-text bolder italic">Baja de locaciones</h5>
				</div>
				<div class=" center col s6">
					<a href="index.php"><i class="material-icons" alt="Cerrar Sesion" >&#xE888;</i></a>
				</div>
			</div>
	</div>

	<div class="container">
	
		<table>
			<th class="orange-text">
				Locacion
			</th>
			<th class="orange-text">
				Baja
			</th>
			<?php 
				$baseDatos->listarLocaciones('bajaLocacion');

			 ?>
		</table>

	</div>


</body>
</html>