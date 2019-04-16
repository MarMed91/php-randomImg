<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php

  $myArr = [];
  $myArr[] = "https://3.bp.blogspot.com/-WIpQSkxtQ98/VxrtTdEfFDI/AAAAAAAApaA/II4ioBnXWkYFOAobY0GogcpCeK0pqTjZQCLcB/s1600/Galeria-Vittorio-Emanuele-Milao-Italia.jpg";
  $myArr[] = "https://upload.wikimedia.org/wikipedia/commons/e/e1/Milano_Italy_Duomo-Milan-01.jpg";
  $myArr[] = "https://s2.glbimg.com/dYy0gGd5_6U-ZW4R8rWFA3rgwSg=/620x430/e.glbimg.com/og/ed/f/original/2015/10/08/duomo.jpg";
  $myArr[] = "https://www.edreams.pt/blog/wp-content/uploads/sites/4/2018/02/vista-a%C3%A9rea-de-mil%C3%A3o-it%C3%A1lia.jpg";
  $myArr[] = "https://abrilviagemeturismo.files.wordpress.com/2018/03/galleria-vittorio.jpg?quality=70&strip=info&w=668&strip=info";

  $randomInd = rand(0, count($myArr));
  $url = $myArr[$randomInd];

  foreach ($myArr as $key1 => $value1) {
    echo "<img src=\"$url\"/>";
  }
 ?>
  </body>
</html>
