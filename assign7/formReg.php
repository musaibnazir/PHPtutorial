<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container bg-success" style="padding:50px; border:1px solid green">
      <div class="col-md-12">
        <div class="page-header">
          <h3>Registration Form</h3>
        </div>
        <form method="post" enctype="multipart/form-data">
          <input type="text"  name="valu[]" required  class="form-control" placeholder="Enter Your Name"><br>
          <input type="email" name="valu[]" required class="form-control" placeholder="Enter Your Email Id"><br>
          <input type="text"  name="valu[]" required class="form-control" placeholder="Enter Your Address"><br>
          <input type="tel"   name="valu[]" required class="form-control" placeholder="Enter Your Contact"><br>
            <span>Update Resume</span>
            <input type="file" name="upfile" required ><br>
            <p>* Image Format: Image/Pdf</p>
          <input type="checkbox" name="check" >submit to server <br><br>
          <input class="btn btn-primary"  type="submit" name="subbtn" value="Submit Form">
        </form>
      </div>
    </div>

    <div class="container">
      <?php
      if (isset($_POST['subbtn'])) {
        $input=$_POST['valu'];
        $check=$_POST['check'];
        if ($check) {
          foreach ($input as $a) {
            echo $a.'<br>';
          }
        }else {
          echo "Please check the submit <br> ";
        }
        $source=$_FILES['upfile']['tmp_name'];
        $filename=rand().date('dmY').rand().$_FILES['upfile']['name'];
        $dest='upload/'.$filename;
        $type=$_FILES['upfile']['type'];
        if ($type=='image/jpeg' || $type=='image/jpg' || $type=='application/pdf'  ) {
          move_uploaded_file($source,$dest);
          echo "File Uploaded";
        }else {
          echo "File not supported";
        }
      }
       ?>
    </div>

  </body>
</html>
