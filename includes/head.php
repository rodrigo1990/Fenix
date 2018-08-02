<?php
//error_reporting(0);
//include('panel/conexion.php');
//include('panel/includes/acentos.php');

$url_actual = basename($_SERVER['SCRIPT_NAME']);
$url_actual = str_replace('.php', '', $url_actual);
$base_url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/';


function urls_amigables($url) {
    $url = strtolower($url);
    $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
    $repl = array('a', 'e', 'i', 'o', 'u', 'n');
    $url = str_replace($find, $repl, $url);
    $find = array(' ', '&', '\r\n', '\n', '+');
    $url = str_replace($find, '-', $url);
    $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
    $repl = array('', '-', '');
    $url = preg_replace($find, $repl, $url);
    return $url;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fenix Entertainment Group</title>
	<meta name="description" content="Fenix Entertainment Group es la empresa Argentina de entretenimiento lider en Latinoamerica. El grupo nacio como una productora de espectaculos musicales, hoy es una compania de entretenimiento global." />
	<meta name="keywords" content="" />
	<link rel="icon" type="image/png" href="<?php echo $base_url ?>imagenes/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo $base_url ?>imagenes/favicon-16x16.png" sizes="16x16" />
	<!-- CSS -->
	<link href="<?php echo $base_url ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $base_url ?>css/styles.css" rel="stylesheet">
	<link href="<?php echo $base_url ?>css/queries.css" rel="stylesheet">
	<link href="<?php echo $base_url ?>css/shortcodes.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Ubuntu:400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $base_url ?>css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $base_url ?>css/menu.css">
	<link rel="stylesheet" href="css/responsiveslides/responsiveslides.css">
	<link rel="stylesheet" href="css/responsiveslides/demo.css">
	<link href="css/carousel/assets/css/bootstrapTheme.css" rel="stylesheet">
	<!-- Owl Carousel Assets -->
	<link href="css/carousel/owl.carousel.css" rel="stylesheet">
	<link href="css/carousel/owl.theme.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

	<style type="text/css">
	.item
	{
	  padding-bottom: 20px !important;
	}
	.btn_carousel
	{
	  font-size: 16px !important;
	}
	</style>
</head>