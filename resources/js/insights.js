import Swiper from 'swiper';

$('.campo.en').hide();
$('.campo.es').show();

$('#insights-contact').on('submit', function(e) {
    e.preventDefault();

    $('.loader').show();

    $.ajax({
        type: "POST",
        url: $(this).attr('action'),
        data: {
            form: $('#form').val(),
            email: $('#email').val()
        },
        dataType: "json",
        success: function (data, textStatus, xhr) {
            if( xhr.status == 200 ) {
                $('.form-content').hide();
                $('.descarga-content').show();
            }
        },
        error: function(xhr, textStatus, error) {
            //
        },
        done: function() {
            $('.loader').hide();
        }
    });
});

$('.radio-btn input[type="radio"]').on('click', function(e) {
    if($(this).val() == 'es') {
        $('.campo.en').hide();
        $('.campo.es').show();
    }
    else if($(this).val() == 'en') {
        $('.campo.es').hide();
        $('.campo.en').show();
    }
});

var swiperInsights = new Swiper('.main-insights .section-insights-ultimos .swiper-container', {
    loop: false,
    navigation: false,
    pagination: false,
    // centeredSlides: true,
    // centeredSlidesBounds: true,

    slidesPerView: 1,
    spaceBetween: 0,

    // pagination: {
    //     el: '.main-insights .section-insights-ultimos .swiper-pagination',
    //     clickable: true,
    // },
    navigation: {
        nextEl: '.main-insights .section-insights-ultimos .swiper-button-next',
        prevEl: '.main-insights .section-insights-ultimos .swiper-button-prev',
    },

    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      1023: {
        slidesPerView: 3,
        spaceBetween: 15,
      },
      1441: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    }

});
