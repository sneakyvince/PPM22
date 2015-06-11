<?php
    session_start();
    require_once( 'couch/cms.php' );
?>
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

    
       
       

        <img src=<cms:editable name='image' width='920' height='400' type='image' />" />
        <h1><cms:editable name='titel' label='Titel Homepagina' desc='Bijvoorbeeld: Over Ons' type='text' /></h1>
        
        <div id="test"><cms:editable name='content' label='Tekst Homepagina' desc='Tekst' type='richtext' /></div>
     
     
     <?php include('php/footer.php'); ?>
      </div>
  </body>
</html>
<?php COUCH::invoke(); ?>