$(document).ready(function(){

//hier is change 
$(".splash").hide().delay(1000).queue(function(next){
    $(this).addClass("animated bounceOutRight");
    next();
});

$('.menulogo').click(function(){
$(".menulogo").delay(1000).queue(function(nex){
    $(".menulogo").addClass("animated rubberBand");
    nex();


});
});

});
    
    

