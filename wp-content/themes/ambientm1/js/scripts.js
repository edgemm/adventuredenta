$(document).ready(function (){

	$(function() {
		
		// SVG fallback
		// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
		if (!Modernizr.svg) {
			var imgs = document.getElementsByTagName('img');
			var dotSVG = /.*\.svg$/;
			for (var i = 0; i != imgs.length; ++i) {
				if(imgs[i].src.match(dotSVG)) {
					imgs[i].src = imgs[i].src.slice(0, -3) + "png";
				}
			}
		}
	
	});
	
	$("a[rel^='prettyPhoto']").prettyPhoto();
	
	$(function(){
	    $('.carousel').carousel({
	      interval: 6000,
	      pause: "false"
	    });
	});

	$("article").on('click',function(){
	    $('.collapse').collapse('hide');
	});

	$(".peds a").hover(function () {
        $(".peds-popup").slideToggle();
    });

	$(".teens a").hover(function () {
        $(".teens-popup").slideToggle();
    })

	$(".ortho a").hover(function () {
        $(".ortho-popup").slideToggle();
    })

});



