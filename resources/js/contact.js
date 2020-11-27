$('body').on('submit', '#contact-form', function(e) {
    e.preventDefault();

    $('#contact-form .enviar').attr('disabled', 'disabled');
    $('#form-errors').html('');
    $('#form-errors').hide();
    $('#contact-form input, select, textarea').removeClass('has-error');

    if(emailValid($('#contact-form #email').val())) {

        $('.loader').css('display', 'flex');

        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: {
                form: $('#contact-form #form').val(),
                name: $('#contact-form #name').val(),
                lastname: $('#contact-form #lastname').val(),
                email: $('#contact-form #email').val(),
                area_code: $('#contact-form #area_code').val(),
                telephone: $('#contact-form #telephone').val(),
                business: $('#contact-form #business').val(),
                business_type: $('#contact-form #business_type option:selected').val(),
                country: $('#contact-form #country').val(),
                industry_type: $('#contact-form #industry_type option:selected').val(),
                investment: $('#contact-form #investment option:selected').val(),
                message: $('#contact-form #message').val(),
                captcha: grecaptcha.getResponse()
            },
            dataType: "json",
            success: function(response) {
                if( response.success == true ) {
                    window.location.href = response.url.concat('?pais=' + response.country + '&investment=' + response.param_investment);
                }
                else {
                    $('#form-errors').html('<ul><li>'+ response.captcha_error +'</li></ul>');
                    $('#form-errors').show();
                }
            },
            error: function(response) {
                var errors = response.responseJSON;

                errorsHtml = '<ul>';

                $.each( errors.errors, function( key, value ) {
                    $('#contact-form #' + key).addClass('has-error');

                    errorsHtml += '<li>'+ value[0] + '</li>';
                });

                errorsHtml += '</ul>';

                $('#form-errors').html(errorsHtml);
                $('#form-errors').show();
                var panel = document.getElementById('formulario-content');
                panel.style.maxHeight = panel.scrollHeight + "px";

                setTimeout(function(){window.scroll.update()},210);
            },
            complete: function() {
                $('.loader').css('display', 'none');
                $('#contact-form .enviar').removeAttr('disabled');
                grecaptcha.reset();
            }
        });
    }
    else {
        $('.loader').css('display', 'none');
        $('#contact-form .enviar').removeAttr('disabled');
        $('#contact-form #email').addClass('has-error');
        $('#form-errors').html('<ul><li>'+ $('#contact-form #email').data('errormsg') +'</li></ul>');
        $('#form-errors').show();

        var panel = document.getElementById('formulario-content');
        panel.style.maxHeight = panel.scrollHeight + "px";

        setTimeout(function(){window.scroll.update()},210);

        grecaptcha.reset();
    }
});

function emailValid(email) {
    // @google, @yahoo, @outlook, @hotmail
    if (/^[a-zA-Z0-9_.+-]+@(?:(?:[a-zA-Z0-9-]+\.)?[a-zA-Z]+\.)?(gmail|yahoo|hotmail|outlook)/g.test(email)) {
        return false;
    }

    return true;
}


// var acc = document.getElementsByClassName("contact-btn");
// var i;

$('.contact-btn').on('click', function(e) {
    e.preventDefault();

    let locale = $(this).data('locale');
    let type = $(this).data('type');

    $('#fb-pixel').html('');

    if(locale == 'es') {
        if(type == 'advertiser') {
            $('#fb-pixel').html('<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=1720745&conversionId=3040537&fmt=gif" />');
        }
        else if(type == 'agency') {
            $('#fb-pixel').html('<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=1720745&conversionId=3040545&fmt=gif" />');
        }
    }
    else if(locale == 'pt') {
        if(type == 'advertiser') {
            $('#fb-pixel').html('<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=1708857&conversionId=3049009&fmt=gif" />');
        }
        else if(type == 'agency') {
            $('#fb-pixel').html('<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=1708857&conversionId=3049017&fmt=gif" />');
        }
    }

    if( !$(this).hasClass('active') ) {
        var panel = document.getElementById('formulario-content');

        $('.contact-btn').removeClass('active');
        $(this).addClass('active');

        if( panel.style.maxHeight != panel.scrollHeight + "px" ) {
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
            setTimeout(function(){window.scroll.update()},210);
        }
        else {
            panel.style.maxHeight = null;
            setTimeout(() => {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }, 350);
        }
    }
})

// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener("click", function () {
//     $('.contact-btn').removeClass('active');
//     this.classList.toggle("active");
//     var panel = document.getElementById('formulario-content');
//     if (panel.style.maxHeight) {
//       panel.style.maxHeight = null;
//     } else {
//       panel.style.maxHeight = panel.scrollHeight + "px";
//     }
//     setTimeout(function(){window.scroll.update()},210)
//   });
// }












// SELECTS STYLES
$(".main-contacto .custom-select").each(function () {
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
  $(".main-contacto .custom-option:first-of-type").hover(function () {
    $(this).parents(".custom-options").addClass("option-hover");
  }, function () {
    $(this).parents(".custom-options").removeClass("option-hover");
  });
  $(".main-contacto .custom-select-trigger").on("click", function () {
    $('html').one('click', function () {
      $(".main-contacto .custom-select").removeClass("opened");
    });
    $(this).parents(".custom-select").toggleClass("opened");
    event.stopPropagation();
  });
  $(".main-contacto .custom-option").on("click", function () {
    $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
    $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
    $(this).addClass("selection");
    $(this).parents(".custom-select").removeClass("opened");
    $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());

  });

$('.close_popup').on('click', function(e) {
    e.preventDefault();

    $(this).closest('section').removeClass('active');
})
