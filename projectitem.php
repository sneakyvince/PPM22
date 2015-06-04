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
        <img src="http://placehold.it/920x400" id="bigimage" />
        <h1>Loods 8</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt magni, ex vel aperiam accusamus minus! Ullam porro assumenda error repudiandae molestiae neque inventore voluptatum asperiores eum? Quibusdam, minima molestias beatae aut doloremque blanditiis aliquid, unde optio iure autem porro voluptatum veritatis aperiam quod, velit commodi eaque iusto distinctio pariatur quas reprehenderit nisi. Perferendis iusto mollitia veniam, molestias eveniet, laboriosam odit.</p>
        
		<div class="thumbnailcontainer">
			<img class="thumbnail" onclick="changePic(this.alt);" alt="http://placehold.it/920x400/000000/whitesmoke" src="http://placehold.it/100x100" />
			<img class="thumbnail" onclick="changePic();" src="http://placehold.it/100x100" />
			<img class="thumbnail" onclick="changePic();" src="http://placehold.it/100x100" />
			<img class="thumbnail" onclick="changePic();" src="http://placehold.it/100x100" />
			<img class="thumbnail" onclick="changePic();" src="http://placehold.it/100x100" />
			<img class="thumbnail" onclick="changePic();" src="http://placehold.it/100x100" />
			<img class="thumbnail" onclick="changePic();" src="http://placehold.it/100x100" />
		</div>
     
     <?php include('php/footer.php'); ?>
      </div>
  </body>
</html>