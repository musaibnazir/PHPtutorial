<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $color='blue';
    switch ($color) {
      case 'red':
        echo "Your Fav color is red";
        break;
      case 'blue':
        echo "Your Fav color is blue";
        break;
      case 'yellow':
        echo "Your Fav color is yellow";
        break;
      default:
        echo "You dont have a fav color";
        break;
    }
    ?>
  </body>
</html>
