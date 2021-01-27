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
    cardHeightAdjustment("#works .card-text");

    $("input[type=submit]").click(function () {
        $("#message").text('');
        let name = $("input[name=name]").val();
        let mail = $("[name=mail]").val();
        let body = $("textarea[name=body]").val();
        if (name.match(/\S/g) && mail.match(/\S/g) && body.match(/\S/g)) {
            let screenWidth = $(window).width();
            let point = (screenWidth - 32) / 2;
            $("body").append('<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>');
            $(".spinner-border").css({
                left: point,
                position: "fixed",
                top: "50%"
            });
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: { name: name, mail: mail, body: body }
            }).done(function (response) {
                let result = JSON.parse(response);
                if (result) {
                    $("#message").text('ご連絡ありがとうございます。メールを受け付けました');
                    $('.spinner-border').remove();
                } else {
                    $("#message").text('もう一度お試し下さい');
                }
            }).fail(function () {
                $("#message").text('申し訳ございません、もう一度お試し下さい');
            });
        } else {
            $("#message").text('全ての項目を入力してください');
        }
    });
});

function cardHeightAdjustment(tagName) {
    var minHeight = 0;

    $(tagName).each(function () {
        if ($(this).height() > minHeight) minHeight = $(this).height();
    });
    $(tagName).height(minHeight);
}
/*
function
<div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
</div>*/