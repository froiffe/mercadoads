
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



require('./bootstrap');
require('./home');
require('./solutions');
require('./contact');
require('./insights');
import Swiper from 'swiper';

import LocomotiveScroll from 'locomotive-scroll';
import { ssrCompile } from 'vue-template-compiler';
import { gsap, TimelineMax, CSSPlugin } from "gsap/all";


import Plyr from 'plyr';
const player = new Plyr('#player');

$(' .section-cases-banner .case-banner-container .area-txt .btn.play,.section-cases-slider .cases-slider-container .cases-slider-wrapper .case-slide .area-txt .btn.play').on('click', function (e) {
  e.preventDefault();
  player.play();
})
setTimeout(() => { player.poster = $('#player').attr('poster'); if (player) player.volume = 0.5; }, 1)
// GLOBAL
$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
window.scrollTo(0, 0);
gsap.registerPlugin(CSSPlugin);
window.mobileAndTabletcheck = function () {
  var check = false;
  (function (a) { if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true; })(navigator.userAgent || navigator.vendor || window.opera);
  return check;
};
let isMobile = ($(window).width() <= 1023) ? true : false;
let nw = isMobile;
var swiperHomeBrand;

function setCategory() {
  var slidebygroup = ($(window).width() > 1023) ? 15 : 9;
  var types = [];
  var indexx = swiperHomeBrand.activeIndex;

  var nn = indexx * 3;
  $('.section-brand-partners .brand-slider-container .brand-slide').each(function () {
      if ($(this).index() >= nn && $(this).index() < nn + slidebygroup) {
          types.push($(this).attr('data-type'));
      }
  })
  function onlyUnique(value, index, self) {
      return self.indexOf(value) === index;
  }
  function replaceAll(str, find, replace) {
      return str.replace(new RegExp(find, 'g'), replace);
  }
  // usage example:
  var unique = types.filter(onlyUnique); // returns ['a', 1, 2, '1']
  $('.section-brand-partners .category').fadeOut(300, function () {
      $('.section-brand-partners .category').html(replaceAll(unique.sort().toString(), ',', ' / ')).fadeIn(300);
  })
}

$(window).resize(function () {

  if ($('.main-home .section-brand-partners .swiper-container').length > 0) setTimeout(setCategory(), 1)
})
window.onload = function () {
  window.scrollTo(0, 0);

  $('html,body').scrollTop(0);

  window['scroll'] = new LocomotiveScroll({
    el: document.querySelector(".o-scroll"), elMobile: document.querySelector(".o-scroll"),
    smoothMobile: true,
    smooth: true, direction: "vertical", inertia: 1, class: "is-inview", scrollbarClass: "c-scrollbar", scrollingClass: "has-scroll-scrolling", draggingClass: "has-scroll-dragging", smoothClass: "has-scroll-smooth", initClass: "has-scroll-init", getSpeed: !1, getDirection: !1, firefoxMultiplier: 50
  });
  setTimeout(() => window.dispatchEvent(new Event('resize')), 10);
  swiperHomeBrand = new Swiper('.main-home .section-brand-partners .swiper-container', {
    loop: false,
    navigation: false,
    pagination: true,
    multipleActiveThumbs: true,
    // centeredSlides: true,
    // centeredSlidesBounds: true,
    watchSlidesVisibility: true,
    slidesPerView: 5,
    lazy: true,
    height: 52,
    slidesPerColumn: 3,
    spaceBetween: 45,
    slidesPerGroup: 5,
    slidesPerColumnFill: 'row',
    speed: 2000,
    autoplay: {
        delay: 2000,
        disableOnInteraction: true,
    },

    pagination: {
        el: '.main-home .section-brand-partners .swiper-pagination',
        clickable: true,
    },

    on: {
        init: function () {
        },
        slideChange: function () {
            setCategory()
        },
    },

    breakpoints: {
        1: {
            slidesPerView: 3,
            slidesPerColumn: 3,
            spaceBetween: 22,
            slidesPerGroup: 3,
            slidesPerColumnFill: 'row',
            loop: false,
            navigation: false,
            pagination: true,
            pagination: {
                el: '.main-home .section-brand-partners .swiper-pagination',
                clickable: true,
            },
        },
        1024: {
            slidesPerView: 5,
            slidesPerColumn: 3,
            spaceBetween: 45,
            slidesPerGroup: 5,
            slidesPerColumnFill: 'row',
            loop: false,
            navigation: false,
            pagination: true,
            pagination: {
                el: '.main-home .section-brand-partners .swiper-pagination',
                clickable: true,
            },
        },
    }

});


  scrollHome(scroll);
  var resizeTimeout;
  var resizeTimeout2;

  $(window).on('resize', function () {
    if (!window.mobileAndTabletcheck()) {

      clearTimeout(resizeTimeout);
      clearTimeout(resizeTimeout2);

      resizeTimeout = setTimeout(function () {
        window['scroll'].update();
        window['scroll'].destroy();
        $('html,body').scrollTop(0);
        $('body').css('overflow', 'hidden');
        $('html,body').scrollTop(0);
        $('[data-scroll],[data-scroll-section]').attr('style', '');
        $('[data-scroll]').removeClass('is-inview');
        $('.section-solutions').css('overflow', 'visible');

        window['scroll'] = new LocomotiveScroll({
          el: document.querySelector(".o-scroll"), elMobile: document.querySelector(".o-scroll"),
          smoothMobile: true,
          smooth: true, direction: "vertical", inertia: 1, class: "is-inview", scrollbarClass: "c-scrollbar", scrollingClass: "has-scroll-scrolling", draggingClass: "has-scroll-dragging", smoothClass: "has-scroll-smooth", initClass: "has-scroll-init", getSpeed: !1, getDirection: !1, firefoxMultiplier: 50
        });
        scrollHome();

      }, 500)
    }
  })
}



