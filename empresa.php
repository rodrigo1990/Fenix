<?php include('header.php'); ?>

<link href="css/carousel/assets/css/bootstrapTheme.css" rel="stylesheet">
<!-- Owl Carousel Assets -->
<link href="css/carousel/owl.carousel.css" rel="stylesheet">
<link href="css/carousel/owl.theme.css" rel="stylesheet">

<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        items: 3,
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
.btn_carousel
{
  font-size: 16px !important;
}
</style>

<section>
  <div id="cabecera_empresa">
    <div class="container">
      <div class="row">
        <div class="col-sm-12"><h2 class="titulos"><span>QUIENES SOMOS</span></h2></div>
      </div>
    </div>
  </div>

  <div class="container" id="padding_empresa">
    <div class="col-sm-7">
      <h1 id="titulo_fenix">FENIX ENTERTAINMENT GROUP</h1>
      <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium suscipit dui a ultrices. Duis cursus magna tempus ipsum hendrerit tempus. Morbi tempor at enim et lobortis. Integer pulvinar libero quis metus egestas, vitae tristique nisi lacinia. Nunc id quam et sapien auctor tincidunt ac accumsan leo. Sed cursus tristique condimentum. Proin risus magna, luctus efficitur scelerisque eget, vulputate at odio. Vestibulum id metus et nibh cursus fringilla. Mauris viverra purus accumsan condimentum ullamcorper. Pellentesque consequat elementum ligula a finibus. Cras vitae tristique urna. Ut nec dolor aliquet, maximus justo sed, molestie turpis. Nulla semper egestas mollis. Suspendisse potenti. Nam ex neque, suscipit eu volutpat vitae, mollis eget urna.</p>
    </div>
    <div class="col-sm-5">
      <div id="conocenos_empresa">
        <div id="titulo_conocenos">CONOCENOS</div>
        ¡Buscanos y enterate de los próximos shows, promociones y mas!
        <div id="sociales_grandes">
          <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="#" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div id="proximos_eventos_empresa">
    <div class="container">
      <div class="row">
        <div class="col-sm-12"><h2 class="titulos"><span>PRÓXIMOS EVENTOS</span></h2></div>
      </div>
    </div>

    <div class="fondo_carousel">
      <div class="container">
        <div class="row">
          <div id="owl-demo" class="owl-carousel">
            <?php for($i=0;$i<=2;$i++) { ?>

            <div class="item carousel_empresa" style="background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url('imagenes/home/evento1.jpg'); background-size: cover;">
              <div class="descripcion_carousel">
                <div class="titulo_evento">JAMES BLUNT</div>
                <a class="fecha_evento">24/02</a>  <a class="lugar_evento"><i class="fa fa-map-marker" aria-hidden="true"></i> LUNA PARK</a>
              </div>
              <a href="#" target="_blank" class="btn_carousel"><i class="fa fa-ticket" aria-hidden="true"></i> Comprar ticket</a>
            </div>
            <div class="item carousel_empresa" style="background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url('imagenes/home/evento2.jpg'); background-size: cover;">
              <div class="descripcion_carousel">
                <div class="titulo_evento">JAMES BLUNT</div>
                <a class="fecha_evento">24/02</a>  <a class="lugar_evento"><i class="fa fa-map-marker" aria-hidden="true"></i> LUNA PARK</a>
              </div>
              <a href="#" target="_blank" class="btn_carousel"><i class="fa fa-ticket" aria-hidden="true"></i> Comprar ticket</a>
            </div>
            <div class="item carousel_empresa" style="background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url('imagenes/home/evento3.jpg'); background-size: cover;">
              <div class="descripcion_carousel">
                <div class="titulo_evento">JAMES BLUNT</div>
                <a class="fecha_evento">24/02</a>  <a class="lugar_evento"><i class="fa fa-map-marker" aria-hidden="true"></i> LUNA PARK</a>
              </div>
              <a href="#" target="_blank" class="btn_carousel"><i class="fa fa-ticket" aria-hidden="true"></i> Comprar ticket</a>
            </div>
            <div class="item carousel_empresa" style="background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url('imagenes/home/evento4.jpg'); background-size: cover;">
              <div class="descripcion_carousel">
                <div class="titulo_evento">JAMES BLUNT</div>
                <a class="fecha_evento">24/02</a>  <a class="lugar_evento"><i class="fa fa-map-marker" aria-hidden="true"></i> LUNA PARK</a>
              </div>
              <a href="#" target="_blank" class="btn_carousel"><i class="fa fa-ticket" aria-hidden="true"></i> Comprar ticket</a>
            </div>

            <?php } ?>

            <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
</section>

<?php include('footer.php'); ?>