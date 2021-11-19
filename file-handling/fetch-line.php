<?php
$file = fopen("test.txt","r");

while(! feof($file))
  {
  echo fgets($file). "<br />";
  }

fclose($file);
?>