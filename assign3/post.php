<?php
$n= isset($_POST["txtname"]);
if ($n) {
  $name=$_POST["txtname"];
  $name1=$_POST["txtpass"];
  echo "The Username is:".$name."<br>";
  echo "The Password is:".$name1;

}
 ?>
