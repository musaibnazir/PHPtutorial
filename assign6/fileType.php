<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Generating Rand Num</title>
  </head>
  <body>
    <form method="post" enctype="multipart/form-data">
      <span>Update File</span> <br>
      <input type="file" name="upfile" > <br>
      <input type="submit" name="subbtn">
    </form>

    <?php
    if (isset($_POST['subbtn'])) {
      $source=$_FILES['upfile']['tmp_name'];
      $filename= rand(100,9999).date('dmY').rand().$_FILES['upfile']['name'];
      $dest='uploads/'.$filename;

      $type=$_FILES['upfile']['type'];
      if ($type=='image/jpeg' || $type=='image/jpg' || $type=='image/png' ) {
        move_uploaded_file($source,$dest);
        echo "File Uploded Success";
      }
    }
     ?>
  </body>
</html>
