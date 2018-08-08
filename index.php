<?php 
require_once("clases/BaseDatos.php");
include('includes/head.php');
include('includes/header.php');
$baseDatos = new BaseDatos();
$baseDatos->actualizarAHistoricos();
?>
      <div id="slider-principal" class="owl-one owl-carousel owl-theme" style="">
         <?php $baseDatos->listarPortadas(); ?>    
       </div>
<div class="clear"></div>
<div class="row" style="margin-top:3%;">

    <div class="col-sm-12">

    <!--  <h2 class="titulos"><span>VIDEO DESTACADO</span></h2> -->
      <!--  <div class='video_popup'>-->
                    <!-- <iframe width='100%' height='315' src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&loop=1&controls=0&showinfo=0&nologo=1&iv_load_policy=3&mute=1" frameborder='0' allowfullscreen></iframe> -->
    

        <video id="my-video" class="video-js center-block"  autoplay muted preload="auto" style="width:100%;height:300px" data-setup="{}">
    <source src="video/1.mp4">
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
  </video>



      <!--  </div>-->
    </div>
    
</div>





<div class="container">
  <div class="row">
    <div class="col-sm-12"><h2 class="titulos"><span>SHOWS</span></h2></div>
    <?php $baseDatos->listarDestacados(); ?>
  </div>
</div>
 
<div id="proximos_eventos">
  <div class="container">
    <div class="row">
      <div class="col-sm-12"><h2 class="titulos"><span>PROXIMOS SHOWS</span></h2></div>

      <div id="owl-demo" class="owl-carousel" style="z-index:5;"> 
     <?php $baseDatos->listarAgendaDeEventos(); ?>

      <div class="clearfix"></div>
    </div>
  </div>
</div>
<div class="parallax_follow">
  <div class="bg__break">
    <div class="capture">
      <div id="titulo_seguinos">¡SEGUINOS!</div>
      ¡Enterate de las últimas promociones y novedades!
      <div id="linea_seguinos"><div></div></div>
      <a href="https://www.facebook.com/fenixargentina/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="https://twitter.com/fenix?lang=es" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="https://www.instagram.com/fenix.entertainment.group/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      <a href="https://www.youtube.com/user/Fenixproductora" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
    </div>
  </div>
</div>
<?php $baseDatos->listarGacetillas(); ?>
<?php
 include('includes/footer.php');
 include('includes/scripts.php');
?>
