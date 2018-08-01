<?php 
include('includes/verificarSession.php');
require_once("../clases/BaseDatos.php");

$bd = new BaseDatos();


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
			      <h5 class="white-text bolder italic">Actualizar Eventos</h5>
				</div>
				<div class=" center col s6">
					<a href="index.php"><i class="material-icons" alt="Cerrar Sesion" >&#xE888;</i></a>
				</div>
			</div>
	</div>
	<form method="POST" action="modificarEventoProcess.php?id=<?php ECHO $_GET['id']; ?>" enctype="multipart/form-data">
		
		<div class="container">
		
			<div class="row">
				<div class="input-field col s6">
				  <label for="artista">Artista/s:</label><br>
				  <input type="text" class="form-control" id="artista" name="artista" pattern="[a-zA-Z0-9\s]+" required value="<?php $bd->listarArtista($_GET['id']); ?>">
				
				</div>
				<div class="input-field col s6">
				  
				  <select name="locacion" id="locacion"><?php $bd->listarLocacionesParaActualizar($_GET['id'])?></select>
				  <label for="locacion">Locaciones:</label><br>
				</div>
				

			</div>
			<div class="row">
				<div class="col s6">
					<label for="fecha">Fecha:</label><br>
				  <input type="date" class="form-control" id="fecha" name="fecha" required value=<?php $bd->listarFecha($_GET['id']) ?>>

				</div>
				<div class="col s6">
				  <label for="copete">Copete</label>
  				  <textarea name="copete" id="copete" cols="30" rows="10"><?php $bd->listarCopete($_GET['id']) ?></textarea>
  				  <p class="aviso">El copete solamente se vera en eventos destacados</p>

			  </div>
			</div>
			<label for="Descripcion">Descripcion</label>
			<textarea name="descripcion" id="descripcion" cols="30" rows="10">
				<?php $bd->listarDescripcion($_GET['id']) ?>
			</textarea>
				

			  <div class="row">
			  	<div class="input-field col s6">
				  <label for="linkTicket">Link de Compra de Ticket:</label><br>
				  <input type="url"   class="form-control" id="linkTicket" name="linkTicket" title="ingrese un formato como http://www.comprarticket.com.ar" required value=<?php $bd->listarLinkTicket($_GET['id']) ?>>
			  	</div>

			  	<div class="input-field col s6">
				  <label for="linkYoutube">Link Youtube:</label><br>
				  <input type="url"pattern="https?://www.youtube.com/embed/.+"   class="form-control" id="linkYoutube1" name="linkYoutube1" title="Ingrese un formato como https://www.youtube.com/embed/asd23xaK"  value=<?php $bd->listarLinkYouTube($_GET['id']) ?>>
		  	  	</div>
		  	  </div>

		  	<div class="row">
		  	  <div class="input-field col s6">
				  <label for="linkFacebook1">1er Link Facebook:</label><br>
				  <input type="url"pattern="https?://www.facebook.com/.+"  class="form-control" id="linkFacebook1" name="linkFacebook1" title="Ingrese un formato como http://www.facebook.com/artista"   value=<?php $bd->listarLinkFacebook1($_GET['id']) ?>>
			  </div>
			  <div class="input-field col s6">
			  	<label for="linkFacebook2">2do Link Facebook:</label><br>
		   	  <input type="url"pattern="https?://www.facebook.com/.+"   class="form-control" id="linkFacebook2" name="linkFacebook2" title="Ingrese un formato como http://www.facebook.com/artista"   value=<?php $bd->listarLinkFacebook2($_GET['id']) ?>>
		  
			  </div>

			</div>
			<div class="row">
		  		<div class="input-field col s6">
				  <label for="linkTwitter1">1er Link Twitter:</label><br>
				  <input type="url"pattern="https?://www.twitter.com/.+"   class="form-control" id="linkTwitter1" name="linkTwitter1" title="Ingrese un formato como http://www.twitter.com/artista"  value=<?php $bd->listarLinkTwitter2($_GET['id']) ?>>
		  		</div>
		  		<div class="input-field col s6">
		  			<label for="linkTwitter2">2do Link Twitter:</label><br>
			  <input type="url"pattern="https?://www.twitter.com/.+"   class="form-control" id="linkTwitter2" title="Ingrese un formato como http://www.twitter.com/artista" name="linkTwitter2"value=<?php $bd->listarLinkTwitter2($_GET['id']) ?>>		
		  		</div>
			</div>
		  
			
			<div class="row">
				<div class="input-field col s6">
					<label for="linkInstagram1">1er Link Instagram:</label><br>
			  		<input type="url"pattern="https?://www.instagram.com/.+"   class="form-control" id="linkInstagram1"  title="Ingrese un formato como http://www.instagram.com/artista" name="linkInstagram1"  value=<?php $bd->listarLinkInstagram1($_GET['id']) ?>>		
				</div>
				<div class="input-field col s6">
					<label for="linkInstagram2">2do Link Instagram:</label><br>
			  <input type="url"pattern="https?://www.instagram.com/.+"   class="form-control" id="linkInstagram2"  title="Ingrese un formato como http://www.instagram.com/artista" name="linkInstagram2" value=<?php $bd->listarLinkInstagram2($_GET['id']) ?>>		
				</div>
			</div>

			<div class="row">
				
				<div class="col s6">
					<div class="check-cont">
					<!-- LISTAR CHECKBOX -->
					<?php if($bd->listarPortada($_GET['id'])==1){ ?>
						<p>
							<input type="checkbox" name="esPortada" id="esPortada" value="1"  checked>
							<label for="esPortada"> Es Portada</label>
						</p>
					<?php }else{ ?>
						<p>
							<input type="checkbox" name="esPortada" id="esPortada" value="1"  >
							<label for="esPortada">Es portada</label>
						</p>

					<?php } ?>


					<?php if($bd->listarDestacado($_GET['id'])==1){ ?>
						<p class="esDestacado-cont">
							<input type="checkbox" name="esDestacado" id="esDestacado" value="1"  checked>
							<label for="esDestacado">Es destacado</label>
						</p>
					<?php }else{ ?>
						<p class="esDestacado-cont">
							<input type="checkbox" name="esDestacado" id="esDestacado" value="1">
							<label for="esDestacado">Es destacado</label>
						</p>

					<?php } ?>
					</div>
				</div>
			</div>


			<div class="row">
				<div class=" col s6">  
				  	<label for="imagenBig">Imagen Portada:</label>
				  	<input type="file" class='form-admin-input'name='imagenBig' id='imagenBig' >
				  	<p class="aviso">Resolucion  1900px X 920px</p>
			  	</div>
				<div class=" col s6">
					<label for="imagenMd">Imagen destacada:</label>
			  		<input type="file" class='form-admin-input'  name='imagenMd' id='imagenMd' >
			  		<p class="aviso">Resolucion  560px X 340px</p>	

				</div>
		  	</div>

		  	<div class="row">
		  	   <div class="center">
				  <label for="imagenSm">Imagen pequeña:</label>
				  <input type="file" class='form-admin-input'  name='imagenSm' id='imagenSm' >
				  <p class="aviso" style="text-align:center;">Resolucion  360px X 240px</p>
			  </div>
	  		</div>
	  		
			<div class="row">
					<div class="col s6">
					</div>

					<div class="col s6">
						<button class="btn form-button">Actualizar</button>			
					</div>
				</div>	

			</div>

		</div>

		


	</form>

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
			  menubar: false,
			  plugins: [
			    'link'
			  ],
			  toolbar: 'insert | undo redo |  formatselect | bold italic | help',
			  content_css: [
			    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
			    '//www.tinymce.com/css/codepen.min.css']
			});

  });//ready
</script>

</body>
</html>