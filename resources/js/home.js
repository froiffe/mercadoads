import Swiper from 'swiper';


// var swiperHomeSolutions = new Swiper('.main-home .section-solutions .swiper-container', {
//     loop: false,
//     navigation: true,
//     pagination: false,
//     // centeredSlides: true,
//     // centeredSlidesBounds: true,

//     slidesPerView: 1,
//     spaceBetween: 0,


//     pagination: {
//         el: '.main-home .section-solutions .swiper-pagination',
//         clickable: true,
//     },
//     // navigation: {
//     //     nextEl: '.main-home .section-solutions .swiper-button-next',
//     //     prevEl: '.main-home .section-solutions .swiper-button-prev',
//     // },

//     // breakpoints: {
//     //   // 320: {
//     //   //   slidesPerView: 1,
//     //   // },
//     //   // 481: {
//     //   //   slidesPerView: 2,
//     //   // },
//     //   // 681: {
//     //   //   slidesPerView: 3,
//     //   // },
//     //   // 921: {
//     //   //   slidesPerView: 3,
//     //   // },
//     //   1441: {
//     //     slidesPerView: 5,
//     //     slidesPerColumn: 3,
//     //     spaceBetween: 45,
//     //   },
//     // }

// });


var swiperHomeCases = new Swiper('.main-home .section-cases-slider .swiper-container', {
    loop: false,
    navigation: true,
    pagination: false,

    slidesPerView: 1,
    spaceBetween: 0,


    navigation: {
        nextEl: '.main-home .section-cases-slider .swiper-button-next',
        prevEl: '.main-home .section-cases-slider .swiper-button-prev',
    },

});


var swiperHomeInsights = new Swiper('.main-home .section-insights .swiper-container', {
    loop: true,
    slidesPerView: 'auto',
    navigation: false,
    pagination: true,
    centeredSlides: true,
    centeredSlidesBounds: true,
    pagination: {
        el: '.main-home .section-insights .swiper-pagination',
        clickable: true,
    },
    on: {
        touchStart: function () {
            //if(window['scroll']) window['scroll'].stop();
        },
        touchEnd: function () {
            //if(window['scroll']) window['scroll'].start();
        },
    },

    breakpoints: {
        1: {
            loop: true,
            slidesPerView: 'auto',
            navigation: false,
            pagination: true,
            centeredSlides: true,
            centeredSlidesBounds: true,
            pagination: {
                el: '.main-home .section-insights .swiper-pagination',
                clickable: true,
            },
        },
        1024: {
            loop: true,
            slidesPerView: 'auto',
            navigation: false,
            pagination: true,
            centeredSlides: true,
            centeredSlidesBounds: true,
            pagination: {
                el: '.main-home .section-insights .swiper-pagination',
                clickable: true,
            },
        },
    }
});

// var swiperHomeInsights = new Swiper('.main-home .section-insights .swiper-container', {
//     loop: true,
//     slidesPerView: 'auto',
//     navigation: false,
//     pagination: true,
//     centeredSlides: true,
//     centeredSlidesBounds: true,
//     pagination: {
//         el: '.main-home .section-insights .swiper-pagination',
//         clickable: true,
//     },

//     breakpoints: {
//      1: {
//             loop: true,
//             slidesPerView: 'auto',
//             navigation: false,
//             pagination: true,
//             centeredSlides: true,
//             centeredSlidesBounds: true,
//             pagination: {
//                 el: '.main-home .section-insights .swiper-pagination',
//                 clickable: true,
//             },
//         },
//         1024: {
//             loop: true,
//             slidesPerView: 'auto',
//             navigation: false,
//             pagination: true,
//             centeredSlides: true,
//             centeredSlidesBounds: true,
//             pagination: {
//                 el: '.main-home .section-insights .swiper-pagination',
//                 clickable: true,
//             },
//       },
//     }
// });





var swiperCases = new Swiper('.main-casos-exito .section-cases-secondary .swiper-container', {
    loop: false,
    navigation: false,
    pagination: false,
    on: {
        touchStart: function () {
            //if(window['scroll']) window['scroll'].stop();
        },
        touchEnd: function () {
            //if(window['scroll']) window['scroll'].start();
        },
    },
    breakpoints: {
        1: {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: false,
            navigation: false,
            pagination: false,
        },
        1440: {
            slidesPerView: 3,
            spaceBetween: 0,
            loop: false,
            navigation: false,
            pagination: false,
        },
    }

});


var swiperCasesDetail = new Swiper('.main-casos-exito-detail .section-formato-relacionados .swiper-container', {
    loop: false,
    navigation: false,
    pagination: false,
    navigation: {
        nextEl: '.main-casos-exito-detail .section-formato-relacionados .swiper-button-next',
        prevEl: '.main-casos-exito-detail .section-formato-relacionados .swiper-button-prev',
    },

    on: {
        touchStart: function () {
            //if(window['scroll']) window['scroll'].stop();
        },
        touchEnd: function () {
            //if(window['scroll']) window['scroll'].start();
        },
    },
    breakpoints: {
        1: {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: false,
            pagination: false
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 0,
            loop: false,
            pagination: false
        },
    }

});



