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

    $("input[type=submit]").click(function () {
        let name = $("input[name=name]").val();
        let mail = $("[name=mail]").val();
        let body = $("textarea[name=body]").val();
        if (name.match(/\S/g) && mail.match(/\S/g) && body.match(/\S/g)) {
            $("#message").text('');
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: { name: name, mail: mail, body: body }
            }).done(function (response) {//ajax通信に成功したかどうかresponseに値があるかどうかでは無い
                $("#message").text('ご連絡ありがとうございます。メールを受け付けました');
            }).fail(function () {
                
            }).fail(function () {
                alert('自動入力に失敗しました。');
            });
        } else {
            $("#message").text('全ての項目を入力してください');
        }
        /*
        let postal = $('input[name="postal"]').val().replace('-', '');
        */
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