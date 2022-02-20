<?php
// 入力内容の取得・変数に格納
$name    = $_POST['name'];     // 氏名
$to      = $_POST['to'];       // メールアドレス
$subject = $_POST['subject'];  // 件名
$message = $_POST['message'];  // 本文

// メール日本語対応
mb_language("japanese");
mb_internal_encoding("UTF-8");

// PHPMailer クラスをネーム空間にインポート
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Composer の autoloader をロード
require 'vendor/autoload.php';

// インスタンス生成
$mail = new PHPMailer(true);

try {
    // SMTPの設定
    $mail->isSMTP();                       // SMTP 利用
    $mail->Host       = 'smtp.gmail.com';  // SMTP サーバー(Gmail の場合これ)
    $mail->SMTPAuth   = true;              // SMTP認証を有効にする
    $mail->Username   = 'XXXXX@gmail.com'; // ユーザ名 (Gmail ならメールアドレス)
    $mail->Password   = 'xxxxxxxxxx';      // パスワード
    $mail->SMTPSecure = 'tls';             // 暗号化通信 (Gmail では使えます)
    $mail->Port       = 587;               // TCP ポート (TLS の場合 587)

    // メール本体
    $mail->setFrom('XXXXX@gmail.com', 'hazuki');  // 送信元メールアドレスと名前
    $mail->addAddress($to, mb_encode_mimeheader($name, 'ISO-2022-JP'));  // 送信先メールアドレスと名前
    $mail->Subject = mb_encode_mimeheader($subject, 'ISO-2022-JP');  // 件名
    $mail->Body    = mb_convert_encoding($message, "JIS","UTF-8");  // 本文

// 送信
    $mail->send();
    echo '送信済み';
} catch (Exception $e) {
    echo "送信失敗: {$mail->ErrorInfo}";
}
?>
