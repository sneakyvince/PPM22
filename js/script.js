$(document).ready(function() {

<<<<<<< HEAD
    $(".splash").show().delay(1000).queue(function(next) {
        $(this).addClass("animated bounceOutRight");
        next();
    });
=======
//hier is change 
$(".splash").hide().delay(1000).queue(function(next){
    $(this).addClass("animated bounceOutRight");
    next();
});
>>>>>>> origin/master

    $('.menulogo').click(function() {
        $(".menulogo").delay(1000).queue(function(nex) {
            $(".menulogo").addClass("animated rubberBand");
            nex();


        });
    });

});
function changePic(imgName){
	document.getElementById("bigimage").src = imgName;
}
