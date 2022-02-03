<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form >
      <input type="checkbox" name="cuisine[]" value="kabab">Kabab <br>
      <input type="checkbox" name="cuisine[]" value="rista">rista <br>
      <input type="checkbox" name="cuisine[]" value="goshtaba">goshtaba <br>
      <input type="checkbox" name="cuisine[]" value="rogan josh">rogan Josh <br>
      <input type="checkbox" name="cuisine[]" value="tabakmaz">tabakmaz <br>
      <input type="submit" name="subbtn" >

    </form>

    <?php
    if (isset($_GET['subbtn'])) {
      $items=$_GET['cuisine'];
      $orderitems='';
      foreach ($items as $a ) {
        $orderitems.=$a.',';
      }
      echo $orderitems;
    }




     ?>
  </body>
</html>
