<?php 
require_once("clases/class.phpmailer.php");
if(isset($_POST['nombre']) AND isset($_POST['telefono']) AND isset($_POST['mensaje'])){
/*
		$destinatario = "mcd77.1990@gmail.com";
		$asunto = "Mail enviado desde Fenix.com.ar por ".$_POST['nombre']." ".$_POST['apellido'].""; 

			
			$cuerpo = ' 
			<html> 
			<head> 
			   <title>Mensaje desde Fenix.com.ar</title> 
			</head> 
			<body> 
			<h1 style="color:black;">FENIX.COM.AR</h1>
			<p><i>'.date("d-m-y").'</i></p> 
			<p><b>Nombre:</b> '.$_POST['nombre'].' </p>
			<p><b>Apellido:</b> '.$_POST['apellido'].' </p>
			<p><b>TEL:</b> '.$_POST['telefono'].' </p>
			<p>Hola te han enviado un mensaje desde Fenix.com.ar:</p>
			<br>
			'.$_POST['mensaje'].'

			</body>
			</html>';


		$cuerpo.="</body></html>";
//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: ".$_POST['rodrigo']." ".$_POST['apellido']." ".$_POST['email']."\r\n"; 

//direcciones que recibián copia 
//$headers .= "Cc: tatyrod5@gmail.com\r\n"; 


mail($destinatario,$asunto,$cuerpo,$headers);*/

$mail = new PHPMailer();
	$mail->Host = "smtp.gmail.com";
	$mail->IsHTML(true);


	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->Username = "mcd77.1990@gmail.com";
	$mail->Password = "Javierjavier1990";
	$mail->Port = "465";

	$cuerpo = ' 
	<html> 
	<head> 
	   <title>Mensaje desde Fenix.com.ar</title> 
	</head> 
	<body> 
	<h1 style="color:black;">FENIX.COM.AR</h1>
	<p><i>'.date("d-m-y").'</i></p> 
	<p><b>Nombre:</b> '.$_POST['nombre'].' </p>
	<p><b>Apellido:</b> '.$_POST['apellido'].' </p>
	<p><b>TEL:</b> '.$_POST['telefono'].' </p>
	<p>Hola te han enviado un mensaje desde Fenix.com.ar:</p>
	<br>
	'.$_POST['mensaje'].'

	</body>
	</html>';






	$mail->From = $_POST['email'];
	$mail->FromName = $_POST['nombre'];
	$mail->Subject = "Mensaje desde web : ".$_POST['nombre']." ".$_POST['apellido']." ".$_POST['email']."";

	$mail->Body = $cuerpo;
	$mail->AltBody = "";
	$mail->CharSet = 'UTF-8';
	$mail->AddAddress($_POST['email'],"Usuario");
	$mail->Send();


}else{
	header("Location:index.php");
}
 ?>
<body>
<?php include("header.php") ?>
<section id="mailLanding">
	<div id="cabecera_contacto">

		<div class="row">
			<div class="container text-center">
				<h1 style="color:white;">¡Gracias!<br> A la brevedad responderemos su mensaje.</h1>
				<?php echo $destinatario; ?>		
			</div>
		</div>
	</div>
</section>
<?php include('footer.php'); ?>