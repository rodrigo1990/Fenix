<?php 
require_once("clases/BaseDatos.php");
include('includes/head.php');
include('includes/header.php');
$baseDatos = new BaseDatos();
?>
<div id="wrapper">
  <div class="callbacks_container" style="margin-top: -70px;">
      <ul class="rslides" id="slider4">
      <?php $baseDatos->listarPortadas(); ?>
     </ul> 
  </div>
  <div class="clear"></div>
</div>

<div class="row">
  <div class="container">

    <div class="col-sm-12">
      <div class="col-sm-12"><h2 class="titulos"><span>VIDEO DESTACADO</span></h2></div>
      <!-- video -->
    </div>
    <div class="col-sm-12">
      <div class="col-sm-12"><h2 class="titulos"><span>LIVE FEED</span></h2></div>

      <div class="col-sm-4">
        <div class="fb-page" data-href="https://www.facebook.com/fenixargentina/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/fenixargentina/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/fenixargentina/">Fenix Entertainment Group</a></blockquote></div>   
      </div>
      <div class="col-sm-4">
        <a class="twitter-timeline" data-width="340" data-height="500" data-link-color="#FAB81E" href="https://twitter.com/fenix?ref_src=twsrc%5Etfw">Tweets by fenix</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
      
    </div>
  </div>
</div>





<div class="container">
  <div class="row">
    <div class="col-sm-12"><h2 class="titulos"><span>EVENTOS DESTACADOS</span></h2></div>
    <?php $baseDatos->listarDestacados(); ?>
  </div>
</div>
<div id="proximos_eventos">
  <div class="container">
    <div class="row">
      <div class="col-sm-12"><h2 class="titulos"><span>AGENDA DE EVENTOS</span></h2></div>

      <div id="owl-demo" class="owl-carousel"> 
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
