<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
      function sort_2way($array, $order) {
        // 引数$orderはTRUE（昇順）か？
        if ($order === true) {
          // メッセージを表示する「昇順にソートします」
          echo "昇順にソートします <br>";
          // 引数昇順にソート
          sort($array);

          // foreach文でソートした配列データを１行ずつ表示
          foreach ($array as $value) {
          echo $value . "<br>";
          }
        } else{
          // メッセージを表示する「降順にソートします」
          echo "降順にソートします <br>";
          // 引数降順にソート
          rsort($array);

          // foreach文ソートした配列データを１行ずつ表示
          foreach ($array as $value) {
          echo $value . "<br>";
          }
        }
      }

      // ソートする配列を宣言
      $nums = [15, 4, 18, 23, 10];
      // 昇順ソート
      sort_2way($nums, true);
      // 降順ソート
      sort_2way($nums, false);
      ?>
  </p>
</body>

</html>