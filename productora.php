<?php

include('header.php'); 
require_once("clases/BaseDatos.php");

$baseDatos= new BaseDatos();

?>

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
      <p class="text-justify" style="font-size: 11px;">
        Fenix Entertainment Group es líder en entretenimiento en América Latina. La empresa se inició como productora de shows musicales y hoy en día se convirtió en una compañía global de entretenimiento.
        <br /><br />
        <b>ACTIVIDADES CENTRALES</b>
        <br />
        Por medio de una única estructura vertical, el grupo participa en todos los negocios que contienen la oferta de servicios, productos recreativos y ocio dentro de la Industria del Entretenimiento.<br />
        - Organización, Operación y Producción de shows<br />
        - Management de artistas y deportistas<br />
        - Diversidad de producciones: Deportes, Fashion, Family Show, Teatro, Shows Especiales, FEG también produce y apoya la industria audiovisual y el cine.<br />
        - Sponsorship, Campañas Publicitarias y Prensa<br />
        - Administración de Estadios y Teatros<br />
        - Comercialización de tickets por medio del sistema de ticketing TopShow<br />
        - Discográfica: El grupo también participa de la Industria discográfica a través de propio sello.
        <br /><br />
        <b>SHOWS EN VIVO</b>
        <br />
        Fenix Enterteinment Group garantiza el más amplio número de opciones para una gran experiencia de entretenimiento en la región, con oficinas en Argentina, Chile, Estados Unidos, Uruguay, Perú/Ecuador y alianzas de negocios en la región.<br />
        Apoyado por una gran cantidad de medios de comunicación y alianzas estratégicas y financieras, FEG garantiza el éxito para la audiencia, el artista, el venue, el sponsor y los accionistas.<br />
        Contribuimos en el desarrollo de las carreras de los artistas consagrados en el mundo de la música como: Shakira, Chayanne, Ricky Martin, Maná, Ricardo Arjona, Diego Torres y muchos otros.
      </p>
    </div>
    <div class="col-sm-5">
      <div id="conocenos_empresa">
        <div id="titulo_conocenos">CONOCENOS</div>
        ¡Enterate de las últimas promociones y novedades!
        <div id="sociales_grandes">
          <a href="https://www.facebook.com/fenixargentina/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://twitter.com/fenix?lang=es" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/fenix.entertainment.group/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="https://www.youtube.com/user/Fenixproductora" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div id="proximos_eventos_empresa">
    <div class="container">
      <div class="row">
        <div class="col-sm-12"><h2 class="titulos"><span>AGENDA DE EVENTOS</span></h2></div>
      </div>
    </div>

    <div class="fondo_carousel">
      <div class="container">
        <div class="row">
          <div id="owl-demo" class="owl-carousel">

            <?php 
              $baseDatos->listarAgendaDeEventosEnSeccionProductora();

             ?>

           

            <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
</section>

<?php include('footer.php'); ?>