
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url ?>js/bootstrap.min.js"></script>
<script src="<?php echo $base_url ?>js/menu.js"></script>
<script src="<?php echo $base_url ?>js/parallax.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/owl.carousel.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('.fancybox').fancybox();
    $("header").css({
            background:"rgba(0,0,0,1)",
            transition:"background 0.5s",
            padding:"8px 0px"
        });
    $("#logo").css({
        width:"70%",
        transition:"width 0.5s"
      });
    $("#cssmenu > ul > li > a").css({
        fontSize:"1.40rem"
    });
    $("#espacio_header").css({
        paddingTop:"40px"
    });
      
  });
</script>
<script>
  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();

    if(scroll==0){
        $("header").css({
            background:"rgba(0,0,0,1)",
            transition:"background 0.5s"
        });
        $("#logo").css({
            width:"70%",
            transition:"width 0.5s"
        });
      $("#cssmenu > ul > li > a").css({
        fontSize:"1.40rem"
        });
        $("#espacio_header").css({
            paddingTop:"40px"
        });
        

    }else{
        $("header").css({
            background:"rgba(0,0,0,0.90)",
            transition:"background 0.5s"
        });
        $("#logo").css({
            width:"100%",
            transition:"width 0.5s"
        });
        $("#cssmenu > ul > li > a").css({
        fontSize:"1.90rem"
        });
        $("#espacio_header").css({
            paddingTop:"60px"
        });
        
    }
    // Do something
});
</script>