<?php
session_start();
$naam = 'Five Elephants';
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?php echo $naam; ?></title>
    <link href="css/reset.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/fonts.css" rel="stylesheet" />
  </head>
  <body>
    <div class="menu">
      <h1 class="menulogotext"><?php echo $naam; ?></h1>
      <img src="img/logo.png" alt="logo" class="menulogo"/>
      <ul>
        <li><a class="menulink" href="">Home</a></li>
        <li><a class="menulink" href="">About Us</a></li>
        <li><a class="menulink" href="">Hallo</a></li>
        <li><a class="menulink" href="">Work</a></li>
        <li><a class="menulink" href="">Contact</a></li>
      </ul>
    </div>
    <div class="content">
      hallo jongeman
    </div>
  </body>
</html>