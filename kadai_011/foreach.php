<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP KADAI_011</title>
 </head>

 <body>
 <p>
         <?php
         //連想配列を作成
         $vegetable = array(
              '名前' => '玉ねぎ', 
              '値段' => 200, 
              '産地' => '北海道'
         );
 
         foreach ($vegetable as $key => $value) {
             echo $key . ":" . $value . "<br>";
         }
         ?>
     </p>