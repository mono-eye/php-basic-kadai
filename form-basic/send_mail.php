<?php
// Composerのオートローダーの読み込み
require 'PHPMailer/vendor/autoload.php';

// PHPMailerをインポート（取り込み）
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mail = new PHPMailer(true);

    try {
        // サーバー設定
        $mail->isSMTP();
        $mail->Host       = 'sandbox~~';    // MailTrapのSMTPホスト名
        $mail->SMTPAuth   = true;
        $mail->Username   = 'a6113~~';   // MailTrapで取得したSMTPユーザー名
        $mail->Password   = 'c6b3c~~';   // MailTrapで取得したSMTPパスワード
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // 受信者の設定
        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress('kzknz780@gmail.com', 'Recipient'); // 受信者のメールアドレス

        // コンテンツの設定
        $mail->isHTML(true);
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body in bold!';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        // メール送信
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
