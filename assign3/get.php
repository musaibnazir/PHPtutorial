<?php
$n= isset($_GET["txtname"]);
if ($n) {
  $name=$_GET["txtname"];
  $name1=$_GET["txtpass"];
  echo "The Username is:".$name."<br>";
  echo "The Password is:".$name1;

}
 ?>
