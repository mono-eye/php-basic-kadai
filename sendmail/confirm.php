<?php
// セッションを開始
session_start();

// POSTリクエストから入力データを取得
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$message = $_POST['message'];

// エラーメッセージを格納する配列
$errors = []; // 最初はエラーなし

// お名前のバリデーション
if (empty($name) ) {
  $errors['name'] = 'お名前を入力してください。';
}

// メールアドレスのバリデーション
if (empty($email) ) {
  $errors['email'] = 'メールアドレスを入力してください。';
} elseif (!filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
  $errors['email'] = 'メールアドレスの入力形式が正しくありません。';
}

// お問い合わせ内容のバリデーション
if (empty($message) ) {
  $errors['message']  = 'お問い合わせ内容を入力してください。';
} elseif (mb_strlen($message) > 100) {
  $errors['message'] = 'お問い合わせ内容が100文字を超えています。';
}

// 入力項目に問題なければセッション・クッキーを保存
if (empty($errors)) {
  // セッション変数を保存
  $_SESSION['name'] = $name;
  $_SESSION['email'] = $email;
  $_SESSION['message'] = $message;

  // クッキーを登録（有効期限は1時間）
  setcookie('name', $name, time() + 3600 );
  setcookie('email', $email, time() + 3600 );
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <main class="container m-auto mt-4">
    <section>
      <h3>入力内容をご確認ください</h3>
      <p>問題なければ「送信する」、修正する場合は「キャンセル」をクリックしてください</p>
      <form action="complete.php" method="post" class="p-4 m-auto border border-primary">
        <div class="mb-4">
          <label class="me-4 p-2 border-bottom border-secondary">お名前</label>
          <span class="p-2 border-bottom border-info"><?php echo $name; ?></span>
          <!-- エラーメッセージ -->
          <?php if (isset($errors['name'])): ?>
            <div class="p-2 border border-info text-danger"><?php echo $errors['name']; ?></div>
          <?php endif; ?>
        </div>
        
        <div class="mb-4">
          <label class="me-4 p-2 border-bottom border-secondary">メールアドレス</label>
          <span class="p-2 border-bottom border-info"><?php echo $email; ?></span>
          <!-- エラーメッセージ -->
          <?php if (isset($errors['email'])): ?>
            <div class="p-2 border border-info text-danger"><?php echo $errors['email']; ?></div>
          <?php endif; ?>
        </div>

        <div>
          <label class="mb-1">お問い合わせ内容</label>
          <div class="p-2 border border-info"><?php echo $message; ?></div>
          <!-- エラーメッセージ -->
          <?php if (isset($errors['message'])): ?>
            <div class="p-2 border border-info text-danger"><?php echo $errors['message']; ?></div>
          <?php endif; ?>
        </div>
        
        <div class="text-center">
          <button id="btn" name="submit" value="送信する"  class="mt-4 btn btn-primary">送信する</button>
          <button id="btn-back" class="mt-4 btn btn-primary">キャンセル</button>

        </div>
      </form>
    </section>
  </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="script.js"></script>


<?php
  // 入力項目にエラーがある場合の処理
  if (!empty($errors)) {
  // 確定ボタンを無効化するJavaScriptコードをブラウザ側に送信
  echo '<script> document.getElementById("confirm-btn").disabled = true; </script>';
  }

  // セッション変数を初期化
  $_SESSION = array();
  // セッションを終了
  session_destroy();
?>
</body>
</html>