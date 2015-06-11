
$(document).ready(function() {


$(document).ready(function(){

$('.menulogo').click(function(){
$(".menulogo").delay(1000).queue(function(nex){
    $(".menulogo").addClass("animated rubberBand");
    nex();



});
});


$(document).ready(function(){

$(".splash").show().delay(1000).queue(function(next){
    $(this).addClass("animated bounceOutRight");
    next();
});

$('.menulogo').click(function(){
$(".menulogo").delay(1000).queue(function(nex){
    $(".menulogo").addClass("animated rubberBand");
    nex();


});
});


var cookieName = 'yourcookiename';
$(function() {
    checkCookie();

});

function checkCookie() {
    if (document.cookie.length > 0 && document.cookie.indexOf(cookieName + '=') != -1) {
           $(".splash").hide();
    } else {
    		$(".splash").show().delay(1000).queue(function(next){
    		$(this).addClass("animated bounceOutRight");
    		next();
			});

            document.cookie = cookieName + "=1";
    }
}

});

function changePic(imgName){
	document.getElementById("bigimage").src = imgName;
}

});

function checkCookie() {
    if (document.cookie.length > 0 && document.cookie.indexOf(cookieName + '=') != -1) {
           $(".splash").hide();
    } else {
    		$(".splash").show().delay(1000).queue(function(next){
    		$(this).addClass("animated bounceOutRight");
    		next();
			});

            document.cookie = cookieName + "=1";
    }
}

});

// email validation functions

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

  if(email == null || email == "" || emailFilter.test(email) == false){
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
