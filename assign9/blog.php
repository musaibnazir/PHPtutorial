<?php
  session_start();
  if (!isset($_SESSION['mysess']) || !isset($_COOKIE['mycook'])) {
    header('location:index.php');
  }
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pictures</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="jquery.js"></script>
  </head>
  <body>
<!--Header-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
              <div class="navbar-header">
                <a href="#" class="navbar-brand">My BLOG</a>
              </div>
              <ul class="nav navbar-nav">
                <li ><a href="dashboard.php">DASHBOARD</a></li>
                <li ><a href="pictures.php">PICTURES</a></li>
                <li class="active"><a href="blog.php">BLOG</a></li>
                <li ><a href="editor.php">CODE EDITOR</a></li>
              </ul>
            </div>
        </nav>
        <!--body-->
        <div class="container-fluid bg-success"style="margin-top:50px">
          <div class="row">
            <div class="col-md-2" style="height:590px; background-color:darkgrey">
              <ul class="nav nav-pills nav-stacked list-group" style="padding:-30px; margin:-10px; margin-top:5px; position:fixed; width:200px">
                <li class="list-group-item"><a href="logout.php">Logout</a></li>

              </ul>
            </div>
            <div class="col-md-10" style="height:auto; background-color:lightblue">
              <div class="col-md-12" style="margin-top:10px" >
                <div class="panel">
                  <div class="panel-header">
                    <h1>My Blog</h1>
                  </div>
                </div>
              </div>

              <div class="col-md-12" style="margin-top:10px" >
                <?php
                $str=fopen('blogfile.txt','r');
                $t=fread($str,filesize('blogfile.txt'));
                echo $t;
                 ?>
              </div>
            </div>
          </div>
        </div>
  </body>
</html>
