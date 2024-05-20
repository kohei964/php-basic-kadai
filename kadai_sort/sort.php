<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way(&$array, $order = TRUE){
            if($order){
                sort($array);
                echo '昇順にソートします<br>';

            }else{
                rsort($array);
                echo '降順にソートします<br>';
            }
        }

            // ソートする配列
            $nums = [15, 4, 18, 23, 10 ];

            // 配列をソート
            sort_2way($nums, TRUE);  
            foreach($nums as $num){
                echo $num . '<br>';
            }

        
            // 降順にソート
            sort_2way($nums, FALSE);  
            foreach($nums as $num){
                echo $num . '<br>';
            }

        ?>
    </p>
</body>

</html>
