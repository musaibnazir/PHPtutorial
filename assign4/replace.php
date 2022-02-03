<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Replace</title>
  </head>
  <body>
    Array is :[1,2,3,4,5,6,7] <br><br><br>
    <form>
      <input type="text" name="txt1" placeholder="Enter value To be Replaced" >
      <input type="text" name="txt2" placeholder="Replaced Value">
      <input type="submit" name="subbtn" value="Replace">
    </form>

    <?php
    if (isset($_GET['subbtn'])) {
      $arr = array( '1','2','3','4','5','6','7' );
      $txt1=$_GET['txt1'];
      if ($txt1) {
        $txt2=$_GET['txt2'];
        $a=str_replace($txt1,$txt2,$arr);
        for ($i=0; $i < 7; $i++) {
          echo $a[$i].'<br>';
        }
      }
    }
     ?>
  </body>
</html>
