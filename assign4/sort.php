<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sorting Arrays</title>
  </head>
  <body>
    The Array is : (5,4,3,2,1) <br>
    <form>
      <input type="submit" name="btnsub" value="Sort">
    </form>
    <?php
    if (isset($_GET['btnsub'])) {
      $temp='';
      $arr = array(5,4,3,2,1);
      for ($i=0; $i <5 ; $i++) {
        for ($j=$i+1; $j <5 ; $j++) {
            $temp=$arr[$i];
            $arr[$i]=$arr[$j];
            $arr[$j]=$temp;
          }
          echo $arr[$i];
        }
    }
     ?>
  </body>
</html>
