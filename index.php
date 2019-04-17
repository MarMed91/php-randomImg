<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php

function randImg() {

  include "index2.php";

  $randomInd = rand(0, count($myArr));
  $url = $myArr[$randomInd];

  echo "<img src=\"$url\"/>";
}

randImg();

 ?>
  </body>
</html>
