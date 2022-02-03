<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cart</title>
    <script type="text/javascript">
      function fun(){
        a= document.getElementById('ss1').value;
        b=12;
        c=a + b;
        d=document.getElementById('s1');
        d.value = c;
      }
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">LOGO</a>
      </div>
      <ul class="nav navbar-nav">
        <li > <a href="main.php">Products</a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-center"style="margin-top:8px;margin-left:400px">
        <li > <input type="text" name="" value=""> </li>
        <li ><input type="submit" name="" value="Search" class="btn btn-success"> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right"style="padding-right:10px">
        <li  class="active" > <a href="cart.php">Cart</a></li>
        <li > <a href="logout.php">Logout</a></li>
      </ul>
          </div>
    </nav>

    <div class="container" style="margin-top:100px">
      <div class="row">

        <div class="col-md-8 bg-success"  style="height:auto">
          <div class="row">
            <div class="col-md-8">
              <h1>My Cart</h1>
              <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                  <h5>Name</h5>
                </div>
                <div class="col-md-3">
                  <h5>Price</h5>
                </div>
                <div class="col-md-3">
                  <h5>Quantity</h5>
                </div>
              </div>
              <?php
              if (isset($_POST['addcart']) || isset($_POST['addcart'])) {
                $con= mysqli_connect('localhost','root','','object_db');
                $dataset=  mysqli_query($con,"select * from tbl_products where id = '1' ");
                $len=mysqli_num_rows($dataset);
                   if ($len>0) {
                     while ($row= mysqli_fetch_array($dataset)) {
                       echo "<div class='row'>
                         <div class='col-md-3'>
                          <img src='images/".$row[3]."' class=' img-circle' height='100px' width='100px' />
                         </div>
                         <div class='col-md-3'>
                           <p> ".$row[1]." </p>
                         </div>
                         <div class='col-md-3'>
                           <p>Rs.".$row[4]."</p>
                         </div>
                         <div class='col-md-3'>
                         <select >
                           <option id='ss1' value='1' >1</option>
                           <option >2</option>
                           <option >3</option>
                           <option >4</option>
                         </select>
                         </div>
                       </div>";
                           }
                         }
                       }
               ?>
            </div>
          </div>
        </div>
        <div class="col.md-4 bg-warning">
          <div class="row">
            <div class="col-md-2" onload="fun()">
              <h2>Cart Total</h2>
              <p>Subtotal:</p>
              <p>delivery:</p>
              <p> <b>Total:</b> </p>
            </div>
            <div class="col-md-2">
              <span id="s1"> </span>
              <span id="s2"></span>
              <span id="s3"></span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
