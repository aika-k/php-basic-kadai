<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>kadai_016</title>
</head>

<body>
  <p>
    <?php
    // クラスを定義する
    class Food {
        // プロパティを定義する
        private $name;
        private $price;

        // コンストラクタを定義する
        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }

        public function show_price() {
            echo $this->price;
        }
      }

    class Animal {
      public $name;
      public $height;
      public $weight;

      public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
      }
      public function show_height() {
          echo $this->weight;
      }
    }
    ?>

  </p>
</body>