var acc = document.getElementsByClassName("accordion-btn");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
    setTimeout(function () { window.scroll.update() }, 210)
  });
  setTimeout(function () { window.scroll.update() }, 2000)

}

function scrollHome() {
  if ($('.main-home').length > 0) {




    if ($(window).width() > 1023) {


      var tl = new TimelineMax({ paused: true })

        .set(".section-consumer .line.vertical-progress", { height: 0, top: '12%' })
        .fromTo(".section-consumer .line.vertical-progress", 0.6, { height: 0, top: '12%' }, { height: '25%', top: '12%' })
        .fromTo(".section-consumer .line.vertical-progress", 0.45, { height: '25%', top: '12%' }, { height: '25.1%', top: '12%' })
        .fromTo(".section-consumer .line.vertical-progress", 0.4, { height: '25.1%', top: '12%' }, { height: '49.51%', top: '12%' })
        .fromTo(".section-consumer .line.vertical-progress", 0.45, { height: '49.51%', top: '12%' }, { height: '49.52%', top: '12%' })
        .fromTo(".section-consumer .line.vertical-progress", 0.4, { height: '49.52%', top: '12%' }, { height: '73.5%', top: '12%' })
        .fromTo(".section-consumer .line.vertical-progress", 0.4, { height: '73.5%', top: '12%' }, { height: '73.51%', top: '12%' })

    } else {

      var tl = new TimelineMax({ paused: true })
        .set(".section-consumer .line.vertical-progress", { height: 0, top: '22%' })
        .fromTo(".section-consumer .line.vertical-progress", 0.6, { height: 0, top: '22%' }, { height: '15%', top: '22%' })
        .fromTo(".section-consumer .line.vertical-progress", 0.45, { height: '15%', top: '22%' }, { height: '15.1%', top: '22%' })
        .fromTo(".section-consumer .line.vertical-progress", 0.4, { height: '15.1%', top: '22%' }, { height: '34.51%', top: '22%' })
        .fromTo(".section-consumer .line.vertical-progress", 0.45, { height: '34.51%', top: '22%' }, { height: '34.52%', top: '22%' })
        .fromTo(".section-consumer .line.vertical-progress", 0.4, { height: '34.52%', top: '22%' }, { height: '60.5%', top: '22%' })
        .fromTo(".section-consumer .line.vertical-progress", 0.4, { height: '60.5%', top: '22%' }, { height: '60.51%', top: '22%' })
    }

    var cc = new TimelineMax({ paused: true })
      .add(tl.play()) // call `play` because timeline paused
    tl
      .set(".section-consumer .line.vertical-progress", { height: 0, top: '12%' })

    var tl33 = new TimelineMax()
      .set(".section-consumer .line.vertical-progress", { height: 0, top: '12%' })

  }
  let step = 0;
  let yy = 0;
  let s1 = false;
  window['scroll'].on('call', function (e) {
    if (e == 's-g') {
      var n = $('.s-6').offset() * 100 / 3679
    }
  });


  window['scroll'].on('scroll', function (e) {
    //animacion audiencia
    //player.pause()




    $('video').each(function () {

      if ($(this).parent().hasClass('is-inview')) {
        $(this)[0].play()
      }
    })


    if ($('.main-nosotros .section-nosotros-numeros.is-inview .swiper-container').length > 0) {
      window['swiperNosotrosNumeros'].autoplay.start();
    } else {
      //swiperNosotrosNumeros.autoplay.stop();
    }
    if (e.scroll.y > 200) {
      $('header').addClass('slim')
    } else {
      $('header').removeClass('slim')
    }
    //if(e.scroll.y > 5551){
    if ($('.main-home').length > 0) {
      let s = 0;
      if ($(window).width() > 1440) {
        s = ((e.scroll.y - 1800) * 100 / (3200)) / 100;
      } else if ($(window).width() > 1023) {
        s = ((e.scroll.y - ($(window).width() * 1800 / 1800)) * 100 / (($(window).width() * 3000 / 1800))) / 100;
      } else {
        s = ((e.scroll.y - ($(window).width() * 1600 / 480)) * 100 / (($(window).width() * 2400 / 480))) / 100;
      }
      if (s < 0) {
        cc.seek(0)
      } else if (s > 1) {
        cc.seek(cc.duration());
      } else {
        cc.seek(cc.duration() * s);
      }
      //console.log(cc.duration() * s);

      if ($('.section-home .frases-animadas-content.is-inview').length > 0 && s1 == false) {
        // console.log('s-1');
        s1 = true;
        $(".section-home .frases-animadas-content").attr('data-id', 1);
        var number = parseInt($('.section-home .frases-animadas-content').attr('data-id'), 10) || 0; // Get the number from paragraph


        // Called the function in each second
        var interval = setInterval(function () {
          $('.section-home .frases-animadas-content').attr('data-id', number++); // Update the value in paragraph

          if (number > 5) {
            clearInterval(interval); // If exceeded 100, clear interval
          }
        }, 1000);
      }

    }
  })
}


