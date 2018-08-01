<?php 
require_once("../clases/BaseDatos.php");
$baseDatos=new BaseDatos();

if($baseDatos->validarToken($_GET['token'],$_GET['email'])==FALSE){
header('Location:/fenixavanzado/admin/index.php');
}
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
			<form action="landingRecuperarContrasena.php" method="POST">
			
			<div class="input-field login-field">
				<label for="contrasena">Contraseña</label>
				<input type="password" name="contrasena" id="contrasena"class="login-input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
				title="La contraseña debe tener al menos 8 caracteres, una mayuscula y una minuscula ">
			</div>
			<div class="input-field login-field">
				<label for="repetir-contrasena">Repite la contraseña</label>
				<input type="password" name="repetir-contrasena" id="repetir-contrasena"class="login-input">
			</div>
			<input type='hidden' name='email' id='email' value="<?php echo $_GET['email'] ?>"> 

			<div class="center">
				<button class="btn" disabled>Recuperar</button>
				<p class="aviso" id="validarRepeticion"style="display:none;text-align:center;">Ambas contraseñas deben ser iguales</p>
				<p class="aviso" id="validarExpresion" style="display:none;text-align:center;">Su contraseña debe tener como minimo 6 caracteres y  ademas tanto letras como numeros</p>
			</div>
		</form>
    </div>
   
  </div>




<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bin/materialize.min.js"></script>

<script>
	
	$(document).ready(function() {


		var soloLetrasYNumeros=/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/;

		contrasena=$("#contrasena").val();

		if(contrasena.search(soloLetrasYNumeros)&&contrasena.length<6){
					$("#validarExpresion").show();
				}else if(contrasena<6){
					$("#validarExpresion").show();
				}else{
					$("#validarExpresion").hide();
					$('button').prop('disabled', true);	
				}


		$("#repetir-contrasena").keyup(function(){


					var contrasena=$("#contrasena").val();
				    var repetir=$("#repetir-contrasena").val();



				    if(contrasena == repetir){
					    $('button').prop('disabled', false);		
					    $("#validarRepeticion").hide();
				    }
				    
					else{
						$('button').prop('disabled', true);	
					    $("#validarRepeticion").show();
				    }

		});//keyup

		$("#contrasena").keyup(function(){

				 contrasena=$("#contrasena").val();

				if(contrasena.search(soloLetrasYNumeros)&&contrasena.length<6){
					$("#validarExpresion").show();
				}else if(contrasena<6){
					$("#validarExpresion").show();
				}else{
					$("#validarExpresion").hide();
					$('button').prop('disabled', true);	
				}


			});//keyup

	});// ready

</script>

 </body>



 