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
    <title>Code editor</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="jquery.js"></script>
  </head>
  <body>
<!--Header-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
              <div class="navbar-header">
                <a href="#" class="navbar-brand">Code Editor</a>
              </div>
              <ul class="nav navbar-nav">
                <li ><a href="dashboard.php">DASHBOARD</a></li>
                <li ><a href="pictures.php">PICTURES</a></li>
                <li ><a href="blog.php">BLOG</a></li>
                <li class="active"><a href="editor.php">CODE EDITOR</a></li>

              </ul>
            </div>
        </nav>
        <!--body-->
        <div class="container-fluid bg-success"style="margin-top:50px">
          <div class="row">
            <div class="col-md-2" style="height:635px; background-color:darkgrey">
              <ul class="nav nav-pills nav-stacked list-group" style="padding:-30px; margin:-10px; margin-top:5px; position:fixed; width:200px">
                <li class="list-group-item"><a href="logout.php">Logout</a></li>

              </ul>
            </div>
            <div class="col-md-10" style="height:auto; background-color:lightblue">
              <div class="col-md-12" style="margin-top:10px" >
                <div class="panel">
                  <div class="panel-header">
                    <h1>My Code Editor</h1>
                  </div>
                </div>
              </div>

              <div class="col-md-12" style="margin-top:10px" >
                <div class="row">
                  <div class="col-md-6 ">
                    <p>Type your code Here :</p>
                    <form  method="post">
                      <input class="btn bt-primary" type="submit" name="subbtn2" value="Check-Code" style="position:absolute;top:-5px; left:390px">
                      <textarea  style="width:100%;height:480px" name="txtvalue"><?php
                      if (isset($_POST['subbtn2'])) {
                        $text=$_POST['txtvalue'];
                        $stream=fopen('editor.txt','w');
                        fwrite($stream,$text);
                      }

                       ?></textarea>
                    </form>
                  </div>
                  <div class="col-md-6">
                    <p>Page Viewer :<p>
                    <iframe src="editor_base.php" width="100%" height="480px"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </body>
</html>
