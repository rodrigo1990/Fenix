
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url ?>js/bootstrap.min.js"></script>
<script src="<?php echo $base_url ?>js/menu.js"></script>
<script src="<?php echo $base_url ?>js/parallax.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://vjs.zencdn.net/7.1.0/video.js"></script>
<script>
     $('.owl-one').owlCarousel({
    loop:true,
    margin:10,
    autoPlay:false,
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
<script type="text/javascript">
  $(document).ready(function() {
    $('.fancybox').fancybox();
    $("header").css({
            background:"rgba(0,0,0,0)",
            transition:"background 0.5s"
        });
      $("#cssmenu").fadeOut();
      $("#logo").css({
        width:"70%",
        transition:"width 0.5s"
      });
  });
</script>
<script>
  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();

    if(scroll==0){
        $("header").css({
            background:"rgba(0,0,0,0)",
            transition:"background 0.5s"
        });
      $("#cssmenu").fadeOut();
        $("#logo").css({
            width:"70%",
            transition:"width 0.5s"
        });

    }else{
        $("header").css({
            background:"rgba(0,0,0,0.90)",
            transition:"background 0.5s"
        });
          $("#cssmenu").fadeIn();
        $("#logo").css({
            width:"100%",
            transition:"width 0.5s"
        });
    }
    // Do something
});
</script>