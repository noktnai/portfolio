$(function () {
    $("input[type=submit]").click(function () {
        let name = $("input[name=name]").val();
        let mail = $("[name=mail]").val();
        let body = $("textarea[name=body]").val();
        if (name.match(/\S/g) && mail.match(/\S/g) && body.match(/\S/g)) {
            $.ajax({
                type: "POST",
                url: "assets/contact/mail.php",
                data: { name: name, mail: mail, body: body }
            }).done(function (response) {
                let result = JSON.parse(response);
                if (result) {
                    $("#message").text('ご連絡ありがとうございます。メールを受け付けました');
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


    //ページ内スクロール
    var navHeight = $("header").outerHeight();

    $('a[href^="#"]').on("click", function () {
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? "html" : href);
        var position = target.offset().top - navHeight;
        $("html, body").animate({ scrollTop: position, }, 300, "swing");
        return false;
    });

    //ページトップ
    $(".js_top").on("click", function () {
        $("body,html").animate({ scrollTop: 0, }, 300);
        return false;
    });

});