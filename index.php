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

    <div class="col-sm-12" style="background-color: black;">

    <!--  <h2 class="titulos"><span>VIDEO DESTACADO</span></h2> -->
      <!--  <div class='video_popup'>-->
                    <!-- <iframe width='100%' height='315' src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&loop=1&controls=0&showinfo=0&nologo=1&iv_load_policy=3&mute=1" frameborder='0' allowfullscreen></iframe> -->
    
  
        <video id="my-video" class="center-block"  autoplay muted loop preload="auto" style="width:100%;height:300px">
           <source src="video/2.mp4">
  
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

<div class="container live-feed-cont">

      <div class="col-sm-12"><h2 class="titulos"><span>LIVE FEED</span></h2></div>

      <div class="col-sm-4">
        <div class="fb-page" data-href="https://www.facebook.com/fenixargentina/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/fenixargentina/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/fenixargentina/">Fenix Entertainment Group</a></blockquote></div>   
      </div>
      <div class="col-sm-4">
        <a class="twitter-timeline" data-width="340" data-height="500" data-link-color="#FAB81E" href="https://twitter.com/fenix?ref_src=twsrc%5Etfw">Tweets by fenix</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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
<script>
     $('.owl-one').owlCarousel({
    loop:true,
    margin:10,
    autoPlay:true,
    nav:true,
    navigation: true,
    navigationText: [
        "<i class='fa fa-angle-left slider-home' style='font-size: 7.5rem !important;color:white;  border:none; margin-left:50px'></i>",
        "<i class='fa fa-angle-right slider-home' style='font-size: 7.5rem !important;color:white;  border:none; margin-right:50px'></i>"
        ],
    dots:true,
    items:1,
    responsive:{
        0:{
            items:1
        },
        1200:{
            items:1
        }


    }
});
</script>
<script>

      $("#owl-demo").owlCarousel({
        items: 4,
        loop: true,
        nav:true,
        pagination: false,
        navigation: true,
        navigationText: [
        "<i class='fa fa-angle-left' style='font-size: 20px !important;  border-radius: 60px !important;'></i>",
        "<i class='fa fa-angle-right' style='font-size: 20px !important;  border-radius: 60px !important;'></i>"
        ]
      });
</script>
