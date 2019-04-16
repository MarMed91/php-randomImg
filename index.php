<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php

  $myArr = [];
  $myArr[] = "https://www.google.com/search?q=milano&safe=active&source=lnms&tbm=isch&sa=X&ved=0ahUKEwj9sLeP0tThAhVGqxoKHYAgAvkQ_AUIDigB&biw=1366&bih=608#imgrc=Fkh8Fa70lUBQ6M:";
  $myArr[] = "https://www.google.com/search?q=milano&safe=active&source=lnms&tbm=isch&sa=X&ved=0ahUKEwj9sLeP0tThAhVGqxoKHYAgAvkQ_AUIDigB&biw=1366&bih=608#imgrc=AZ1N4T5MTdI-4M:";
  $myArr[] = "https://www.google.com/search?q=milano&safe=active&source=lnms&tbm=isch&sa=X&ved=0ahUKEwj9sLeP0tThAhVGqxoKHYAgAvkQ_AUIDigB&biw=1366&bih=608#imgrc=PYnECWyXpAYwEM:";
  $myArr[] = "https://www.google.com/search?q=milano&safe=active&source=lnms&tbm=isch&sa=X&ved=0ahUKEwj9sLeP0tThAhVGqxoKHYAgAvkQ_AUIDigB&biw=1366&bih=608#imgrc=Q3a4Z8Vv9ZrK5M:";
  $myArr[] = "https://www.google.com/search?q=milano&safe=active&source=lnms&tbm=isch&sa=X&ved=0ahUKEwj9sLeP0tThAhVGqxoKHYAgAvkQ_AUIDigB&biw=1366&bih=608#imgrc=aid4Bk9yaag1-M:";

  $randomInd = rand(0, sizeof($myArr));
  $url = $myArr[$randomInd];

  echo $url;
 ?>
  </body>
</html>
