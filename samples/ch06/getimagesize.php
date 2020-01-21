<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $size = getimagesize("images/pic1.jpg");
      echo "圖片寬度：$size[0]<br>";
      echo "圖片高度：$size[1]<br>";
      echo "圖片格式：$size[2]<br>";            
      echo "圖片長寬字串：$size[3]";      
    ?>
  </body>
</html>
