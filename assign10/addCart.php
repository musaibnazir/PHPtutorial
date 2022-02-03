<?php
$len=mysqli_num_rows($dataset);
   if ($len>0) {
     while ($row= mysqli_fetch_array($dataset)) {
       echo "<h1>Product Name : ".$row[1]."</h1>";
       echo "<p>Product Description : ".$row[2]."</p>";
       echo "<p>Product Price : Rs.  ".$row[4]."</p>";
      echo "<form action='cart.php' method='post'><input  type='submit' value='Add Cart' name='addcart' class='btn btn-success' /></form>";
           }
         }


 ?>
