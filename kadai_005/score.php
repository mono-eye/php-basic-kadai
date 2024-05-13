<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>テストの平均点を計算しよう</title>
    <!-- variable＝変数 -->
</head>

<body>
    <p>
        <?php
        // 変数に値を代入する
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;

        // 変数の合計
        $totalScore = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

         // 平均点を算出
        $numberOfScores = 10; // スコアの数
        $averageScore = $totalScore / $numberOfScores;

 
        echo "合計点: " . $totalScore;
        echo '<br>';
        echo "平均点: " . $averageScore;
         ?>
    </p>


     


</body>

</html>
