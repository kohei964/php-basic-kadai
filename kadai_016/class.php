<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>16章課題</title>
 </head>
 
 <body>
     <p>
        <?php
        //「Food」クラスを定義
        class Food {
            //プロパティ（情報）を定義
            private $name;
            private $price;

            //プロパティに値を代入するコンストラクタを定義
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }

            //「price」プロパティを出力するメソッド
            public function show_price(){
                echo $this->price;
            }

        }

        //「Animal」クラスを定義
        class Animal {
            //プロパティ（情報）を定義
            private $name;
            private $height;
            private $weight; 

            //コンストラクタを定義
            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            //「weight」プロパティを出力するメソッド
            public function show_weight(){
                echo $this->weight;
            }
        }

        //表示
        $potato = new Food('ジャガイモ',200);
        print_r($potato);

        echo '<br>';

        //表示
        $dog = new Animal('犬',60,5000);
        print_r($dog);

        echo '<br>';

        //値段を出力
        $potato->show_price();

        echo '<br>';

        //重さを出力
        $dog->show_weight();
        ?>
    </p>
</body>
 
 </html>