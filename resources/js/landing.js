require('./jquery.countdown.min');
require('./slick.min');

$(document).ready(function(){
	if($('.main-landing').length){
		initCountDown();
		initSlides();
	}

	
	
});

function initCountDown(){
	let hourFinished = '2020/12/17 10:00:00';
	$("#countdown-time")
	  .countdown(hourFinished, function(event) {
	    $(this).find('.days').find('.count').text(
	      event.strftime('%D')
	    );

	     $(this).find('.hours').find('.count').text(
	      event.strftime('%H')
	    );

	      $(this).find('.minutes').find('.count').text(
	      event.strftime('%M')
	    );

	       $(this).find('.seconds').find('.count').text(
	      event.strftime('%S')
	    );
	});

	  $( ".counter .container" ).animate({opacity: "1"}, 500);
}

function initSlides(){
	$('.slide-mp').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: true
	});
}