<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form enctype="multipart/form-data" method="post">
      <span>update File</span><br>
      <input type="file" name="upfile"><br>
      <input type="submit" name="subbtn" >
      <?php
      if (isset($_POST['subbtn'])) {
        $source=$_FILES['upfile']['tmp_name'];
        $dest='update/'.$_FILES['upfile']['name'];
        move_uploaded_file($source,$dest);
        echo "File Upload";
      }



       ?>
    </form>
  </body>
</html>
