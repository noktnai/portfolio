$(function () {
    $("input[type=submit]").click(function () {
        var name = $("input[name=name]").val();
        var email = $("[name=email]").val();
        var message = $("textarea[name=message]").val();
        if (name.match(/\S/g) && email.match(/\S/g) && message.match(/\S/g)) {
            // FormSpreeを利用した送信処理
            var data = new FormData();
            data.append("name", name);
            data.append("email", email);
            data.append("message", message);
            fetch("https://formspree.io/f/xnqrjjjn", {
                method: "POST",
                body: data,
                headers: {
                    'Accept': 'application/json'
                }
            }).then(response => {
                if (response.ok) {
                    $("#status").text('ご連絡ありがとうございます。確認次第ご返信させていただきます。');
                } else {
                    $("#status").text('申し訳ございません、送信に問題が発生しました。');
                    /*
                    response.json().then(data => {
                        if (Object.hasOwn(data, 'errors')) {
                            var errorMessage = data["errors"].map(error => error["message"]).join(", ");
                            $("#status").text(errorMessage);
                        } else {
                            何らかのエラー
                        }
                    })
                    */
                }
            }).catch(error => {
                $("#status").text('申し訳ございません、送信に問題が発生しました。');
            });
        } else {
            $("#status").text('全ての項目を入力してください');
        }
    });
    // ページ内スクロール
    var navHeight = $("header").outerHeight();

    $('a[href^="#"]').on("click", function () {
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? "html" : href);
        var position = target.offset().top - navHeight;
        $("html, body").animate({ scrollTop: position, }, 300, "swing");
        return false;
    });

    // ページトップ
    $(".js_top").on("click", function () {
        $("body,html").animate({ scrollTop: 0, }, 300);
        return false;
    });
});