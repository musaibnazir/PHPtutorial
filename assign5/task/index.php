<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Passengers</title>
    <script>
      function add(){
        a=document.getElementById('form');
        a.appendChild(document.createElement('br'));

        b=document.createElement('input');
        b.setAttribute('type','text');
        b.setAttribute('name','txtname[]');
        b.setAttribute('placeholder','Enter Name');
        a.appendChild(b);

        i++;
      }
    </script>
  </head>
  <body>
    <form id="form">
      <input type="text" name="txtname[]" placeholder="Enter Name">
      <input type="button" onclick="add()" value="Add more"><input type="submit" name="subbtn">
    </form>


    <?php
    if (isset($_GET['subbtn'])) {
      $items=$_GET['txtname'];
      echo "Your list of passengers is:";
      foreach ($items as $a) {
        echo "<br>".$a;
      }
    }
    ?>
  </body>
</html>
