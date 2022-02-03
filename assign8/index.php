<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-fluid  bg-success">
      <div class="container  bg-info">
        <div class="row">
          <div class="col-md-6" style="background-color:blue; height: 100px">

          </div>
          <div class="col-md-6" style="background-color:green; height: 100px">

          </div>
        </div>

        <div class="row">
          <div class="col-md-12" style="background-color:lightyellow; height:700px">
            <div class="jumbotron bg-success">
              <h1>Login Page</h1>
            </div>
            <div style="width:500px; height: 400px; margin-left:300px; margin-top:100px">
              <form enctype="multipart/form-data" method="post">
                <input type="email" name="user" placeholder="Enter Username" class="form-control"><br>
                <input type="password" name="pass" placeholder="Enter Password" class="form-control"><br>
                <input type="submit" name="subbtn" class="btn btn-primary" style="margin-left:200px" >
              </form>
              <?php
              if (isset($_POST['subbtn'])) {
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                if ($user=='musaib@gmail.com' && $pass=='musaib') {
                  header('location:gallery.php');
                }
                else {
                  echo "Error: Wrong Username/Password";
                }
              }
              ?>
            </div>
          </div>
        </div>

      </div>
    </div>

  </body>
</html>
