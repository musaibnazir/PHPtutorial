<?php
$str= fopen('editor.txt','r');
$t= fread($str,filesize('editor.txt'));
echo "$t";
 ?>
