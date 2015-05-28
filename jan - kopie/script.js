$(document).ready(function(){

//$('.splash').addClass('animated bounceOutLeft');

$(".splash").show().delay(1000).queue(function(next){
    $(this).addClass("animated bounceOutRight");
    next();
});

});
    
    

