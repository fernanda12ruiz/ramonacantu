/* ARTICULOS DEL BLOG */
$('.articulos-boton a').click(function(){
	$('html, body').animate({
	  scrollTop: $( $(this).attr('href') ).offset().top + 100
	}, 1000);
	return false;
});
/* END ARTICULOS DEL BLOG */


$('.s-1').click(function(){
	$('ul.slides li:nth-child(1)').addClass('active').removeClass('inactive-left inactive-right inactive-back');
	$('ul.slides li:nth-child(2)').addClass('inactive-right').removeClass('active inactive-left inactive-back');
	$('ul.slides li:nth-child(3)').addClass('inactive-back').removeClass('active inactive-left inactive-right');
	$('ul.slides li:nth-child(4)').addClass('inactive-left').removeClass('active inactive-back inactive-right');

});

$('.s-2').click(function(){
	$('ul.slides li:nth-child(2)').addClass('active').removeClass('inactive-left inactive-right inactive-back');
	$('ul.slides li:nth-child(3)').addClass('inactive-right').removeClass('active inactive-left inactive-back');
	$('ul.slides li:nth-child(4)').addClass('inactive-back').removeClass('active inactive-right inactive-left');
	$('ul.slides li:nth-child(1)').addClass('inactive-left').removeClass('active inactive-right inactive-back');


});

$('.s-3').click(function(){
	$('ul.slides li:nth-child(3)').addClass('active').removeClass('inactive-back inactive-left inactive-right');
	$('ul.slides li:nth-child(4)').addClass('inactive-right').removeClass('inactive-left active inactive-back');
	$('ul.slides li:nth-child(1)').addClass('inactive-back').removeClass('active inactive-left inactive-right');
	$('ul.slides li:nth-child(2)').addClass('inactive-left').removeClass('active inactive-right inactive-back');	
});

$('.s-4').click(function(){
	$('ul.slides li:nth-child(4)').addClass('inactive-active').removeClass('inactive-left inactive-right inactive-back');
	$('ul.slides li:nth-child(1)').addClass('inactive-right').removeClass('active inactive-left inactive-back');
	$('ul.slides li:nth-child(2)').addClass('inactive-back').removeClass('active inactive-right inactive-left');
	$('ul.slides li:nth-child(3)').addClass('inactive-left').removeClass('inactive-back active inactive-right');	
});

/* SLIDER VERSION MOVIL */

$('.t-dots-movil .s-1').click(function(){
	$('ul.slides-movil li:nth-child(1)').css({
		"opacity" : "1"
	})

	$('ul.slides-movil li:nth-child(2)').css({
		"opacity" : "0"
	})

	$('ul.slides-movil li:nth-child(3)').css({
		"opacity" : "0"
	})

	$('ul.slides-movil li:nth-child(4)').css({
		"opacity" : "0"
	})
});

$('.t-dots-movil .s-2').click(function(){
	$('ul.slides-movil li:nth-child(2)').css({
		"opacity" : "1"
	})

	$('ul.slides-movil li:nth-child(3)').css({
		"opacity" : "0"
	})

	$('ul.slides-movil li:nth-child(4)').css({
		"opacity" : "0"
	})

	$('ul.slides-movil li:nth-child(1)').css({
		"opacity" : "0"
	})
});

$('.t-dots-movil .s-3').click(function(){
	$('ul.slides-movil li:nth-child(3)').css({
		"opacity" : "1"
	})

	$('ul.slides-movil li:nth-child(4)').css({
		"opacity" : "0"
	})

	$('ul.slides-movil li:nth-child(1)').css({
		"opacity" : "0"
	})

	$('ul.slides-movil li:nth-child(2)').css({
		"opacity" : "0"
	})
});

$('.t-dots-movil .s-4').click(function(){
	$('ul.slides-movil li:nth-child(4)').css({
		"opacity" : "1"
	})

	$('ul.slides-movil li:nth-child(1)').css({
		"opacity" : "0"
	})

	$('ul.slides-movil li:nth-child(2)').css({
		"opacity" : "0"
	})

	$('ul.slides-movil li:nth-child(3)').css({
		"opacity" : "0"
	})
});

