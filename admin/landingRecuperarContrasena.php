<?php 
require_once("../clases/BaseDatos.php");

$baseDatos = new BaseDatos();



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
					
				</div>
			</div>
	</div>
	<div class="row">
		<div class="center">
			<?php 

			if($baseDatos->validarEmail($_POST['email'])==TRUE){
		
			$baseDatos->insertarContrasenia($_POST['email'],md5($_POST['contrasena']));

		
			}else{

				Header("Location:/fenixavanzado/admin/index.php");
			} 
			?>
			<a class="btn waves-effect waves-light"href='index.php'>INGRESAR</a>
		</div>
	</div>
</body>
</html>