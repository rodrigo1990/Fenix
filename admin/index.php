<?php 
session_start();
session_destroy();

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
	
	  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer color-panel" style="display:block !important;margin-top:10vh;">
    <div class="modal-content">
      <a href="index.php"><img src="../imagenes/logo.png" alt="" style="padding-bottom:5%;"></a>
		<form action="" method="POST">
			<div class="center">
				<div class="input-field login-field col s6">
					<input type="text" name="usuario" id="usuario" class="s-input" autocomplete="off" />
					<label for="usuario">Usuario</label>
				</div>

				<div class="input-field login-field col s6">

					<input type="password" name="contrasena" id="contrasena" class="s-input" autocomplete="off">
					<label for="contrasena">Contraseña</label>
				</div>
			</div>

			<div class="center">
				<a onClick="validarUsuario()" style="cursor:pointer;"class="btn waves-effect waves-light">Ingresar</a><br><br><br>
				<!--  <a href="reiniciarContrasena.php" class="simple-link">
					¿Olvido su contraseña?
				</a>-->
			</div>
		</form>
    </div>
   
  </div>




 	







 <!-- Modal Structure -->
  <div id="alertUsuarioInvalido" class="modal modalAlert">
    <div class="modal-content">
      <h4>Fenix - Panel de Administracion </h4>
      <p>Usuario y/o contraseña invalidos  </p>
    </div>
    <div class="center modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
    </div>
  </div>





<?php //include("includes/preloader.php") ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--  <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>-->
<script type="text/javascript" src="js/bin/materialize.min.js"></script>
<!--  <script type="text/javascript" src="js/preloader.js"></script>-->
<script>
	


	$(document).ready(function(){
	    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
	    $('.modal').modal();
  	});


	function validarUsuario(){

		var email=$("#usuario").val();
		var contrasena=$("#contrasena").val();
	
			$.ajax({

				data:{email:email,contrasena:contrasena},
				url:'ajax/validarUsuario.php',
				type:'post',
				success:function(response){

					if(response=='TRUE'){
						window.location ="home.php?email="+email+"";
					}else{
						$("#alertUsuarioInvalido").modal("open");
					}
					},
				error:function(response){
					alert(response);
				}
				});			
	}
</script>
 </body>
 </html>

