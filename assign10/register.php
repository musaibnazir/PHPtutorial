<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>

    <div class="container">
      <div class="col-md-6" style="margin-left:300px; margin-top:150px">
        <div class="panel" style="border:1px solid black">
          <div class="panel-header bg-primary" style="padding:10px">
            <span>Register</span>
          </div>
          <div class="panel-body">
            <form  method="post">
              <div class="form-group">
                <label> Username</label>
                <input class="form-control" type="text" name="txtuser" placeholder="example">
              </div>
              <div class="form-group">
                <label> Email</label>
                <input class="form-control" type="email" name="txtemail" placeholder="example@example.com">
              </div>
              <div class="form-group">
                <label> Password</label>
                <input class="form-control" type="password" name="txtpswd">
              </div>
              <div class="form-group">
                <label> Confirm Password</label>
                <input class="form-control"name="txtcpswd" type="password">
              </div>
              <div class="form-group">
                <label> Address</label>
                <input class="form-control" type="text" name="txtadd">
              </div>
              <div class="form-group">
                <input type="checkbox" name="check">I Agree Terms and Conditions <br><br>
                <input class="btn btn-primary" type="submit" name="btnsub" value="Login">
              </div>
              <div class="form-group">
                <p>Already Registered . Click <a href='login.php'>here</a> to Login.</p>
              </div>
              <?php
                  if (isset($_POST['btnsub'])) {
                    if (isset($_POST['check'])) {
                      $user = $_POST['txtuser'];
                      $email= $_POST['txtemail'];
                      $pswd = $_POST['txtpswd'];
                      $cpswd = $_POST['txtcpswd'];
                      $add = $_POST['txtadd'];
                      if ($pswd == $cpswd) {
                        include('authenticate.php');
                        $lg = new Register();
                        $lg -> getRegister($user,$email,$pswd,$add);
                        echo $lg -> msg;
                      }
                      else {
                        echo "Password Doesnt Match";
                      }
                    }
                    else {
                      echo "Please Agree our Terms and conditions";
                    }
                }

               ?>
            </form>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
