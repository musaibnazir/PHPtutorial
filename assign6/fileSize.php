<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>File Size</title>
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
       $filename=rand().date('dmY').rand().$_FILES['update']['name'];
       $dest='uploads/'.$filename;
       $size=$_FILES['upfile']['size'];
       $size=$size/1024/1024;
       if ($size=true) {
         move_uploaded_file($source,$dest);
         echo "File Uploaded!!!";
       }else {
         echo "File Size Exceeds";
       }
     }
     ?>
  </body>
</html>
