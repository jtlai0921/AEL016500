<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>建立資料連接</title>
  </head>
  <body>
    <?php
      $link = mysqli_connect("localhost", "root", "mypassword") or die("無法建立連接");
      echo "成功建立連接";
    ?> 
  </body>
</html>