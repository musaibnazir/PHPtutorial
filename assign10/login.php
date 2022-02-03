<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>

    <div class="container">
      <div class="col-md-6" style="margin-left:300px; margin-top:250px">
        <div class="panel" style="border:1px solid black">
          <div class="panel-header bg-primary" style="padding:10px">
            <span>Login</span>
          </div>
          <div class="panel-body">
            <form  method="post">
              <div class="form-group">
                <label> Email</label>
                <input class="form-control" type="email" name="txtemail" placeholder="example@example.com">
              </div>
              <div class="form-group">
                <label> Password</label>
                <input class="form-control" type="password" name="txtpswd" placeholder="example@example.com">
              </div>
              <div class="form-group">
                <input type="checkbox" name="txtcheck" >Remember Me
              </div>
              <div class="form-group">
                <input class="btn btn-primary" type="submit" name="btnsub" value="Login">
              </div>
              <div class="form-group">
                <p>New User . Click <a href='register.php'>here</a> to Register.</p>
              </div>

              <?php
                  if (isset($_POST['btnsub'])) {
                  $email= $_POST['txtemail'];
                  $pswd = $_POST['txtpswd'];
                  $check= $_POST['txtcheck'];

                  if (isset($check)) {
                    setcookie('lgn',$email,time()+120);
                    include('authenticate.php');
                    $lg = new login();
                    $lg -> getAuthenticate($email,$pswd);
                    echo $lg -> msg;
                    header('location:main.php');
                  }
                  else {
                    session_start();
                    $_SESSION['lgn']=$email;
                    include('authenticate.php');
                    $lg = new login();
                    $lg -> getAuthenticate($email,$pswd);
                    echo $lg -> msg;
                    header('location:main.php');
                  }
                }
                else {
                  echo "Error";
                }
               ?>
            </form>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
