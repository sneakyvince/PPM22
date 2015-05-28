<?php
session_start();
$naam = 'Five Elephants';
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?php echo $naam; ?></title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="test.js"  type="text/javascript"></script>
    <link href="css/reset.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/fonts.css" rel="stylesheet" />
  </head>
  <body>

  <div id="splash">
  <img src="img/logo.png" id="splashlogo">
  <h1 id="splashtekst">Waar is je website?</h1>
  </div>

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
    <div class="container">
      <div class="content">
        <img src="http://placehold.it/921x400" />
        <h1>About Us</h1>
        
        <p id="test">
        Lorem ipsum dolor sit amet, vix et suas mediocritatem, cibo error in eam, has ne clita decore postea. Has falli oportere efficiendi et. Id vis eius referrentur. In ius summo viris imperdiet, ei nec vocibus eligendi, mandamus gubergren rationibus eu sea. No dico laudem est, vel ea porro eirmod veritus.

Per movet percipit cu, nec at erat mucius. Essent principes deseruisse eum et. Apeirian explicari sed ea, at sit iudico postulant patrioque. In sit omnes tollit tibique, id essent maluisset molestiae pro, nec nominati posidonium concludaturque te. Natum mutat soluta et pro, eu illud ignota volumus duo. Bonorum reprehendunt nec eu, blandit moderatius ad duo, his an vocent vidisse elaboraret.

Ne mea summo delicata, sed molestiae vulputate eu. Malis tamquam prompta eam et, nonumes corpora molestie est te. Senserit maiestatis repudiandae eos ut, no sit ullum doctus timeam. Adhuc definitionem id mea. No vel probo democritum.
     
     </p>
      </div>
    <div class="content">
    </div>
  </body>
</html>