<!DOCTYPE>
<html lang="ja">
  <head>
    <title>kadai_011</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <p>
      <?php
        $vegetable = [
          '名前' => '玉ねぎ',
          '値段' => '200',
          '産地' => '北海道'
        ];
        
        foreach ($vegetable as $key => $value) {
          echo "{$key}:{$value}<br>";
        }
      ?>
    </p>
  </body>
</html>
  