

$(function() {
    //caches a jQuery object containing the header element
    var header = $("nav");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 500) {
            header.addClass("navBackground");
        } else {
            header.removeClass("navBackground");
        }
    });

    $('.menu a').smoothScroll();


    $(".fa-bars").on("click", function (){
        $(".navAMobile").css("display","block");

        $(".fa-bars").hide();
    });
    $(".navAMobile").on("click", function (){
        $(".navAMobile").css("display","none");
        $(".fa-bars").fadeIn();
    });
});
