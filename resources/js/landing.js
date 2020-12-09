require('./slick.min');
require('./jquery.countdown.min');


$(document).ready(function(){
	if($('.main-landing').length){
		initCountDown();
		initSlides();
	}

	
	
});

function initCountDown(){
	let hourFinished = $("#countdown-time").attr('data-countdown');
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
	$('.slide-mp').each(function(){
		var slidesDesktop = $(this).attr("slides-to-show");

		$(this).slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			mobileFirst:true,
			responsive: [
			{
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 992,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        dots: true
		      }
		    }]
		});



	});
	
	$('.slick-dots').each(function(){
	    if($(this).find('li').length <2 ){
	    	$(this).remove();
	    }
	});
}