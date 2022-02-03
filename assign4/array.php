<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $arr = array(10,9,8,7,6,5 );
    echo "At index 0: ".$arr[0]."<br>";
    echo "At index 1: ".$arr[1]."<br>";
    echo "At index 2: ".$arr[2]."<br>";
    echo "At index 3: ".$arr[3]."<br><br>";
    echo "NOw the loops Starts:<br>";
    for ($i=0; $i <6 ; $i++) {
      echo $arr[$i]."<br>";
    }
    $q=Count($arr);
    echo "The count of Array is: ".$q;


     ?>
  </body>
</html>
