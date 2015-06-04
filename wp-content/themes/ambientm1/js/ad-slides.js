(function($){

$( '.ad-slides' ).slidesjs({
	width: 1170,
	height: 500,
	play: {
		active: false,
		interval: 10000,
		auto:true,
		swap: true
	},
	effect: {
		slide: {
			speed: 1500
		}
	},
	pagination: {
		active: false
	},
	navigation: {
		active: true
	},
	callback: {		
		start: function() {
			$( '.ad-slide-content' ).hide();
		},
		complete: function() {
			$( '.ad-slide-content' ).hide().fadeIn( 800 );
		}
	}
});

// Hide slider navs when less than 2 slides
var numSlides = $( '.ad-slide' ).length;
if (numSlides <= 1) {
	$( '.slidesjs-navigation' ).css( 'display', 'none' );
}

})(jQuery);