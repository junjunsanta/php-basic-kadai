<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>課題011</title>
</head>
<body>
  <p>
    <?php
     //連想配列に値を代入する
     $vegetable = array(
      '名前' => '玉ねぎ',
      '値段' => '200',
      '産地' => '北海道',
     );
    //foreachとecho文を使って値とキーを出力する
    foreach ($vegetable as $key => $value) {
      echo $key .":".$value.'<br>';
    }
     ?>
  </p>
</body>
</html>