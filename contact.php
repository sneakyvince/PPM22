<?php
session_start();
?>
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

    
       
       

        <img src="http://placehold.it/921x400" />
        <h1>About Us</h1>
        
     <form action="" method="post">
Bericht: <input type="text" name="bericht" id="bericht">
<br>
Naam:<input type="text" name="naam" id="naam">
<br>
E-mail:<input type="text" name="email" id="email">
<br>
<input type="button" value="CHECK ALL" id="checkall" onclick = "checkAll()"></td>
  	</form>
</body> 
     <?php include('php/footer.php'); ?>