/* END SLIDER VERSION MOVIL */

$('a.scroll-top').click(function(){
	$('html, body').animate({
	  scrollTop: $( $(this).attr('href') ).offset().top - 0
	}, 1000);
	return false;
});

$('.quote-ramona').hover(function(){
	$('.quote-ramona .quote-author img').css({
		"left" : "2rem"
	});
});

$('.quote-ramona').mouseleave(function(){
	$('.quote-ramona .quote-author img').css({
		"left" : "0"
	});
});

$('.quote-text.white-block').hover(function(){
	$('.white-block .quote-author img').css({
		"left" : "2rem"
	});
});

$('.quote-text.white-block').mouseleave(function(){
	$('.white-block .quote-author img').css({
		"left" : "0"
	});
});

$('.quote-text.green-block').hover(function(){
	$('.quote-text.green-block .quote-author img').css({
		"left" : "2rem"
	});
});

$('.quote-text.green-block').mouseleave(function(){
	$('.quote-text.green-block .quote-author img').css({
		"left" : "0"
	});
});

/*//// CARDS BIO ///*/
$('.card.l-1').hover(function(){
	$('.l-1 .arrow-lila').css({
		"border-color" : "transparent transparent transparent rgba(0,0,0,1)"
	});

	$('.card.l-1 h5').css({
		"color" : "#fff"
	});

	$('.card.l-1 hr').css({
		"border-color" : "#fff"
	});

	$('.card.l-1 p').css({
		"color" : "#fff"
	});
});

$('.card.l-1').mouseleave(function(){
	$('.l-1 .arrow-lila').css({
		"border-color" : "transparent transparent transparent rgba(182,199,237,1)"
	});

	$('.card.l-1 h5').css({
		"color" : "#000"
	});

	$('.card.l-1 hr').css({
		"border-color" : "#000"
	});

	$('.card.l-1 p').css({
		"color" : "#000"
	});
});

$('.card.l-2').hover(function(){
	$('.l-2 .arrow-lila').css({
		"border-color" : "transparent transparent transparent rgba(0,0,0,1)"
	});

	$('.card.l-2 h5').css({
		"color" : "#fff"
	});

	$('.card.l-2 hr').css({
		"border-color" : "#fff"
	});

	$('.card.l-2 p').css({
		"color" : "#fff"
	});
});

$('.card.l-2').mouseleave(function(){
	$('.l-2 .arrow-lila').css({
		"border-color" : "transparent transparent transparent rgba(182,199,237,1)"
	});

	$('.card.l-2 h5').css({
		"color" : "#000"
	});

	$('.card.l-2 hr').css({
		"border-color" : "#000"
	});

	$('.card.l-2 p').css({
		"color" : "#000"
	});
});

$('.card.y-1').hover(function(){
	$('.y-1 .arrow-yellow').css({
		"border-color" : "transparent transparent transparent rgba(0,0,0,1)"
	});

	$('.card.y-1 h5').css({
		"color" : "#fff"
	});

	$('.card.y-1 hr').css({
		"border-color" : "#fff"
	});

	$('.card.y-1 p').css({
		"color" : "#fff"
	});
});

$('.card.y-1').mouseleave(function(){
	$('.y-1 .arrow-yellow').css({
		"border-color" : "transparent transparent transparent rgba(248,249,3,1)"
	});

	$('.card.y-1 h5').css({
		"color" : "#000"
	});

	$('.card.y-1 hr').css({
		"border-color" : "#000"
	});

	$('.card.y-1 p').css({
		"color" : "#000"
	});
});

$('.card.y-2').hover(function(){
	$('.y-2 .arrow-yellow').css({
		"border-color" : "transparent transparent transparent rgba(0,0,0,1)"
	});

	$('.card.y-2 h5').css({
		"color" : "#fff"
	});

	$('.card.y-2 hr').css({
		"border-color" : "#fff"
	});

	$('.card.y-2 p').css({
		"color" : "#fff"
	});
});

