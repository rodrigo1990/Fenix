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
				<div class="input-field login-field col s6">
					
					<input type="text" name="email" id="email" class="login-input">
					<label for="email">Ingrese su eMail</label>
					<p class="aviso" style="display:none">Ingrese un email valido</p>

				</div>
				<div class="center">
					<a  style="cursor:pointer;" onClick="registrarToken();" class="btn waves-effect waves-light">Ingresar</a>
				</div>
			</form>
    </div>
   
  </div>


  <!-- Modal Structure -->
  <div id="alertMailConfirmacion" class="modal modalAlert">
    <div class="modal-content">
      <h4>Fenix - Panel de Administracion </h4>
      <p>Mail de confirmacion enviado  </p>
    </div>
    <div class="center modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
    </div>
  </div>


<?php include("includes/preloader.php") ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bin/materialize.min.js"></script>
<script type="text/javascript" src="js/preloader.js"></script>
<script>

function registrarToken(){

		var emailValido=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	    email=$("#email").val();

	    if(email.length==0||email.search(emailValido)){
	    	$(".aviso").show();
	    }else{

	    	$(".aviso").hide();

			$(".preloader-background").show();

			$(".preloader-wrapper").show();

			var email=$("#email").val();

			$.ajax({
				data:{email:email},
				url:'ajax/registrarToken.php',
				type:'POST',
				success:function(response){
					    $('.modal').modal();

					$('#alertMailConfirmacion').modal('open');
				
				},
				error: function (response) {
				},
				complete:function (response){
					$(".preloader-background").hide();
					$(".preloader-wrapper").hide();
				}
			});
		}
}//function
</script> 


 </body>






