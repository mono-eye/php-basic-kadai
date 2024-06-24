<?php
  // セッションを開始
  session_start();

  // セッションに保存された「お名前」を取得
  $name = isset($_SESSION['name']) ? $_SESSION['name'] : '名無し';


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
      <h3><?php echo $name; ?>様、お問い合わせを承りました。</h3>
      <p>ありがとうございました。今後の参考にさせていただきます</p>
      <div class="text-center">
        <button id="btn-back" class="mt-4 btn btn-primary">トップに戻る</button>
      </div>
    </section>
  </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="script.js"></script>

<?php
  // セッション変数を初期化
  $_SESSION = array();
  // セッションを終了
  session_destroy();
?>
</body>
</html>