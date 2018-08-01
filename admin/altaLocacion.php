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
			<h5 class="white-text bolder italic">Alta de locaciones</h5>

	 		</div>
	 		<div class=" center col s6">
					<a href="index.php"><i class="material-icons" alt="Cerrar Sesion" >&#xE888;</i></a>
				</div>
	 	</div>
		<form method="POST" action="altaLocacionProcess.php">
	 	<div class="center">
			<div class="input-field login-field col s6">
			  <input type="text" class="login-input" id="locacion" name="locacion"  required>
	  		  <label for="locacion">Locacion:</label>

			</div>
			<button class="btn waves-effect waves-light">Cargar Locacion</button>
		</div>
		</form>
	</div>

<?php include("includes/preloader.php") ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--  <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>-->
<script type="text/javascript" src="js/bin/materialize.min.js"></script>
<script type="text/javascript" src="js/preloader.js"></script>

</body>
</html>