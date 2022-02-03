<?php
  $n=$_POST["txtname"];
  $s=strtoupper($n);
  echo "strUpper:". $s."<br>";
  $s=ucfirst($n);
  echo "UcFirst:".$s."<br>";
  $s=ucwords($n);
  echo "ucwords:".$s;;



 ?>
