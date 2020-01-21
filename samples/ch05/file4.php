<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $file = scandir("C:\\wamp", 1);
      foreach($file as $value)
        if ($value != "." && $value != "..") echo $value . " ";
    ?> 
  </body>
</html>
