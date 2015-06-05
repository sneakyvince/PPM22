
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
