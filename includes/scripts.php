<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url ?>js/bootstrap.min.js"></script>
<script src="<?php echo $base_url ?>js/menu.js"></script>
<script src="<?php echo $base_url ?>js/parallax.min.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo $base_url ?>contacto.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/owl.carousel.js"></script>

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
<script type="text/javascript">
  $(document).ready(function() {
    $('.fancybox').fancybox();
  });
</script>