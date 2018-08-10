<script src="js/preloader.js" type="text/javascript"></script>
<script  src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script  type="text/javascript" src="js/jquery.fancybox.min.js?v=2.1.5"></script>
<script  src="js/responsiveslides.min.js"></script>

<script async>
    (function($){
$(document).ready(function(){

$("#cssmenu").menumaker({
    title: "Menu",
    breakpoint: 975,
    format: "multitoggle"
});

});
})(jQuery);

</script>
<script type="text/javascript" async>
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
<script async>
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