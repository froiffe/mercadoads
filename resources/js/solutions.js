// CHANGE FORMAT IMAGE LIST
$('body').on('click', '.section-formatos .formatos-filter .formatos-filter-list li:not(.active) a', function (e) {
    e.preventDefault();

    let el = $(this);
    let wrapper = el.parent().parent().parent().parent();
    let filtersContainer = el.parent().parent();
    let filterSelected = $(this).attr('class');

    filtersContainer.find('li').removeClass('active');
    el.parent().addClass('active');
    wrapper.find('.area-img img, .area-img video').animate({
        'opacity': 0
    }, 500, function () {
        wrapper.find('.area-img').find('img').hide();
        wrapper.find('.area-img').find('video').hide();
        wrapper.find('.area-img img.' + filterSelected).show();
        wrapper.find('.area-img video.' + filterSelected).show();
        wrapper.find('.area-img img, .area-img video').animate({
            'opacity': 1
        }, 500, function () {});
    })
});

// CHANGE FORMAT IMAGE DETAILS
$('body').on('click', '.section-formato-detalle .formatos-filter .formatos-filter-list li:not(.active) a', function (e) {
    e.preventDefault();
    let el = $(this);
    let wrapper = $('.section-formato-detalle').find('.formato-detalle');
    let filtersContainer = el.parent().parent();
    let filterSelected = $(this).attr('class');

    filtersContainer.find('li').removeClass('active');
    el.parent().addClass('active');

    wrapper.find('.area-img img, .area-img video').animate({
        'opacity': 0
    }, 500, function () {
        wrapper.find('.area-img').find('img').hide();
        wrapper.find('.area-img').find('video').hide();
        wrapper.find('.area-img img.' + filterSelected).show();
        wrapper.find('.area-img video.' + filterSelected).show();
        wrapper.find('.area-img img, .area-img video').animate({
            'opacity': 1
        }, 500, function () {});
    })
});

// // FILTER
// $('body').on('change', '.section-formatos-intro .filter', function(e) {
//     e.preventDefault();

//     $.ajax({
//         type: "POST",
//         url: $(this).data('url'),
//         data: {
//             filter: $('#filter option:selected').val()
//         },
//         dataType: "json",
//         success: function (formatsHtml) {
//             if( formatsHtml != '' ) {
//                 $('.section-formatos').html(formatsHtml);
//                 window['scroll'].update();
//             }
//             else {
//                 // no results
//             }
//         },
//         complete: function() {

//         }
//     });
// })



// FILTER SELECT STYLES
$(".main-solutions .custom-select").each(function () {
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
$(".main-solutions .custom-option:first-of-type").hover(function () {
    $(this).parents(".custom-options").addClass("option-hover");
}, function () {
    $(this).parents(".custom-options").removeClass("option-hover");
});
$(".main-solutions .custom-select-trigger").on("click", function () {
    $('html').one('click', function () {
        $(".main-solutions .custom-select").removeClass("opened");
    });
    $(this).parents(".custom-select").toggleClass("opened");
    event.stopPropagation();
});

$(".main-solutions .custom-option").on("click", function () {
    $('.main-solutions .filter-form select').val($(this).data("value"));
    $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
    $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
    $(this).addClass("selection");
    $(this).parents(".custom-select").removeClass("opened");
    $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());

    filterSolutions();
});

function filterSolutions() {
    $.ajax({
        type: "POST",
        url: $('#filter').data('url'),
        data: {
            filter: $('#filter option:selected').val(),
            category: $('#category').val()
        },
        dataType: "json",
        success: function (formatsHtml) {
            if (formatsHtml != '') {
                $('.section-formatos').html(formatsHtml);
                window['scroll'].update();
            } else {
                // no results
                $('.section-formatos').html('');
            }
        },
        complete: function () {

        }
    });
}

$(document).ready(function() {
    if($('#type-filtered').val() != '') {
        let typeSelectedId = $('#type-filtered').val();
        let typeSelectedElement = $(".main-solutions .custom-option[data-value='" + typeSelectedId + "']");

        $('.main-solutions .filter-form select').val(typeSelectedElement.data("value"));
        typeSelectedElement.parents(".custom-select-wrapper").find("select").val(typeSelectedElement.data("value"));
        typeSelectedElement.parents(".custom-options").find(".custom-option").removeClass("selection");
        typeSelectedElement.addClass("selection");
        typeSelectedElement.parents(".custom-select").removeClass("opened");
        typeSelectedElement.parents(".custom-select").find(".custom-select-trigger").text(typeSelectedElement.text());

        filterSolutions();
    }
});
