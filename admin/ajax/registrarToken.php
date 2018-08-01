<?php 
require_once("../../clases/BaseDatos.php");
$baseDatos=new BaseDatos();
require_once("../../clases/Mail.php");
$mail= new Mail();


if($baseDatos->validarUsuarioParaReestablecerContrasena($_POST['email'])==TRUE){
$token=md5($_POST["email"]);

$baseDatos->actualizarToken($_POST['email'],$token);

$mensaje=$mail->enviarToken($_POST['email']);

echo "Verificacion enviada";

}else{
	echo "No tiene autorizacion para acceder al panel";
}
?>