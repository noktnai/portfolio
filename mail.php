<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// PHPMailer のソースファイルの読み込み
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$name = $_POST['name'];
$mail = $_POST['mail'];
$body = $_POST['body'];

if (send_mail()) {
} else {
}

function send_mail()
{
    global $name;
    global $mail;
    global $body;
    try {
        $mailer = new PHPMailer(true); //インスタンスを生成（true指定で例外を有効化）
        $mailer->CharSet = 'utf-8';
        // SMTPサーバの設定
        $mailer->isSMTP();                          // SMTPの使用宣言
        $mailer->Host = 's205.xrea.com';   // SMTPサーバーを指定
        $mailer->SMTPAuth = true;                 // SMTP authenticationを有効化
        $mailer->Username = 'info@naotoge5.cf';   // SMTPサーバーのユーザ名
        $mailer->Password = 'Pv5L46rAdPGV';           // SMTPサーバーのパスワード
        $mailer->SMTPSecure = 'tls';  // 暗号化を有効（tls or ssl）無効の場合はfalse
        $mailer->Port = 587; // TCPポートを指定（tlsの場合は465や587）

        // 送受信先設定（第二引数は省略可）
        $mailer->setFrom('info@naotoge5.cf', 'naotoge5-web'); // 送信者
        $mailer->addAddress('info@naotoge5.cf');   // 宛先

        // 送信内容設定
        $mailer->Subject = $name . '様からのご連絡';
        $mailer->Body = 'mail:' . $mail . "\n" . $body;

        // 送信
        $mailer->send();
        return 1;
    } catch (Exception $e) {
        return 0;
    } finally {
        unset($mailer);
    }
}
