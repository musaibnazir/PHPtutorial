<?php
 $q=$_GET['path'];
 $q='uploads/'.$_GET['path'];
 unlink($q);
 header('location:pictures.php');
  ?>
