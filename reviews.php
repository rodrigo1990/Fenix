<?php include('header.php'); ?>

<link rel="stylesheet" href="css/responsiveslides/responsiveslides.css">
<link rel="stylesheet" href="css/responsiveslides/demo.css">
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {

      $("#slider4").responsiveSlides({
        auto: false,
        pager: false,
        nav: false,
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
.btn_carousel
{
  font-size: 16px !important;
}
</style>


<section>
  <div id="wrapper">
  <div class="callbacks_container" style="margin-top: -70px;">
    <ul class="rslides" id="slider4">
      <li><img src="imagenes/reviews/1.jpg" alt=""><li>
    </ul>
  </div>
  <div class="clear"></div>
</div>

  <div class="fondo_negro_multimedia">
    <div class="container">
      <div class="row">
        <br /><br />

        <div id="owl-demo" class="owl-carousel">
          <div class="item item_calafate item_galeria">
            <div class="contenedor_overlay">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/1m59beXApWM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
              </div>
              Formula E

            <br /><br />

            <div class="contenedor_overlay">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/d_39j6kAAkY?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
              </div>
              Evanescence
          </div>
          <div class="item item_calafate item_galeria">
            <div class="contenedor_overlay">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/coaTbt7v7lg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
              </div>
              Daddy Yankee
          
          <br /><br />

            <div class="contenedor_overlay">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/kNY_l9mcpyY?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
              </div>
              Monster Jam
          </div>
          <div class="item item_calafate item_galeria">
            <div class="contenedor_overlay">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/UGQT_e0XUEg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
              </div>
              Cultura Profética & Dread Mar I
          
          <br /><br />

            <div class="contenedor_overlay">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/yCknW9HhgsA?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
              </div>
              The Kills & Cirse
          </div>
          <div class="item item_calafate item_galeria">
            <div class="contenedor_overlay">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/aiqaAcb6ZEs?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
              </div>
              Harlem GlobeTrotters
          
          <br /><br />

            <div class="contenedor_overlay">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/CcTz6Pl3m-8?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
              </div>
              Carnaval Corrientes
          </div>
          <div class="item item_calafate item_galeria">
            <div class="contenedor_overlay">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/pPsJxEu8stA?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
              </div>
              Club media Fest
          
          <br /><br />
          
            <div class="contenedor_overlay">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/kpRNPOrmHUA?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
              </div>
              Diego Torres
          </div>
        </div>

    </div>
  </div>
  <br /><br /><br />
  
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

</section>

<?php include('footer.php'); ?>