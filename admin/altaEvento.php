<?php
include('includes/verificarSession.php');
require_once("../clases/BaseDatos.php");

$baseDatos = new BaseDatos();
?>
<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Fenix Admin Panel</title>
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=4du36rgs2w5s3lyfrmifk85266w9h8vcodmjt5oboeztsdof"></script>
	<script src="tinymce/jquery.tinymce.min.js"></script>
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
            <h5 class="white-text bolder italic">Alta de eventos</h5>

			</div>
			<div class=" center col s6">
					<a href="index.php"><i class="material-icons" alt="Cerrar Sesion" >&#xE888;</i></a>
				</div>
		</div>
	</div>
	<form method="POST" action="altaEventoProcess.php" enctype="multipart/form-data">
		<div class="container">
		
		<div class="row">
			<div class="input-field col s6">
			  <input type="text" class="form-control" id="artista" name="artista" pattern="[a-zA-Z0-9\s]+" required>
	  		  <label for="artista">Artista/s:</label><br>
			</div>
			<div class="input-field col s6">
				  <select  id="locacion" name="locacion">

					<?php 

						$baseDatos->listarLocaciones('altaEvento');

					 ?>

				  </select>
	  			  <label for="locacion">Locacion:</label><br>

			</div>

		</div>
		
		<div class="row">
			<div class="input-field col s6">
			  	<input type="date" class="form-control" id="fecha" name="fecha" required>
				<!--  <label for="fecha">Fecha:</label>-->
			</div>
			<div class="input-field col s6">
				<textarea name="copete" id="copete" cols="30" rows="10"></textarea>
				<label for="copete">Copete:</label><br>
				<p class="aviso">El copete solamente se vera en eventos destacados</p>
			</div>
		</div>

		<div class="row">
			
			<textarea name="descripcion" id="descripcion"  ></textarea>
		</div>
		

		<br><br>
		<div class="row">
			<div class="input-field col s6">
			  <label for="linkTicket">Link de Compra de Ticket:</label><br>
			  <input type="url"   class="form-control" id="linkTicket" name="linkTicket" placeholder="http://www.comprarticket.com.ar" title="ingrese un formato como http://www.comprarticket.com.ar" required>
		  </div>
		  <div class="input-field col s6">
		  	<label for="linkYoutube">Link Youtube:</label><br>
		  	<input type="url"pattern="https?://www.youtube.com/embed/.+" placeholder="http://www.youtube.com/embed/asd23xaK" title="Ingrese un formato como https://www.youtube.com/embed/asd23xaK"    id="linkYoutube1" name="linkYoutube1">	
		  </div>
	  </div>
	  
		<div class="row">
			<div class="input-field col s6">
				<label for="linkFacebook1">1er Link Facebook:</label><br>
	 			 <input type="url"pattern="https?://www.facebook.com/.+" placeholder="http://www.facebook.com/artista" title="Ingrese un formato como http://www.facebook.com/artista"   id="linkFacebook1" name="linkFacebook1">
			</div>
			
			<div class="input-field col s6">
				 <label for="linkFacebook2">2do Link Facebook:</label><br>
		  		<input type="url"pattern="https?://www.facebook.com/.+" placeholder="http://www.facebook.com/artista" title="Ingrese un formato como http://www.facebook.com/artista "    id="linkFacebook2" name="linkFacebook2">
			</div>
		</div>

		<div class="row">
			<div class="input-field col s6">
				<label for="linkInstagram1">1er Link Instagram:</label><br>
		  		<input type="url"pattern="https?://www.instagram.com/.+" placeholder="https://www.instagram.com/artista" title="Ingrese un formato como http://www.instagram.com/artista"    id="linkInstagram1" name="linkInstagram1">
			</div>
			<div class="input-field col s6">
				<label for="linkInstagram2">2do Link Instagram:</label><br>
		  <input type="url"pattern="https?://www.instagram.com/.+" placeholder="https://www.instagram.com/artista" title="Ingrese un formato como http://www.instagram.com/artista"   id="linkInstagram2" name="linkInstagram2">		
			</div>

		</div>
		<div class="row">
			<div class="input-field col s6">
				<label for="linkTwitter2">1er Link Twitter:</label><br>
		  <input type="url"pattern="https?://www.twitter.com/.+"   id="linkTwitter2" name="linkTwitter2" title="Ingrese un formato como http://www.twitter.com/artista" placeholder="http://www.twitter.com/artista">		
			</div>
			<div class="input-field col s6">
				<label for="linkTwitter1">2do Link Twitter:</label><br>
		  		<input type="url"pattern="https?://www.twitter.com/.+"  id="linkTwitter1" name="linkTwitter1" title="Ingrese un formato como http://www.twitter.com/artista " placeholder="http://www.twitter.com/artista">
			</div>

			

		</div>

		<div class="row">
			<div class="col s6">
				<div class="check-cont">
					<p>
					<input type="checkbox" name="esPortada" value="1" id="esPortada"  checked>
					<label for="esPortada">Es portada</label>	
					</p>

					<p class="esDestacado-cont">
					<input type="checkbox" name="esDestacado" value="1" id="esDestacado" >
					<label for="esDestacado">Es destacado</label>	
					</p>
				</div>
			</div>
		</div>


		<div class="row">

			<div class="col s6">
				<label for="imagenBig">Imagen Portada:</label>
	  			<input type="file" class='form-admin-input'name='imagenBig' id='imagenBig' required>
	  			<p class="aviso">Resolucion  1900px X 920px</p>
			</div>

			<div class="col s6">
				<label for="imagenMd">Imagen destacada:</label>
	  			<input type="file" class='form-admin-input'  name='imagenMd' id='imagenMd' required>
	  			<p class="aviso">Resolucion  560px X 340px</p>
			</div>

		</div>

		<div class="row">
			<div class="center">
			  <label for="imagenSm">Imagen pequeña:</label>
			  <input type="file" class='form-admin-input'  name='imagenSm' id='imagenSm' required><br>
			  <p class="aviso" style="text-align:center;">Resolucion  360px X 240px</p>
		  	</div>
		</div>

		<div class="row">
			
			<div class="col s12">
				<button class="btn form-button">Cargar Evento</button>		
			</div>
		</div>
	</form>
</div>
<?php include("includes/modalValidarResolucionDeImagenes.php") ?>
<?php include("includes/preloader.php") ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--  <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>-->
<script type="text/javascript" src="js/bin/materialize.min.js"></script>
<script type="text/javascript" src="js/validaciones.js"></script> 
<script type="text/javascript" src="js/preloader.js"></script>

<script>
	

  $(document).ready(function() {
    $('select').material_select();

    $('#esPortada').on('change', function() {
	    if ($(this).is(':checked')) {
	      console.log('Start is checked');
	    }
	  });


    $('#esDestacado').on('change', function() {
	    if ($(this).is(':checked')) {
	      console.log('Start is checked');
	    }
	  });


    		tinymce.init({
			  selector: '#descripcion',
			  height: 500,
			  theme:"modern",
			  menubar: false,
			  plugins: [
			    'link '
			  ],
			  toolbar: 'insert | undo redo |  formatselect | bold italic | help'
			  /*external_plugins: {
        		"moxiemanager": "/moxiemanager/plugin.min.js"
    			}*/
		
			});

  });//ready
</script>

</body>
</html>