const swiperSolutionsDetail = new Swiper('.main-solutions-detail .section-formato-relacionados .swiper-container', {
    loop: false,
    navigation: false,
    pagination: false,
    navigation: {
        nextEl: '.main-solutions-detail .section-formato-relacionados .swiper-button-next',
        prevEl: '.main-solutions-detail .section-formato-relacionados .swiper-button-prev',
    },
    on: {
        touchStart: function () {
            //if(window['scroll']) window['scroll'].stop();
        },
        touchEnd: function () {
            //if(window['scroll']) window['scroll'].start();
        },
    },
    breakpoints: {
        1: {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: false,
            pagination: false,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 0,
            loop: false,
            pagination: false,
        },
    }

});

var swiperAudiencias = new Swiper('.main-audiencias .section-audiencias-como .swiper-container', {
    spaceBetween: 0,
    slidesPerView: 1,
    spaceBetween: 0,
    loop: false,
    pagination: true,
    noSwiping: false,

    speed: 1000,
    autoplay: {
        delay: 2000,
        disableOnInteraction: true,
    },
    navigation: {
        nextEl: '.main-audiencias .section-audiencias-como .swiper-button-next',
        prevEl: '.main-audiencias .section-audiencias-como .swiper-button-prev',
    },

    pagination: {
        el: '.main-audiencias .section-audiencias-como .swiper-pagination',
        clickable: true,
    },
    on: {
        touchStart: function () {
            //if(window['scroll']) window['scroll'].stop();
        },
        touchEnd: function () {
            //if(window['scroll']) window['scroll'].start();
        },
    },
    breakpoints: {
        1: {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: false,
            pagination: false
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 0,
            loop: false,
            pagination: false
        },
    },
});
var swiperInsights = new Swiper('.main-insights .section-insights-destacado-slider .swiper-container', {
    loop: false,
    navigation: false,
    pagination: false,
    // centeredSlides: true,
    // centeredSlidesBounds: true,

    slidesPerView: 1,
    spaceBetween: 0,

    on: {
        touchStart: function () {
            //if(window['scroll']) window['scroll'].stop();
        },
        touchEnd: function () {
            //if(window['scroll']) window['scroll'].start();
        },
    },
    // pagination: {
    //     el: '.main-insights .section-insights-destacado-slider .swiper-pagination',
    //     clickable: true,
    // },
    // navigation: {
    //     nextEl: '.main-insights .section-insights-destacado-slider .swiper-button-next',
    //     prevEl: '.main-insights .section-insights-destacado-slider .swiper-button-prev',
    // },

    // breakpoints: {
    //   // 320: {
    //   //   slidesPerView: 1,
    //   // },
    //   // 481: {
    //   //   slidesPerView: 2,
    //   // },
    //   // 681: {
    //   //   slidesPerView: 3,
    //   // },
    //   // 921: {
    //   //   slidesPerView: 3,
    //   // },
    //   1441: {
    //     slidesPerView: 5,
    //     slidesPerColumn: 3,
    //     spaceBetween: 45,
    //   },
    // }

});


var swiperNosotrosRazones = new Swiper('.main-nosotros .section-nosotros-razones .swiper-container', {
    loop: false,
    navigation: true,
    pagination: false,
    slidesPerView: 1,
    spaceBetween: 0,
    speed: 2000,
    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
    },
    pagination: {
        el: '.main-nosotros .section-nosotros-razones .swiper-pagination',
        clickable: true,
    },
    on: {
        touchStart: function () {
            //if(window['scroll']) window['scroll'].stop();
        },
        touchEnd: function () {
            //if(window['scroll']) window['scroll'].start();
        },
    },
    breakpoints: {
        1: {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: false,
            navigation: false,
            pagination: true,
            pagination: {
                el: '.main-nosotros .section-nosotros-razones .swiper-pagination',
                clickable: true,
            },
        },
    }
});

$('body').on('click', '.section-nosotros-razones .razones-slider-container .razones-slider-wrapper .razones-slide .area-txt .accordion-btn', function () {
    swiperNosotrosRazones.autoplay = false;
})


window['swiperNosotrosNumeros'] = new Swiper('.main-nosotros .section-nosotros-numeros .swiper-container', {
    loop: false,
    navigation: false,
    pagination: true,

    speed: 2000,
    autoplay: {
        delay: 2000,
    },

    on: {
        touchStart: function () {
            //if(window['scroll']) window['scroll'].stop();
        },
        touchEnd: function () {
            //if(window['scroll']) window['scroll'].start();
        },
    },
    pagination: {
        el: '.main-nosotros .section-nosotros-numeros .swiper-pagination',
        clickable: true,
    },

    breakpoints: {
        1: {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: false,
            navigation: false,
            pagination: true,
            pagination: {
                el: '.main-nosotros .section-nosotros-numeros .swiper-pagination',
                clickable: true,
            },
        },

    }
});
if ($('.main-nosotros .section-nosotros-numeros .swiper-container').length > 0) {
    window['swiperNosotrosNumeros'].autoplay.stop();
}