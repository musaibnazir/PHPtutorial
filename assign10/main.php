<?php
session_start();
if (!(isset($_SESSION['lgn']) || !isset($_COOKIE['lgn']))) {
    header('location:login.php');
  }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ShopProucts</title>
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


    <div class="container">
      <div class="col-md-12 " style="height:300px; margin-top:60px;background-image:url('images/banner.png');background-size:contain">

      </div>
      <div class="col-md-12 " style="text-align:center">
        <h1>Our Products</h1>
        <p>sdhks dkndskn  skndk ksnkdsk ksdkm  sdkmlmsdlml sdmmlsmdml l</p>
        <form action="product.php" method="post">
        <div class="row bg-info" style="height:auto">
          <div class="col-md-4">
            <img src="images/2.jpg" style="width:280px;height:270px"> <br> <input class="btn btn-success" type="submit" name="mboard" value="Detail">
          </div>
          <div class="col-md-4">
            <img src="images/3.jpeg" style="width:280px;height:270px"> <br><input class="btn btn-success" type="submit" name="headphone" value="Detail">
          </div>
          <div class="col-md-4">
            <img src="images/4.jpg" style="width:280px;height:270px"> <br><input class="btn btn-success" type="submit" name="lcd" value="Detail">
          </div>
        </div>

        <div class="row bg-danger" style="height:auto">

          <div class="col-md-4">
              <img src="images/5.jpg" style="width:280px;height:270px"><br><input class="btn btn-success" type="submit" name="light" value="Detail">
            </div>
          <div class="col-md-4">
              <img src="images/6.jpg" style="width:280px;height:270px"><br><input class="btn btn-success" type="submit" name="printer" value="Detail">
            </div>

          <div class="col-md-4">
              <img src="images/7.png" style="width:280px;height:270px"><br><input class="btn btn-success" type="submit" name="car" value="Detail">
            </div>
        </div>

        <div class="row bg-warning" style="height:auto">
        <div class="col-md-4">
            <img src="images/8.jpeg" style="width:280px;height:270px"><br><input class="btn btn-success" type="submit" name="cpu" value="Detail">
          </div>
        <div class="col-md-4">
            <img src="images/9.jpg" style="width:280px;height:270px"><br><input class="btn btn-success" type="submit" name="iphone" value="Detail">
          </div>
        <div class="col-md-4">
            <img src="images/10.jpg" style="width:280px;height:270px"><br><input class="btn btn-success" type="submit" name="laptop" value="Detail">
          </div>
        </div>
        </form>
      </div>

      <div class="col-md-12" style="height:200px; background-color:#f8f8f8; text-align:center;margin-top:50px">
        <h3>This is Footer title</h3>
        <p>copyright area</p>
      </div>

    </div>

  </body>
</html>
