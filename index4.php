<?php
error_reporting(0);
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

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="<?php echo $base_url ?>js/bootstrap.min.js"></script>

    <script src="<?php echo $base_url ?>js/menu.js"></script>
    <link rel="stylesheet" href="<?php echo $base_url ?>css/menu.css">

    <script src="<?php echo $base_url ?>js/parallax.min.js"></script>

    <script language="JavaScript" type="text/javascript" src="<?php echo $base_url ?>contacto.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9&appId=134457396644528";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
    <style>
		body{
			    background:url('admin/background/back1.jpg');
    width: 100vw;
    height: 100vh;
    background-size: cover;
    background-position: top;
    background-attachment: fixed;
    overflow: hidden;
		}

    footer{
          background: #000000 !important;
    padding: 15px 0px !important;
    color: #ffffff !important;
    font-size: 13px !important;
    margin-bottom: 0px !important;
    position: absolute !important;
    bottom: 0 !important;
    left: 0 !important;
    right: 0 !important;
    }


    </style>
  </head>
  <body>
    <div class="center-block" style="margin-top:19%;">
    	<h1 class = "text-center" style="color:white;">SITIO WEB EN CONSTRUCCIÓN</h1>
    	<img src="imagenes/logo.png" alt="" class="center-block"style="padding-bottom:80vh;" />
    </div>
<footer style="background:transparent !important">
  <div class="container">
    <div class="row">
      <!-- <div class="col-sm-6 text-center padding_footer">
        <div class="row">
          <div class="col-sm-5">Teléfono: <a href="tel:00541148094600">(+54 11) 5297-4300</a></div>
          <div class="col-sm-7">Dirección: Azopardo 1487 - 3er piso (CABA)</div>
        </div>
      </div> -->
      <div class="col-sm-4 text-right padding_footer text_center_mobile">
        Email: <a href="mailto:info@fenix.com.ar">info@fenix.com.ar</a>
      </div>
      <div class="col-sm-4 text-center padding_footer">
        <a href="https://www.facebook.com/fenixargentina/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://twitter.com/fenix?lang=es" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/fenix.entertainment.group/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com/user/Fenixproductora" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
      </div>
      <div class="col-sm-4 text_center_mobile">
        <img src="imagenes/logo.png" alt="" />
      </div>
    </div>
  </div>
</footer>
  </body>
  </html>

