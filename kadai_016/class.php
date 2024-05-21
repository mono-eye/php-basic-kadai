<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;
      // メソッドを定義する
      public function show_name() {
        echo $this->name;
      }
      public function show_price() {
        echo $this->price;
      }
      // コンストラクタを定義する
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }
    //インスタンス化する
    $foods = new Food('potato', 250 ) ;
    
    //インスタンス$foodの各プロパティの値を出力する
    print_r($foods);
    echo '<br>';


    class Animal {
      private $name;
      private $height;
      private $weight;
      // メソッドを定義する
      public function show_name() {
        echo $this->name;
      }
      public function show_height() {
        echo $this->height;
      }
      public function show_weight() {
        echo $this->weight;
      }
      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight,) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }
    //インスタンス化する
    $Animals = new Animal('dog', 60, 5000);
    
    //インスタンス$Animalsの各プロパティの値を出力する
    print_r($Animals);



    // show_height メソッドを呼び出して $height を出力する
    echo '<br>';
    $foods->show_price();
    echo '<br>';
    $Animals->show_height();

    ?>
  </p>


</body>

</html>