$("header .custom-select").each(function () {
  var classes = $(this).attr("class"),
    id = $(this).attr("id"),
    name = $(this).attr("name");
  var template = '<div class="' + classes + '">';
  template += '<span class="custom-select-trigger">' + $(this).find('[selected]').text() + '</span>';
  template += '<div class="custom-options">';
  $(this).find("option").each(function () {
    template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
  });
  template += '</div></div>';

  $(this).wrap('<div class="custom-select-wrapper"></div>');
  $(this).hide();
  $(this).after(template);
});
$("header .custom-option:first-of-type").hover(function () {
  $(this).parents(".custom-options").addClass("option-hover");
}, function () {
  $(this).parents(".custom-options").removeClass("option-hover");
});
$("header .custom-select-trigger").on("click", function () {
  $('html').one('click', function () {
    $("header .custom-select").removeClass("opened");
  });
  $(this).parents(".custom-select").toggleClass("opened");
  event.stopPropagation();
});
$("header .custom-option").on("click", function () {
  $('header .lenguaje select').val($(this).data("value"));
  $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
  $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
  $(this).addClass("selection");
  $(this).parents(".custom-select").removeClass("opened");
  $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());

  $('header .lenguaje').submit();
});




var w = window.matchMedia("(max-width: 1024px)");
var vid = document.getElementById("vid");
var source = document.getElementById("hvid");
var last = -1;

window.addEventListener("resize", function () { screenres(true) });
screenres(false);

function screenres(play) {
  if (!vid) return false;
  if (last != w.matches) {
    last = w.matches;

    if (w.matches) {
      vid.pause();
      source.src = $("#hvid").data("src-mobile");
      $("#vid").attr("poster", $("#vid").data("poster-mobile"));
      vid.load();
      if (play == true) vid.play();
    } else {
      vid.pause();
      source.src = $("#hvid").data("src");
      $("#vid").attr("poster", $("#vid").data("poster"));
      vid.load();
      if (play == true) vid.play();
    };
  }
}