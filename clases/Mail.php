<?php 


class Mail{
		function enviarToken($email){

		 	$destinatario=$email;
		$token=md5($email);

				 	$asunto = "Recuperar contraseña Fenix Admin Panel"; 

				$cuerpo = ' 
				<html> 
				<head> 
				   <title>Recuperar contraseña Admin Panel</title> 
				</head> 
				<body> 
				<h1 style="color:orange;">Fenix Admin Panel</h1>
				<p><i>'.date("d-m-y").'</i></p> 
				<p>Hola te enviamos este email para que puedas <b> recuperar tu contraseña</b></p>
				<p>Tan solo haz click en el siguiente link, para poder crear tu nueva contraseña.
				
				<br>
				<a href="localhost/fenixAvanzado/admin/registrarUsuario.php?email='.$destinatario.'&token='.$token.'">www.fenixEntertainment.com.ar/registrarUsuario.php?email='.$destinatario.'&token='.$token.'</a>"';

				$cuerpo.="</body></html>";





				//para el envío en formato HTML 
				$headers = "MIME-Version: 1.0\r\n"; 
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

				//dirección del remitente 
				$headers .= "From:  <info@fenix.com.ar>\r\n"; 

				//direcciones que recibián copia 
				//$headers .= "Cc: tatyrod@gmail.com\r\n"; 


				mail($destinatario,$asunto,$cuerpo,$headers);


		 }//function

}//class

 ?>