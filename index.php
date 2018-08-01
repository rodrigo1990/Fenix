<?php 

include('header.php');

require_once("clases/BaseDatos.php");

$baseDatos = new BaseDatos();
 ?>

<link rel="stylesheet" href="css/responsiveslides/responsiveslides.css">
<link rel="stylesheet" href="css/responsiveslides/demo.css">
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {

      $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });

    $(document).on('keyup.callbacks_container', function(evt) {
      if (evt.keyCode == 37) { // LEFT
          $('.callbacks_container .prev').trigger('click');
      } else if (evt.keyCode == 39) { // RIGHT
          $('.callbacks_container .next').trigger('click');
      }
  });
</script>

<link href="css/carousel/assets/css/bootstrapTheme.css" rel="stylesheet">
<!-- Owl Carousel Assets -->
<link href="css/carousel/owl.carousel.css" rel="stylesheet">
<link href="css/carousel/owl.theme.css" rel="stylesheet">

<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        items: 4,
        loop: true,
        pagination: false,
        navigation: true,
        navigationText: [
        "<i class='fa fa-angle-left' style='font-size: 20px !important;  border-radius: 60px !important;'></i>",
        "<i class='fa fa-angle-right' style='font-size: 20px !important;  border-radius: 60px !important;'></i>"
        ]
      });
    });
</script>
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

<div id="wrapper">
  <div class="callbacks_container" style="margin-top: -70px;">
      <ul class="rslides" id="slider4">
      <?php $baseDatos->listarPortadas(); ?>
      <!--  <li>
        <a  href="https://topshow.com.ar/info/fenix/rod-stewart-cena-show-2018" target="_blank"><img src="imagenes/home/5.jpg" alt=""></a>

      </li>-->
         
     </ul> 
  </div>
  <div class="clear"></div>
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


<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="css/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

<script type="text/javascript">
  $(document).ready(function() {
    $('.fancybox').fancybox();
  });
</script>

<?php include('footer.php'); ?>