$(document).ready(function() {

    // declare variable
    var scrollTop = $(".scrollTop");
    $(window).scroll(function() {
        var topPos = $(this).scrollTop();
        if (topPos > 100) {
            $(scrollTop).css("opacity", "1");
        } else {
            $(scrollTop).css("opacity", "0");
        }
    });

    // scroll speed
//    $('a[href^="#"]').click(function(){
//        var speed = 800;
//        var href= $(this).attr("href");
//        var target = $(href == "#" || href == "" ? 'html' : href);
//        var position = target.offset().top;
//        $("html, body").animate({scrollTop:position}, speed, "swing");
//        return false;
//    });

});
