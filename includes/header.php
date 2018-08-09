  <body>
  <!-- SDK FOR FACEBOOK PLUGIN -->   
  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9&appId=134457396644528";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>
  <!-- END OF SDK FOR FACEBOOK PLUGIN -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-sm-2 text_center_mobile">
          <a href="<?php echo $base_url ?>index.php" id="logo-container"><img src="<?php echo $base_url ?>imagenes/logo.png" alt="TravelTime" id="logo" /></a>
        </div>
        <div class="col-sm-8 text-center">
          <div id="cssmenu" style="position: relative; z-index:999;">
            <ul>
               <li <?php if(($url_actual == "index") || ($url_actual == "")) { ?>class="current"<?php } ?>><a href="<?php echo $base_url ?>index.php" style="margin-left: 0px; padding-left: 0px;">HOME</a></li>
               <li <?php if($url_actual == "productora") { ?>class="current"<?php } ?>><a href="<?php echo $base_url ?>productora.php">¿QUIENES SOMOS?</a></li>
               <!--<li <?php if($url_actual == "venues") { ?>class="current"<?php } ?>><a href="<?php echo $base_url ?>venues">VENUES</a></li>-->
               <!--<li <?php if($url_actual == "produccion") { ?>class="current"<?php } ?>><a href="<?php echo $base_url ?>produccion">PRODUCCIÓN</a></li>-->
               <li <?php if($url_actual == "contacto") { ?>class="current"<?php } ?>><a href="<?php echo $base_url ?>contacto.php" style="margin-right: 0px; padding-right: 0px;">CONTACTO</a></li>
            </ul>
          </div>
        </div>
        
        <div class="col-sm-2 text-right text_center_mobile hidden" id="redes_header">
          <a href="https://www.facebook.com/fenixargentina/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://twitter.com/fenix?lang=es" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/fenix.entertainment.group/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="https://www.youtube.com/user/Fenixproductora" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
</header>
<div id="espacio_header"></div>