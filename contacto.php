<?php include('includes/head.php'); 
include('includes/header.php');  ?>

<section>
  <div id="cabecera_contacto">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="titulos"><span>CONTACTANOS</span></h1>
          <h2>Si necesitas más información, te invitamos a contactarnos.</h2>

          <div id="sociales_grandes">
            <a href="https://www.facebook.com/fenixargentina/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://twitter.com/fenix?lang=es" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/fenix.entertainment.group/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.youtube.com/user/Fenixproductora" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="row">
        <!--<div class="col-sm-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.1783198010303!2d-58.368797984212634!3d-34.62493376612902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a334cdd0733515%3A0xb9d81e838f2bf800!2sAzopardo+1487%2C+C1107ADY+CABA!5e0!3m2!1ses-419!2sar!4v1507565767800" width="100%" height="246" frameborder="0" style="border:0" allowfullscreen></iframe>
          <br /><br />
          <b>Teléfono:</b> (+54 11 ) 5297-4300<br />
          <b>Dirección:</b> Azopardo 1487 - 3er piso (CABA)<br />
          <b>Email:</b> recepcion@fenix.com.ar
        </div>-->
        <div class="col-sm-12">
          <form action="mail-landing.php" method="POST" autocomplete="off">
            <input type="text" name="nombre" placeholder="Nombre" class="input_contacto" autocomplete="off" />
            <input type="text" name="apellido" placeholder="Apellido" class="input_contacto" autocomplete="off" />
            <input type="email" name="email" placeholder="Email" class="input_contacto" autocomplete="off" />
            <input type="text" name="telefono" placeholder="Teléfono" class="input_contacto" autocomplete="off" />
            <input type="text" name="mensaje" placeholder="Mensaje" class="input_contacto" autocomplete="off" />
            <input type="submit" name="submit" value="Enviar" id="btn_enviar_contacto" />
          </form>
        </div>
      </div>
    </div>
  </div>

</section>

<?php 
include('includes/footer.php');
include('includes/scripts.php');
  ?>