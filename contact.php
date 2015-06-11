<?php session_start();
require_once( 'couch/cms.php' );
?>
<head>
    <?php include( 'php/head.php'); ?>
</head>

<body>

    <div class="splash">
        <img src="img/logo.png" id="splashlogo">
        <h1 id="splashtekst">Five Elephants</h1>
    </div>

    <?php include( 'php/menu.php'); ?>
    <div class="container">
      <div class="content">
        <img src="<cms:editable name='image' width='920' height='400' type='image' />" />
        <h1><cms:editable name='titel' label='Titel About Us' desc='Bijvoorbeeld: Over Ons' type='text' /></h1>
        
        <div id="test"><cms:editable name='content' label='Tekst About Us' desc='Tekst' type='richtext' /></div>
        
<form action="" method="post" class="basic-grey">
      <label>
        <span>Bericht</span>
        <textarea id="bericht" name="bericht" placeholder="Your Message to Us"></textarea>
    </label> 
    
    <label>
        <span>Naam</span>
        <input id="naam" type="text" name="naam" placeholder="Your Full Name" />
    </label>
    
    <label>
        <span>E-mail</span>
        <input id="email" type="email" name="email" placeholder="Valid Email Address" />
    </label>
    
     <label>
        <span>&nbsp;</span> 
        <input type="button" class="button" value="Verstuur" onclick="checkAll()" /> 
    </label>    
</form>
</body> 
     <?php include('php/footer.php'); ?>
<?php COUCH::invoke(); ?>

