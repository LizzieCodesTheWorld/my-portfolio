$(function(){

	console.log("It's working");
	$('.menu a').smoothScroll();

});

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
});