    <meta charset="utf-8" />
    <title>Five Elephants</title>
   
    <!--Import CSS Styles -->
    <link href="css/reset.css" rel="stylesheet" /> <!-- Reset All CSS Styles -->
    <link href="css/animate.css" rel="stylesheet" /> <!-- Animations Stylesheet by Internet -->
    <link href="css/style.css" rel="stylesheet" /> <!-- Default Stylesheet -->
    <link href="fonts/fonts.css" rel="stylesheet" /> <!-- Import Custom Fonts -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" /> <!-- Import Font Awesome (For icons and shit) -->

    <!-- Import Script Files -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- Import JQuery -->
    <script src="js/script.js"  type="text/javascript"></script> <!-- Fade In Animatie -->

    <!-- Send Google Analytics Stats -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-61967638-3', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- Function form valideren -->
    <script>
var emailFilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;       
var specialChars = /[^a-z ]/;

function checkNaam(){
    var naam = document.getElementById('naam').value;
    if (naam == null || naam == "" || specialChars.test(naam) == true ){
       document.getElementById('naam').style.borderColor = 'red';
       alert("Vul je naam in");
    }else
    {
        document.getElementById('naam').style.borderColor = 'green';
    }
       
}   

function checkEmail(){
  var email = document.getElementById('email').value;

  if(email == null || email == "" || emailFilter.test(email) == true){
    document.getElementById('email').style.borderColor = 'red';
    alert("Vul je email in");
  }
  else{
    document.getElementById('email').style.borderColor = 'green';
  }
          }   
function checkBericht(){
var bericht = document.getElementById('bericht').value;

  if(bericht == null || bericht == ""){
    document.getElementById('bericht').style.borderColor = 'red';
    alert("Vul een bericht in");
  }
}
      
 function checkAll(){
     checkBericht();
     checkNaam();
     checkEmail();
 }
    </script>