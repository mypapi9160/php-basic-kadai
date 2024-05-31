<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    function $sort_2way($order){
      $nums = array(15, 4, 18, 23, 10);

      if($order === true){

        echo '昇順にソートします。<br>';
        foreach ($nums as $num){
          sort($num);
          print_r($num . <br>);
        }

      }else{
        echo '降順にソートします。<br>';
        foreach ($nums as $num){
          rsort($num);
          print_r($num . <br>);
        }
      }
    }

    $sort_2way(TRUE);
    $sort_2way(FALSE);

    ?>

  </p>
  
</body>
</html>