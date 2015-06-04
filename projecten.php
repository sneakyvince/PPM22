<?php
session_start();
?>
<!doctype HTML>
<html>
  <head>
    <?php include('php/head.php'); ?>
  </head>
  <body>

  <div class="splash">
    <img src="img/logo.png" id="splashlogo">
    <h1 id="splashtekst">Five Elephants</h1>
  </div>

    <?php include('php/menu.php'); ?>
    <div class="container">
      <div class="content">
        <img src="http://placehold.it/920x400" />
        <h1>Projecten</h1>
        <p>Hieronder vindt u een overzicht van onze projecten. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, nulla. Wilt u meer informatie of heeft u een vraag? Neem dan <a href="contact.php">contact met ons op</a>.</p>
        
        <div class="projectitem"><a href="#"><img class="resize" src="http://placehold.it/425x425"></a><h2 class="projectitemtitle">Loods 8</h2></div>
        <div class="projectitem"><a href="#"><img class="resize" src="http://placehold.it/425x425"></a><h2 class="projectitemtitle">Atlas Herenkapper</h2></div>
        <div class="projectitem"><a href="#"><img class="resize" src="http://placehold.it/425x425"></a><h2 class="projectitemtitle">Fusion</h2></div>
        <div class="projectitem"><a href="#"><img class="resize" src="http://placehold.it/425x425"></a><h2 class="projectitemtitle">Metrieken</h2></div>
        <div class="projectitem"><a href="#"><img class="resize" src="http://placehold.it/425x425"></a><h2 class="projectitemtitle">Hendriks</h2></div>
     
     <?php include('php/footer.php'); ?>
      </div>
  </body>
</html>