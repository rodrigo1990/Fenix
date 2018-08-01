
<?php
 include('includes/verificarSession.php');
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
      <a href="home.php"><img src="../imagenes/logo.png" alt=""></a>
      <h5 class="white-text bolder italic">Panel de Administracion</h5>
	 		</div>
	 		<div class=" center col s6">
					<a href="index.php"><i class="material-icons" alt="Cerrar Sesion" >&#xE888;</i></a>
				</div>
	 	</div>
	 	<div class="center">
	 		<div class="row">
	 			<div class="col  s3">
			<a href="altaLocacion.php" ><h1 class="link-home">Alta de <br> locaciones</h1></a>
			</div>
			<div class="col s3">
			<a href="altaEvento.php" ><h1 class="link-home">Alta de <br> eventos</h1></a>
			</div>
			<div class="col  s3">
			<a href="operacionesSobreEventos.php" ><h1 class="link-home">Modificar <br> eventos</h1></a>
			</div>
			<div class="col  s3">
			<a href="bajaLocacion.php" ><h1 class="link-home">Baja <br> locacion</h1></a>
			</div>
			</div>
		</div>
	</div>




<?php include("includes/preloader.php"); ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--  <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>-->
<script type="text/javascript" src="js/bin/materialize.min.js"></script>
<script type="text/javascript" src="js/preloader.js"></script>





</body>
</html>