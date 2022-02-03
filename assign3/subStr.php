<?php
  $n=$_POST["txtname"];
  $i=strpos($n,"@");
  $str=substr($n,0,$i);
  echo "Username is: ".$str."<br>";
  $q=strlen($str);
  echo 'The length of string is:'.$q;
 ?>
