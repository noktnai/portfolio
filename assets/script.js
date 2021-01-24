$(function () {
    $(".rating").append('<span></span><span></span><span></span><span></span><span></span>');

    $('#portfolios .card').on('click', function () {
        $('.js-modal').fadeIn();
        return false;
    });
    
    $('.modal__bg').on('click', function () {
        $('.js-modal').fadeOut();
    });

    $(".nav-link").on('click', function () {
        $('.navbar-collapse').collapse('hide');
    });

    cardHeightAdjustment("#skills .card");
    cardHeightAdjustment("#portfolios .card-text");
});

function cardHeightAdjustment(tagName) {
    var minHeight = 0;

    $(tagName).each(function () {
        if ($(this).height() > minHeight) minHeight = $(this).height();
    });
    $(tagName).height(minHeight);
}