<?php
  if (isset($_POST['mboard'])) {
    $con= mysqli_connect('localhost','root','','object_db');
    $dataset=  mysqli_query($con,"select * from tbl_products where id = '1'  ");
    $len=mysqli_num_rows($dataset);
       if ($len>0) {
         while ($row= mysqli_fetch_array($dataset)) {
          echo $row[2];

               }
             }
           }
 ?>
