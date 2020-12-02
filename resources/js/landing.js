require('./slick.min');
require('./jquery.countdown.min');


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
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		mobileFirst:true,
		responsive: [
		{
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 992,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 1,
	        dots: true
	      }
	    }]
	});
}