<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
  <?php
        // 昇順・降順を選択して配列をソートする関数
        function sort_2way($array, $order) {


            // TRUEなら昇順、TRUEでなければ降順にソート
            if ($order) {
                echo '昇順にソートします。<br>';
                sort($array);
            } else {
                echo '降順にソートします。<br>';
                rsort($array);
            }

            // ソート結果を1行ずつ表示
            foreach ($array as $array) {
                echo $array . '<br>';
            }

        }
            // ソートする配列を宣言
            $nums = [15, 4, 18, 23, 10 ];

            // 昇順にソート
            sort_2way($nums , TRUE);
            // 降順にソート
            sort_2way($nums , FALSE);
        
        ?>
</body>
</html>