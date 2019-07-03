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

do {

  $randomInd = rand(0, count($arr)-1);
  $imgs = $arr[$randomInd];

  $path = $imgs["path"];
  $url = $imgs["url"];
  $isActive = $imgs["isActive"];

} while ($isActive);

  echo "<a href='$url'><img src='$path' alt=\"\"/></a>";
}
randImg();
 ?>
  </body>
</html>
