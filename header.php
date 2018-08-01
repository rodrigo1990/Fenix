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
    
  </head>
  
  <body>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <div id="cssmenu" style="position: relative; z-index:999;">
              <ul>
                 <li <?php if(($url_actual == "index") || ($url_actual == "")) { ?>class="current"<?php } ?>><a href="<?php echo $base_url ?>index.php" style="margin-left: 0px; padding-left: 0px;">EVENTOS</a></li>
                 <li <?php if($url_actual == "productora") { ?>class="current"<?php } ?>><a href="<?php echo $base_url ?>productora.php">PRODUCTORA</a></li>
                 <!--<li <?php if($url_actual == "venues") { ?>class="current"<?php } ?>><a href="<?php echo $base_url ?>venues">VENUES</a></li>-->
                 <!--<li <?php if($url_actual == "produccion") { ?>class="current"<?php } ?>><a href="<?php echo $base_url ?>produccion">PRODUCCIÓN</a></li>-->
                <!--  <li <?php if(($url_actual == "reviews") || ($url_actual == "multimedia_a")) { ?>class="current"<?php } ?>><a href="<?php echo $base_url ?>reviews.php">REVIEWS</a></li> -->
                 <li <?php if($url_actual == "contacto") { ?>class="current"<?php } ?>><a href="<?php echo $base_url ?>contacto.php" style="margin-right: 0px; padding-right: 0px;">CONTACTO</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-2 text_center_mobile">
            <a href="<?php echo $base_url ?>index" id="logo-container"><img src="<?php echo $base_url ?>imagenes/logo.png" alt="TravelTime" id="logo" /></a>
          </div>
          <div class="col-sm-2 text-right text_center_mobile hidden" id="redes_header">
            <a href="https://www.facebook.com/fenixargentina/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://twitter.com/fenix?lang=es" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/fenix.entertainment.group/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.youtube.com/user/Fenixproductora" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
  </header>
  <div id="espacio_header"></div>