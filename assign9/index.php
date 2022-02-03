<?php
session_start();
session_destroy();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>
    <!--Header-->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="container">
          <div class="navbar-header">
            <a href="#" class="navbar-brand">My Login Page</a>
          </div>
        </div>
      </div>
    </nav>
    <!--Body-->
    <div class="container">
      <div class="page-header">
        <h1>My Login Page</h1>
      </div>
      <form method="post">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="txtemail" class="form-control">
        </div>
        <div class="form-group">
          <label for="pswd">Password:</label>
          <input type="password" name="txtpswd" class="form-control">
        </div>
        <input type="checkbox" name="check">Keep me logged in <br> <br>
        <input type="submit" name="subbtn" value="Login" class="form-control btn-primary">
      </form>
      <?php
      if (isset($_POST['subbtn'])) {
        $name=$_POST['txtemail'];
        $pass=$_POST['txtpswd'];
        if ($name=='musaib@gmail.com' && $pass == 'musaib') {
          session_start();
          $_SESSION['mysess']=$name;
          header('location:dashboard.php');
          if (isset($_POST['check'])) {
            setcookie('mycook',$name,time()+60*60);
            header('location:dashboard.php');
          }
        }else {
          echo "Please check ur Email/Password... and try again";
        }
      }


       ?>
    </div>
  </body>
</html>
