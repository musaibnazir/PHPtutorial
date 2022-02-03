<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">LOGO</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active" > <a href="main.php">Products</a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-center"style="margin-top:8px;margin-left:400px">
        <li > <input type="text" name="" value=""> </li>
        <li ><input type="submit" name="" value="Search" class="btn btn-success"> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right"style="padding-right:10px">
        <li > <a href="cart.php">Cart</a></li>
        <li > <a href="logout.php">Logout</a></li>
      </ul>
          </div>
    </nav>

    <div class="container" style="margin-top:100px">
      <div class="row">
        <div class="col-md-7 bg-primary"  style="height:auto">
          <?php
            if (isset($_POST['mboard'])) {
              $con= mysqli_connect('localhost','root','','object_db');
              $dataset=  mysqli_query($con,"select * from tbl_products where id = '1'  ");
              $len=mysqli_num_rows($dataset);
                 if ($len>0) {
                   while ($row= mysqli_fetch_array($dataset)) {
                    echo "<img style='height:500px;width:600px' src= 'images/".$row[3]."'  />";

                         }
                       }
                     }
                     if (isset($_POST['headphone'])) {
                       $con= mysqli_connect('localhost','root','','object_db');
                       $dataset=  mysqli_query($con,"select * from tbl_products where id = '2'  ");
                       $len=mysqli_num_rows($dataset);
                          if ($len>0) {
                            while ($row= mysqli_fetch_array($dataset)) {
                             echo "<img style='height:500px;width:600px' src= 'images/".$row[3]."'  />";

                                  }
                                }
                              }
                              if (isset($_POST['lcd'])) {
                                $con= mysqli_connect('localhost','root','','object_db');
                                $dataset=  mysqli_query($con,"select * from tbl_products where id = '3'  ");
                                $len=mysqli_num_rows($dataset);
                                   if ($len>0) {
                                     while ($row= mysqli_fetch_array($dataset)) {
                                      echo "<img style='height:500px;width:600px' src= 'images/".$row[3]."'  />";

                                           }
                                         }

                                     }
                                     if (isset($_POST['light'])) {
                                       $con= mysqli_connect('localhost','root','','object_db');
                                       $dataset=  mysqli_query($con,"select * from tbl_products where id = '4'  ");
                                       $len=mysqli_num_rows($dataset);
                                          if ($len>0) {
                                            while ($row= mysqli_fetch_array($dataset)) {
                                             echo "<img style='height:500px;width:600px' src= 'images/".$row[3]."'  />";

                                                  }
                                                }
                                              }
                                  if (isset($_POST['printer'])) {
                                    $con= mysqli_connect('localhost','root','','object_db');
                                    $dataset=  mysqli_query($con,"select * from tbl_products where id = '5'  ");
                                    $len=mysqli_num_rows($dataset);
                                       if ($len>0) {
                                         while ($row= mysqli_fetch_array($dataset)) {
                                          echo "<img style='height:500px;width:600px' src= 'images/".$row[3]."'  />";

                                               }
                                             }
                                           }
                                   if (isset($_POST['car'])) {
                                     $con= mysqli_connect('localhost','root','','object_db');
                                     $dataset=  mysqli_query($con,"select * from tbl_products where id = '6'  ");
                                     $len=mysqli_num_rows($dataset);
                                        if ($len>0) {
                                          while ($row= mysqli_fetch_array($dataset)) {
                                           echo "<img style='height:500px;width:600px' src= 'images/".$row[3]."'  />";

                                                }
                                              }
                                            }
                                    if (isset($_POST['cpu'])) {
                                      $con= mysqli_connect('localhost','root','','object_db');
                                      $dataset=  mysqli_query($con,"select * from tbl_products where id = '7'  ");
                                      $len=mysqli_num_rows($dataset);
                                         if ($len>0) {
                                           while ($row= mysqli_fetch_array($dataset)) {
                                            echo "<img style='height:500px;width:600px' src= 'images/".$row[3]."'  />";

                                                 }
                                               }
                                             }
                                     if (isset($_POST['iphone'])) {
                                       $con= mysqli_connect('localhost','root','','object_db');
                                       $dataset=  mysqli_query($con,"select * from tbl_products where id = '8'  ");
                                       $len=mysqli_num_rows($dataset);
                                          if ($len>0) {
                                            while ($row= mysqli_fetch_array($dataset)) {
                                             echo "<img style='height:500px;width:600px' src= 'images/".$row[3]."'  />";

                                                  }
                                                }
                                              }
                                      if (isset($_POST['laptop'])) {
                                        $con= mysqli_connect('localhost','root','','object_db');
                                        $dataset=  mysqli_query($con,"select * from tbl_products where id = '9'  ");
                                        $len=mysqli_num_rows($dataset);
                                           if ($len>0) {
                                             while ($row= mysqli_fetch_array($dataset)) {
                                              echo "<img style='height:500px;width:600px' src= 'images/".$row[3]."'  />";

                                                   }
                                                 }
                                               }
           ?>


        </div>
        <div class="col-md-5 bg-success"  style="height:auto">
          <?php
            if (isset($_POST['mboard'])) {
              $con= mysqli_connect('localhost','root','','object_db');
              $dataset=  mysqli_query($con,"select * from tbl_products where id = '1'  ");
              include("addCart.php");
                     }
                     if (isset($_POST['headphone'])) {
                       $con= mysqli_connect('localhost','root','','object_db');
                       $dataset=  mysqli_query($con,"select * from tbl_products where id = '2'  ");
                       $len=mysqli_num_rows($dataset);
                          include("addCart.php");
                              }
                          if (isset($_POST['lcd'])) {
                            $con= mysqli_connect('localhost','root','','object_db');
                            $dataset=  mysqli_query($con,"select * from tbl_products where id = '3'  ");
                            $len=mysqli_num_rows($dataset);
                               include("addCart.php");
                                   }
                               if (isset($_POST['light'])) {
                                 $con= mysqli_connect('localhost','root','','object_db');
                                 $dataset=  mysqli_query($con,"select * from tbl_products where id = '4'  ");
                                 include("addCart.php");
                                                        }
                              if (isset($_POST['printer'])) {
                                $con= mysqli_connect('localhost','root','','object_db');
                                $dataset=  mysqli_query($con,"select * from tbl_products where id = '5'  ");
                                include("addCart.php");
                                       }
                          if (isset($_POST['car'])) {
                           $con= mysqli_connect('localhost','root','','object_db');
                           $dataset=  mysqli_query($con,"select * from tbl_products where id = '6'  ");
                           include("addCart.php");
                                  }
                              if (isset($_POST['cpu'])) {
                                $con= mysqli_connect('localhost','root','','object_db');
                                $dataset=  mysqli_query($con,"select * from tbl_products where id = '7'  ");
                                include("addCart.php");
                                       }
                               if (isset($_POST['iphone'])) {
                                 $con= mysqli_connect('localhost','root','','object_db');
                                 $dataset=  mysqli_query($con,"select * from tbl_products where id = '8'  ");

                                    include("addCart.php");
                                      }
                                if (isset($_POST['laptop'])) {
                                  $con= mysqli_connect('localhost','root','','object_db');
                                  $dataset=  mysqli_query($con,"select * from tbl_products where id = '9'  ");

                                     include("addCart.php");
                                         }
           ?>
           <form action='cart.php' method='post'><input  type='submit' value='Add Cart' name='addcart' class='btn btn-success' /></form>
        </div>
      </div>
    </div>

  </body>
</html>
