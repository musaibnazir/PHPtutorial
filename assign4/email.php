<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form>
  Enter Email:<input type="text" name="txtname">
  <input type="submit" name="btnsub">
</form>

<?php
if (isset($_GET["btnsub"])) {
  $q=$_GET["txtname"];
  $i=strrpos($q,'@');
  $str=substr($q,0,$i);
  echo $str;

}
 ?>
  </body>
</html>