$('.card.y-2').mouseleave(function(){
	$('.y-2 .arrow-yellow').css({
		"border-color" : "transparent transparent transparent rgba(248,249,3,1)"
	});

	$('.card.y-2 h5').css({
		"color" : "#000"
	});

	$('.card.y-2 hr').css({
		"border-color" : "#000"
	});

	$('.card.y-2 p').css({
		"color" : "#000"
	});
});

$('.card.p-1').hover(function(){
	$('.p-1 .arrow-peach').css({
		"border-color" : "transparent transparent transparent rgba(0,0,0,1)"
	});

	$('.card.p-1 h5').css({
		"color" : "#fff"
	});

	$('.card.p-1 hr').css({
		"border-color" : "#fff"
	});

	$('.card.p-1 p').css({
		"color" : "#fff"
	});
});

$('.card.p-1').mouseleave(function(){
	$('.p-1 .arrow-peach').css({
		"border-color" : "transparent transparent transparent rgba(255,224,188,1)"
	});

	$('.card.p-1 h5').css({
		"color" : "#000"
	});

	$('.card.p-1 hr').css({
		"border-color" : "#000"
	});

	$('.card.p-1 p').css({
		"color" : "#000"
	});
});

$('.card.p-2').hover(function(){
	$('.p-2 .arrow-peach').css({
		"border-color" : "transparent transparent transparent rgba(0,0,0,1)"
	});

	$('.card.p-2 h5').css({
		"color" : "#fff"
	});

	$('.card.p-2 hr').css({
		"border-color" : "#fff"
	});

	$('.card.p-2 p').css({
		"color" : "#fff"
	});
});

$('.card.p-2').mouseleave(function(){
	$('.p-2 .arrow-peach').css({
		"border-color" : "transparent transparent transparent rgba(255,224,188,1)"
	});

	$('.card.p-2 h5').css({
		"color" : "#000"
	});

	$('.card.p-2 hr').css({
		"border-color" : "#000"
	});

	$('.card.p-2 p').css({
		"color" : "#000"
	});
});

/*=== LINEAS DE TITULO ====*/
$('.slide-info').hover(function(){
	$('h1 span').css({
		"width" : "0",
		"opacity" : "0"
	});
});

$('.slide-info').mouseleave(function(){
	$('h1 span').css({
		"width" : "150px",
		"opacity" : "1"
	});
});

$('.intro-bio h2').hover(function(){
	$('.intro-bio hr').css({
		"width" : "0",
		"opacity" : "0"
	});
});

$('.intro-bio h2').mouseleave(function(){
	$('.intro-bio hr').css({
		"width" : "150px",
		"opacity" : "1"
	});
});

$('.slide-info.tratamientos-title').hover(function(){
	$('.tratamientos-title h2 span').css({
		"width" : "0",
		"opacity" : "0"
	});
});

$('.slide-info.tratamientos-title').mouseleave(function(){
	$('.tratamientos-title h2 span').css({
		"width" : "150px",
		"opacity" : "1"
	});
});

$('.main-text.main-1').hover(function(){
	$('.main-text.main-1 hr').css({
		"width" : "0",
		"opacity" : "0"
	});
});

$('.main-text.main-1').mouseleave(function(){
	$('.main-text.main-1 hr').css({
		"width" : "35%",
		"opacity" : "1"
	});
});

$('.brown h3').hover(function(){
	$('.brown hr').css({
		"width" : "0",
		"opacity" : "0"
	});
});

$('.brown h3').mouseleave(function(){
	$('.brown hr').css({
		"width" : "5rem",
		"opacity" : "1"
	});
});

var main = function() {

	var windowSize = $(window).width();

  $(".open").click(function() {
    $('.menu').css(
    	"left" , "0"
    );
  });

  if (windowSize > 1024){

	  $(".close").click(function() {
	    $('.menu').css(
	    	"left" , "-50%"
	    );
	  });

	}

	else if (windowSize < 415){

		$(".close").click(function() {
	    	$('.menu').css(
	    		"left" , "-100%"
	    	);
	  	});

	}

	else {
		$(".close").click(function() {
	    	$('.menu').css(
	    		"left" , "-75%"
	    	);
	  	});
	};
};

$(document).ready(main);