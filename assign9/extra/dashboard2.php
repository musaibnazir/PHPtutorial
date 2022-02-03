<?php
session_start();
if (!isset($_SESSION['myses']) || !isset($_COOKIE['mycook'])) {
  header('location:index2.php');
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="jquery.js"></script>
  </head>
  <body>
    <!--Header-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
          <div class="navbar-header">
            <a href="#" class="navbar-brand">My Dashboard</a>
          </div>
          <ul class="nav navbar-nav ">
            <li class="active"><a href="dashboard.php">DASHBOARD</a></li>
            <li ><a href="pictures.php">PICTURES</a></li>
            <li ><a href="blog.php">BLOG</a></li>
          </ul>
        </div>
    </nav>
    <!--body-->
    <div class="container-fluid bg-success"style="margin-top:50px">
      <div class="row">
        <div class="col-md-2" style="height:590px; background-color:grey ">
          <ul  class="nav nav-pills nav-stacked list-group" style="padding:-30px; margin:-10px; margin-top:5px; position:fixed; width:200px">
            <li class="list-group-item"><a href="pictures.php">Upload Images</a></li>
            <li class="list-group-item"><a href="blog.php">Upload Blog</a></li>
            <li class="list-group-item"><a href="logout.php">Logout</a></li>

          </ul>
        </div>
        <div class="col-md-10" style="height:590px; background-color:orange">
          <div class="col-md-12" style="margin-top:10px" id="upload">
              <form method="post" enctype="multipart/form-data">
                <div class="panel">
                  <div class="panel-header">
                    <h3 style="margin-left:10px" class="text-left">Upload Your Images Files</h3>
                  </div>
                  <div class="panel-body">
                    <input type="file" multiple name="imgfile[]"> <br>
                    <input class="btn btn-primary" type="submit" name="subbtn" value="Upload">
                  </div>
                </div>
              </form>
          </div>

          <div class="col-md-12" style="margin-top:10px"id="blog" >
              <form method="post">
                <div class="panel">
                  <div class="panel-header">
                    <h3 style="margin-left:10px" class="text-left">Upload Your BLOG !</h3>
                  </div>
                  <div class="panel-body">
                    <input type="text" class="form-control" name="file"> <br>
                    <input class="btn btn-primary" type="submit" name="subbtn1" value="Upload">
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script>
    $('#upload').hide();
    $('#up').click(function(){
      $('#upload').show();
    })
    $('#blog').hide();
    $('#blg').click(function(){
      $('#blog').show();
    })
  </script>
</html>
