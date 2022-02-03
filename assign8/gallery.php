<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
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
              <h1>Gallery</h1>
            </div>
            <form enctype="multipart/form-data"  method="post">
              <span>Upload Pics</span><br>
              <input type="file" multiple name="upfile[]"><br>
              <input type="submit" name="subbtn">
            </form>
            <div class="Gallery" >
              <?php
              if (isset($_POST['subbtn'])) {
                $len=count($_FILES['upfile']['tmp_name']);
                for ($i=0; $i < $len ; $i++) {
                  $source=$_FILES['upfile']['tmp_name'][$i];
                  $dest='upload/'.$_FILES['upfile']['name'][$i];
                  move_uploaded_file($source,$dest);
                  echo "<img src=$dest style=height:150px>";
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
