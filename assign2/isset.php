<?php
if (isset($_POST['txtname'])) {
  $name=$_POST['txtname'];
  $pswd=$_POST['txtpswd'];
  echo "The username is: $name <br>";
  echo "The password is: $pswd";
}
else {
  echo "QUIT";
}
 ?>
