<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編 連想配列</title>
</head>

<body>
  <p>
    <?php
    // 連想配列に値を代入する
    $personal_data = [
      'id' => 1, 
      'name' => '玉ねぎ', 
      'price' => 200, 
      'product' => '北海道'
    ];

    // 連想配列の値を出力する
    foreach ($personal_data as $key => $value){
      echo "{$key} : {$value}<br>";
    }

    ?>

  </p>