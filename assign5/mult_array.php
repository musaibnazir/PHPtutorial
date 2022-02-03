<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $arr = array(
      array(1,2,3,4,5),
      array(1,2,3,4,5),
      array(1,2,3,4,5),
      array(1,2,3,4,5)
    );
    foreach ($arr as $a ) {
      foreach ($a as $b) {
        echo $b.'&nbsp;';
      }
      echo "<br>";
    }



     ?>
  </body>
</html>
